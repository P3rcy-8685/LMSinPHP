FILE=config/config.php
$PORT
if [ ! -f "$FILE" ]; then
rm -rf vendor/*
composer install
composer dump-autoload
$DB_NAME
$DB_USERNAME
$DB_PASSWORD
cd config
echo "<?php" > config.php
echo "" >> config.php
echo "Enter Your Database name"
echo "Enter the name of the database: "
read DB_NAME
echo "\$DB_NAME=\"${DB_NAME}\";" >> config.php
echo "Enter the username of the mysql server: "
read DB_USERNAME
echo "\$DB_USERNAME=\"${DB_USERNAME}\";" >> config.php
echo "Enter the password for the mysql server: "
read DB_PASSWORD
echo "\$DB_PASSWORD=\"${DB_PASSWORD}\";" >> config.php
echo "?>" >> config.php
cd ..
mysql -u $DB_USERNAME -p $DB_NAME < schema/schema.sql
fi
cd public
echo "Enter the Port for the localhost server: "
read PORT
php -S localhost:${PORT}