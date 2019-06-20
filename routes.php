<?php

// Create Router instance
$router = new Router();

$router->get('/', 'PagesController@home' );
$router->get('/about', 'PagesController@about');
$router->get('/contactez-nous', 'PagesController@contact');
$router->get('/article', 'PagesController@addArticle');
$router->post('/article', 'PagesController@ajoutArticle');
// Run it!
$router->run();