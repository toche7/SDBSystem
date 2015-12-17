 
$(document).ready(function(){
    $("#menuTab1").click(function(){
        $("#successStaff").addClass('hidden');
     });
         $("#menuTab2").click(function(){
        $("#successDepartment").addClass('hidden');
     });
    $("#menuTab3").click(function(){
        $("#successStaff").removeClass('hidden');
     });
 
    $("#menuTab4").click(function(){
        $("#successDepartment").toggleClass('hidden');
     });
});
 
