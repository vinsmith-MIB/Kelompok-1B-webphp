


# Penjelasan Kode JavaScript

### Fungsi `simpandata1(formnama)`

```javascript
function simpandata1(formnama) {
  document
    .getElementById("survey-form")
    .addEventListener("click", function () {
      localStorage.setItem(formnama, this.innerHTML);
    });
}
```

- **Deskripsi**: Fungsi ini bertanggung jawab untuk menyimpan data ke dalam localStorage saat elemen dengan id "survey-form" diklik.
- **Detail Penjelasan**:
  - Menggunakan `document.getElementById("survey-form")` untuk memilih elemen HTML dengan id "survey-form".
  - Kemudian, menggunakan `.addEventListener("click", function () {...})` untuk menambahkan event listener "click" pada elemen tersebut.
  - Saat elemen "survey-form" diklik, fungsi anonim (berarti fungsi tanpa nama) akan dijalankan.
  - Fungsi ini melakukan penyimpanan data ke dalam localStorage menggunakan `localStorage.setItem`.
  - Parameter `formnama` digunakan sebagai kunci (key) untuk menyimpan data di dalam localStorage.
  - `this.innerHTML` mengambil konten HTML dari elemen "survey-form" yang diklik dan menyimpannya di dalam localStorage.

### Fungsi `ambildata1(formnama)`

```javascript
function ambildata1(formnama) {
  var form1 = document.getElementById("survey-form-hasil");
  form1.innerHTML = localStorage.getItem(formnama);
}
```

- **Deskripsi**: Fungsi ini bertanggung jawab untuk mengambil data dari localStorage dan menampilkannya di elemen dengan id "survey-form-hasil".
- **Detail Penjelasan**:
  - Menggunakan `document.getElementById("survey-form-hasil")` untuk memilih elemen HTML dengan id "survey-form-hasil" dan menyimpannya dalam variabel `form1`.
  - Menggunakan `localStorage.getItem(formnama)` untuk mengambil data dari localStorage berdasarkan kunci (key) yang diberikan dalam parameter `formnama`.
  - Data yang diambil dari localStorage akan ditampilkan dalam elemen `form1` dengan mengganti konten HTML (innerHTML) elemen tersebut.



### Fungsi `loadpindah1()`

```javascript
function loadpindah1() {
  // Mengambil semua elemen dengan kelas "pindah-anchor" dan menyimpannya dalam variabel "anchor".
  var anchor = document.getElementsByClassName("pindah-anchor");

  // Melakukan iterasi pada setiap elemen "anchor" menggunakan loop "for".
  for (let i = 0; i < anchor.length; i++) {
    // Menambahkan event listener "click" pada setiap elemen "anchor".
    anchor[i].addEventListener("click", function () {
      // ...
    });
  }
}
```

- **Deskripsi**: Fungsi ini bertanggung jawab untuk menangani peristiwa klik pada elemen-elemen dengan kelas "pindah-anchor" dan menyimpan data formulir ke dalam localStorage.

#### Bagian 1: Mengambil Elemen dengan Kelas "pindah-anchor"
```javascript
var anchor = document.getElementsByClassName("pindah-anchor");
```
- Menggunakan `document.getElementsByClassName("pindah-anchor")` untuk mengambil semua elemen yang memiliki kelas "pindah-anchor" dan menyimpannya dalam variabel `anchor`. Ini akan digunakan untuk mengawasi klik pada elemen-elemen tersebut.

#### Bagian 2: Iterasi Melalui Elemen "anchor"
```javascript
for (let i = 0; i < anchor.length; i++) {
  anchor[i].addEventListener("click", function () {
    // ...
  });
}
```
- Menggunakan loop `for` untuk melakukan iterasi pada semua elemen yang telah dipilih dalam variabel `anchor`.
- Menambahkan event listener "click" pada setiap elemen `anchor` sehingga saat elemen ini diklik, fungsi akan dijalankan.

Sekarang mari kita jelaskan bagian selanjutnya dalam fungsi ini:

#### Bagian 3: Memproses Input dan TextArea
```javascript
var inputs = document.querySelectorAll("form input, form textarea");
inputs.forEach(function (input) {
  // ...
});
```
- Menggunakan `document.querySelectorAll("form input, form textarea")` untuk mengambil semua elemen input dan textarea yang berada dalam elemen formulir.
- Menggunakan `forEach` untuk melakukan iterasi pada semua elemen input dan textarea yang telah dipilih.

