NADÉ CROCHET — STRUKTUR WEBSITE TERPISAH

STRUKTUR:
- index.php            : halaman utama (HTML dengan template PHP)
- config.php           : konfigurasi nama toko dan nomor WhatsApp
- assets/css/style.css : seluruh CSS dan responsive design
- assets/js/script.js  : filter produk, Add to Bag, dan menu mobile

CARA MENJALANKAN DENGAN XAMPP:
1. Ekstrak folder ini ke htdocs/nade-crochet.
2. Jalankan Apache dari XAMPP.
3. Buka http://localhost/nade-crochet/ di browser.
4. Jangan membuka index.php langsung dari File Explorer; PHP perlu server.

PENGATURAN:
Buka config.php lalu ganti $whatsappNumber dengan nomor toko, format 62xxxxxxxxxx.

CATATAN:
- HTML utama berada di index.php karena halaman menggunakan konfigurasi PHP.
- Website belum memakai database atau checkout sungguhan.
- Foto dan harga produk masih contoh.
- Foto Unsplash dan Google Fonts membutuhkan koneksi internet.
