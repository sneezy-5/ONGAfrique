var champs=document.querySelectorAll('.champ')
var formconnex=document.querySelector('.formconnex')


    formconnex.addEventListener('submit', function(e){
        
        champs.forEach(champ=>{
        if(champ.value===""){
            e.preventDefault()
            champ.classList.add("is-invalid")
            champ.classList.remove("is-valid")
        }else{
            champ.classList.remove("is-invalid")
            champ.classList.add("is-valid")
        }
    })
    })






/*newletter footer */

var formfooter=document.querySelector('.formfooter')
var newsletterfooter=document.querySelector('.newsletterfooter')

formfooter.addEventListener('submit', function(e){
    
   if(newsletterfooter.value===""){
       e.preventDefault()
       newsletterfooter.classList.add("is-invalid")
    }else{
      newsletterfooter.classList.add("is-valid")
    }
})

/*fin newletter footer */











/*FIN FORM CHOIX DU MONTANT*/

/*FIN MODAL */












/***NEWWW ADHESIONN */

const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".step-forms");
const progressSteps = document.querySelectorAll(".progress-step");


let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
   
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
    
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("step-forms-active") &&
      formStep.classList.remove("step-forms-active");
  });

  formSteps[formStepsNum].classList.add("step-forms-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
      
    } else {
      progressStep.classList.remove("progress-step-active");
   
    }
  });

  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum) {
      
      progressStep.classList.add("progress-step-check");
    } else {
   
      progressStep.classList.remove("progress-step-check");
    }
  });
 
  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}


var formadhe=document.querySelector('.formadhe')

var msgalert=document.querySelector('.msgalert')

var nomadhe=document.querySelector('.nomadhe')
var dateadhe=document.querySelector('.dateadhe')
var fonctionadhe=document.querySelector('.fonctionadhe')
var photoadhe=document.querySelector('.photoadhe')
var mailadhe=document.querySelector('.mailadhe')
var regionadhe=document.querySelector('.regionadhe')
var sectionadhe=document.querySelector('.sectionadhe')
var contactsadhe=document.querySelector('.contactsadhe')

