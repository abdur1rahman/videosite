
//Onclick sendbutton .///
    $('#sendContact').click(function (event) {
        //event.preventDefault();
        var name = $('#username').val();
        var pass = $('#password').val();
        var phon = $('#phone').val();
        var bkas = $('#bkasNo').val();
        var trNo = $('#TrNo').val();
    contactSend(name,pass,phon,bkas,trNo);
})


//start contact buttone///

function contactSend(name,password,phone,bkas,trNo) {

        axios.post('/sendata',{
            name:name,
            pass:password,
            phon:phone,
            bkas:bkas,
            trNo:trNo,
        }).then(function (response) {
            if(response.status==200){
                if(response.data==true){
                   alert('success');
                }else {
                    alert('try agin');
                }

            }else {
                touster.error('Ragistion faile');
            }
        }).catch(function (error) {
            alert('somting want worng');
        });
    }


