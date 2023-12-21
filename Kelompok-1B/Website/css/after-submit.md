Berikut laporan CSS after-submit

1\. Import Font:

\`\`\`css

\@import
url(\'https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap\');

\`\`\`

\- Ini mengimpor dua font dari Google Fonts, yaitu \'Open Sans\' dan
\'Poppins\', untuk digunakan dalam halaman web.

2\. Background Image:

\`\`\`css

body::before {

content: \'\';

background-image: linear-gradient(115deg, rgba(58, 58, 158, 0.8),
rgba(136, 136, 206, 0.7)),

url(https://img.freepik.com/free-photo/aerial-view-business-team_53876-124515.jpg?w=1800&t=st=1690999663\~exp=1691000263\~hmac=90385b49edc6ed76e90252dd139012b1dc955896a6920909c9f045f80eb124c1);

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

\- Membuat latar belakang dengan gradasi linear dan gambar latar
belakang dari URL yang diberikan. Latar belakang ini memiliki efek
parallax karena ditetapkan pada lapisan z-index -1 dan ditempatkan
secara tetap (fixed) di seluruh halaman.

3\. Body Styling:

\`\`\`css

body {

margin: 0;

padding: 3rem 0;

font-family: \'Poppins\', sans-serif;

color: #ffffff;

font-size: 1rem;

}

\`\`\`

\- Mengatur margin, padding, font-family, warna teks, dan ukuran font
pada seluruh halaman web. Margin atas dan bawah adalah 3rem.

4\. Text Styling:

\`\`\`css

#title, #description {

text-align: center;

}

#description {

font-style: italic;

text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);

}

\`\`\`

\- Mengatur tampilan teks pada elemen dengan ID \"title\" dan
\"description\". Teks di-align ke tengah dan deskripsi memiliki gaya
miring (italic) serta efek bayangan teks.

5\. Container Styling:

\`\`\`css

.container {

width: 80%;

margin: 0 auto;

max-width: 720px;

}

\`\`\`

\- Membungkus konten halaman dalam wadah dengan lebar 80% dari lebar
layar. Membuat konten berada di tengah dengan menggunakan \`margin: 0
auto\`.

6\. Wrapper Styling:

\`\`\`css

#wrapper {

font-family: sans-serif, \"Poppins\", \"Helvetica Neue\";

background-color: rgba(27, 27, 50, 0.8);

padding: 2em;

font-size: 18px;

font-style: italic;

}

\`\`\`

\- Membuat elemen dengan ID \"wrapper\" memiliki latar belakang berwarna
dengan tingkat transparansi, padding, ukuran font, dan gaya miring.

Kode ini menggambarkan pengaturan tampilan halaman web dengan font,
latar belakang, dan gaya teks yang spesifik. Ini juga mencakup
penggunaan beberapa efek seperti bayangan teks dan efek parallax pada
latar belakang.
