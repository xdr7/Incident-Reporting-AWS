# 📋 Aplikasi Incident Reporting – RSUD Abdoel Wahab Sjahranie Samarinda

**PHP Version:** 7.3

---

## 🧠 Tentang Aplikasi

**Incident Reporting** adalah sistem pelaporan insiden sederhana yang digunakan oleh **Komite Mutu RSUD Abdoel Wahab Sjahranie Samarinda** untuk mendokumentasikan setiap kejadian di lingkungan rumah sakit.

Yang membedakan aplikasi ini dari form pelaporan biasa:  
✅ Menggunakan **Matriks Grading Risiko** – pendekatan standar untuk menilai tingkat keparahan (*severity*) dan probabilitas (*probability*) insiden, sehingga menghasilkan skor risiko yang terukur.  
✅ Data yang terkumpul bisa diolah lebih lanjut untuk pengambilan keputusan dan peningkatan mutu layanan.

Dibuat atas kebutuhan nyata Komite Mutu:  
> *"Kami perlu sistem yang ringkas, mudah digunakan, tapi tetap berbasis gradasi risiko – bukan sekadar catatan kejadian."*

---

## ✨ Fitur Utama

| Fitur | Deskripsi |
|-------|------------|
| 🔐 **User Login** | Akses aman dengan akun masing-masing pelapor |
| 📊 **Dashboard User** | Ringkasan aktivitas dan menu navigasi |
| 📝 **Input Data Insiden** | Form lengkap dengan parameter grading risiko (severity x probability) |
| 📑 **Report User Pelapor** | Riwayat semua laporan yang pernah dibuat |
| ℹ️ **Informasi** | Panduan jenis insiden + cara membaca matriks grading risiko |
| 📈 **Matriks Grading Risiko** | Penilaian otomatis terhadap setiap laporan berdasarkan matriks standar |

---

## 🗺️ Matriks Grading Risiko

Aplikasi ini tidak sekadar mencatat "kejadian biasa", melainkan menilai setiap insiden menggunakan matriks risiko yang lazim digunakan di manajemen mutu rumah sakit.

**Komponen penilaian:**
- **Severity (Keparahan)** – Ringan, Sedang, Berat, Kritis
- **Probability (Kemungkinan terulang)** – Jarang, Mungkin, Sering, Hampir pasti

**Hasil akhir:**  
Skor risiko (**Low, Medium, High, Extreme**) yang membantu Komite Mutu memprioritaskan tindak lanjut.

> Dengan matriks ini, data insiden tidak hanya dikumpulkan, tapi juga bisa **dibandingkan secara objektif** dari waktu ke waktu.

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

## 👨‍💻 Author

**Asmaul Asni Subegi, S.Kom**  
Alumni Ilmu Komputer, FMIPA – Universitas Mulawarman, Samarinda, Kalimantan Timur.

> *"Membangun sistem yang tidak hanya sekadar aplikasi, tapi benar-benar menjawab kebutuhan tim mutu di rumah sakit."*

---

## 🛠️ Tech Stack

- PHP 7.3
- MySQL / MariaDB
- HTML, CSS, JavaScript
- Native PHP (ringan, mudah dimodifikasi)

---

## 🚀 Cara Instalasi Singkat

1. Clone repository ke folder web server (misal: `htdocs/` di XAMPP)
2. Import database dari folder `database/` ke MySQL
3. Sesuaikan konfigurasi database di file `config.php`
4. Akses via browser:  
   `http://localhost/incident-reporting/`
5. Login dengan akun yang telah disediakan admin

---

## 📌 Catatan Penting

- Aplikasi ini didesain khusus untuk **RSUD Abdoel Wahab Sjahranie Samarinda**
- Penggunaan **Matriks Grading Risiko** adalah fitur inti – jangan dihilangkan jika ingin mempertahankan esensi sistem
- Untuk adopsi di RS lain, sesuaikan parameter severity & probability dengan standar mutu setempat

---

## 📄 Lisensi

**MIT License** – Hak Cipta © 2026 Asmaul Asni Subegi, S.Kom

Seluruh kode dalam aplikasi ini dilisensikan di bawah **MIT License**, sebuah lisensi open source yang fleksibel, aman, dan diakui secara internasional.

### Ringkasan singkat:

| Anda boleh... | Dengan syarat... |
|---------------|------------------|
| ✅ Menggunakan secara gratis | 📄 Sertakan pemberitahuan hak cipta |
| ✅ Memodifikasi kode | 📄 Sertakan teks lisensi MIT |
| ✅ Mendistribusikan ulang | ⚠️ Tanpa jaminan dari pencipta |
| ✅ Menggunakan untuk komersial | 🛡️ Pencipta tidak bertanggung jawab atas kerusakan |

### Teks lisensi lengkap:

```text
MIT License

Copyright (c) 2026 Asmaul Asni Subegi, S.Kom

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
