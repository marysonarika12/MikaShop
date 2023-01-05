<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;

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

// Route group admin


Route::get('', [HomePageController::class, 'index'])->name('page.home');

Route::group(['prefix' => '/admin'], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.admin');

    //Route::group parent kategori
        Route::group(['prefix' => '/kategori'], function (){
            Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
            Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');
            Route::get('/edit', [KategoriController::class, 'edit'])->name('kategori.edit');

        });
    //Route::group produk
        Route::group(['prefix' => '/produk'], function (){
            Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
            Route::get('/create', [ProdukController::class, 'create'])->name('create.produk');
            Route::get('/edit', [ProdukController::class, 'edit'])->name('edit.produk');
            Route::get('/show', [ProdukController::class, 'show'])->name('show.produk');

        });
    //Route::group customer
        Route::group(['prefix' => '/customer'], function (){
            Route::get('/', [CustomerController::class, 'index'])->name('index.customer');
            // Route::get('/create', [CustomerController::class, 'create'])->name('create.customer');
            Route::get('/edit', [CustomerController::class, 'edit'])->name('customer.edit');
            // Route::get('/show', [CustomerController::class, 'show'])->name('show.customer');

        });
    //Route::group transaksi
        Route::group(['prefix' => '/transaksi'], function (){
            Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
            Route::get('/create', [TransaksiController::class, 'create'])->name('create.transaksi');
            Route::get('/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
            Route::get('/show', [TransaksiController::class, 'show'])->name('transaksi.show');

        });
    //Route::group user
        Route::group(['prefix' => '/user'], function (){
            Route::get('/', [UserController::class, 'index'])->name('user.index');
            Route::get('/setting', [UserController::class, 'setting'])->name('user.setting');
            Route::get('/show', [UserController::class, 'show'])->name('user.show');

        });

    // Route::group laporan
    Route::group(['prefix' => '/laporan'], function (){
    Route::get('/', [LaporanController::class, 'index'])->name('admin.laporan');
    Route::get('/proses', [LaporanController::class, 'proses'])->name('laporan.proses');
    });

});

Route::get('/dosen', function(){
        return view ('dosen/index');
    });
Route::group(['prefix' => '/dosen', 'as'=> 'dosen.'], function(){
    Route::get('/profil', function(){
        return view('dosen.v_profil');
    })->name('profil');
    Route::get('/data_pengampu', function(){
        return view('dosen.v_ampi');
    })->name('ampu');
    // Route::resource('profil', DosenController::class);
});






// Route::group(['prefix' => '/dosen'], function (){
//     Route::get('/', [DashboardController::class, 'index'])->name('dashboard.dosen');
//     Route::get('/profil', [DosenController::class, 'profil'])->name('dosen.profil');
//     Route::get('/pengampu', [DosenController::class, 'pengampu'])->name('dosen.pengampu');
// });

//  Route UTS vs Referens Bu Eka
// Route::get('/mahasiswa', function(){
//     return view ('mahasiswa/index');
// });

// Route::group(['prefix' => '/mahasiswa', 'as'=> 'mahasiswa.'], function(){
//     Route::get('/pendaftaran', function(){
//         return 'Halaman Pendaftaran';
//     })->name('pendaftaran');
//     Route::get('/ujian', function(){
//         return 'Halaman Ujian';
//     })->name('ujian');

//     Route::get('/nilai', function(){
//         return 'Halaman Nilai';
//     })->name('nilai');

// });




// Route::prefix('mahasiswa')->group(function () {

//     Route::get('pendaftaran', function () {
//         $title = 'Pendaftaran';
//         $text = 'Halaman Pendaftaran Mahasiswa';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

//     Route::get('ujian', function () {
//         $title = 'ujian';
//         $text = 'Halaman Ujian Mahasiswa';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

//     Route::get('nilai', function () {
//         $title = 'Nilai';
//         $text = 'Halaman Nilai Mahasiswa';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

// });


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
});


Route::get('/latihan', [LatihanController::class, 'home']);
Route::get('/beranda', [LatihanController::class, 'beranda']);
Route::get('/', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);







