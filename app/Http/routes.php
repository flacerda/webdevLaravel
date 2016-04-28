<?php

Route::resource('products', 'ProductsController');
Route::resource('users', 'UsersController');
Route::resource('categories', 'CategoriesController');

Route::match(
	['get', 'post'],
	'products/categories/{id}',
	[
		'uses' => 'ProductsController@categories',
		'as' => 'products.categories'
	]
);
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name?}', function ($name = 'world') {
    return 'hello ' . $name. '!';
});

Route::get('/all_users', 'UsersController@allUsers'); 

Route::get('/one_user/{id}', 'UsersController@oneUser');

Route::get('/all_users', function () {
	$users = DB::select('SELECT * FROM users');

	return view('dump', ['data'=> $users]);
}); 

Route::get('/one_user/{id}', function ($id) {
   $user = DB::select('SELECT * FROM users where id =:id', ['id' => $id]);

   return view('dump', ['data'=> $user]);
});*/