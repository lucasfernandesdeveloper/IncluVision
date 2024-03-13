// Controles de audio 
let audioControle = document.getElementById('audioControle');
let audioIcone = document.getElementById('audioIcone');

// Play e pause
audioIcone.addEventListener('click', function(e) {
    audioControle.play();
});

audioIcone.addEventListener('dblclick', function(e) {
    audioControle.pause();
});

// Controles da velocidade do audio 
document.addEventListener('keydown', function(e) {
    if (e.key === '1' && !e.repeat) {
        if (!audioControle.paused) {
            audioControle.playbackRate = 1.5;
        }
    }
});

document.addEventListener('keydown', function(e) {
    if (e.key === '2' && !e.repeat) {
        if (!audioControle.paused) {
            audioControle.playbackRate = 2;
        }
    }
});