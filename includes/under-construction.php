<?php
// Under Construction template
include_once 'template.php';

function underConstructionPage($title) {
  startblock('content');
?>
<div class="min-h-screen pt-24 pb-16 px-4">
  <div class="container mx-auto">
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-xl overflow-hidden">
      <div class="p-8 md:p-12">
        <div class="text-center">
          <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6"><?php echo htmlspecialchars($title); ?></h1>
          
          <div class="relative w-full max-w-md mx-auto my-10">
            <div class="construction-animation">
              <div class="gear-container">
                <div class="gear gear-1"></div>
                <div class="gear gear-2"></div>
                <div class="gear gear-3"></div>
              </div>
            </div>
          </div>
          
          <h2 class="text-2xl font-semibold text-brand-blue mb-4">Under Construction</h2>
          <p class="text-gray-600 mb-8">We're working hard to bring you an amazing experience. This page is currently under development and will be available soon.</p>
          
          <div class="flex flex-wrap justify-center gap-4">
            <a href="/php/index.php" class="inline-flex items-center px-6 py-3 rounded-lg bg-brand-orange hover:bg-orange-600 text-white font-medium transition-all duration-300 transform hover:scale-105">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
              </svg>
              Return Home
            </a>
            
            <a href="javascript:history.back()" class="inline-flex items-center px-6 py-3 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium transition-all duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
              </svg>
              Go Back
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="mt-12 text-center">
      <p class="text-gray-600">Have questions? <a href="/php/contact.php" class="text-brand-orange hover:underline">Contact us</a></p>
    </div>
  </div>
</div>

<style>
  /* Construction animation styles */
  .construction-animation {
    position: relative;
    height: 150px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .gear-container {
    position: relative;
    width: 120px;
    height: 120px;
  }
  
  .gear {
    position: absolute;
    background-color: #3b82f6;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .gear::before {
    content: '';
    position: absolute;
    background-color: white;
    border-radius: 50%;
  }
  
  .gear::after {
    content: '';
    position: absolute;
    background-color: #3b82f6;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    z-index: -1;
  }
  
  .gear-1 {
    width: 80px;
    height: 80px;
    top: 0;
    left: 0;
    animation: rotate 10s linear infinite;
  }
  
  .gear-1::before {
    width: 30px;
    height: 30px;
  }
  
  .gear-1::after {
    box-shadow: 
      0 -20px 0 0 #3b82f6,
      14.14px -14.14px 0 0 #3b82f6,
      20px 0 0 0 #3b82f6,
      14.14px 14.14px 0 0 #3b82f6,
      0 20px 0 0 #3b82f6,
      -14.14px 14.14px 0 0 #3b82f6,
      -20px 0 0 0 #3b82f6,
      -14.14px -14.14px 0 0 #3b82f6;
  }
  
  .gear-2 {
    width: 60px;
    height: 60px;
    bottom: 0;
    right: 0;
    animation: rotate 7s linear infinite reverse;
  }
  
  .gear-2::before {
    width: 24px;
    height: 24px;
  }
  
  .gear-2::after {
    box-shadow: 
      0 -15px 0 0 #f97316,
      10.6px -10.6px 0 0 #f97316,
      15px 0 0 0 #f97316,
      10.6px 10.6px 0 0 #f97316,
      0 15px 0 0 #f97316,
      -10.6px 10.6px 0 0 #f97316,
      -15px 0 0 0 #f97316,
      -10.6px -10.6px 0 0 #f97316;
    background-color: #f97316;
  }
  
  .gear-3 {
    width: 40px;
    height: 40px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: rotate 5s linear infinite;
    background-color: #1e40af;
  }
  
  .gear-3::before {
    width: 16px;
    height: 16px;
  }
  
  .gear-3::after {
    box-shadow: 
      0 -10px 0 0 #1e40af,
      7.07px -7.07px 0 0 #1e40af,
      10px 0 0 0 #1e40af,
      7.07px 7.07px 0 0 #1e40af,
      0 10px 0 0 #1e40af,
      -7.07px 7.07px 0 0 #1e40af,
      -10px 0 0 0 #1e40af,
      -7.07px -7.07px 0 0 #1e40af;
    background-color: #1e40af;
  }
  
  @keyframes rotate {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
</style>
<?php
  endblock();
  include '../layout.php';
}
?>