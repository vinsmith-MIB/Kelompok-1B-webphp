Laporan code style.css

>. {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

1. margin: 0;: Mengatur margin elemen-elemen menjadi 0. Margin adalah ruang di sekeliling elemen, dan dengan mengatur nilainya menjadi 0, Anda menghilangkan ruang tersebut.
2. padding: 0;: Mengatur padding elemen-elemen menjadi 0. Padding adalah ruang di antara batas elemen dan kontennya, dan dengan mengatur nilainya menjadi 0, Anda menghilangkan padding tersebut.
3. box-sizing: border-box;: Mengatur model kotak elemen-elemen menjadi "border-box". Dalam model kotak ini, lebar dan tinggi elemen mencakup padding dan border, bukan ditambahkan kepadanya. Ini membantu mengontrol dimensi total elemen dengan lebih mudah.
5. font-family: 'Open Sans', sans-serif;: Mengatur jenis font untuk teks pada halaman. Font utama adalah 'Open Sans', dan jika tidak tersedia, peramban akan mencari font alternatif dengan jenis 'sans-serif'.

>body {
    height: 100vh;
    background-color: #000;
    background-image:linear-gradient(115deg,rgba(0, 0, 0, 0.671), rgba(0, 0, 0, 0.782)),
    url('https://img.freepik.com/free-photo/aerial-view-business-team_53876-124515.jpg?w=1800&t=st=1690999663~exp=1691000263~hmac=90385b49edc6ed76e90252dd139012b1dc955896a6920909c9f045f80eb124c1');
    background-size: cover;
    background-position: center;
}

1. height: 100vh;: Mengatur tinggi elemen <body> menjadi 100 viewport height (100vh). Ini membuat elemen <body> mengisi seluruh tinggi layar perangkat pengguna.
2. background-color: #000;: Mengatur warna latar belakang elemen <body> menjadi hitam (#000).
3. background-image: linear-gradient(115deg, rgba(0, 0, 0, 0.671), rgba(0, 0, 0, 0.782)), url('https://img.freepik.com/free-photo/aerial-view-business-team_53876-124515.jpg?w=1800&t=st=1690999663~exp=1691000263~hmac=90385b49edc6ed76e90252dd139012b1dc955896a6920909c9f045f80eb124c1');: Menggabungkan dua latar belakang untuk elemen <body>. Pertama, menggunakan linear gradient dengan dua warna RGBA hitam semi-transparan, dan kedua, menggunakan gambar latar belakang yang diambil dari URL yang diberikan.
4. background-size: cover;: Mengatur latar belakang untuk menutupi seluruh elemen <body>, sehingga memastikan bahwa latar belakang mencakup seluruh area tampilan.
5. background-position: center;: Mengatur posisi latar belakang ke tengah elemen <body>. Ini memastikan bahwa gambar latar belakang dan gradient linear berada di tengah
   
>li{
    list-style: none;
}

1. li: Ini adalah selector CSS yang menargetkan semua elemen daftar (<li>).
2. list-style: none;: Properti ini menghilangkan gaya daftar default, yang biasanya berupa tanda bulat atau angka yang menunjukkan urutan item dalam daftar. Dengan mengatur nilai menjadi "none", Anda menghilangkan tanda tersebut.

>a{
    text-decoration: none;
    color: #fff;
    font-size: 1rem;
}

1. text-decoration: none;: Menghilangkan dekorasi teks pada tautan. Ini biasanya menghilangkan garis bawah default yang terkait dengan tautan.
2. color: #fff;: Mengatur warna teks tautan menjadi putih (#fff). Dalam hal ini, teks tautan akan memiliki warna putih.
3. font-size: 1rem;: Mengatur ukuran font tautan menjadi 1 rem. Satuan "rem" (root em) mengacu pada ukuran font elemen <html>. Nilai 1 rem di sini akan sama dengan ukuran font default halaman.

>a:hover{
    color: orange;
}
1. a:hover: Selector ini menargetkan elemen tautan (<a>) ketika sedang dalam keadaan "hover" atau diketahui oleh kursor.
2. color: orange;: Mengatur warna teks tautan menjadi oranye ketika tautan tersebut sedang dalam keadaan "hover".

>header{
    position: relative;
    padding: 0 2rem;
}
1. position: relative;: Menetapkan posisi elemen header menjadi relatif terhadap posisinya yang normal. Ini berarti elemen tersebut akan diatur berdasarkan posisinya dalam alur dokumen, dan properti top, right, bottom, dan left akan diterapkan relatif terhadap posisi normalnya.
2. padding: 0 2rem;: Menetapkan padding (ruang di sekeliling konten) pada elemen header. Nilai 0 2rem berarti tidak ada padding pada bagian atas dan bawah, dan 2 rem (unit berdasarkan ukuran font elemen root) pada bagian kanan dan kiri. Padding ini memberikan ruang di sekitar konten dalam elemen header.

>.navbar{
    width: 100%;
    height: 60px;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
   justify-content: space-between;
}
1. width: 100%;: Menetapkan lebar elemen navbar menjadi 100% dari lebar induknya. Ini memastikan bahwa navbar akan mengisi lebar penuh dari elemen yang mengandungnya.
2. height: 60px;: Menetapkan tinggi elemen navbar menjadi 60 piksel. Ini mendefinisikan tinggi navbar, yang bisa disesuaikan sesuai dengan desain halaman web Anda.
3. max-width: 1200px;: Menetapkan lebar maksimum elemen navbar menjadi 1200 piksel. Ini dapat digunakan untuk membatasi lebar navbar saat layar menjadi sangat lebar, sehingga tetap mudah dibaca dan dilihat.
4. margin: 0 auto;: Memberikan margin atas dan bawah 0, sementara memberikan margin kiri dan kanan otomatis (auto). Ini digunakan untuk memusatkan elemen navbar di dalam elemen induknya.
5. display: flex;: Menggunakan model tata letak flexbox, yang memungkinkan penataan dan penyejajaran elemen-elemen anak di dalam navbar.
6. align-items: center;: Menyusun elemen anak secara vertikal sehingga mereka berada di tengah-tengah navbar. Ini berlaku karena kita menggunakan display: flex;.
7. justify-content: space-between;: Memberikan ruang sekitar elemen-elemen anak di dalam navbar, menjadikannya rata antara satu sama lain. Ini juga berlaku karena kita menggunakan display: flex;

>.navbar .logo a{
    font-size: 1.5rem;
    font-weight: bold;
}
1. .navbar .logo a: Ini adalah selector CSS yang menargetkan elemen tautan (<a>) yang berada di dalam elemen dengan kelas "logo" yang juga berada di dalam elemen dengan kelas "navbar".
2. font-size: 1.5rem;: Mengatur ukuran font dari tautan tersebut menjadi 1.5 rem (root em). Ini akan membuat teks di tautan menjadi lebih besar.
3. font-weight: bold;: Mengatur ketebalan font dari tautan tersebut menjadi tebal. Ini akan memberikan efek teks yang lebih tebal atau bold.

>.navbar .links{
    display: flex;
    gap: 2rem;
}
1. .navbar .links: Ini adalah selector CSS yang menargetkan elemen dengan kelas "links" yang berada di dalam elemen dengan kelas "navbar".
2. display: flex;: Menggunakan model tata letak flexbox pada elemen "links". Ini memungkinkan penataan dan penyejajaran elemen-elemen anak di dalam "links" dengan lebih fleksibel.
3. gap: 2rem;: Menetapkan jarak (gap) antara elemen-elemen anak di dalam "links" menjadi 2 rem (root em). Gap ini memberikan ruang antara elemen-elemen anak, sehingga membuat tata letak lebih teratur.
   
>.navbar .toggle_btn{
    color: #fff;
    font-size: 1.5rem;
    cursor: pointer;
    display: none;
}
1. color: #fff;: Mengatur warna teks pada tombol toggle menjadi putih. Ini memberikan kontras yang baik terhadap latar belakang gelap di bagian atas halaman.
2. font-size: 1.5rem;: Menetapkan ukuran font pada tombol toggle menjadi 1.5 rem. Ini memastikan bahwa tombol tersebut memiliki ukuran yang cukup besar untuk dilihat dan diklik dengan mudah.
3. cursor: pointer;: Mengubah bentuk kursor menjadi tanda panah, menunjukkan bahwa elemen ini dapat diinteraksikan dan diklik.
4. display: none;: Menyembunyikan tombol toggle secara default. Ini berarti bahwa tombol tersebut tidak akan terlihat pada tampilan normal layar desktop. Pengaturan ini kemungkinan akan diubah melalui media query untuk responsif.

>.action_btn{
    color: #fbfcfd;
    padding: 10px 20px;
    background: transparent;
    border: 1px solid #fff;
    border-radius: 20px;
    outline: none;
    cursor: pointer;
    line-height: 80px;
}
1. color: #fbfcfd;: Mengatur warna teks pada tombol menjadi putih (#fbfcfd adalah representasi warna putih dalam kode hex).
2. padding: 10px 20px;: Memberikan padding sebanyak 10 piksel pada bagian atas dan bawah, serta 20 piksel pada sisi kiri dan kanan tombol. Ini memberikan ruang di sekitar teks di dalam tombol.
3. background: transparent;: Mengatur latar belakang tombol menjadi transparan. Dengan kata lain, latar belakangnya tidak memiliki warna, dan elemen di bawahnya (seperti latar belakang halaman atau elemen lainnya) akan terlihat.
4. border: 1px solid #fff;: Menetapkan garis tepi tombol sebanyak 1 piksel dengan warna putih. Ini memberikan garis tepi yang terlihat di sekitar tombol.
5. border-radius: 20px;: Memberikan radius sudut sebanyak 20 piksel pada tombol. Ini menciptakan sudut yang melengkung pada keempat sudut tombol, memberikan tampilan yang lebih estetis.
6. outline: none;: Menghilangkan garis luar (outline) pada tombol saat tombol tersebut mendapatkan fokus. Ini membantu menghindari tampilan yang kurang diinginkan pada saat interaksi.
7. cursor: pointer;: Mengubah kursor saat diarahkan ke tombol menjadi tanda panah, menunjukkan bahwa tombol tersebut dapat diklik.
8. line-height: 80px;: Menetapkan tinggi baris sebanyak 80 piksel. Ini bisa digunakan untuk mengatur tinggi tombol dan memastikan bahwa teksnya berada di tengah tombol vertikal.
   
>.action_btn:hover{
    scale: 1.05;
    color: #00e5ff;
}
1. scale: 1.05;: Pada saat tombol diklik (hovered), properti scale dengan nilai 1.05 diterapkan. Ini berarti tombol akan diperbesar sebanyak 5% dari ukuran normalnya. Properti ini menciptakan efek animasi perbesaran ketika tombol diarahkan oleh kursor.
2. color: #00e5ff;: Pada saat tombol diklik (hovered), warna teks tombol diubah menjadi biru muda (#00e5ff). Ini menciptakan efek perubahan warna teks saat tombol diarahkan.

>.action_btn:active{
    scale: 0.95;
}

1. scale: 0.95;: Pada saat tombol sedang aktif (ditekan), properti scale dengan nilai 0.95 diterapkan. Ini berarti tombol akan diperkecil sebanyak 5% dari ukuran normalnya. Properti ini menciptakan efek animasi pengecilan saat tombol ditekan

>.dropdown_menu{
    display: none;
    position: absolute;
    right: 2rem;
    top: 60px;
    height: 0px;
    width: 300px;
    background: rgba(255, 255, 255, 0.148);
    backdrop-filter: blur(15px);
    border-radius: 10px;
    overflow: hidden;
    transition: height 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275)
}
1. display: none;: Menyembunyikan elemen dropdown secara default. Elemen ini tidak akan terlihat di halaman web sampai diberikan perintah khusus untuk ditampilkan, misalnya melalui JavaScript atau media query.
2. position: absolute;: Menetapkan posisi elemen dropdown secara absolut terhadap elemen orang tua terdekat yang memiliki posisi relatif atau absolut.
3. right: 2rem;: Menetapkan jarak dari tepi sebelah kanan elemen dropdown ke elemen orang tua sejauh 2 rem.
4. top: 60px;: Menetapkan jarak dari tepi atas elemen dropdown ke elemen orang tua sejauh 60 piksel.
5. height: 0px;: Menetapkan tinggi awal elemen dropdown menjadi 0 piksel. Ini memastikan bahwa elemen ini tidak terlihat saat disembunyikan.
6. width: 300px;: Menetapkan lebar elemen dropdown menjadi 300 piksel.
7. background: rgba(255, 255, 255, 0.148);: Menetapkan warna latar belakang elemen dropdown menggunakan notasi RGBA dengan nilai alpha (transparansi) sebesar 0.148. Ini memberikan efek latar belakang semi-transparan.
8. backdrop-filter: blur(15px);: Memberikan efek blur sebanyak 15 piksel pada elemen yang berada di belakang elemen dropdown. Ini menciptakan efek latar belakang yang terlihat kabur melalui elemen dropdown yang transparan.
9. border-radius: 10px;: Memberikan radius sudut sebanyak 10 piksel pada elemen dropdown. Ini menciptakan sudut yang melengkung pada keempat sudut elemen.
10. overflow: hidden;: Mengatur overflow elemen menjadi tersembunyi. Ini memastikan bahwa konten elemen yang mungkin keluar dari batas elemen dropdown tidak akan terlihat
11. transition: height 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);: Menetapkan efek transisi pada perubahan tinggi (height) elemen dropdown. Transisi ini akan berlangsung selama 0.2 detik dengan efek kurva perpindahan (cubic-bezier) yang ditentukan. Efek ini memberikan perubahan tinggi elemen dropdown yang halus dan lebih estetis.
12. height 0.2s: Menentukan properti yang akan mengalami transisi (tinggi) dan durasi transisinya (0.2 detik).
13. cubic-bezier(0.175, 0.885, 0.32, 1.275): Menentukan fungsi kurva perpindahan yang digunakan untuk transisi. Ini adalah nilai cubic-bezier yang mendefinisikan pola perubahan kecepatan selama transisi.

