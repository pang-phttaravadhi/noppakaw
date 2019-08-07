(function( $ ) {
    
    liff.init(
        data => {

            // Now you can call LIFF API
            const userId = data.context.userId;
            Helper.ajax ('/liff/login','POST',{}.attr('content'),_method:'delete'},callback)   
        },
        err => {
            // LIFF initialization failed
        }
        );
});

