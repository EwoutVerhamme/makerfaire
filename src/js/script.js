  // Selectors
const navSmall = document.querySelector('.nav__wrapper');
const navBig = document.querySelector('.nav__big');
const visitors = document.querySelector('.visitors');
const volunteers = document.querySelector('.volunteers');
const makers = document.querySelector('.makers');
const experiments = document.querySelector('.experiments');


const init =  () => {
  // SET BACKGROUND COLOR TO WHITE WHEN SCROLLING
  window.onscroll = () => {
    if (document.documentElement.scrollTop >= 10 ){
      navSmall.classList.add("nav-colored");
      navSmall.classList.remove("nav-transparent");
      navBig.classList.add("nav-colored");
      navBig.classList.remove("nav-transparent");
    }
    else {
      navSmall.classList.add("nav-transparent");
      navSmall.classList.remove("nav-colored");
      navBig.classList.add("nav-transparent");
      navBig.classList.remove("nav-colored");
  }
  }

}

  init();

