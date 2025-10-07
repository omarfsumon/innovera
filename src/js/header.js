document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.my-sticky-header');
    let lastScrollTop = 0;
  
    window.addEventListener('scroll', function() {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      
      if (scrollTop > lastScrollTop) {
        // Scrolling Down
        header.classList.add('hide-header');
      } else {
        // Scrolling Up
        header.classList.remove('hide-header');
      }
      
      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; 
    });
  });