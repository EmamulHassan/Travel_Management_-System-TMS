# Installation

---

## Image Intervention.
For Image Intervention we have used the following commands,<br>
at first, composer.phar require intervention/image<br>
then in config/app.php, in the $providers array we have added,<br>
Intervention\Image\ImageServiceProvider::class<br>
then in config/app.php, in the $aliases array we have added,<br>
'Image' => Intervention\Image\Facades\Image::class<br>


## Larecipe Documentation Tool.
For Larecipe Documentation Tool we have used the following commands,<br>
composer require binarytorch/larecipe<br>
php artisan larecipe:install<br>
