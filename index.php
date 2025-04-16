<?php
// Home page converted from src/pages/Index.tsx
include_once 'includes/template.php';
startblock('content');
?>
<div class="min-h-screen">
  <?php include 'includes/hero.php'; ?>
  <?php include 'includes/featured-cars.php'; ?>
  <?php include 'includes/why-choose-us.php'; ?>
  <?php include 'includes/testimonials.php'; ?>
  <?php include 'includes/call-to-action.php'; ?>
</div>
<?php
endblock();
include 'layout.php';
?>
