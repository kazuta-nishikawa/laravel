<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreMemberForm;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        
        return view("member.index",compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("signin.form");
    }

    public function confirm(StoreMemberForm $request)
    {
        $formItems = ['name_sei','name_mei','nickname','gender','password','email'];
        $member = $request->only($formItems);
        $request->session()->put("member", $member);
        $member = $request->session()->get("member");
        return view("signin.confirm",compact('member'));
    }

    public function complete(Request $request)
    {
        $input = $request->session()->get('member');
        $member = new Member;
        $member->name_sei = $input['name_sei'];
        $member->name_mei = $input['name_mei'];
        $member->nickname = $input['nickname'];
        $member->gender = $input['gender'];
        $password = $input['password'];
            $hashed = Hash::make($password,['rounds' => 12,]);
            $member->password = $hashed;
        $member->email = $input['email'];

        $member->save();
        // $request->session()->regenerateToken();
        return view('signin.complete');
        // return redirect('signin.complete');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