>.dropdown_menu.open{
    height: 135px;
}
1 .dropdown_menu.open: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas .dropdown_menu dan kelas .open. Ini berarti aturan CSS ini akan diterapkan pada elemen dropdown yang memiliki keduanya kelas tersebut.
2. height: 135px;: Mengatur tinggi elemen dropdown menjadi 135 piksel saat elemen memiliki kelas .open. Dengan mengubah tinggi elemen, ini menciptakan efek animasi yang memperluas dropdown dari tinggi 0 piksel (kondisi awal) menjadi 135 piksel saat kelas .open ditambahkan.

>.dropdown_menu li{
    padding: 0.7rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

1. padding: 0.7rem;: Menetapkan padding sebanyak 0.7 rem pada semua sisi elemen li di dalam dropdown. Padding memberikan ruang di sekitar isi dari setiap elemen li.
2. display: flex;: Mengubah elemen li menjadi kontainer flex, yang memungkinkan pengaturan tata letak flexbox pada anak-anaknya.
3. align-items: center;: Mengatur penyusunan anak-anak elemen li secara vertikal ke tengah. Ini memastikan bahwa isi dari setiap elemen li akan diatur ke tengah secara vertikal.
4. justify-content: center;: Mengatur penyusunan anak-anak elemen li secara horizontal ke tengah. Ini memastikan bahwa isi dari setiap elemen li akan diatur ke tengah secara horizontal.

>.dropdown_menu .action_btn{
    width: 100%;
    display: flex;
    justify-content: center;
}
1. width: 100%;: Menetapkan lebar elemen dengan class .action_btn di dalam dropdown menjadi 100%. Ini akan membuat elemen tersebut memanfaatkan lebar penuh dari parentnya (elemen dengan class .dropdown_menu).
2. display: flex;: Mengubah elemen .action_btn menjadi kontainer flex, yang memungkinkan pengaturan tata letak flexbox pada anak-anaknya.
3. justify-content: center;: Mengatur penyusunan anak-anak elemen .action_btn secara horizontal ke tengah. Ini memastikan bahwa isi dari elemen tersebut akan diatur ke tengah secara horizontal.

>section#hero{
    color: #fbfcfd;
    position:absolute;
    top: 50%;
    left: 8%;
    transform: translateY(-50%);
    z-index: 2;
}
1. color: #fbfcfd;: Menetapkan warna teks pada elemen section#hero menjadi putih (#fbfcfd).
2. position: absolute;: Menetapkan posisi elemen section#hero secara absolut. Artinya, elemen ini akan ditempatkan relatif terhadap elemen orang tua terdekat yang memiliki posisi non-static.
3. top: 50%;: Menetapkan posisi elemen section#hero sejauh 50% dari atas elemen orang tua. Ini akan memposisikan elemen pada tengah vertikal dari elemen orang tua.
4. left: 8%;: Menetapkan posisi elemen section#hero sejauh 8% dari kiri elemen orang tua. Ini memberikan jarak dari sisi kiri elemen orang tua.
5. transform: translateY(-50%);: Menggunakan transformasi CSS untuk memindahkan elemen ke atas sejauh 50% dari tinggi elemen itu sendiri. Ini digunakan untuk secara tepat memposisikan elemen di tengah vertikal.
6. z-index: 2;: Menetapkan nilai z-index elemen section#hero menjadi 2. z-index digunakan untuk mengontrol tumpukan tampilan, dan nilai yang lebih tinggi akan muncul di atas elemen dengan nilai z-index yang lebih rendah.

