<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    BlogController,
    UserController,
    AdminController,
    CareerController,
    HomeController, 
    ProfileController,
    TracerStudyController
};

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');
Route::post('/', [HomeController::class, 'newsletter'])->name('career.newsletter');
Route::view('/career', 'career')->name('career');

Route::get('/blog', [BlogController::class, 'showBlog'])->name('blog');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::view('/user/dashboard', 'dashboard')->middleware(['auth', 'role:user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/user/profile', 'edit')->name('profile.edit');
        Route::patch('/user/profile', 'update')->name('profile.update');
        Route::delete('/user/profile', 'destroy')->name('profile.destroy');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/user/career', 'index')->name('career.index');
        Route::get('/user/career/{id}', 'showCareerDetail')->name('user.career.detail');

        Route::get('/user/career/biodata/{id}', 'showBiodataForm')->name('user.career.biodata');

        Route::post('/user/career/biodata/{id}', 'storeBiodata')->name('user.biodata.store');

        Route::get('/user/career/detail/{career}/{user_id}', 'showCareerLinkDetail')->name('career.link.detail');
        
        Route::get('/user/report', 'UserReport')->name('user.career.report');

        Route::get('/user/faq', 'faq')->name('user.faq');
    });

    Route::controller(TracerStudyController::class)->group(function () {
        Route::get('/user/tracer-study', 'index')->name('tracer-study.index');
        Route::get('/user/tracer-study/create', 'create')->name('tracer-study.create');
        Route::post('/user/tracer-study/store', 'store')->name('tracer-study.store');
        Route::get('/user/tracer-study/{id}', 'show')->name('tracer-study.show');
        Route::get('/user/tracer-study/{id}/edit', 'edit')->name('tracer-study.edit');
        Route::put('/user/tracer-study/{id}', 'update')->name('tracer-study.update');
        Route::get('/user/tracer-study/{id}/delete', 'destroy')->name('tracer-study.delete');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
        Route::get('/admin/faq', 'AdminFaq')->name('admin.faq');
        Route::get('/admin/user', 'AdminUser')->name('admin.user');
        Route::get('/admin/user/create', 'AdminUserCreate')->name('admin.user.create');
        Route::post('/admin/user/store', 'AdminUserStore')->name('admin.user.store');
        Route::get('/admin/user/edit/{id}', 'AdminUserEdit')->name('admin.user.edit');
        Route::put('/admin/user/update/{id}', 'AdminUserUpdate')->name('admin.user.update');
        Route::get('/admin/user/delete/{id}', 'AdminUserDelete')->name('admin.user.delete');
        Route::get('/admin/user/report', 'AdminUserReport')->name('admin.user.report');
        Route::get('/admin/user/export', 'AdminUserExport')->name('user.export');
        Route::get('/admin/user/search', 'AdminUserSearch')->name('user.search');
        Route::get('/admin/career/report', 'AdminCareerReport')->name('admin.career.report');
        Route::get('/admin/career/export', 'AdminCareerExport')->name('admin.career.export');
        Route::get('/admin/career/search', 'AdminCareerSearch')->name('admin.career.search');
        Route::get('/admin/contact', 'AdminContact')->name('admin.contact');
        Route::delete('/admin/contact/delete/{id}', 'AdminContactDelete')->name('admin.contact.destroy');
        Route::get('/admin/newsletter', 'AdminNewsletter')->name('admin.newsletter');
        Route::delete('/admin/newsletter/delete/{id}', 'AdminNewsletterDelete')->name('admin.newsletter.destroy');
    });

    Route::controller(BlogController::class)->group(function () {
        Route::get('/admin/blog/articles', 'articles')->name('admin.blog.articles');
        Route::get('/admin/blog/articles/create', 'articleCreate')->name('admin.blog.article.create');
        Route::post('/admin/blog/article/store', 'articleStore')->name('admin.blog.article.store');
        Route::delete('/admin/blog/article/delete/{id}', 'articleDelete')->name('admin.blog.article.delete');
        Route::get('/admin/blog/article/edit/{id}', 'articleEdit')->name('admin.blog.article.edit');
        Route::put('/admin/blog/article/update/{id}', 'articleUpdate')->name('admin.blog.article.update');
        Route::get('/admin/blog/categories', 'categories')->name('admin.blog.categories');
        Route::get('/admin/blog/category/create', 'categoryCreate')->name('admin.blog.category.create');
        Route::post('/admin/blog/category/store', 'categoryStore')->name('admin.blog.category.store');
        Route::delete('/admin/blog/category/delete/{id}', 'categoryDelete')->name('admin.blog.category.delete');
        Route::get('/admin/blog/category/edit/{id}', 'categoryEdit')->name('admin.blog.category.edit');
        Route::put('/admin/blog/category/update/{id}', 'categoryUpdate')->name('admin.blog.category.update');
        Route::get('/admin/blog/tags', 'tags')->name('admin.blog.tags');
        Route::get('/admin/blog/tags/create', 'tagCreate')->name('admin.blog.tag.create');
        Route::post('/admin/blog/tag/store', 'tagStore')->name('admin.blog.tag.store');
        Route::get('/admin/blog/tag/edit/{id}', 'tagEdit')->name('admin.blog.tag.edit');
        Route::put('/admin/blog/tag/update/{id}', 'tagUpdate')->name('admin.blog.tag.update');
        Route::delete('/admin/blog/tag/delete/{id}', 'tagDelete')->name('admin.blog.tag.delete');
    });

    Route::controller(CareerController::class)->group(function () {
        Route::get('/admin/career', 'index')->name('admin.career');
        Route::get('/admin/career/create', 'create')->name('admin.career.create');
        Route::post('/admin/career/store', 'store')->name('admin.career.store');
        Route::delete('/admin/career/delete/{id}', 'delete')->name('admin.career.delete');
        Route::get('/admin/career/link', 'createLink')->name('admin.career.link');
        Route::post('/admin/career/storeLink', 'storeLink')->name('admin.career.storeLink');
        Route::delete('/admin/career/deleteLink/{id}', 'deleteLink')->name('admin.career.deleteLink');
        Route::get('/admin/perusahaan', 'indexPerusahaan')->name('perusahaan');
        Route::post('/admin/career/perusahaan/store', 'storePerusahaan')->name('admin.career.perusahaan.store');
        Route::delete('/admin/career/perusahaan/delete/{id}', 'deletePerusahaan')->name('admin.career.perusahaan.delete');
        Route::get('/admin/career/seleksi', 'indexSeleksi')->name('admin.career.seleksi');
        Route::get('/admin/career/seleksi/edit/{id}', 'editSeleksi')->name('admin.seleksi.edit');
        Route::put('/admin/career/seleksi/update/{id}', 'updateSeleksi')->name('admin.career.seleksi.update');
        Route::delete('/admin/career/seleksi/delete/{id}', 'deleteSeleksi')->name('admin.career.seleksi.delete');
    });
});

require __DIR__ . '/auth.php';
 
