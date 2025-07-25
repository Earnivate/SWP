<?php // header.php ?>
<header>
  <nav class="navbar">
    <!-- Left spacer for layout control -->
    <div class="left-side"></div>

    <!-- Logo centered -->
    <div class="logo-container">
      <a href="/index.php">
        <img src="/assets/images/logo.png" alt="Superior Wash Pros Logo" class="logo" />
      </a>
    </div>

    <!-- Free Estimates button between logo and menu -->
    <div class="estimates-button">
      <a href="/free-estimates.php">
        <img src="/assets/images/free_estimates_logo.png" alt="Free Estimates Button" class="free-estimates" />
      </a>
    </div>

    <!-- Menu icon far right -->
    <div class="menu-icon" onclick="toggleMenu()">&#9776;<br><span>Menu</span></div>
  </nav>

  <!-- Dropdown menu -->
  <ul class="nav-links" id="dropdownMenu">
    <li><a href="/index.php">Home</a></li>
    <li><a href="/services.php">Services</a></li>
    <li><a href="/faq.php">F.A.Q.</a></li>
    <li><a href="/media.php">Gallery</a></li>
    <li><a href="/contact.php">Contact</a></li>
    <li><a href="/free-estimates.php">Free Estimates</a></li>
    <li><a href="/reviews.php">Reviews</a></li>
  </ul>
</header>

<!-- JavaScript to toggle dropdown -->
<script>
  function toggleMenu() {
    const menu = document.getElementById('dropdownMenu');
    menu.classList.toggle('active');
  }
</script>

