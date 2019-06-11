<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');

    Route::resource('product-categories', 'ProductCategoryController');

    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');

    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');

    Route::resource('product-tags', 'ProductTagController');

    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');

    Route::resource('products', 'ProductController');

    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');

    Route::delete('contact-companies/destroy', 'ContactCompanyController@massDestroy')->name('contact-companies.massDestroy');

    Route::resource('contact-companies', 'ContactCompanyController');

    Route::delete('contact-contacts/destroy', 'ContactContactsController@massDestroy')->name('contact-contacts.massDestroy');

    Route::resource('contact-contacts', 'ContactContactsController');
});
