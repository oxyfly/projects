<footer class="content-info">
    <div class="social">
        <h4 class="social-title">Следите за новостями в наших социальных сетях</h4>
        <div class="social-icons">
          <span>
          <a href="#">
              <img src="<?= App\asset_path('images/page-4/icons/inst.svg'); ?>" alt="Image" title="">
          </a>
      </span>
            <span>
          <a href="#">
              <img src="<?= App\asset_path('images/page-4/icons/vk.svg'); ?>" alt="Image" title="">
          </a>
      </span>
            <span>
          <a href="#">
              <img src="<?= App\asset_path('images/page-4/icons/fb.svg'); ?>" alt="Image" title="">
          </a>
      </span>
        </div>
    </div>

    <div class="inst-wrapper">
        <div class="inst-block">
            <img src="<?= App\asset_path('images/page-4/inst/inst-01.jpg'); ?>" alt="Image" title="">
        </div>
        <div class="inst-block">
            <img src="<?= App\asset_path('images/page-4/inst/inst-02.jpg'); ?>" alt="Image" title="">
        </div>
        <div class="inst-block">
            <img src="<?= App\asset_path('images/page-4/inst/inst-03.jpg'); ?>" alt="Image" title="">
        </div>
        <div class="inst-block">
            <img src="<?= App\asset_path('images/page-4/inst/inst-04.jpg'); ?>" alt="Image" title="">
        </div>
        <div class="inst-block">
            <img src="<?= App\asset_path('images/page-4/inst/inst-05.jpg'); ?>" alt="Image" title="">
        </div>
    </div>

    <div class="container-fluid footer-container">
        <div class="footer-info">
            <div class="row">
                <div class="col">
                  <?php dynamic_sidebar('FooterAbout'); ?>
                </div>
                <div class="col">
                  <?php dynamic_sidebar('FooterLinks'); ?>
                </div>
                <div class="col">
                  <?php dynamic_sidebar('FooterContacts'); ?>
                </div>
                <div class="col">
                  <?php dynamic_sidebar('FooterSendForm'); ?>
                </div>
            </div>
            
        </div>
        <hr style="color: black">
        <div class="footer-lowest">
            <p class="footer-lowest-text">2018 | Все права на материалы и тексты защищены.</p>
            <a class="main-logo" href="http://www.ruslanyushkevich.com/" target="_blank">
                <img class="main-logo-img" src="/wp-content/themes/grodfood/dist/images/main-logo.svg" alt="Image" title="Image">
            </a>
        </div>
    </div>
</footer>