>#hero h1{
    font-size: 5rem;
    margin-bottom: 1rem;
}

p{
    font-style: italic;
}

1. #hero h1: Ini adalah pemilih CSS yang menargetkan elemen h1 yang berada di dalam elemen dengan ID hero.
2. font-size: 5rem;: Menetapkan ukuran font untuk elemen h1 di dalam #hero menjadi 5 rem. Ini akan mengatur ukuran teks judul sesuai dengan preferensi desain.
3. margin-bottom: 1rem;: Menetapkan margin bawah sejauh 1 rem pada elemen h1 di dalam #hero. Ini memberikan ruang antara elemen h1 dan elemen berikutnya (jika ada) agar tampilan lebih teratur.
4. p: Ini adalah pemilih CSS yang menargetkan semua elemen p di halaman.font-style: italic;: Mengatur gaya font elemen p menjadi italic. Ini memberikan efek visual teks miring pada semua elemen p.


>h1{
    font-size: 80px;
    margin: 10px 0 30px;
    line-height: 80px;
}

1. font-size: 80px;: Menetapkan ukuran font untuk elemen h1 menjadi 80 piksel. Ini mengatur ukuran teks judul sesuai dengan preferensi desain, memberikan tampilan besar dan mencolok.
2. margin: 10px 0 30px;: Menetapkan margin untuk elemen h1. Nilai-nilai ini mewakili urutan margin atas (10 piksel), margin kanan dan kiri (0), dan margin bawah (30 piksel). Ini memberikan ruang di sekitar elemen h1 untuk mengatur tata letak dan estetika.
3. line-height: 80px;: Menetapkan tinggi baris (line height) untuk elemen h1 menjadi 80 piksel. Ini mengatur jarak vertikal antara garis teks, memastikan teks di dalam elemen h1 terlihat teratur.

