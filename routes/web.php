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
    return view('welcome');
});

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::view('/auth', 'auth')->name('auth');

Route::get('/product/{id?}', function ($id = 1) {
    // Simulated Product Database
    $products = [
        1 => [
            'name' => 'Petal Stud Earrings',
            'price' => '125,000',
            'image' => 'shop-earrings.png',
            'category' => 'Earrings',
            'metal' => '18k Gold',
            'description' => 'Delicate petal-shaped studs that sit elegantly on the earlobes. Crafted from solid 18k gold, these earrings capture the fleeting beauty of a spring blossom frozen in time.',
            'reviews' => 24,
            'rating' => 5
        ],
        2 => [
            'name' => 'Willow Branch Bracelet',
            'price' => '89,000',
            'image' => 'shop-bangle-1.png',
            'category' => 'Bracelets',
            'metal' => 'Sterling Silver',
            'description' => 'Inspired by the flexible strength of willow branches. This sterling silver bracelet features intricate texturing that mimics natural wood grain, wrapping comfortably around the wrist.',
            'reviews' => 18,
            'rating' => 4.5
        ],
        3 => [
            'name' => 'Morning Dew Pendant',
            'price' => '210,000',
            'image' => 'shop-bracelet.png',
            'category' => 'Necklaces',
            'metal' => '18k Gold',
            'description' => 'A single perfect droplet of diamond set in 18k gold. The Morning Dew Pendant represents clarity and new beginnings, hanging suspended like a water droplet on a leaf.',
            'reviews' => 42,
            'rating' => 5
        ],
        4 => [
            'name' => 'Fern Leaf Ring',
            'price' => '95,000',
            'image' => 'shop-bangle-2.png',
            'category' => 'Rings',
            'metal' => 'Rose Gold',
            'description' => 'The unfurling fronds of a fern leaf, immortalized in rose gold. This ring wraps the finger in organic elegance, symbolizing growth and resilience.',
            'reviews' => 31,
            'rating' => 4.8
        ],
        5 => [
            'name' => 'Luna Hoops',
            'price' => '45,000',
            'image' => 'shop-earrings.png', // Note: Using same image, handled via CSS filter in shop, here we might just show standard
            'category' => 'Earrings',
            'metal' => 'Sterling Silver',
            'description' => 'Classic silver hoops with a hammered finish that catches the moonlight. Simple, timeless, and perfect for everyday elegance.',
            'reviews' => 56,
            'rating' => 4.7
        ],
        6 => [
            'name' => 'Forest Emerald Necklace',
            'price' => '320,000',
            'image' => 'cat-necklace.png',
            'category' => 'Necklaces',
            'metal' => '18k Gold',
            'description' => 'A deep green emerald lies at the heart of this masterpiece. Surrounded by 18k gold filigree, it evokes the deep, mysterious beauty of an ancient forest.',
            'reviews' => 12,
            'rating' => 5
        ]
    ];

    // Default to product 1 if ID not found or null
    $product = $products[$id] ?? $products[1];

    // Pass related products (just excluding current one)
    $related = array_filter($products, function($key) use ($id) {
        return $key != $id;
    }, ARRAY_FILTER_USE_KEY);

    return view('product-details', compact('product', 'related'));
})->name('product.show');
