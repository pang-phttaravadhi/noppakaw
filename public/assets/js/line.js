$(window).on('load',function(){
    liff.init(
        data => {
            liff.getProfile()
            .then(profile => {
            Helper.ajax ('/liff/login','POST',{
                line_id:profile.userId,
                displayname:profile.displayName,
                pictureurl:profile.pictureUrl
            },function(result){
            })   
            })
            .catch((err) => {
            });
        },
        err => {
            // LIFF initialization failed
        }
        );
    });

