@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../natanfelles/php-server/bin/php-server
php "%BIN_TARGET%" %*
