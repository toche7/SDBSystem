 
$(document).ready(function(){
 
     $("#menuTab1").click(function(){
        $("#successStaff").addClass('hidden');
     });
    $("#menuTab2").click(function(){
        $("#successDepartment").addClass('hidden');
     });
     
     $("#formStaff").submit(function(){
        event.preventDefault();
        $("#successStaff").addClass('hidden');
        $.post("insertcontroller/staff",
       $(this).serialize() ,
        function(data,status){
                 if(data==="success"){
                  $("#successStaff").removeClass('hidden');
            }else
            {
                    alert("Data: " + data + "\nStatus: " + status);   
            }
        });
    
     });
     
    $("#formDepartment").submit(function(){
        event.preventDefault();
        $("#successDepartment").addClass('hidden');
        $.post("insertcontroller/department",
       $(this).serialize() ,
        function(data,status){
         
          if(data==="success"){
                  $("#successDepartment").removeClass('hidden');
            }else
            {
                    alert("Data: " + data + "\nStatus: " + status);              
            }
  
        });
     });
     

     
 
});
 
