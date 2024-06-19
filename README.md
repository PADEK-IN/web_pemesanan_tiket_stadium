# Web Pemesanan Tiket Stadium
Website pemesanan tiket event-event di stadium Jaka Baring dengan Laravel

## Lankah Menjalankan Project
1. Download project atau clone repo ke dalam komputer
2. Pertama-tama, kita perlu membuat file .env berdasarkan dari file env.example, caranya jalankan perintah: ```copy .env.example .env```. Lalu isi file .env sesuai kebutuhan.
3. Berikutnya, kita instal package-package yang diinstal dalam composer di mana package tersebut akan disimpan dalam folder vendor. Jalankan perintah berikut di dalam command prompt atau terminal: ```composer install```
4. Setelah berhasil membuat file .env, berikutnya jalankan perintah berikut: ```php artisan key:generate```. Perintah ini akan meng-generate keyuntuk dimasukkan ke APP_KEY di file .env
5. Kemudian, jika aplikasi Laravel tersebut memiliki database, buatlah nama database baru. Lalu sesuaikan nama database, username, dan password database di file .env.
6. Berikutnya jalankan perintah berikut: ```php artisan migrate```. Perintah ini akan meng-generate table yang dimiliki database aplikasi, tapi terlebih dahulu pastikan kalau aplikasi tersebut menyediakan file-file migration di folder database/migrations.
7. Jika ingin melakukan testing atau ingin mengisi database dengan data dummym maka jalankan perintah ```php artisan db:seed```.
8. Terakhir, untuk membukanya di web browser, jalankan perintah: ```php artisan serve```. Lalu jalankan http://localhost:8000 di browser anda.
9. Selesai
10. Happy Coding ^,^


