# 📚 Library API (Laravel)

Project ini merupakan REST API untuk sistem perpustakaan menggunakan Laravel.

---

## 🚀 Cara Menjalankan Project

### 1. Clone Repository
git clone https://github.com/Farrelaudric/library-api.git

### 2. Masuk ke Folder
cd library-api

### 3. Install Dependency
composer install

### 4. Copy File Environment
cp .env.example .env

### 5. Generate Key
php artisan key:generate

### 6. Konfigurasi Database (.env)
DB_DATABASE=library_api
DB_USERNAME=root
DB_PASSWORD=

### 7. Migrasi & Seeder
php artisan migrate --seed

### 8. Jalankan Server
php artisan serve

Akses:
http://127.0.0.1:8000

---

## 📌 Endpoint API

### 📖 Books
- GET /api/books
- POST /api/books
- PUT /api/books/{id}
- DELETE /api/books/{id}

### 👤 Members
- GET /api/members
- POST /api/members
- PUT /api/members/{id}
- DELETE /api/members/{id}

---

## 🛠️ Teknologi
- Laravel
- MySQL
- REST API

---

## 👨‍💻 Author
- Nama: Farrel Audric
