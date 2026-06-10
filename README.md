# 📋 I.R.E.N System – Incident REporting System
## RSUD Abdoel Wahab Sjahranie Samarinda

**Current Version:** 4.5 (Production)  
**PHP Version:** 7.3  
**First Released:** 2022  
**Status:** ✅ Digunakan aktif oleh Komite Mutu RSUD Abdoel Wahab Sjahranie Samarinda

---

## 🧠 Tentang Aplikasi

**I.R.E.N System (Incident REporting System)** adalah sistem pelaporan insiden yang **telah digunakan sejak tahun 2022** oleh **Komite Mutu RSUD Abdoel Wahab Sjahranie Samarinda** untuk mendokumentasikan setiap kejadian di lingkungan rumah sakit.

**Keunikan aplikasi ini:**
- ✅ Memisahkan **Laporan Klinis** dan **Laporan Non-Klinis**
- ✅ Menggunakan **Matriks Grading Risiko (Dampak × Probabilitas)** untuk laporan klinis
- ✅ Sistem **level hak akses** (Superadmin, Admin Unit, User Klinis, User Non-Klinis)
- ✅ Dilengkapi **AI Agent Dashboard** dan **Chat Global/Kasus/Personal**

Aplikasi ini merupakan **riset mandiri** oleh penulis yang hingga saat ini (2026) telah mencapai **versi 4.5** dan terus digunakan dalam operasional harian Komite Mutu.

> ⚠️ **Peringatan Merek:** Nama **"I.R.E.N System"** dan **"Incident REporting System"** adalah nama aplikasi milik penulis. Dilarang menggunakan nama yang sama atau mirip tanpa izin tertulis dari penulis. Detail lengkap lihat file [TRADEMARK.md](TRADEMARK.md).

> 📌 **Catatan:** Versi yang ada di repository GitHub ini mungkin masih versi lama. Untuk versi terbaru (v4.5) yang sedang berjalan di production, silakan hubungi penulis.

---

## 👥 Level Hak Akses (User Roles)

| Level | Nama | Hak Akses |
|-------|------|-----------|
| 1 | **Superadmin** | Akses penuh: dashboard admin, manajemen user (tambah/edit/hapus), kelola artikel (tambah/edit/hapus/toggle status), lihat semua laporan klinis & non-klinis, hapus laporan, export data, AI Agent dashboard, chat global (kirim & lihat), statistik, sidebar permission, ganti password |
| 2 | **Admin Unit** | Lihat semua laporan klinis & non-klinis, kelola artikel (tambah/edit, tidak bisa hapus), dashboard admin, AI Agent dashboard, chat global (lihat saja), kelola user unit sendiri (tambah user klinis), profile sendiri, ganti password sendiri |
| 3 | **User Klinis** | Lapor insiden klinis, lihat laporan unit sendiri, dashboard unit, AI Agent unit, baca artikel, chat personal, chat kasus, profile sendiri, ganti password sendiri |
| 4 | **User Non-Klinis** (IPSRS/Teknis) | Lapor insiden non-klinis (kebocoran, listrik, kebakaran, dll), lihat & kelola laporan non-klinis, beri feedback/update pengerjaan, dashboard non-klinis, chat personal, chat kasus non-klinis, profile sendiri, ganti password sendiri |

---

## 📋 Jenis Laporan

### 1. Laporan Klinis

**Jenis Insiden (Kode):**

| Kode | Keterangan |
|------|-------------|
| **KNC** | Kejadian Tidak Diharapkan |
| **KTD** | Kejadian Tidak Diinginkan |
| **KTC** | Kejadian Tidak Cedera |
| **KPC** | Kejadian Potensi Cedera |
| **SENTINEL** | Sentinel Event (fatal) |

**Grading Risiko Klinis (Hasil Matriks):**