>@media(max-width: 992px){
    .navbar .links,
    .navbar .action_btn{
        display: none;
    }

    .navbar .toggle_btn{
        display: block;
    }

    .dropdown_menu{
        display: block;
    }
}

1. @media (max-width: 992px) { ... }: Ini adalah aturan media query yang akan aktif jika lebar layar kurang dari atau sama dengan 992 piksel. Ini umumnya digunakan untuk membuat desain responsif yang beradaptasi dengan perangkat berlayar kecil atau ukuran tampilan yang lebih kecil.
2. .navbar .links, .navbar .action_btn { display: none; }: Menyembunyikan elemen dengan kelas .links dan .action_btn yang berada di dalam elemen dengan kelas .navbar. Ini adalah bagian dari responsif design, di mana ketika lebar layar lebih kecil, beberapa elemen navigasi mungkin perlu disembunyikan untuk memberikan tampilan yang lebih bersih.
3. .navbar .toggle_btn { display: block; }: Menampilkan elemen dengan kelas .toggle_btn yang berada di dalam elemen dengan kelas .navbar. Ini adalah bagian dari responsif design, di mana ketika lebar layar lebih kecil, tombol toggle mungkin perlu ditampilkan untuk membuka atau menutup menu navigasi.
4. .dropdown_menu { display: block; }: Menampilkan elemen dengan kelas .dropdown_menu. Ini umumnya digunakan dalam konteks responsif, di mana menu dropdown mungkin perlu ditampilkan ketika lebar layar lebih kecil.


