<?php
include_once '../includes/template.php';
startblock('content');
?>
<div class="min-h-screen pt-24">
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center">56 Seater 3×2 Bus</h1>
    
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-12">
      <div class="md:flex">
        <div class="md:w-1/2">
          <img src="/php/image/bus-56.jpg" alt="56 Seater 3×2 Bus" class="w-full h-full object-cover">
        </div>
        <div class="md:w-1/2 p-8">
          <h2 class="text-2xl font-semibold mb-4">Vehicle Details</h2>
          <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
              <p class="text-gray-600 mb-1">Seating Capacity</p>
              <p class="font-semibold">56 Seats (3×2 Configuration)</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Fuel Type</p>
              <p class="font-semibold">Diesel</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Price</p>
              <p class="font-semibold text-brand-orange">₹10000/day</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Availability</p>
              <p class="font-semibold text-green-600">Available</p>
            </div>
          </div>
          
          <h3 class="text-xl font-semibold mb-3">Features</h3>
          <ul class="list-disc pl-5 mb-6 text-gray-700">
            <li>Spacious 3×2 seating configuration for 56 passengers</li>
            <li>Powerful air conditioning system</li>
            <li>Comfortable push-back seats</li>
            <li>Extra-large luggage compartment</li>
            <li>Multiple LCD screens for entertainment</li>
            <li>Professional experienced driver</li>
            <li>Onboard restroom</li>
            <li>USB charging ports</li>
            <li>PA system</li>
            <li>Emergency exit doors</li>
          </ul>
          
          <a href="/php/contact.php" class="inline-block bg-brand-orange hover:bg-orange-600 text-white px-6 py-3 rounded-md font-medium">Book Now</a>
        </div>
      </div>
    </div>
    
    <div class="bg-gray-50 rounded-lg p-8 mb-12">
      <h2 class="text-2xl font-semibold mb-4">About 56 Seater 3×2 Bus</h2>
      <p class="text-gray-700 mb-4">
        Our 56 Seater 3×2 Bus is the largest vehicle in our fleet, designed to accommodate very large groups efficiently. This spacious bus is perfect for school trips, corporate events, large tourist groups, and community outings.
      </p>
      <p class="text-gray-700 mb-4">
        The bus features a 3×2 seating configuration, providing maximum capacity while still ensuring passenger comfort. It is equipped with all modern amenities to ensure a pleasant journey, including a powerful air conditioning system, comfortable push-back seats, and entertainment options.
      </p>
      <p class="text-gray-700">
        With an experienced driver who knows the routes well, you can relax and enjoy the journey without worrying about navigation or driving fatigue. The 56 Seater 3×2 Bus is the most economical option for very large groups, offering both comfort and value.
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