| Grade | Warna | Deskripsi |
|-------|-------|------------|
| 1 | 🔵 BIRU | Risiko Rendah |
| 2 | 🟢 HIJAU | Risiko Sedang |
| 3 | 🟡 KUNING | Risiko Tinggi |
| 4 | 🔴 MERAH | Risiko Kritis |

> Grade dihasilkan dari **Matriks Risiko (Dampak × Probabilitas)**. User memilih Dampak & Probabilitas → Sistem hitung otomatis → Grade.

---

### 2. Laporan Non-Klinis

**Jenis Insiden Non-Klinis:**

| Ikon | Jenis Insiden |
|------|---------------|
| 💧 | Kebocoran Air / Kran Bocor |
| 🔥 | Kebakaran |
| ⚡ | Listrik Padam |
| 🔧 | Kerusakan Alat Medis |
| 🏢 | Kerusakan Fasilitas |
| 👮 | Keamanan / Kriminalitas |
| 🧹 | Kebersihan |
| 📝 | Lainnya |

**Grading Non-Klinis:**

| Grade | Warna | Deskripsi |
|-------|-------|------------|
| 1 | 🟢 Ringan | Perbaikan biasa, tidak mengganggu operasional |
| 2 | 🟡 Sedang | Mengganggu sebagian operasional |
| 3 | 🔴 Berat | Menghentikan operasional, butuh tindakan segera |

> ⚠️ **Catatan:** Non-klinis grading dipilih **manual** oleh user (Ringan/Sedang/Berat), tidak menggunakan matriks otomatis seperti laporan klinis.

---

## 🗺️ Matriks Grading Risiko (Klinis)

Grading risiko klinis dihitung otomatis berdasarkan kombinasi **Dampak (Severity)** dan **Probabilitas (Likelihood)** yang dipilih user.

### Tabel Matriks (Dampak × Probabilitas)

| Dampak \ Probabilitas | 1 - Jarang | 2 - Ringan | 3 - Sedang | 4 - Tinggi | 5 - Sering |
|-----------------------|------------|------------|------------|------------|------------|
| **5 - Katastropik** | 5 | 10 | 15 | 20 | 25 |
| **4 - Sangat Berat** | 4 | 8 | 12 | 16 | 20 |
| **3 - Berat** | 3 | 6 | 9 | 12 | 15 |
| **2 - Sedang** | 2 | 4 | 6 | 8 | 10 |
| **1 - Ringan** | 1 | 2 | 3 | 4 | 5 |

### Keterangan Warna & Grade

| Warna | Skor | Grade | Tingkat Risiko |
|-------|------|-------|----------------|
| 🔵 BIRU | 1 - 2 | Grade 1 | Rendah |
| 🟢 HIJAU | 3 - 6 | Grade 2 | Sedang |
| 🟡 KUNING | 8 - 12 | Grade 3 | Tinggi |
| 🔴 MERAH | 15 - 25 | Grade 4 | Kritis |

### Contoh Perhitungan

- **Dampak Ringan (1) × Probabilitas Jarang (1)** = Skor 1 → 🔵 Grade 1 (Rendah)
- **Dampak Berat (3) × Probabilitas Sedang (3)** = Skor 9 → 🟡 Grade 3 (Tinggi)
- **Dampak Katastropik (5) × Probabilitas Sering (5)** = Skor 25 → 🔴 Grade 4 (Kritis)

> 📌 **Rumus:** Nilai Risiko = Dampak × Probabilitas

---

## 🧩 Fitur Lengkap v4.5

### Dashboard & Pelaporan
- Input laporan klinis (KNC, KTD, KTC, KPC, SENTINEL)
- Input laporan non-klinis (8 kategori)
- Matriks risiko otomatis untuk laporan klinis
- Dashboard per unit (klinis & non-klinis terpisah)

### Manajemen
- Manajemen user dengan 4 level hak akses
- Kelola artikel (dengan toggle status publikasi)
- Export data laporan
- Statistik insiden

