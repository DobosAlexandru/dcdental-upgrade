<?php

use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\CategoriiTarifeController;
use App\Http\Controllers\Admin\TratamenteController;
use App\Http\Controllers\Front\TarifeController;
use App\Http\Controllers\Admin\ServiciiAdminController;
use App\Http\Controllers\Front\ServiciiFrontController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Setting;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/clear_routes', function () {

    \Artisan::call('route:clear');

    dd("Cache is cleared");

});

Route::get('/storage_link', function () {

    \Artisan::call('storage:link');

    dd("Storage link created successfully");

});

Route::get('/linkstorage', function () {
    /*$targetFolder = base_path() . '/storage/app/images';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/dcdental/storage';
    symlink($targetFolder, $linkFolder);*/

    $targetFolder = base_path() . '/storage/app/images';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);

   // \Artisan::call('storage:link');

    dd('Storage link created');
  });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');


Route::group(['middleware'=>'auth','prefix'=>'dashboard'], function(){
    //Dashboard
    Route::group(['prefix'=>'', 'as'=>'dashboard.'], function(){
        //Route('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });

    //Categories
    Route::group(['prefix' => 'categories', 'as' =>'categories.'], function(){
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('/', [CategoryController::class, 'store'])->name('store');
        Route::get('{category:slug}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::put('{category:slug}', [CategoryController::class, 'update'])->name('update');
        Route::delete('{category:slug}/delete', [CategoryController::class, 'destroy'])->name('delete');
    });

    //Tags
    Route::group(['prefix' => 'tags', 'as' =>'tags.'], function(){
        Route::get('/', [TagController::class, 'index'])->name('index');
        Route::get('create', [TagController::class, 'create'])->name('create');
        Route::post('/', [TagController::class, 'store'])->name('store');
        Route::get('{tag:slug}/edit', [TagController::class, 'edit'])->name('edit');
        Route::put('{tag:slug}', [TagController::class, 'update'])->name('update');
        Route::delete('{tag:slug}/delete', [TagController::class, 'destroy'])->name('delete');
    });

    //Posts
    Route::group(['prefix' => 'posts', 'as' =>'posts.'], function(){
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('create', [PostController::class, 'create'])->name('create');
        Route::post('/', [PostController::class, 'store'])->name('store');
        Route::get('{post:slug}/edit', [PostController::class, 'edit'])->name('edit');
        Route::put('{post:slug}', [PostController::class, 'update'])->name('update');
        //Route::get('{post:slug}', [PostController::class, 'show'])->name('show');
        Route::delete('{post:slug}/delete', [PostController::class, 'destroy'])->name('delete');
    });
});

Route::post('/uploads', [UploadController::class, 'upload']);
Route::post('/uploads/remove', [UploadController::class, 'remove']);

Route::get('/despre-noi', function(){

    return view('front.despre-noi',[
        'page' => [
            'title' => 'Despre noi',
            'description' => 'Asist. Univ. Dr. Drochioi Cristian coordoneaza clinica DC dental unde efectueaza consultatii si o gama variata de interventii chirurgicale in sfera oro-maxilo-faciala'
        ]
    ]);
})->name('despre-noi');

Route::get('/galerie', function(){

    return view('front.galerie',[
        'page' => [
            'title' => 'Galerie',
            'top_title' => 'Galerie',
            'description' => 'Galerie imagini Clinica de implantologie si chirurgie maxilo faciala DC dental coordonata de Dr. Drochioi Cristian in Iasi si Botosani.'
        ]
    ]);
})->name('galerie');

Route::get('/programari', function(){

    return view('front.programari',[
        'page' => [
            'title' => 'Programări Clinica Iasi si Botosani',
            'top_title' => 'Programări',
            'description' => 'Programează-te la doctorii clinicilor DC dental.'
        ]
    ]);
})->name('programari');

Route::get('/contact', function(){

    return view('front.contact',[
        'page' => [
            'title' => 'Contact Clinica Iasi si Botosani',
            'description' => 'Afla unde ne gasesti in locatiile clinicilor DC dental din Iasi si Botosani.'
        ]
    ]);
})->name('contact');

Route::get('/cariere', function(){

    return view('front.cariere',[
        'page' => [
            'title' => 'Cariere',
            'description' => 'Centrul de implantologie si chirurgie maxilo faciala DC dental coordonata de Dr. Drochioi Cristian ofera tratamente la cele mai inalte standarde in Iasi si Botosani.'
        ]
    ]);
})->name('cariere');

Route::get('/implant-dentar-rapid-o-zi', function(){

    return view('front.implant-dentar-rapid-o-zi',[
        'page' => [
            'title' => 'Implant dentar rapid, fara durere, intr-o zi',
            'top_title' => 'Implant dentar rapid',
            'description' => 'Dinti ficsi in mai putin de o zi cu Implant Dentar SKY Fast and Fixed Bredent, tehnologie de ultima generatie. Programeaza-te acum pentru implant dentar.'
        ]
    ]);
})->name('implant-dentar-rapid-o-zi');

Route::get('/locatii', function(){

    return view('front.locatii',[
        'page' => [
            'title' => 'Afla unde ne gasesti in locatiile clinicilor DC dental din Iasi si Botosani.',
            'description' => 'Afla unde ne gasesti in locatiile clinicilor DC dental din Iasi si Botosani.'
        ]
    ]);
})->name('locatii');

Route::get('/locatii/iasi', function(){

    return view('front._locations.iasi',[
        'page' => [
            'title' => 'Locatie Clinica Iasi',
            'description' => 'Clinica implantologie DC dental TG Cucu - Strada Sararie nr. 6, bloc UJCM, parter, Iasi. Programari la telefon 0754 242 241.',
            'locatie' => 'Iasi',
            'tagline' => 'Clinica DC dental Iași oferă tratamente la cele mai înalte standarde, într-un ambient placut, steril, dotat cu echipamente de ultimă generație.'
        ]
    ]);
})->name('locatii.iasi');

Route::get('/locatii/botosani', function(){

    return view('front._locations.botosani',[
        'page' => [
            'title' => 'Locatie Clinica Botosani',
            'description' => 'Clinica implantologie DC dental Str. Primaverii nr.5, bloc P11, sc. A, ap.1, Botosani. Programari la telefon 0787 695 411.',
            'locatie' => 'Botosani',
            'tagline' => 'Clinica DC dental Botoșani oferă tratamente la cele mai înalte standarde, într-un ambient placut, steril, dotat cu echipamente de ultimă generație.'
        ]
    ]);
})->name('locatii.botosani');

Route::get('/tarife', [TarifeController::class, 'index'])->name('tarife');

Route::group(['prefix' => 'categorii-tarife', 'as' =>'categorii-tarife.'], function(){
    Route::get('/', [CategoriiTarifeController::class, 'index'])->name('index');
    Route::get('create', [CategoriiTarifeController::class, 'create'])->name('create');
    Route::post('/', [CategoriiTarifeController::class, 'store'])->name('store');
    Route::get('{categorie:slug}/edit', [CategoriiTarifeController::class, 'edit'])->name('edit');
    Route::put('{categorie:slug}', [CategoriiTarifeController::class, 'update'])->name('update');
    Route::delete('{categorie:slug}/delete', [CategoriiTarifeController::class, 'destroy'])->name('delete');
});

Route::group(['prefix' => 'tratamente', 'as' =>'tratamente.'], function(){
    Route::get('/', [TratamenteController::class, 'index'])->name('index');
    Route::get('create', [TratamenteController::class, 'create'])->name('create');
    Route::post('/', [TratamenteController::class, 'store'])->name('store');
    Route::get('{tratament:slug}/edit', [TratamenteController::class, 'edit'])->name('edit');
    Route::put('{tratament:slug}', [TratamenteController::class, 'update'])->name('update');
    Route::delete('{tratament:slug}/delete', [TratamenteController::class, 'destroy'])->name('delete');
});

Route::group(['prefix' => 'servicii', 'as' =>'servicii.'], function(){
    Route::get('/', [ServiciiAdminController::class, 'index'])->name('index');
    Route::get('create', [ServiciiAdminController::class, 'create'])->name('create');
    Route::post('/', [ServiciiAdminController::class, 'store'])->name('store');
    Route::get('{serviciu:slug}/edit', [ServiciiAdminController::class, 'edit'])->name('edit');
    Route::put('{serviciu:slug}', [ServiciiAdminController::class, 'update'])->name('update');
    Route::delete('{serviciu:slug}/delete', [ServiciiAdminController::class, 'destroy'])->name('delete');
});

/* Route::get('servicii/{serviciu:slug}', [ServiciiFrontController::class, 'show'])->name('servicii.show'); */

Route::get('/raspuns-programare', function(){

    return view('front.raspuns-programare',[
        'page' => [
            'title' => 'Programari Clinica Iasi si Botosani',
            'description' => 'Programeaza-te la doctorii clinicilor DC dental.',
        ]
    ]);
})->name('raspuns-programare');

Route::get('/termeni-si-conditii', function(){

    return view('front.termeni-si-conditii',[
        'page' => [
            'title' => 'Termeni si Conditii',
            'top_title' => 'Termeni si Conditii',
            'description' => 'Termeni si conditii - DC dental',
        ]
    ]);
})->name('termeni-si-conditii');



Route::get('/servicii/chirurgie-maxilo-faciala', function(){

    return view('front._service.chirurgie-maxilo-faciala',[
        'page' => [
            'nav_title' => 'Chirugie Maxilo Faciala',
            'title'=> 'Chirugie Maxilo Facială',
            'description' => 'Asistati de tehnologie de ultima generatie cchipa coordonata de Dr. Drochioi Cristian - chirurg specialist maxilo faciala este pregatita pentru toate tipurile de operatie din zona maxilo-faciala.',
            'tagline' => 'Chirurgia orală și maxilo-facială este o specialitate chirurgicală ce are in vedere cercetarea etiologiei, patogeniei, clinicii, diagnosticului, tratamentului și profilaxiei afecțiunilor teritoriului oro - maxilo - facial ce solicită metode de tratament chirurgical și totodată se preocupă de elaborarea acestor metode',
            'cover_image' => 'chirurgie-oro-maxilo-gaciala-dc-dental.jpg',
            'video_id' => 'aK_jMXDtDP8',

        ]
    ]);
})->name('chirurgie-maxilo-faciala');

Route::get('/servicii/endodontie', function(){
    $posts = Post::all();
    return view('front._service.endodontie',[
        'posts' => $posts,

        'page' => [
            'nav_title' => 'Endodonție',
            'title'=> 'Endodontie la microscop',
            'description' => 'Tratamente endodontice de canal si scoatere nerv la microscop cu rata de succes superioara.',
            'tagline' => '',
            'cover_image' => 'endodontie-dcdental-0113.jpg',

        ],
    ]);
})->name('endodontie');

Route::get('/servicii/estetica-dentara', function(){

    return view('front._service.estetica-dentara',[
        'page' => [
            'nav_title' => 'Estetică dentară',
            'title'=> 'Estetica dentara',
            'description' => 'Refacerea zambetului pacientului prin intermediul unor proceduri specializate Fatete dentare,  Coroane integral ceramice intr-o zi sau Albire dentara profesionala',
            'tagline' => 'Estetica dentară presupune curațarea, albirea și fațetarea dinților. Pentru a putea fi indeplinite aceste cerințe, în primul rand dinții trebuie să fie impecabili din punct de vedere al rezistenței și nu numai, să fie sănătoși la interior și mai ales, să fie naturali.',
            'cover_image' => 'dc-dental-cosmetica-dentara.jpeg',

        ]
    ]);
})->name('estetica-dentara');

Route::get('/servicii/implantologie', function(){

    return view('front._service.implantologie',[
        'page' => [
            'nav_title' => 'Implantologie',
            'title'=> 'Implantologie',
            'description' => 'DC dental Implantologie',
            'tagline' => 'Implantologia este o specialitate chirurgicală care are rolul de a înlocui, în condiții de siguranță, dinții absenti . Implantologia îi permite pacientului să opteze pentru lucrari fixe, cu optimă valoare funcțională și estetică, prin intervenții cu grad scăzut de invazivitate.',
            'cover_image' => 'dc-dental-implantologie.jpg',
            'video_id' => 'ZYbArQzCRA8'
        ]
    ]);
})->name('implantologie');

Route::get('/servicii/ortodontie', function(){
    $posts = Post::all();
    return view('front._service.ortodontie',[
        'posts' => $posts,
        'page' => [
            'nav_title' => 'Ortodonție',
            'title'=> 'Ortodonție',
            'description' => 'Oferim tratamente ortodontice cu tratamente personalizate pentru fiecare pacient cu aparate Dentare moderne complet estetice.',
            'tagline' => 'Ortodonția este ramura  medicinei dentare care are ca scop îndreptarea și alinierea dinților pentru obtinerea unei ocluzii(muscaturi) dentare corecte,sanatoase din punct de vedere parodontal si desigur, estetice.',
            'cover_image' => 'dc-dental-ortodontie.jpg',

        ]
    ]);
})->name('ortodontie');

Route::get('/servicii/parodontologie', function(){

    return view('front._service.parodontologie',[
        'page' => [
            'nav_title' => 'Parodontologie',
            'title'=> 'Parodontologie Laser | Tratamente Parodontoza',
            'description' => 'Utilizand tehnologie laser de ultima generatie oferim tratament pentru afectiuni gingivale, parodontoze.',
            'tagline' => '',
            'cover_image' => 'dc-dental-parodontologie.jpg',

        ]
    ]);
})->name('parodontologie');

Route::get('/servicii/pedodontie', function(){

    return view('front._service.pedodontie',[
        'page' => [
            'nav_title' => 'Pedodonție',
            'title'=> 'Stomatologie Copii | Pedodontie',
            'description' => 'Tratamente stomatologice pediatrice practicate cu rabdare intr-un mediu sigur.',
            'tagline' => 'Pedodonția sau stomatologia pediatrică este ramura stomatologiei ce are în vedere tratamentul specific al dinților copiilor.',
            'cover_image' => 'dc-dental-pedodontie.jpeg',

        ]
    ]);
})->name('pedodontie');

Route::get('/servicii/profilaxie-dentara', function(){

    return view('front._service.profilaxie-dentara',[
        'page' => [
            'nav_title' => 'Profilaxie Dentară',
            'title'=> 'Profilaxie Dentară',
            'description' => 'Detartrajul ultrasonic, periajul profesional, air-flow si controlul periodic de doua ori pe an.',
            'tagline' => 'Constă în detartrajul ultrasonic, periajul profesional, air-flow și controlul periodic de două ori pe an, cu rolul de a descoperi în fază incipientă orice nouă afecțiune și de a pastra sanatatea dentară pe termen lung.',
            'cover_image' => 'dc-dental-profilaxie-dentara.jpeg',

        ]
    ]);
})->name('profilaxie-dentara');

Route::get('/servicii/protetica', function(){
    $posts = Post::all();

    return view('front._service.protetica',[
        'posts' => $posts,
        'page' => [
            'nav_title' => 'Protetică',
            'title'=> 'Protetica dentara | Fatete dentare',
            'description' => 'Reconstructia dintilor prin fatete, coroane, punti dentare dar si proteze totale sau partiale, proteze cu sisteme speciale sau proteze pe implanturi.',
            'tagline' => 'Protetica este una dintre cele mai complexe ramuri ale medicinei dentare ce se ocupă cu reconstrucția dinților prin fațete, coroane, punți dentare dar și proteze totale sau parțiale, proteze cu sisteme speciale sau proteze pe implanturi.',
            'cover_image' => 'dc-dental-protetica.jpg',
        ]
    ]);
})->name('protetica');

Route::get('/servicii/terapia-odontala', function(){

    return view('front._service.terapia-odontala',[
        'page' => [
            'nav_title' => 'Terapia odontală',
            'title'=> 'Terapia odontală',
            'description' => 'Curatarea si obturarea dintelui cariat se efecteaza sub anestezie locala si nu exista durere.',
            'tagline' => '',
            'cover_image' => 'terapie odontala-dcdental-0089.jpg',
        ]
    ]);
})->name('terapia-odontala');

Route::get('/servicii/implant-subperiostal', function(){

    return view('front._service.implant-subperiostal',[
        'page' => [
            'nav_title' => 'Implant Subperiostal',
            'title'=> 'Implant Subperiostal',
            'description' => 'meta description',
            'tagline' => '',
            'cover_image' => 'terapie odontala-dcdental-0089.jpg',
            'video_id' => 'ZYbArQzCRA8'
        ]
    ]);
})->name('implant-subperiostal');
