<?php // faq.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    .faq-section {
      max-width: 800px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .faq-item {
      margin-bottom: 20px;
      border-bottom: 1px solid #ccc;
      padding-bottom: 15px;
    }

    .faq-question {
      font-weight: bold;
      font-size: 1.2em;
      cursor: pointer;
      color: #1A428A;
    }

    .faq-answer {
      display: none;
      margin-top: 10px;
      color: #333;
    }

    .faq-question.active + .faq-answer {
      display: block;
    }
  </style>
</head>
<body>

  <?php include('includes/header.php'); ?>

  <main>
    <section class="hero">
      <h1>Frequently Asked Questions</h1>
      <p>This is the FAQ page. Answers coming soon.</p>
    </section>

    <section class="faq-section">
      <div class="faq-item">
        <div class="faq-question">This is the first question?</div>
        <div class="faq-answer">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">Another placeholder question?</div>
        <div class="faq-answer">
          Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">Can I add more questions later?</div>
        <div class="faq-answer">
          Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada.
        </div>
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

    // Toggle FAQ answers
    const questions = document.querySelectorAll('.faq-question');
    questions.forEach(q => {
      q.addEventListener('click', () => {
        q.classList.toggle('active');
      });
    });
  </script>

</body>
</html>

