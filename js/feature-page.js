// Dropdown functionality for .sp-nav-button-dropdown
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.sp-nav-button-dropdown').forEach(function(dropdown) {
        var button = dropdown.querySelector('.sp-nav-button');
        var menu = dropdown.querySelector('.main-dropdown-menu');
        // Ensure dropdown is hidden by default
        dropdown.classList.remove('open');
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            // Close any other open dropdowns
            document.querySelectorAll('.sp-nav-button-dropdown.open').forEach(function(openDropdown) {
                if (openDropdown !== dropdown) openDropdown.classList.remove('open');
            });
            dropdown.classList.toggle('open');
        });
    });

    // Close dropdown if clicking outside
    document.addEventListener('click', function(e) {
        document.querySelectorAll('.sp-nav-button-dropdown.open').forEach(function(openDropdown) {
            if (!openDropdown.contains(e.target)) {
                openDropdown.classList.remove('open');
            }
        });
    });
});

// Toggle navs back to docked state
function toggleFeaturePageNavs() {
    var featureSectionNavsDocked = document.getElementById('feature-section-navs-docked');
    var featureSectionNavsOpened = document.getElementById('feature-section-navs-opened');
    var webGLdocked = document.getElementById('webGL-aside-docked');
    var webGLopened = document.getElementById('webGL-aside-opened');
    var linkedContentDocked = document.getElementById('linked-content-nav-docked');
    var linkedContentOpened = document.getElementById('linked-content-nav-opened');

    // Show docked, hide opened
    featureSectionNavsDocked.style.display = '';
    webGLdocked.style.display = '';
    linkedContentDocked.style.display = '';

    featureSectionNavsOpened.style.display = 'none';
    webGLopened.style.display = 'none';
    linkedContentOpened.style.display = 'none';
}
// Wrap all code in DOMContentLoaded to ensure the DOM is fully loaded before accessing elements
document.addEventListener('DOMContentLoaded', function() {
    var featureSectionNavsDocked = document.getElementById('feature-section-navs-docked');
    var featureSectionNavsOpened = document.getElementById('feature-section-navs-opened');
    var webGLdocked = document.getElementById('webGL-aside-docked'); // This doubles as a button to open the asides
    var webGLopened = document.getElementById('webGL-aside-opened');
    var linkedContentDocked = document.getElementById('linked-content-nav-docked'); // This doubles as a button to open the asides
    var linkedContentOpened = document.getElementById('linked-content-nav-opened');
    var linkedContentCloseBtn = document.getElementById('lc-nav-close-btn'); // This is the button to close the asides

    // Functionality for opening asides (1 of 2)
    webGLdocked.onclick = function() {
        // Hide the docked asides
        featureSectionNavsDocked.style.display = 'none';
        webGLdocked.style.display = 'none';
        linkedContentDocked.style.display = 'none';
        // Show the opened asides
        featureSectionNavsOpened.style.display = 'block';
        webGLopened.style.display = 'block';
        linkedContentOpened.style.display = 'flex';
    };
    // Functionality for opening asides (2 of 2)
    linkedContentDocked.onclick = function() {
        // Hide the docked asides
        featureSectionNavsDocked.style.display = 'none';
        webGLdocked.style.display = 'none';
        linkedContentDocked.style.display = 'none';
        // Show the opened asides
        featureSectionNavsOpened.style.display = 'block';
        webGLopened.style.display = 'block';
        linkedContentOpened.style.display = 'flex';
    };

    // (chi-nav dropdown code removed as sp-nav-button-dropdown is now used)
});


// Function to fetch data from the backend and update the progress bar for fundraising campaign status
function updateProgressBar() {
    // In a real application, you would use fetch() to get data from your database endpoint
    // Example: fetch('/api/progress') 
    // .then(response => response.json())
    // .then(data => {
    //     const percentage = data.percentage; 
    //     // Update UI with the retrieved percentage
    // });

    // Mocking a database query result (replace with actual fetch logic)
    const mockDatabaseValue = Math.floor(Math.random() * 100) + 1; // Generates a random value between 1 and 100
    const percentage = mockDatabaseValue; 

    const progressBar = document.getElementById("funding-progress-bar");
    const progressLabel = document.getElementById("funding-progress-label");

    if (progressBar && progressLabel) {
        progressBar.style.width = percentage + "%";
        progressLabel.textContent = percentage + "%";
    }
}

// Initial call to set the bar level
updateProgressBar();
// Optionally, update the bar at regular intervals for live status (e.g., data loading)
// setInterval(updateProgressBar, 5000); // Updates every 5 seconds

// Function to fetch data from the backend and update the progress bar for fundraising campaign status
function updateProgressBar2() {
    // In a real application, you would use fetch() to get data from your database endpoint
    // Example: fetch('/api/progress') 
    // .then(response => response.json())
    // .then(data => {
    //     const percentage = data.percentage; 
    //     // Update UI with the retrieved percentage
    // });

    // Mocking a database query result (replace with actual fetch logic)
    const mockDatabaseValue = Math.floor(Math.random() * 100) + 1; // Generates a random value between 1 and 100
    const percentage = mockDatabaseValue; 

    const progressBar = document.getElementById("funding-progress-bar2");
    const progressLabel = document.getElementById("funding-progress-label2");

    if (progressBar && progressLabel) {
        progressBar.style.width = percentage + "%";
        progressLabel.textContent = percentage + "%";
    }
}

// Initial call to set the bar level
updateProgressBar2();
// Optionally, update the bar at regular intervals for live status (e.g., data loading)
// setInterval(updateProgressBar, 5000); // Updates every 5 seconds