>@media(max-width: 576px){
    .dropdown_menu{
        left: 2rem;
        width: unset;
    }
}

1. @media (max-width: 576px) { ... }: Ini adalah aturan media query yang akan aktif jika lebar layar kurang dari atau sama dengan 576 piksel. Ini umumnya digunakan untuk menanggapi perangkat dengan layar sangat kecil atau ukuran tampilan yang sangat kecil.
2. .dropdown_menu { left: 2rem; }: Mengatur posisi horizontal (left) dari elemen dengan kelas .dropdown_menu menjadi 2 rem dari sisi kiri elemen orang tua. Ini adalah bagian dari responsif design, di mana posisi elemen dapat disesuaikan untuk penataan yang optimal pada layar kecil.
3. .dropdown_menu { width: unset; }: Membatalkan nilai lebar elemen dengan kelas .dropdown_menu. Dengan mengatur width: unset;, elemen dropdown akan mengambil lebar yang dibutuhkan oleh kontennya tanpa batasan lebar yang telah ditetapkan sebelumnya. Ini memungkinkan elemen dropdown untuk menyesuaikan lebar sesuai kebutuhan kontennya.

>.stars img{
    width: 20px;
    animation: stars 7s linear infinite;
}
1. width: 20px;: Menetapkan lebar elemen img di dalam elemen dengan class .stars menjadi 20 piksel. Ini mengatur ukuran gambar bintang.
2. animation: stars 7s linear infinite;: Menggunakan animasi CSS dengan nama stars yang berlangsung selama 7 detik, menggunakan fungsi pemilihan waktu linear, dan diulang secara infinite. Ini mengatur efek animasi pada gambar bintang.
3. stars: Nama animasi yang akan digunakan.
4. 7s: Durasi animasi, dalam hal ini 7 detik.
5. linear: Fungsi waktu animasi yang membuat pergerakan gambar bintang tetap konstan sepanjang waktu animasi.
6. infinite: Mengulangi animasi secara tak terbatas.

