const title = document.querySelector('.title');

let rotation = 0;

function rotateTitleLoop() {
  rotation += 0.01;
  title.style.transform = `rotateY(${rotation}turn)`;
  requestAnimationFrame(rotateTitleLoop);
}

rotateTitleLoop();
