const act = document.querySelectorAll(".nav");
act.forEach((element) => {
  element.addEventListener("click", () => {
    act.forEach((d) => d.classList.remove("active"));
    element.classList.add("active");
  });
});
