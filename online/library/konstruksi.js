$(document).ready(function(){
	$('#masa').keyup(function(){

		var instansi 	= String($('#instansi').val());
        var masa        = parseInt($('#masa').val());
        var tblBank     = parseInt($('#tblBank').val());

	if(tblBank==1 && instansi=='PERORANGAN'){
        if(masa <= 4){
          $('#tarifmax').val(0.55);
        }else if(masa <= 6){
           $('#tarifmax').val(0.75);
        }else if(masa <= 8){
           $('#tarifmax').val(1.00);
        }else if(masa <= 10){
           $('#tarifmax').val(1.25);
        }else if(masa <= 12){
           $('#tarifmax').val(1.35); //1
        } else if(masa <= 24 ){
            $('#tarifmax').val(2.15); //2
        }else if(masa <= 36 ){
            $('#tarifmax').val(2.85); //3
        }else if(masa <= 48 ){
            $('#tarifmax').val(3.40); //4
        }else if(masa <= 60 ){
            $('#tarifmax').val(3.80); //5
        }else if(masa <= 72 ){
            $('#tarifmax').val(4.00); //6
        }else if(masa <= 84 ){
            $('#tarifmax').val(4.26); //7
        }else if(masa <= 96 ){
            $('#tarifmax').val(4.36); //8
        }else if(masa <= 108 ){
            $('#tarifmax').val(4.46); //9
        }else if(masa <= 120 ){
            $('#tarifmax').val(4.56); //10
        }else if(masa > 120 ){
            $('#tarifmax').val(5.00); //>10
        }

    }else if(tblBank==1 && instansi=='BADAN USAHA' ){
        if(masa <= 4){
          $('#tarifmax').val(0.55);
        }else if(masa <= 6){
           $('#tarifmax').val(0.75);
        }else if(masa <= 8){
           $('#tarifmax').val(1.00);
        }else if(masa <= 10){
           $('#tarifmax').val(1.25);
        }else if(masa <= 12){
           $('#tarifmax').val(1.35); //1
        } else if(masa <= 24 ){
            $('#tarifmax').val(2.15); //2
        }else if(masa <= 36 ){
            $('#tarifmax').val(2.85); //3
        }else if(masa <= 48 ){
            $('#tarifmax').val(3.40); //4
        }else if(masa <= 60 ){
            $('#tarifmax').val(3.80); //5
        }else if(masa <= 72 ){
            $('#tarifmax').val(4.00); //6
        }else if(masa <= 84 ){
            $('#tarifmax').val(4.26); //7
        }else if(masa <= 96 ){
            $('#tarifmax').val(4.36); //8
        }else if(masa <= 108 ){
            $('#tarifmax').val(4.46); //9
        }else if(masa <= 120 ){
            $('#tarifmax').val(4.56); //10
        }else if(masa > 120 ){
            $('#tarifmax').val(5.00); //>10
        }

    }else if(tblBank==2  && instansi=='PERORANGAN'){

        if(masa <= 3){
           $('#tarifmax').val(0.63); //1
        } else if(masa <= 6 ){
            $('#tarifmax').val(0.97); //2
        }else if(masa <= 9 ){
            $('#tarifmax').val(1.29); //3
        }else if(masa <= 12 ){
            $('#tarifmax').val(1.58); //4
        }else if(masa <= 24 ){
            $('#tarifmax').val(2.63); //5
        }else if(masa <= 36 ){
            $('#tarifmax').val(3.45); //6
        }else if(masa <= 48 ){
            $('#tarifmax').val(4.34); //7
        }else if(masa <= 60 ){
            $('#tarifmax').val(5.20); //8
        }

    }else if(tblBank==3 && instansi=='PERORANGAN'){
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

    }else if(tblBank==3 && instansi=='BADAN USAHA' ){
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