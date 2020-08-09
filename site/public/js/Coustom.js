function Reset(){
    rese
}
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
        $('#sendContact').html('name Empty');
        setTimeout(function () {
            $('#sendContact').html('পাঠিয়ে দিন');
        },2000);
    }else if(password.length==0){
        $('#sendContact').html('pass Empty');
        setTimeout(function () {
            $('#sendContact').html('পাঠিয়ে দিন');
        },2000);
    }else if(phone.length==0){
        $('#sendContact').html('phone Empty');
        setTimeout(function () {
            $('#sendContact').html('পাঠিয়ে দিন');
        },2000);
    }
    if(bkas.length==0){
        $('#sendContact').html( 'bkas Empty');
        setTimeout(function () {
            $('#sendContact').html('পাঠিয়ে দিন');
        },2000);
    }else if(trNo.length==0){
        $('#sendContact') .html('trno Empty');
        setTimeout(function () {
            $('#sendContact').html('পাঠিয়ে দিন');
        },2000);
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
                    $('#sendContact').html('আপনি সফল হয়েছেন');
                    $('#sendContact').rest;
                    setTimeout(function () {
                        $('#sendContact').html('পাঠিয়ে দিন');
                    },2000);
                }else {
                    $('#sendContact').html('আপনি ব্যর্থ হয়েছেন');
                    setTimeout(function () {
                        $('#sendContact').html('পাঠিয়ে দিন');
                    },2000);
                }

            }else {
                $('#sendContact').html('Network Connection Error');
                setTimeout(function () {
                    $('#sendContact').html('পাঠিয়ে দিন');
                },2000)
            }
        }).catch(function (error) {
            touster.error('Ragistion faile');
        })
    }

}
