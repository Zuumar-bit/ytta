@echo off
echo Starting SUKI Interior Design Server...
echo Access at: http://127.0.0.1:8111
C:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe artisan serve --port=8111
pause
