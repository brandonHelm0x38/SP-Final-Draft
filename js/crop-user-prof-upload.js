// Cache Buster function to support RESTful Refreshing the User Profile Picture after upload...
// REMOVE THIS FOR TESTING...
document.addEventListener('DOMContentLoaded', (event) => {
    const imgElement = document.getElementById('current-image');
    if (imgElement) {
        // Get the current source URL
        let imageUrl = imgElement.src;

        // Append a unique timestamp as a query parameter to force a fresh download
        // This ensures the browser treats the URL as new every time
        const cacheBuster = Date.now();
        const newImageUrl = `${imageUrl}?v=${cacheBuster}`;

        // Set the new image source
        imgElement.src = newImageUrl;
    }
});

// Grab source image and crop function...
window.addEventListener('DOMContentLoaded', () => {

    const fileInput = document.getElementById('fileInput');
    const image = document.getElementById('image');
    const saveImgButton = document.getElementById('saveImgButton');

    let cropper;

    fileInput.addEventListener('change', (e) => {
        const files = e.target.files;
        if (files && files.length > 0) {
            const file = files[0];
            const reader = new FileReader();

            reader.onload = function (event) {
                // Set the image source for preview and Cropper.js
                image.src = event.target.result;
                
                // Initialize Cropper.js after the image is loaded
                if (cropper) {
                    cropper.destroy();
                }
                cropper = new Cropper(image, {
                    // Here's where you define the aspect ratio and view mode; view mode affects how the source image is displayed within the crop pane... 1 & 3 don't center the image in the pane.
                    aspectRatio: 3/4,
                    viewMode: 2,
                    ready: function () {
                        // Show the save button once Cropper is ready
                        saveImgButton.classList.remove('hidden');
                    },
                });
            };

            reader.readAsDataURL(file); // Use FileReader to read the file and create a data URL
        }
    });

    // Should work with my chache-buster function for immediate updates without a page refresh.
    async function updateImageNoCache() {
        // Get the latest profile pic filename from the server
        const response = await fetch('php-includes/get-profile-pic.php');
        const data = await response.json();
        if (data.filename) {
            console.log('JSON data:', data);
            const imgElement = document.getElementById('current-image');
            const imgResponse = await fetch('../../images/user-profile/' + data.filename, { cache: 'no-cache' });
            const blob = await imgResponse.blob();
            if (imgElement.src.startsWith('blob:')) {
                URL.revokeObjectURL(imgElement.src);
            }
            imgElement.src = URL.createObjectURL(blob);
        }
    }

    // Save Button and Img refresh functionality; Removed cropButton logic, saving is now direct...
    saveImgButton.addEventListener('click', () => {
        if (cropper) {
            // Script-defined target size; Must hard-code to maintain aspect ratio...
            const TARGET_WIDTH = 117; // Change as needed
            const TARGET_HEIGHT = 156; // Change as needed

            // Get the cropped canvas from Cropper.js
            const croppedCanvas = cropper.getCroppedCanvas();

            // Calculate new dimensions while maintaining aspect ratio
            let newWidth = TARGET_WIDTH;
            let newHeight = TARGET_HEIGHT;
            const aspectRatio = croppedCanvas.width / croppedCanvas.height;
            if (croppedCanvas.width / TARGET_WIDTH > croppedCanvas.height / TARGET_HEIGHT) {
                newHeight = Math.round(TARGET_WIDTH / aspectRatio);
            } else {
                newWidth = Math.round(TARGET_HEIGHT * aspectRatio);
            }

            // Create a hidden canvas for resizing
            const hiddenCanvas = document.createElement('canvas');
            hiddenCanvas.width = newWidth;
            hiddenCanvas.height = newHeight;
            const ctx = hiddenCanvas.getContext('2d');
            ctx.drawImage(croppedCanvas, 0, 0, newWidth, newHeight);

            hiddenCanvas.toBlob(function(blob) {
                const formData = new FormData();
                formData.append('croppedImage', blob, 'cropped.png');
                fetch('php-includes/upload-user-img.php', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Image saved to images folder as ' + data.filename);
                        updateImageNoCache();
                        image.src = '';
                        fileInput.value = '';
                        saveImgButton.classList.add('hidden');
                        cropper.destroy();
                        cropper = null;
                    } else {
                        alert('Image upload failed: ' + (data.error || 'Unknown error'));
                    }
                })
                .catch(error => {
                    console.error('Upload error:', error);
                    alert('Image upload failed.');
                });
            }, 'image/png');
        }
    });
});