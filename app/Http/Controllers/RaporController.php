<?php

namespace App\Http\Controllers;

class RaporController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    // PAUD

    // menampilkan hasil cover
    public function coverPaud(){
        // data umum
        $nama = "Aiko Valerie Tjugito";
        $nis = "2122.01.2036";
        $nisn = "3169552896";

        return view('2013.paud.cover',[
            'nama' => $nama,
            'nis' => $nis,
            'nisn' => $nisn
        ]);
    }

    // menampilkan identitas siswa Paud
    public function identitasSiswaPaud(){
        // data umum
        $siswa = "Aiko Valerie Tjugito";
        $nisn = "3169552896";
        $nis = "2122.01.2036";
        $tempat_lahir = "Surabaya";
        $tanggal_lahir = "2016-10-01";
        $gender = "Perempuan";
        $agama = "Katholik";
        $alamat = "Muharto Timur No. 20 Kotalama / Kedungkandang";
        $ayah = "Jimmy Tjugito";
        $ibu = "Imelda Sitongan";
        $pekerjaan_ayah = "Swasta";
        $pekerjaan_ibu = "Ibu Rumah Tangga";
        $jalan = "Muharto Timur No. 20 Kotalama / Kedungkandang";
        $keldes = "Kotalama";
        $kecamatan = "Kedungkandang";
        $kabkot = "Kota Malang";
        $provinsi = "Jawa Timur";
        $nama_wali = "";
        $pekerjaan_wali = "";

        return view('2013.paud.identitassiswa',[
            'siswa' => $siswa,
            'nisn' => $nisn,
            'nis' => $nis,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'gender' => $gender,
            'agama' => $agama,
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
            'pekerjaan_wali' => $pekerjaan_wali
        ]);
    }

    // menampilkan laporan siswa paud
    public function laporanPaud(){
        // data umum
        $siswa = "Aiko Valerie Tjugito";
        $nisn = "3169552896";
        $nis = "2122.01.2036";
        $sekolah = "TK KRISTEN ALETHEIA MALANG";
        $alamat_sekolah ="JL IR.H.JUANDA NO 06 MALANG";
        $kelas = "A1";
        $semester = 2;    
        $tahun_ajaran = "2021/2022";
        $isi = [
            ['judul' => 'PENDAHULUAN', 'isi' => 'Puji Tuhan, perkembangan Ananda Aiko Valerie Tjugito pada SEMESTER 2 tahun ajaran
            2021/2022 ini sudah menunjukkan perilaku dan perkembangan yang umumnya
            dialami anak pada usianya. Perkembangan Ananda di sekolah harus mendapat
            dukungan tidak hanya dari guru/ wali kelas dan kepala sekolah, namun juga orang tua/
            wali di rumah. Semuanya harus dapat memberikan stimulus yang positif untuk
            perkembangan Ananda yang lebih baik. Pada periode ini, Ananda Aiko Valerie Tjugito
            kehadirannya perlu ditingkatkan. Izin (3), sakit (1), dan alpa (0).'],
            ['judul' => 'NILAI AGAMA DAN MORAL', 'isi' => 'Puji Tuhan, perkembangan Nilai Agama dan Moral Ananda Aiko Valerie Tjugito
            berkembang sangat baik (BSB). Beberapa perkembangan yang telah dicapai Ananda di
            antaranya: mampu menyanyikan lagu-lagu keagamaan yang sederhana, menyebutkan
            hari-hari besar agama, menyebutkan ciptaan-ciptaan Tuhan, misal: manusia, bumi,
            langit, tanaman, dan hewan., menghargai teman , bersikap ramah, meminta tolong
            dengan baik, berterima kasih jika memperoleh sesuatu, berbahasa sopan dalam
            berbicara, mendengarkan orang tua/teman berbicara.'],
            ['judul' => 'SOSIAL EMOSIONAL', 'isi' => 'Puji Tuhan, perkembangan Sosial Emosional Ananda Aiko Valerie Tjugito berkembang
            sangat baik (BSB). Beberapa perkembangan yang telah dicapai Ananda di antaranya:
            mampu mau bekerjasama dengan teman dalam kelompok ketika melakukan kegiatan,
            berani bertanya dan menjawab pertanyaan, membuat keputusan ketika bermain
            dengan teman sebaya (misal: memutuskan siapa yang memulai bermain), mendengar
            dan berbicara dengan orang dewasa , menunjukkan kebanggaan terhadap hasil
            kerjanya, mampu memilih benda untuk bermain, mampu mengerjakan tugas sendiri,
            bermain sesuai dengan jenis permainan yang dipilihnya, melaksanakan tata tertib
            yang ada .'],
            ['judul' => 'BAHASA', 'isi' => 'Puji Tuhan, perkembangan Bahasa Ananda Aiko Valerie Tjugito berkembang sangat
            baik (BSB). Beberapa perkembangan yang telah dicapai Ananda di antaranya: mampu
            mendengarkan cerita dan menceritakan kembali isi cerita secara sederhana,
            menceritakan pengalaman/kejadian secara sederhana , menjawab pertanyaan tentang
            keterangan/informasi secara sederhana, menghubungkan gambar/benda dengan kata,
            membaca gambar yang memiliki kata/kalimat sederhana, menghubungkan tulisan
            sederhana dengan simbol yang melambangkannya.']
        ];

        return view('2013.paud.laporan',[
            'siswa' => $siswa,
            'nisn' => $nisn,
            'nis' => $nis,
            'sekolah' => $sekolah,
            'alamat_sekolah' => $alamat_sekolah,
            'kelas' => $kelas,
            'semester' => $semester,
            'tahun_ajaran' => $tahun_ajaran,
            'isi' => $isi
        ]);
    }


    // SD

    // menampilkan cover sd
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


    // SMP

    // menampilkan sikap smp
    public function sikapSmp(){
        // data umum
        $nama = "Anya";
        $nisn = "2000";
        $nama_sekolah = "SMP KRISTEN ALETHEIA MALANG";
        $alamat_sekolah = "JL.IR.H.JUANDA No.06";
        $kelas = "IX A";
        $semester = "5 (Lima)";
        $tahun_ajaran = "2021/2022";

        // data sikap
        $spiritual = ['predikat' => 'B', 'deskripsi' => 'Sikap bersyukur'];
        $sosial = ['predikat' => 'B', 'deskripsi' => 'Sikap bersyukur'];

        return view('2013.smp.sikap',[
            'nama' => $nama,
            'nisn' => $nisn,
            'sekolah' => $nama_sekolah,
            'alamat_sekolah' => $alamat_sekolah,
            'kelas' => $kelas,
            'semester' => $semester,
            'tahun' => $tahun_ajaran,
            'spiritual' => $spiritual,
            'sosial' => $sosial
        ]);
    }

    // menampilkan pengetahuan smp
    public function pengetahuan(){
        // data umum
        $nama = "Anya";
        $kkm = "75";

        // nilai pengetahuan dan keterampilan
        $pengetahuan_keterampilan = [
            [
                'subyek' => "Pendidikan Agama dan Budi Pekerti",
                'nilai_pengetahuan' => 80,
                'predikat_pengetahuan' => "A",
                'deskripsi_pengetahuan' => "Baik Sekali"
            ],
            [
                'subyek' => "Pendidikan Pancasila dan Kewarganegaraan",
                'nilai_pengetahuan' => 75,
                'predikat_pengetahuan' => "B",
                'deskripsi_pengetahuan' => "Baik"
            ],
            [
                'subyek' => "Bahasa Indonesia",
                'nilai_pengetahuan' => 76,
                'predikat_pengetahuan' => "B",
                'deskripsi_pengetahuan' => "Baik"
            ],
            [
                'subyek' => "Matematika",
                'nilai_pengetahuan' => 76,
                'predikat_pengetahuan' => "B",
                'deskripsi_pengetahuan' => "Baik"
            ],
            [
                'subyek' => "Ilmu Pengetahuan Alam",
                'nilai_pengetahuan' => 80,
                'predikat_pengetahuan' => "A",
                'deskripsi_pengetahuan' => "Baik Sekali"
            ],
            [
                'subyek' => "Ilmu Pengetahuan Sosial",
                'nilai_pengetahuan' => 67,
                'predikat_pengetahuan' => "C",
                'deskripsi_pengetahuan' => "Cukup"
            ],
            [
                'subyek' => "Seni Budaya dan Prakarya",
                'nilai_pengetahuan' => 88,
                'predikat_pengetahuan' => "A",
                'deskripsi_pengetahuan' => "Baik Sekali"
            ],
            [
                'subyek' => "Pendidikan Jasmani Olah Raga dan Kesehatan",
                'nilai_pengetahuan' => 70,
                'predikat_pengetahuan' => "B",
                'deskripsi_pengetahuan' => "Baik"
               
            ]
        ];

        return view('2013.smp.pengetahuan',[
            'nama' => $nama,
            'kkm' => $kkm,
            'pengetahuan_keterampilan' => $pengetahuan_keterampilan
        ]);
    }
    
    // menampilkan pengetahuan smp
    public function ekskul(){
        // data umum
        $nama = "Anya";

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

        // data ketidakhadiran
        $ketidakhadiran = [
            ['alasan' => 'Sakit', 'hari' => 1],
            ['alasan' => 'Izin', 'hari' => 1],
            ['alasan' => 'Tanpa Keterangan', 'hari' => 0]
        ];

        return view('2013.smp.ekskul',[
            'nama' => $nama,
            'ekstrakurikuler' => $ekstrakurikuler,
            'ketidakhadiran' => $ketidakhadiran
        ]);
    }
}
