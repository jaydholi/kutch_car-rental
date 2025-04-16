<?php
include_once '../includes/template.php';
startblock('content');
?>
<div class="min-h-screen pt-24">
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center">33 Seater Mini Bus</h1>
    
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-12">
      <div class="md:flex">
        <div class="md:w-1/2">
          <img src="/php/image/mini-bus-33.jpg" alt="33 Seater Mini Bus" class="w-full h-full object-cover">
        </div>
        <div class="md:w-1/2 p-8">
          <h2 class="text-2xl font-semibold mb-4">Vehicle Details</h2>
          <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
              <p class="text-gray-600 mb-1">Seating Capacity</p>
              <p class="font-semibold">33 Seats</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Fuel Type</p>
              <p class="font-semibold">Diesel</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Price</p>
              <p class="font-semibold text-brand-orange">₹6000/day</p>
            </div>
            <div>
              <p class="text-gray-600 mb-1">Availability</p>
              <p class="font-semibold text-green-600">Available</p>
            </div>
          </div>
          
          <h3 class="text-xl font-semibold mb-3">Features</h3>
          <ul class="list-disc pl-5 mb-6 text-gray-700">
            <li>Spacious seating for 33 passengers</li>
            <li>Powerful air conditioning</li>
            <li>Comfortable reclining seats</li>
            <li>Large luggage compartment</li>
            <li>Entertainment system with LCD screens</li>
            <li>Professional driver</li>
            <li>Onboard restroom</li>
            <li>USB charging ports</li>
          </ul>
          
          <a href="/php/contact.php" class="inline-block bg-brand-orange hover:bg-orange-600 text-white px-6 py-3 rounded-md font-medium">Book Now</a>
        </div>
      </div>
    </div>
    
    <div class="bg-gray-50 rounded-lg p-8 mb-12">
      <h2 class="text-2xl font-semibold mb-4">About 33 Seater Mini Bus</h2>
      <p class="text-gray-700 mb-4">
        Our 33 Seater Mini Bus is an excellent choice for larger groups requiring comfortable transportation. This vehicle is perfect for corporate events, school excursions, tourist groups, and large family gatherings.
      </p>
      <p class="text-gray-700 mb-4">
        The mini bus features modern amenities to ensure a comfortable journey for all passengers. The reclining seats provide excellent comfort for long journeys, while the powerful air conditioning system maintains a pleasant temperature throughout the trip.
      </p>
      <p class="text-gray-700">
        With an experienced driver who knows the routes well, you can relax and enjoy the journey without worrying about navigation. The 33 Seater Mini Bus is ideal for exploring Kutch and beyond with larger groups, offering both comfort and convenience.
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