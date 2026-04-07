<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        view()->share('activeDashboard', TRUE);
    }
    // public function fake_permission()
    // {
    //     Permission::create(['name' => 'create users']); // Admin
    //     Permission::create(['name' => 'update users']); // Admin
    //     Permission::create(['name' => 'delete users']); // Admin
    //     Permission::create(['name' => 'view users']);   // Admin

    //     Permission::create(['name' => 'create bookings']); //Customer
    //     Permission::create(['name' => 'update bookings']); // Admin, Staff, Customer
    //     Permission::create(['name' => 'delete bookings']); // Admin
    //     Permission::create(['name' => 'cancel bookings']); // Admin, Staff, Customer
    //     Permission::create(['name' => 'view bookings']);  // Admin, Staff, Customer

    //     Permission::create(['name' => 'create cars']); // Admin, Staff
    //     Permission::create(['name' => 'update cars']); // Admin, Staff
    //     Permission::create(['name' => 'delete cars']); // Admin
    //     Permission::create(['name' => 'view cars']);   // Admin, Staff

    //     Permission::create(['name' => 'create promotions']); // Admin
    //     Permission::create(['name' => 'update promotions']); // Admin
    //     Permission::create(['name' => 'delete promotions']); // Admin
    //     Permission::create(['name' => 'view promotions']);   // Admin

    //     /** Quan ly thanh toan & tai chinh */
    //     Permission::create(['name' => 'manage payments']);  // Admin
    //     Permission::create(['name' => 'view payments']);    // Admin, Staff

    //     // Admin ẩn các đánh giá vi phạm tiêu chuẩn
    //     Permission::create(['name' => 'view reviews']);     // Admin, Staff
    //     Permission::create(['name' => 'moderate reviews']); // Admin, Staff
    // }

    public function dashboard()
    {
        // Role::create(['name' => 'Admin']);
        // Role::create(['name' => 'Staff']);
        // Role::create(['name' => 'Customer']);
        // $user = User::find(1);
        // $user->assignRole('Admin');
        $users = User::get();
        return view('backend.page.dashboard', compact($users));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
