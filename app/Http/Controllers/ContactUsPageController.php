<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{
    public function index()
    {
        $university_logos = [
            [
                'image_path' => 'university_logo_1.png',
                'href' => 'https://www.apu.edu.my',
            ],
            [
                'image_path' => 'university_logo_2.png',
                'href' => 'https://cyberjaya.edu.my',
            ],
            [
                'image_path' => 'university_logo_3.png',
                'href' => 'https://www.msu.edu.my',
            ],
            [
                'image_path' => 'university_logo_4.png',
                'href' => 'https://sunwayuniversity.edu.my',
            ],
            [
                'image_path' => 'university_logo_5.png',
                'href' => 'https://www.ucsiuniversity.edu.my',
            ],
            [
                'image_path' => 'university_logo_6.png',
                'href' => 'https://mahsa.edu.my',
            ],
            [
                'image_path' => 'university_logo_7.png',
                'href' => 'https://binary.edu.my',
            ],
            [
                'image_path' => 'university_logo_8.png',
                'href' => 'https://www.perdanauniversity.edu.my',
            ],
            [
                'image_path' => 'university_logo_9.png',
                'href' => 'https://university.taylors.edu.my/en.html',
            ],
            [
                'image_path' => 'university_logo_10.png',
                'href' => 'https://www.mmu.edu.my',
            ],
        ];
        return view('home.contact_us',compact('university_logos'));
    }
}
