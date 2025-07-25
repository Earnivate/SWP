<?php // services.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Services</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    .services-section {
      max-width: 1000px;
      margin: 60px auto;
      padding: 20px;
    }

    .services-section h2 {
      text-align: center;
      color: #1A428A;
      margin-bottom: 40px;
    }

    .service-card {
      background-color: #f9f9f9;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      margin-bottom: 30px;
    }

    .service-card h3 {
      color: #1A428A;
      margin-bottom: 10px;
    }

    .service-card p {
      color: #444;
      line-height: 1.6;
    }
  </style>
</head>
<body>

  <?php include('includes/header.php'); ?>

  <main>
    <section class="services-section">
      <h2>Our Services</h2>

      <div class="service-card">
        <h3>Service 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus.</p>
      </div>

      <div class="service-card">
        <h3>Service 2</h3>
        <p>Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada.</p>
      </div>

      <div class="service-card">
        <h3>Service 3</h3>
        <p>Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
      </div>
    </section>
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

