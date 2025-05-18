<?php include_once '../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>10 Seater Tempo Traveller Rental</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background: url('../images/tempo-traveller.jpg') center center/cover no-repeat;
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 1px 1px 3px #000;
    }
    .feature-icon {
      font-size: 2rem;
      color: #007bff;
    }
  </style>
</head>
<body>

  <div class="hero">
    <div class="text-center">
      <h1 class="display-4">10 Seater Tempo Traveller</h1>
      <p class="lead">Comfortable | Spacious | Affordable</p>
    </div>
  </div>

  <div class="container py-5">
    <div class="row mb-5">
      <div class="col-md-6">
        <img src="../images/tempo-inside.jpg" class="img-fluid rounded shadow" alt="Tempo Traveller Interior">
      </div>
      <div class="col-md-6">
        <h2>About the Vehicle</h2>
        <p>
          Our 10 Seater Tempo Traveller is perfect for family trips, group outings, and tours.
          Enjoy a comfortable and hassle-free journey with ample space, air conditioning, and professional drivers.
        </p>
        <ul class="list-unstyled">
          <li><i class="feature-icon bi bi-check-circle"></i> Comfortable Push-back Seats</li>
          <li><i class="feature-icon bi bi-check-circle"></i> Fully Air-Conditioned</li>
          <li><i class="feature-icon bi bi-check-circle"></i> Music System & Charging Ports</li>
          <li><i class="feature-icon bi bi-check-circle"></i> Experienced Drivers</li>
        </ul>
      </div>
    </div>

    <div class="row mb-5 text-center">
      <div class="col-md-4">
        <h4>Rental Charges</h4>
        <p>₹18/km (Outstation)</p>
        <p>₹300/hour (Local)</p>
      </div>
      <div class="col-md-4">
        <h4>Seating Capacity</h4>
        <p>10 Passengers + Driver</p>
      </div>
      <div class="col-md-4">
        <h4>Fuel Type</h4>
        <p>Diesel</p>
      </div>
    </div>

    <div class="text-center">
      <a href="../contact.php" class="btn btn-primary btn-lg">Book Now</a>
    </div>
  </div>

  <div class="bg-light py-4 text-center">
    <p>For bookings & inquiries, call us at <strong>+91-98765 43210</strong> or email at <strong>info@yourcompany.com</strong></p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include_once '../includes/footer.php'; ?>
