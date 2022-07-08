@echo off
echo menjalankan php
RunhiddenConsole.exe C:\nginx\php\php-cgi.exe -b 127.0.0.1:9000 - C:nginx\php\php.ini
nginx.exe
echo nginx telah berhenti
pause>null