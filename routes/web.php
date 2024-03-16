<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OrgQueryController;

use App\Models\Blogs;
use App\Models\BlogTag;
use App\Models\Contact;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
})->name('oas-index');
Route::get('/features', function () {
    return view('features');
})->name('oas-features');
Route::get('pricing', function () {
    // return view('pricing');
    $plans = DB::table('central_plans')->where('id', '!=', 5)->get();

    return view('pricing-new', compact('plans'));
})->name('pricing');

// Route::get('contact-new',function() {
//     // return view('pricing');
//     return view('contact-new');

// })->name('contact-new');

// Route::get('about-new',function() {
//     // return view('pricing');
//     return view('about-new');
// })->name('about-new');

// Route::get('pricing-new',function() {
//     return view('pricing-new');
// })->name('pricing-new');

Route::get('register-new', function () {
    return view('register');
})->name('register-new');

Route::post('store-query', [Controller::class, 'queryOrganization'])->name('queryOrganization');
Route::post('resend-otp', [Controller::class, 'resendOTP'])->name('resendOTP');


Route::get('faq', function () {
    return view('faq');
})->name('faq');
Route::get('/work-process', function () {
    return view('work-process');
})->name('oas-work');
Route::get('/artificial-intelligence-machine-learning', function () {
    return view('artificial-intelligence');
})->name('oas-ai');
Route::get('/contact', function () {
    return view('contact');
})->name('oas-contact');
Route::get('/sample', function () {
    return view('sample');
})->name('sample');
Route::get('/rotate', function () {
    return view('rotating-carousel');
})->name('sample');

Route::get('contacts-show', function () {
    // $contacts = json_decode(Http::get('https://api.oas36ty.com/v1/contact-show')) ?? [];
    $contacts = Contact::orderBy('updated_at', 'desc')->get();
    return view('contact.index', compact('contacts'));
})->name('contact-show');

Route::get('/explore', function () {
    return view('explore');
})->name('oas-explore');
Route::get('/slider', function () {
    return view('slider');
});
Route::get('oas', function () {
    return view('oas');
});
Route::get('privacy', function () {
    return view('privacy');
})->name('oas-privacy');
Route::get('terms', function () {
    return view('terms');
})->name('oas-terms');
Route::get('updates', function () {
    return view('updates');
})->name('oas-updates');

Route::middleware(['rate.limit.emails'])->group(function () {
    Route::post('query-store', [ContactController::class, 'store'])->name('contacts');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/blogs', [BlogController::class, 'index'])->middleware(['auth', 'verified'])->name('blogs');
Route::get('/blogs-add', function () {
    return view('blogs.create');
})->middleware(['auth', 'verified'])->name('blogs-add');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('blog-store', [BlogController::class, 'store'])->middleware(['auth', 'verified'])->name('blog-store');
require __DIR__ . '/auth.php';

Route::get('blogs-view', function () {
    // $blogs = json_decode(Http::get('https://api.oas36ty.com/v1/blogs'));
    // $blogs = Blogs::paginate(10);
    $blogs = Blogs::where('status', 'active')->orderBy('created_at', 'desc')->get();
    // $links =  $blogs->data ?? [];
    // return [$blogs,$links];
    // $next_page = $blogs->next_page_url;
    // $prev_page = $blogs->prev_page_url;

    // return $blogs;
    return view('blogs', compact('blogs'));
})->name('blogs-show');
Route::get('mail-temp', function () {
    return view('vendor.html.message');
});
Route::get('company-temp', function () {
    return view('vendor.html.company-message');
});

Route::resource('org_query', OrgQueryController::class)->middleware(['auth', 'verified']);

Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'text/xml');
});
Route::get('blog/{slug}', [BlogController::class, 'fetchBlogsBySlug'])->name('blog-edit');
Route::get('blog/edit/{id}', function ($id) {
    $blog = Blogs::where('id', $id)->with([
        'blog_tags'

    ])->first();
    // $blog = Blogs::where('id',$id)->first();

    // return [$tags,$blog];
    $allTag = [];
    // foreach ($tags as $index => $value) {
    foreach ($blog->blog_tags as $key2 => $cb) {
        $tags = Tag::where('id', $cb['tag_id'])->first();
        if ($tags) {

            $allTag[$key2] = ['name' => $tags->name ?? '', 'url' => $tags->url ?? ''];
        }
    }
    // }
    // return $blogs;
    return view('blogs.edit', compact('blog', 'allTag'));
})->name('blog-edit-form');
Route::patch('blogs/update/{id}', [BlogController::class, 'update'])->name('blogs.update');
Route::get('blogs/disable/{id}', [BlogController::class, 'disable_blogs'])->name('blogs.disable');
Route::get('blogs/delete/{id}', [BlogController::class, 'delete_blogs'])->name('blogs.delete');
// Route::post('blogs-store', [BlogController::class,'store'])->name('blogs.store');

Route::get('book-a-demo', function () {
    return view('book-demo');
})->name('book-demo');
