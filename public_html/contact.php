<?php // contact.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    .contact-section {
      max-width: 800px;
      margin: 60px auto;
      padding: 40px;
      background-color: #f9f9f9;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .contact-section h2 {
      color: #1A428A;
      margin-bottom: 10px;
    }

    .contact-section p {
      margin-bottom: 25px;
    }

    .placeholder-box {
      border: 2px dashed #ccc;
      padding: 30px;
      text-align: center;
      color: #666;
      font-style: italic;
      background-color: #fff;
      border-radius: 8px;
    }
  </style>
</head>
<body>

  <?php include('includes/header.php'); ?>

  <main>
    <section class="contact-section">
      <h2>Contact Superior Wash Pros</h2>
      <p>Owner: <strong>Watson Manuel</strong></p>

      <div class="placeholder-box">
        Contact form will go here.
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

