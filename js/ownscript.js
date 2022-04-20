$(document).ready(function()  {



    $("#verify_ajax").on('click', function(){
    
    $.ajax({
    
        type:'POST',
        url:'web_services/register.php',
        success:function(result){
            alert(result);
        }
    });
    
    
    
    
    });
    
    })
    



