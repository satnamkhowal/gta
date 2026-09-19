@echo off
setlocal EnableDelayedExpansion

REM ==========================================
REM SETTINGS - ONLY CHANGE THESE
REM ==========================================

set "BRANCH=main"
set "BATCH_SIZE=100"
set "WAIT_SECONDS=3"
set "COMMIT_PREFIX=Auto batch upload"

REM ==========================================
REM REPOSITORY = SAME FOLDER AS THIS BAT FILE
REM ==========================================

cd /d "%~dp0"

echo.
echo ==========================================
echo   GITHUB BATCH COMMIT AND PUSH
echo ==========================================
echo Repository: %CD%
echo Branch: %BRANCH%
echo Batch Size: %BATCH_SIZE%
echo.

REM Check Git repository
git rev-parse --is-inside-work-tree >nul 2>&1

if errorlevel 1 (
    echo ERROR: This folder is not a Git repository.
    echo.
    echo Put this BAT file inside the repository root folder.
    pause
    exit /b 1
)

REM Get current branch automatically
for /f "delims=" %%B in ('git branch --show-current') do set "CURRENT_BRANCH=%%B"

if not "%CURRENT_BRANCH%"=="" (
    set "BRANCH=%CURRENT_BRANCH%"
)

echo Current Branch: %BRANCH%
echo.

set /a BATCH=1

:START_BATCH

set /a COUNT=0

echo ------------------------------------------
echo Preparing Batch !BATCH!
echo ------------------------------------------

REM Get modified + untracked files
for /f "delims=" %%F in ('git ls-files --modified --others --exclude-standard') do (

    git add -- "%%F"

    set /a COUNT+=1

    if !COUNT! GEQ %BATCH_SIZE% goto COMMIT_BATCH
)

REM Also stage deleted files
git add -u

if !COUNT! EQU 0 (

    git diff --cached --quiet

    if not errorlevel 1 goto FINISHED
)

:COMMIT_BATCH

echo.
echo Creating commit...

git commit -m "%COMMIT_PREFIX% !BATCH!"

if errorlevel 1 (
    echo.
    echo Nothing available to commit.
    goto FINISHED
)

echo.
echo Pushing Batch !BATCH!...

git push origin %BRANCH%

if errorlevel 1 (
    echo.
    echo ==========================================
    echo PUSH FAILED
    echo ==========================================
    echo.
    echo Your committed files are SAFE locally.
    echo Run this BAT again after fixing connection.
    echo.
    pause
    exit /b 1
)

echo.
echo Batch !BATCH! successfully pushed.
echo.

set /a BATCH+=1

timeout /t %WAIT_SECONDS% /nobreak >nul

goto START_BATCH


:FINISHED

echo.
echo ==========================================
echo   ALL FILES COMMITTED AND PUSHED
echo ==========================================
echo.

git status

echo.
pause