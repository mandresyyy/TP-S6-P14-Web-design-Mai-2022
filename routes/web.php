<?php

use App\Http\Controllers\Admin_contr;
use App\Http\Controllers\User_contr;
use App\Http\Controllers\Login_contr;
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

Route::get('/IABlog/login', function () {
    return view('login');
})->name("form_log");
Route::Post('/IABlog/Checking_information',[Login_contr::class,"to_log"])->name("login");

Route::get('/IABlog/admin_home',[Admin_contr::class,"acceuil"])->name("Acceuil_a");

Route::get('/',[User_contr::class,"acceuil"])->name("Acceuil_u");

Route::get('/Article_en_attente',[Admin_contr::class,"Attente"])->name("En_attente");

Route::get('/IABlog/IA/{id}',[Admin_contr::class,"getByid"])->name("ia.article");

Route::get('/IABlog/article/details/{id}',[Admin_contr::class,"getPost"])->name("article_details");

Route::get('/IABlog/Confirm/{id}',[Admin_contr::class,"confirm"])->name("post.confirm");

Route::get('/MesArticles',[User_contr::class,"Mesarticles"])->name("mesarticles");

Route::get('IA/moreinformation/{id}/{nomia}',[User_contr::class,"Article_info"])->name("Details.info");

Route::get('/IABlog/article/IA/{id}/{nomia}',[User_contr::class,"getByid"])->name("ia.article_user");

Route::get('/IABlog/deconnexion',[Login_contr::class,"deconnex"])->name("deconnecter");

Route::get('/IABlog/create_publication',[Admin_contr::class,"formulaire"])->name("formulaire_article");

Route::post('/IABlog/publier',[Admin_contr::class,"publier"])->name("article.publier");

