$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var Helper = {};
Helper.ajax = function(url,method,params,callback){
    if(typeof params ==='object'){
        if(method !='GET'){
            params['_method']=method
        }
    } else if(typeof params ==='string'){
        if(method !='GET'){
            params+='&_method='+method
        } 
    }
    $.ajax({
        url:url,
        type:method,
        dataType:'json',
        data:params,
        statusCode:
        {
            500:function(){
                alert('ขออภัยค่ะ ระบบเกิดความผิดพลาด');
            },
            400:function(response){
                alert(response.responseJSON.message);
        }
    },
        success:function(response){
            if(typeof callback==='function'){
                callback(response);
            }
            else{
                alert(response.message);
            }
        }
    });

}