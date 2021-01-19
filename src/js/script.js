{
  // Selectors
const navigation = document.querySelector('.nav');


const init =  () => {
  // Set background color to white when scrolling
  window.onscroll = () => {
    if (document.documentElement.scrollTop >= 10 ){
      navigation.classList.add("nav-colored");
      navigation.classList.remove("nav-transparent");
    }
    else {
      navigation.classList.add("nav-transparent");
      navigation.classList.remove("nav-colored");
  }
  }
}

  init();
}
