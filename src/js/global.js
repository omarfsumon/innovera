// Hero Slider Initialization
document.addEventListener("DOMContentLoaded",function(){new Swiper(".hero-slider .swiper",{loop:!0,autoplay:{delay:5e3,disableOnInteraction:!1},effect:"slide",speed:1500,creativeEffect:{prev:{translate:[0,0,-400]},next:{translate:["100%",0,0]}}})});
//Tab Functionality
document.addEventListener("DOMContentLoaded",function(){let t=document.querySelectorAll("#tabButtons li"),e=document.querySelectorAll("#tabContents li");t.forEach(a=>{a.addEventListener("click",()=>{t.forEach(t=>t.classList.remove("active-tab")),a.classList.add("active-tab");let s=a.getAttribute("data-tab");e.forEach(t=>{t.getAttribute("data-tab-content")===s?(t.classList.remove("hidden"),t.classList.add("block")):(t.classList.add("hidden"),t.classList.remove("block"))})})})});
// GLightbox Initialization
document.addEventListener("DOMContentLoaded",function(){GLightbox({selector:".image-popup"})});
// Video Lightbox Initialization
const videoLightbox=GLightbox({selector:".popup-youtube",width:"50%",type:"video",source:"youtube",autoplayVideos:!0});
// Back to Top Button
document.addEventListener("DOMContentLoaded",function(){let t=document.getElementById("back_to_top");window.addEventListener("scroll",function(){window.scrollY>200?(t.classList.remove("hidden"),t.classList.add("opacity-100")):(t.classList.add("hidden"),t.classList.remove("opacity-100"))}),t.addEventListener("click",function(t){t.preventDefault(),window.scrollTo({top:0,behavior:"smooth"})})});
// Scroll Fade In Up Animation
document.addEventListener("DOMContentLoaded",()=>{let e=document.querySelectorAll(".scroll_animate"),t=new IntersectionObserver(e=>{e.forEach(e=>{if(e.isIntersecting){let a=e.target.dataset.animate||"animate__fadeInUp";e.target.classList.add("animate__animated",a),t.unobserve(e.target)}})});e.forEach(e=>t.observe(e))});
// Preloader
document.addEventListener("DOMContentLoaded",function(){let e=document.getElementById("preloader");window.addEventListener("load",function(){e&&(e.classList.add("hide"),setTimeout(()=>e.remove(),600))}),setTimeout(()=>{e&&!e.classList.contains("hide")&&(e.classList.add("hide"),setTimeout(()=>e.remove(),600))},5e3)});