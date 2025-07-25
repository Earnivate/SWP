<?php // index.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Superior Wash Pros</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    .hero {
      background-color: #1A428A;
      color: white;
      padding: 80px 20px;
      text-align: center;
    }

    .hero h1 {
      font-size: 3em;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 1.3em;
      max-width: 600px;
      margin: 0 auto 30px;
    }

    .cta-button {
      background-color: #fff;
      color: #1A428A;
      padding: 12px 30px;
      font-size: 1em;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .cta-button:hover {
      background-color: #e0e0e0;
    }

    .intro {
      text-align: center;
      padding: 60px 20px;
      background-color: #f9f9f9;
    }

    .intro h2 {
      color: #1A428A;
      margin-bottom: 20px;
    }

    .features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 40px 20px;
      gap: 20px;
      background-color: #ffffff;
    }

    .feature-card {
      background-color: #f2f2f2;
      padding: 30px;
      border-radius: 12px;
      width: 300px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      text-align: center;
    }

    .feature-card h3 {
      color: #1A428A;
      margin-bottom: 10px;
    }

    .feature-card p {
      color: #444;
    }

    @media (max-width: 768px) {
      .feature-card {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <?php include('includes/header.php'); ?>

  <main>
    <section class="hero">
      <h1>Superior Wash Pros</h1>
      <p>High-quality residential and commercial exterior cleaning. Fast. Reliable. Professional.</p>
      <a href="/free-estimates.php" class="cta-button">Get a Free Estimate</a>
    </section>

    <section class="intro">
      <h2>Welcome to Superior Wash Pros</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae ligula a justo elementum pulvinar. In placerat sapien eu semper feugiat.</p>
    </section>

    <section class="features">
      <div class="feature-card">
        <h3>Driveway Cleaning</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id velit sit amet justo accumsan pretium.</p>
      </div>

      <div class="feature-card">
        <h3>Roof Softwash</h3>
        <p>Aliquam erat volutpat. Suspendisse sit amet sapien elit. Integer in malesuada justo.</p>
      </div>

      <div class="feature-card">
        <h3>Fleet Washing</h3>
        <p>Donec vel magna ut erat consequat ullamcorper. Praesent fermentum eros id felis pharetra tincidunt.</p>
      </div>
    </section>
    
    <section class="services-visual">
    <h2 style="text-align: center; color: #1A428A;">What We Clean</h2>
    <div style="display: flex; justify-content: center; padding: 20px;">
      <img src="assets/images/services.jpg" alt="Pressure Washing Services Overview" style="max-width: 100%; height: auto; border-				 radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);" />
    </div>
  </section>
        
    <form action="includes/free-estimate-form-handler.php" method="POST" class="estimate-form">
  <label for="name">Name*</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email*</label>
  <input type="email" id="email" name="email" required>

  <label for="phone">Phone</label>
  <input type="text" id="phone" name="phone">

  <label for="message">Message*</label>
  <textarea id="message" name="message" rows="5" required></textarea>

  <button type="submit">Submit Request</button>
</form>

  </main>

  <footer class="site-footer">
    <p>&copy; <?php echo date("Y"); ?> Superior Wash Pros. All rights reserved.</p>
  </footer>

  <script>
    function toggleMenu() {
      const menu = document.getElementById("dropdownMenu");
      menu.classList.toggle("active");
    }
  </script>

</body>
</html>

