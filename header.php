<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- WordPress Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php wp_head(); ?>

</head>
<body>

  <!-- Header Navigation Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="blog-masthead">
    <div class="container">
      <div class="row">
        <nav class="blog-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>
      </div>
    </div>
  </div>

  <div class="container">
