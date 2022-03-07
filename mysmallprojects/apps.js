const onClick = () => {
  button = document.querySelector(".button");

  button.addEventListener("click", () => {
    button.classList.toggle("toggle");
  });
};

onClick();
