🌱 Trash2Power

Trash2Power adalah platform web berbasis Green Technology yang memungkinkan pengguna menukarkan sampah menjadi poin yang dapat dikonversi menjadi pulsa, token listrik, dan e-wallet.

Website ini bertujuan untuk meningkatkan kesadaran masyarakat terhadap daur ulang dengan sistem digital yang mudah digunakan melalui fitur scan barcode.


👥 Tim Pengembang

Ketua Tim:
- Nama: Husein Haikal
- NIM: 41825010072
  
Anggota:
- Nama: Sabrina Imani Husniadi
- NIM: 41825010052

- Nama: Fatimah Az Zahra
- NIM: 41825010082


🚀 Fitur Utama 
🔐 Authentication System
- Registrasi user (`registrasi.php`)
- Login user (`login.php`)
- Reset password (`lupa-password.php`, `reset-sandi.php`)
- Edit profile (`edit-profile.php`)

📷 Sistem Scan Sampah
- Scan barcode menggunakan kamera (`scan.php`)
- Identifikasi jenis sampah:
  - Botol plastik
  - Kaleng
  - (berbasis data barcode)

💰 Sistem Saldo
- Setor sampah → dapat saldo (`scan.php`, sistem di backend)
- Saldo tersimpan di database dan beranda warga
- Riwayat transaksi (`riwayat.php`)

🎁 Sistem Reward
- Penukaran poin ke:
  - Pulsa (`reward_pulsa.php`)
  - E-Wallet (`reward_ewallet.php`)
  - Token listrik (`reward_listrik.php`)
- Halaman utama reward (`reward.php`)

📊 Dashboard User
- Beranda utama (`beranda.php`)
- Informasi saldo
- Navigasi ke fitur tentang kami, scan, reward, riwayat

📄 Informasi Tambahan
- Tentang kami (`tentang_kami.php`)


#🧠 Teknologi yang Digunakan

- Frontend:
  - HTML
  - CSS
  - JavaScript

- Backend:
  - PHP Native

- Database:
  - MySQL 

- Library:
  - HTML5 QR Code Scanner


⚙️ Cara Menjalankan Aplikasi (REAL SESUAI PROJECT)

1. Download / Clone Repository
git clone https://github.com/sabreennt/Trash2Power

2. Pindahkan ke Folder Server
Letakkan project ke:
- `htdocs` (XAMPP)

3. Jalankan Apache & MySQL
Aktifkan melalui:
- XAMPP Control Panel / Laragon

4. Import Database
- Buka phpMyAdmin
- Buat database (misal: `trash2power_db`)
- Import file database yang ada di github

5. Konfigurasi Koneksi Database
Edit file:
koneksi.php

📁 Struktur Project 

Trash2Power
│
├── koneksi.php → koneksi database
├── login.php → login user
├── registrasi.php → registrasi
├── lupa-password.php → reset password
├── reset-sandi.php → update password
│
├── beranda.php → dashboard utama
├── scan.php → fitur scan barcode
├── hasil_riwayat.php → riwayat transaksi
│
├── reward.php → halaman reward utama
├── reward_pulsa.php → tukar pulsa
├── reward_ewallet.php → tukar e-wallet
├── reward_listrik.php → tukar listrik
│
├── edit-profile.php → edit profil
├── tentang_kami.php → informasi website


🤖 AI Tools Used
Dalam pengembangan project ini, AI digunakan sebagai alat bantu:
- ChatGPT → membantu debugging, struktur backend PHP, dan logika sistem
- GitHub Copilot → membantu penulisan kode
- Google Gemini → membantu ide fitur, optimasi logika, dan referensi implementasi
Seluruh kode telah dimodifikasi dan disesuaikan oleh tim untuk menyesuaikan dengan fitur yang kami inginkan.

🔐 Keamanan
- Sistem login menggunakan validasi input
- Password tidak disimpan secara plain text (disarankan hashing untuk pengembangan lanjut)


🎯 Tujuan & Dampak
- Mengurangi limbah sampah melalui sistem digital
- Memberikan insentif ekonomi bagi masyarakat
- Mendorong penerapan Smart Environment berbasis teknologi


🌐 Demo Website
Link Demo: https://github.com/sabreennt/Trash2Power


📌 Catatan
Project ini dibuat untuk kompetisi Web Development dengan tema:
"Design the Future with Code"

Fokus utama:
- Sustainability
- Digitalisasi sistem daur ulang
- Implementasi nyata berbasis web


## Deploy ke Railway (PHP Native + MySQL)

Project ini **bisa** dijalankan di Railway.

### 1) Push project ke GitHub
Pastikan branch terbaru sudah berisi file `Dockerfile` dan `.dockerignore`.

### 2) Buat service app di Railway
1. Login ke Railway
2. Klik **New Project**
3. Pilih **Deploy from GitHub repo**
4. Pilih repository `Trash2Power`

Railway akan build menggunakan `Dockerfile`.

### 3) Tambahkan service MySQL
1. Di project yang sama, klik **New** → **Database** → **MySQL**
2. Setelah jadi, Railway otomatis menyediakan environment variable seperti:
  - `MYSQLHOST`
  - `MYSQLPORT`
  - `MYSQLUSER`
  - `MYSQLPASSWORD`
  - `MYSQLDATABASE`

Kode `koneksi.php` sudah membaca variable ini otomatis.

### 4) Hubungkan app ke database MySQL
Di service aplikasi, buka tab **Variables** lalu pastikan variable MySQL tersedia.

Jika belum auto-terpasang, copy manual dari service MySQL ke service app.

### 5) Import schema database
Import file `trash2power_db.sql` ke MySQL Railway.

Cara paling mudah:
- Buka service MySQL di Railway → cari **Connect / Connection String**
- Jalankan dari terminal lokal:

```bash
mysql -h <MYSQLHOST> -P <MYSQLPORT> -u <MYSQLUSER> -p <MYSQLDATABASE> < trash2power_db.sql
```

Saat diminta password, masukkan nilai `MYSQLPASSWORD`.

### 6) Deploy ulang
Setelah variable dan DB siap, lakukan redeploy dari Railway (Deployments → Redeploy) atau push commit baru.

### 7) Akses aplikasi
Gunakan domain Railway yang diberikan di service app.

