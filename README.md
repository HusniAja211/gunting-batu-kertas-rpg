Kalau proyek ini menggunakan PHP, maka pemain harus menjalankannya di server seperti **Apache** atau **Nginx**. Berikut adalah revisi README agar lebih jelas:  

---

# Batu, Kertas, Gunting - AI Level System 🎮  

Game **Batu, Kertas, Gunting** ini merupakan permainan klasik dengan tambahan sistem level dan probabilitas, di mana bot akan semakin pintar seiring bertambahnya level.  

## 📌 Fitur  
✅ **Sistem Level AI**: Bot semakin pintar seiring naik level (hingga level 5).  
✅ **Probabilitas Dinamis**: Bot lebih sering memilih counter pilihan pemain di level lebih tinggi.  
✅ **Sistem Nyawa**: Pemain memiliki 3 nyawa, habis nyawa = Game Over.  
✅ **UI Interaktif**: Menampilkan pilihan pemain & bot dalam bentuk gambar.  

## 🎯 Aturan Permainan  
1️⃣ Pemain memilih salah satu: ✂️ **Gunting**, 🪨 **Batu**, 📄 **Kertas**  
2️⃣ Bot memilih dengan probabilitas tertentu berdasarkan level.  
3️⃣ Jika pemain menang, skor bertambah. Jika bot menang, nyawa pemain berkurang.  
4️⃣ Setiap mencapai **2 poin**, level bot naik.  
5️⃣ Jika nyawa habis, **Game Over!**  

## 🤖 Probabilitas Bot Memilih Counter  
------------------------------------------------
| **Level Bot** | **Probabilitas Counter (%)** |
|--------------|-------------------------------|
| Level 1      | 33.33% tiap pilihan(random)   |
| Level 2      | 40%                           |
| Level 3      | 60%                           |
| Level 4      | 80%                           |
| Level 5      | 95%                           |
------------------------------------------------
Semakin tinggi level bot, semakin sering bot memilih counter pilihan pemain!  

## 🛠️ Cara Menjalankan  
### 1️⃣ **Pastikan memiliki server PHP**  
Game ini membutuhkan server seperti **Apache** atau **Nginx** untuk menjalankan PHP. Bisa menggunakan:  
- **XAMPP** (Windows, macOS, Linux)  
- **Laragon** (Windows)  
- **MAMP** (macOS, Windows)  
- **LAMP/LEMP Stack** (Linux)  

### 2️⃣ **Clone repository**  

git clone <repo_url>
cd <repo_folder>

### 3️⃣ **Jalankan server PHP**  
Jika menggunakan XAMPP/MAMP/Laragon, aktifkan **Apache**. Jika ingin menggunakan PHP built-in server:  
```sh
php -S localhost:8000
```

### 4️⃣ **Buka di browser**  
Akses game melalui:  
```
http://localhost/proyek-folder/
```
atau jika pakai PHP built-in server:  
```
http://localhost:8000/
```

## 👨‍💻 Teknologi yang Digunakan  
- **Frontend**: HTML, JavaScript  
- **Backend**: PHP, JavaScript
- **Library**: TailwindCSS  

## 📜 Lisensi  
Anda diperbolehkan menggunakan proyek ini tanpa meminta izin, namun wajib mencantumkan link ke repository ini.

🔥 **.Selamat bermain dan kalahkan AI!** 🔥  
