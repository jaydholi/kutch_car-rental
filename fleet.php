<?php
// Fleet page
include_once 'includes/template.php';
startblock('content');
?>
<div class="min-h-screen pt-24">
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center">Our Fleet</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
      <!-- Fleet Categories -->
      <a href="/php/fleet/sedans.php" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="h-48 bg-gray-200 relative overflow-hidden">
          <img src="/php/image/city.jpg" alt="Sedans" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <h3 class="text-white text-2xl font-bold">Sedans</h3>
          </div>
        </div>
        <div class="p-4 text-center">
          <p class="text-gray-600">Comfortable sedans for your daily commute or business travel</p>
        </div>
      </a>
      
      <a href="/php/fleet/suvs.php" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="h-48 bg-gray-200 relative overflow-hidden">
          <img src="/php/image/fortuner.jpg" alt="SUVs" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <h3 class="text-white text-2xl font-bold">SUVs</h3>
          </div>
        </div>
        <div class="p-4 text-center">
          <p class="text-gray-600">Spacious SUVs for family trips and rough terrain adventures</p>
        </div>
      </a>
      
      <a href="/php/fleet/luxury.php" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="h-48 bg-gray-200 relative overflow-hidden">
          <img src="/php/image/luxury.jpg" alt="Luxury Cars" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <h3 class="text-white text-2xl font-bold">Luxury Cars</h3>
          </div>
        </div>
        <div class="p-4 text-center">
          <p class="text-gray-600">Premium luxury vehicles for special occasions and VIP travel</p>
        </div>
      </a>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
      <!-- Larger Categories -->
      <a href="/php/fleet/tempo-travellers.php" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="h-48 bg-gray-200 relative overflow-hidden">
          <img src="/php/image/tempo-14.jpg" alt="Tempo Travellers" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <h3 class="text-white text-2xl font-bold">Tempo Travellers</h3>
          </div>
        </div>
        <div class="p-4 text-center">
          <p class="text-gray-600">Spacious tempo travellers for group travel with 10-20 seats</p>
        </div>
      </a>
      
      <a href="/php/fleet/buses.php" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="h-48 bg-gray-200 relative overflow-hidden">
          <img src="/php/image/bus-49.jpg" alt="Buses" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <h3 class="text-white text-2xl font-bold">Buses</h3>
          </div>
        </div>
        <div class="p-4 text-center">
          <p class="text-gray-600">Large buses for corporate events, tours, and large group travel</p>
        </div>
      </a>
    </div>
    
    <div class="text-center mt-8 mb-12">
      <a href="/php/contact.php" class="inline-block bg-brand-orange hover:bg-orange-600 text-white px-6 py-3 rounded-md font-medium">Contact for Custom Requirements</a>
    </div>
  </div>
</div>
<?php
endblock();
include 'layout.php';
?>