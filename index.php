<?php include ('inc/header/header-home.php'); ?>   declare(strict_types=1); 
  <!-- LATEST PRODUCTS -->
  <?php include ('inc/latest-product-section.php'); ?> 
  <!-- ABOUT US -->
  <?php include ('inc/about-section.php'); ?> 
  <!-- DISCOUNT -->
  <?php include ('inc/discount-section.php'); ?> 
  <!-- LATEST FROM BLOG -->
  <?php include ('inc/blog-section.php'); ?> 
  <!-- TESTIMONIAL -->
  <?php include ('inc/testimonial-section.php'); ?> 
  <!-- Footer -->
  <?php include ('inc/footer/footer-section.php'); ?> 
  <?php 
  for ($i = 0; $i < 3; $i++) {
    include ('inc/footer/footer-section.php');
  }
  ?>
