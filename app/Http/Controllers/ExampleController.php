<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        
    }

    //report
    public function sdHasil(){
            return view('2013.sd.hasil', 
            ['nama' => 'Junia Uni Umamatun Nysa',
            'nis' => '1918112/00012312',
            'sekolah' =>'SD Sidodadi 06',
            'alamat' => 'Jl. Sumber Waras Timur',
            'kelas' => '2 B',
            'semester' => '1',
            'tahun' => '2021/2022',
            'sepiritual' => 'Sepiritual',
            'sosial' => 'Sosial',
            'catatan' => 'Sangat baik, menguasai, rajin, aktif',
            'no1' => '1.',
            'no2' => '2.',
            'mapel1' => 'Agama',
            'mapel2' => 'Bahasa Indonesia',
            'nilai' => '90',
            'pd' => 'A',
            'des' => 'Baik Sekali',
            'saran' => 'Pertahankan !',
            'tinggi' => 'Tinggi',
            'berat' => 'Berat'
            ]
        );
    }
}
