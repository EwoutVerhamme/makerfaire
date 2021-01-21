{
    // Selectors
  const tutorialIntroButton = document.querySelectorAll('.intro__tutorial--button');
  const tutorialButton = document.querySelectorAll('.tutorial__button')
  const header = document.querySelector('.header')
  
  // Select popup items to chang their content
  const popup = document.querySelector('.popup__wrapper');
  const popupTitle = document.querySelector('.popup__title');
  const popupSubtext = document.querySelector('.popup__subtext');
  const popupButtons = document.querySelector('.popup__buttons')
  const popupButton1 = document.querySelector('.button1');
  const popupButton2 = document.querySelector('.button2');
  const handtrack = document.querySelector('.handtrack');
  const noHandTrack = document.querySelector('.nohandtrack');
  
  // Select all the steps
  const stepsWrapper = document.querySelector('.steps__wrapper')
  const back = document.querySelector('.back');
  const tip = document.querySelector('.tip')

  // Show drawing button
  const showImg = document.querySelector('.show__img')

  // Select the indicators
  const mobileIndicators = document.querySelectorAll('.mobile__buttons');
  const desktopIndicators = document.querySelectorAll('.step__indicator--wrapper');

  // Get the device width to set the settings and behaviours
  const checkWindowSize = () => {
    window.addEventListener('resize', checkWindowSize)
    if(window.innerWidth < 678 && mobileIndicators && desktopIndicators){
      // Chance between mobile and desktop indicators
      mobileIndicators.forEach(mobileIndicator => {
        mobileIndicator.style.display = "flex"
      })
      desktopIndicators.forEach(desktopIndicator => {
        desktopIndicator.style.display = "none"
      })
      // Remove content from tutorial navigation when mobile
    
      if(back && tip){
        back.textContent = ""
        tip.textContent = ""
        }
      if(showImg) {
        // Remove the button
        showImg.style.display = "initial"
        }
    }else {
      // Set for desktop
      mobileIndicators.forEach(mobileIndicator => {
        mobileIndicator.style.display = "none"
      })
      desktopIndicators.forEach(desktopIndicator => {
        desktopIndicator.style.display = "flex"
      })
      // Check if back & tip exists, otherwise i got error in homepage
      if(back && tip){
      back.textContent = "Verlaat de tutorial"
      tip.textContent = "Vraag tips"
      }

      if(showImg) {
      // Remove the button
      showImg.style.display = "none"
      }
    
    }
  }

  // Tutorial logic
  tutorialIntroButton.forEach(button => {
    button.addEventListener('click', (e) => {
      switch(e.target.id) {
        case "start":
          // Blur the header
          header.style.filter =  "blur(8px)";
          // Bring popup to front
          popup.style.zIndex = "5";
          // Add clean animation
          popup.style.animation = "fadein 2s"
          break;
          case "material":
            // Set new id for the button
            popupButton2.setAttribute("id", "dontwant" )
            window.location = "index.php?page=kit";
            break;
            case "letsgo":
            // SET NEW ID FOR BUTTON
            popupButton1.setAttribute("id", "dontwant" )
            popupButton2.setAttribute("id", "want" )
            // UPDATE THE POPUP
            popupTitle.innerHTML = "Ooh, nog even dit";
            popupSubtext.innerHTML = "Wij maken gebruik van je camera en handen om verder te gaan naar de volgende stap. Zo kan je zelf met vieze handen navigeren door onze tutorial!";
            popupButton1.textContent = "Liever niet";
            popupButton2.textContent = "Lijkt me leuk!";
            break;
            case "dontwant":
              // REMOVE POPUP, NAV, LEVEL AND GO TO STEP 1
              popup.style.display = "none";
              header.style.display =  "none";
              stepsWrapper.style.zIndex = "2"
              stepsWrapper.classList.remove('hidden');
              renderStep(0)
              break;
            case "want":
            // UPDATE THE POPUP
            popupTitle.innerHTML = "En dit...";
            popupSubtext.innerHTML = "Maak een zwaai beweging met 1 hand voor je camera om naar de volgende stap te gaan. Wil je toch liever klikken of werkt er iets niet? Geen probleem, even goede vrienden!";
            handtrack.style.display = "flex"
            noHandTrack.innerHTML = "Ik wil toch liever klikken"
            popupButtons.style.display = "none";
            break;
        default:
          console.log("Error")
      }
    })
  });

// Select all the step-info
const stepTitle = document.querySelector('.step__title');
const stepText = document.querySelector('.step__subtext');
const stepImg = document.querySelector('.step__right--img');

// Get over all the buttons in the steps
  tutorialButton.forEach(button => {
    button.addEventListener('click', (e) => {
      switch(e.target.id) {
        case "btnStep0":
          // Set Step 2
          renderStep(1)
          break;
          case "btnStep1":
            // Set step 3
            renderStep(2)
          break;
          case "btnStep2":
            // Set step 4
            renderStep(3)
          break;
          case "btnStep3":
            // Set step 5
            renderStep(4)
          break;
        default:
          console.log("ErrorButtonTutorial")
      }
    })
  });

    const renderStep = (stepIndex) => {
      updateIndicators(stepIndex)
      // Always set the popups and header to none
      if(popup){
        popup.style.display = "none";
        header.style.display =  "none";
        // Always set the steps to view
        stepsWrapper.style.zIndex = "2"
        stepsWrapper.classList.remove('hidden');
      }
  
      // Selectors
      const text = ["Elke maker begint zijn avontuur met schetsen. Zodat je zeker weet welke materialen en componenten je nodig hebt. Maak daarom een goede schets. Een top, front & side view zijn hierbij zeker niet overbodig.","Het eerste en ook het belangrijkste deel van de drag racewagen is de body. Dit deel houdt alles stevig bij elkaar. Je kan het in verschillende maten en figuren maken, zolang hij maar tegen een stootje kan.","Om je racewagen vooruit te helpen is een aandrijver een belangrijk onderdeel. Dit kan alles zijn. Een mixer, een motor van een speelgoed auto, boormachine. Het is belangrijk om hiervoor de juiste aandrijving te kiezen en goed vooraf te denken hoe je iets zal monteren met de meegeleverde klemmen.","Zonder de wielen kan je natuurlijk niet rijden. Bevestig de wielen aan je wielas met behulp van de meegeleverde connectie stukken. Draai de wielen stevig aan op de wielas om de speling zo klein mogelijk te houden. ","Nu je het basis-model hebt, is het belangrijk om hier je eigen creativiteit aan te geven. Ga opzoek naar gekke dingen die je kan toevoegen aan de racewagen. Maar zorg hierbij ook dat je geen snelheid verliest! "]
      const buttonText = ["Body", "Aandrijving", "Wielen", "Creativiteit", "Afronden"]
      // Get all the tutorial buttons
      tutorialButton.forEach(button => {
      button.setAttribute("id", `btnStep${stepIndex}` );
      button.textContent = buttonText[stepIndex];
      stepTitle.setAttribute("src", `../../assets/img/tutorial/step${stepIndex}/title.svg` )
      stepImg.setAttribute("src", `../../assets/img/tutorial/step${stepIndex}/image.svg`)
      stepText.textContent = text[stepIndex];
      localStorage.setItem('step', stepIndex)
  
      });      
    }

    const updateIndicators = (stepIndex) => {
    // Set all the indicators colored
    for(let i = 0; i <= stepIndex; i++){
      const indicatorActive = document.querySelector(`.indicator${i}`)
      const indicatorActiveMobile = document.querySelector(`.indicatorMobile${i}`)

      if(indicatorActive && indicatorActiveMobile){
        if(i > stepIndex  ) {
          // Set all the passed indicators to passed
          indicatorActiveMobile.classList.remove("step__indicator--activemobile");
          indicatorActive.classList.remove("step__indicator--active");
     }else {
       // Set all the passed indicators to passed
       
       indicatorActiveMobile.classList.add("step__indicator--activemobile");
       indicatorActive.classList.add("step__indicator--active");
     }
      }
  
}
    }

    // Make the step indicators clickable 
    const indicators = document.querySelectorAll('.step__indicator');

    indicators.forEach(indicator => {
    indicator.addEventListener('click', (e) => {
      // Get the id of the indicator
      if(window.innerWidth < 678){
        const stepIndex = e.path[1].id;
        renderStep(stepIndex)
      }else {
        const stepIndex = e.path[2].id;
        renderStep(stepIndex)
      }
    })     
    });
  
  

  const init = () => {
      if(localStorage.getItem("step")){
        const stepIndex = localStorage.getItem("step")
        // Get the saved step 
        renderStep(stepIndex)
      }

      // Check the windowsize on init
      checkWindowSize()
  }

  // Check if back exists to prevent error in console
  if(back){
    back.addEventListener('click', () => {
      localStorage.removeItem('step')
      console.log(localStorage)
    })
  }
init()
}