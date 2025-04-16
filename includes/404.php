<?php
// 404 Error Page
include_once 'template.php';
startblock('content');
?>
<div class="min-h-screen flex flex-col items-center justify-center py-20 px-4 bg-gradient-to-br from-gray-900 to-blue-900 text-white">
  <div class="max-w-4xl mx-auto bg-black bg-opacity-30 p-8 rounded-2xl shadow-2xl backdrop-filter backdrop-blur-lg border border-blue-400 border-opacity-20">
    <div class="flex flex-col md:flex-row items-center justify-between">
      <div class="mb-8 md:mb-0 md:mr-8 text-center md:text-left">
        <h1 class="text-8xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500 error-text">404</h1>
        <h2 class="text-3xl font-semibold mb-4 text-blue-200">Page Not Found</h2>
        <p class="text-gray-300 mb-8 max-w-md">The digital path you're seeking appears to have vanished into cyberspace. Let's navigate back to reality.</p>
        
        <div class="flex flex-wrap gap-4 justify-center md:justify-start">
          <a href="/php/index.php" class="inline-flex items-center px-6 py-3 rounded-lg bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
            <span class="mr-2"><i class="fas fa-home"></i></span>
            Return Home
          </a>
          
          <a href="javascript:history.back()" class="inline-flex items-center px-6 py-3 rounded-lg bg-transparent border border-blue-400 hover:bg-blue-900 hover:bg-opacity-30 text-white font-medium transition-all duration-300">
            <span class="mr-2"><i class="fas fa-arrow-left"></i></span>
            Go Back
          </a>
        </div>
      </div>
      
      <div class="w-full md:w-1/2 flex justify-center">
        <div class="relative w-64 h-64">
          <div class="absolute inset-0 flex items-center justify-center">
            <img src="https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif" alt="404 Animation" class="w-full h-auto rounded-lg shadow-lg">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-30 rounded-lg"></div>
        </div>
      </div>
    </div>
    
    <div class="mt-12 pt-8 border-t border-blue-800 border-opacity-50">
      <p class="text-center text-blue-300 text-sm">Looking for something specific? Try one of these popular destinations:</p>
      <div class="mt-4 flex flex-wrap justify-center gap-6">
        <a href="/php/index.php" class="text-blue-400 hover:text-blue-200 transition-colors">
          <span class="mr-1"><i class="fas fa-car"></i></span> Car Rentals
        </a>
        <a href="/includes/404.php" class="text-blue-400 hover:text-blue-200 transition-colors">
          <span class="mr-1"><i class="fas fa-map-marked-alt"></i></span> Destinations
        </a>
        <a href="/php/contact.php" class="text-blue-400 hover:text-blue-200 transition-colors">
          <span class="mr-1"><i class="fas fa-headset"></i></span> Support
        </a>
        <a href="/php/includes/404.php" class="text-blue-400 hover:text-blue-200 transition-colors">
          <span class="mr-1"><i class="fas fa-tag"></i></span> Special Offers
        </a>
      </div>
    </div>
  </div>
</div>

<style>
  /* Futuristic 404 page styles */
  .error-text {
    text-shadow: 0 0 15px rgba(59, 130, 246, 0.5);
    animation: pulse 2s infinite alternate;
  }
  
  @keyframes pulse {
    0% {
      opacity: 0.8;
      text-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
    }
    100% {
      opacity: 1;
      text-shadow: 0 0 20px rgba(59, 130, 246, 0.8), 0 0 30px rgba(99, 102, 241, 0.6);
    }
  }
  
  /* Floating animation for the GIF container */
  .relative {
    animation: float 6s ease-in-out infinite;
  }
  
  @keyframes float {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-15px);
    }
  }
  
  /* Glowing border effect */
  .border-blue-400 {
    box-shadow: 0 0 15px rgba(59, 130, 246, 0.3);
  }
  
  /* Particle background effect */
  .bg-gradient-to-br {
    position: relative;
    overflow: hidden;
  }
  
  .bg-gradient-to-br::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: radial-gradient(circle at 30% 20%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                      radial-gradient(circle at 70% 60%, rgba(99, 102, 241, 0.1) 0%, transparent 50%);
    z-index: 0;
  }
  
  /* Responsive adjustments */
  @media (max-width: 768px) {
    .error-text {
      font-size: 5rem;
    }
  }
</style>

<script>
  // Create particle effect for futuristic background
  document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.bg-gradient-to-br');
    
    // Create stars
    for (let i = 0; i < 50; i++) {
      const star = document.createElement('div');
      star.className = 'absolute rounded-full bg-white';
      
      // Random size
      const size = Math.random() * 3;
      star.style.width = `${size}px`;
      star.style.height = `${size}px`;
      
      // Random position
      star.style.top = `${Math.random() * 100}%`;
      star.style.left = `${Math.random() * 100}%`;
      
      // Random opacity
      star.style.opacity = Math.random() * 0.7;
      
      // Animation
      star.style.animation = `twinkle ${2 + Math.random() * 4}s infinite alternate`;
      
      container.appendChild(star);
    }
  });
  
  // Add twinkling animation
  const style = document.createElement('style');
  style.textContent = `
    @keyframes twinkle {
      0% { opacity: 0.2; }
      100% { opacity: 0.8; }
    }
  `;
  document.head.appendChild(style);
</script>
<?php
endblock();
include '../layout.php';
?>