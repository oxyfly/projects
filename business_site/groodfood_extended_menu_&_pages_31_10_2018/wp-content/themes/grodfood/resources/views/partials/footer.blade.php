<footer class="content-info">
    <div class="container-fluid footer-container">
        <div class="footer-info animated zoomIn delay-1s">
            <div class="row">
                <div class="col-12 col-xl-4">
                    <?php dynamic_sidebar('FooterAbout'); ?>
                </div>
                <div class="col-12 col-xl-3">
					<?php dynamic_sidebar( 'FooterLinks' ); ?>
                </div>
                <div class="col-12 col-xl-2">
					<?php dynamic_sidebar( 'FooterContacts' ); ?>
                </div>
                <div class="col-12 col-xl-2">
					<?php dynamic_sidebar( 'FooterSendForm' ); ?>
                </div>
            </div>
        </div>
        {{--@php dynamic_sidebar('sidebar-footer') @endphp--}}
        <hr style="color: black">
        <div class="footer-lowest">
            <p class="footer-lowest-text">2018 | Все права на материалы и тексты защищены.</p>
            <a class="main-logo animated fadeInUp delay-1s" href="http://www.ruslanyushkevich.com/" target="_blank">
                <img class="main-logo-img" src="/wp-content/themes/grodfood/dist/images/main-logo.svg" alt="Image"
                     title="Image">
            </a>
            <img class="arrow-top" src="/wp-content/themes/grodfood/dist/images/arrow-top.svg" alt="Image"
                 title="Scroll Page">
        </div>
    </div>
</footer>
