<?php

Route::get('/',[

    'uses'=>'homeController@getWelcome',
    'as'=>'welcome'

]);

Route::get('/getCategory/{cat_id}',[
   'uses'=>'homeController@getBookByCatId',
    'as'=>'get_by_category'
]);

Route::get('/getImg/{cover_img}',[

    'uses'=>'adminController@getImage',
    'as'=>'img'
]);

Route::get('/getBook/{book_file}',[

    'uses'=>'adminController@getBook',
    'as'=>'book'
]);


Route::get('/show_cat',[
    'uses'=>'adminController@getShowCategories',
    'as'=>'showCategories'
]);

Route::get('/show_book',[
    'uses'=>'adminController@getShowBook',
    'as'=>'show_book'
]);

Route::get('/register',[
    'uses'=>'homeController@getRegister',
    'as'=>'register'
]);

Route::get('/login',[
    'uses'=>'homeController@getLogin',
    'as'=>'login'
]);

Route::get('/search',[
   'uses'=>'homeController@getSearch',
    'as'=>'search'
]);



Route::group(['prefix'=>'auth'],function (){


   Route::post('/register',[
       'uses'=>'authController@postRegister',
       'as'=>'post_register'
   ]);

   Route::post('/login',[
       'uses'=>'authController@postLogin',
       'as'=>'post_login'

   ]);

    Route::get('/logout',[
        'uses'=>'AuthController@getLogout',
        'as'=>'logout'
    ]);





});

Route::group(['prefix'=>'admin'],function (){
    Route::group(['middleware'=>'auth'],function (){
        Route::get('/dashboard',[
            'uses'=>'adminController@getDashboard',
            'as'=>'dashboard'
        ]);

        Route::get('/categories',[
            'uses'=>'adminController@getNewCategories',
            'as'=>'categories'
        ]);

        Route::get('/new_book',[
            'uses'=>'adminController@getNewBook',
            'as'=>'new_book'
        ]);


        Route::get('/show_book',[
            'uses'=>'adminController@getShowBook',
            'as'=>'show_book'
        ]);




        Route::post('/categories',[
            'uses'=>'adminController@postNewCategories',
            'as'=>'new_cat'
        ]);

        Route::post('/new_book',[
            'uses'=>'adminController@postNewBook',
            'as'=>'new_book'
        ]);

    });

});
