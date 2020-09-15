<?php

Route::get('/', 'WelcomeController@index');
Auth::routes();
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Invoices
    Route::delete('invoices/destroy', 'InvoicesController@massDestroy')->name('invoices.massDestroy');
    Route::resource('invoices', 'InvoicesController');

    // Customers
    Route::delete('customers/destroy', 'CustomersController@massDestroy')->name('customers.massDestroy');
    Route::resource('customers', 'CustomersController');

    Route::get('billing', 'BillingController@index')->name('billing.index');
    Route::post('billing/checkout', 'BillingController@checkout')->name('billing.checkout');
    Route::post('billing/check-discount', 'BillingController@checkDiscount')->name('billing.checkDiscount');
    Route::get('cancel', 'BillingController@cancel')->name('billing.cancel');
    Route::get('resume', 'BillingController@resume')->name('billing.resume');
    Route::get('payment_methods/default/{paymentMethod}', 'PaymentMethodController@markDefault')->name('payment_methods.default');
    Route::resource('payment_methods', 'PaymentMethodController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }

});
//Mbeshas
Route::prefix("lipwa")->group(function ()
{
    Route::any("pay", "MpesaController@pay");
    Route::any("validate", "MpesaController@validation");
    Route::any("confirm", "MpesaController@confirmation");
    Route::any("results", "MpesaController@results");
    Route::any("register", "MpesaController@register");
    Route::any("timeout", "MpesaController@timeout");
    Route::any("reconcile", "MpesaController@reconcile");
    Route::any("reverse", "MpesaController@reverse");
    Route::any("status", "MpesaController@status");
});

//Notes Route
Route::get('/notes', 'Admin\NoteController@index')->name('notes.index');
Route::get('/notes/create', 'Admin\NoteController@create')->name('notes.create');
Route::post('/notes/store', 'Admin\NoteController@store')->name('notes.store');
Route::get('/notes/edit/{id}', 'Admin\NoteController@edit')->name('notes.edit');
Route::post('/notes/update', 'Admin\NoteController@update')->name('notes.update');
Route::get('/notes/delete/{id}', 'Admin\NoteController@destroy')->name('notes.delete');


//Income Route
Route::get('/incomes', 'Admin\IncomeController@index')->name('incomes.index');
Route::get('/incomes/create', 'Admin\IncomeController@create')->name('incomes.create');
Route::post('/incomes/store', 'Admin\IncomeController@store')->name('incomes.store');
Route::get('/incomes/edit/{id}', 'Admin\IncomeController@edit')->name('incomes.edit');
Route::post('/incomes/update', 'Admin\IncomeController@update')->name('incomes.update');
Route::get('/incomes/delete/{id}', 'Admin\IncomeController@destroy')->name('incomes.delete');

//Expense Route
Route::get('/expense', 'Admin\ExpenseController@index')->name('expense.index');
Route::get('/expense/create', 'Admin\ExpenseController@create')->name('expense.create');
Route::post('/expense/store', 'Admin\ExpenseController@store')->name('expense.store');
Route::get('/expense/edit/{id}', 'Admin\ExpenseController@edit')->name('expenses.edit');
Route::post('/expense/update', 'Admin\ExpenseController@update')->name('expenses.update');
Route::get('/expense/delete/{id}', 'Admin\ExpenseController@destroy')->name('expenses.delete');

//POS
Route::get('/pos', 'Admin\POSController@index')->name('pos.index');
