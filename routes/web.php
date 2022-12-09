<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
Route::get('/setup',function() {
    $credentials = [
        'email'     =>  'admin@admin.com',
        'password'  =>  'password'
    ];
    if(!Auth::attempt($credentials)) {
        $user = new App\Models\User();
        $user->name     = 'Admin';
        $user->email    = $credentials['email'];
        $user->password = Hash::make($credentials['password']);

        $user->save();
        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            $adminToken = $user->createToken('admin-token',['create','update','delete']);
            $updateToken = $user->createToken('update-token',['create','update']);
            $basicToken = $user->createToken('admin-basic',['read-only']);

            return [
                'admin' =>  $adminToken->plainTextToken,
                'update' =>  $updateToken->plainTextToken,
                'basix' =>  $basicToken->plainTextToken,
            ];
        }
    }
});

/*
Tokens:
{
    "admin": "1|CUf70FCtsHGuz1LBtMzAVHNbqasE4XXd86BLPcCX",
    "update": "2|qkvo2aLg3Q4Tjky0Kcw6wPTAU3j6AJL9M4wdByqa",
    "basix": "3|p5Xjz7bR00mKmcS3bLS04OljOweaKUx4EnRZoGMG"
}

*/