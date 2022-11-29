<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            "publisher_id" => 1,
            "title" => "Semua Bisa Menjadi Webmaster PHP",
            "author" => "Ir. Yuniar Supardi",
            "year" => 2022,
            "synopsis" => "Buku dengan judul Semua Bisa Menjadi Webmaster PHP ini merupakan buku yang perlu Anda miliki untuk menjadi pengembang (programmer) web dengan bahasa PHP. Buku ini disusun dengan sistematika yang baik, sehingga pembaca dapat dengan mudah belajar dan menjadi webmaster dengan PHP. Buku ini berisi pembahasan lengkap, mulai dari HTML, CSS, JavaScript, PHP, membuat web dinamik database, hingga cara upload web ke hosting. Berisi juga cara instalasi XAMPP dan Macromedia Dreamweaver 8 sehingga pembaca bisa mengetahui pengaturannya sebelum membuat web dengan PHP.",
            "image" => "https://cdn.gramedia.com/uploads/items/9786230034992_CoverDepan_Semua_Bisa_Menjadi_Webmaster_PHP.jpg"
        ]);

        DB::table('books')->insert([
            "publisher_id" => 2,
            "title" => "Oxford English Dictionary For Schools ",
            "author" => "Oxford University Press",
            "year" => 2014,
            "synopsis" => "The Oxford English Dictionary for Schools is easy to use with clear signposting, accessible design, and expertly levelled definitions and examples, making it the perfect language resource for school work and studying at home. It has been updated extensively to include even more KS3 curriculum vocabulary and is ideal for students preparing for GCSEs and other exams. New words and phrases include cloud computing, coronavirus, mental health, podcast, web
            developer and zero carbon. It is powered by the Oxford Children's Corpus, a unique electronic database of millions of words written by and for children, which means that the vocabulary is presented in a way that is both accessible and stretching. There are also lots of additional features to support students
            acquiring a broader vocabulary, such as language panels for project work, related words and antonyms, usage notes for confusable words, and interesting word origins. It also contains real example sentences from the best children's books and teenage fiction, which show students how to use language effectively. There are inspiring examples from authors such as David Almond, Philip Pullman, William Golding, Anthony Horowitz, Beverley Naidoo, and many more from the curriculum reading lists.",
            "image" => "https://cdn.gramedia.com/uploads/items/9780192756992_Oxford-Englis.jpg"
        ]);

        DB::table('books')->insert([
            "publisher_id" => 1,
            "title" => "Semua Bisa Menjadi Programmer Laravel Basic",
            "author" => "Yuniar Supardi & Sulaeman",
            "year" => 2019,
            "synopsis" => "Buku dengan judul “Semua Bisa Menjadi Programmer Laravel Basic” ini merupakan buku dasar dalam mempelajari framework PHP dengan Laravel yang saat ini sedang populer. Dengan buku ini, tandanya Anda sudah belajar sampai tingkat menengah. Akan dibahas pula kelebihan dari script server programming dengan Laravel, serta materi lengkap dari dasar hingga menengah.

            Keunggulan buku ini adalah dapat memandu Anda membuat program web dengan Laravel dengan database MySQL dengan pembahasan yang mudah dan sistematis sehingga Anda tidak akan kesulitan mempelajarinya. Buku ini dibagi menjadi 30 bab, disusun secara sistematis dari program yang sederhana hingga database sehingga memudahkan Anda menjadi programmer dengan Laravel.

            Dengan mengacu beberapa buku penulis yang best seller maka terciptalah buku ini. Dalam buku ini, penulis juga membahas proses instalasi XAMPP di dalam Lampiran. Buku ini juga dapat dipakai oleh praktisi pendidikan, karyawan, dan mahasiswa.",
            "image" => "https://cdn.gramedia.com/uploads/items/9786230010460_Cov_Semua_Bisa_Menjadi_Programmer_Laravel_Basic.jpg"
        ]);

        DB::table('books')->insert([
            "publisher_id" => 2,
            "title" => "Oxford Essential Dictionary (Gratis Aplikasi)",
            "author" => "Oxford University Press",
            "year" => 2021,
            "synopsis" => "Untuk pelajar bahasa Inggris di tingkat dasar dan pre-intermediate

            Definisi dalam bahasa Inggris dan terjemahan bahasa Indonesia untuk lebih dari 24.000 kata, frasa dan arti bahasa Inggris.

            - Temukan kata bahasa Inggris yang Anda ketahui dalam Indeks bahasa Indonesia-Inggris
            - 2.000 kata paling penting dan berguna untuk dipelajari pada tingkat ini yang ditandai sebagai kata kunci
            - 500 catatan mengenai ejaan, tata bahasa dan pelafalan untuk membantu siswa dalam menghindari kesalahan.
            - 13.000 contoh untuk membantu siswa menggunakan kata-kata dengan tepat.
            - 1.100 sinonim dan antonim untuk membantu Anda mempelajari lebih banyak kata.
            - Ilustrasi untuk membuat arti lebih jelas
            - Apendiks untuk kata kerja tidak beraturan, nama geografis dan pelafalan

            Hadir dengan aplikasi gratis (akses untuk empat tahun) yang berisikan lema lengkap dari A-Z, ilustrasi tambahan dan pelafalan Britania dan Amerika untuk semua kata Bahasa Inggris. Rekam dan putar ulang pelafalan Anda sendiri, dan buat daftar lema penting dengan fitur Favorit.",
            "image" => "https://cdn.gramedia.com/uploads/items/9780194214674_jaz4eoT.jpg"
        ]);

        DB::table('books')->insert([
            "publisher_id" => 1,
            "title" => "Kitab MS Office 2021",
            "author" => "Jubilee Enterprise",
            "year" => 2022,
            "synopsis" => "MS Office 2021 merupakan aplikasi penting untuk menyelesaikan berbagai macam tugas dan pekerjaan. Tidak memandang apakah Anda adalah seorang pelajar, mahasiswa, guru, dosen, pengusaha, pegawai, atau CEO, aplikasi ini dirancang untuk Anda. Di dalam buku ini, Anda akan mempelajari cara menggunakan aplikasi penting MS Office 2021, yaitu MS Word, MS Excel, dan MS PowerPoint. Lebih pentingnya lagi, buku ini bisa dibaca bagi pengguna MS Office 365 juga. Buku ini hadir di tengah masyarakat untuk mengupas MS Office 2021 secara lengkap, mencakup teknik-teknik yang paling dibutuhkan untuk membuat dokumen baru, mendesain slide presentasi, melakukan presentasi, perancangan animasi, menggunakan formula, mempresentasikan data dalam bentuk tabel, chart, maupun pivottable serta pivotchart, serta untuk menyelesaikan tugas-tugas dan pekerjaan sehari-hari. Isi buku ini dirancang memiliki ketebalan ekstra supaya dapat menjadi pusat pengetahuan dan informasi tentang MS Office 2021. Jadi kapan pun Anda merasa kesulitan menemukan fitur untuk MS Word, MS PowerPoint, dan MS Excel, diharapkan dapat menemukan jawabannya di dalam buku ini.",
            "image" => "https://cdn.gramedia.com/uploads/items/722050345_Cover_Kitab_MS_Office_2021.jpg"
        ]);

        DB::table('books')->insert([
            "publisher_id" => 1,
            "title" => "Teknik Penulisan Tugas Akhir dan Skripsi Pemrograman",
            "author" => "Uus Rusmawan",
            "year" => 2019,
            "synopsis" => "Menyusun tugas akhir atau skripsi memerlukan pengetahuan dan keterampilan tersendiri agar hasilnya menjadi sebuah karya ilmiah yang berkualitas dan tersusun secara sistematis. Bagi para mahasiswa jurusan komputer, diperlukan pemahaman dan pengetahuan tentang berbagai teori yang berkaitan dengan analisa perancangan sistem informasi atau rekayasa perangkat lunak yang meliputi teori mengenai sistem, informasi, teknologi, database, tabel, field, record, basis data, struktur data, ERD, DFD, normalisasi, flowchart, UML, use case diagram, activity diagram, sequence diagram, OOP, pemrograman terstruktur, metode migrasi, black box testing, white box testing, dan lain-lain.

            Buku ini membahas tentang semua hal yang disebutkan di atas secara lengkap dan sistematis mulai dari teori, fungsi, cara pembuatan hingga contoh-contohnya. Buku ini sangat cocok dijadikan bahan referensi bagi para mahasiswa untuk menyusun tugas akhir atau skripsi.",
            "image" => "https://cdn.gramedia.com/uploads/items/9786020496801_Cover2_Teknik.jpg"
        ]);

        DB::table('books')->insert([
            "publisher_id" => 1,
            "title" => "Mastering AutoCAD 3D Modeling",
            "author" => "Hari Aria Soma",
            "year" => 2022,
            "synopsis" => "Berisi kumpulan soal latihan dari berbagai model 3D termasuk langkah-langkah penyelesaiannya. Materi soal mencakup hampir semua perintah yang diperlukan, mulai dari pemodelan 3D (Extrude, Sweep, Presspull, Subtract, Union, Revolve, dan sebagainya), UCS, Dimensioning 3D, Profiling & Proyeksi, dan Layouting. Langkah-langkah penyelesaian yang diberikan di buku ini dapat menuntun Anda menghadapi kasus-kasus 3D serupa yang mungkin dijumpai dalam pekerjaan. Buku ini dibuat untuk memenuhi kebutuhan para pengguna yang sudah menguasai AutoCAD 2D dan ingin mengembangkan skill menjadi seorang 3D Modeler, juga bagi para desainer yang memiliki minat dalam modeling 3D. Buku ini juga bisa dipakai sebagai buku pegangan sekaligus latihan dan evaluasi di lembaga-lembaga pendidikan komputer yang membuka kelas AutoCAD Advance (3D Modeling). Sistematikanya disusun berdasarkan pengalaman penulis dalam mengajar AutoCAD di berbagai Lembaga Pendidikan Komputer dan perusahaan-perusahaan Manufaktur di Jakarta.",
            "image" => "https://cdn.gramedia.com/uploads/items/9786230036439_CoverDepan_Mastering_AutoCAD_3D_Modeling.jpg"
        ]);

        // DB::table('books')->insert([
        //     "publisher_id" => ,
        //     "title" => "",
        //     "author" => "",
        //     "year" => 2022,
        //     "synopsis" => "",
        //     "image" => ""
        // ]);
    }
}
