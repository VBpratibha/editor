//ready function
$(document).ready(function(){
 

 //function to show title in url input field
      
    
//validate signup form on keyup and submit 
    $("#testimonialEdit").validate({
//strating of rules  
        rules: {
            title: { 
                required: true,
                maxlength: 30
                 
            }, 
            description: {
                required: true,
                maxlength: 200
                 
            }, 
               
        }, 
//end of rules
//strating of messages
        messages: {
            title: {
                required: "Enter title ",
                maxlength:"Maximume 30 letters is allow"
            },
            description:{

                required: "Enter description ",
                maxlength:"Maximume 200 letters is allow"
            },
            
             
        },
         
        highlight: function (element) {
            $(element).addClass('error')
        },
        unhighlight: function (element) {
            $(element).removeClass('error')
        }
//end of messages
    });
//end of validation function


//validate signup form on keyup and submit 
    $("#testimonialAdd").validate({

//strating of rules  
        rules: {
            title: { 
                required: true,
                maxlength: 30
                 
            }, 
            description: {
                required: true,
                maxlength: 200
                 
            }, 
               
        }, 
//end of rules
//strating of messages
        messages: {
            title: {
                required: "Enter title ",
                maxlength:"Maximume 30 letters is allow"
            },
            description:{

                required: "Enter description ",
                maxlength:"Maximume 200 letters is allow"
            },
            
             
        },
         
        highlight: function (element) {
            $(element).addClass('error')
        },
        unhighlight: function (element) {
            $(element).removeClass('error')
        }
//end of messages
    });
//end of validation function
 
});
//end of ready function