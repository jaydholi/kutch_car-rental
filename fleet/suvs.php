<?php
// SUVs Fleet page
include_once '../includes/template.php';
startblock('content');
?>
<div class="min-h-screen pt-24">
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center">SUV Fleet</h1>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
      <!-- SUV Cards -->
      <div class="card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
        <div class="relative h-48 overflow-hidden">
          <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-110" 
               src="/php/image/xuv700.jpg" 
               alt="Mahindra XUV 700">
          <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">Available</div>
        </div>
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Mahindra XUV 700</h3>
          <div class="flex justify-between items-center mb-2">
            <span class="text-gray-600"><i class="fas fa-users mr-1"></i> 7 seats</span>
            <span class="text-gray-600"><i class="fas fa-gas-pump mr-1"></i> Diesel</span>
          </div>
          <div class="flex justify-between items-center mb-4">
            <span class="text-lg font-bold text-brand-orange">₹3000/day</span>
          </div>
          <a href="/php/contact.php" class="block text-center bg-brand-orange hover:bg-orange-600 text-white py-2 rounded transition-colors duration-300 find-out-more">
            Book Now <i class="fas fa-arrow-right ml-1"></i>
          </a>
        </div>
      </div>

      <div class="card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
        <div class="relative h-48 overflow-hidden">
          <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-110" 
               src="/php/image/fortuner.jpg" 
               alt="Toyota Fortuner">
          <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">Available</div>
        </div>
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Toyota Fortuner</h3>
          <div class="flex justify-between items-center mb-2">
            <span class="text-gray-600"><i class="fas fa-users mr-1"></i> 7 seats</span>
            <span class="text-gray-600"><i class="fas fa-gas-pump mr-1"></i> Diesel</span>
          </div>
          <div class="flex justify-between items-center mb-4">
            <span class="text-lg font-bold text-brand-orange">₹4500/day</span>
          </div>
          <a href="/php/contact.php" class="block text-center bg-brand-orange hover:bg-orange-600 text-white py-2 rounded transition-colors duration-300 find-out-more">
            Book Now <i class="fas fa-arrow-right ml-1"></i>
          </a>
        </div>
      </div>

      <div class="card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
        <div class="relative h-48 overflow-hidden">
          <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-110" 
               src="/php/image/innova.jpg" 
               alt="Toyota Innova Crysta">
          <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">Available</div>
        </div>
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Toyota Innova Crysta</h3>
          <div class="flex justify-between items-center mb-2">
            <span class="text-gray-600"><i class="fas fa-users mr-1"></i> 7 seats</span>
            <span class="text-gray-600"><i class="fas fa-gas-pump mr-1"></i> Diesel</span>
          </div>
          <div class="flex justify-between items-center mb-4">
            <span class="text-lg font-bold text-brand-orange">₹2500/day</span>
          </div>
          <a href="/php/contact.php" class="block text-center bg-brand-orange hover:bg-orange-600 text-white py-2 rounded transition-colors duration-300 find-out-more">
            Book Now <i class="fas fa-arrow-right ml-1"></i>
          </a>
        </div>
      </div>
    </div>
    
    <div class="text-center mt-8 mb-12">
      <a href="/php/contact.php" class="inline-block bg-brand-orange hover:bg-orange-600 text-white px-6 py-3 rounded-md font-medium">Contact for Booking</a>
    </div>
  </div>
</div>
<?php
endblock();
include '../layout.php';
?>