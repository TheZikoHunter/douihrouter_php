<?php
require_once 'Router.php';
Router::register('/contact', 'contact.php');
Router::register('/pricing', 'pricing.php');
Router::register('/blog/post', 'post.php');

Router::run($_SERVER['REQUEST_URI']);