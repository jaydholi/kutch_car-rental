<?php
// Main layout template
include_once 'includes/template.php';

// Simple error handling
function handleError($errno, $errstr, $errfile, $errline) {
    if (!(error_reporting() & $errno)) {
        // This error code is not included in error_reporting
        return false;
    }
    
    // Log the error
    error_log("Error [$errno]: $errstr in $errfile on line $errline");
    
    return true;
}

set_error_handler('handleError');

// Check if the current page has a hero section
$hasHero = false;
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage === 'index.php') {
    $hasHero = true;
}

// Define common meta tags
$pageTitle = "Kutch Car Rental - Premium Car Rental Services";
$pageDescription = "Explore Kutch with our premium car rental services. We offer a wide range of vehicles for all your travel needs.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <title><?php echo $pageTitle; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" href="/php/image/favicon.ico" type="image/x-icon">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/php/css/custom.css">
    <link rel="stylesheet" href="/php/css/custom-part2.css">
    
    <!-- Brand Colors -->
    <style>
        :root {
            --brand-blue: #1e40af;
            --brand-orange: #f97316;
        }
        
        .text-brand-blue {
            color: var(--brand-blue);
        }
        
        .bg-brand-blue {
            background-color: var(--brand-blue);
        }
        
        .text-brand-orange {
            color: var(--brand-orange);
        }
        
        .bg-brand-orange {
            background-color: var(--brand-orange);
        }
    </style>
</head>
<body class="<?php echo $hasHero ? 'has-hero' : ''; ?>">
    <?php include 'includes/navbar.php'; ?>
    
    <main>
        <?php renderBlock('content'); ?>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <!-- WhatsApp Button -->
    <a href="https://wa.me/917874636363" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition-colors z-50">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>
    
    <!-- Call Button -->
    <a href="tel:+917874636363" class="fixed bottom-6 left-6 bg-blue-500 text-white p-3 rounded-full shadow-lg hover:bg-blue-600 transition-colors z-50">
        <i class="fas fa-phone-alt text-2xl"></i>
    </a>
    
    <!-- Custom JavaScript -->
    <script>
        // Add any global JavaScript here
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize any components that need JavaScript
            console.log('Document loaded and ready');
        });
    </script>
</body>
</html>
