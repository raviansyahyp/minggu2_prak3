<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return "Selamat Datang di Halaman Utama Website Jurusan Teknologi Informasi Politeknik Negeri Malang <br> <br>
        Jurusan Teknologi Informasi merupakan salah satu jurusan di Politeknik Negeri Malang, berdasarkan keputusan 
        Direkur Politeknik Negeri Malang nomor 53 tahun 2015 yang terdiri dari Program Studi Diploma III Manajemen 
        Informatika dan Program Studi Diploma IV Teknik Informatika. <br><br>
        Pelaksanaan pendidikannya mengacu pada UU No. 20 tahun 2003 tentang Sistem Pendidikan Nasional dan diwujudkan
         dengan menerapkan kurikulum berbasis kompetensi (KBK) yang sesuai dengan peraturan Kemendiknas No. 045/U/tahun 
         2002. Untuk mewujudkan tuntutan kebutuhan tersebut, Jurusan Teknologi Informasi telah melaksanakan kerjasama 
         dengan berbagai pihak, baik dalam maupun luar negeri sebagai perwujudan visi, misi, dan tujuan."
        ;
    }
}
