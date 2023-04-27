import './bootstrap';
import '../css/app.css'; 

const sunIcon = document.querySelector(".sun");
const moonIcon = document.querySelector(".moon");

const userTheme = localStorage.getItem("theme");
const systemTheme = window.matchMedia("prefers-color-scheme: dark").matches;

const iconToggle = () => {
    moonIcon.classList.toggle("display-none");
    sunIcon.classList.toggle("display-none");
};

const themeCheck = () => {
    if (userTheme == "dark" || (!userTheme && systemTheme)){
        document.documentElement.classList.add("dark");
        moonIcon.classList.add("display-none");
        return;

    }
    sunIcon.classList.add("display-none");
};

const themeSwitch = () => {
    if (document.documentElement.classList.contains("dark")){
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
        iconToggle();
        return;
    }
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
    iconToggle();
};

sunIcon.addEventListener("click", () => {
    themeSwitch();
});

moonIcon.addEventListener("click", () => {
    themeSwitch();
});

themeCheck();

let mybutton = document.getElementByClass("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

