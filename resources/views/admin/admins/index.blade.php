
@extends('admin.index')


@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

    
      <form id="form_data" action="{{route('delete')}}" method="get">
       
     
        {{ $dataTable->table([


'class'=>'dataTable table table-bordered table-hover'
        ],true)}}
    </div>
    <!-- /.card-body -->
  </form>
  </div>

<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="multibledelete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
        
<div class="alert alert-danger ">
  <h1> please check some records </h1>
  <h1 >Are you sure to delete <span class="record_count" ></span> ?</h1>
  
</div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" value="Yes"  class="btn btn-danger del_all" name="del_all"/>
      </div>
    </div>

  </div>
</div>












@push('js')
    
<script>
delete_all();
  </script>

{!! $dataTable->scripts() !!}

@endpush
@endsection






