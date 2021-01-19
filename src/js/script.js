{
  // Global 
  let previousStepIndex;
  let currentStepIndex; 

  // Selectors
const navigation = document.querySelector('.nav');
const tutorialButton = document.querySelectorAll('.tutorial__button');
const previousStep = document.querySelector(`.step__${previousStepIndex}`);
const currentStep = document.querySelector(`.step__${currentStepIndex}`);

// BEGIN TUTORIAL CODE
tutorialButton.forEach(button => {
  button.addEventListener('click', (e) => {
    
    switch(e.target.id) {
      case "0":
        previousStepIndex = 0
        currentStepIndex = 1;
        previousStep.classList.add("hidden");
        currentStep.classList.add("visible");

        break;
      case "1":
        previousStepIndex = 1
        currentStepIndex = 2
        console.log(previousStep)
        console.log(currentStep)
        // previousStep.classList.add("hidden");
        // previousStep.classList.remove("visible");
        // currentStep.classList.remove("hidden");
        // currentStep.classList.add("visible");
        break;
        case "2":
          previousStepIndex++
          currentStepIndex++;
          previousStep.classList.add("hidden");
          previousStep.classList.remove("visible");
          currentStep.classList.remove("hidden");
          currentStep.classList.add("visible");
        break;
        case "step step__3":
          console.log("stap 3")
        break;
        case "step step__4":
          console.log("stap 4")
        break;
      default:
        // code block
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