>.stars{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: absolute;
    bottom: 70px;

}
1. width: 100%;: Menetapkan lebar elemen dengan class .stars menjadi 100% dari lebar elemen orang tua. Ini memastikan bahwa elemen tersebut akan memanfaatkan lebar penuh dari kontainer orang tua.
2. display: flex;: Mengubah elemen .stars menjadi kontainer flex, memungkinkan untuk menggunakan tata letak flexbox.
3. align-items: center;: Menengahkan (center) anak-anak elemen .stars secara vertikal di dalam kontainer flex. Ini memastikan bahwa gambar bintang tetap terpusat secara vertikal.
4. justify-content: space-around;: Membuat ruang sekitar (space-around) anak-anak elemen .stars di dalam kontainer flex. Ini memberikan jarak sekitar yang merata di antara gambar bintang, menciptakan tata letak yang seimbang.
5. position: absolute;: Menetapkan posisi elemen .stars secara absolut. Artinya, elemen ini akan ditempatkan relatif terhadap elemen orang tua terdekat yang memiliki posisi non-static.
6. bottom: 70px;: Menetapkan jarak dari bawah elemen .stars ke bagian bawah elemen orang tua sejauh 70 piksel. Ini memposisikan elemen tersebut 70 piksel dari bagian bawah elemen orang tua.

