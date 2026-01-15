const link = document.querySelector(".link");
const p1 = document.getElementById("p1");

link.addEventListener("click", function (event) {
    event.preventDefault();
    p1.classList.add("color");
});
