<?php


use Illuminate\Support\Facades\Route;
    // Admin 
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\RegisterController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\SejarahController;
    use App\Http\Controllers\RenunganController;
    use App\Http\Controllers\LiveController;
    use App\Http\Controllers\GambarController;
    use App\Http\Controllers\KeuanganController;
    use App\Http\Controllers\VideoController;
    use App\Http\Controllers\DatajController;
    use App\Http\Controllers\KarauselController;
    use App\Http\Controllers\ProgramkerjaController;
    use App\Http\Controllers\PelayananController;
    use App\Http\Controllers\StrukturOrController;
    use App\Http\Controllers\JadwalController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\BeritahtController;
    use App\Http\Controllers\JadwalIbadahController;
    use App\Http\Controllers\KsepekanController;
    use App\Http\Controllers\AnakController;
    use App\Http\Controllers\DewasaController;

    // Template Data Jemaat
    Route::get('babi',function(){
        return view('/contoh');
    });
    // Users
    Route::get('berasil',function(){
        return view('layouts/home');
    });

    Route::get('Datajemaat',function(){
        return view('DataJemaat/index');
    });

    Route::resource('anak', AnakController::class);
    Route::get('anak/search', [AnakController::class, 'search'])->name('anak/search');
    Route::get('anak/datalengkap', [AnakController::class, 'datalengkap']);

    Route::resource('dewasa', DewasaController::class);
    Route::get('dewasa/search', [DewasaController::class, 'search'])->name('dewasa/search');
    Route::get('dewasa/datalengkap', [DewasaController::class, 'datalengkap']);
    Route::get('homeadmin', [DewasaController::class, 'indez']);


    // Logon Admin
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
    // REGISTER
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
    Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
    Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
    // Programkerja
    Route::get('programkerja/export-pdf', [ProgramkerjaController::class, 'pdf']);
    Route::resource('programkerja', ProgramkerjaController::class);
    Route::get('programkerja/create',[ProgramkerjaController::class,'create']);
    Route::post('programkerja/create',[ProgramkerjaController::class,'store']);
    Route::get('programkerja/{id}',[ProgramkerjaController::class,'edit']);
    Route::post('programkerja/{id}',[ProgramkerjaController::class,'update']);
    Route::get('/programkerja/{id}',[ProgramkerjaController::class,'show']);
    // sejarah
    Route::resource('sejarah', SejarahController::class); 
    // Renungan Harian
    Route::resource('renungan', RenunganController::class); 
    // Livestriming Admin
    Route::resource('live', LiveController::class);
    // Foto Admin
    Route::resource('foto', GambarController::class);
    // Karausel
    Route::resource('karausel', KarauselController::class);
    //Admin Keuangan
    Route::resource('keuangan', KeuanganController::class);
    // Video
    Route::resource('video', VideoController::class);
    // Structur Organisasi
    Route::resource('strukturor', StrukturOrController::class);
    // Struktur Data
    Route::resource('pelayan', PelayananController::class);
    Route::get('/search', 'PelayananController@search')->name('pelayan.search');
    // Data Jemaat
    Route::get('exportlaporan',[DatajController::class,'export']);
    Route::resource('dataj',DatajController::class);
    Route::get('/search', [DatajController::class, 'search'])->name('dataj.search');
    Route::get('index', [DatajController::class, 'index']);
    Route::get('dataj/export-pdf', [DatajController::class, 'pdf']);
    

    // Jadwal
    Route::resource('jadwal',JadwalController::class);
    // Profile Gembala
    Route::resource('profile',ProfileController::class);
    // Berita Gereja
    Route::resource('beritah',BeritahtController::class);
    // Kigiatan sepekan
    route::resource('ksepekan',KsepekanController::class);
    // Jadwal Ibadah
    route::resource('jadwalibadah',JadwalIbadahController::class);



    // Route::get('homeadmin', [DewasaController::class,'jumlahjemaat']);
    // Route::get('homeadmin', [DatajController::class,'jumlahjemaat']);


    // //Untuk menampilkan data ke Users
    // Route::get('homeadmin', [DatajController::class,'jumlahjemaat']);
    // Route untuk gambar
    Route::get('usergambar', [GambarController::class,'tampilgambar']);
    Route::get('gambarlengkap/{id}',[GambarController::class,'getGambar']);
    // Route untuk gambar
    Route::get('usersejarah',[SejarahController::class,'tampilsejarah']);
    // Route untuk Sejara
    Route::get('datajemaat',[DatajController::class,'tampildatajemaat']);
    // Route untuk Data jemaat
    Route::get('renuganlengkap/{id}',[RenunganController::class,'getRenungan']);
    Route::get('userrenungan',[RenunganController::class,'tampilrenungan']);
    // Route untuk Struktur Organisasi
    Route::get('userstrukturor',[StrukturOrController::class,'tampilstrukturor']);
    // Route untuk Program Kerja
    Route::get('userprogramkerja',[ProgramkerjaController::class,'tampilprogramkerja']);
    // Route untuk Keuangan
    Route::get('userkeuangan',[KeuanganController::class,'tampilkeuangan']);
    // Route untuk Jadwal
    Route::get('userjadwal',[JadwalController::class,'tampiljadwal']);
    // Route untuk Video
    Route::get('uservideo', [VideoController::class,'tampilvideo']);
    // Profile  
    Route::get('tampilprofil',[ProfileController::class,'tampilprofil']);
    // Route untuk beritah
    Route::get('beritahlengkap/{id}',[BeritahtController::class,'getBeritah']);
    Route::get('userberitah',[BeritahtController::class,'tampilbeeritah']);
    //
    Route::resource('userdashboard', DashboardController::class);
    // User Karausel
    Route::get('userkarausel',[KarauselController::class,'tampilkarausel']);
    // User Live
    Route::get('userlive',[LiveController::class,'tampillive']);

    Route::get('/dataj/pdf', [DatajController::class, 'pdf']);
    Route::get('/gender', [DatajController::class, 'index'])->name('gender');

    

    
    ?>  