<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function fake_data()
    // {
    //     User::create([
    //         'name'      => 'Master',
    //         'username'  => 'hung.tm',
    //         'email'     => 'hungtmph10583@gmail.com',
    //         'password'  => Hash::make('123123'),
    //         'avatar'    => 'theme\backend\assets\app\media\img\users\user_girl_1.png'
    //     ]);
    //     User::create([
    //         'name'      => 'Vân Anh',
    //         'username'  => 'anh.ntv',
    //         'email'     => 'nguyenthivananh@gmail.com',
    //         'password'  => Hash::make('123456'),
    //         'avatar'    => 'theme\backend\assets\app\media\img\users\user_girl_1.png'
    //     ]);
    //     User::create([
    //         'name'      => 'Lê Thị Hân',
    //         'username'  => 'han.lt',
    //         'email'     => 'hanlt@gmail.com',
    //         'password'  => Hash::make('123456'),
    //         'avatar'    => 'theme\backend\assets\app\media\img\users\user_girl_1.png'
    //     ]);
    //     User::create([
    //         'name'      => 'Mai Thị Loan',
    //         'username'  => 'loan.mt',
    //         'email'     => 'loanmt@gmail.com',
    //         'password'  => Hash::make('123456'),
    //         'avatar'    => 'theme\backend\assets\app\media\img\users\user_girl_1.png'
    //     ]);
    //     User::create([
    //         'name'      => 'Nguyễn Thùy Vân',
    //         'username'  => 'van.nt',
    //         'email'     => 'vannt@gmail.com',
    //         'password'  => Hash::make('123456'),
    //         'avatar'    => 'theme\backend\assets\app\media\img\users\user_girl_1.png'
    //     ]);User::create([
    //         'name'      => 'Nguyễn Thị Thu Hiền',
    //         'username'  => 'hien.ntt',
    //         'email'     => 'hienntt@gmail.com',
    //         'password'  => Hash::make('123456'),
    //         'avatar'    => 'theme\backend\assets\app\media\img\users\user_girl_1.png'
    //     ]);User::create([
    //         'name'      => 'Nguyễn Tuấn Anh',
    //         'username'  => 'anh.nt',
    //         'email'     => 'anhnt@gmail.com',
    //         'password'  => Hash::make('123456'),
    //         'avatar'    => 'theme\backend\assets\app\media\img\users\user_girl_1.png'
    //     ]);
    //     User::create([
    //         'name'      => 'Nguyễn Đăng Đức',
    //         'username'  => 'duc.nd',
    //         'email'     => 'ducnd@gmail.com',
    //         'password'  => Hash::make('123123'),
    //         'avatar'    => 'storage/uploads/users/67ac2f93cf09a-pisco.jpg',
    //     ]);User::create([
    //         'name'      => 'Lưu Tuấn Đạt Hào',
    //         'username'  => 'hao.ltd',
    //         'email'     => 'haoltd@gmail.com',
    //         'password'  => Hash::make('123123'),
    //         'avatar'    => 'storage/uploads/users/67ac301501cdd-vodka.jpg',
    //     ]);
    //     User::create([
    //         'name'      => 'Đàm Thị Thu Trang',
    //         'username'  => 'trang.dtt',
    //         'email'     => 'trangdtt@gmail.com',
    //         'password'  => Hash::make('123123'),
    //         'avatar'    => 'theme\backend\assets\app\media\img\users\300_4.jpg',
    //     ]);User::create([
    //         'name'      => 'Trương Mỹ Hạnh',
    //         'username'  => 'hanh.tm',
    //         'email'     => 'hanhtm@gmail.com',
    //         'password'  => Hash::make('123123'),
    //         'avatar'    => 'theme\backend\assets\app\media\img\users\300_7.jpg',
    //     ]);
    //     dd(User::get());
    // }

    public function index()
    {
        return view('backend.user.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        if (!$user) { return 'ss'; }
        return view('backend.user.show', compact($user));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
