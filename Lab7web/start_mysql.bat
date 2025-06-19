@echo off
echo Starting MySQL XAMPP...
echo.

REM Coba start MySQL service
net start mysql

REM Jika gagal, coba jalankan MySQL dari XAMPP
if errorlevel 1 (
    echo Trying to start MySQL from XAMPP directory...
    if exist "C:\xampp\mysql\bin\mysqld.exe" (
        echo Starting MySQL from C:\xampp\mysql\bin\
        cd /d "C:\xampp\mysql\bin"
        start mysqld.exe --console
    ) else (
        echo MySQL not found in C:\xampp\mysql\bin\
        echo Please start MySQL manually from XAMPP Control Panel
    )
)

echo.
echo MySQL startup attempted.
echo You can now try to access: http://localhost/phpmyadmin
echo.
pause
