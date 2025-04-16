<?php
// Contact page
include_once 'includes/template.php';
startblock('content');
?>
<div class="min-h-screen pt-24">
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center">Contact Us</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Contact Form -->
      <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-6">Send Us a Message</h2>
        <form id="contact-form" class="space-y-6">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
            <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
          </div>
          
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
          </div>
          
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
          </div>
          
          <div>
            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
            <input type="text" id="subject" name="subject" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required>
          </div>
          
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
            <textarea id="message" name="message" rows="5" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent" required></textarea>
          </div>
          
          <button type="submit" class="w-full bg-brand-orange hover:bg-orange-600 text-white font-medium py-3 px-4 rounded-md transition-colors duration-300">Send Message</button>
        </form>
      </div>
      
      <!-- Contact Information -->
      <div>
        <div class="bg-white p-8 rounded-lg shadow-lg mb-8">
          <h2 class="text-2xl font-semibold mb-6">Contact Information</h2>
          <div class="space-y-4">
            <div class="flex items-start">
              <div class="bg-brand-orange bg-opacity-10 p-3 rounded-full mr-4">
                <i class="fas fa-map-marker-alt text-brand-orange"></i>
              </div>
              <div>
                <h3 class="font-medium text-gray-900">Our Location</h3>
                <p class="text-gray-600">Kutch, Gujarat, India</p>
              </div>
            </div>
            
            <div class="flex items-start">
              <div class="bg-brand-orange bg-opacity-10 p-3 rounded-full mr-4">
                <i class="fas fa-phone-alt text-brand-orange"></i>
              </div>
              <div>
                <h3 class="font-medium text-gray-900">Phone Number</h3>
                <p class="text-gray-600"><a href="tel:+917874636363" class="hover:text-brand-orange transition-colors">+91 7874636363</a></p>
              </div>
            </div>
            
            <div class="flex items-start">
              <div class="bg-brand-orange bg-opacity-10 p-3 rounded-full mr-4">
                <i class="fas fa-envelope text-brand-orange"></i>
              </div>
              <div>
                <h3 class="font-medium text-gray-900">Email Address</h3>
                <p class="text-gray-600"><a href="mailto:info@kutchcarrental.com" class="hover:text-brand-orange transition-colors">info@kutchcarrental.com</a></p>
              </div>
            </div>
            
            <div class="flex items-start">
              <div class="bg-brand-orange bg-opacity-10 p-3 rounded-full mr-4">
                <i class="fas fa-clock text-brand-orange"></i>
              </div>
              <div>
                <h3 class="font-medium text-gray-900">Working Hours</h3>
                <p class="text-gray-600">24/7 - Always available for you</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Map -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h2 class="text-2xl font-semibold mb-6">Find Us on Map</h2>
          <div class="h-64 bg-gray-200 rounded-lg overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.0142202843307!2d70.7647!3d23.2315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDE0JzA1LjQiTiA3MMKwNDUnNTIuOSJF!5e0!3m2!1sen!2sin!4v1625123456789!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
      contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // In a real application, you would send the form data to a server
        // For now, we'll just show an alert
        alert('Thank you for your message! We will get back to you soon.');
        contactForm.reset();
        
        // Alternatively, you could redirect to WhatsApp
        // const message = encodeURIComponent(`Name: ${document.getElementById('name').value}\nEmail: ${document.getElementById('email').value}\nPhone: ${document.getElementById('phone').value}\nSubject: ${document.getElementById('subject').value}\nMessage: ${document.getElementById('message').value}`);
        // window.open(`https://wa.me/917874636363?text=${message}`, '_blank');
      });
    }
  });
</script>
<?php
endblock();
include 'layout.php';
?>