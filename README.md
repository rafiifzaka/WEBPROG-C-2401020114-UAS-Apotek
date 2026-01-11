# 💊 Sistem Informasi Apotek (Laravel)

## 📌 Deskripsi Proyek
Proyek ini merupakan **Sistem Informasi Apotek berbasis Web** yang dibuat menggunakan **Framework Laravel**.  
Aplikasi ini digunakan untuk mengelola data obat/apotek, mulai dari **menampilkan data**, **menambah**, **mengedit**, hingga **menghapus data obat**.

Proyek ini awalnya dibuat untuk **UTS** dengan penyimpanan data menggunakan file JSON, kemudian **dikembangkan pada UAS** dengan menggunakan **database eksternal MySQL** sesuai dengan instruksi dosen.

---

## 🎯 Tujuan Pembuatan
- Memahami konsep **CRUD (Create, Read, Update, Delete)**  
- Mengimplementasikan **Laravel MVC (Model, View, Controller)**  
- Menggunakan **Migration & Database MySQL**  
- Menghubungkan aplikasi Laravel dengan **database eksternal**  
- Melatih pengelolaan project menggunakan **Git & GitHub**

---

## 🛠️ Teknologi yang Digunakan
- PHP 8.x  
- Laravel 12  
- MySQL (phpMyAdmin)  
- Bootstrap 5  
- XAMPP  
- Git & GitHub  

---

## 🗂️ Fitur Aplikasi
- Menampilkan daftar obat  
- Menambahkan data obat  
- Mengedit data obat  
- Menghapus data obat  
- Penyimpanan data menggunakan **Database MySQL**  
- Tampilan antarmuka menggunakan **Bootstrap**

---

## 🧱 Struktur Database
Tabel: **produks**

| Field       | Tipe Data |
|------------|----------|
| id         | bigint (PK) |
| nama_obat  | varchar |
| harga      | integer |
| stok       | integer |
| created_at| timestamp |
| updated_at| timestamp |

Struktur tabel dibuat menggunakan **Migration Laravel**.

---

## 🚀 Cara Menjalankan Proyek

### 1️⃣ Clone Repository
```bash
git clone https://github.com/USERNAME/REPO-APOTEK.git
2️⃣ Masuk ke Folder Project
cd nama-project

3️⃣ Install Dependency
composer install

4️⃣ Copy File Environment
cp .env.example .env

5️⃣ Konfigurasi Database di .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=uas_apotek
DB_USERNAME=root
DB_PASSWORD=

6️⃣ Generate Key
php artisan key:generate

7️⃣ Migrasi Database
php artisan migrate

8️⃣ Jalankan Server
php artisan serve


Akses aplikasi di:

http://127.0.0.1:8000/produk

