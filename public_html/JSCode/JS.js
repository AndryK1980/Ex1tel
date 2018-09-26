$(document).ready(function(){
    $('#btn-save').on('click', sendTel);
});
var API_URL = 'http://localhost:8035/Ex1tel/Controllers/Telefon.php'
var sendTel = function(){
    var tel = $('#tel-field').val();
    var var1=$('#var1');
    var var2=$('#var2');
    var var3=$('#var3');
    var err=$('#error');
    tel = tel.replace(/[^а-яА-Яa-zA-Z0-9]/g, '');
    $.ajax({
        url: API_URL,
        method: 'POST',
        dataType: 'json',
        responseType:'json',
        data: {tel: tel},
        success: function(mydata){
            err.text(mydata.err);
            var1.text(mydata.var1);
            var2.text(mydata.var2);
            var3.text(mydata.var3);
        },
        error: function(mydata, status, error,xhr) {
            console.log(status);
          }

    })
};
 