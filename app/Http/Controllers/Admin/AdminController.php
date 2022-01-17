<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\DataTables\AdminDatatable;
use Illuminate\Support\Facades\Hash;

//use AdminDatatable;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( AdminDatatable $admin)
    {
    
    

return $admin->render('admin.admins.index',['title'=>'admin control']);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create',['title'=>'create admin']);
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
            'email' => 'required|email|unique:admins',
            'name' => 'required|string',
            
            'password' => 'required|min:6',
            
          ]);
          $data['password']=Hash::make($request->password);

          Admin::create($data);

          return redirect(url('admin/admin'));

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
        $admin=Admin::find($id);


        return view('admin.admins.edit',compact('admin'));
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
            'email' => 'required|email|unique:admins,id,'.$id,
            'name' => 'required|string',
            
            'password' => 'required|min:6',
            
          ]);

         // dd('khadija');
          if(request()->has('password')){
          $data['password']=Hash::make(request('password'));
          }
          Admin::where('id',$id)->update($data);

         return redirect(url('admin/admin'));

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

            Admin::destroy(request('item'));
        }else{

            Admin::find(request('item'))->delete();
        }

        return redirect(url('admin/admin'));

    }
}
