 
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
     
     $("#formStaff").submit(function(){
    alert("Submitted Staff Form");
     });
     
    $("#formDepartment").submit(function(){
        event.preventDefault();
        $.post("insertcontroller/department",
        {
          dname: "Donald Duck"
        },
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
            if(status==="success"){
                  $("#successDepartment").removeClass('hidden');
            }
        });
     });
     
 
});
 
