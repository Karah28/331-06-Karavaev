@echo off
setlocal enabledelayedexpansion

echo Starting Karavaev Application...

REM Check if Java is installed and version
for /f "tokens=3" %%g in ('java -version 2^>^&1 ^| findstr /i "version"') do (
    set JAVA_VERSION=%%g
    set JAVA_VERSION=!JAVA_VERSION:"=!
)
echo Detected Java version: !JAVA_VERSION!

REM Check if Maven is installed
mvn -version >nul 2>&1
if errorlevel 1 (
    echo Error: Maven is not installed or not in PATH
    echo Please install Maven 3.6 or higher
    pause
    exit /b 1
)

REM Check if MySQL is running
netstat -an | find "3306" >nul
if errorlevel 1 (
    echo Warning: MySQL might not be running on port 3306
    echo Please ensure MySQL Server is running
    pause
)

REM Clean and build the project
echo Building project...
call mvn clean install -DskipTests
if errorlevel 1 (
    echo Error: Build failed
    echo Please check the error messages above
    pause
    exit /b 1
)

REM Run the application
echo Starting application...
call mvn spring-boot:run

if errorlevel 1 (
    echo Error: Application failed to start
    echo Please check the error messages above
    pause
    exit /b 1
)

pause 