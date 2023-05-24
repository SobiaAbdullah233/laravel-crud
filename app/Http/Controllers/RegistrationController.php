<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create(){
       return view('creatform');

    }

    public function store(RegistrationRequest $request)
    // public function store(Request $request)
    {
        // dd($request->all());
        Registration::create($request->all());
        return redirect('index')->with('msg', 'Data added successfully');

    }


    public function index(){
        $users=  Registration::get()->all();
        return view('index_all', compact('users'));

        // $data['users']=  Registration::get()->all();
        // return view('index_all')->with($data);


     }
     public function edit($id){
        $user = Registration::find($id);
        // dd($user);
        return view('edit', compact('user'));
        // $student = StudentModel::findOrFail($id);
        // return view('edit',compact('student'));

     }
     public function update(RegistrationRequest $request ,$id ){
        // $user=Registration::create($request->findOrFail($id));
        // $user=Registration::create($request->all($id));
        $user=Registration::find($id);
        $user->update($request->all());
        // return view('index_all',compact('user'));
        // dd($user);
        return redirect('index')->with('msg', 'Data updated successfully');

     }

}
