let rotation = 0;
const icon = document.getElementById("rotatingIcon");

setInterval(() => {
  rotation += 360;
  icon.style.transform = `rotate(${rotation}deg)`;
  icon.style.transition = "transform 1s";
  console.log(`Icon rotated to ${rotation} degrees`);
}, 3000);
