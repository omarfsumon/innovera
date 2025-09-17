document.addEventListener('DOMContentLoaded', function() {
    // Header elements
    const header = document.getElementById('header');
    const headerInner = header.querySelector('.header-inner');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileNav = document.getElementById('mobile-nav');
    const hamburgerIcon = mobileMenuBtn.querySelector('.hamburger');
    const closeIcon = mobileMenuBtn.querySelector('.close');
    
    // Scroll variables
    let lastScrollTop = 0;
    let isHeaderVisible = true;
    let ticking = false;
    let isMobileMenuOpen = false;

    function updateHeader() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Handle background transparency and margin
        if (scrollTop > 0) {
            headerInner.classList.remove('lg:mt-10');
            headerInner.querySelector('.container').classList.remove('lg:mt-10');
            header.classList.add('bg-white');
            header.classList.remove('transparent');
        } else {
            headerInner.classList.add('lg:mt-10');
            headerInner.querySelector('.container').classList.add('lg:mt-10');
            header.classList.remove('bg-white');
            header.classList.add('transparent');
        }

        // Handle header hide/show based on scroll direction
        if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Scrolling down
            if (isHeaderVisible) {
                header.style.transition = 'transform 0.3s ease-out';
                header.style.transform = 'translateY(-100%)';
                isHeaderVisible = false;
            }
        } else {
            // Scrolling up
            if (!isHeaderVisible) {
                header.style.transition = 'transform 0.3s ease-in';
                header.style.transform = 'translateY(0)';
                isHeaderVisible = true;
            }
        }

        lastScrollTop = scrollTop;
        ticking = false;
    }


    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateHeader();
            });
            ticking = true;
        }
    }, { passive: true });

    // Mobile Menu Toggle
    function toggleMobileMenu() {
        isMobileMenuOpen = !isMobileMenuOpen;
        const mobileMenuContainer = mobileNav.querySelector('.mobile-menu-container');
        
        if (isMobileMenuOpen) {
            mobileMenuContainer.classList.remove('hidden');
            hamburgerIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            
            // Animate menu items
            const menuItems = mobileMenuContainer.querySelectorAll('li');
            menuItems.forEach((item, index) => {
                item.style.animation = `fadeInDown 0.3s ease forwards ${index * 0.1}s`;
            });
        } else {
            mobileMenuContainer.classList.add('hidden');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            document.body.style.overflow = '';
        }
    }

    // Event Listeners
    mobileMenuBtn.addEventListener('click', toggleMobileMenu);

    // Close mobile menu on window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024 && isMobileMenuOpen) {
            toggleMobileMenu();
        }
    });
});

// document.addEventListener('DOMContentLoaded', function() {
//     const header = document.querySelector('.my-sticky-header');
//     let lastScrollTop = 0;
  
//     window.addEventListener('scroll', function() {
//       let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      
//       if (scrollTop > lastScrollTop) {
//         // Scrolling Down
//         header.classList.add('hide-header');
//       } else {
//         // Scrolling Up
//         header.classList.remove('hide-header');
//       }
      
//       lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
//     });
//   });