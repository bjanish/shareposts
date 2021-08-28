<?php

class Pages {
    public function __construct() {
    }
    public function index() {
        echo 'This is the home page';
    }
    public function about($id) {
        echo $id;
    }
}
