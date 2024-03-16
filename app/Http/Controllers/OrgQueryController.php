<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrgQuery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;



class OrgQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arr = OrgQuery::all();
        $blogs = [];
        foreach ($arr as $key => $value) {
             if((Schema::hasTable('onboardings'))){
            $emailFirst = DB::table('onboardings')->where('email', $value['email'])->first();
             }
            $blogs[] = [
                'id' => $value['id'],
                 'name' => $value['name'],
        'url' => $value['url'],
        'full_name' => $value['full_name'],
        'email' => $value['email'],
        'mobile' => $value['mobile'],
        'otp' => $value['otp'],
        'employees' => $value['employees'],
        'signup_token' => $value['signup_token'],
        'created_at' => $value['created_at'],
        'status' => $emailFirst->status ?? '',

            ];
        }
        // return $blogs;
        return view('orgQuery.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
