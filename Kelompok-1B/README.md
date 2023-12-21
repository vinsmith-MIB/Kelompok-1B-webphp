---
title: |
  *Software Requirements Specification*

  for

  \<Web Survei Pembelajaran Daring\>
---

**Version 1.0 approved**

**Prepared by**

> **\<22091397040 -- Ahmad Zea C Shiraath D\>**
>
> **\<22091397051 -- Kevin Cahyo Pratama\>**
>
> **\<22091397069 -- M.Ilham Al Faridsi\>**

**\<24 September 2023\>**

**Table of Contents**

**1.** **Pendahuluan 1**

> 1.1 Tujuan Penulisan Dokumen 1
>
> 1.2 Audien yang Dituju dan Pembaca yang Disarankan 1
>
> 1.3 Batasan Produk 1
>
> 1.4 Definisi dan Istilah 1
>
> 1.5 Refrensi 1

**2.** **Deskripsi Keseluruhan 2**

> 2.1 Deskripsi Produk 2
>
> 2.2 Fungsi Produk 2
>
> 2.3 Penggolongan Karakterik Pengguna 2
>
> 2.4 Lingkungan Operasi 2
>
> 2.5 Batasan Desain dan Implementasi 2
>
> 2.6 Dokumentasi Pengguna 3

**3.** **Kebutuhan Antarmuka Eksternal 4**

> 3.1 User Interfaces 4
>
> 3.2 Hardware Interface 4
>
> 3.3 Software Interface 4
>
> 3.4 Communication Interface 4

**4.** **Functional Requirement 5**

> 4.1 Use Case Diagram 5
>
> 4.2 Nama Use Case 1 5
>
> 4.3 Nama Use Case 2 5
>
> 4.4 Class Diagram 6

**5.** **Non Functional Requirements 7**

**Revision History**

  ----------------------------------------------------------------------------
  **Name**        **Date**   **Reason For Changes**              **Version**
  --------------- ---------- ----------------------------------- -------------
                                                                 

                                                                 

                                                                 
  ----------------------------------------------------------------------------

1.  # Pendahuluan

    1.  ## Tujuan Penulisan Dokumen

```{=html}
<!-- -->
```
1.  Mengevaluasi kualitas pembelajaran dengan mengukur sejauh mana
    > pembelajaran dengan metode daring ini telah mencapai tujuannya dan
    > apakah metode tersebut sudah memenuhi standar kualitas pendidikan.

2.  Mengevaluasi kinerja tenaga pendidik dalam pembelajaran daring.

3.  Memahami apakah kurikulum dalam materi pembelajaran secara daring
    > efektif dan sesuai dengan perkembangan peserta didik.

4.  Mendapatkan tanggapan umpan balik dari peserta didik tentang
    > pengalaman dalam pembelajaran daring.

5.  Merumuskan rencana perbaikan berdasarkan temuan survei.

    1.  ## Audien yang Dituju dan Pembaca yang Disarankan

Audien yang dituju dalam survei ini meliputi peserta didik, pengajar,
wali murid, pengembang kurikulum dan peneliti/ahli Pendidikan, dan
pembaca yang disarankan dalam web survei ini mancakup pimpinan
institusi, pengajar, tim pengembang kurikulum dan ahli Pendidikan.

## Batasan Produk

Dalam survei ini menggunakan perangkat lunak berbasis web (Web
Application Software) dengan tujuan agar pengguna lebih mudah untuk
mengakses web survey ini, karena dengan menggunakan web pengguna dapat
mengakses dari berbagai perangkat dan lokasi asalkan terhubung dengan
internet, selain itu perangkat lunak berbasis web juga memiliki
fleksibilitas yang besar.

## Definisi dan Istilah

-   Survey : *Self-administered survey*

> Metode pengumpulan data primer dengan memberikan beberapa pertanyaan
> kepandan responden individu

-   Website : Halaman informasi yang disediakan melalui jalur internet
    > sehingga bisa diakses diseluruh dunia selama terkoneksi dengan
    > jaringan internet

-   Daring : *Dalam Jaringan*

> Segala sesuatu yang dilakukan secara online

-   SRS : *Software Requirements Specification*, atau

