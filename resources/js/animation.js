//ScrollMagic

var tl = new TimelineMax();
const controller = new ScrollMagic.Controller();

tl.from('.project-container', 2, {
  x: -200,
  opacity: 0,
  ease: Power0.easeInOut
}, "=-1");

const scene = new ScrollMagic.Scene({
    triggerElement: "#portfolio",
    triggerHook: "onEnter",
    duration: "100%"
  })
  .setTween(tl)
  .addTo(controller);
