<h2 align="center">Selamat datang di repository ISA UTS :V</h2>
<div style="overflow:hidden;">
<h3>ERD :</h3>
<img src="ksmif.org/database/ERD/erd.png">
</div>

<h3 align="left">Languages and Tools:</h3>
<p align="left"> <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a>  <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> </a> <a href="https://laravel.com/" target="_blank" rel="noreferrer"> <img src="https://cdn.brandfetch.io/ide68-31CH/w/346/h/346/theme/dark/icon.jpeg?c=1dxbfHSJFAPEGdCLU4o5B" alt="laravel" width="40" height="40"/> </a> <a href="https://www.linux.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/linux/linux-original.svg" alt="linux" width="40" height="40"/> </a> <a href="https://git-scm.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/> </a> <a href="https://mariadb.org/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/mariadb/mariadb-icon.svg" alt="mariadb" width="40" height="40"/> </a> <a href="https://www.nginx.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/nginx/nginx-original.svg" alt="nginx" width="40" height="40"/> </a> <a href="https://nodejs.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/nodejs/nodejs-original-wordmark.svg" alt="nodejs" width="40" height="40"/> </a>  <a href="https://tailwindcss.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" alt="tailwind" width="40" height="40"/> </a> <a href="https://www.docker.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/docker/docker-original-wordmark.svg" alt="docker" width="40" height="40"/> </a> </p>

<h2>Inisialisasi Project</h2>
<h3>Docker Installation</h3>

1. Buat folder kosong, nama folder terserah.
2. Masuk ke foldernya, terus click kanan.
3. Dari menu tersebut, buka terminal / git bash.
4. di terminal / git bash, ketik:
```sh
$ git clone https://github.com/irevle/isa_uts.git ./
```
5. <b>Pindahkan file `.env` ke folder project. Tanpa file ini, web tidak akan bisa jalan.</b>
6. Pastikan Docker sudah terinstall. Nyalakan Docker, kemudian buka terminal dan ketik:
- $ docker compose up -d --build
- $ docker compose php php artisan key:gen
- $ docker compose php php artisan migrate:fresh
sampai disini harunya udah selesai setup inisialisasinya *(yang pake docker)

<h3>Manual Installation</h3>

1. Buat folder kosong, nama folder terserah.
2. Masuk ke foldernya, terus click kanan.
3. Dari menu tersebut, buka terminal / git bash.
4. di terminal / git bash, ketik:
```sh
$ git clone https://github.com/irevle/isa_uts.git ./
```
5. <b>Pindahkan file `.env` ke folder project. Tanpa file ini, web tidak akan bisa jalan.</b>
6. Pastikan XAMPP MariaDB & PHP sudah terinstall. Untuk cek PHP: 
```sh
$ php --version
```
7. Jika PHP sudah ada, install Composer, lalu letakkan di path PHP.
8. Kembali ke folder project, ketik:
```sh
$ composer install && npm install
$ npm run dev && npm run build
$ php artisan key:gen
$ php artisan migrate:fresh
$ php artisan serve
```

<p>
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⡀⠤⠤⡤⠤⣀⣀⡀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡠⢔⠲⠈⠉⠀⠀⠀⠀⡸⠀⠀⠈⣿⣿⣦⡀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡠⠂⡡⠄⠀⠀⠀⠀⠀⠈⠀⠀⢇⠀⠀⠀⣿⣿⣿⣷⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⡰⢁⠄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⠀⠀⠀⣿⣿⣿⣿⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠎⢀⣡⠴⠒⠈⠉⠉⢉⣩⣿⣶⣦⣄⡀⠀⡆⠀⠀⣿⣿⣿⣿⠀
⠀⠀⠀⠀⠀⠀⠀⣼⣴⠉⠀⢀⠖⠉⠉⠙⠿⣿⣿⣿⣿⣿⣿⣷⣼⡀⠀⣿⣿⣿⣿⠀
⠀⠀⠀⠀⠀⠀⠀⢻⣿⣄⣴⠏⠀⠀⠀⠀⠀⠙⣿⣿⣿⡿⠿⠛⠁⡇⠀⣿⣿⣿⣿⠀
⠀⠀⠀⠀⠀⠀⠀⠀⡹⠛⠁⠀⠀⠀⠀⠀⠀⠀⠈⠉⠀⠀⠀⠀⠀⡇⠀⣿⣿⣿⣿⠀
⠀⠀⠀⠀⠀⠀⢀⡔⠈⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡇⠀⣿⣿⣿⣿⠀
⠀⠀⠀⠀⠀⡠⠊⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⠀⠀⣿⣿⣿⣿⠀
⠀⠀⢀⠔⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡜⠀⠀⣿⣿⣿⣿⠀
⠀⠠⡃⢠⡤⠤⣀⣀⣀⡀⠀⠀⠀⢣⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠇⠀⠀⣿⣿⣿⣿⠀
⠀⠀⠑⢼⣧⣀⣴⣿⣿⣿⣿⣷⣦⣄⠇⠀⠀⠀⠀⠀⠀⠀⠀⢰⠀⠀⠀⣿⣿⣿⣿⡇
⠀⠀⠀⣼⢠⠀⠈⠍⠉⠛⠛⠛⠛⠛⠃⠀⠀⠀⠀⠀⠀⠀⢀⡇⢠⠀⠀⣿⣿⣿⣿⢇
⠀⠀⠀⡏⠈⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣸⣶⣤⣷⣶⣿⣿⣿⠏⠀
⠀⠀⢸⠇⢀⠀⣀⣀⣀⣀⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⣿⣿⣿⣿⡟⠉⠃⠀⠀
⠀⠀⢸⠀⡇⠮⣀⣀⣤⣤⣭⣽⣿⣄⠀⠀⠀⠀⠀⠀⢠⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀
⠀⠀⡇⠰⠐⠲⠾⠿⠿⠿⠿⠟⠛⠛⠋⠀⠀⠀⠀⢠⣿⣿⣿⣿⣿⣿⣿⣿⠀⠀⠀⠀
⠀⢸⢁⠇⡔⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣇⠀⠀⠀
⠀⠏⠸⠈⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀⠀
⢸⠀⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠀⠀
⠀⠑⠢⠤⠀⠀⠀⠀⠀⠒⣄⣀⠠⠶⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠋⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⡜⢠⠃⠀⠀⠀⠀⠻⣿⣿⣿⣿⣿⣿⣿⠿⠟⠋⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠰⠁⠈⠀⠀⠀⠀⣤⣶⣿⡿⠿⠿⠛⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠉⠐⠒⠒⠂⠈⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
</p>
