// loader
jQuery(window).load(function() {

    jQuery(".status").fadeOut();
    jQuery("#loader").delay(1000).fadeOut("slow");
});
var imagenes=[	
"./img/loader.gif",
"./img/LWT-x.png",
"./img/logo2.png",
"./img/facebookW.png",
"./img/twitter.png",
"./img/linkedin.png",
"./img/bg-1.png",
"./img/bg-2.png",
"./img/bg-3.png",
"./img/home-clouds.jpg",
"./img/home-stratos-PH.png",
"./img/globe-hand.png",
"./img/500x500.png",
"./img/bg-medio-1.jpg",
"./img/medio-1.jpg",
"./img/emp01.png",
"./img/emp02.jpg",
"./img/emp03.jpg",
"./img/emp04.jpg",
"./img/emp05.jpg",
"./img/emp06.jpg",
"./img/medio/emp01.png",
"./img/medio/emp02.png",
"./img/medio/emp03.png",
"./img/medio/emp04.png",
"./img/medio/emp05.png",
"./img/medio/emp06.png",
"./img/medio/emp07.png",
"./img/medio/emp08.png",
"./img/arrow.png",
"./img/historias/hist-1.jpg",
"./img/historias/hist-2.jpg",
"./img/historias/hist-3.jpg",
"./img/historias/hist-4.jpg",
"./img/historias/hist-5.jpg",
"./img/historias/hist-6.jpg",
"./img/historias/hist-7.jpg",
"./img/logo.png",
"./img/facebook.png",
"./img/twitter.png",
"./img/linkedin.png",
"./img/elements-nav.jpg",
"./img/globe-shadow.png",
"./img/bg-quotes.png",
"./img/home-sense-copy.png"
			];
var Precarga;
window.addEventListener('load',function(){
	$("div.video").hide(); //.remove();
	Precarga= new createjs.LoadQueue();
	Precarga.on("progress", enProgreso);
	cargar();
});

function cargar(){
	while(imagenes.length>0){
		var url=imagenes.shift();
		Precarga.loadFile(url);
		/*agregarImagenes (url);*/

			/*console.log("imagenes :"+imagenes.length);*/
	}
}

function enProgreso (event) {
	if(Precarga.progress==1){
		//$("#status").slideUp(3000).delay(3000).fadeIn(3000);
		/*$("#loader").hide(3000);
		$("div.video").hide();*/

    //$("body").append("listo");
	}
		//console.log("en progreso "+Precarga.progress);
		$(".status").html('Cargado al '+(Precarga.progress*100)+' % . . . ');

}

/*
var imagenes=[	
				"./img/bg-1.png",
				"./img/bg-2.png",
				"./img/bg-3.png",
				"./img/bg-1-mobil.png",
				"./img/bg-medio-1.jpg",
				"./img/medio/emp01.png",
				"./img/medio/emp02.png",
				"./img/medio/emp03.png",
				"./img/medio/emp04.png",
				"./img/medio/emp05.png",
				"./img/medio/emp06.png",
				"./img/medio/emp07.png",
				"./img/medio/emp08.png",
				"./img/emp01.png",
				"./img/emp02.jpg",
				"./img/emp03.jpg",
				"./img/emp04.jpg",
				"./img/emp05.jpg",
				"./img/emp06.jpg",
				"./img/home-clouds.jpg",
				"Domo_gigante.mp4"
			];
var Precarga;
window.addEventListener('load',function(){
	Precarga= new createjs.LoadQueue();
	Precarga.on("progress", enProgreso);
	cargar();
});

function cargar(){
	while(imagenes.length>0){
		var url=imagenes.shift();
		Precarga.loadFile(url);
		agregarImagenes (url);

		console.log("imagenes :"+imagenes.length);
	}
}

function enProgreso (event) {
	if(Precarga.progress==1){
		//$("#status").slideUp(3000).delay(3000).fadeIn(3000);
		$("#loader").hide(3000);
		$("div.video").hide();

    //$("body").append("listo");
	}
		//console.log("en progreso "+Precarga.progress);
		$(".status").html('( Contenido Cargado al '+(Precarga.progress*100)+' %)  . . . ');

}

function archivoCargado(event){
		console.log("archivoCargado");
}

function agregarImagenes (url) {
	//$("body").append("<img src=\""+url+"\"/>");
}
*/