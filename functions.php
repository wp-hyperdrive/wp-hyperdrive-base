<?php

use Hyperdrive\AdminPages\Models\AdminPage;
use Hyperdrive\Core\Bootstrap;

defined('ABSPATH') or die('That\'s not how the Force works!');

Bootstrap::load();

add_filter(
    'wp_hyperdrive_admin_pages',
    function($pages) {
        $page = new AdminPage();

        $page->pageTitle = 'Test';
        $page->menuTitle = 'Menu Title';
        $page->capability = 'manage_options';
        $page->menuSlug  = 'menu-slug-test';
        $page->callback = function() { echo 'TEST'; };
        $page->iconUrl = 'dashicons-dashboard';
        $page->position = 59;

        $pages[] = $page;
        return $pages;
    }
);
