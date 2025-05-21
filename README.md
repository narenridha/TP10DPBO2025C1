# TP10DPBO2025C1

# DPBO_MVVM - Manajemen Data Rumah Sakit (MVVM PHP)

## Penjelasan Model-View-ViewModel (MVVM) pada Proyek Ini

Proyek ini adalah aplikasi manajemen data rumah sakit berbasis PHP yang menerapkan pola arsitektur **Model-View-ViewModel (MVVM)**. MVVM membantu memisahkan logika bisnis, pengelolaan data, dan tampilan sehingga aplikasi lebih terstruktur, mudah dikembangkan, dan dipelihara.

---

### 1. Model
Model bertanggung jawab untuk interaksi langsung dengan database. Setiap entitas (misal: Dokter, Poli, Jadwal) memiliki file model sendiri di folder `model/`.

- Contoh:
  - `model/Dokter.php` : CRUD untuk tabel dokter
  - `model/Poli.php`   : CRUD untuk tabel poli
  - `model/Jadwal.php` : CRUD untuk tabel jadwal

### 2. View
View adalah bagian yang menampilkan data ke pengguna dan menerima input. Semua file view ada di folder `views/`.

- Contoh:
  - `views/dokter_list.php` : Menampilkan daftar dokter
  - `views/dokter_form.php` : Form tambah/edit dokter
  - `views/template/`       : Template header/footer

### 3. ViewModel
ViewModel menjadi penghubung antara Model dan View. ViewModel mengambil data dari Model, mengolahnya jika perlu, lalu meneruskannya ke View. Semua file ViewModel ada di folder `viewmodel/`.

- Contoh:
  - `viewmodel/DokterViewModel.php` : Mengelola data dokter, poli, dan jadwal untuk kebutuhan view
  - `viewmodel/PoliViewModel.php`   : Mengelola data poli
  - `viewmodel/JadwalViewModel.php` : Mengelola data jadwal

---

### Alur Kerja MVVM pada Proyek Ini

1. User melakukan aksi di View (misal: tambah dokter).
2. View mengirim permintaan ke ViewModel (misal: `addDokter()`).
3. ViewModel memanggil fungsi di Model untuk mengakses database.
4. Model melakukan query ke database dan mengembalikan hasil ke ViewModel.
5. ViewModel meneruskan data ke View untuk ditampilkan.

---

### Struktur Folder Utama

```
config/         # Koneksi database
database/       # File SQL struktur dan seed data
model/          # Model (interaksi database)
viewmodel/      # ViewModel (penghubung Model dan View)
views/          # View (tampilan)
```

---

### Teknologi
- PHP (tanpa framework)
- MySQL
- TailwindCSS (untuk tampilan)

---

### Cara Menjalankan
1. Import `database/library.sql` ke MySQL.
2. Pastikan konfigurasi database di `config/Database.php` sudah sesuai.
3. Jalankan di XAMPP/Laragon/localhost.
4. Akses `index.php` melalui browser.

---

**Catatan:**
Struktur dan penamaan sudah disesuaikan dengan tema rumah sakit.
