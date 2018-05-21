# buku-ci-shopping-cart

![img](https://lh3.googleusercontent.com/-Gh9iDtR-71Y/Vw0U0EJGgoI/AAAAAAAAJAU/BOWFtQn2BVwDqoJ5Cqvwi_nlEUTzHjBeACEw/w92-h140-p/mybook.jpg)

Buku ini adalah buku pertama saya yang saya tulis pada 2014, kemudian di terbitkan oleh [andi publisher](http://andipublisher.com/) pada 5 desember 2015. Ini adalah repositori asset data CD dari buku "[Membangun Aplikasi Online Shop Dengan Codelgniter Untuk Pemula](http://www.gramedia.com/membangun-aplikasi-online-shop-dgn-codelgniter-untuk-pemula-cd.html)".

# Support
- [Xampp 1.8.0 (PHP 5.4.4 && MYSQL 3.5.2)](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/1.8.0/)
- [Codeigniter 2.1.4](https://github.com/bcit-ci/CodeIgniter/releases/tag/2.1.4)
- [Grocery CRUD 1.4.1](https://www.grocerycrud.com/downloads)
- [Bootstrap 3.0](http://bootstrapdocs.com/v3.0.0/docs/)

# Instalasi
Ada beberapa orang mengirim email dan menanyakan kembali tentang bagaimana cara menginstalasi atau menjalankan source code ini. Untuk bagian ini sebenarnya sudah saya paparkan semuanya di dalam buku. Tapi tak apa, pada repositori ini saya akan sedikit membahasnya, berikut langkah-langkahnya:

- #1
Untuk xampp kamu bisa mengunduhnya [disini](https://www.apachefriends.org/index.html), versi xampp wajib sama dan jangan mengunduh xampp portable. Untuk instalasi xampp bebas, diletakan di drive ``C:`` atau ``D:`` tidak masalah.

- #2
Terdapat 2 source yaitu ``rendang`` dan ``shop_online`` (extrak source tersebut jika data berupa ``.ZIP`` atau ``.RAR``). Kemudian salin source tersebut ke ``DRIVE:\xampp\htdocs``.

- #3
Pada setiap source terdapat file rendang.sql, silahkan import file ini ke mysql. Caranya bisa melalui phpmyadmin atau sql manager seperti ``navicat`` atau ``mysql workbench``. Untuk langkah-langkah mengimportnya kamu bisa browsing sendiri di internet :) .

- #4
Jika sql sudah selesai di import, selanjutnya atur konfigurasi database pada ``xampp\htdocs\rendang\aplications\config\database.php`` atau ``xampp\htdocs\shop_online\aplications\config\database.php``

- #5
Coba akses menggunakan browser ``http://localhost/rendang`` atau ``http://loacalhost/shop_online``

Sebelum saya mengakhiri tulisan ini, saya sebagai penulis ingin mengucapkan terima kasih kepada kamu yang sudah membeli buku saya, semoga buku ini bermanfaat dan bisa menambah ilmu bagi pembacanya, amiiiin.

## danke schön :)
