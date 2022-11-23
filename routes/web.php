<?php

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

//routing for common start here
    Route::get('/', 'Common\HomeController@home');
//routing for common end here
Auth::routes();

//routing for admin start here
Route::get('/admin', 'Admin\LoginController@index');
Route::post('/admin-submit', 'Admin\LoginController@dologin')->name('admin.login');
//routing for admin end here

//routing for buyer without login start here
    Route::get('buyer/login', 'Buyer\LoginController@login');
    Route::post('/login-submit', 'Buyer\LoginController@dologin')->name('buyer.login');
    Route::get('/buyer/register', 'Buyer\RegisterController@register');
    Route::post('/register-submit', 'Buyer\RegisterController@registerSubmit')->name('buyer.register');
//routing for buyer without login end here

Route::group(['middleware' => 'auth'], function(){
    
    // Admin Only
    Route::group(['middleware' => 'admin'], function(){
        Route::post('/admin-logout', 'Admin\LoginController@logout')->name('admin.logout');
        Route::get('/admin/dashboard','Admin\DashboardController@index');
        Route::get('/admin/buyer-all-order','Admin\OrderController@index');
        Route::get('/admin/all-buyer','Admin\BuyerController@index');
    });

    // Supplier User Only
    Route::group(['middleware' => 'supplier'], function(){
         Route::get('/supplier/dashboard','Supplier\DashboardController@index');
         Route::get('/supplier/how-work','Supplier\DashboardController@howItWork');
         Route::get('/supplier/my-bedebe','Supplier\DashboardController@myBedebe');
         Route::get('/supplier/add-product','Supplier\ProductController@addProduct'); 
         Route::post('/supplier/submit-product', 'Supplier\ProductController@productSubmit')->name('supplier.product.submit');
        Route::get('/supplier/all-product','Supplier\ProductController@allProduct'); 
        Route::get('/supplier/edit-product/{id}', 'Supplier\ProductController@productEdit')->name('supplier.product.edit');
        Route::post('/supplier/update-product/{id}', 'Supplier\ProductController@productUpdate')->name('supplier.product.update'); 
        Route::get('/supplier/delete-product/{id}', 'Supplier\ProductController@deleteProduct')->name('supplier.product.product'); 
    });

    // Exporter User Only
    Route::group(['middleware' => 'exporter'], function(){
         Route::get('/exporter/dashboard','Exporter\DashboardController@index');
         Route::get('/exporter/how-work','Exporter\DashboardController@howItWork');
         Route::get('/exporter/my-bedebe','Exporter\DashboardController@myBedebe');
         Route::get('/exporter/add-product','Exporter\ProductController@addProduct'); 
         Route::post('/exporter/submit-product', 'Exporter\ProductController@productSubmit')->name('exporter.product.submit');
        Route::get('/exporter/all-product','Exporter\ProductController@allProduct');
        Route::get('/exporter/edit-product/{id}', 'Exporter\ProductController@productEdit')->name('exporter.product.edit');
        Route::post('/exporter/update-product/{id}', 'Exporter\ProductController@productUpdate')->name('exporter.product.update');
        Route::get('exporter/delete-product/{id}', 'Exporter\ProductController@deleteProduct')->name('exporter.product.delete');
        Route::get('exporter/buyer-product', 'Exporter\BuyerProductController@buyerAllProduct');
        //Route::get('exporter/buyer-product', 'Exporter\BuyerProductController@buyerAllProduct')->name('exporter.product.edit');
    });

    // Buyer User Only
    Route::group(['middleware' => 'buyer'], function(){
        Route::post('/buyer-logout', 'Buyer\LoginController@logout')->name('buyer.logout');
        Route::get('/buyer/dashboard', 'Buyer\BuyerController@index');
        Route::get('/buyer/how-work', 'Buyer\BuyerController@howItWork');
        Route::get('/buyer/retailer', 'Buyer\BuyerController@retailer');
        Route::get('/buyer/my-profile','Buyer\BuyerController@myProfile');
        Route::post('/profile-submit','Buyer\BuyerController@profileSubmit')->name('profile.submit');   
		Route::post('/buyer/my-profile', 'Buyer\BuyerController@imageUploadPost')->name('image.upload.post');
        Route::get('/buyer/bedebe-shop', 'Buyer\BedebeShop\BedebeShopController@index');
        Route::get('/buyer/orders','Buyer\BedebeShop\OrderController@index');
        Route::get('/buyer/order/{id}','Buyer\BedebeShop\OrderController@viewOrder')->name('order.view');
        Route::get('/buyer/create-product','Buyer\BedebeShop\ProductController@createProducts');
        Route::post('submit-product', 'Buyer\BedebeShop\ProductController@productSubmit')->name('product.submit');
        Route::get('/buyer/all-product','Buyer\BedebeShop\ProductController@allProduct');
		Route::get('buyer/product/{id}', 'Buyer\BedebeShop\ProductController@destroyProduct');
		Route::get('/buyer/edit-product/{id}', 'Buyer\BedebeShop\ProductController@productEdit')->name('product.edit');
		Route::post('/buyer/update-product/{id}', 'Buyer\BedebeShop\ProductController@productUpdate')->name('product.update');
        Route::get('/buyer/cart', 'Buyer\BedebeShop\ProductController@cart');
        Route::get('/buyer/add-to-cart/{id}', 'Buyer\BedebeShop\ProductController@addToCart')->name('product.add-to-cart');
        Route::POST('/buyer/update-cart', 'Buyer\BedebeShop\ProductController@updateCart')->name('product.update-cart');
        Route::get('/buyer/remove-from-cart/{id}', 'Buyer\BedebeShop\ProductController@removeProduct');
        Route::get('/buyer/checkout', 'Buyer\BedebeShop\ProductController@checkout');
        Route::post('submit-order', 'Buyer\BedebeShop\ProductController@orderSubmit')->name('order.submit');
        Route::get('/buyer/order-received', 'Buyer\BedebeShop\ProductController@orderReceived');
        Route::get('/buyer/my-europa-address', 'Buyer\BedebeShop\AddressController@europaPage');
        Route::get('/buyer/my-madagascar-address', 'Buyer\BedebeShop\AddressController@madagascarPage');
        Route::get('/buyer/add-madagascar-address', 'Buyer\BedebeShop\AddressController@addMadagascarAddress');
         Route::get('/buyer/my-madagascar-address-edit/{id}', 'Buyer\BedebeShop\AddressController@editMadagascarAddress');
        Route::POST('/buyer/edit-madagascar-address-submit/{id}', 'Buyer\BedebeShop\AddressController@submitEditMadagascarAddress')->name('edit.madagascar.address.submit');
        Route::get('/buyer/my-madagascar-address-delete/{id}', 'Buyer\BedebeShop\AddressController@deleteMadagascarAddress');
        Route::POST('/buyer/submit-madagascar-address', 'Buyer\BedebeShop\AddressController@submitMadagascarAddress')->name('madagascar.address.submit');
        Route::get('/buyer/my-invoicing-address', 'Buyer\BedebeShop\AddressController@invoicingPage');
        Route::get('/buyer/add-invoicing-address', 'Buyer\BedebeShop\AddressController@addInvoicingAdress');
        Route::POST('/buyer/submit-invoicing-address', 'Buyer\BedebeShop\AddressController@submitInvoicingAddress')->name('invoicing.address.submit');
        Route::get('/buyer/my-invoicing-address-edit/{id}', 'Buyer\BedebeShop\AddressController@editInvoicingAdress');
        Route::POST('/buyer/edit-invoicing-address-submit/{id}', 'Buyer\BedebeShop\AddressController@submitEditInvoicingAddress')->name('edit.invoicing.address.submit');
        Route::get('/buyer/my-invoicing-address-delete/{id}', 'Buyer\BedebeShop\AddressController@deleteInvoicingAddress');
        Route::get('/buyer/direct-shop', 'Buyer\DirectShop\DirectShopController@index');
        Route::get('/buyer/add-direct-invoice', 'Buyer\DirectShop\InvoiceController@addInvoice');
        Route::POST('/buyer/submit-direct-invoice', 'Buyer\DirectShop\InvoiceController@submitInvoice')->name('invoice.submit');
        Route::get('/buyer/my-direct-order', 'Buyer\DirectShop\InvoiceController@myDirectOrder');
        Route::get('/buyer/other-product','Buyer\BedebeShop\OtherProductController@otherAllProducts');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
