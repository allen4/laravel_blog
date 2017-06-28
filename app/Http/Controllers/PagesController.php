<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    public function getIndex() {
        return view('pages.Welcome');
    }

    public function getAbout() {
        $first_name = 'Yifeng';
        $last_name = 'Zhu';

        $full_name = $first_name . $last_name;

        return view('pages.about')->withFullname($full_name);
    }

    public function getContact() {
        return view('pages.contact');
    }
}