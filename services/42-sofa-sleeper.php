<?php
include_once '../includes/template.php';
startblock('content');
?>
<div class="min-h-screen pt-24">
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center">42 Sofa Sleeper Bus</h1>
    
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-12">
      <div class="md:flex">
        <div class="md:w-1/2">
          <img src="/php/image/sofa-sleeper.jpg" alt="42 Sofa Sleeper Bus" class="w-full h-full object-cover">
        </div>
        <div class="md:w-1/2 p-8">
          <h2 class="text-2xl font-semibold mb-4">Vehicle Details</h2>
          <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
              <p class="text-gray-600 mb-1">Seating Capacity</p>
              <p class="font-semibold">42 Seats (Convertible to sleepers)</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Fuel Type</p>
              <p class="font-semibold">Diesel</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Price</p>
              <p class="font-semibold text-brand-orange">₹9000/day</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Availability</p>
              <p class="font-semibold text-green-600">Available</p>
            </div>
          </div>
          
          <h3 class="text-xl font-semibold mb-3">Features</h3>
          <ul class="list-disc pl-5 mb-6 text-gray-700">
            <li>Luxurious sofa seats convertible to sleepers</li>
            <li>Premium air conditioning system</li>
            <li>Individual reading lights</li>
            <li>Large luggage compartment</li>
            <li>Advanced entertainment system</li>
            <li>Professional experienced driver</li>
            <li>Onboard restroom</li>
            <li>USB and power outlets</li>
            <li>Refrigerator</li>
            <li>Hot and cold water dispenser</li>
          </ul>
          
          <a href="/php/contact.php" class="inline-block bg-brand-orange hover:bg-orange-600 text-white px-6 py-3 rounded-md font-medium">Book Now</a>
        </div>
      </div>
    </div>
    
    <div class="bg-gray-50 rounded-lg p-8 mb-12">
      <h2 class="text-2xl font-semibold mb-4">About 42 Sofa Sleeper Bus</h2>
      <p class="text-gray-700 mb-4">
        Our 42 Sofa Sleeper Bus offers the ultimate in luxury travel for large groups. This premium vehicle is perfect for overnight journeys, long-distance travel, and multi-day excursions where comfort is a priority.
      </p>
      <p class="text-gray-700 mb-4">
        The unique feature of this bus is its convertible sofa seats that transform into comfortable sleepers, allowing passengers to rest properly during long journeys. The bus is equipped with all modern amenities to ensure a pleasant and comfortable experience.
      </p>
      <p class="text-gray-700">
        With an experienced driver who knows the routes well, you can relax and enjoy the journey without worrying about navigation or driving fatigue. The 42 Sofa Sleeper Bus is ideal for tourist groups, corporate retreats, and special events requiring premium transportation.
      </p>
    </div>
    
    <div class="text-center mb-12">
      <h2 class="text-2xl font-semibold mb-6">Ready to Book?</h2>
      <a href="/php/contact.php" class="inline-block bg-brand-orange hover:bg-orange-600 text-white px-8 py-4 rounded-md font-medium">Contact Us for Booking</a>
    </div>
  </div>
</div>
<?php
endblock();
include '../layout.php';
?>