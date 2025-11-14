<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $posts = [
        'universita-bumigora' => [
            'slug' => 'universita-bumigora',
            'title' => 'Universita Bumigora',
            'image' => 'ubgg.jpg',
            'excerpt' => 'Terkenal Akan Jurusan Komputernya yang tiada duanya, selalu memenangi kejuaraan komputer di daerah NTB 🥇',
            'body' => 'Terkenal Akan Jurusan Komputernya yang tiada duanya, selalu memenangi kejuaraan komputer di daerah NTB. Detail lebih lengkap bisa dituliskan di sini.'
        ],
        'universitas-mataram' => [
            'slug' => 'universitas-mataram',
            'title' => 'Universitas Mataram',
            'image' => 'unram.jpeg',
            'excerpt' => 'UNRAM saat ini menjadi salah satu perguruan tinggi negeri unggul dengan peningkatan kualitas penyelenggaraan pendidikan yang signifikan.',
            'body' => 'Universitas Mataram (UNRAM) ... (isi lengkap)'
        ],
        'uin-mataram' => [
            'slug' => 'uin-mataram',
            'title' => 'UIN (State Islamic University of Mataram)',
            'image' => 'UIN.jpg',
            'excerpt' => 'Perguruan tinggi Islam negeri yang menyelenggarakan pendidikan akademik dan disiplin ilmu pengetahuan.',
            'body' => 'UIN ... (isi lengkap)'
        ],
        'undikma' => [
            'slug' => 'undikma',
            'title' => 'Undikma (Universitas Pendidikan Mandalika)',
            'image' => 'undikma.jpg',
            'excerpt' => 'Berdiri pada tahun 2019, hasil penggabungan IKIP Mataram dan Universitas Nusa Tenggara Barat.',
            'body' => 'Undikma ... (isi lengkap)'
        ],
        'unw' => [
            'slug' => 'unw',
            'title' => 'Universitas Nahdlatul Wathan Mataram',
            'image' => 'unw.jpg',
            'excerpt' => 'Salah satu perguruan tinggi swasta di bawah organisasi kemasyarakatan terbesar di NTB.',
            'body' => 'UNW ... (isi lengkap)'
        ],
        'unizar' => [
            'slug' => 'unizar',
            'title' => 'Unizar (Universitas Islam Al-Azhar)',
            'image' => 'unizar.webp',
            'excerpt' => 'Universitas Islam swasta unggulan di Nusa Tenggara Barat yang berlandaskan Pancasila dan UUD 1945.',
            'body' => 'UNIZAR ... (isi lengkap)'
        ],
    ];

    public function home()
    {
        $profiles = [
            [
                'name' => 'ZahwaAuliaPutri',
                'image' => 'wa.jpg',
                'bio' => 'begandang is in my blood cause all the projects wont solve itself 😎',
                'id' => '2301010103'
            ],
            [
                'name' => 'Nirmayana',
                'image' => 'nir.jpg',
                'bio' => 'professional front end designer',
                'id' => '2301010103'
            ]
        ];

        return view('home', compact('profiles'));
    }

    public function about()
    {
        $posts = $this->posts;
        return view('about', compact('posts'));
    }

    public function post($slug)
    {
        if (!isset($this->posts[$slug])) {
            abort(404);
        }
        $post = $this->posts[$slug];
        return view('post', compact('post'));
    }
}