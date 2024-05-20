    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AppController;



    Route::get('/', [AppController::class, 'index'])->name("home");

    // Now i want to group all the routes that are related to the page controller
    // Route::get('/page/gallery', [AppController::class, "gallery"])->name("gallery");
    // Route::get('/page/about', [AppController::class, 'about'])->name("about");

    // group the routes with the prefix of page
    Route::prefix('/page')->group(function () {
        Route::get('/gallery', [AppController::class, "gallery"])->name("gallery");
        Route::get('/about', [AppController::class, 'about'])->name("about");
    });


    // fallback route 
    Route::fallback(function () {
        return "<h1>404 Not Found </h1>";
    });
