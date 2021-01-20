{
  // Selectors
const navigation = document.querySelector('.nav');
const tutorialButton = document.querySelectorAll('.tutorial__button');
const secondNavigation = document.querySelector('.second__nav')

const step0 = document.querySelector('.step__0');
const step1 = document.querySelector('.step__1');
const step2 = document.querySelector('.step__2');
const step3 = document.querySelector('.step__3');
const step4 = document.querySelector('.step__4');


// BEGIN TUTORIAL CODE
tutorialButton.forEach(button => {
  button.addEventListener('click', (e) => {
    
    switch(e.target.id) {
      case "0":
        navigation.classList.add('hidden');
        secondNavigation.classList.remove('hidden');
        secondNavigation.classList.add('visible');
        step0.classList.add("hidden");
        step1.classList.add('visible');
        navigation.classList.add("hidden");
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
