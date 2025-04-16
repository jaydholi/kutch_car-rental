<?php
include_once '../includes/template.php';
startblock('content');
?>
<div class="min-h-screen pt-24">
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center">25 Seater Mini Bus</h1>
    
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-12">
      <div class="md:flex">
        <div class="md:w-1/2">
          <img src="/php/image/mini-bus-25.jpg" alt="25 Seater Mini Bus" class="w-full h-full object-cover">
        </div>
        <div class="md:w-1/2 p-8">
          <h2 class="text-2xl font-semibold mb-4">Vehicle Details</h2>
          <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
              <p class="text-gray-600 mb-1">Seating Capacity</p>
              <p class="font-semibold">25 Seats</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Fuel Type</p>
              <p class="font-semibold">Diesel</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Price</p>
              <p class="font-semibold text-brand-orange">₹5000/day</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Availability</p>
              <p class="font-semibold text-green-600">Available</p>
            </div>
          </div>
          
          <h3 class="text-xl font-semibold mb-3">Features</h3>
          <ul class="list-disc pl-5 mb-6 text-gray-700">
            <li>Comfortable seating for 25 passengers</li>
            <li>Air conditioning</li>
            <li>Push-back seats</li>
            <li>Large luggage space</li>
            <li>Entertainment system</li>
            <li>Experienced driver</li>
            <li>Onboard restroom</li>
          </ul>
          
          <a href="/php/contact.php" class="inline-block bg-brand-orange hover:bg-orange-600 text-white px-6 py-3 rounded-md font-medium">Book Now</a>
        </div>
      </div>
    </div>
    
    <div class="bg-gray-50 rounded-lg p-8 mb-12">
      <h2 class="text-2xl font-semibold mb-4">About 25 Seater Mini Bus</h2>
      <p class="text-gray-700 mb-4">
        Our 25 Seater Mini Bus is the perfect transportation solution for medium to large groups. Whether you're organizing a corporate retreat, a school excursion, or a tourist group, this mini bus offers comfort and convenience for all passengers.
      </p>
      <p class="text-gray-700 mb-4">
        The vehicle is equipped with modern amenities to ensure a pleasant journey. The push-back seats provide excellent comfort for long journeys, while the powerful air conditioning system keeps the interior cool and comfortable.
      </p>
      <p class="text-gray-700">
        With an experienced driver at the wheel, you can relax and enjoy the journey without worrying about navigation or driving fatigue. The 25 Seater Mini Bus is ideal for exploring Kutch and surrounding areas with a larger group.
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