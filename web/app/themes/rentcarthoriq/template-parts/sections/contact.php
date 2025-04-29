<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<!--Contact Four Start-->
<section class="contact-four">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="contact-four__left">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">Contact</span>
                        </div>
                        <h2 class="section-title__title title-animation">
                            <?= wp_kses(nl2br(get_theme_mod('rct_contact_settings_title')), ['br' => []]) ?>
                        </h2>
                    </div>
                    <p class="contact-four__text">
                        <?= esc_html(get_theme_mod('rct_contact_settings_description')) ?>
                    </p>
                    <ul class="contact-four__contact-list list-unstyled">
                        <li>
                            <div class="contact-four__contact-title-box">
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <p>Alamat</p>
                            </div>
                            <h5><?= esc_html(get_theme_mod('rct_contact_settings_address')) ?></h5>
                        </li>
                        <li>
                            <div class="contact-four__contact-title-box">
                                <div class="icon">
                                    <span class="icon-phone"></span>
                                </div>
                                <p>Contact / WhatsApp</p>
                            </div>
                            <h5>
                                <a href="<?= esc_url(rct_get_contact_link(get_theme_mod('rct_contact_settings_contact_1'), get_theme_mod('rct_contact_settings_contact_1_link'))) ?>">
                                    <?= esc_html(get_theme_mod('rct_contact_settings_contact_1')) ?>
                                </a>
                            </h5>
                            <h5>
                            <a href="<?= esc_url(rct_get_contact_link(get_theme_mod('rct_contact_settings_contact_2'), get_theme_mod('rct_contact_settings_contact_2_link'))) ?>">
                                    <?= esc_html(get_theme_mod('rct_contact_settings_contact_2')) ?>
                                </a>
                            </h5>
                        </li>
                        <li>
                            <div class="contact-four__contact-title-box">
                                <div class="icon">
                                    <span class="icon-mail"></span>
                                </div>
                                <p>Email</p>
                            </div>
                            <h5>
                                <a href="mailto:<?= esc_attr(get_theme_mod('rct_contact_settings_email')) ?>"><?= esc_html(get_theme_mod('rct_contact_settings_email')) ?></a>
                            </h5>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="contact-four__right">
                    <?php
                    $rct_contact_map_src = get_theme_mod('rct_contact_settings_map_embed_url');
                    if (!empty($rct_contact_map_src)) {
                        echo '<iframe src="' . esc_url($rct_contact_map_src) . '" class="google-map__two" allowfullscreen></iframe>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Four End-->
