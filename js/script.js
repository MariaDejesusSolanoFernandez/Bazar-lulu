jQuery('.card-slider').slick({
  slidesToShow:3,
  autoplay: true,
  slidesToScroll:1,
  dots: false,
  responsive:[
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

let cards = document.querySelectorAll('.card');
let card;
let modal = document.querySelector('.modal');
let closeButton = document.querySelector('.modal__close-button');
let page = document.querySelector('.page');
const cardBorderRadius = 20;
const openingDuration = 600; //ms
const closingDuration = 600; //ms
const timingFunction = 'cubic-bezier(.76,.01,.65,1.38)';

var Scrollbar = window.Scrollbar;
Scrollbar.init(document.querySelector('.modal__scroll-area'));


function flipAnimation(first, last, options) {
  let firstRect = first.getBoundingClientRect();
  let lastRect = last.getBoundingClientRect();
  
  let deltas = {
    top: firstRect.top - lastRect.top,
    left: firstRect.left - lastRect.left,
    width: firstRect.width / lastRect.width,
    height: firstRect.height / lastRect.height
  };
  
  return last.animate([{
    transformOrigin: 'top left',
    borderRadius:`
    ${cardBorderRadius/deltas.width}px / ${cardBorderRadius/deltas.height}px`,
    transform: `
      translate(${deltas.left}px, ${deltas.top}px) 
      scale(${deltas.width}, ${deltas.height})
    `
  },{
    transformOrigin: 'top left',
    transform: 'none',
    borderRadius: `${cardBorderRadius}px`
  }],options);
}



closeButton.addEventListener('click',(e)=>{
  page.dataset.modalState = 'closing';
  document.querySelector('body').classList.remove('no-scroll');
  
  let animation = flipAnimation(card,modal,{
    duration: closingDuration,
    easing: timingFunction,
    direction: 'reverse',
    fill:'both'
  });

  animation.onfinish = ()=>{
    page.dataset.modalState = 'closed';
    card.style.opacity = 1;
    card.classList.remove('card--opened');
    jQuery('.card-slider').slick('slickPlay');
    animation.cancel();
  };
});