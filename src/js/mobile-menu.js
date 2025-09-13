document.addEventListener('DOMContentLoaded', function() {
    // Toggle mobile menu
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileNav = document.getElementById('mobile-nav');
    const menuContainer = mobileNav.querySelector('.mobile-menu-container');

    mobileMenuBtn.addEventListener('click', function() {
        const hamburger = this.querySelector('.hamburger');
        const close = this.querySelector('.close');
        
        hamburger.classList.toggle('hidden');
        close.classList.toggle('hidden');
        menuContainer.classList.toggle('hidden');
    });

    // Handle submenu toggles
    const submenuToggles = document.querySelectorAll('.submenu-toggle');
    
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            const menuItem = this.closest('.has-submenu');
            const submenu = menuItem.querySelector('.sub-menu');
            const arrow = this.querySelector('svg');
            
            // Close other open submenus at the same level
            const siblings = menuItem.parentElement.children;
            Array.from(siblings).forEach(sibling => {
                if (sibling !== menuItem && sibling.classList.contains('has-submenu')) {
                    const siblingSubmenu = sibling.querySelector('.sub-menu');
                    const siblingArrow = sibling.querySelector('.submenu-toggle svg');
                    siblingSubmenu.classList.remove('show');
                    siblingArrow.style.transform = 'rotate(0deg)';
                }
            });

            // Toggle current submenu
            submenu.classList.toggle('show');
            arrow.style.transform = submenu.classList.contains('show') ? 'rotate(180deg)' : 'rotate(0deg)';
        });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!mobileNav.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
            menuContainer.classList.add('hidden');
            mobileMenuBtn.querySelector('.hamburger').classList.remove('hidden');
            mobileMenuBtn.querySelector('.close').classList.add('hidden');
        }
    });
});
