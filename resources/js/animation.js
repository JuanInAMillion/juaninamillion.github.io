//ScrollMagic
var tl = new TimelineMax({
  onUpdate: updatePercentage
});
var tl2 = new TimelineMax();
const controller = new ScrollMagic.Controller();

tl.from('.skill-icons', .5, {
  x: 100,
  scale: .1,
  ease: Power0.easeIn
}, "=-1");

tl2.from('.project-container', 2, {
  x: -200,
  opacity: 0,
  ease: Power0.easeInOut
}, "=-1");

const scene = new ScrollMagic.Scene({
    triggerElement: ".skill-section",
    triggerHook: "onEnter",
    duration: "100%"
  })
  .setTween(tl)
  .addTo(controller);

const scene2 = new ScrollMagic.Scene({
    triggerElement: "#portfolio",
    triggerHook: "onEnter",
    duration: "100%"
  })
  .setTween(tl2)
  .addTo(controller);


function updatePercentage() {
  //percent.innerHTML = (tl.progress() *100 ).toFixed();
  tl.progress();
  console.log(tl.progress());
}
