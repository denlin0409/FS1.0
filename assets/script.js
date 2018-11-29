'use strict';
const spanDotBtns = document.querySelectorAll('.dot-btn');
const mainHeader = document.querySelector('.main-header');
const allSections = document.querySelectorAll('.section-component');
const activatorMenu = document.querySelector('.activator-menu');
const sideMenu = document.querySelector('.side-menu');

const options = {
  threshold: 0.5
}

for (let i = 0; i < spanDotBtns.length; i++) {
    spanDotBtns[i].addEventListener('click',(event) => {
        let id=event.target.dataset.section;
        document.getElementById(id).scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
    });
};

// const observer = new IntersectionObserver((entries) => {
//     entries.forEach(function(entry){
//         let dataSet = entry.target.id;
//         let dotBtn = document.querySelector(`[data-section=${CSS.escape(dataSet)}]`);
//         if(entry.intersectionRatio > 0){
//             dotBtn.children['0'].classList.toggle("dot-f");
//         }
//     });
//
// }, options);

// allSections.forEach((section) => {
//     observer.observe(section);
// });

// window.addEventListener('scroll',() => {
//     let offset = window.pageYOffset;
//
//     // if(offset >= 0 && offset <= mainHeaderHeight - 20){
//     //   mainHeader.classList.remove('header-wh');
//     // };
//     //
//     // if (offset >= mainHeaderHeight){
//     //     mainHeader.classList.add("header-wh");
//     // };
// });



const BORDER_SIZE = 30;
const panel = document.getElementById("right_panel");

let m_pos;
function resize(e){
  const dx = m_pos - e.x;
  m_pos = e.x;
  panel.style.width = (parseInt(getComputedStyle(panel, '').width) + dx) + "px";
}

panel.addEventListener("mousedown", function(e){
  if (e.offsetX < BORDER_SIZE) {
    m_pos = e.x;
    document.addEventListener("mousemove", resize);
  }
});

document.addEventListener("mouseup", function(){
    document.removeEventListener("mousemove", resize);
});

activatorMenu.addEventListener('click', () => {
  sideMenu.classList.toggle('side-menu-open');
  activatorMenu.classList.toggle('activator-menu__open');
  activatorMenu.classList.toggle('activator-menu-gone');
  console.log(sideMenu);
});
