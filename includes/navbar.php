<?php
// Navbar include converted from React Navbar component
?>
<nav id="main-navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center py-4">
      <!-- Logo -->
      <a href="/php/index.php" class="flex items-center">
        <span class="text-2xl font-bold">
          <span class="text-white nav-logo-text transition-colors duration-300">Kutch</span> 
          <span class="text-brand-orange">Car Rental</span>
        </span>
      </a>

      <!-- Desktop Navigation -->
      <div class="hidden lg:flex items-center space-x-8">
        <a href="/php/index.php" class="nav-link text-white font-medium hover:text-brand-orange transition-colors duration-300">Home</a>

        <!-- Services Dropdown -->
        <div class="relative group">
          <button class="nav-link text-white font-medium hover:text-brand-orange transition-colors duration-300 flex items-center">
            Services
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="absolute left-0 mt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left group-hover:translate-y-0 translate-y-2 z-50">
            <div class="py-2 bg-white rounded-md shadow-xl border border-gray-100">
              <a href="/php/services/car-rental.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-brand-orange transition-colors duration-200">Car Rental</a>
              <a href="/php/services/new-urbania-force.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-brand-orange transition-colors duration-200">New Urbania Force</a>
              <a href="/php/services/10-seater-tempo-traveller.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-brand-orange transition-colors duration-200">10 Seater Tempo Traveller</a>
              <a href="/php/services/12-seater-tempo-traveller.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-brand-orange transition-colors duration-200">12 Seater Tempo Traveller</a>
              <a href="/php/services/14-seater-tempo-traveller.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-brand-orange transition-colors duration-200">14 Seater Tempo Traveller</a>
            </div>
          </div>
        </div>

        <!-- Fleet Dropdown -->
        <div class="relative group">
          <button class="nav-link text-white font-medium hover:text-brand-orange transition-colors duration-300 flex items-center">
            Fleet
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="absolute left-0 mt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left group-hover:translate-y-0 translate-y-2 z-50">
            <div class="py-2 bg-white rounded-md shadow-xl border border-gray-100">
              <a href="/php/fleet/sedans.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-brand-orange transition-colors duration-200">Sedans</a>
              <a href="/php/fleet/suvs.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-brand-orange transition-colors duration-200">SUVs</a>
              <a href="/php/fleet/luxury.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-brand-orange transition-colors duration-200">Luxury Cars</a>
              <a href="/php/fleet/tempo-travellers.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-brand-orange transition-colors duration-200">Tempo Travellers</a>
            </div>
          </div>
        </div>

        <!-- About Us -->
        <a href="/php/about.php" class="nav-link text-white font-medium hover:text-brand-orange transition-colors duration-300">About Us</a>

        <!-- Contact -->
        <a href="/php/contact.php" class="nav-link text-white font-medium hover:text-brand-orange transition-colors duration-300">Contact</a>

        <!-- Book Now Button with Border Animation -->
        <a href="/php/booking.php" class="cta-button relative overflow-hidden bg-brand-orange text-white px-5 py-2 rounded-md font-medium transition-all duration-300 hover:bg-orange-600 group">
          <span class="relative z-10">Book Now</span>
          <span class="absolute inset-0 border-2 border-brand-orange rounded-md scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-right group-hover:origin-left"></span>
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="lg:hidden">
        <button id="mobile-menu-button" class="text-white focus:outline-none">
          <div class="hamburger-menu">
            <span class="bar block w-6 h-0.5 bg-white mb-1.5 transition-all duration-300"></span>
            <span class="bar block w-6 h-0.5 bg-white mb-1.5 transition-all duration-300"></span>
            <span class="bar block w-6 h-0.5 bg-white transition-all duration-300"></span>
          </div>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Navigation Menu -->
  <div id="mobile-menu" class="fixed inset-0 bg-white z-40 transform transition-transform duration-300 ease-in-out translate-x-full lg:hidden">
    <div class="flex flex-col h-full">
      <div class="flex justify-between items-center p-4 border-b">
        <span class="text-2xl font-bold"><span class="text-brand-blue">Kutch</span> <span class="text-brand-orange">Car Rental</span></span>
        <button id="close-mobile-menu" class="text-gray-700 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <div class="flex-1 overflow-y-auto p-4">
        <nav class="flex flex-col space-y-4">
          <a href="/php/index.php" class="text-gray-700 py-2 hover:text-brand-orange transition-colors duration-200">Home</a>
          
          <!-- Mobile Services Dropdown -->
          <div class="mobile-dropdown">
            <button class="flex justify-between items-center w-full py-2 text-gray-700 hover:text-brand-orange transition-colors duration-200">
              Services
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 mobile-dropdown-icon transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="mobile-dropdown-content hidden pl-4 border-l-2 border-gray-200 ml-2 mt-2 space-y-2">
              <a href="/php/services/car-rental.php" class="block py-2 text-gray-700 hover:text-brand-orange transition-colors duration-200">Car Rental</a>
              <a href="/php/services/new-urbania-force.php" class="block py-2 text-gray-700 hover:text-brand-orange transition-colors duration-200">New Urbania Force</a>
              <a href="/php/services/10-seater-tempo-traveller.php" class="block py-2 text-gray-700 hover:text-brand-orange transition-colors duration-200">10 Seater Tempo Traveller</a>
              <a href="/php/services/12-seater-tempo-traveller.php" class="block py-2 text-gray-700 hover:text-brand-orange transition-colors duration-200">12 Seater Tempo Traveller</a>
              <a href="/php/services/14-seater-tempo-traveller.php" class="block py-2 text-gray-700 hover:text-brand-orange transition-colors duration-200">14 Seater Tempo Traveller</a>
            </div>
          </div>
          
          <!-- Mobile Fleet Dropdown -->
          <div class="mobile-dropdown">
            <button class="flex justify-between items-center w-full py-2 text-gray-700 hover:text-brand-orange transition-colors duration-200">
              Fleet
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 mobile-dropdown-icon transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="mobile-dropdown-content hidden pl-4 border-l-2 border-gray-200 ml-2 mt-2 space-y-2">
              <a href="/php/fleet/sedans.php" class="block py-2 text-gray-700 hover:text-brand-orange transition-colors duration-200">Sedans</a>
              <a href="/php/fleet/suvs.php" class="block py-2 text-gray-700 hover:text-brand-orange transition-colors duration-200">SUVs</a>
              <a href="/php/fleet/luxury.php" class="block py-2 text-gray-700 hover:text-brand-orange transition-colors duration-200">Luxury Cars</a>
              <a href="/php/fleet/tempo-travellers.php" class="block py-2 text-gray-700 hover:text-brand-orange transition-colors duration-200">Tempo Travellers</a>
            </div>
          </div>
          
          <a href="/php/about.php" class="text-gray-700 py-2 hover:text-brand-orange transition-colors duration-200">About Us</a>
          <a href="/php/contact.php" class="text-gray-700 py-2 hover:text-brand-orange transition-colors duration-200">Contact</a>
          <a href="/php/booking.php" class="bg-brand-orange hover:bg-orange-600 text-white px-4 py-2 rounded-md font-medium transition-colors duration-300 inline-block mt-4 text-center">Book Now</a>
        </nav>
      </div>
    </div>
  </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('main-navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const navLogoText = document.querySelector('.nav-logo-text');
    const bars = document.querySelectorAll('.bar');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMobileMenuButton = document.getElementById('close-mobile-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
    
    // Function to handle navbar appearance on scroll
    function handleScroll() {
      if (window.scrollY > 50) {
        navbar.classList.add('bg-white', 'shadow-md');
        navLinks.forEach(link => {
          link.classList.remove('text-white');
          link.classList.add('text-gray-800');
        });
        navLogoText.classList.remove('text-white');
        navLogoText.classList.add('text-brand-blue');
        bars.forEach(bar => {
          bar.classList.remove('bg-white');
          bar.classList.add('bg-gray-800');
        });
      } else {
        navbar.classList.remove('bg-white', 'shadow-md');
        navLinks.forEach(link => {
          link.classList.add('text-white');
          link.classList.remove('text-gray-800');
        });
        navLogoText.classList.add('text-white');
        navLogoText.classList.remove('text-brand-blue');
        bars.forEach(bar => {
          bar.classList.add('bg-white');
          bar.classList.remove('bg-gray-800');
        });
      }
    }
    
    // Initial check
    handleScroll();
    
    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
    
    // Mobile menu functionality
    mobileMenuButton.addEventListener('click', function() {
      mobileMenu.classList.remove('translate-x-full');
      document.body.style.overflow = 'hidden';
      this.classList.add('active');
    });
    
    closeMobileMenuButton.addEventListener('click', function() {
      mobileMenu.classList.add('translate-x-full');
      document.body.style.overflow = '';
      mobileMenuButton.classList.remove('active');
    });
    
    // Mobile dropdown functionality
    mobileDropdowns.forEach(dropdown => {
      const button = dropdown.querySelector('button');
      const content = dropdown.querySelector('.mobile-dropdown-content');
      const icon = dropdown.querySelector('.mobile-dropdown-icon');
      
      button.addEventListener('click', function() {
        content.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
      });
    });
  });
