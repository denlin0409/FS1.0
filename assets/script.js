'use strict';

document.addEventListener("DOMContentLoaded", () => {
  // Start javascript for dot-menu and header-functions
  const section1 = document.querySelector('.section-1');
  const section2 = document.querySelector('.section-2');
  const section3 = document.querySelector('.section-3');
  const section4 = document.querySelector('.section-4');
  const mainHeader = document.querySelector('.main-header');

  const headerHeight = mainHeader.getBoundingClientRect().height;
  const section2Offset = section2.getBoundingClientRect().y;
  const section3Offset = section3.getBoundingClientRect().y;
  const section4Offset = section4.getBoundingClientRect().y;

  const dottMenu = document.querySelector('.dott-menu');
  const infoSpanDott = dottMenu.querySelector('.info');
  const introSpanDott = dottMenu.querySelector('.intro');
  const contactSpanDott = dottMenu.querySelector('.contact');
  const moreSpanDott = dottMenu.querySelector('.more');

  let myClassList = 0;
  const funcActiveDott = (activeClass) => {

    myClassList.replace("fa-circle-o", "fa-circle");
    let dottsList = dottMenu.querySelectorAll('span');
    dottsList = Array.from(dottsList);

    for (let i = 0; i < dottsList.length; i++) {

      if (dottsList[i].children['0'].classList.contains(activeClass)){
        continue;
      }

      dottsList[i].children['0'].classList.replace("fa-circle", "fa-circle-o");
    }
  }
   window.addEventListener('scroll',()=>{
    const offset = window.pageYOffset;
    if(offset >= headerHeight){
      if(! mainHeader.classList.contains('header-wh')){
        mainHeader.classList.add('header-wh');
      }
    }

    if(offset >= 0 && offset <= headerHeight - 10){
      mainHeader.classList.remove('header-wh');
      myClassList = introSpanDott.children['0'].classList;
      funcActiveDott(myClassList['0']);
    }

    if(offset >= section2Offset - headerHeight && offset <= section2Offset + headerHeight){
      myClassList = infoSpanDott.children['0'].classList;
      funcActiveDott(myClassList['0']);
    };

    if(offset >= section3Offset - headerHeight && offset <= section3Offset + headerHeight){
      myClassList = contactSpanDott.children['0'].classList;
      funcActiveDott(myClassList['0']);
    };

    if(offset >= section4Offset - headerHeight && offset <= section4Offset + headerHeight){
      myClassList = moreSpanDott.children['0'].classList;
      funcActiveDott(myClassList['0']);
    };
  });
   introSpanDott.addEventListener('click',()=>{
    window.scrollTo(0, 0);
  });
   infoSpanDott.addEventListener('click',()=>{
    window.scrollTo(0, section2Offset);
  });
   contactSpanDott.addEventListener('click',()=>{
    window.scrollTo(0, section3Offset);
  });
   moreSpanDott.addEventListener('click',()=>{
    window.scrollTo(0, section4Offset);
  });
});
