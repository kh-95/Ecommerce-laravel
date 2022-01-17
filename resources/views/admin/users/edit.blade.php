
@extends('admin.index')


@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
      
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
<form action="{{url('admin/'.$user->id)}}" method="post" >

    {{ csrf_field() }}
    <div class="form-control">
<label>Email</label>
    <input type="text" name="email" value="{{$user->email}}" class="form-control"  placeholder="email"/>
  
    <label>Name</label>
    <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="name"/>
   
    <div class="form-group">
        <label> ur level </label>
    
            <select   name="level" class="form-control">

                <option  value="user" >user</option>
                <option  value="vendor">vendor</option>
                <option value="company" >company</option>
            </select>
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="submit" />
        
    
  
</form>
  
  
</div>

</div>

@endsection






