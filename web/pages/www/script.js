const title = document.querySelector('.title');
const lines = document.querySelectorAll('.line');

let titleRotation = 0;
let linesRotation = 0;

function rotateElements() {
  titleRotation += 0.01;
  linesRotation += 0.005;

  title.style.transform = `rotateY(${titleRotation}turn)`;
  lines.forEach(line => {
    line.style.transform = `rotateX(${linesRotation}turn)`;
  });

  requestAnimationFrame(rotateElements);
}

rotateElements();
