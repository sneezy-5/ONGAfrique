var imgs=document.querySelectorAll('.myImg')

imgs.forEach(img=>{

    var parent=img.parentNode
    var titleimg=parent.querySelector('.Titretrans')
    var modal=parent.querySelector('.myModal')
    var modalImg=parent.querySelector('.img01')
    var captionText=parent.querySelector('.caption')
    var span=parent.querySelector(".close")

    img.addEventListener('click',function(){

        modal.style.display= "block";
        modal.style.zIndex= "100";
        modalImg.src=img.src;
        captionText.innerHTML = titleimg.innerHTML;

    }) 

      

// When the user clicks on <span> (x), close the modal
   span.addEventListener('click',function(){
    modal.style.display = "none";
    modal.style.zIndex = "0"
   })

})














/***envoie d'information vers description */

var btntrans=document.querySelectorAll('.btntrans')

btntrans.forEach(btntran=>{
   var parentenvoie=btntran.parentNode.parentNode
   btntran.addEventListener('click',function(){
      
      /**recup Titre, text et img*/
      var Titretrans=parentenvoie.querySelector('.Titretrans').innerHTML
      var textetrans=parentenvoie.querySelector('.texttrans').innerHTML
      var imgtrans=parentenvoie.querySelector('.imgtrans').src


      /**tranfert */
     localStorage.setItem('imgtrans',imgtrans),
     localStorage.setItem('Titretrans',Titretrans), 
     
      localStorage.setItem('textetrans',textetrans)
   })
})





















/*newletter header */


var formheader=document.querySelector('.formheader')
var newsletterheader=document.querySelector('.newsletterheader')


formheader.addEventListener('submit', function(e){
     if(newsletterheader.value===""){
        e.preventDefault()
        newsletterheader.classList.add("is-invalid")
     }else{
        newsletterheader.classList.add("is-valid")
     }
})

/*fin newletter header */




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



/*FORM CHOIX DU MONTANT*/

var boutonprix=document.querySelectorAll('.btnprix')
var formprixmodal=document.querySelector('.formprixmodal')
var caseprix=document.querySelector('.caseprix')
var btncoche=document.querySelector('.btncoche')
var special=document.querySelector('.specialchamp')

boutonprix.forEach(btnprix=>{
   var caseprix=document.querySelector('.caseprix')
   btnprix.addEventListener('click',function(){

      if(btnprix.classList.contains('active')){
        caseprix.value=parseInt(btnprix.innerHTML)
       }

   })

})






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


