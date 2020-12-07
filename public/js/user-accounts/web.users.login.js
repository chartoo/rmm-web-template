$(document).ready(function(){
    var form=$('#web-user-login');
    form.on("submit",function(e){
        e.preventDefault();
        $.RMMFormSubmit(form).then(response=>{
            console.log("Response",response);
        }).catch(function(err) {
            console.log("Fail",err);
        });
       
    });
});