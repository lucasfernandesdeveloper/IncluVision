function controleVoz() {
  audioInicio.play()
}

/*const welcomeLayout = document.getElementById('welcomeLayout');
const tutorial1Layout = document.getElementById('tutorial1Layout');
const tutorial2Layout = document.getElementById('tutorial2Layout');
const tutorial3Layout = document.getElementById('tutorial3Layout');

let currentTemplate = 1;
let clickVar = true;

welcomeLayout.style.display = 'flex';

  document.addEventListener('click', function() {
    if (clickVar === true){
    welcomeLayout.style.display = 'none';
    tutorial1Layout.style.display = 'flex';
    clickVar = false
    currentTemplate = 2
    console.log(currentTemplate)
    }
  });

  let spaceKeyPressed = false;
  document.addEventListener('keydown', function(event) {
    if (event.code === 'Space') {
      spaceKeyPressed = true;
    }
  });

  document.addEventListener('keyup', function(event) {
    if (event.code === 'Space') {
      spaceKeyPressed = false;
    }
  });

  setInterval(function() {
    if (spaceKeyPressed && currentTemplate === 2) {
      welcomeLayout.style.display = 'none';
      tutorial1Layout.style.display = 'none';
      tutorial2Layout.style.display = 'flex';
      currentTemplate = 3
      console.log(currentTemplate)
    } else if (spaceKeyPressed && currentTemplate === 3){
    welcomeLayout.style.display = 'none';
    tutorial1Layout.style.display = 'none';
    tutorial2Layout.style.display = 'none';
    tutorial3Layout.style.display = 'flex';
    currentTemplate = 4
    console.log(currentTemplate)
    }

}, 5000);

document.addEventListener('keyup', function(e) {
    if (e.key === 'ArrowLeft' && currentTemplate === 2) {
        tutorial1Audio.play();
    } else if (e.key === 'ArrowLeft' && currentTemplate === 3) {
      tutorial2Audio.play();
    } else if (e.key === 'ArrowLeft' && currentTemplate === 4) {
      tutorial3Audio.play();
    }
});

*/