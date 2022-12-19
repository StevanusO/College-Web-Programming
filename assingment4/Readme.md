# Assingment 4 - GSLC - 2440039625 - Authentication
***
## Instalasi
***
1. download file
2. open terminal
3. composer require laravel/ui:* --dev
4. npm install
5. npm run dev
6. setting .env
7. buat akun di mailtrap.io
8. di mailtrap.io Sandbox>Set Up Inbox>Integraions>Laravel7+
9. setting .env yang diberikan mailtrap.io sesuai yang diberikan mailtrap.io
10. php artisan migrate
11. composer require laravel/socialite
12. buat controller googleAuth dan githubAuth
13. buat fungsi redirect dan callback menggunakan socialite di kedua controller
14. routing di web.php
15. pada login.blade.php tambahkan tombol untuk login dengan google dan github
16. php artisan migrate
17. php artisan serve
