(function($) {
    $.extend({
        RMMFormSubmit: function(form) {
            return new Promise(function(resolve, reject) {
               $.ajax({
                    type:form.attr("method"),
                    url:form.attr("action"),
                    data:form.serialize(),
                    dataType: 'json',
                    success:function(data){
                        resolve(data) 
                    },
                    error:function(err){
                        reject(err) 
                    }
                });
            });
        },
        RMMUserLoginStatus:function(loggedIn){
                if (loggedIn){
                    $('#web-user-login-status .guest-user').remove();
                }
                else{
                    $('#web-user-login-status .current-user').remove();
                }
        }
    });
}(jQuery));
