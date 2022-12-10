<?php


use App\Http\Controllers\ong\ContactController;
use App\Http\Controllers\ong\CultureController;
use App\Http\Controllers\ong\DonateController;
use App\Http\Controllers\ong\EconomieController;
use App\Http\Controllers\ong\EducationController;
use App\Http\Controllers\ong\EventController;
use App\Http\Controllers\ong\MemberController;
use App\Http\Controllers\ong\NewsletterController;
use App\Http\Controllers\ong\SanteController;
use App\Http\Controllers\ong\SocialeController;
use App\Http\Controllers\ong\SportController;
use App\Http\Controllers\ong\StoryController;
use App\Http\Controllers\ong\UserController;
use App\Http\Controllers\ong\VoirplusController;
use App\Http\Controllers\ong\welcomeController;

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 
//

Route::get('/', [welcomeController::class, 'index'])->name('/');

//route A propos de nous 
Route::get('/aproposdenous', function(){
    return view('template.aproposdenous');
});

////route du menu deroulant nos missions

//route cultures
Route::get('nosmissions/cultures', [CultureController::class, 'index'])->name('nosmissions.cultures');

// route economies
Route::get('nosmissions/economies', [EconomieController::class, 'index'])->name('nosmissions.economies');

// route educations
Route::get('nosmissions/educations', [EducationController::class, 'index'])->name('nosmissions.educations');

// route santes
Route::get('nosmissions/santes', [SanteController::class, 'index'])->name('nosmissions.santes');



// route sociales
Route::get('nosmissions/sociales', [SocialeController::class, 'index'])->name('nosmissions.sociales');

// route sports
Route::get('nosmissions/sports', [SportController::class, 'index'])->name('nosmissions.sports');

//route voir plus
Route::get('voiractivite/{id}', [EventController::class, 'show'])->name('voiractualite');
Route::get('voirculture/{id}', [CultureController::class, 'show'])->name('voirculture');
Route::get('voiractualite/{id}', [StoryController::class, 'show'])->name('voiractualite');
Route::get('voireconomie/{id}', [EconomieController::class, 'show'])->name('voireconomie');
Route::get('voireducation/{id}', [EducationController::class, 'show'])->name('voireducation');
Route::get('voirsante/{id}', [SanteController::class, 'show'])->name('voirsante');
Route::get('voirsociale/{id}', [SocialeController::class, 'show'])->name('voirsociale');
Route::get('voirsport/{id}', [SportController::class, 'show'])->name('voirsport');





//// Routes du menu deroulant comment nous aider ?

// route adhesion
Route::resource('commentnousaider/adhesion', MemberController::class)->only([
    'create', 'store'
]);

// route faire un don

Route::resource('/commentnousaider/faireundon', DonateController::class)->only([
     'store'
]);

// route story (actualité)

Route::resource('/actualites', StoryController::class)->only([
    'index', 'show'
]);

// route evenement (activité)
Route::resource('/activites', EventController::class)->only([
    'index', 'show'
]);

//route newsletter
Route::resource('/newsletter', NewsletterController::class)->only([
     'store'
]);
//route contact
Route::resource('/contact', ContactController::class)->only([
    'index','create', 'store'
]);



Route::middleware(['auth',])->group(function(){

    Route::resource('/dashboard', UserController::class)->only([
        'index'
    ]);
    
    Route::resource('/voirmesdons', DonateController::class)->only([
        'index', 'store'
    ]);

});



require __DIR__.'/auth.php';
