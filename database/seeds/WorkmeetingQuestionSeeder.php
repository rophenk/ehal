<?php

use Illuminate\Database\Seeder;

class WorkmeetingQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed Untuk Table Workmeeting
        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '6',
        'question' => 'a. Mengenai harga daging sapi, Presiden mengatakan harganya dibawah Rp. 80 ribu karena ada info di Singapura harga daging Rp. 50 ribu/kg yang ternyata setelah saya cek salah info, harganya $3,2 untuk 100 gram bukan 1 kilogram. Mohon agar Kementan lebih awas dengan pemberitaan yang ada media.',
        'answer' => 'Kementerian Pertanian menyampaikan terimakasih atas keprihatinan anggota Dewan terkait pemberitaan harga daging sapi di media. Menindaklanjuti perkembangan pemberitaan di media tersebut, Menteri Pertanian telah membentuk Tim yang diketuai oleh Dr. Rahmat Pambudi, yang bertugas melakukan pemantauan harga daging di beberapa lokasi di Singapura dan Malaysia serta beberapa daerah penting lainnya Tim ini bertugas memberikan informasi dan masukan yang berguna dalam menetapkan kebijakan stabilisasi harga khususnya harga daging di Indonesia.',
        ]);

        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '6',
        'question' => 'b. Mengenai harga bawang, cabai dan sayur harganya agak termahal di Kalimantan Tengah, apakah bisa 2-3 kabupaten dijadikan sentra produksi, jadi tidak usah impor dari pulau Jawa.',
        'answer' => 'Direktorat Jenderal Hortikultura mengalokasikan anggaran pengembangan kawasan aneka cabai dan bawang merah di hampir semua Provinsi dan Kabupaten/Kota di Indonesia dalam rangka pemenuhan kebutuhan komoditas strategis aneka cabai dan bawang merah yang dibutuhkan masyarakat setiap harinya. Untuk Provinsi Kalimantan Tengah, pengembangan kawasan aneka cabai dan bawang merah telah dilakukan di beberapa Kabupaten/Kota sejak tahun 2015 sampai saat ini. Untuk tahun 2017, akan terjadi penambahan Kabupaten/Kota sebagai lokasi kegiatan pengembangan aneka cabai dan bawang merah, dengan rincian sebagai berikut :',
        ]);

        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '6',
        'question' => 'c. Mengenai harga apel, sekarang Rp. 65 ribu infonya dan katanya sudah impor, mohon penjelasan',
        'answer' => '<ul>
						<li>Direktorat Jenderal Hortikultura sudah menerbitkan Rekomendasi Impor Produk Hortikultura termasuk diantaranya apel untuk  Semester I tahun 2016  (periode Januari – Juni). </li>
						<li>Telah terbit Permentan Nomor 04/Permentan/PP.340/2/2015 tentang Pengawasan Keamanan Pangan Terhadap Pemasukan dan Pengeluaran Pangan Segar Asal Tumbuhan (PSAT), yang salah satu pasalnya menyebutkan bahwa pemasukan produk/barang impor harus memenuhi sertifikasi dari laboratorium yang terakreditasi di negara asal, tidak terkecuali untuk negara yang selama ini sudah banyak mengekspor produk hortikultura seperti China. </li>
						<li>Pada periode Januari-Juli, produk dari China yang diperbolehkan masuk hanya untuk bawang putih.  China tidak bisa mengekspor Apel ke Indonesia pada periode ini karena belum ada kerjasama dengan Badan Karantina terkait uji Laboratorium PSAT. </li>
						<li>Dengan demikian pasokan Apel Impor berkurang sehingga mengakibatkan harga apel mahal.</li>
						</ul>',
        ]);

        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '42',
        'question' => 'a. Mengenai kelangkaan bahan pangan yang masih terjadi, padahal sudah diantisipasi dengan perubahan anggaran dan lain-lain, mohon penjelasan.',
        'answer' => 'Peningkatan anggaran dinilai berhasil meningkatkan produksi pangan. Di sisi lain, bahan pangan dari sisi produksi memang ada periode surplus dan defisit. Oleh karena itu, manajemen stock juga harus dibenahi sehingga ketersediaan pangan dapat memenuhi kebutuhan pada periode defisit. Manajemen stok ini melibatkan banyak pihak, terutama di luar Kementerian Pertanian. Ke depan, koordinasi tentang manajemen stock harus lebih ditingkatkan dan dikelola lebih serius.',
        ]);

        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '42',
        'question' => 'b. Mengenai operasi pasar, banyak harga-harga yang ada di pasar masih tinggi, apakah karena operasi kaum kapitalis lebih berhasil atau bagaimana, mohon penjelasan.',
        'answer' => 'Permainan harga pangan kita rasakan memang ada. Apakah hal ini akibat pelaku bisnis yang memanfaatkan situasi, untuk ini bukan kewenangan Kementerian Pertanian untuk memberikan penjelasan.',
        ]);

        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '42',
        'question' => 'c. Mengenai demand dan perilaku konsumen, mohon agar diperbaiki dan berkoordinasi dengan MUI dan YLKI untuk memberikan pencerahan kepada masyarakat agar tidak berpikir bulan Ramadhan bulan ibadah bukan bulan konsumsi.',
        'answer' => 'Usulan yang sangat baik dan sangat positif. Namun demikian, Kementerian Pertanian melihat waktu ini sebagai kesempatan bagi petani untuk meningkatkan pendapatannya. Di sisi lain, distribusi yang adil dan proporsional tetap harus dijaga.',
        ]);

        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '42',
        'question' => 'd. Mengenai pemotongan anggaran, mohon agar tidak memangkas hal-hal yang menyangkut produksi.',
        'answer' => 'Kebijakan Kementerian Pertanian dalam melakukan penghematan/pemotongan sudah sejalan dengan hal tersebut. Penghematan/pemotongan anggaran diprioritaskan terhadap kegiatan yang tidak berdampak langsung kepada masyarakat dan produksi. Penghematan/pemotongan anggaran difokuskan pada pos-pos belanja: <br />
        	(1) belanja modal non-infrastruktur, seperti gedung perkantoran dan pengadaan kendaraan dinas,<br /> 
        	(2) kegiatan yang belum terikat kontrak, <br />
        	(3) belanja barang bantuan pemerintah pada pemda/masyarakat yang dapat dihemat alokasinya, <br />
        	(4) sisa kontrak/hasil lelang dan hasil optimalisasi/sisa dana swakelola, <br />
        	(5) honorarium kegiatan, perjalanan dinas, paket meeting, rapat seminar, workshop, <br />
        	(6) kegiatan-kegiatan yang diperkirakan tidak dapat dilaksanakan sebagian atau seluruhnya, misalnya satker yang tidak sanggup melaksanakan kegiatan tugas pembantuan, <br />
        	(7) kegiatan-kegiatan yang tidak mendesak atau dapat ditunda pada tahun anggaran berikutnya, misalnya kegiatan cetak sawah yang belum memiliki SID dan persyaratan bangun gedung yang belum tersedia, dan <br />
        	(8) output cadangan/masih blokir yang menjadi catatan pada DIPA.',
        ]);

        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '42',
        'question' => 'e. Mengenai penekanan harga, saya mengapresiasi adanya Toko Tani Indonesia, jumlahnya banyak bagaimana menghandlenya.',
        'answer' => 'Cara yang dilakukan adalah dengan terus meningkatkan koordinasi, monitoring dan pengawalan. Program ini disusun dalam rangka mengefektifkan rantai distribusi pangan antara Gapoktan sebagai pemasok pangan (beras) dengan Toko Tani Indonesia (TTI), sehingga petani memperoleh harga yang wajar serta kosumen mendapat beras yang berkualitas dengan harga terjangkau. Tahun ini kementan akan mendorong PUPM-TTI sebanyak 500 unit hampir diseluruh Indonesia, dan sudah berjalan sebagaimana di harapkan.',
        ]);

        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '42',
        'question' => 'f. Mengenai embung, mohon agar saling berkoordinasi antar Kementan dengan KLH.',
        'answer' => 'Embung yang dibangun sektor pertanian adalah embung dengan kapasitas kecil. Tujuan utamanya adalah dalam rangka antisipasi anomali iklim/kekeringan, dengan sumber air dari curah hujan atau limpasan air sungai. Embung ini dibangun sendiri oleh kelompok tani dan lahan yang digunakan adalah milik kelompok tani/desa, serta tidak melakukan pembebasan tanah. Embung pertanian ini berbeda dengan embung besar (kapasitas besar) yang dibangun oleh Kementerian PUPR, yang sudah tentu perlu melakukan koordinasi dengan Kemen LHK, terkait status lahan dan dampak lingkungannya.',
        ]);

        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '24',
        'question' => 'a. Mengenai pengurangan anggaran di Kebumen, mengenai anggarannya justru dikurangi, padahal ini daerah yang termasuk miskin, mohon penjelasan.',
        'answer' => 'Daerah yang termasuk miskin, seperti Kebumen menjadi fokus prioritas program pembangunan pertanian. Sebagaimana menjawab eprtanyaan sebelumnya, pemotongan anggaran lebih banyak dilakukan di satker pusat terutama pada: honorarium kegiatan, perjalanan dinas, paket meeting, seminar, dan workshop.',
        ]);

        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '24',
        'question' => 'b. Mengenai bansos dan subsidi, saya mendapat laporan bahwa program ini malah merugikan rakyat.',
        'answer' => 'Dari hasil evaluasi selama ini, secara umum kegiatan belanja sosial dan subsidi masih dirasakan sangat bermanfaat bagi kelompok tani. Program pemberian pupuk dan benih bersubsidi bertujuan untuk meringankan beban petani agar ketika memerlukan pupuk dan benih dapat tersedia dengan harga yang terjangkau. Alasan pupuk dan benih disediakan subsidi karena petani Indonesia umumnya masih kurang mampu membeli sesuai harga pasar. Untuk itu, pemerintah Indonesia memilih opsi memberikan subsidi harga pupuk dan benih untuk petani.',
        ]);

        DB::table('workmeeting_question')->insert([
        'workmeeting_id' => '4',
        'speakers_id' => '24',
        'question' => 'c. Mengenai harga daging sapi lokal, saya dapat laporan kalau memotong sapi lokal malah merugi, mohon penjelasan.',
        'answer' => 'Jika dilihat dari struktur biaya karkas sapi dan daging sapi, memotong sapi lokal tidak rugi. <br />
        	Contoh sapi dengan berat 400 Kg dengan harga Rp. 17.600,-/Kg. <br />
        	Berat karkas utuh sekitar 200kg dengan harga karkas utuh sekitar Rp. 88.000,-/Kg., <br />
        	sedangkan harga Karkas Bersih sekitar Rp. 80.080,-/Kg. <br />
        	Total produk sampingan yang terdiri dari Harga Oval, Tulang, dan kulit yaitu Rp. 3.114,-/Kg. <br />
        	Total harga Daging didapatkan dari total harga sapi dikurangi total Harga Produk sampingan (Rp 17.600,-/Kg – Rp 3.114,-/Kg) yaitu Rp. 14.486,-/Kg dengan harga daging murninya di RPH sekitar Rp. 103.471,-/Kg. <br />
        	Harga jual Daging di Jagal menjadi Rp. 106.221,-/Kg dengan adanya margin keuntungan Jagal Rp. 2.750/Kg. <br />
        	Berikutnya ada biaya transport, penyusutan dll sebesar Rp. 2.000,- sehingga Harga Jual pedagang menjadi Rp. 108.221,-/Kg. <br />
        	Harga Jual ke konsumen akhir Rp. 111.121,-/Kg dengan keuntungan yang diperoleh sekitar Rp. 3.000,-.dapat disimpulkan terdapat margin keuntungan sebesar Rp. 2000,- sampai Rp. 3.000,-/Kg di Jagal dan pedagang akhir.',
        ]);


    }
}
