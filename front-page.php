<?php get_header(); ?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="../site.webmanifest">
  <link rel="apple-touch-icon" href="../icon.png">
  <!-- Place favicon.ico in the root directory -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400&display=swap" rel="stylesheet">
  <!-- FontAwesome CDN version 5.5 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">
</head>

<body>

  <main>
      <div id="primary" class="home-page hero-content">
    <div class="main-content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <a class="button" href="<?php echo site_url('/blog/') ?>">View Our Work</a>
      <?php endwhile; // end of the loop. ?>
    </div><!-- .main-content -->
  </div><!-- #primary -->
    <section class="mission">
     
    </section> <!-- contact-info -->

    <div class="headline">
      <h1> **NEW LITTER BORN SEPTEMBER 16TH** <br><a href = "mailto: rehctelf101@gmail.com">Send Email for Availability</a><br> Or Call 330-827-1769</h1>
    </div>

    <section class="contact-section">
      <div class="content-wrapper">
        <h2 class="about-header">About Fletcher's Saints</h2>
        <h4>Fletcher's Saints is a family owned kennel that has been rising quality top notch Saint Bernards since 2002. </h4>
        <a href="about">
        <button class="button" >More About Us!</button>
        </a>
        <?php the_content(); ?>
        
    </section>
  </main> <!-- main wrapper -->

  <footer>
    <div class="content-wrapper">
      

  <script src="../js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../js/vendor/jquery-3.3.1.min.js"><\/script>')

  </script>
  <script src="../js/plugins.js"></script>
  <script src="../js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')

  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
