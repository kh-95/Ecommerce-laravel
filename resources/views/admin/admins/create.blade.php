
@extends('admin.index')


@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
<form action="{{url('http://localhost/ecommerce/public/admin/store')}}" method="post">

    {{ csrf_field() }}
    <div class="form-control">
<label>Email</label>
    <input type="text" name="email" value="{{old('email')}}" class="form-control"  placeholder="email"/>
  
    <label>Name</label>
    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="name"/>
   
    <label>ur password</label>
    <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="password"/>
   
    <input type="submit" name="submit" class="btn btn-primary" value="submit" />
    </div>

    
  
</form>
  
  
</div>

</div>

@endsection






