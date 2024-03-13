const startButton = document.getElementById('startButton');
const outputDiv = document.getElementById('email');

const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition || window.mozSpeechRecognition || window.msSpeechRecognition)();
recognition.lang = 'pt-BR';

recognition.onstart = () => {
startButton.textContent = 'Listening...';
};

recognition.onresult = (event) => {
const transcript = event.results[0][0].transcript;
outputDiv.value = transcript;
};

recognition.onend = () => {
startButton.textContent = 'Start Voice Input';
};

startButton.addEventListener('click', () => {
recognition.start();
});

