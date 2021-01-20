{
    // Selectors
  const navigation = document.querySelector('.nav');
  const tutorialButton = document.querySelectorAll('.tutorial__button');
  const header = document.querySelector('.header')
  
  // SELECT THE POPUP TO CHANCE HTML
  const popup = document.querySelector('.popup__wrapper');
  const popupTitle = document.querySelector('.popup__title');
  const popupSubtext = document.querySelector('.popup__subtext');
  const popupButtons = document.querySelector('.popup__buttons')
  const popupButton1 = document.querySelector('.button1');
  const popupButton2 = document.querySelector('.button2');
  const handtrack = document.querySelector('.handtrack');
  const noHandTrack = document.querySelector('.nohandtrack');
  
  // SELECT ALL THE STEPS
  const step0 = document.querySelector('.step__0');
  const step1 = document.querySelector('.step__1');
  const step2 = document.querySelector('.step__2');
  const step3 = document.querySelector('.step__3');
  const step4 = document.querySelector('.step__4');
  
  
  // BEGIN TUTORIAL CODE
  tutorialButton.forEach(button => {
    button.addEventListener('click', (e) => {
      switch(e.target.id) {
        case "material":
          // SET NEW ID FOR BUTTON
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
            step1.classList.add('visible');
            step1.classList.remove('hidden');
            
            break;
          case "want":
          // UPDATE THE POPUP
          popupTitle.innerHTML = "En dit...";
          popupSubtext.innerHTML = "Maak een zwaai beweging met 1 hand voor je camera om naar de volgende stap te gaan. Wil je toch liever klikken of werkt er iets niet? Geen probleem, even goede vrienden!";
          handtrack.style.display = "flex"
          noHandTrack.innerHTML = "Ik wil toch liever klikken"
          popupButtons.style.display = "none";
          
          break;
        case "0":
          header.style.filter =  "blur(8px)";
          popup.style.zIndex = "5";
          popup.style.animation = "fadein 2s"
          step0.classList.add("hidden");
          step0.classList.remove("visible");
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
  
  
  const init =  () => {
  }
  
    init();
  }
  