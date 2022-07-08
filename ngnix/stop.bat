@echo off
echo stopping nginx...
taskkill /F /IM nginx.exe >nul
echo stopping php
taskkill /F /IM php-cgi.exe>nul
pause