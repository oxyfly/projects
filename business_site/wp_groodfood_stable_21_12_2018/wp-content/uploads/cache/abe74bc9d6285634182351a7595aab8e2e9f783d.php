<header class="banner">
  <div class="container-fluid contacts-header">
    <div class="row">
      <div class="col-md-2 contact-header contact-align">
        <p class="contact-address contact-address-icon">Гродно, ул.Мясницкая, 16</p>
      </div>
      <div class="col-md-2 contact-header contact-align">
        <a href="tel:375152443000" class="contact-phone">375 (152) 44 30 00</a>
      </div>
      <div class="col-md-2 contact-header contact-align">
        <a href="mailto:info@grodfood.by" class="contact-mail">info@grodfood.by</a>
      </div>
      <div class="col-md-3 contact-align">
        <span></span>
      </div>
      <div class="col-md-1 contact-header contact-align">
        <span class="contact-search"></span>
      </div>
      <div class="col-md-2 contact-header contact-align">
        <span class="contact-auth"></span>
      </div>
    </div>
  </div>

  <div class="container nav-wrap">
    
    <nav class="nav-primary">
         <figure class="logo-header">
        <a href="#">
          <img class="logo" src="/wp-content/themes/grodfood/dist/images/page-1/logo.png" alt="Logo" title="">
        </a>
      </figure>
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
  </div>
</header>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 slide-img" src="/wp-content/themes/grodfood/dist/images/page-1/bg_1.jpg"
                 alt="Slide" title="">
            <div class="carousel-caption d-block">
                <h3 class="slide-food-descriprion">Каша ТМ Гродфуд это классическая<br>
                    консервированная каша с<br>
                    содержанием мяса более 37%. Остается<br>
                    только разогреть и на Вашем столе<br>
                    готовое сытное блюдо.</h3>
                <div class="btn-wrap">
                    <a href="http://test.byfly.by" class="btn btn-outline-light">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/wp-content/themes/grodfood/dist/images/page-1/bg_2.jpg" alt="оеSlide"
                 title="">
            <div class="carousel-caption d-block">
                <h3 class="slide-food-descriprion">Каша ТМ Гродфуд это классическая консервированная каша с содержанием
                    мяса более 37%. Остается только разогреть и на Вашем столе готовое сытное блюдо.</h3>
                <a href="http://test.byfly.by" class="btn btn-outline-light">Подробнее</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/wp-content/themes/grodfood/dist/images/page-1/bg_3.jpg" alt="Slide"
                 title="">
            <div class="carousel-caption d-block">
                <h3 class="slide-food-descriprion">Каша ТМ Гродфуд это классическая консервированная каша с содержанием
                    мяса более 37%. Остается только разогреть и на Вашем столе готовое сытное блюдо.</h3>
                <a href="http://test.byfly.by" class="btn btn-outline-light">Подробнее</a>
            </div>
        </div>
    </div>
</div>