var Helper = {};
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
(function( $ ) {
    var token = $('meta[name="csrf-token"]').attr('content');
    $.fn.upload = function () {
        var $el = $(this);
        var ext = $el.attr('data-ext');
        var callback = $el.attr('data-callback');
        if(!ext) ext="";
        new ss.SimpleUpload({
            button: $el.get(0),
            url: '/upload',
            allowedExtensions: ext.split(','),
            name: 'userfile',
            multipart: true,
            multiple: false,
            responseType: 'json',
            data:{'_token':token},
            onComplete: function( filename, response )
            {
                if(response.status!=200)
                {
                    alert(response.message);
                    return false;
                }
                else
                {
                    window[callback](response,$el);
                }
            }
        });
    }
    if($('.upload').length > 0){
        $('.upload').upload();
    }
}( jQuery ));
Helper.ajax = function(url,method,params,callback){
    if(typeof params ==='object'){
        if(method !='GET'){
            params['_method']=method
        }
    } else if(typeof params ==='string'){
        if(method !='GET'){
            if(params==''){
                params+='_method='+method ;
            }else{
                params+='&_method='+method;
            }
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
$(function(){
    $('.form-ajax').on('submit',function(e){
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        var method = form.attr('method');
        var data = form.serialize();
        var callback = form.attr('callback');
        if (typeof callback !=='string'){
            callback = function (response){
                alert(response.message);
                if(typeof response.url==='string' && response.url!=''){
                    window.location.href=response.url;
                }else{
                    window.location.reload();
                }
            }
        }
        Helper.ajax (url,method,data,callback)
    });
    $('.deleted-item').on('click',function(e){
        e.preventDefault();
        if(confirm('ท่านต้องการจะลบรายการนี้ใช่หรือไม่')){
            var el = $(this);
            var url = el.attr('href');
            var method = 'DELETE';
            var data = '';
                callback = function (){
                    alert('ระบบได้ลบข้อมูลเรียบร้อยแล้ว');
                    window.location.reload();
                }
            Helper.ajax (url,method,{_token:$('meta[name="csrf-token"]').attr('content'),_method:'delete'},callback)   
        }
        
    });
    $('.add-shoppingcart').on('click',function(e){
        e.preventDefault();
        var el = $(this);
        var url = el.attr('href');
        var method = 'POST';
        var data = '';
        callback = function (){
            alert('ระบบได้เพิ่มสินค้าลงในตะกร้าเรียบร้อยแล้วค่ะ');
            window.location.reload();
        }
        Helper.ajax (url,method,{_token:$('meta[name="csrf-token"]').attr('content'),_method:'POST'},callback)   
    });

});

