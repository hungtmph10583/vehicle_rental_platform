<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
// use App\Models\RecentPersonalLogin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
// use App\Http\Requests\Auth\ChangePasswordRequest;
// use App\Models\PasswordReset;

class AuthController extends Controller
{
    public function loginForm()
    {
        if(!Auth::check()) return view('auth.login');
        // return redirect(route('frontend.home'))->withInput()->with('warning', "!!!");
        return back()->with('error', "Đã có lỗi sảy ra!");
    }
    
    public function handleLogin(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        
        if (!$user) { return back()->withInput()->with('warning', "Tài khoản hoặc mật khẩu không chính xác!"); }

        if ($user->status == 2) { return back()->withInput()->with('error', "Tài khoản của bạn chưa được kích hoạt"); }
        if ($user->status == 3) { return back()->withInput()->with('error', "Tài khoản của bạn đang bị khóa, vui lòng liên hệ Admin để được hỗ trợ!"); }

        if ($this->attempt($user, $request)) {
            if ($user->hasRole('Administrator')) { return redirect(route('backend.dashboard')); }
            return redirect(route('frontend.home'));
        }

        return back()->withInput()->with('warning', "Tài khoản hoặc mật khẩu không chính xác!");
    }

    public function registerForm()
    {
        if(!Auth::check()) { return view('auth.register'); }
        return redirect(route('frontend.home'))->withInput()->with('warning', "!!!");
    }
    
    public function handleRegister(RegisterRequest $request)
    {
        $user = User::create([
            'name'      => ucwords($request['name']),
            'email'     => Str::lower($request['email']),
            'password'  => Hash::make($request['password']),
            'avatar'    => 'theme\backend\assets\app\media\img\users\user_black_w.png',
            'status'    => 1,
        ]);

        if ($this->attempt($user, $request)) {
            return redirect(route('frontend.home'));
        }
        
        return back()->withInput()->with('error', "Máy chủ không thể phản hồi yêu cầu này!");
    }

    protected function attempt($user, $request)
    {
        if ($user && Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) {
            $user->createToken($user->id)->plainTextToken;
            // $this->updateLastLogin($user, $request);
            return true;
        }
        return false;
    }

    public function logout()
    {
        $user = User::find(Auth::user()->id);
        $user->tokens()->delete();
        Auth::logout();
        return redirect(route('frontend.home'));
    }

    // public function updateLastLogin($user, $request)
    // {
    //     // Cập nhật hoặc tạo mới dữ liệu trong bảng personal
    //     RecentPersonalLogin::updateOrCreate(
    //         ['user_id' => $user->id], // Điều kiện tìm kiếm
    //         [ // Dữ liệu để cập nhật hoặc tạo mới
    //             'last_login_ip' => $request->getClientIp(),
    //             'last_login_at' => Carbon::now()->toDateTimeString()
    //         ]
    //     );
    // }
}
