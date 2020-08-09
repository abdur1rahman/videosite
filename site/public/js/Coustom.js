
    $('#sendContact').click(function () {
        var name = $('#username').val();
        var pass = $('#password').val();
        var phon = $('#phone').val();
        var bkas = $('#bkasNo').val();
        var trNo = $('#TrNo').val();
        sendContact(name,pass,phon,bkas,trNo);
    });

function sendContact(name,password,phone,bkas,trNo) {
    axios.post('/sendata',{
        name:name,
        pass:password,
        phon:phone,
        bkas:bkas,
        trNo:trNo

    }).then(function (response) {
            if(response.data==true){
                toastr.success('Registation success');
            }else {

            }
    }).catch(function (error) {

    })
}



