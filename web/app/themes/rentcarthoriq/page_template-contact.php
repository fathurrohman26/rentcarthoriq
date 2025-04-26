<?php

/**
 * Template Name: Contact Template
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

?>


<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__wrap">
        <div class="page-header__shape-1"></div>
        <div class="container">
            <div class="page-header__inner">
                <div class="page-header__shape-2"></div>
                <div class="page-header__shape-3"></div>
                <div class="page-header__shape-4"></div>
                <div class="page-header__img-1">
                    <!-- <img src="assets/images/resources/page-header-img-1.png" alt="" /> -->
                    <div class="page-header__shape-5">
                        <!-- <img src="<?= rct_asset('/assets/images/shapes/page-header-shape-5.png') ?>" alt="" /> -->
                    </div>
                </div>
                <h2><?php the_title() ?></h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                        </li>
                        <li>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li><?php the_title() ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Contact Three Start-->
<section class="contact-three">
    <div class="container">
        <div class="contact-three__inner">
            <h3 class="contact-three__title">Appiontment Now</h3>
            <form class="contact-form-validated contact-three__form" action="<?= esc_url(home_url('/')) ?>" method="post" novalidate="novalidate">
                <input type="hidden" name="wa_target" value="<?= get_theme_mod('rct_contact_settings_appiontment_number') ?>">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-three__input-box">
                            <input type="text" name="name" placeholder="Your Name" required="" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-three__input-box">
                            <input type="email" name="email" placeholder="Your Email" required="" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-three__input-box">
                            <input type="text" name="Phone" placeholder="Phone" required="" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-three__input-box">
                            <div class="select-box">
                                <select class="selectmenu wide" name="service">
                                    <?php
                                    $rct_price_list = rct_price_list();
                                    foreach ($rct_price_list as $nc_sl) {
                                        echo '<option>' . $nc_sl . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="contact-three__input-box text-message-box">
                            <textarea name="message" placeholder="Message here.."></textarea>
                        </div>
                        <div class="contact-three__btn-box">
                            <button type="submit" class="thm-btn contact-three__btn">
                                Appiontment Now <span class="icon-arrow-up-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="result"></div>
        </div>
    </div>
</section>
<!--Contact Three End-->

<?php

get_template_part('template-parts/sections/contact');

get_footer();
