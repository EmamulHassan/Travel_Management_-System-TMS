# Admin Authentication

---

## Laravel Breeze.

We have used Laravel Breeze for our Admin Authentication Feature.<br>


## Node.js.

Installed Node.js/ NMP(node package manager) as it is required for Laravel Breeze<br>

<h3>Installing Laravel Breeze Using Composer</h3>
composer require laravel/breeze --dev
<h3>Installing breeze using git bash command:</h3>
php artisan breeze:install
<h3>Installing npm using git bash command:</h3>
$npm install
<h3>Creating Authentication folders using git bash command:</h3>
$npm run dev
<h3>Using following function in admin route for admin authentication</h3>
middleware(['auth'])->name('admin.dashboard')
