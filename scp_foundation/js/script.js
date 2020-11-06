
		window.speechSynthesis.cancel();

function play(node) {
var div = document.getElementById(node),
	htmlContent = div.innerHTML,

	textContent = div.textContent;

  	utter = new window.SpeechSynthesisUtterance(textContent);

	window.speechSynthesis.cancel();
	window.speechSynthesis.speak(utter);

	       
}



function pause() {

		window.speechSynthesis.cancel();

		
}






