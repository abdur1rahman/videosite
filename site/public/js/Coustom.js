
//Onclick sendbutton .///
    $('#sendContact').click(function (event) {
        event.preventDefault();
        var name = $('#username').val();
        var pass = $('#password').val();
        var phon = $('#phone').val();
        var bkas = $('#bkasNo').val();
        var trNo = $('#TrNo').val();
    contactSend(name,pass,phon,bkas,trNo);
})


//start contact buttone///

function contactSend(name,password,phone,bkas,trNo) {
    if(name.length==0){
        touster.error('emptyname faile');
    }else if(password.length==0){
        touster.error('password faile');
    }else if(phone.length==0){
        touster.error('phone faile');
    }
    if(bkas.length==0){
        touster.error('bkas faile');
    }else if(trNo.length==0){
        touster.error('trni faile');
    }else {
        axios.post('/sendata',{
            name:name,
            pass:password,
            phon:phone,
            bkas:bkas,
            trNo:trNo,
        }).then(function (response) {
            if(response.status==200){
                if(response.data==true){
                    touster.error('Ragistion success');
                }else {
                    touster.error('Ragistion faile');
                }

            }else {
                touster.error('Ragistion faile');
            }
        }).catch(function (error) {
            touster.error('Ragistion faile');
        })
    }

}
