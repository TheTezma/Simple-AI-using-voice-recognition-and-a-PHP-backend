/*
 * Check for browser support
 */
var supportMsg = document.getElementById('msg');

if ('speechSynthesis' in window) {
    console.log("Speech Synthesis Ready");
} else {
    supportMsg.innerHTML = 'Sorry your browser <strong>does not support</strong> speech synthesis.<br>Try this in <a href="http://www.google.co.uk/intl/en/chrome/browser/canary.html">Chrome Canary</a>.';
    supportMsg.classList.add('not-supported');
}

// Create a new utterance for the specified text and add it to
// the queue.
function speak(text) {
  // Create a new instance of SpeechSynthesisUtterance.
    var msg = new SpeechSynthesisUtterance();
  
  // Set the text.
    msg.text = text;
  
  // Set the attributes.
    msg.volume = parseFloat(1);
    msg.rate = parseFloat(1);
    msg.pitch = parseFloat(1);

    msg.voice = speechSynthesis.getVoices().filter(function(voice) { return voice.name == "Fiona"; })[0];
        console.log("Voice is Fred")

  // Queue this utterance.
    window.speechSynthesis.speak(msg);
}

