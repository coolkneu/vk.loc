$(document).ready(function(){

    $("#loginform").validate({
        
       rules:{ 
        
            login:{
                required: true,
            },
            
            email:{
                required: true,
            },
			
			 date:{
                required: true,
            },
			
			 pass:{
                required: true,
            },
       },
       
       messages:{
        
            login:{
                required: "Поле не заполнено",                
            },
            
            email:{
                required: "Поле не заполнено",                
            },
			
			date:{
                required: "Поле не заполнено",              
            },
        
			pass:{
                required: "Поле не заполнено",
            },
       }
        
    });


}); //end of ready