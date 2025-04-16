<?php
$cars = [
  ['name'=>'New Urbania Force','seating'=>9,'fuel'=>'Diesel','price'=>'₹2500/day','availability'=>true,'image'=>'./image/urbania.jpg', 'link'=>'/php/services/new-urbania-force.php'],
  ['name'=>'10 Seater Tempo Traveller','seating'=>10,'fuel'=>'Diesel','price'=>'₹3000/day','availability'=>true,'image'=>'./image/10 seat.jpg', 'link'=>'/php/services/10-seater-tempo-traveller.php'],
  ['name'=>'12 Seater Tempo Traveller','seating'=>12,'fuel'=>'Diesel','price'=>'₹3200/day','availability'=>true,'image'=>'./image/12 seat.jpg', 'link'=>'/php/services/12-seater-tempo-traveller.php'],
  ['name'=>'14 Seater Tempo Traveller','seating'=>14,'fuel'=>'Diesel','price'=>'₹3500/day','availability'=>true,'image'=>'./image/14 seat.jpg', 'link'=>'/php/services/14-seater-tempo-traveller.php'],
  ['name'=>'17 Seater Tempo Traveller','seating'=>17,'fuel'=>'Diesel','price'=>'₹4000/day','availability'=>true,'image'=>'./image/17 seat.jpg', 'link'=>'/php/fleet/tempo-travellers.php'],
  ['name'=>'20 Seater Tempo Traveller','seating'=>20,'fuel'=>'Diesel','price'=>'₹4500/day','availability'=>true,'image'=>'./image/20 seat.jpg', 'link'=>'/php/fleet/tempo-travellers.php'],
  ['name'=>'25 Seater Mini Bus','seating'=>25,'fuel'=>'Diesel','price'=>'₹5000/day','availability'=>true,'image'=>'./image/mini-bus-25.jpg', 'link'=>'/php/fleet/tempo-travellers.php'],
  ['name'=>'33 Seater Mini Bus','seating'=>33,'fuel'=>'Diesel','price'=>'₹6000/day','availability'=>true,'image'=>'./image/mini-bus-33.jpg', 'link'=>'/php/fleet/tempo-travellers.php'],
  ['name'=>'49 Seater Bus','seating'=>49,'fuel'=>'Diesel','price'=>'₹8000/day','availability'=>true,'image'=>'./image/bus-49.jpg', 'link'=>'/php/fleet/tempo-travellers.php'],
  ['name'=>'42 Sofa Sleeper','seating'=>42,'fuel'=>'Diesel','price'=>'₹9000/day','availability'=>true,'image'=>'./image/sofa-sleeper.jpg', 'link'=>'/php/fleet/tempo-travellers.php'],
  ['name'=>'56 Seater 3×2 Bus','seating'=>56,'fuel'=>'Diesel','price'=>'₹10000/day','availability'=>true,'image'=>'./image/bus-56.jpg', 'link'=>'/php/fleet/tempo-travellers.php'],
];
$seatingOptions = array_unique(array_map(fn($car) => $car['seating'], $cars));
sort($seatingOptions);
$fuelOptions = array_unique(array_map(fn($car) => $car['fuel'], $cars));
sort($fuelOptions);
$emptyImage = './image/empty-placeholder.png'; // Placeholder image path
?>
<section id="featured-cars" class="py-16 bg-white fade-in">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-8 text-center">Our Featured Cars</h2>
    
    <!-- Booking Form Section -->
    <div class="bg-gray-100 p-6 rounded-lg mb-10">
      <h3 class="text-xl font-semibold mb-4 text-center">Book Your Car Now</h3>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Pick-up Date</label>
          <input type="date" class="w-full border border-gray-300 rounded px-3 py-2">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Return Date</label>
          <input type="date" class="w-full border border-gray-300 rounded px-3 py-2">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Car Type</label>
          <select class="w-full border border-gray-300 rounded px-3 py-2">
            <option>All Cars</option>
            <option>Sedan</option>
            <option>SUV</option>
            <option>Hatchback</option>
            <option>Luxury</option>
          </select>
        </div>
        <div class="flex items-end">
          <button class="w-full bg-brand-orange hover:bg-orange-600 text-white px-4 py-2 rounded font-medium transition-colors duration-300">Search</button>
        </div>
      </div>
    </div>
    
    <!-- Filters -->
    <!-- <div class="flex flex-wrap gap-4 mb-6">
      <select id="filter-seating" class="border border-gray-300 rounded px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
        <option value="">All Seating</option>
           </select>
      <select id="filter-fuel" class="border border-gray-300 rounded px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
        <option value="">All Fuel Types</option>

      </select>
      <select id="filter-availability" class="border border-gray-300 rounded px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
        <option value="">All Availability</option>
        <option value="available">Available</option>
        <option value="unavailable">Unavailable</option>
      </select>
    </div> -->
    
    <!-- Car Listings Table -->
    <!-- <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Car Model</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Seating</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fuel Type</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <?php foreach ($cars as $car): ?>
            <tr class="car-row" 
                data-seating="<?php echo $car['seating']; ?>" 
                data-fuel="<?php echo htmlspecialchars($car['fuel']); ?>" 
                data-availability="<?php echo $car['availability'] ? 'available' : 'unavailable'; ?>">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full object-cover" src="<?php echo htmlspecialchars($car['image']); ?>" alt="<?php echo htmlspecialchars($car['name']); ?>" onerror="this.onerror=null;this.src='<?php echo $emptyImage; ?>';">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900"><?php echo htmlspecialchars($car['name']); ?></div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?php echo $car['seating']; ?> seats</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?php echo htmlspecialchars($car['fuel']); ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900"><?php echo htmlspecialchars($car['price']); ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <?php if ($car['availability']): ?>
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Available</span>
                <?php else: ?>
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Unavailable</span>
                <?php endif; ?>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="<?php echo $car['link']; ?>" class="text-orange-600 hover:text-orange-900 view-details">View Details</a>
                <a href="<?php echo $car['link']; ?>" class="ml-4 text-brand-orange hover:text-orange-700 book-now" data-car="<?php echo htmlspecialchars($car['name']); ?>">Book Now</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div> -->
    
    <!-- View All Button -->
    <!-- <div class="text-center mt-8">
      <a href="/php/fleet.php" class="inline-block bg-brand-orange hover:bg-orange-600 text-white px-6 py-2 rounded-md font-medium">View All</a>
    </div>
  </div>
