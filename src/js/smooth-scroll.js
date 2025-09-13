// Improved smooth scroll functionality
document.addEventListener('DOMContentLoaded', function() {
    // Get header element once
    const header = document.querySelector('#header');
    const mobileMenu = document.querySelector('.mobile-menu-container');
    const hamburger = document.querySelector('.hamburger');
    const close = document.querySelector('.close');

    // Function to get current header height considering sticky/fixed states
    function getHeaderHeight() {
        if (!header) return 0;
        return header.offsetHeight;
    }

    // Function to handle mobile menu closing
    function closeMobileMenu() {
        if (mobileMenu && mobileMenu.classList.contains('block')) {
            mobileMenu.classList.remove('block');
            mobileMenu.classList.add('hidden');
            if (hamburger && close) {
                hamburger.classList.remove('hidden');
                close.classList.add('hidden');
            }
        }
    }

    // Function to handle the smooth scroll
    function smoothScrollTo(targetElement, duration = 1000) {
        if (!targetElement) return;

        const headerHeight = getHeaderHeight();
        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
        const startPosition = window.pageYOffset;
        const distance = targetPosition - startPosition;
        let startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const progress = Math.min(timeElapsed / duration, 1);

            // Easing function for smoother animation
            const easing = function (t) {
                return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
            };

            window.scrollTo(0, startPosition + distance * easing(progress));

            if (timeElapsed < duration) {
                requestAnimationFrame(animation);
            }
        }

        // Fall back to default behavior if smooth scroll fails
        try {
            requestAnimationFrame(animation);
        } catch (error) {
            console.error('Smooth scroll failed, falling back to default behavior', error);
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    }

    // Add smooth scroll behavior to all links with anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return; // Ignore empty anchors

            const targetElement = document.querySelector(targetId);
            if (!targetElement) return; // Don't proceed if target doesn't exist

            // Close mobile menu first
            closeMobileMenu();

            // Add a small delay to ensure mobile menu is closed
            setTimeout(() => {
                smoothScrollTo(targetElement);
            }, 100);
        });
    });

    // Update header offset on window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Recalculate header height if needed
            const headerHeight = getHeaderHeight();
        }, 250);
    });
});
