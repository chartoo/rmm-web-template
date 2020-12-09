$(document).ready(function(){
   
    var form=$('#web-user-login');
    form.on("submit",function(e){
        e.preventDefault();
        $.RMMFormSubmit(form).then(response=>{
            console.log("Response",response);
            if(response.success){
                $('#error-alert').attr("hidden");
                $('#web-current-name').html("Current User");
                $('#popupLoginModal').modal('toggle');
               window.location.reload();
            } else{
                $('#error-alert').removeAttr("hidden").show();
            }
           
        }).catch(function(err) {
           $('#error-alert').removeAttr("hidden").show();
        });
    });

    $('#user-dropdown-toggle').click(function(){
      if($('.user-dropdown-content').hasClass("show"))
      $('.user-dropdown-content').removeClass("show d-inline-block").addClass("d-none");
        else $('.user-dropdown-content').addClass("show d-inline-block").removeClass("d-none");
    });
    
});