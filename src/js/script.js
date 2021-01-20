{
  // Selectors
const navigation = document.querySelector('.nav');
const tutorialButton = document.querySelectorAll('.tutorial__button');
const header = document.querySelector('.header')

// SELECT THE POPUP TO CHANCE HTML
const popup = document.querySelector('.popup__wrapper');
const popupTitle = document.querySelector('.popup__title');
const popupSubtext = document.querySelector('.popup__subtext');
const popupButton1 = document.querySelector('.button1');
const popupButton2 = document.querySelector('.button2');

// SELECT ALL THE STEPS
const step1 = document.querySelector('.step__1');
const step2 = document.querySelector('.step__2');
const step3 = document.querySelector('.step__3');
const step4 = document.querySelector('.step__4');


// BEGIN TUTORIAL CODE
tutorialButton.forEach(button => {
  button.addEventListener('click', (e) => {
    switch(e.target.id) {
      case "0":
        header.style.filter =  "blur(8px)";
        // navigation.style.filter =  "blur(8px)";
        popup.style.zIndex = "5"
        break;
      case "1":
        step1.classList.add("hidden");
        step1.classList.remove("visible");
        step2.classList.add('visible');
        step2.classList.remove('hidden');
        break;
        case "2":
          step2.classList.add("hidden");
          step2.classList.remove("visible");
          step3.classList.add('visible');
          step3.classList.remove('hidden');
        break;
        case "3":
          step3.classList.add("hidden");
          step3.classList.remove("visible");
          step4.classList.add('visible');
          step4.classList.remove('hidden');
        break;
        case "step step__4":
          console.log("stap 4")
        break;
      default:
        console.log("Error")
    }
  })
});








// END TUTORIAL CODE


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