</section> -->

<!-- Card View Section (Similar to first screenshot) -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-8 text-center">Browse Our Car Collection</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach (array_slice($cars, 0, 6) as $car): ?>
        <div class="card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="relative h-128 overflow-hidden">
            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-110" 
                 src="<?php echo htmlspecialchars($car['image']); ?>" 
                 alt="<?php echo htmlspecialchars($car['name']); ?>"
                 onerror="this.onerror=null;this.src='<?php echo $emptyImage; ?>';">
            <?php if ($car['availability']): ?>
              <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">Available</div>
            <?php else: ?>
              <div class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded">Unavailable</div>
            <?php endif; ?>
          </div>
          <div class="p-4">
            <h3 class="text-xl font-semibold mb-2"><?php echo htmlspecialchars($car['name']); ?></h3>
            <div class="flex justify-between items-center mb-2">
              <span class="text-gray-600"><i class="fas fa-users mr-1"></i> <?php echo $car['seating']; ?> seats</span>
              <span class="text-gray-600"><i class="fas fa-gas-pump mr-1"></i> <?php echo htmlspecialchars($car['fuel']); ?></span>
            </div>
            <div class="flex justify-between items-center mb-4">
              <span class="text-lg font-bold text-brand-orange"><?php echo htmlspecialchars($car['price']); ?></span>
            </div>
            <a href="<?php echo $car['link']; ?>" class="block text-center bg-brand-orange hover:bg-orange-600 text-white py-2 rounded transition-colors duration-300 find-out-more">
              Find out more <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    
    <!-- View All Button -->
    <div class="text-center mt-8">
      <a href="/php/fleet.php" class="inline-block bg-brand-orange hover:bg-orange-600 text-white px-6 py-2 rounded-md font-medium">View All Vehicles</a>
    </div>
  </div>
</section>
