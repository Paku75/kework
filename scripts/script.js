/* Remove Item */
//$(window).load(function() {});
function delete_user() {
    $("#supprimer").click(function(){
        console.log("2");
        alert("Test ok");
        /*
        var id = $(this).parent("td").data('id');
        var c_obj = $(this).parents("tr");


        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + 'api/delete.php',
            data:{id:id}
        }).done(function(data){
            c_obj.remove();
            toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            getPageData();
        });
        */

    });
};

$(document).on('click', '.edit_test', function(){  
           var client_id = $(this).attr("id"); 
           console.log(client_id);
//           $.ajax({  
//                url:"../rhController.php",  
//                method:"POST",  
//                data:{client_id:client_id},  
//                dataType:"json",  
//                success:function(data){  
//                     $('#name').val(data.name);  
//                     $('#address').val(data.address);  
//                     $('#gender').val(data.gender);  
//                     $('#designation').val(data.designation);  
//                     $('#age').val(data.age);  
//                     $('#employee_id').val(data.id);  
//                     $('#insert').val("Update");  
//                     $('#add_data_Modal').modal('show'); 
//                    
//                }  
//           });  
      }); 