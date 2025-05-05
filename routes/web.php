<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\AboutPage;
use App\Livewire\FoodList;
use App\Livewire\FoodDetail;
use App\Livewire\NewsList;
use App\Livewire\NewsDetail;
use App\Livewire\AlbumList;
use App\Livewire\AlbumDetail;
use App\Livewire\VideoList;

Route::get('/', HomePage::class)->name('home');
Route::get('/gioi-thieu', AboutPage::class)->name('about');
Route::get('/mon-an', FoodList::class)->name('food.list');
Route::get('/mon-an/{slug}', FoodDetail::class)->name('food.detail');
Route::get('/tin-tuc', NewsList::class)->name('news.list');
Route::get('/tin-tuc/{slug}', NewsDetail::class)->name('news.detail');
Route::get('/album-anh', AlbumList::class)->name('album.list');
Route::get('/album-anh/{slug}', AlbumDetail::class)->name('album.detail');
Route::get('/video', VideoList::class)->name('video.list');
