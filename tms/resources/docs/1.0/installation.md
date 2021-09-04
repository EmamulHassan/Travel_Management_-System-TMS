# Installation

---

## Image Intervention.
For Image Intervention we have used the following commands,
at first, <h3>composer.phar require intervention/image</h3>
then in config/app.php, in the $providers array we have added,
<h3>Intervention\Image\ImageServiceProvider::class</h3>
then in config/app.php, in the $aliases array we have added,
<h3>'Image' => Intervention\Image\Facades\Image::class</h3>


## Larecipe Documentation Tool.
For Larecipe Documentation Tool we have used the following commands,
<h3>composer require binarytorch/larecipe</h3>
<h3>php artisan larecipe:install</h3>
