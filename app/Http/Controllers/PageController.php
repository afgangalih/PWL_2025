<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {

    public function index() {
        return 'HelloWorld!';
    }

    public function about() {
        return '2341760004';
    }

    public function articles ($id) {
        return 'Halaman Artikel dengan Id-'.$id;
    }


}
