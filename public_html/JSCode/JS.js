$(document).ready(function(){
    $('#btn-save').on('click', sendTel);
});
var API_URL = 'http://localhost:8035/Ex1tel/Controllers/Telefon.php'
var sendTel = function(){
    var tel = $('#tel-field').val();
    var validErr=$('#massege-err');
    $.ajax({
        url: API_URL,
        method: 'POST',
        dataType: 'json',
        responseType:'json',
        data: {tel: tel},
        success: function(mydata,tel){
            console.log(1);
          // shotUrlInput.attr('href',mydata.myVar);
          // shotUrlInput.text(mydata.myVar);
        },
        error: function(mydata, status, error,xhr) {
            console.log(2);
            // console.log(mydata.statusText);
            // validErr.text(mydata.statusText);
            modalErr();
          }

    })
};
 
var modalErr=function () {
        $("#myModalErr").modal('show');
};