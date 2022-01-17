<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\DataTables\UsersDatatable;
use Illuminate\Support\Facades\Hash;

//use AdminDatatable;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( UsersDatatable $user )
    {
    
    

return $user->render('admin.users.index',['title'=>'user control']);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create',['title'=>'create user']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$this->validate($request,
        [    
            'email' => 'required|email|unique:users',
            'name' => 'required|string',
            'level'=>'required|in:user,vendor,company',
           
            
            'password' => 'required|min:6',
            
          ]);

    //      dd($data);
          $data['password']=Hash::make($request->password);

          User::create($data);

         return redirect(url('admin/users'));

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
        $user=User::find($id);


        return view('admin.users.edit',compact('user'));
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
        $data=$this->validate($request,
        [    
            'email' => 'required|email|unique:users,id,'.$id,
            'name' => 'required|string',
            'level'=>'required|in:user,vendor,company',
            
            
          ]);

         // dd('khadija');
        //   if(request()->has('password')){
        //   $data['password']=Hash::make(request('password'));
        //   }
          User::where('id',$id)->update($data);

         return redirect(url('admin/users'));

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

    public function multidelete(){

        if(is_array(request('item'))){

           User::destroy(request('item'));
        }else{

            User::find(request('item'))->delete();
        }

        return redirect(url('admin/users'));

    }
}
