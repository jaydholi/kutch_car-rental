<?php
// Hero section converted from src/components/Hero.tsx (approximate)
?>
<section id="hero-section" class="relative h-screen flex items-center">
  <div class="slideshow-container absolute inset-0 w-full h-full">
    <div class="slide bg-cover bg-center w-full h-full active" style="background-image: url('./image/SlideShow0.jpeg');"></div>
<!--     <div class="slide bg-cover bg-center w-full h-full" style="background-image: url('/image/SlideShow.png');"></div>-->
    <div class="slide bg-cover bg-center w-full h-full" style="background-image: url('./image/SlideShow2.jpeg');"></div> 
    <div class="slide bg-cover bg-center w-full h-full" style="background-image: url('./image/SlideShow3.jpeg');"></div>
  </div>
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <div class="container mx-auto px-4 text-center relative z-10">
    <h1 class="text-5xl font-bold mb-6 text-white">Explore Kutch With Our Premium Car Rental</h1>
    <p class="text-xl mb-8 max-w-3xl mx-auto text-white">Comfortable and reliable vehicles to make your journey in Kutch memorable.</p>
    <a href="#booking-section" class="inline-block bg-brand-orange hover:bg-orange-600 text-white px-8 py-4 rounded-md font-semibold transition-all duration-300 transform hover:scale-105">Book Now</a>
  </div>
</section>

<style>
  .slideshow-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  
  .slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 1.5s ease-in-out;
    z-index: 1;
  }
  
  .slide.active {
    opacity: 1;
    z-index: 2;
  }
</style>

<script>
  // Immediately execute slideshow initialization
  (function() {
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;
    
    function showSlide(index) {
      // Remove active class from all slides
      slides.forEach(slide => {
        slide.classList.remove('active');
      });
      
      // Add active class to current slide
      slides[index].classList.add('active');
    }
    
    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }
    
    // Initialize slideshow
    showSlide(0);
    
    // Change slide every 5 seconds
    setInterval(nextSlide, 5000);
  })();
</script>
