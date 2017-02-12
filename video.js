var tag = document.createElement('script');
tag.id = 'iframe-demo';
tag.src = 'https://www.youtube.com/iframe_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player;
var funcionTiempo;
var pararEnTiempos = [4, 8 , 10, 20];
var preguntas = ["Como te llamas", "Hola 2" , "Hola 3", "Hola 4"];

function onYouTubeIframeAPIReady() {
  player = new YT.Player('existing-iframe-example', {
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
  });
}
function onPlayerStateChange(event)
{
	//checaTiempo();
	//changeBorderColor(event.data);
}

// when the player is ready, start checking the current time every 100 ms.
function onPlayerReady()
{
	var videotime = 0;
	var timeupdater = null;
  	function updateTime()
  	{
    	var oldTime = videotime;
    	if(player && player.getCurrentTime)
    	{
      		videotime = player.getCurrentTime();
    	}
    	if(videotime !== oldTime)
    	{
      		onProgress(videotime);
    	}
  	}
  	timeupdater = setInterval(updateTime, 100);
}
//Intervalos de decimales
//Objetos
// when the time changes, this will be called.
function onProgress(currentTime) //Current time es el tiempo del iframe en segundos
{
	var fixedTime = currentTime.toFixed(1) //Lo vuelve string de 1 decimal

	times = ['5.0','7.0','60.0'];

	//Mientras hay objetos en el arreglo
		//Checar si el elemento 0 == al fixedTime
			//IF SI: Pausar, Preguntar y sacar el elemento 0 del arreglo

	switch(fixedTime)
	{
		case '5.0':
			player.pauseVideo();
			//AskQuestion(5);
			console.log("PREGUNTAR 5");
			break;
		case '7.0':
			player.pauseVideo()
			console.log("PREGUNTAR 7");
			break;
		case '60.0':
			player.pauseVideo()
			console.log("PREGUNTAR 60");
			break;
		default:
			break;
	}

}