### Komunikasi
- AI Agent Dashboard
- Chat Global
- Chat Kasus (per insiden)
- Chat Personal (antar user)

---

## 🖼️ Tampilan Aplikasi

### Dashboard User  
![Dashboard User](https://github.com/user-attachments/assets/32ecbabf-2aef-409b-bc57-176fe966d628)

### Form Input Laporan (dengan opsi grading risiko)  
![Input Laporan](https://github.com/user-attachments/assets/85848d42-1ab2-4d6a-b4c3-1f906ad2c329)

### Halaman Report + Tampilan Grading Risiko  
![Report](https://github.com/user-attachments/assets/e4d0fb66-d088-448e-b087-56473c90d7ba)

### Informasi Jenis-jenis Insiden & Matriks Grading  
![Info Jenis Insiden](https://github.com/user-attachments/assets/587a5394-e9f2-403c-b5a2-ea38054d2129)

---

## 📜 Riwayat Versi

| Versi | Tahun | Keterangan |
|-------|-------|-------------|
| v1.0 | 2022 | Rilis awal untuk Komite Mutu |
| v2.0 | 2023 | Penambahan fitur report & dashboard |
| v3.0 | 2024 | Peningkatan matriks grading risiko |
| v4.0 | 2025 | Pemisahan laporan klinis & non-klinis |
| v4.5 | 2026 | AI Agent, chat system, 4 level user roles |

> 🔄 **Yang di GitHub:** Masih versi lama (belum di-update ke v4.5)  
> 📧 **Untuk akses versi terbaru v4.5:** Hubungi penulis

---

## 👨‍💻 Author

**Asmaul Asni Subegi, S.Kom**  
Alumni Ilmu Komputer, FMIPA – Universitas Mulawarman, Samarinda, Kalimantan Timur.  
📧 **Email:** sabayonx@gmail.com

Aplikasi **I.R.E.N System** merupakan **hasil riset mandiri** yang telah berkembang dari tahun 2022 hingga 2026, dan saat ini digunakan secara aktif dalam operasional harian Komite Mutu RSUD Abdoel Wahab Sjahranie Samarinda.

---

## 🛠️ Tech Stack

- PHP 7.3
- MySQL / MariaDB
- HTML, CSS, JavaScript
- Native PHP (ringan, mudah dimodifikasi)

---

## 🚀 Cara Instalasi (Untuk Versi di Repo Ini)

1. Clone repository ke folder web server (misal: `htdocs/` di XAMPP)
2. Import database dari folder `database/` ke MySQL
3. Sesuaikan konfigurasi database di file `config.php`
4. Akses via browser: `http://localhost/incident-reporting/`
5. Login dengan akun yang telah disediakan admin

> ⚠️ **Catatan:** Versi di repo ini adalah versi lama. Untuk production v4.5, silakan hubungi penulis.

---

## 📌 Catatan Penting

- Aplikasi ini didesain khusus untuk **RSUD Abdoel Wahab Sjahranie Samarinda**
- Memisahkan **laporan klinis** (dengan matriks otomatis) dan **non-klinis** (grading manual)
- Aplikasi ini **bukan aplikasi resmi rumah sakit**, melainkan riset mandiri yang diadopsi dan digunakan oleh Komite Mutu sejak 2022
- Versi production saat ini (v4.5) memiliki banyak peningkatan dari versi yang ada di GitHub ini

---

## 📞 Kontak

📧 **Email:** sabayonx@gmail.com

Untuk pertanyaan, kolaborasi, atau akses ke versi terbaru v4.5, silakan hubungi melalui email di atas.

---

## 📄 Lisensi

Aplikasi ini dilisensikan di bawah **MIT License** – silakan lihat file [LICENSE](LICENSE) untuk detail lengkap.

Mengenai penggunaan nama aplikasi **I.R.E.N System** dan nama rumah sakit, silakan lihat file [TRADEMARK.md](TRADEMARK.md).
