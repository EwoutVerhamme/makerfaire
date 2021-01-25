  import lottie from 'lottie-web';

  let stepIndex = undefined;
  let predictions = [];
  const video = document.getElementById('video');

  // Selectors
  const $tutorialIntroButton = document.querySelectorAll('.intro__tutorial--button');
  const $tutorialButton = document.querySelectorAll('.tutorial__button')
  const $header = document.querySelector('.header')

  // Select popup items to chang their content
  const $popup = document.querySelector('.popup__wrapper');
  const $popupTitle = document.querySelector('.popup__title');
  const $popupSubtext = document.querySelector('.popup__subtext');
  const $popupButtons = document.querySelector('.popup__buttons')
  const $popupButton1 = document.querySelector('.button1');
  const $popupButton2 = document.querySelector('.button2');
  const $handtrack = document.querySelector('.handtrack');
  const $noHandTrack = document.querySelector('.nohandtrack');

  const $lottieContainer = document.getElementById('lottie-container');
  const animation = lottie.loadAnimation({
    container: $lottieContainer, // the dom element that will contain the animation
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: 'assets/lottie/tutorial.json' // the path to the animation json
  });

  const $lottieContainerMobile = document.querySelector('.lottie__container--mobile');
  const animationMobile = lottie.loadAnimation({
    container: $lottieContainerMobile, // the dom element that will contain the animation
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: 'assets/lottie/tutorial_mobile.json' // the path to the animation json
  });

  const $lottieFun = document.getElementById('lottie__fun');
  const funAnimation = lottie.loadAnimation({
    container: $lottieFun, // the dom element that will contain the animation
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: "assets/lottie/coffee.json" // the path to the animation json
  });

  const loadHandtrack = async () => {
    const ml5 = await import('ml5');
    // Create a new handpose method
    const handpose = ml5.handpose(video, modelLoaded);


    // Listen to new 'predict' events
    handpose.on('predict', results => {
      console.log(results)
    });

  }

  // When the model is loaded
  function modelLoaded() {
    console.log('Model Loaded!');
    $handtrack.textContent = "Swipe met je hand van links naar rechts"
  }



  // Select all the steps
  const $stepsWrapper = document.querySelector('.steps__wrapper')
  const $back = document.querySelector('.back');
  const $tip = document.querySelector('.tip')

  // Show drawing on click in mobile view
  const $showImgButton = document.querySelector('.show__img--button')
  const $stepTitle = document.querySelector('.step__title');
  const $stepText = document.querySelector('.step__subtext');
  const $stepImg = document.querySelector('.step__right--img');



  const checkWindowSize = () => {
    if (window.innerWidth <= 678) {
      if ($tip) {
        $tip.textContent = ""
      } else {
        if ($tip) {
          $tip.textContent = "Vraag tips"
        }

      }
    }
  }


  // Tutorial logic
  $tutorialIntroButton.forEach(button => {
    button.addEventListener('click', (e) => {
      switch (e.target.id) {
        case "start":
          $header.style.filter = "blur(8px)";
          $popup.style.zIndex = "5";
          $popup.style.animation = "fadein 2s"
          break;
        case "material":
          $popupButton2.setAttribute("id", "dontwant")
          $window.location = "index.php?page=kit";
          break;
        case "letsgo":
          $popupButton1.setAttribute("id", "dontwant")
          $popupButton2.setAttribute("id", "want")
          $popupTitle.innerHTML = "Ooh, nog even dit";
          $popupSubtext.innerHTML = "Wij maken gebruik van je camera en handen om verder te gaan naar de volgende stap. Zo kan je zelf met vieze handen navigeren door onze tutorial!";
          $popupButton1.textContent = "Liever niet";
          $popupButton2.textContent = "Lijkt me leuk!";
          break;
        case "dontwant":
          $popup.style.display = "none";
          $header.style.display = "none";
          stepIndex = 0;
          renderStep();
          setTimeout(() => {
            if (window.innerWidth > 900) {
              funAnimation.play()
            }
          }, 3000);
          break;
        case "want":
          loadHandtrack()
          // UPDATE THE POPUP
          $popupTitle.innerHTML = "En dit...";
          $popupSubtext.innerHTML = "Maak een zwaai beweging met 1 hand voor je camera om naar de volgende stap te gaan. Wil je toch liever klikken of werkt er iets niet? Geen probleem, even goede vrienden!";
          $handtrack.style.display = "flex"
          $noHandTrack.innerHTML = "Ik wil toch liever klikken"
          $popupButtons.style.display = "none";
          break;
        default:
          console.log("Error")
      }
    })
  });

  // Get over all the buttons in the steps
  $tutorialButton.forEach(button => {
    button.addEventListener('click', (e) => {
      switch (e.target.id) {
        case "btnStep0":
          stepIndex = 1;
          renderStep()
          updateAnimation(0, 25)
          break;
        case "btnStep1":
          stepIndex = 2;
          renderStep()
          updateAnimation(25, 62)
          break;
        case "btnStep2":
          stepIndex = 3;
          renderStep()
          updateAnimation(82, 123)
          break;
        case "btnStep3":
          stepIndex = 4;
          renderStep()
          break;
        default:
          console.log("ErrorButtonTutorial")
      }
    })
  });

  const renderStep = () => {
    if ($popup && $header) {
      $popup.style.display = "none"
      $header.style.display = "none"
    }
    if ($stepsWrapper) {
      $stepsWrapper.style.display = "grid"
    }
    localStorage.setItem('step', stepIndex);

    const text = ["Elke maker begint zijn avontuur met schetsen. Zodat je zeker weet welke materialen en componenten je nodig hebt. Maak daarom een goede schets. Een top, front & side view zijn hierbij zeker niet overbodig.", "Het eerste en ook het belangrijkste deel van de drag racewagen is de body. Dit deel houdt alles stevig bij elkaar. Je kan het in verschillende maten en figuren maken, zolang hij maar tegen een stootje kan.", "Om je racewagen vooruit te helpen is een aandrijver een belangrijk onderdeel. Dit kan alles zijn. Een mixer, een motor van een speelgoed auto, boormachine. Het is belangrijk om hiervoor de juiste aandrijving te kiezen en goed vooraf te denken hoe je iets zal monteren met de meegeleverde klemmen.", "Zonder de wielen kan je natuurlijk niet rijden. Bevestig de wielen aan je wielas met behulp van de meegeleverde connectie stukken. Draai de wielen stevig aan op de wielas om de speling zo klein mogelijk te houden. ", "Nu je het basis-model hebt, is het belangrijk om hier je eigen creativiteit aan te geven. Ga opzoek naar gekke dingen die je kan toevoegen aan de racewagen. Maar zorg hierbij ook dat je geen snelheid verliest! "]
    const buttonText = ["Body", "Aandrijving", "Wielen", "Creativiteit", "Afronden"]

    // Set the HTML
    $tutorialButton.forEach(button => {
      button.setAttribute("id", `btnStep${stepIndex}`);
      button.textContent = buttonText[stepIndex];
      $stepTitle.setAttribute("src", `../../assets/img/tutorial/step${stepIndex}/title.svg`)
      $stepText.textContent = text[stepIndex];
    });
    if (stepIndex === "0") {
      setTimeout(() => {
        if (window.innerWidth > 900) {
          funAnimation.play()
        }
      }, 3000);
    }
    if (stepIndex === "1") {
      if ($lottieFun) {
        $lottieFun.style.display = "none"
      }
      updateAnimation(0, 25)
    }
    if (stepIndex === "2") {
      if ($lottieFun) {
        $lottieFun.style.display = "none"
      }
      updateAnimation(25, 62)
    }
    if (stepIndex === "3") {
      if ($lottieFun) {
        $lottieFun.style.display = "none";
      }
      updateAnimation(82, 123)
    }
    if (stepIndex === "4") {
      if ($lottieFun) {
        $lottieFun.style.display = "none"
      }
      console.log("step 5 incoming")
    }
    // updateIndicators()
  }

  const updateAnimation = (firstFrame, lastFrame) => {
    if (window.innerWidth > 900) {
      setTimeout(() => {
        animation.playSegments([firstFrame, lastFrame], true)
      }, 1000);
    }
    if (window.innerWidth > 678 && window.innerWidth < 900) {
      setTimeout(() => {
        animationMobile.playSegments([firstFrame, lastFrame], true)
      }, 1000);
    }

  }


  // Make the step indicators clickable 
  const $indicators = document.querySelectorAll('.step__indicator');

  $indicators.forEach(indicator => {
    indicator.addEventListener('click', (e) => {
      // Get the id of the indicator
      if (window.innerWidth < 678) {
        stepIndex = e.target.id;
        renderStep()
      } else {
        stepIndex = e.target.id;
        renderStep()
      }
    })
  });


  // const updateIndicators = () => {
  //   const $mobileIndicators = document.querySelectorAll('.mobile__buttons');
  //   const $desktopIndicators = document.querySelectorAll('.step__indicator--number');
  //   let j;
  //   for (j = 0; j <= stepIndex; j++) {
  //     if ($mobileIndicators && $desktopIndicators) {
  //       $mobileIndicators[j].classList.add("step__indicator--activemobile");
  //       $desktopIndicators[j].classList.add("step__indicator--active");
  //     }
  //   }
  //   if ($desktopIndicators) {
  //     $mobileIndicators[j].classList.remove("step__indicator--activemobile");
  //     $desktopIndicators[j].classList.remove("step__indicator--active");
  //   }
  // }


  const init = () => {
    checkWindowSize()

    if (localStorage.getItem("step")) {
      stepIndex = localStorage.getItem("step")
      renderStep()
    }
    // Check the windowsize on init
    window.addEventListener('resize', checkWindowSize)

    if ($noHandTrack) {
      stepIndex = 0;
      $noHandTrack.addEventListener('click', () => {
        if ($popup && $header) {
          $popup.style.display = "none"
          $header.style.display = "none"
        }
        if ($stepsWrapper) {
          $stepsWrapper.style.display = "grid"
          renderStep()
        }
      })
    }

    if ($showImgButton) {
      $showImgButton.addEventListener('click', () => {
        $stepImg.style.display === "flex" ? $stepImg.style.display = "none" : $stepImg.style.display = "flex";
      })
    }
  }
  // Check if back exists to prevent error in console
  if ($back) {
    $back.addEventListener('click', () => {
      localStorage.removeItem('step')
    })

  }
  init()
