const title = document.querySelector('.title');
const lines = document.querySelectorAll('.line');

let titleRotation = 0;

function rotateElements() {
  titleRotation += 0.01;
  title.style.transform = `rotateY(${titleRotation}turn)`;

  requestAnimationFrame(rotateElements);
}

rotateElements();
