var puntos = 0;
var sumaPuntos, estrellas;

function resultadoPuntos(punts) {
	puntos = punts;
	$('#resumenPuntaje').html(puntos);
	var data = {puntaje: puntos, estrellas: estrellas, check : true};
    $.post(bdir + 'ajax/set_puntaje', data).done(function (data) {
        console.log("resultado: " + data);
    });
    if(sumaPuntos > 70){
        $('#i4Certificado').removeClass('disabled');
    }

}

function pantallafinal(){
	stopBGMusic();
	//playFX(window["BGWin"]);
	$("#capaResumen, #caratulaFin1").fadeIn(500);
    $.post(bdir + 'ajax/init_calificacion').done(function (data) {
       console.log("calificacion: " + data);
       if(data == 0){
        $('#calificacion').stop().fadeIn(1000);
       }else{
        $('#calificacion').stop().fadeOut(1000);
       }
    });
}

function finalSound(){
	//stopTexto();
	playTexto(window["BGWin"]);
	$("#animation_container").fadeOut(500);
}

function iniciarJuego(){
	//this.returnGame();
	//returnGame();
}

function radioPop(){
    //stopBGMusic();
    setTimeout(function(){
        var ops = Math.floor(Math.random()*3)+1;
        playBGMusic(window["back"+ops]);
    },500);
};

function detenerSonido(){
	stopBGMusic();
}

function btnTouch() {
    playFX(window.audioCatch);
}



// resultadoPuntos(PuntajeFinal); linea 15591

// pantallafinal(); finalSound(); linea 14342 14395

// radioPop(); linea 15409