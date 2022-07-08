# create-server-nginx-php
server nginx-php
1. Install nginx here
  * Download nginx stable version [Click Here](http://nginx.org/en/download.html).


2. Install PHP stable version 7.4
  * Download Php here [Click Here](https://windows.php.net/download/).
3. Create Bat to start and stop nginx server
  * To start bat
  `@echo off
echo menjalankan php
RunhiddenConsole.exe C:\nginx\php\php-cgi.exe -b 127.0.0.1:9000 - C:nginx\php\php.ini
nginx.exe
echo nginx telah berhenti
pause>null`
  * To Stop bat
  `@echo off
echo stopping nginx...
taskkill /F /IM nginx.exe >nul
echo stopping php
taskkill /F /IM php-cgi.exe>nul
pause`
    



