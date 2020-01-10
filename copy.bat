@echo off
:A
RD /q /s "F:/Programs/xampp/htdocs/portfolio/"
xcopy "F:\Documents\applicatieontwikkeling\portfolio" "F:/Programs/xampp/htdocs/portfolio" /e /i /y /f
timeout 5
goto A