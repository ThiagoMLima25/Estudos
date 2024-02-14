@ECHO OFF && CLS

SET /P x=Insert the name of the place: 
SET /P y=Insert de number of the records: 

SET /A start=1
SET /A z=y+1

REM start the loop
:MKDIR

REM make the directory
MKDIR %x%"_"%start%

REM increment by 1
SET /A start=start+1

REM if we're at the end, return
IF %start%==%z% (GOTO :EOF) ELSE (GOTO :MKDIR)