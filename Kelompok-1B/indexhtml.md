Laporan code bagian index html
 ><head>
    <meta charset="UTF-8" />
    <title>Survey Pembelajaran Via Daring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <script src="../../index.js"></script>
  </head

1. [meta charset="UTF-8" />]: Mendefinisikan karakter set dokumen HTML sebagai UTF-8, yang umumnya digunakan untuk mendukung karakter internasional.
2. [<title Survey Pembelajaran Via Daring</title>]: Menetapkan judul dokumen yang akan ditampilkan di bilah judul atau tab peramban.
3. [meta name="viewport" content="width=device-width, initial-scale=1.0" />]: Menentukan cara peramban menangani tampilan halaman pada perangkat bergerak. Pengaturan ini memberi tahu peramban untuk menggunakan lebar perangkat sebagai lebar pandangan awal dan mengatur tingkat zoom awal ke 1.0.
4. [link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-...">]: Memasukkan file stylesheet dari Font Awesome, yang memberikan akses ke ikon-ikon yang dapat digunakan dalam desain halaman web. Integrity dan crossorigin digunakan untuk keamanan dan pengelolaan cache.
5. [link rel="stylesheet" href="style.css" />]: Mengaitkan dokumen dengan file stylesheet lokal bernama "style.css", yang kemungkinan berisi aturan gaya tambahan untuk mempercantik tampilan halaman.
6. [script src="../../index.js"></script>]: Memasukkan file skrip JavaScript eksternal dari lokasi "index.js". Skrip ini berisi logika atau fungsi-fungsi tambahan untuk memanipulasi dan meningkatkan perilaku halaman.
7. Secara keseluruhan, bagian <head> ini digunakan untuk mengonfigurasi dan menyelaraskan berbagai aspek dari halaman web, seperti pengaturan karakter, judul, gaya, dan skrip-skrip yang dibutuhkan.

><div class="navbar">
            <div class="logo"><a href="#"> Survey Pembelajaran Via Daring</a></div>
            <ul class="links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="https://wa.me/6281230928021?">Contact</a></li>
            </ul>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

1. Kode di atas adalah bagian dari elemen <div> yang mewakili bagian navbar (bilah navigasi) pada halaman web. Mari kita jelaskan setiap bagian:
2. [div class="navbar">: Ini adalah div utama yang menampung seluruh bagian navbar. Kelas "navbar"  digunakan untuk memberikan gaya atau memanipulasi elemen ini melalui CSS atau JavaScript.
3. [div class="logo"><a href="#"> Survey Pembelajaran Via Daring</a></div>: Ini adalah div yang berisi logo atau judul situs. Terdapat juga elemen <a> yang membungkus teks "Survey Pembelajaran Via Daring" dan memiliki atribut href="#", yang digunakan untuk menautkan ke bagian atas halaman (biasanya ke bagian dengan id "home").
4. [ul class="links">: Ini adalah daftar tak terurut (unordered list) yang berisi elemen-elemen navbar, seperti item menu.
5. [li><a href="index.html">Home</a></li>: Item menu pertama yang merupakan tautan ke halaman "index.html" dengan teks "Home".
6. [li><a href="about">About</a></li>: Item menu kedua yang merupakan tautan ke halaman "about" (mungkin "about.html") dengan teks "About".
7. [li><a href="https://wa.me/6281230928021?">Contact</a></li>: Item menu ketiga yang merupakan tautan eksternal ke nomor WhatsApp dengan teks "Contact".
8. [div class="toggle_btn">: Ini adalah div yang mungkin digunakan untuk menyertakan tombol toggle atau hamburger icon dalam desain responsif. Ikon "fa-bars" dari Font Awesome digunakan di sini.
9. [i class="fa-solid fa-bars"></i>: Ini adalah elemen ikon dengan kelas "fa-solid fa-bars" dari Font Awesome, yang menampilkan ikon tiga garis horizontal yang sering digunakan sebagai ikon menu tersembunyi pada tampilan seluler atau layar kecil.
10. Kode ini secara keseluruhan membentuk struktur dasar dari bagian navbar pada halaman web dan memberikan navigasi ke berbagai bagian situs.

> <div class="dropdown_menu">
            <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="https://wa.me/6281230928021?">Contact</a></li>
            </ul>
        </div>

1. [div class="dropdown_menu">: Ini adalah elemen div yang memiliki kelas "dropdown_menu". Kode ini mungkin digunakan untuk membuat elemen dropdown dalam desain halaman web Anda.
2. [ul>: Ini adalah elemen untuk membuat daftar tak terurut (unordered list), yang berisi elemen-elemen menu.
3. [li><a href="index.html">Home</a></li>: Ini adalah elemen daftar (list item) pertama dalam daftar. Ini berisi tautan ("Home") yang mengarah ke "index.html".
4. [li><a href="about">About</a></li>: Ini adalah elemen daftar kedua dalam daftar. Ini berisi tautan ("About") yang mungkin mengarah ke halaman "about".
5. [li><a href="https://wa.me/6281230928021?">Contact</a></li>: Ini adalah elemen daftar ketiga dalam daftar. Ini berisi tautan ("Contact") yang merupakan tautan eksternal ke nomor WhatsApp.

><div class="stars">
            <img src="https://i.pinimg.com/564x/27/1a/74/271a7465c96bd3e9d0753c9c16d2be63.jpg">
        </div>

1. [div class="stars">: Ini adalah elemen div yang memiliki kelas "stars". Kelas ini mungkin digunakan untuk memberikan gaya khusus melalui CSS atau untuk mengidentifikasi elemen ini melalui skrip JavaScript.
2. [img src="https://i.pinimg.com/564x/27/1a/74/271a7465c96bd3e9d0753c9c16d2be63.jpg">: Ini adalah elemen gambar yang menampilkan gambar dengan sumber (src) dari URL yang diberikan. Gambar ini berasal dari URL "https://i.pinimg.com/564x/27/1a/74/271a7465c96bd3e9d0753c9c16d2be63.jpg". Gambar ini digunakan sebagai elemen dekoratif atau latar belakang untuk bagian tertentu dari halaman web.

  >  <main>
        <section id="hero">
            <small> Welcome to our website</small>
            <h1>Online <br />Learning Survey</h1>
            <p>
                Berikan suara anda melalui survey ini untuk membantu kita menciptakan pengalaman belajar online yang lebih baik.<br /> Pendapat anda sangat berarti bagi kami. Ayo isi sekarang dan jadilah bagian dari perubahan positif!<br />
            </p>
            <a href="/index1.html" class="action_btn">Isi Survey</a>
        </section>
    </main>

1. [section id="hero">: Ini adalah elemen bagian yang diberi ID "hero". Bagian ini digunakan sebagai bagian hero atau bagian utama halaman yang menarik perhatian pengguna.
2. [small> Welcome to our website</small>: Ini adalah elemen kecil yang menampilkan teks "Welcome to our website". Elemen kecil ini biasanya digunakan untuk teks yang lebih kecil atau kurang menonjol secara visual.
3. [h1>Online <br />Learning Survey</h1>: Ini adalah elemen heading level 1 (h1) yang menampilkan teks "Online Learning Survey". Break tag (br /) digunakan untuk membuat baris baru di dalam heading.
4. [p>.../p>: Ini adalah elemen paragraf (p) yang berisi teks informatif yang menjelaskan tujuan dari survey online. Teks ini mengajak pengguna untuk memberikan suara mereka dan berpartisipasi dalam pembuatan pengalaman belajar online yang lebih baik.
5. [a href="/index1.html" class="action_btn">Isi Survey</a: Ini adalah tautan (a) yang mengarah ke "/index1.html" dan diberi kelas "action_btn". Teks tautan adalah "Isi Survey". Kelas ini  digunakan untuk memberikan gaya khusus pada tautan melalui CSS atau untuk keperluan JavaScript

 ><script>
        navbaranimate();
    </script>

1. Kode ini adalah bagian dari tag script yang memanggil atau menjalankan fungsi navbaranimate(). Dengan kata lain, script ini menginstruksikan peramban web untuk menjalankan fungsi tersebut.

