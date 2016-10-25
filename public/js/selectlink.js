//ready function
$(document).ready(function(){ 
  $(function () {
        $("input[name='linktype']").click(function () {
            if ($("#internal").is(":checked"))
            {   
                $("#internallink").show();
                $("#externallink").hide();
            } 
            else if ($("#external").is(":checked"))
            {   
                $("#externallink").show();
                $("#internallink").hide();
            } 
            else
            {   
                $("#internallink").hide();
                $("#externallink").hide();
            }
        });
    });
});
//end of ready function