<?php

use App\Models\Food;
use App\Models\FoodType;
use App\Models\Drink;
use App\Models\DrinkType;
use App\Models\User;
use App\Models\Post;
use App\Models\Table;
use Dotenv\Regex\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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
    Redirect::route('login');
});

Route::resource('admin/drinks','DrinkController', ['names' => 'admin.drinks'] )->middleware('admin');

Route::resource('admin/drinktypes','DrinkTypeController', ['names' => 'admin.drinktypes'] )->middleware('admin');

Route::resource('admin/foods','FoodController', ['names' => 'admin.foods'] )->middleware('admin');

Route::resource('admin/foodtypes','FoodTypeController', ['names' => 'admin.foodtypes'] )->middleware('admin');

Route::resource('admin/tables','TableController', ['names' => 'admin.tables'] )->middleware('admin');

Route::post('admin/tables/{id}/edit-status/{status}','TableController@editStatus')->name('admin.tables.edstatus')->middleware('admin');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admins/login', 'AdminController@showLoginForm')->name('admins.login');

Route::post('/admins/login', 'AdminController@login')->name('admins.login');

Route::get('/admins/logout', 'AdminController@logout')->name('admins.logout');

Route::get('/posts/create', 'PostController@create')->name('posts.create')->middleware('auth');

Route::post('/posts', 'PostController@store')->name('posts.store')->middleware('auth');

Route::get('/posts/{id}', 'PostController@show')->name('posts.show');


// Food Route

Route::get('/foods/create', 'FoodController@create')->name('admin.foods.create');

Route::get('/menu', function () {
    $food_types = FoodType::with('foods')->get();

    return view('menu')->with('food_types', $food_types);
})->name('menu');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');



Route::get('/drink', function () {
    $drink_types = DrinkType::with('drinks')->get();
    // return $drink_types;
    return view('drink')->with('drink_types', $drink_types);
})->name('drink');

Route::get('/table', function () {
    $tables = Table::all();

    return view('table')->with('tables', $tables);
})->name('table');

// Route::get('/hello', function () {
//     return "<p>Hello world</p>";
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::post('/login', function () {
//     return view('index');
// });

// Route::post('/login', function (Request $request) {
//     return $request ->all();
// });

// Route::get('/user/{id}', function ($id) {
//     return "id cua User la:" . $id;
// });

// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         return "This is Admin user";
//     });
//     Route::get('management', function () {
//         return "This is Admin management";
//     });
// });

// Route::get('/users', function () {
//     $users = User::all();
//     return $users;
// });

// Route::get('/users/{id}/edit', function ($id) {
//     $user = User::findOrFail($id);
//     return view('edit_user')->with(["user" => $user]);
// })->name('users.edit');

// Route::put('/users/{id}', function ($id,Request $request) {
//     $success = false;
//     $user = User::findOrFail($id);
//     if ($user != null){
//         $user->password = $request->password;
//         $user->save();
//         $success = true;
//     }
//     return Redirect::route('users.index')->with(['success'=>'Cập nhật thành công!']);
// })->name('users.update');

// Route::get('/add-user', function () {
//     $inputs = ['user_name' => 'truong','password' => '123456'];
//     $user = User::create($inputs);
//     return $user;
// });

// Route::delete('/user/{id}', function ($id) {
//     $success = false;
//     $user = User::find($id);

//     if ($user != null){
//         $user->delete();
//         $success = true;
//     }

//     $users = User::all();

//     return Redirect::back()->with('success' , $success);
// })->name('deleteuser');

// Route::get('/change-password', function () {
//     return view('change_password');
// });

// Route::get('/change-id-password', function () {
//     return view('change_id_password');
// });

// Route::get('/users/reisgner', function () {
//     return view('resigner');
// })->name('users.resigner');

// Route::post('/resigner', function (Request $request) {
//     $inputs = array('user_name' => $request->username, 'password' => $request->password);
//     $users = User::all();
//     $success = false;
//     foreach ($users as $user) {
//         if ($user->user_name == $request->username) {
//             echo "Tài khoản đã tồn tại";
//             $success = false;
//         } else {
//             $success = true;
//         }
//     }
//     //Xét trường hợp tài khoản đã tồn tại hay chưa
//     if ($success) {
//         if ($request->password == $request->password_again) {
//             //Xét mật khẩu nhập lại xem có đúng hay k;
//             $success = true;
//             User::create($inputs);
//             return Redirect::route('users.resigner')->with(['complete' => 'Tạo tài khoản thành công!']);
//             //create tài khoản tương ứng với array inputs
//         } else {
//             echo "Nhập lại mật khẩu không đúng!";
//         }
//     }
// });

// Route::post('/change-id-password', function (Request $request) {
//     $success = false;

//     $user = User::find(7);

//     if ($user != null){
//         $user->user_name = $request->user_name;
//         $user->password = $request->password;
//         $user->save();
//         $success = true;
//     }
//     if($success){
//         echo "Đã cập nhật mật khẩu thành công";
//     }else{
//         echo "Không cập nhật thành công";
//     }
// });




// Route::post('/change-password', function (Request $request) {
//     $success = false;

//     $user = User::find(6);

//     if ($user != null){
//         $user->password = $request->password;
//         $user->save();
//         $success = true;
//     }

//     if($success){
//         echo "Đã cập nhật mật khẩu thành công";
//     }else{
//         echo "Không cập nhật thành công";
//     }
// });
