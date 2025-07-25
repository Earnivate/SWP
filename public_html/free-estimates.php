<?php // free-estimates.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Free Estimates - Superior Wash Pros</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

  <?php include('includes/header.php'); ?>

  <main class="hero">
    <div class="estimate-content">
      <h1>Get a Free Estimate</h1>
      <p>Let us know what you need cleaned, and we’ll get back to you with a no-obligation quote.</p>
      <p>In the meantime, feel free to explore our <a href="services.php">services</a> or <a href="contact.php">contact us</a> with any questions.</p>
    </div>

    <div class="estimate-form-container">
      <form action="free-estimate-form-handler.php" method="POST" class="estimate-form">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required />

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required />

        <label for="message">What do you need cleaned?</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Request Estimate</button>
      </form>
    </div>
  </main>

  <footer class="site-footer">
    <p>&copy; <?php echo date("Y"); ?> Superior Wash Pros. All rights reserved.</p>
  </footer>

</body>
</html>

