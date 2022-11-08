<?php

namespace App\Http\Controllers;

class RaporController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    // menampilkan capaian paud
    public function capaian(){
        // data kompetensi
        $kompetensi = [
            [
                'capaian' => 'Nilai Agama & Budi Pekerti', 
                'elemen' => '1.1 Anak mengenali & mempraktikkan nilai dan kewajiban ajaran agamanya'
            ],
            [
                'capaian' => 'Jati Diri', 
                'elemen' => '2.1 Anak memiliki sikap positif dan berpartisipasi aktif dalam menjaga kebersihan, kesehatan(Nutrisi & Olahraga), dan keselamatan diri'
            ],
            [
                'capaian' => 'Dasar- Dasar Literasi dan Sains, Teknologi, Rekayasa. Seni, Matematika', 
                'elemen' => '3.1 Anak menunjukkan kemampuan mengenali dan memahami berbagai informasi, seperti gambar, tanda, symbol, dan cerita'
            ]
        ];
        // data proyek
        $proyek = [
            [
                'dimensi' => 'Beriman dan bertaqwa kepada Tuhan Yang Maha Esa dan berahlak mulia', 
                'uraian' => 'Diwujudkan ke dalam akhlak yang mulia, baik dalam beragama, ahklak yang baik kepada diri sendiri, kepada sesama manusia, kepada alam dan kepada negara Indonesia'
            ],
            [
                'dimensi' => 'Berkebinekaan Global', 
                'uraian' => 'Untuk mewujudkan pelajar Indonesia yang mengenal & menghargai budaya, dapat berkomunikasi dan berinteraksi antar budaya, berefleksi & bertanggungjawab terhadap pengalaman kebhinekaan serta berkeadilan sosial'
            ],
            [
                'dimensi' => 'Gotong Royong', 
                'uraian' => 'Diwujudkan dengan melakukan kolaborasi, memiliki kepedulian yang tinggi, dan berbagi dengan sesama'
            ],
            [
                'dimensi' => 'Mandiri', 
                'uraian' => 'Pelajar Indonesia perlu memiliki kesadaran akan diri dan situasi yang dihadapi serta memiliki regulasi diri'
            ],
            [
                'dimensi' => 'Kreatif', 
                'uraian' => 'Pelajar yang bisa menghasilkan gagasan, karya dan tindakan yang orisinil, memiliki keluwesan berpikir dalam mencari alternatif solusi permasalahan'
            ],
            [
                'dimensi' => 'Bernalar Kritis', 
                'uraian' => 'Pelajar Indonesia perlu memperoleh dan memproses informasi serta gagasan dengan baik, lalu menganalisa dan mengevaluasinya, kemudian merefleksikan pemikiran dan proses berpikirnya'
            ]
        ];

        return view('2013.paud.capaian',[
            'kompetensi' => $kompetensi,
            'proyek' => $proyek
        ]);
    }

    // menampilkan hasil nilai belajar
    public function cover(){
        // data umum
        $nama = "Junia Uni Umamatun Nysa";
        $nisn = "1918112";

        return view('2013.sd.cover',[
            'nama' => $nama,
            'nisn' => $nisn
        ]);
    }

    // menampilkan identitas sekolah
    public function identitassekolah(){
        // data umum
        $sekolah = "SD Kristen Aletheia";
        $nis = "";
        $alamat = "Ir. H. Juanda 6";
        $kodepos = "";
        $telp = "";
        $keldes = "Jodipan";
        $kecamatan = "Blimbing";
        $kabkot = "Malang";
        $provinsi = "Jawa Timur";
        $website = "";
        $email = "";

        return view('2013.sd.identitassekolah',[
            'sekolah' => $sekolah,
            'nis' => $nis,
            'alamat' => $alamat,
            'kodepos' => $kodepos,
            'telp' => $telp,
            'keldes' => $keldes,
            'kecamatan' => $kecamatan,
            'kabkot' => $kabkot,
            'provinsi' => $provinsi,
            'website' => $website,
            'email' => $email
        ]);
    }

    // menampilkan identitas siswa
    public function identitassiswa(){
        // data umum
        $siswa = "Junia Uni Umamatun Nysa";
        $nis = "1918112";
        $temapat_lahir = "Malang";
        $tanggal_lahir = "1 Juni 2000";
        $gender = "Perempuan";
        $agama = "Islam";
        $alamat = "Malang";
        $pendidikan_sebelumnya = "TK AL-Hidayah";
        $ayah = "Ihsan";
        $ibu = "Reni";
        $pekerjaan_ayah = "Swasta";
        $pekerjaan_ibu = "Swasta";
        $jalan ="Ir. H. Juanda 6";
        $keldes = "Jodipan";
        $kecamatan = "Blimbing";
        $kabkot = "Malang";
        $provinsi = "Jawa Timur";
        $nama_wali = "";
        $pekerjaan_wali = "";
        $alamat_wali = "";

        return view('2013.sd.identitassiswa',[
            'siswa' => $siswa,
            'nis' => $nis,
            'tempat_lahir' => $temapat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'gender' => $gender,
            'agama' => $agama,
            'pendidikan_sebelumnya' => $pendidikan_sebelumnya,
            'alamat' => $alamat,
            'ayah' => $ayah,
            'ibu' => $ibu,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'pekerjaan_ibu' => $pekerjaan_ibu,
            'jalan' => $jalan,
            'keldes' => $keldes,
            'kecamatan' => $kecamatan,
            'kabkot' => $kabkot,
            'provinsi' => $provinsi,
            'nama_wali' => $nama_wali,
            'pekerjaan_wali' => $pekerjaan_wali,
            'alamat_wali' => $alamat_wali
        ]);
    }
    
    // menampilkan hasil nilai belajar
    public function hasil(){
        // data umum
        $nama = "Junia Uni Umamatun Nysa";
        $nisn = "1918112";
        $nama_sekolah = "SDN Sidodadi 06";
        $alamat_sekolah = "Lawang";
        $kelas = 2;
        $semester = "2";
        $tahun_ajaran = "2021/2022";

        // nilai kompetensi sikap
        $kompetensi_sikap = [
            ['subyek' => "Sikap Sepiritual", 'deskripsi' => "Sangat Baik"],
            ['subyek' => "Sikap Sosial", 'deskripsi' => "Sangat Baik"]
        ];

        // nilai pengetahuan dan keterampilan
        $pengetahuan_keterampilan = [
            [
                'subyek' => "Pendidikan Agama dan Budi Pekerti",
                'nilai_pengetahuan' => 80,
                'predikat_pengetahuan' => "A",
                'deskripsi_pengetahuan' => "Baik Sekali",
                'nilai_keterampilan' => 80,
                'predikat_keterampilan' => "A",
                'deskripsi_keterampilan' => "Baik Sekali"
            ],
            [
                'subyek' => "Pendidikan Pancasila dan Kewarganegaraan",
                'nilai_pengetahuan' => 75,
                'predikat_pengetahuan' => "B",
                'deskripsi_pengetahuan' => "Baik",
                'nilai_keterampilan' => 80,
                'predikat_keterampilan' => "A",
                'deskripsi_keterampilan' => "Baik"
            ],
            [
                'subyek' => "Bahasa Indonesia",
                'nilai_pengetahuan' => 76,
                'predikat_pengetahuan' => "B",
                'deskripsi_pengetahuan' => "Baik",
                'nilai_keterampilan' => 65,
                'predikat_keterampilan' => "C",
                'deskripsi_keterampilan' => "Cukup"
            ],
            [
                'subyek' => "Matematika",
                'nilai_pengetahuan' => 76,
                'predikat_pengetahuan' => "B",
                'deskripsi_pengetahuan' => "Baik",
                'nilai_keterampilan' => 78,
                'predikat_keterampilan' => "B",
                'deskripsi_keterampilan' => "Baik"
            ],
            [
                'subyek' => "Ilmu Pengetahuan Alam",
                'nilai_pengetahuan' => 80,
                'predikat_pengetahuan' => "A",
                'deskripsi_pengetahuan' => "Baik Sekali",
                'nilai_keterampilan' => 76,
                'predikat_keterampilan' => "B",
                'deskripsi_keterampilan' => "Baik"
            ],
            [
                'subyek' => "Ilmu Pengetahuan Sosial",
                'nilai_pengetahuan' => 67,
                'predikat_pengetahuan' => "C",
                'deskripsi_pengetahuan' => "Cukup",
                'nilai_keterampilan' => 70,
                'predikat_keterampilan' => "B",
                'deskripsi_keterampilan' => "Cukup Baik"
            ],
            [
                'subyek' => "Seni Budaya dan Prakarya",
                'nilai_pengetahuan' => 88,
                'predikat_pengetahuan' => "A",
                'deskripsi_pengetahuan' => "Baik Sekali",
                'nilai_keterampilan' => 67,
                'predikat_keterampilan' => "C",
                'deskripsi_keterampilan' => "Baik"
            ],
            [
                'subyek' => "Pendidikan Jasmani Olah Raga dan Kesehatan",
                'nilai_pengetahuan' => 70,
                'predikat_pengetahuan' => "B",
                'deskripsi_pengetahuan' => "Baik",
                'nilai_keterampilan' => 75,
                'predikat_keterampilan' => "B",
                'deskripsi_keterampilan' => "Baik",
            ]
        ];

        // data ekstrakurikuler
        $ekstrakurikuler = [
            [
                'kegiatan' => "Pramuka",
                'nilai' => 80,
                'predikat' => "A",
                'deskripsi' => "Baik Sekali"
            ],
            [
                'kegiatan' => "Bahasa Inggris",
                'nilai' => 75,
                'predikat' => "B",
                'deskripsi' => "Baik"
            ],
            [
                'kegiatan' => "TIK",
                'nilai' => 76,
                'predikat' => "B",
                'deskripsi' => "Baik"
            ]
        ];

        // data saran
        $saran = "Tingkatkan lagi prestasimu!";

        // data tinggi dan berat badan
        $tinggi_berat = [
            ['subyek' => 'Tinggi Badan', 'nilai_1' => 150, 'nilai_2' => 153],
            ['subyek' => 'Berat Badan', 'nilai_1' => 50, 'nilai_2' => 52]
        ];

        // data aspek kesehatan
        $kesehatan = [
            ['aspek' => 'Pendengaran', 'keadaan' => 'Baik'],
            ['aspek' => 'Penglihatan', 'keadaan' => 'Baik'],
            ['aspek' => 'Gigi', 'keadaan' => 'Baik']
        ];

        // data prestasi
        $prestasi = [
            ['subyek' => 'Kesenian', 'nilai' => ''],
            ['subyek' => 'Olahraga', 'nilai' => '']
        ];

        // data ketidakhadiran
        $ketidakhadiran = [
            ['alasan' => 'Sakit', 'hari' => 1],
            ['alasan' => 'Izin', 'hari' => 1],
            ['alasan' => 'Tanpa Keterangan', 'hari' => 0]
        ];

        return view('2013.sd.hasil',[
            'nama' => $nama,
            'nisn' => $nisn,
            'sekolah' => $nama_sekolah,
            'alamat_sekolah' => $alamat_sekolah,
            'kelas' => $kelas,
            'semester' => $semester,
            'tahun' => $tahun_ajaran,
            'kompetensi_sikap' => $kompetensi_sikap,
            'pengetahuan_keterampilan' => $pengetahuan_keterampilan,
            'ekstrakurikuler' => $ekstrakurikuler,
            'saran' => $saran,
            'tinggi_berat' => $tinggi_berat,
            'kesehatan' => $kesehatan,
            'prestasi' => $prestasi,
            'ketidakhadiran' => $ketidakhadiran
        ]);
    }
}
