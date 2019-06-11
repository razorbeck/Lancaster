<?php

Route::group(['prefix' => 'v1', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('permissions', 'PermissionsApiController');

    Route::apiResource('roles', 'RolesApiController');

    Route::apiResource('users', 'UsersApiController');

    Route::apiResource('product-categories', 'ProductCategoryApiController');

    Route::apiResource('product-tags', 'ProductTagApiController');

    Route::apiResource('products', 'ProductApiController');

    Route::apiResource('contact-companies', 'ContactCompanyApiController');

    Route::apiResource('contact-contacts', 'ContactContactsApiController');
});
