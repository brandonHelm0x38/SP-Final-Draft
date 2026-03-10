// Sync newsletter carousel with detail divs
document.addEventListener('DOMContentLoaded', function() {
		// Close mobile navbar collapse when clicking outside
		document.addEventListener('click', function(event) {
			var navbarCollapse = document.getElementById('navbarNav');
			var navbarToggler = document.querySelector('.navbar-toggler');
			if (!navbarCollapse || !navbarToggler) return;
			var isOpen = navbarCollapse.classList.contains('show');
			// Only run on mobile (navbar-toggler is visible)
			var isMobile = window.getComputedStyle(navbarToggler).display !== 'none';
			if (isOpen && isMobile) {
				// If click is outside the navbar and toggler
				if (!navbarCollapse.contains(event.target) && !navbarToggler.contains(event.target)) {
					var collapseInstance = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);
					collapseInstance.hide();
				}
			}
		});
	// Close navbar dropdown when clicking outside
	document.addEventListener('click', function(event) {
		var dropdown = document.querySelector('.nav-item.dropdown');
		var menu = document.querySelector('.dropdown-menu');
		var toggle = document.getElementById('navbarDropdownMenuLink');
		if (!dropdown || !menu || !toggle) return;
		// If dropdown is open and click is outside
		if (menu.classList.contains('show')) {
			if (!dropdown.contains(event.target)) {
				// Bootstrap 5: use dropdown instance to hide
				var dropdownInstance = bootstrap.Dropdown.getOrCreateInstance(toggle);
				dropdownInstance.hide();
			}
		}
	});
	// Enhanced drag-to-scroll for categories-wrapper
	const catWrapper = document.querySelector('.categories-wrapper');
	if (catWrapper) {
		let isDown = false;
		let startX;
		let scrollLeft;
		catWrapper.addEventListener('mousedown', (e) => {
			isDown = true;
			catWrapper.classList.add('dragging');
			startX = e.pageX - catWrapper.offsetLeft;
			scrollLeft = catWrapper.scrollLeft;
		});
		catWrapper.addEventListener('mouseleave', () => {
			isDown = false;
			catWrapper.classList.remove('dragging');
		});
		catWrapper.addEventListener('mouseup', () => {
			isDown = false;
			catWrapper.classList.remove('dragging');
		});
		catWrapper.addEventListener('mousemove', (e) => {
			if (!isDown) return;
			e.preventDefault();
			const x = e.pageX - catWrapper.offsetLeft;
			const walk = (x - startX) * 1.5; // scroll-fast
			catWrapper.scrollLeft = scrollLeft - walk;
		});
		// Touch support for categories-wrapper.
		catWrapper.addEventListener('touchstart', (e) => {
			isDown = true;
			startX = e.touches[0].pageX - catWrapper.offsetLeft;
			scrollLeft = catWrapper.scrollLeft;
		});
		catWrapper.addEventListener('touchend', () => {
			isDown = false;
		});
		catWrapper.addEventListener('touchmove', (e) => {
			if (!isDown) return;
			const x = e.touches[0].pageX - catWrapper.offsetLeft;
			const walk = (x - startX) * 1.5;
			catWrapper.scrollLeft = scrollLeft - walk;
		});
	}
    // Newsletter carousel with detail divs
	const carousel = document.getElementById('blogCarousel');
	const detailDivs = [
		document.getElementById('carousel-1-details'),
		document.getElementById('carousel-2-details'),
		document.getElementById('carousel-3-details')
	];
	function showDetail(index) {
		detailDivs.forEach((div, i) => {
			if (div) div.style.display = (i === index) ? 'block' : 'none';
		});
	}
	// Initial state
	showDetail(0);
	if (carousel) {
		carousel.addEventListener('slide.bs.carousel', function(e) {
			showDetail(e.to);
		});
	}
});

document.addEventListener('DOMContentLoaded', function() {
	// Sign Up Popup
	const signupBtn = document.getElementById('signup-nav-btn');
	const signupPopup = document.getElementById('signup-popup');
	const signupCloseBtn = document.getElementById('signup-close-btn');
    const loginBtn2 = document.getElementById('signup-from-login-btn');
	if (signupBtn && signupPopup) {
		signupBtn.addEventListener('click', function() {
			signupPopup.style.display = 'flex';
			signupPopup.style.justifyContent = 'center';
			signupPopup.style.alignItems = 'center';
		});
		signupCloseBtn.addEventListener('click', function() {
			signupPopup.style.display = 'none';
		});
		signupPopup.addEventListener('click', function(e) {
			if (e.target === signupPopup) {
				signupPopup.style.display = 'none';
			}
		});
        // Switch to Sign Up Popup from Login Popup
        if (loginBtn2) {
            loginBtn2.addEventListener('click', function() {
                loginPopup.style.display = 'none';
                signupPopup.style.display = 'flex';
                signupPopup.style.justifyContent = 'center';
                signupPopup.style.alignItems = 'center';
            });
        }
	}

	// Login Popup
	const loginBtn = document.getElementById('login-nav-btn');
	const loginPopup = document.getElementById('login-popup');
	const loginCloseBtn = document.getElementById('login-close-btn');
    const signupBtn2 = document.getElementById('login-from-signup-btn');
	if (loginBtn && loginPopup) {
		loginBtn.addEventListener('click', function() {
			loginPopup.style.display = 'flex';
			loginPopup.style.justifyContent = 'center';
			loginPopup.style.alignItems = 'center';
		});
		loginCloseBtn.addEventListener('click', function() {
			loginPopup.style.display = 'none';
		});
		loginPopup.addEventListener('click', function(e) {
			if (e.target === loginPopup) {
				loginPopup.style.display = 'none';
			}
		});
        // Switch to Login Popup from Sign Up Popup
        if (signupBtn2) {
            signupBtn2.addEventListener('click', function() {
                signupPopup.style.display = 'none';
                loginPopup.style.display = 'flex';
                loginPopup.style.justifyContent = 'center';
                loginPopup.style.alignItems = 'center';
            });
        }
	}
});

// Search Form Functionality - Top Projects Page
const originYearDropdown = document.getElementById("origin-year-select");
originYearDropdown.addEventListener("change", function() {
  const selectedOriginYear = this.value;
  // Call a function to handle the filtering
  refineSearch(selectedOriginYear);
});