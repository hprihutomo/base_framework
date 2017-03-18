$(document).ready(function(){
	$('#masa').keyup(function(){

		var pekerjaan 	= String($('#pekerjaan').val());
        var masa        = parseInt($('#masa').val());
        var tblBank     = parseInt($('#tblBank').val());

	if(tblBank==1 && pekerjaan=='PNS'){
        if(masa <= 12){
           $('#tarifmax').val(0.39); //1
        } else if(masa <= 24 ){
            $('#tarifmax').val(0.61); //2
        }else if(masa <= 36 ){
            $('#tarifmax').val(0.94); //3
        }else if(masa <= 48 ){
            $('#tarifmax').val(1.21); //4
        }else if(masa <= 60 ){
            $('#tarifmax').val(1.43); //5
        }else if(masa <= 72 ){
            $('#tarifmax').val(1.64); //6
        }else if(masa <= 84 ){
            $('#tarifmax').val(2.08); //7
        }else if(masa <= 96 ){
            $('#tarifmax').val(2.48); //8
        }else if(masa <= 108 ){
            $('#tarifmax').val(2.81); //9
        }else if(masa <= 120 ){
            $('#tarifmax').val(3.19); //10
        }
        // else if(masa > 120 ){
        //     $('#tarifmax').val(5.00); //>10
        // }

    }else if(tblBank==1 && pekerjaan=='SWASTA' ){
       if(masa <= 12){
           $('#tarifmax').val(0.50); //1
        } else if(masa <= 24 ){
            $('#tarifmax').val(1.00); //2
        }else if(masa <= 36 ){
            $('#tarifmax').val(1.25); //3
        }else if(masa <= 48 ){
            $('#tarifmax').val(1.50); //4
        }else if(masa <= 60 ){
            $('#tarifmax').val(1.75); //5
        }else if(masa <= 72 ){
            $('#tarifmax').val(2.15); //6
        }else if(masa <= 84 ){
            $('#tarifmax').val(2.55); //7
        }else if(masa <= 96 ){
            $('#tarifmax').val(2.95); //8
        }else if(masa <= 108 ){
            $('#tarifmax').val(3.35); //9
        }else if(masa <= 120 ){
            $('#tarifmax').val(3.75); //10
        }
        // else if(masa > 120 ){
        //     $('#tarifmax').val(5.00); //>10
        // }

    }else if(tblBank==2  && pekerjaan=='PNS'){

        if(masa <= 12){
           $('#tarifmax').val(0.72); //1
        } else if(masa <= 24 ){
            $('#tarifmax').val(1.34); //2
        }else if(masa <= 36 ){
            $('#tarifmax').val(1.77); //3
        }else if(masa <= 48 ){
            $('#tarifmax').val(2.17); //4
        }else if(masa <= 60 ){
            $('#tarifmax').val(2.60); //5
        }else if(masa <= 72 ){
            $('#tarifmax').val(3.25); //6
        }else if(masa <= 84 ){
            $('#tarifmax').val(4.15); //7
        }else if(masa <= 96 ){
            $('#tarifmax').val(4.75); //8
        }else if(masa <= 108 ){
            $('#tarifmax').val(5.35); //9
        }else if(masa <= 120 ){
            $('#tarifmax').val(6.15); //10
        }

    }else if(tblBank==2  && pekerjaan=='INTERNAL'){

        if(masa <= 12){
           $('#tarifmax').val(0.58); //1
        } else if(masa <= 24 ){
            $('#tarifmax').val(1.07); //2
        }else if(masa <= 36 ){
            $('#tarifmax').val(1.42); //3
        }else if(masa <= 48 ){
            $('#tarifmax').val(1.74); //4
        }else if(masa <= 60 ){
            $('#tarifmax').val(2.08); //5
        }else if(masa <= 72 ){
            $('#tarifmax').val(2.60); //6
        }else if(masa <= 84 ){
            $('#tarifmax').val(3.21); //7
        }else if(masa <= 96 ){
            $('#tarifmax').val(3.62); //8
        }else if(masa <= 108 ){
            $('#tarifmax').val(4.02); //9
        }else if(masa <= 120 ){
            $('#tarifmax').val(4.57); //10
        }else if(masa <= 120 ){
            $('#tarifmax').val(4.98); //11
        }else if(masa <= 132 ){
            $('#tarifmax').val(5.38); //12
        }else if(masa <= 148 ){
            $('#tarifmax').val(5.79); //13
        }else if(masa <= 160 ){
            $('#tarifmax').val(6.20); //14
        }else if(masa <= 172 ){
            $('#tarifmax').val(6.61); //15
        }


    }else if(tblBank==3 && pekerjaan=='PNS'){
        if(masa <= 3){
           $('#tarifmax').val(0.76); //1
        } else if(masa <= 6 ){
            $('#tarifmax').val(1.12); //2
        }else if(masa <= 9 ){
            $('#tarifmax').val(1.46); //3
        }else if(masa <= 12 ){
            $('#tarifmax').val(1.77); //4
        }else if(masa <= 24 ){
            $('#tarifmax').val(2.90); //5
        }else if(masa <= 36 ){
            $('#tarifmax').val(3.78); //6
        }else if(masa <= 48 ){
            $('#tarifmax').val(4.73); //7
        }else if(masa <= 60 ){
            $('#tarifmax').val(5.65); //8
        }

    }else if(tblBank==3 && pekerjaan=='SWASTA' ){
        if(masa <= 3){
           $('#tarifmax').val(0.62); //1
        } else if(masa <= 6 ){
            $('#tarifmax').val(0.94); //2
        }else if(masa <= 9 ){
            $('#tarifmax').val(1.26); //3
        }else if(masa <= 12 ){
            $('#tarifmax').val(1.53); //4
        }else if(masa <= 24 ){
            $('#tarifmax').val(2.49); //5
        }else if(masa <= 36 ){
            $('#tarifmax').val(3.13); //6
        }else if(masa <= 48 ){
            $('#tarifmax').val(3.83); //7
        }else if(masa <= 60 ){
            $('#tarifmax').val(4.73); //8
        }
    }


        var tarifmax    = parseFloat($('#tarifmax').val());
        var covBank     = parseFloat($('#covBank').val());
        var coverage    = parseFloat($('#coverage').val());
        var plafond     = parseFloat($('#plafond').val());

        var pijp = coverage/covBank*tarifmax;
        $('#p_ijp').val(pijp.toFixed(2));

        var ijpp    = parseFloat($('#p_ijp').val());
        var ijp     = plafond * ijpp / 100;
        $('#ijp').val(ijp);

	});

    // $('#TSB').keyup(function(){
        



    // });
});