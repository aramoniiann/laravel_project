clear
./vendor/bin/pest
clear
exit
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
docker exec -it poo_web_quasar bash
exit
npm install
exit
exit
docker ps
exit
php artisan test
php artisan make:model Product -fsm
php artisan migrate
php artisan db:seed ProductSeeder
ls -l
php artisan test
php artisan make:model Customers -msf
ls -l
php artisan test
php artisan migrate
php artisan db:seed CustomersSeeder
php artisan db:seed CustomersSeeder
php artisan db:seed CustomersSeeder
exit