>@keyframes stars{
    0%{
        transform: translateY(0);
        opacity: 0;
    }
    50%{
        
        opacity: 0.5;
    }
    70%{
        
        opacity: 1;
    }
    100%{
        transform: translateY(80vh);
        opacity: 0;
    }

}
1. @keyframes stars { ... }: Mendefinisikan animasi keyframes dengan nama stars.
2. 0% { transform: translateY(0); opacity: 0; }: Pada titik awal (0%), elemen akan dimulai tanpa pergeseran vertikal (translateY(0)) dan dengan opasitas 0 (sepenuhnya transparan).
3. 50% { opacity: 0.5; }: Pada setengah waktu animasi (50%), opasitas elemen akan diatur menjadi 0.5 (setengah transparan). 
4. 70% { opacity: 1; }: Pada 70% waktu animasi, opasitas elemen akan diatur menjadi 1 (sepenuhnya terlihat atau tidak transparan).
5. 100% { transform: translateY(80vh); opacity: 0; }: Pada akhir animasi (100%), elemen akan mengalami pergeseran vertikal sejauh 80 viewport height (translateY(80vh)) dan opasitas kembali diatur menjadi 0 (sepenuhnya transparan)

>.stars img:nth-child(1){
    animation-delay: 2s;
    width: 25px;
}
.stars img:nth-child(2){
    animation-delay: 1s;
}
.stars img:nth-child(3){
    animation-delay: 3s;
    width: 25px;
}
.stars img:nth-child(4){
    animation-delay: 4.5s;
}
.stars img:nth-child(5){
    animation-delay: 3s;
    width: 20px;
}
.stars img:nth-child(6){
    animation-delay: 7s;
    width: 35px;
}
.stars img:nth-child(7){
    animation-delay: 1s;
}
.stars img:nth-child(8){
    animation-delay: 3s;
    width: 25px;
}
.stars img:nth-child(9){
    animation-delay: 7s;
}
.stars img:nth-child(10){
    animation-delay: 5s;
    width: 30px;
}
1. .stars img:nth-child(1) { animation-delay: 2s; width: 25px; }: Menetapkan animasi delay sebesar 2 detik dan lebar gambar bintang menjadi 25 piksel untuk elemen pertama dalam elemen dengan class .stars.
2. .stars img:nth-child(2) { animation-delay: 1s; }: Menetapkan animasi delay sebesar 1 detik untuk elemen kedua dalam elemen dengan class .stars.
3. .stars img:nth-child(3) { animation-delay: 3s; width: 25px; }: Menetapkan animasi delay sebesar 3 detik dan lebar gambar bintang menjadi 25 piksel untuk elemen ketiga dalam elemen dengan class .stars.
... dan seterusnya untuk elemen keempat hingga kesepuluh.