> Spesifikasi Kebutuhan Perangkat Lunak (SKPL)

-   IEEE : *Institute of Electrical and Electronics Engineering*

Standar internasional untuk pengembangan dan perancangan produk.

## Referensi

*\<Tulis daftar dokumen lain atau alamat web yang menjadi acuan SRS
ini.\>*

2.  # Deskripsi Keseluruhan

    1.  ## Deskripsi Produk 

Website Survei Pembelajaran Daring adalah sebuah perangkat lunak yang
digunakan untuk mengumpulkan umpan balik dari responden terkait dengan
pengalaman pembelajaran daring. Produk ini cukup efisien terhadap
responden karena hanya membutuhkan browser dan internet yang stabil
untuk mengakses produk ini. Tujuan utama produk ini adalah untuk
meningkatkan kualitas pembelajaran daring dengan mengumpulkan beberapa
masukan yang diberikan oleh responden.

## Fungsi Produk 

Berikut adalah fungsi dari produk ini, antara lain:

1.  Mengumpulkan data umpan balik.

2.  Mengidentifikasi masalah dalam pembelajaran daring.

3.  Evaluasi efektivitas pembelajaran.

4.  Mengukur perkembangan dan perbaikan.

    1.  ## Penggolongan Karakterik Pengguna

**Tabel 1 Karakteristik Pengguna**

  -----------------------------------------------------------------------------
  **Kategori      **Tugas**          **Hak Akses ke         **Kemampuan yang
  Pengguna**                         aplikasi**             harus dimiliki**
  --------------- ------------------ ---------------------- -------------------
  Administrator   Mengelola dan      Insert, Delete, Update Coding website dan
                  mengkonfigurasi    Data                   mengelola data
                  website                                   

  Responden       Mengisi survei     Insert Data            Membaca dan menulis

                                                            

                                                            
  -----------------------------------------------------------------------------

## Lingkungan Operasi 

Berikut rincian dari lingkungan operasi, antara lain:

1.  Sistem operasi: Dapat digunakan diberbagai sistem operasi seperti
    > windows, IOS, android, dan lain-lain.

2.  Browser web: Dapat digunakan diberbagai browser seperti chrome,
    > microsoft edge, mozilla firefox, dan lain-lain

3.  Koneksi internet: Dapat diakses dengan kecepatan minimum 512Kbps.

4.  Bahasa yang didukung adalah bahasa Indonesia

    1.  ## Batasan Desain dan Implementasi 

Berikut beberapa batasan di website survei pembelajaran daring:

1.  Desain Antarmuka: Antarmuka pengguna diusahakan untuk lebih
    > sederhana dan mudah dipahami.

    1.  ## Dokumentasi Pengguna

*\<Daftar komponen dokumentasi pengguna (seperti user manual, on-line
help, dan tutorial) yang akan disampaikan bersama dengan perangkat lunak
yang akan dikirim\>*

3.  # Kebutuhan Antarmuka Eksternal

    1.  ## User Interfaces 

Antarmuka pengguna yang digunakan pada perangkat lunak Survey
Pembelajaran Via Daring ini berbasis teks dan web yang diinputkan
melalui keyboard dan mouse. Antarmuka antar pengguna terdiri dari
beberapa bagian berikut yang semuanya ditampilkan dalam bahasa
Indonesia.

a.  halaman survey pembelajaran via daring\
    > ![](vertopal_cfd6ecd5ee5a4ffa8595d8b89e9f3dbe/media/image4.png){width="6.697916666666667in"
    > height="4.040262467191601in"}*\
    > *![](vertopal_cfd6ecd5ee5a4ffa8595d8b89e9f3dbe/media/image5.png){width="6.697916666666667in"
    > height="3.874722222222222in"}

![](vertopal_cfd6ecd5ee5a4ffa8595d8b89e9f3dbe/media/image3.png){width="6.697916666666667in"
height="3.8645833333333335in"}

## Hardware Interface

*\<Describe the logical and physical characteristics of each interface
between the software product and the hardware components of the system.
This may include the supported device types, the nature of the data and
control interactions between the software and the hardware, and
communication protocols to be used.\>*

## Software Interface

