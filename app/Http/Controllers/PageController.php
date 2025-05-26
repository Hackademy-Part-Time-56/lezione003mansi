<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //estrazione
    //incapsulamento
    //astrazione
    public $services = [
        [
            'id' => 1,
            'slug' => 'montaggio-mobili-ikea',
            'title' => 'Montaggio mobili Ikea oggi',
            'price' => 12.90,
            'description' => 'sdff  dfddadaasdas',
            'image' => 'https://hd2.tudocdn.net/766375?w=550&h=550'
        ],
        [
            'id' => 2,
            'slug' => 'consulenza-strategica',
            'title' => 'Consulenza Strategica',
            'price' => 2.90,
            'description' => 'sdadadf fd dasdas',
            'image' => '/images/giove.jpg'
        ],
        [
            'id' => 3,
            'slug' => 'innovazione-digitale',
            'title' => 'Innovazione Digitale',
            'price' => 0,
            'description' => 'sdadad dfdasdas',
            'image' => 'https://hd2.tudocdn.net/860822?w=729&h=437'
        ],
        [
            'id' => 4,
            'slug' => 'formazione-professionale',
            'title' => 'Formazione Professionale',
            'price' => 32.90,
            'description' => 'sdaddd  aasdfdfd ddas',
            'image' => 'https://hd2.tudocdn.net/766375?w=550&h=550'
        ],
    ];
    public function homepage()
    {
        //resources/views/homepage.blade.php
        return view('homepage');
    }

    public function chisiamo()
    {
        return view('chisiamo');
    }

    public function servizi()
    {

        return view('servizi', ['services' => $this->services]);
    }

    public function detail($service)
    {
        foreach ($this->services as $element) {

            if ($service == $element['slug']) {

                return view('dettaglio', ['service' => $element]);
                //return view('dettaglio', compact('element'));

            }
        }

        abort(404);
    }
}
