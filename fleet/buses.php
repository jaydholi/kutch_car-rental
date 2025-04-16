<?php
// Buses Fleet page
include_once '../includes/template.php';
startblock('content');
?>
<div class="min-h-screen pt-24">
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center">Bus Fleet</h1>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
      <!-- Bus Cards -->
      <div class="card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
        <div class="relative overflow-hidden" style="height: 450px;">
          <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-110" 
               src="/php/image/mini-bus-25.jpg" 
               alt="25 Seater Mini Bus">
          <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">Available</div>
        </div>
        <!-- Rest of the card content remains unchanged -->
      </div>
      
      <!-- Other cards follow the same pattern -->
    </div>
  </div>
</div>
<?php
endblock();
include '../layout.php';
?>