*\<Describe the connections between this product and other specific
software components (name and version), including databases, operating
systems, tools, libraries, and integrated commercial components.
Identify the data items or messages coming into the system and going out
and describe the purpose of each. Describe the services needed and the
nature of communications. Refer to documents that describe detailed
application programming interface protocols. Identify data that will be
shared across software components. If the data sharing mechanism must be
implemented in a specific way (for example, use of a global data area in
a multitasking operating system), specify this as an implementation
constraint.\>*

## Communication Interface

\<Describe the requirements associated with any communications functions
required by this product, including e-mail, web browser, network server
communications protocols, electronic forms, and so on. Define any
pertinent message formatting. Identify any communication standards that
will be used, such as FTP or HTTP. Specify any communication security or
encryption issues, data transfer rates, and synchronization
mechanisms.\>

# Functional Requirement

*\<Area ini menggambarkan pengorganisasian persyaratan fungsional untuk
produk dengan fitur sistem, layanan utama yang disediakan oleh produk\>*

*\<Tulis Kebutuhan Fungsional / Functional Requirement disini\>*

*Diawali dengan membuat daftar kebutuhan fungsional P/L, lengkap dengan
ID dan penjelasan jika perlu. Bisa dibuat dalam bentuk tabel.*

  -----------------------------------------------------------------------
  **ID**    **Kebutuhan Fungsional**           **Penjelasan**
  --------- ---------------------------------- --------------------------
                                               

                                               

                                               

                                               

                                               

                                               

                                               

                                               

                                               

                                               

                                               

                                               
  -----------------------------------------------------------------------

## Diagram Use Case

![](vertopal_cfd6ecd5ee5a4ffa8595d8b89e9f3dbe/media/image2.jpg){width="6.7in"
height="4.819444444444445in"}

## Flowchart ![](vertopal_cfd6ecd5ee5a4ffa8595d8b89e9f3dbe/media/image1.png){width="5.020833333333333in" height="9.0in"}

# Non Functional Requirements

\<*Uraikan dengan ringkas kebutuhan non fungsional dalam tabel sebagai
berikut. Isilah Kolom Kebutuhan dengan kalimat yang jelas dan kelak
dapat ditest untuk dipenuhi. ID adalah nomor kebutuhan yang harus
ditelusuri pada saat test. Tuliskan N/A bila Not Applicable\>*

  -------------------------------------------------------------------------
  **ID**        **Parameter**   **Kebutuhan**
  ------------- --------------- -------------------------------------------
                Availability    

                Reliability     

                Ergonomy        

                Portability     

                Memory          

                Response time   

                Safety          N/A

                Security        

                                

                Others 1:       Misalnya : semua tanya jawab harus dalam
                Bahasa          bahasa Indonesia
                komunikasi      

                                Setiap layar harus mengandung logo PT Pos
                                Indonesia

                                
  -------------------------------------------------------------------------

*Catatan :*

*Availability : ketersediaan aplikasi, misalnya harus terus menerus
beroperasi 7 hari perminggu, 24 jam per haritanpa gagal*

*Reliability : keandalan, misalnya tidak pernah boleh gagal(atau
kegagalan yang ditolerir adalah ...%) sehingga harus dipikirkan fault
tolerant architecture. Biasanya hanya perlu untuk Critical Application
yang jika gagal akan berakibat fatal.*

*Ergonomy : kenyamanan pakai bagi pengguna*

*Portability : kemudahan untuk dibawa dan dioperasikan ke mesin/sistem
operasi/platform yang lain*

*Memory : jika perhitungan kapasitas memori internal kritis (misalnya
untuk SW yang harus dijadikan CHIPS dan ukurannya harus kecil*

*Response time : Batasan waktu yang harus dipenuhi. Sangat penting untuk
aplikasi Real Time. Contoh: "Aaplikasi harus mampu menampilkan hasil
dalam 4 detik", atau "ATM harus menarik kembali kartu yang tidak diambil
dalam waktu 3 menit"*

*Safety: yang menyangkut keselamatan manusia, misalnya untuk SW yang
dipakai pada sistem kontrol di pabrik*

*Security : aspek keamanan yang harus dipenuhi*
