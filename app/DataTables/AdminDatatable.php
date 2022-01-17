<?php


namespace App\DataTables;
use App\Admin;
//use Yajra\DataTables\DataTables;
use Yajra\DataTables\Services\DataTable;

class AdminDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
        ->addColumn('checkbox', 'admin.admins.btn.checkbox')
            ->addColumn('edit', 'admin.admins.btn.edit')
            
            ->addColumn('delete', 'admin.admins.btn.delete')
            ->rawColumns([
                'edit',
                'delete',
                'checkbox'
               
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
      return  Admin::query();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->addAction(['width' => '80px'])
                   ->parameters([ 
                         'dom'          => 'Blfrtip',
                   'buttons'      => ['export' , 'print', 
                   'reset',
                    'reload',
                    ['text'=>'<i class="fa fa-plus">Create Admins</i>','className'=>'btn btn-primary',
                
                    "action"=> "function(){

                        window.location.href =' http://localhost/ecommerce/public/admin/create';
                        
                    }"],
                    ['text'=>'<i class="fa fa-trash">Delete All</i>','className'=>'btn btn-danger delBtn'],
                    
                    
                    ]
                       ,
                       
                   'initComplete' => "function () {
                       this.api().columns([2,3,4,5]).every(function () {
                           var column = this;
                           var input = document.createElement(\"input\");
                           $(input).appendTo($(column.footer()).empty())
                           .on('keyup', function () {
                               column.search($(this).val(), false, false, true).draw();
                           });
                       });
                   }",
                ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [
                'name'=>'checkbox',
                'data'=>'checkbox',
                'title'=>'<input type="checkbox" class="checkall" onclick="check_all()" />',
                'searchable'=>false,
                'exportable'=>false,
                'orderable'=>false,
                'printable'=>false
],
            [
                'name'=>'id',
                'data'=>'id',
                'title'=>'ID'
],
[
    'name'=>'name',
    'data'=>'name',
    'title'=>'Name'
],
[
    'name'=>'email',
    'data'=>'email',
    'title'=>'Email'
],
[
'name'=>'created_at',
    'data'=>'created_at',
    'title'=>'created_at'
],
[
    'name'=>'updated_at',
    'data'=>'updated_at',
    'title'=>'updated_at'
],
[
    'name'=>'edit',
    'data'=>'edit',
    'title'=>'Edit',
    'searchable'=>false,
    'exportable'=>false,
    'orderable'=>false,
    'printable'=>false
    
],
[
    'name'=>'delete',
    'data'=>'delete',
    'title'=>'Delete',
    'searchable'=>false,
    'exportable'=>false,
    'orderable'=>false,
    'printable'=>false
],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Admin_' . date('YmdHis');
    }
}
