<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
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
$url='App\Http\Controllers\\';
/*
-------------frontend route
*/
Route::get('/', $url.'SiteController@index')->name('index');
Route::get('/product', $url.'SiteController@product')->name('product');
/*
---------------backend route
*/
Route::get('/dashboard', $url.'DashboardController@dashboard')->name('dashboard');
/* ---------------brand */
Route::get('/brand/add-brand', [BrandController::class, 'addBrand'])->name('add-brand');
Route::get('/brand/all-brand', [BrandController::class, 'allBrand'])->name('all-brand');
Route::post('/brand/save-brand', [BrandController::class, 'saveBrand'])->name('save-brand');
Route::post('/brand/update-brand',$url.'BrandController@updateBrand')->name('update-brand');
Route::get('/brand/edit-brand/{id}', $url.'BrandController@editBrand')->name('edit-brand');
Route::get('/brand/active-brand/{id}', $url.'BrandController@activeBrand')->name('active-brand');
Route::get('/brand/inactive-brand/{id}', $url.'BrandController@inactiveBrand')->name('inactive-brand');
Route::get('/brand/delete-brand/{id}', $url.'BrandController@deleteBrand')->name('delete-brand');
/* ---------------categories */
Route::get('/category/all-category', $url.'CategoryController@allCategory')->name('all-category');
Route::get('/category/add-category', $url.'CategoryController@addCategory')->name('add-category');
Route::get('/category/edit-category/{id}', $url.'CategoryController@editCategory')->name('edit-category');
Route::get('/category/active-category/{id}', $url.'CategoryController@activeCategory')->name('active-category');
Route::get('/category/inactive-category/{id}', $url.'CategoryController@inactiveCategory')->name('inactive-category');
Route::get('/category/delete-category/{id}', $url.'CategoryController@deleteCategory')->name('delete-category');
Route::post('/category/save-category', $url.'CategoryController@saveCategory')->name('save-category');
Route::post('/category/update-category', $url.'CategoryController@updateCategory')->name('update-category');
/* ---------------sub categories */
Route::get('/sub-category', $url.'SubCategoryController@subCategory')->name('sub-category');
Route::get('/add-sub-category', $url.'SubCategoryController@addSubCategory')->name('add-sub-category');
Route::get('/edit-sub-category/{id}', $url.'SubCategoryController@editSubCategory')->name('edit-sub-category');
Route::get('/active-sub-category/{id}', $url.'SubCategoryController@activeSubCategory')->name('active-sub-category');
Route::get('/inactive-sub-category/{id}', $url.'SubCategoryController@inactiveSubCategory')->name('inactive-sub-category');
Route::get('/delete-sub-category/{id}', $url.'SubCategoryController@deleteSubCategory')->name('delete-sub-category');
Route::post('/save-sub-category', $url.'SubCategoryController@saveSubCategory')->name('save-sub-category');
Route::post('/update-sub-category', $url.'SubCategoryController@updateSubCategory')->name('update-sub-category');
/* ---------------sub sub categories */
Route::get('/sub-sub-category', $url.'SubSubCategoryController@subSubCategory')->name('sub-sub-category');
Route::get('/add-sub-sub-category', $url.'SubSubCategoryController@addSubSubCategory')->name('add-sub-sub-category');
Route::get('/sub_categorys', $url.'SubSubCategoryController@loadSubCategory');
Route::get('/edit-sub-sub-category/{id}', $url.'SubSubCategoryController@editSubSubCategory')->name('edit-sub-sub-category');
Route::get('/active-sub-sub-category/{id}', $url.'SubSubCategoryController@activeSubSubCategory')->name('active-sub-sub-category');
Route::get('/inactive-sub-sub-category/{id}', $url.'SubSubCategoryController@inactiveSubSubCategory')->name('inactive-sub-sub-category');
Route::get('/delete-sub-sub-category/{id}', $url.'SubSubCategoryController@deleteSubSubCategory')->name('delete-sub-sub-category');
Route::post('/save-sub-sub-category', $url.'SubSubCategoryController@saveSubSubCategory')->name('save-sub-sub-category');
Route::post('/update-sub-sub-category', $url.'SubSubCategoryController@updateSubSubCategory')->name('update-sub-sub-category');
/* ---------------products */
Route::get('/product/add-product', $url.'ProductController@addProduct')->name('add-product');
Route::get('/product/all-product', $url.'ProductController@allProduct')->name('all-product');
Route::get('/product/edit-product/{id}', $url.'ProductController@editProduct')->name('edit-product');
Route::get('/product/active-product/{id}', $url.'ProductController@activeProduct')->name('active-product');
Route::get('/product/inactive-product/{id}', $url.'ProductController@inactiveProduct')->name('inactive-product');
Route::get('/product/delete-product/{id}', $url.'ProductController@deleteProduct')->name('delete-product');
Route::post('/product/save-product', $url.'ProductController@saveProduct')->name('save-product');
Route::post('/product/update-product', $url.'ProductController@updateProduct')->name('update-product');
Route::get('/product/view-product/{id}', $url.'ProductController@viewProduct')->name('view-product');
Route::get('/product/print-product/{id}', $url.'ProductController@pdfGenerator')->name('print-product');
/* ---------------coupon */
Route::get('/add-coupon', $url.'CouponController@addCoupon')->name('add-coupon');
Route::get('/all-coupon', $url.'CouponController@allCoupon')->name('all-coupon');
Route::post('/save-coupon', $url.'CouponController@saveCoupon')->name('save-coupon');
Route::post('/update-coupon', $url.'CouponController@updateCoupon')->name('update-coupon');
Route::get('/edit-coupon/{id}', $url.'CouponController@editCoupon')->name('edit-coupon');
Route::get('/active-coupon/{id}', $url.'CouponController@activeCoupon')->name('active-coupon');
Route::get('/inactive-coupon/{id}', $url.'CouponController@inactiveCoupon')->name('inactive-coupon');
Route::get('/delete-coupon/{id}', $url.'CouponController@deleteCoupon')->name('delete-coupon');
/* ---------------stock management */
Route::get('/stock-management', $url.'StockManagementController@stockManagement')->name('stock-management');
Route::get('/view-stock/{id}', $url.'StockManagementController@viewStock')->name('view-stock');
Route::post('/stock/update-stock', $url.'StockManagementController@updateStock')->name('update-stock');
Route::get('/stock/add-stock/{id}', $url.'StockManagementController@addStock')->name('add-stock');
Route::get('/stock/print-stock/{id}', $url.'StockManagementController@pdfGenerator')->name('print-stock');
/* ---------------slider */
Route::get('/add-slider', $url.'SliderController@addSlider')->name('add-slider');
Route::get('/all-slider', $url.'SliderController@allSlider')->name('all-slider');
Route::post('/save-slider', $url.'SliderController@saveSlider')->name('save-slider');
Route::get('/slider-status/{id}/{status}', $url.'SliderController@sliderStatus')->name('slider-status');
Route::get('/delete-slider/{id}', $url.'SliderController@deleteSlider')->name('delete-slider');
/* ---------------orders */
Route::get('/pending-order', $url.'OrderController@pendingOrder')->name('pending-order');
Route::get('/view-pending-order', $url.'OrderController@viewPendingOrder')->name('view-pending-order');
Route::get('/processing-order', $url.'OrderController@processingOrder')->name('processing-order');
Route::get('/change-status', $url.'OrderController@changeStatus')->name('change-status');
Route::get('/confirmed-order', $url.'OrderController@confirmedOrder')->name('confirmed-order');
Route::get('/view-confirmed-order', $url.'OrderController@viewConfirmedOrder')->name('view-confirmed-order');
Route::get('/delivered-order', $url.'OrderController@deliveredOrder')->name('delivered-order');
Route::get('/view-delivered-order', $url.'OrderController@viewDeliveredOrder')->name('view-delivered-order');
Route::get('/cancel-order', $url.'OrderController@cancelOrder')->name('cancel-order');
Route::get('/view-cancel-order', $url.'OrderController@viewCancelOrder')->name('view-cancel-order');
Route::get('/print-order', $url.'OrderController@printOrder')->name('print-order');
/* ---------------reports */
Route::get('/daily-report', $url.'ReportController@dailyReport')->name('daily-report');
Route::get('/view-daily-report', $url.'ReportController@viewDailyReport')->name('view-daily-report');
Route::get('/view-monthly-report', $url.'ReportController@viewMonthlyReport')->name('view-monthly-report');
Route::get('/monthly-report', $url.'ReportController@monthlyReport')->name('monthly-report');
Route::get('/view-yearly-report', $url.'ReportController@viewYearlyReport')->name('view-yearly-report');
Route::get('/yearly-report', $url.'ReportController@yearlyReport')->name('yearly-report');
Route::get('/search-report', $url.'ReportController@searchReport')->name('search-report');
Route::post('/view-search-date', $url.'ReportController@viewSearchDate')->name('view-search-date');
Route::post('/view-search-month', $url.'ReportController@viewSearchMonth')->name('view-search-month');
Route::post('/view-search-year', $url.'ReportController@viewSearchYear')->name('view-search-year');
/* ---------------sub admin */
Route::get('/all-sub-admin', $url.'SubAdminController@allSubAdmin')->name('sub-admin');
Route::get('/add-sub-admin', $url.'SubAdminController@addSubAdmin')->name('add-sub-admin');
Route::get('/edit-sub-admin', $url.'SubAdminController@editSubAdmin')->name('edit-sub-admin');
Route::get('/view-sub-admin/{id}', $url.'SubAdminController@viewSubAdmin')->name('view-sub-admin');
Route::post('/save-sub-admin', $url.'SubAdminController@saveSubAdmin')->name('save-sub-admin');
Route::post('/update-sub-admin', $url.'SubAdminController@updateSubAdmin')->name('update-sub-admin');
Route::get('/edit-sub-admin/{id}', $url.'SubAdminController@editSubAdmin')->name('edit-sub-admin');
Route::get('/active-sub-admin/{id}', $url.'SubAdminController@activeSubAdmin')->name('active-sub-admin');
Route::get('/inactive-sub-admin/{id}', $url.'SubAdminController@inactiveSubAdmin')->name('inactive-sub-admin');
Route::get('/delete-sub-admin/{id}', $url.'SubAdminController@deleteSubAdmin')->name('delete-sub-admin');
Route::get('/sub-admin/print-sub-admin/{id}', $url.'SubAdminController@pdfGenerator')->name('print-sub-admin');
/* ---------------customer */
Route::get('/all-customer', $url.'CustomerController@allCustomer')->name('all-customer');
Route::get('/view-customer/{id}', $url.'CustomerController@viewCustomer')->name('view-customer');
Route::get('/active-customer/{id}', $url.'CustomerController@activeCustomer')->name('active-customer');
Route::get('/inactive-customer/{id}', $url.'CustomerController@inactiveCustomer')->name('inactive-customer');
Route::get('/customer/print-customer/{id}', $url.'CustomerController@pdfGenerator')->name('print-customer');
/* ---------------merchant */
Route::get('/all-merchant', $url.'MerchantController@allMerchant')->name('all-merchant');
Route::get('/view-merchant/{id}', $url.'MerchantController@viewMerchant')->name('view-merchant');
Route::get('/active-merchant/{id}', $url.'MerchantController@activeMerchant')->name('active-merchant');
Route::get('/inactive-merchant/{id}', $url.'MerchantController@inactiveMerchant')->name('inactive-merchant');
Route::get('/merchant/print-merchant/{id}', $url.'MerchantController@pdfGenerator')->name('print-merchant');
/* ---------------subscriber */
Route::get('/subscriber-list', $url.'SubscriberController@subscriberList')->name('subscriber-list');
Route::get('/active-subscriber/{id}', $url.'SubscriberController@activeSubscriber')->name('active-subscriber');
Route::get('/inactive-subscriber/{id}', $url.'SubscriberController@inactiveSubscriber')->name('inactive-subscriber');
Route::get('/subscriber-list/print-subscriber-list', $url.'SubscriberController@pdfGenerator')->name('print-subscriber-list');
/* ---------------profile */
Route::get('/profile', $url.'ProfileController@profile')->name('profile');
Route::get('/edit-profile', $url.'ProfileController@editProfile')->name('edit-profile');

/* ---------------login */
Route::get('/logout', $url.'DashboardController@logout')->name('logout');
Route::get('/sign-in', $url.'DashboardController@signIn')->name('sign-in');
Route::get('/lock', $url.'DashboardController@lock')->name('lock');
Route::get('/forgot-password', $url.'DashboardController@forgotPassword')->name('forgot-password');
Route::get('/register', $url.'DashboardController@register')->name('register');