#!/bin/bash
cd -
rm -rf vendor/*
composer install 
cd public 
php -S localhost:8000