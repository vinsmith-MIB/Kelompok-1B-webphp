Berikut laporan CSS aboutme

1\. Resetting Margins and Padding:

\`\`\`css

\* {

margin: 0;

padding: 0;

}

\`\`\`

Ini adalah reset yang umum digunakan untuk menghapus margin dan padding
bawaan elemen HTML.

2\. Background Image:

\`\`\`css

body::before {

content: \"\";

background-image: linear-gradient(115deg, rgba(31, 31, 108, 0.8),
rgba(136, 136, 206, 0.7)), url(/image/aboutme-background.jpg);

background-size: cover;

background-position: center;

top: 0;

left: 0;

z-index: -1;

position: fixed;

height: 100%;

width: 100%;

}

\`\`\`

Ini mengatur gambar latar belakang halaman dengan gradient linear dan
gambar latar belakang berdasarkan URL. Gambar ini ditetapkan di lapisan
bawah dengan z-index -1 dan diberi efek parallax.

3\. Overflow-X: Hidden:

\`\`\`css

body {

overflow-x: hidden;

}

\`\`\`

Ini menghilangkan scroll horizontal jika halaman melebihi lebar layar.

4\. Styling Links:

\- Mendefinisikan gaya dasar untuk tautan dan tautan yang sedang
dihover, termasuk menghapus dekorasi tautan dan mengubah warna teks.

5\. Navbar Styling:

\- Mendefinisikan gaya untuk elemen-elemen dalam navbar seperti logo,
tautan, dan tombol toggle.

\- Tombol toggle ini akan muncul pada layar yang lebih kecil (responsif)
dan digunakan untuk menampilkan menu dropdown.

6\. Dropdown Menu Styling:

\- Membuat gaya untuk menu dropdown yang awalnya tersembunyi (\`display:
none\`) dan akan muncul saat tombol toggle diklik.

\- Menu ini memiliki latar belakang transparan dengan efek blur.

7\. Hero Section:

\- Mendefinisikan tampilan untuk bagian hero (biasanya bagian atas
halaman web) dengan teks dan gaya tertentu.

8\. Media Queries:

\- Mendefinisikan aturan CSS yang hanya berlaku pada lebar layar
tertentu. Misalnya, ketika layar berukuran kurang dari 992px, beberapa
elemen di navbar dan tombol toggle akan diubah tampilannya.

9\. Main Content Styling:

\- Mengatur tampilan konten utama pada halaman web.

\- Ada dua bagian utama, \"about\" dan \"our team,\" yang memiliki latar
belakang dan warna teks tertentu.

\- Gambar latar belakang untuk \"about\" memiliki efek transparansi.

10\. Styling for Our Team Section:

\- Mengatur tampilan bagian \"our team\" yang mencakup kartu-kartu
dengan foto dan deskripsi tim.

Kode ini adalah stylesheet CSS yang digunakan untuk mengatur tampilan
halaman web, termasuk tampilan navbar, hero section, dan konten utama.
Ini juga mengandung beberapa aturan responsif untuk beradaptasi dengan
berbagai lebar layar perangkat.