#### Bagian 4: Menyimpan Data Input Radio
```javascript
if (input.type === "radio") {
  if (input.checked) {
    localStorage.setItem(input.name, input.value);
  }
}
```
- Memeriksa jenis input. Jika jenisnya adalah "radio" dan input ini terpilih (checked), maka data akan disimpan di localStorage.
- Kunci (key) untuk menyimpan data adalah `input.name` (nama input), dan nilai (value) yang disimpan adalah `input.value` (nilai input yang terpilih).

#### Bagian 5: Menyimpan Data Input Checkbox
```javascript
else if (input.type === "checkbox") {
  var checkboxs = document.querySelectorAll(`input[name="${input.name}"]`);
  checkboxs.forEach(function checkbox(checkbox) {
    if (checkbox.checked) {
      localStorage.setItem(checkbox.id, checkbox.value);
    }
  });
}
```
- Memeriksa jenis input. Jika jenisnya adalah "checkbox," fungsi akan mencari semua checkbox dengan nama (name) yang sama.
- Menggunakan `document.querySelectorAll` untuk mengambil semua checkbox dengan nama yang sama.
- Menggunakan `forEach` untuk melakukan iterasi pada semua checkbox yang telah dipilih.
- Jika checkbox terpilih (checked), data akan disimpan di localStorage. Kunci (key) untuk penyimpanan adalah `checkbox.id` (ID checkbox), dan nilai (value) yang disimpan adalah `checkbox.value` (nilai checkbox yang terpilih).

#### Bagian 6: Menyimpan Data Input Jenis Lain
```javascript
else if (!input.disabled) {
  localStorage.setItem(input.name, input.value);
}
```
- Jika jenis input adalah jenis lain dan input tidak dalam keadaan disabled, data akan disimpan di localStorage.
- Kunci (key) untuk penyimpanan adalah `input.name` (nama input), dan nilai (value) yang disimpan adalah `input.value` (nilai input).

Selanjutnya, kita akan jelaskan bagian selanjutnya dalam fungsi `loadpindah1`:

#### Bagian 7: Memproses Pilihan (Select)
```javascript
var selects = document.querySelectorAll("select");
selects.forEach(function (select) {
  var options = select.querySelectorAll("option");
  options.forEach(function (option) {
    if (option.selected) {
      localStorage.setItem(select.name, option.value);
    }
  });
});
```
- Menggunakan `document.querySelectorAll("select")` untuk mengambil semua elemen select dalam elemen formulir.
- Menggunakan `forEach` untuk melakukan iterasi pada semua elemen select yang telah dipilih.
- Menggunakan `select.querySelectorAll("option")` untuk mengambil semua opsi (option) dalam elemen select.
- Menggunakan `forEach` untuk melakukan iterasi pada semua opsi yang telah dipilih.
- Jika opsi terpilih (selected), data akan disimpan di localStorage. Kunci (key) untuk penyimpanan adalah `select.name` (nama select), dan nilai (value) yang disimpan adalah `option.value` (nilai opsi yang terpilih).




### Fungsi `valueform1()`

```javascript
function valueform1() {
  // Mengambil semua elemen input dan textarea dalam elemen formulir.
  var inputs = document.querySelectorAll("form input, form textarea");
  inputs.forEach(function (input) {
    // Mengambil nilai yang telah disimpan di localStorage berdasarkan nama (name) elemen input.
    var savedValue = localStorage.getItem(input.name);
    if (savedValue !== null) {
      // Jika ada data yang tersimpan di localStorage, mengganti nilai elemen input dengan nilai yang telah disimpan.
      if (input.type === "text" || input.type === "email" || input.type === "number" || input.type === "textarea") {
        input.value = savedValue;
      } else if (input.type === "radio") {
        // Jika elemen input adalah radio, memeriksa apakah nilainya cocok dengan yang tersimpan, lalu memeriksa kotak radio yang sesuai.
        if (input.value === savedValue) {
          input.checked = true;
        }
      }
    }
  });

  // Mengambil semua elemen input tipe checkbox.
  var checkboxes = document.querySelectorAll("input[type=checkbox]");
  checkboxes.forEach(function (checkbox) {
    // Mengambil nilai yang telah disimpan di localStorage berdasarkan ID elemen checkbox.
    var savedValue = localStorage.getItem(checkbox.id);
    if (savedValue !== null) {
      // Jika ada data yang tersimpan di localStorage, menandai kotak centang checkbox yang sesuai.
      checkbox.checked = true;
    }
  });

  // Mengambil semua elemen select dalam elemen formulir.
  var selects = document.querySelectorAll("select");
  selects.forEach(function (select) {
    // Mengambil nilai yang telah disimpan di localStorage berdasarkan nama (name) elemen select.
    select.selectedIndex = localStorage.getItem(select.name);
  });
}
```

