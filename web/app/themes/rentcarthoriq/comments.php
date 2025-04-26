<?php

if (!defined('ABSPATH')) {
    exit;
}

if (post_password_required()) {
    return;
}

if (!class_exists('WpdiscuzCore')) {
    echo '<p>Please activate WP Dizcuz Plugin</p>';
    return;
}

if (comments_open()) {
    comment_form();
}
