// version 1.0 

document.addEventListener('DOMContentLoaded', function () {
  const heroSlider = new Swiper('.hero-slider .swiper', {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    effect: 'slide',
    speed: 1500,
    creativeEffect: {
      prev: { translate: [0, 0, -400] },
      next: { translate: ['100%', 0, 0] }
    }
  });
});



//Tab Functionality
document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll('#tabButtons li');
    const contents = document.querySelectorAll('#tabContents li');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active from all tabs
            tabs.forEach(t => t.classList.remove('active-tab'));
            // Add active to clicked tab
            tab.classList.add('active-tab');

            const target = tab.getAttribute('data-tab');

            // Hide all content items
            contents.forEach(content => {
                if (content.getAttribute('data-tab-content') === target) {
                    content.classList.remove('hidden');
                    content.classList.add('block');
                } else {
                    content.classList.add('hidden');
                    content.classList.remove('block');
                }
            });
        });
    });
});


// Isotope Filtering for Gallery
document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll('#filters a');
  const galleryItems = document.querySelectorAll('#gallery .item');

  filterButtons.forEach(button => {
    button.addEventListener('click', function (e) {
      e.preventDefault();

      // Remove 'selected' class from all buttons
      filterButtons.forEach(btn => btn.classList.remove('selected'));
      // Add 'selected' class to current
      this.classList.add('selected');

      const filterValue = this.getAttribute('data-filter');

      galleryItems.forEach(item => {
        if (filterValue === '*' || item.classList.contains(filterValue.replace('.', ''))) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
});


// GLightbox Initialization
document.addEventListener("DOMContentLoaded", function () {
  const lightbox = GLightbox({
    selector: '.image-popup'
  });
});

// Video Lightbox Initialization
const videoLightbox = GLightbox({
  selector: '.popup-youtube',
  width: '50%',
  type: 'video',
  source: 'youtube',
  autoplayVideos: true,
});

// Back to Top Button
  document.addEventListener('DOMContentLoaded', function () {
      const backToTopBtn = document.getElementById('back_to_top');

      // Scroll show/hide logic
      window.addEventListener('scroll', function () {
          if (window.scrollY > 200) {
              backToTopBtn.classList.remove('hidden');
              backToTopBtn.classList.add('opacity-100');
          } else {
              backToTopBtn.classList.add('hidden');
              backToTopBtn.classList.remove('opacity-100');
          }
      });

      // Smooth scroll to top
      backToTopBtn.addEventListener('click', function (e) {
          e.preventDefault();
          window.scrollTo({ top: 0, behavior: 'smooth' });
      });
  });