- **Deskripsi**: Fungsi ini bertanggung jawab untuk mengisi elemen formulir dengan data yang telah disimpan di localStorage.

#### Bagian 1: Mengambil Semua Elemen Input dan TextArea
```javascript
var inputs = document.querySelectorAll("form input, form textarea");
inputs.forEach(function (input) {
  // ...
});
```
- Menggunakan `document.querySelectorAll("form input, form textarea")` untuk mengambil semua elemen input dan textarea yang berada dalam elemen formulir.
- Menggunakan `forEach` untuk melakukan iterasi pada semua elemen input dan textarea yang telah dipilih.

#### Bagian 2: Memeriksa Data yang Tersimpan di localStorage
```javascript
var savedValue = localStorage.getItem(input.name);
if (savedValue !== null) {
  // ...
}
```
- Menggunakan `localStorage.getItem(input.name)` untuk mengambil data yang tersimpan di localStorage berdasarkan nama (name) elemen input.
- Memeriksa apakah ada data yang tersimpan (tidak sama dengan null).

#### Bagian 3: Mengganti Nilai Input
```javascript
if (input.type === "text" || input.type === "email" || input.type === "number" || input.type === "textarea") {
  input.value = savedValue;
} else if (input.type === "radio") {
  // ...
}
```
- Jika ada data yang tersimpan di localStorage, mengganti nilai elemen input dengan nilai yang telah disimpan.
- Ini hanya berlaku untuk elemen input dengan tipe "text," "email," "number," dan "textarea."

#### Bagian 4: Memeriksa dan Mengatur Kotak Radio
```javascript
else if (input.type === "radio") {
  if (input.value === savedValue) {
    input.checked = true;
  }
}
```
- Jika elemen input adalah radio, memeriksa apakah nilai radio ini cocok dengan nilai yang tersimpan di localStorage.
- Jika cocok, elemen radio ini akan ditandai sebagai terpilih (checked).

Sekarang, mari kita jelaskan bagian selanjutnya dalam fungsi `valueform1`:

#### Bagian 5: Mengambil Semua Elemen Input Tipe Checkbox
```javascript
var checkboxes = document.querySelectorAll("input[type=checkbox]");
checkboxes.forEach(function (checkbox) {
  // ...
});
```
- Menggunakan `document.querySelectorAll("input[type=checkbox]")` untuk mengambil semua elemen input dengan tipe "checkbox."

#### Bagian 6: Memeriksa dan Menandai Kotak Centang Checkbox
```javascript
var savedValue = localStorage.getItem(checkbox.id);
if (savedValue !== null) {
  checkbox.checked = true;
}
```
- Mengambil nilai yang tersimpan di localStorage berdasarkan ID elemen checkbox.
- Jika ada data yang tersimpan di localStorage, menandai kotak centang checkbox yang sesuai.

#### Bagian 7: Mengambil Semua Elemen Select
```javascript
var selects = document.querySelectorAll("select");
selects.forEach(function (select) {
  // ...
});
```
- Menggunakan `document.querySelectorAll("select")` untuk mengambil semua elemen select dalam elemen formulir.

#### Bagian 8: Mengambil Data yang Tersimpan di localStorage untuk Select
```javascript
select.selectedIndex = localStorage.getItem(select.name);
```
- Mengambil nilai yang tersimpan di localStorage berdasarkan nama (name) elemen select.
- Mengatur indeks pilihan (selectedIndex) elemen select sesuai dengan nilai yang telah disimpan.



### Fungsi `disabledall()`

```javascript
function disabledall() {
  // Mengambil semua elemen input, textarea, dan select.
  var inputs = document.querySelectorAll("input, textarea, select");
  inputs.forEach(function (input) {
    // Menonaktifkan semua elemen yang telah dipilih.
    input.disabled = true;
  });
}
```

- **Deskripsi**: Fungsi ini bertanggung jawab untuk menonaktifkan semua elemen input, textarea, dan select dalam halaman.

#### Bagian 1: Mengambil Semua Elemen Input, Textarea, dan Select
```javascript
var inputs = document.querySelectorAll("input, textarea, select");
inputs.forEach(function (input) {
  // ...
});
```
- Menggunakan `document.querySelectorAll("input, textarea, select")` untuk mengambil semua elemen input, textarea, dan select dalam halaman.
- Menggunakan `forEach` untuk melakukan iterasi pada semua elemen yang telah dipilih.

