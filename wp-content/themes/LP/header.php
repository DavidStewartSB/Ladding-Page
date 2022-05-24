<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--SEO Geral-->
    <title>BrandName - Ladding Page</title>
    <link rel="canonical" href="https://localhost/LP/home">
    <meta name="description" content="Problems Trying to resolve the conflict between the two major realms of Classical physics: Newtonian Mechanics">
    <meta name="author" content="ModalGR">
    <meta name="rebots" content="index, nofollow">
    <!--Google+ / Schema.org-->
    <meta itemprop="name" content="BrandName - Ladding Page">
    <meta itemprop="description" content="We focus on ergonomics and meeting you where you work. It's only a keystroke away">
    <meta itemprop="image" content="http://localhost/LP/assets/testimonial-user-cover-190.webp">
    <link href="https://plus.google.com/+localhost/LP" rel="publisher">
    <!--Open Graph Facebook-->
    <meta property="og:title" content="BrandName - Ladding Page">
    <meta property="og:description" content="Problems Trying to resolve the conflict between the two major realms of Classical physics: Newtonian Mechanics">
    <meta property="og:url" content="localhost/lp">
    <meta property="og:BrandName_Ladding-Page" content="BrandName - Ladding Page">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://localhost/LP/assets/testimonial-user-cover-190.webp">
    <!-- Twitter -->
    <meta name="twitter:title" content="BrandName - Ladding Page">
    <meta name="twitter:description" content="Problems Trying to resolve the conflict between the two major realms of Classical physics: Newtonian Mechanics">
    <meta name="twitter:url" content="localhost/lp">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="http://localhost/LP/assets/testimonial-user-cover-190.webp">
    <meta name="twitter:creator" content="@modalgr">
    <!--Conteúdos externos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php echo get_theme_root_uri();?>/LP/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <?php wp_head()?>
</head>
<body>
<section id="layout1">
<div class='back-image'>
    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-dark" role="navigation">
  <div class="nav container lg">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">BrandName</a>
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'nav',
            'container_class'   => 'container px-4 px-lg-5',
            'container_id'      => 'navbarNavAltMarkup',
            'menu_class'        => 'navbar-nav ms-auto py-5 py-lg-0',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    <button type="button" class="btn btn-primary btn-lg mx-5 rsgt">Become a Member</button>
</div>
</nav>
<?php if(is_front_page()) : 
    echo "Estou na front-page";
    endif;?> 
</header>
