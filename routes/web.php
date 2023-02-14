<?php

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

Route::get('/', function () {

	$quote = App\Quote::inRandomOrder()->first();
    
    return view('welcome', compact('quote'));
});

Route::get('/about', function () {

    return view('about');

});

Route::get('/api', function() {

	return view('api');

});


Route::get('/api/random', function() {

	$quote = App\Quote::inRandomOrder()->first();

	unset($quote->created_at);
	unset($quote->updated_at);

	return $quote;

});

Route::get('/api/{id}', function($id) {

	$quote = App\Quote::where('id', $id)->get();

	unset($quote->created_at);
	unset($quote->updated_at);

	return $quote;

});

Route::get('/quote/{id}', function($id) {

	$quote = App\Quote::where('id', $id)->first();

	return view('single', compact('quote'));

});

// Route::get('/add', function () {

// 	$quote = new App\Quote;
// 	$quote->body = 'PHP is alive and there’s little reason to jump on the Node.js bandwagon because it looks faster, newer or trendier. PHP is easier to learn yet supports proficient professional programming techniques. Assistance is everywhere and deployment is simple. Even die-hard Node.js developers should consider PHP for simpler websites and apps.';
// 	$quote->author = 'Craig Buckler';
// 	$quote->author_link = 'https://www.sitepoint.com/author/craig-buckler/';
// 	$quote->source = 'https://www.sitepoint.com/sitepoint-smackdown-php-vs-node-js/';

// 	$quote->save();
    
//     return "saved";
// });