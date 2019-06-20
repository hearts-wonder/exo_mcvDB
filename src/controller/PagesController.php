<?php

// PagesController.php

class PagesController {

    public function home() {

        view('pages.home');

    }

    public function about() {

        view('pages.about');
    }

    public function contact() {

        view('pages.contactez-nous');

    }

    public function traitementForm() {
        dump($_POST);
    }

    public function addArticle() {

        view('pages.ajoutArticle');
    }

    public function ajoutArticle() {
        dump($_POST);
    }

}