let contact = document.getElementById("contact");
let scrollButton = document.getElementById("scroll-button");
let portfolio = document.getElementById("portfolio");
//MAKES THE BLURB FADE IN AND FOCUS ON WINDOW LOAD
window.onload = () => {
  contact.classList.add("appear");
  contact.style.opacity = "1";
}
//BOUNCING HEXAGON MADE INTO SCROLL-BUTTON
function scroll() {
  portfolio.scrollIntoView();
}
scrollButton.onclick = () => {
  scroll();
};
//FUNCTION FOR PROJECTS TO APPEAR AND RESIZE WHEN SCROLLED TO
function animate() {
  let project, windowHeight;
  function init() {
    project = document.querySelectorAll('.hidden');
    windowHeight = window.innerHeight;
    addEventHandlers();
    checkPosition();
  }
  function addEventHandlers() {
    window.addEventListener('scroll', checkPosition);
    window.addEventListener('resize', init);
  }
  function checkPosition() {
    for (let i = 0; i < project.length; i++) {
      let positionFromTop = project[i].getBoundingClientRect().top;
      if (positionFromTop - windowHeight <= 0) {
        project[i].className = project[i].className.replace('hidden','fade-in-element');
      }
    }
  }
  return {
    init: init
  };
};
animate().init();
