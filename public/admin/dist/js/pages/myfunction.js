function check_all(){

$('input[class="item"]:checkbox').each( function () {
    
if($('input[class="checkall"]:checkbox:checked').length==0)
{

$(this).prop('checked',false);


}else{

    $(this).prop('checked',true);


}



} );


}

function delete_all(){

    $(document).on('click','.del_all',function(){

        $('#form_data').submit();

    });

    $(document).on('click','.delBtn',function(){

        var item_checked = $('input[class="item"]:checkbox').filter(":checked").length;

       // alert(item_checked);
        if(item_checked > 0){

            $('.record_count').text(item_checked );
        }else{
            $('.record_count').text(' ');

        }



$('#multibledelete').modal('show');

    })

}


