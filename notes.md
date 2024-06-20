composer // after installation
C:\xampp\apache\conf\extra/httpd-vhosts.conf

#test apache config
cd xampp/apache/bin
httpd.exe -t

//Create project method 1
composer global require laravel/installer
laravel new ProjectName
// Create laravel project method 2
composer Create-Project --prefer-dist laravel/laravel laravel-project
composer Create-Project --prefer-dist laravel/laravel="6.4.*" ProjectName (version 6.4.x)

composer  update --ignore-platform-reqs

php --ini // apres changement php.ini

php artisan install:api --passport  
php artisan make:controller ApiController (new controller in app/Http/Controllers)
composer remove laravel/sanctum
composer require laravel/passport
composer require laravel/passport -W --ignore-platform-req=ext-sodium

php artisan make:controller ApiAuthController
php artisan make:controller ApiUserController
php artisan db:seed

php artisan make:middleware ApiUsermiddleware

php artisan make:model Profile -m (model Profile with migration file)

php artisan make:migration add_profile_id_to_publications --table=publications (--table : optionnel)
	Schema::table....
	table->int('profile_id);
	table->foreign('profile_id)->references('id')->on('profiles)->cascadeOnUpdate;
