  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <header id="masthead" class="container">
    <div class="page-header clearfix">
      <a href="<?php echo site_url(); ?>" class="top-logo">
        <span class="title"><?php bloginfo('name'); ?></span>
      </a>
      <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'top-nav', 'menu_class' => 'nav-menu' ) ); ?>
      </nav>
    </div>
  </header>

  <div id="main" class="site-main clearfix">