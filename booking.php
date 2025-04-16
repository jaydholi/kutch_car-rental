<?php
// Booking page
include_once 'includes/template.php';
startblock('content');
?>
<div class="min-h-screen pt-24">
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center">Book Your Car</h1>
    
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
      <form id="booking-form" class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label for="pickup-date" class="block text-sm font-medium text-gray-700 mb-1">Pickup Date</label>
            <input type="date" id="pickup-date" name="pickup-date" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
          </div>
          
          <div>
            <label for="return-date" class="block text-sm font-medium text-gray-700 mb-1">Return Date</label>
            <input type="date" id="return-date" name="return-date" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
          </div>
          
          <div>
            <label for="car-type" class="block text-sm font-medium text-gray-700 mb-1">Car Type</label>
            <select id="car-type" name="car-type" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
              <option value="">Select a car type</option>
              <option value="sedan">Sedan</option>
              <option value="suv">SUV</option>
              <option value="luxury">Luxury Car</option>
              <option value="tempo-traveller">Tempo Traveller</option>
            </select>
          </div>
          
          <div>
            <label for="pickup-location" class="block text-sm font-medium text-gray-700 mb-1">Pickup Location</label>
            <input type="text" id="pickup-location" name="pickup-location" placeholder="Enter pickup location" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
          </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
          </div>
          
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
          </div>
          
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
          </div>
          
          <div>
            <label for="id-proof" class="block text-sm font-medium text-gray-700 mb-1">ID Proof</label>
            <select id="id-proof" name="id-proof" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
              <option value="">Select ID type</option>
              <option value="aadhar">Aadhar Card</option>
              <option value="pan">PAN Card</option>
              <option value="driving-license">Driving License</option>
              <option value="passport">Passport</option>
            </select>
          </div>
        </div>
        
        <div>
          <label for="special-requests" class="block text-sm font-medium text-gray-700 mb-1">Special Requests (Optional)</label>
          <textarea id="special-requests" name="special-requests" rows="4" placeholder="Any special requests or requirements?" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent"></textarea>
        </div>
        
        <div class="pt-4">
          <button type="submit" class="w-full bg-brand-orange hover:bg-orange-600 text-white font-medium py-3 rounded-md transition-colors duration-300 relative overflow-hidden group">
            <span class="relative z-10">Submit Booking Request</span>
            <span class="absolute inset-0 bg-gradient-to-r from-orange-500 to-orange-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
          </button>
        </div>
      </form>
      
      <div class="mt-8 pt-6 border-t border-gray-200">
        <h3 class="text-lg font-semibold mb-4">Booking Information:</h3>
        <ul class="space-y-2 text-gray-700">
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-orange mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span>Bookings should be made at least 24 hours in advance.</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-orange mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span>A valid ID proof and driving license are required at the time of pickup.</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-orange mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span>Cancellations made 48 hours before pickup are eligible for a full refund.</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-orange mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span>Our team will contact you to confirm your booking details.</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('booking-form');
    const pickupDate = document.getElementById('pickup-date');
    const returnDate = document.getElementById('return-date');
    
    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    pickupDate.min = today;
    returnDate.min = today;
    
    // Update return date min when pickup date changes
    pickupDate.addEventListener('change', function() {
      returnDate.min = this.value;
      if (returnDate.value && returnDate.value < this.value) {
        returnDate.value = this.value;
      }
    });
    
    // Form submission
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Show loading state
      const submitButton = form.querySelector('button[type="submit"]');
      const originalText = submitButton.innerHTML;
      submitButton.innerHTML = '<span class="flex items-center justify-center"><svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Processing...</span>';
      
      // Simulate form submission (replace with actual AJAX call)
      setTimeout(function() {
        alert('Booking request submitted successfully! Our team will contact you shortly.');
        form.reset();
        submitButton.innerHTML = originalText;
      }, 1500);
    });
  });
</script>
<?php
endblock();
include 'layout.php';
?>