@echo off

FOR /D %%p IN ("web\bundles\*.*") DO rmdir "%%p" /s /q

php app/console assets:install
php app/console assetic:dump

echo Done!