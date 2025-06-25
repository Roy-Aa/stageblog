let rotation = 0;

function rotateText(element) {
  rotation += 360;
  element.style.transform = `rotate(${rotation}deg)`;
  element.style.transition = "transform 1s";
}

function smileyfade(element) {
  element.style.opacity = "0";
  setTimeout(function () {
    document.getElementById("smiley").innerText = ":)";
    element.style.opacity = "1";
  }, 500);

  setTimeout(function () {
    element.style.opacity = "0";
  }, 1500);
  setTimeout(function () {
    document.getElementById("smiley").innerText = "Stageblog Site";
    element.style.opacity = "1";
  }, 2000);
}

function markfade(element) {
  element.style.opacity = "0";
  setTimeout(function () {
    document.getElementById("mark").innerText = "?";
    element.style.opacity = "1";
  }, 500);

  setTimeout(function () {
    element.style.opacity = "0";
  }, 1500);

  setTimeout(function () {
    document.getElementById("mark").innerText = "404";
    element.style.opacity = "1";
    element.style.color = "#00BCFF";
  }, 2000);
}

function wavefade(element) {
  element.style.opacity = "0";
  setTimeout(function () {
    document.getElementById("wave").innerText = "👋";
    element.style.opacity = "1";
  }, 500);

  setTimeout(function () {
    element.style.opacity = "0";
  }, 1000);

  setTimeout(function () {
    document.getElementById("wave").innerText = "Roy Aardenburg";
    element.style.opacity = "1";
  }, 1500);
}

document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");

  let isVisible = false;

  menuToggle.addEventListener("click", function () {
    if (!isVisible) {
      mobileMenu.classList.remove("hidden", "fade-out");
      mobileMenu.classList.add("fade-in");
    } else {
      mobileMenu.classList.remove("fade-in");
      mobileMenu.classList.add("fade-out");

      setTimeout(() => {
        mobileMenu.classList.add("hidden");
      }, 400);
    }
    isVisible = !isVisible;
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("observe-visible");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.5,
    }
  );

  document.querySelectorAll(".observe").forEach((el) => observer.observe(el));
});
