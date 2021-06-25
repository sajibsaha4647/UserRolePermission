<?php

namespace App\Http\Controllers;

use App\Models\AdminPermission;
use Illuminate\Http\Request;

class AdminPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adminUser.Permissions.addPermission');
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
     * @param  \App\Models\AdminPermission  $adminPermission
     * @return \Illuminate\Http\Response
     */
    public function show(AdminPermission $adminPermission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminPermission  $adminPermission
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminPermission $adminPermission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminPermission  $adminPermission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminPermission $adminPermission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminPermission  $adminPermission
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminPermission $adminPermission)
    {
        //
    }
}
