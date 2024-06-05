function changeSlide(index) {
  var slides = document.querySelectorAll(".slide");
  var newImageSrc = document.querySelectorAll(".control")[index].src;
  var newText = document.querySelectorAll(".control")[index].alt;

  var colorClasses = [
    "ananas",
    "purpel",
    "red",
    "orange",
    "soda",
    "lemon",
    "honey",
    "peach",
    "orange",
    "kewi",
  ];
  slides.forEach(function (slide) {
    slide.src = newImageSrc;
  });

  var pText = document.querySelector(".ptext");
  pText.textContent = newText;

  var header = document.getElementById("header");
  header.classList.remove(...colorClasses);

  var colorClass = document.querySelectorAll(".control")[index].classList[1];
  if (colorClass) {
    header.classList.add(colorClass);
  }
  var lastIndex = localStorage.getItem("currentIndex");

  if (index !== parseInt(lastIndex)) {
    localStorage.setItem("currentIndex", index);

    location.reload();
  }
}

var lastIndex = localStorage.getItem("currentIndex");

if (lastIndex !== null) {
  changeSlide(parseInt(lastIndex));
}

document.querySelectorAll(".control").forEach(function (control, index) {
  control.addEventListener("click", function () {
    changeSlide(index);
  });
});
