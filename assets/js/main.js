let rotation = 0;

function rotateText(element) {
  rotation += 360;
  element.style.transform = `rotate(${rotation}deg)`;
  element.style.transition = "transform 1s";
}
