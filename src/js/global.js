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


document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('project-filters');

    form.addEventListener('change', function () {
        const formData = new FormData(form);

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: new URLSearchParams({
                action: 'filter_projects',
                occupancy_type: formData.get('occupancy_type'),
                project_location: formData.get('project_location'),
            })
        })
        .then(res => res.text())
        .then(data => {
            document.getElementById('filtered-projects').innerHTML = data;
        });
    });
});
