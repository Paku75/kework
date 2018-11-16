///* Remove Item */
////$(window).load(function() {});
////function delete_user() {
////    $("#supprimer").click(function(){
////        console.log("2");
////        alert("Test ok");
//        /*
//        var id = $(this).parent("td").data('id');
//        var c_obj = $(this).parents("tr");
//
//
//        $.ajax({
//            dataType: 'json',
//            type:'POST',
//            url: url + 'api/delete.php',
//            data:{id:id}
//        }).done(function(data){
//            c_obj.remove();
//            toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});
//            getPageData();
//        });
//        */
////
////    });
////};
//
////$(document).on('click', '.edit_test', function(){  
////           var client_id = $(this).attr("id"); 
////           console.log(client_id);
////           $.ajax({  
////                url:"../rhController.php",  
////                method:"POST",  
////                data:{client_id:client_id},  
////                dataType:"json",  
////                success:function(data){  
////                     $('#name').val(data.name);  
////                     $('#address').val(data.address);  
////                     $('#gender').val(data.gender);  
////                     $('#designation').val(data.designation);  
////                     $('#age').val(data.age);  
////                     $('#employee_id').val(data.id);  
////                     $('#insert').val("Update");  
////                     $('#add_data_Modal').modal('show'); 
////                    
////                }  
////           });  
////      }); 
//
//
//$( document ).ready(function() {
//    
//    /* Ajouter un employeur */
//    $(".add_rh").click(function(e){
//        e.preventDefault();
////        var form_action = $("#myModal_add_rh").find("form").attr("action");
//        var nom = $("#myModal_add_rh").find("input[name='nom']").val();
//        var prenom = $("#myModal_add_rh").find("input[name='prenom']").val();
//        var naissance = $("#myModal_add_rh").find("input[name='naissance']").val();
//        var ss = $("#myModal_add_rh").find("input[name='ss']").val();
//        var email = $("#myModal_add_rh").find("input[name='email']").val();
//        var tel = $("#myModal_add_rh").find("input[name='tel']").val();
//        var adresse = $("#myModal_add_rh").find("input[name='adresse']").val();
//        var poste = $("#myModal_add_rh").find("input[name='poste']").val();
//        var date_entree = $("#myModal_add_rh").find("input[name='date_entree']").val();
//        var date_sortie = $("#myModal_add_rh").find("input[name='date_sortie']").val();
//        var departement = $("#myModal_add_rh").find("input[name='departement']").val();
//        var access_interface = $("#myModal_add_rh").find("select[name='access_interface']").val();
//        
////        if(nom != '' && prenom != '' ){ 
//            $.ajax({
//                dataType: 'json',
//                type:'POST',
//                url: 'models/rhModel/add',
//                data:{
//                    nom:nom, 
//                    prenom:prenom,
//                    naissance:naissance,
//                    ss:ss,
//                    email:email,
//                    tel:tel,
//                    adresse:adresse,
//                    poste:poste,
//                    date_entree:date_entree,
//                    date_sortie:date_sortie,
//                    departement:departement,
//                    access_interface:access_interface,
//                },
//                success: function (data) {
////                            $("#create-item").find("input[name='title']").val('');
////                            $("#create-item").find("textarea[name='description']").val('');
////                            getPageData();
//                            toastr.success('Ok', 'Succès', {timeOut: 5000});
//                            $(".modal").modal('hide');
//                            console.log(data);
//                            console.log(nom);
//                        },
//                error: function(data) {
//                            toastr.error('Nope', 'Erreur', {timeOut: 5000});
//                            $(".modal").modal('hide');
//                            console.log(data);
//                }
//            }); 
////        } else {
////            toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});
////        }
//
//
//    });
//    
//});