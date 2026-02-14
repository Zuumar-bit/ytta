@echo off
echo Konfigurasi strategi Pull...
"C:\laragon\bin\git\bin\git.exe" config pull.rebase false

echo.
echo Mengambil perubahan dari GitHub (Pulling)...
"C:\laragon\bin\git\bin\git.exe" pull origin main --allow-unrelated-histories

echo.
echo Mengirim perubahan ke GitHub (Pushing)...
"C:\laragon\bin\git\bin\git.exe" push -u origin main

echo.
echo Selesai!
pause
