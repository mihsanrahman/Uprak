<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 16 Kota Bogor</title>
    <link rel="stylesheet" href="{{ asset('cssfile/home.css') }}">

</head>

<body>
    <header>
        <div class="container">
            <h1> Welcome, {{ Auth::user()->name }}</h1>
            </div>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Kurikulum</a></li>
                <li><a href="#">Matapelajaran</a></li>
                <li><a href="#">Guru</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Tentang SMPN 16 Kota Bogor</h2>
            <p>SMPN 16 Kota Bogor adalah sekolah yang berkomitmen untuk mencetak siswa yang religius, unggul dalam
                prestasi, dan berwawasan lingkungan. Berikut adalah visi dan misi SMPN 16 Kota Bogor:</p>
            <h3>Visi</h3>
            <p>Terwujudnya siswa yang religius, unggul dalam prestasi, dan berwawasan lingkungan.</p>
            <h3>Misi</h3>
            <ol>
                <li>Meningkatkan kerjasama dengan semua pihak yang terlibat dalam kebersihan sekolah.</li>
                <li>Memberikan keteladanan etika dan moral agar siswa bertingkah laku sesuai dengan norma ajaran yang
                    dianutnya.</li>
                <li>Menumbuhkan pemahaman terhadap ajaran agama, sehingga menjadi sumber kearifan dalam bertindak.</li>
                <li>Melaksanakan proses pembelajaran yang mengarah pada pembentukan pribadi mandiri.</li>
                <li>Berusaha memelihara keamanan, ketertiban, keindahan, kebersihan, dan kekeluargaan.</li>
                <li>Memberikan pelayanan dan bimbingan kepada siswa dalam upaya peningkatan kreatifitas siswa baik
                    secara akademik maupun non-akademik.</li>
                <li>Melaksanakan pelayanan dan bimbingan kepada para siswa agar setiap siswa berkembang sesuai dengan
                    potensi yang dimilikinya sehingga dapat digunakan dalam kehidupannya.</li>
            </ol>
        </section>

        <section>
            <h2>Kurikulum</h2>
            <p>Kami mengadopsi kurikulum yang sesuai dengan standar nasional dan memberikan kesempatan bagi siswa untuk
                mengembangkan kemampuan akademik dan non-akademik mereka. Kami juga menyediakan berbagai macam kegiatan
                ekstrakurikuler dan program pengembangan diri untuk memperluas pengalaman siswa dan membantu mereka
                dalam mempersiapkan masa depan mereka.</p>
        </section>
        <section>
            <h2>Mata Pelajaran</h2>
            <p>SMPN 16 Kota Bogor menyediakan berbagai mata pelajaran yang dapat membantu siswa untuk meningkatkan
                pengetahuan dan keterampilan mereka. Berikut adalah beberapa mata pelajaran yang kami tawarkan:</p>
            <ul>
                <li>Matematika</li>
                <li>Bahasa Inggris</li>
                <li>Bahasa Indonesia</li>
                <li>Ilmu Pengetahuan Alam</li>
                <li>Ilmu Pengetahuan Sosial</li>
                <li>Seni Budaya dan Keterampilan</li>
                <li>Pendidikan Jasmani, Olahraga, dan Kesehatan</li>
                <li>Agama</li>
            </ul>
        </section>
        <section>
            <h2>Daftar Nama Guru</h2>
            <p>Berikut adalah daftar nama-nama guru di SMPN 16 Kota Bogor:</p>
            <ul>
                <li>Bapak Ahmad (Matematika)</li>
                <li>Ibu Siti (Bahasa Inggris)</li>
                <li>Bapak Joko (Bahasa Indonesia)</li>
                <li>Ibu Nita (Ilmu Pengetahuan Alam)</li>
                <li>Bapak Rudi (Ilmu Pengetahuan Sosial)</li>
                <li>Ibu Yulia (Seni Budaya dan Keterampilan)</li>
                <li>Bapak Andi (Pendidikan Jasmani, Olahraga, dan Kesehatan)</li>
                <li>Ibu Wati (Agama)</li>
            </ul>
        </section>

    </main>
    <footer>
        <p>© Muhammad Ihsan Rahman - 2023 SMPN 16 Kota Bogor</p>
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </footer>
</body>

</html>
