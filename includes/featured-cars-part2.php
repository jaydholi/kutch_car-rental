<?php
// Continuation of featured-cars.php: car cards and JavaScript for filtering and booking
?>
      <?php foreach ($cars as $car): ?>
        <div class="card fade-in" 
             data-seating="<?php echo $car['seating']; ?>" 
             data-fuel="<?php echo htmlspecialchars($car['fuel']); ?>" 
             data-availability="<?php echo $car['availability'] ? 'available' : 'unavailable'; ?>">
          <img src="<?php echo htmlspecialchars($car['image']); ?>" alt="<?php echo htmlspecialchars($car['name']); ?>" class="car-image" />
          <h3 class="text-xl font-semibold mb-2"><?php echo htmlspecialchars($car['name']); ?></h3>
          <p class="mb-1"><strong>Seating:</strong> <?php echo $car['seating']; ?> seats</p>
          <p class="mb-1"><strong>Fuel Type:</strong> <?php echo htmlspecialchars($car['fuel']); ?></p>
          <p class="mb-2"><strong>Price:</strong> <?php echo htmlspecialchars($car['price']); ?></p>
          <?php if ($car['availability']): ?>
            <span class="badge-available">Available</span>
          <?php else: ?>
            <span class="badge-unavailable">Unavailable</span>
          <?php endif; ?>
          <a href="<?php echo $car['link']; ?>" class="book-btn mt-4" data-car="<?php echo htmlspecialchars($car['name']); ?>">Book Now</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.book-btn');
    buttons.forEach(button => {
      button.addEventListener('click', (e) => {
        if (button.getAttribute('href') === '#') {
          e.preventDefault();
          const carName = button.getAttribute('data-car');
          const message = encodeURIComponent(`Hello, I am interested in booking the car: ${carName}`);
          const whatsappNumber = '7874636363';
          const url = `https://wa.me/${whatsappNumber}?text=${message}`;
          window.open(url, '_blank');
        }
      });
    });

    // Filtering logic
    const seatingFilter = document.getElementById('filter-seating');
    const fuelFilter = document.getElementById('filter-fuel');
    const availabilityFilter = document.getElementById('filter-availability');
    const carCards = document.querySelectorAll('.featured-cars-grid .card');

    function filterCars() {
      const seatingValue = seatingFilter.value;
      const fuelValue = fuelFilter.value;
      const availabilityValue = availabilityFilter.value;

      carCards.forEach(card => {
        const matchesSeating = seatingValue === '' || card.dataset.seating === seatingValue;
        const matchesFuel = fuelValue === '' || card.dataset.fuel === fuelValue;
        const matchesAvailability = availabilityValue === '' || card.dataset.availability === availabilityValue;

        if (matchesSeating && matchesFuel && matchesAvailability) {
          card.style.display = 'block';
          card.classList.add('fade-in');
        } else {
          card.style.display = 'none';
          card.classList.remove('fade-in');
        }
      });
    }

    seatingFilter.addEventListener('change', filterCars);
    fuelFilter.addEventListener('change', filterCars);
    availabilityFilter.addEventListener('change', filterCars);
  });
</script>