#### Bagian 2: Menonaktifkan Elemen-elemen yang Dipilih
```javascript
input.disabled = true;
```
- Menonaktifkan (disabled) semua elemen yang telah dipilih. Ini akan membuat elemen-elemen tersebut tidak dapat diinteraksi oleh pengguna.

### Fungsi `disabledlainnya()`

```javascript
function disabledlainnya() {
  // Mengambil elemen checkbox dengan kelas "lainnya" yang merupakan anak dari elemen dengan kelas "lainnya."
  var checkbox = document.querySelector(".lainnya input[type=checkbox]");
  // Mengambil elemen input tipe teks dengan kelas "lainnya" yang juga merupakan anak dari elemen dengan kelas "lainnya."
  var text = document.querySelector(".lainnya input[type=text]");

  if (checkbox.checked) {
    // Jika kotak centang "lainnya" terpilih, mengaktifkan (enabled) elemen input teks.
    text.disabled = false;
  } else {
    // Jika kotak centang "lainnya" tidak terpilih, menonaktifkan (disabled) elemen input teks.
    text.disabled = true;
  }
}
```

- **Deskripsi**: Fungsi ini mengatur status aktif atau tidak aktif untuk sebuah elemen input teks berdasarkan apakah kotak centang "lainnya" terpilih atau tidak.

#### Bagian 1: Mengambil Elemen Kotak Centang dan Input Teks
```javascript
var checkbox = document.querySelector(".lainnya input[type=checkbox]");
var text = document.querySelector(".lainnya input[type=text]");
```
- Menggunakan `document.querySelector` untuk mengambil elemen kotak centang (checkbox) dengan kelas "lainnya" yang juga merupakan anak dari elemen dengan kelas "lainnya."
- Menggunakan `document.querySelector` lagi untuk mengambil elemen input tipe teks dengan kelas "lainnya" yang juga merupakan anak dari elemen dengan kelas "lainnya."

#### Bagian 2: Mengatur Status Aktif/Nonaktif Input Teks
```javascript
if (checkbox.checked) {
  text.disabled = false;
} else {
  text.disabled = true;
}
```
- Memeriksa apakah kotak centang "lainnya" terpilih.
- Jika terpilih, mengaktifkan (enabled) elemen input teks dengan mengeset `text.disabled` ke `false`.
- Jika tidak terpilih, menonaktifkan (disabled) elemen input teks dengan mengeset `text.disabled` ke `true`.

### Fungsi `navbaranimate()`

```javascript
function navbaranimate() {
  const toggleBtn = document.querySelector('.toggle_btn');
  const toggleBtnIcon = document.querySelector('.toggle_btn i');
  const dropDownMenu = document.querySelector('.dropdown_menu');

  toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle('open');
    const isOpen = dropDownMenu.classList.contains('open');

    toggleBtnIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
  }
}
```

- **Deskripsi**: Fungsi ini digunakan untuk menganimasikan menu navigasi (navbar) saat tombol toggle ditekan.

#### Bagian 1: Mengambil Elemen-elemen yang Dibutuhkan
```javascript
const toggleBtn = document.querySelector('.toggle_btn');
const toggleBtnIcon = document.querySelector('.toggle_btn i');
const dropDownMenu = document.querySelector('.dropdown_menu');
```
- Menggunakan `document.querySelector` untuk mengambil elemen tombol toggle dengan kelas "toggle_btn."
- Menggunakan `document.querySelector` untuk mengambil elemen ikon (icon) dalam tombol toggle.
- Menggunakan `document.querySelector` untuk mengambil elemen menu dropdown dengan kelas "dropdown_menu."

#### Bagian 2: Mengatur Perilaku saat Tombol Toggle Diklik
```javascript
toggleBtn.onclick = function () {
  dropDownMenu.classList.toggle('open');
  const isOpen = dropDownMenu.classList.contains('open');

  toggleBtnIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
}
```
- Menambahkan event listener untuk mengawasi klik pada tombol toggle.
- Saat tombol toggle ditekan, mengubah status (toggle) dari elemen menu dropdown dengan mengeset atau menghapus kelas "open."
- Memeriksa apakah elemen menu dropdown memiliki kelas "open" setelah perubahan, dan mengganti ikon tombol toggle berdasarkan status ini.

