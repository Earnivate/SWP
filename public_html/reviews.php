<?php // reviews.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reviews</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    .reviews-section {
      max-width: 800px;
      margin: 60px auto;
      padding: 40px;
      background-color: #f9f9f9;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .reviews-section h2 {
      color: #1A428A;
      font-size: 1.6em;
    }
  </style>
</head>
<body>

  <?php include('includes/header.php'); ?>

  <main>
    <section class="reviews-section">
      <h2>Google Reviews will be here.</h2>
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

