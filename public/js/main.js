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
        }
    });
}(jQuery));