</script>

<style>
  /* Navbar animation styles */
  #main-navbar {
    transition: all 0.3s ease-in-out;
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
  }
  
  #main-navbar.bg-white {
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
  }
  
  .nav-link {
    position: relative;
  }
  
  .nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -4px;
    left: 0;
    background-color: #f97316;
    transition: width 0.3s ease;
  }
  
  .nav-link:hover::after {
    width: 100%;
  }
  
  /* Hamburger menu animation */
  #mobile-menu-button.active .bar:nth-child(1) {
    transform: translateY(8px) rotate(45deg);
  }
  
  #mobile-menu-button.active .bar:nth-child(2) {
    opacity: 0;
  }
  
  #mobile-menu-button.active .bar:nth-child(3) {
    transform: translateY(-8px) rotate(-45deg);
  }
  
  /* CTA button animation */
  .cta-button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: all 0.6s;
    z-index: 0;
  }
  
  .cta-button:hover::before {
    left: 100%;
  }
  
  /* Fix for dropdown menus */
  .group:hover .group-hover\:visible {
    visibility: visible;
  }
  
  .group:hover .group-hover\:opacity-100 {
    opacity: 1;
  }
  
  .group:hover .group-hover\:translate-y-0 {
    transform: translateY(0);
  }
  
  .group:hover .group-hover\:rotate-180 {
    transform: rotate(180deg);
  }
</style>
