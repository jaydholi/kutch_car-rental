<?php
// About page
include_once 'includes/template.php';
startblock('content');
?>
<div class="min-h-screen pt-24">
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center">About Us</h1>
    
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
      <p class="text-lg text-gray-700 mb-6">
        Kutch Car Rental is a premier car rental service based in the beautiful region of Kutch, Gujarat. 
        We pride ourselves on providing reliable, comfortable, and affordable transportation solutions for 
        tourists and locals alike.
      </p>
      
      <p class="text-lg text-gray-700 mb-6">
        Founded in 2015, our mission is to make exploring the unique landscapes and cultural heritage of 
        Kutch accessible to everyone. Whether you're visiting the White Rann during the Rann Utsav, 
        exploring the historic sites, or simply need a reliable vehicle for your business trip, 
        we've got you covered.
      </p>
      
      <p class="text-lg text-gray-700 mb-6">
        Our fleet includes a wide range of vehicles from economical hatchbacks to luxurious SUVs and 
        spacious tempo travellers, all maintained to the highest standards of safety and comfort.
      </p>
      
      <div class="mt-10 border-t pt-8">
        <h2 class="text-2xl font-semibold mb-4">Our Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-gray-50 p-6 rounded-lg">
            <h3 class="text-xl font-medium mb-2 text-brand-blue">Customer First</h3>
            <p class="text-gray-700">We prioritize your needs and strive to exceed your expectations with personalized service.</p>
          </div>
          <div class="bg-gray-50 p-6 rounded-lg">
            <h3 class="text-xl font-medium mb-2 text-brand-blue">Quality & Safety</h3>
            <p class="text-gray-700">All our vehicles undergo regular maintenance checks to ensure your safety and comfort.</p>
          </div>
          <div class="bg-gray-50 p-6 rounded-lg">
            <h3 class="text-xl font-medium mb-2 text-brand-blue">Transparency</h3>
            <p class="text-gray-700">No hidden fees or surprises. We believe in clear communication and honest pricing.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
endblock();
include 'layout.php';
?>