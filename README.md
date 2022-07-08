# create-server-nginx-php
server nginx-php
1. Install nginx here
  * Download nginx stable version [Click Here](http://nginx.org/en/download.html).


2. Install PHP stable version 7.4
  * Download PHP here [Click Here](https://windows.php.net/download/).
3. Create Bat to start and stop nginx server, copy&paste script below on this line =
  * To Start bat =
  ``
  @echo off
echo menjalankan php
RunhiddenConsole.exe C:\nginx\php\php-cgi.exe -b 127.0.0.1:9000 - C:nginx\php\php.ini
nginx.exe
echo nginx telah berhenti
pause>null``


  * To Stop bat =
  ``@echo off
echo stopping nginx...
taskkill /F /IM nginx.exe >nul
echo stopping php
taskkill /F /IM php-cgi.exe>nul
pause``
    
---------

4. search file in nginx and config your file =
 * ``location ~ \.php$ {
           root           html;
           fastcgi_pass   127.0.0.1:9000;
           fastcgi_index  index.php;
           fastcgi_param  SCRIPT_FILENAME  C:/nginx/html/$fastcgi_script_name;
           include        fastcgi_params;
        }``


5. Hidden Config -> search ini php.ini
 * `doc_root = "C:/nginx/html"`
 * `extension_dir = "C:/nginx/php/ext"`
