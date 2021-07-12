<?php

namespace App\Http\Controllers;

use App\Models\AdminUserRole;
use Illuminate\Http\Request;

class AdminUserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adminUser.Role.addRole');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            "admin_role_name"=>"required",
        ],[
            "admin_role_name.required"=>"Rolename name is Required !"
        ]);

        $AdminUserRole = new AdminUserRole();
        $AdminUserRole->admin_role_name = $request->admin_role_name ;

        $AdminUserRole->save();

        if($AdminUserRole){
            return redirect()->back()->with('success','Insert Successful !');
        }else{
            return redirect()->back()->with('danger','Unable To insert !');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $allRoles = AdminUserRole::where('admin_role_status','1')->orderBy('admin_role_id', 'DESC')->get();
        return view('admin.adminUser.Role.AllRole',compact('allRoles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminUserRole  $adminUserRole
     * @return \Illuminate\Http\Response
     */
    public function show(AdminUserRole $adminUserRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminUserRole  $adminUserRole
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminUserRole $adminUserRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminUserRole  $adminUserRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminUserRole $adminUserRole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminUserRole  $adminUserRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminUserRole $adminUserRole)
    {
        //
    }
}
