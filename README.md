## Link Video Presentasi
[**Video Presentasi Sistem Voting Ketua Kelas**](https://www.youtube.com/)

# Sistem Voting Ketua Kelas Online - CodeIgniter 3

Proyek ini adalah aplikasi **Sistem Voting Ketua Kelas Online** berbasis web yang menggunakan **framework CodeIgniter 3**. Aplikasi ini memungkinkan mahasiswa untuk memilih ketua kelas secara online, dengan fitur seperti **CRUD kandidat**, **login mahasiswa**, **validasi voting satu kali**, dan **statistik hasil voting**.

## Alur Program
1. **Login Mahasiswa**: Mahasiswa melakukan login dengan menggunakan **NIM** dan **password**.
2. **CRUD Kandidat**: Pengelola dapat mengelola (tambah, edit, hapus) data kandidat ketua kelas.
3. **Proses Voting**: Mahasiswa memilih kandidat yang diinginkan. Setiap mahasiswa hanya dapat memilih satu kali.
4. **Statistik**: Setelah voting, sistem menampilkan statistik hasil pemilihan dalam bentuk grafik menggunakan **Chart.js** 📊.

## Struktur File
Berikut adalah struktur file penting dalam aplikasi ini:

### 1. **Controllers**
- **Auth.php**: Mengelola login/logout mahasiswa.
- **Kandidat.php**: Menangani CRUD untuk data kandidat.
- **Vote.php**: Proses pemilihan dan validasi voting.
- **Dashboard.php**: Menampilkan statistik hasil voting.

### 2. **Models**
- **Kandidat_model.php**: Mengelola data kandidat, seperti mengambil, menambah, mengubah, dan menghapus kandidat.
- **Mahasiswa_model.php**: Mengelola data mahasiswa, termasuk login dan validasi apakah mahasiswa sudah memilih.
- **Vote_model.php**: Mengelola data voting, seperti mencatat pemilihan, mendapatkan statistik suara, dan menghitung total suara untuk setiap kandidat.

### 3. **Views**
- Halaman untuk login, memilih kandidat, serta menampilkan statistik hasil pemilihan dalam bentuk grafik.

## Konsep Utama
1. **Model-View-Controller (MVC)**: Aplikasi ini menggunakan arsitektur **MVC** untuk memisahkan logika bisnis, tampilan, dan kontrol alur aplikasi.
2. **CRUD**: Implementasi **CRUD** untuk data kandidat, termasuk operasi **Create**, **Read**, **Update**, dan **Delete**.
3. **Relasi antar tabel**: 
   - **Tabel Mahasiswa**: Menyimpan data mahasiswa.
   - **Tabel Kandidat**: Menyimpan data kandidat ketua kelas.
   - **Tabel Vote**: Menyimpan data pemilihan yang dilakukan oleh mahasiswa.
4. **Statistik dan Visualisasi**: Hasil voting ditampilkan dalam bentuk statistik dan grafik menggunakan **Chart.js** 🎨.

## Link Video Presentasi
[**Video Presentasi Sistem Voting Ketua Kelas**](https://www.youtube.com/)

