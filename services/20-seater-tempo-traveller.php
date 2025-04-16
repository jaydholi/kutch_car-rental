<?php
include_once '../includes/template.php';
startblock('content');
?>
<div class="min-h-screen pt-24">
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center">20 Seater Tempo Traveller</h1>
    
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-12">
      <div class="md:flex">
        <div class="md:w-1/2">
          <img src="/php/image/tempo-20.jpg" alt="20 Seater Tempo Traveller" class="w-full h-full object-cover">
        </div>
        <div class="md:w-1/2 p-8">
          <h2 class="text-2xl font-semibold mb-4">Vehicle Details</h2>
          <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
              <p class="text-gray-600 mb-1">Seating Capacity</p>
              <p class="font-semibold">20 Seats</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Fuel Type</p>
              <p class="font-semibold">Diesel</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Price</p>
              <p class="font-semibold text-brand-orange">₹4500/day</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Availability</p>
              <p class="font-semibold text-green-600">Available</p>
            </div>
          </div>
          
          <h3 class="text-xl font-semibold mb-3">Features</h3>
          <ul class="list-disc pl-5 mb-6 text-gray-700">
            <li>Spacious seating for 20 passengers</li>
            <li>Air conditioning</li>
            <li>Comfortable push-back seats</li>
            <li>Ample luggage space</li>
            <li>Music system</li>
            <li>Professional driver</li>
            <li>LCD screen for entertainment</li>
          </ul>
          
          <a href="/php/contact.php" class="inline-block bg-brand-orange hover:bg-orange-600 text-white px-6 py-3 rounded-md font-medium">Book Now</a>
        </div>
      </div>
    </div>
    
    <div class="bg-gray-50 rounded-lg p-8 mb-12">
      <h2 class="text-2xl font-semibold mb-4">About 20 Seater Tempo Traveller</h2>
      <p class="text-gray-700 mb-4">
        Our 20 Seater Tempo Traveller is the perfect solution for larger groups who want to travel together comfortably. This spacious vehicle is ideal for corporate events, school trips, tourist groups, and large family outings.
      </p>
      <p class="text-gray-700 mb-4">
        The vehicle comes equipped with all modern amenities to ensure a pleasant journey. The push-back seats provide excellent comfort, while the powerful air conditioning system maintains a comfortable temperature throughout the journey.
      </p>
      <p class="text-gray-700">
        With a professional driver who knows the routes well, you can sit back and enjoy the journey without worrying about navigation or driving fatigue. The 20 Seater Tempo Traveller is perfect for exploring the beautiful landscapes of Kutch and beyond.
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