
/***envoie d'information vers description */

var lienactu=document.querySelectorAll('.lienactu')

lienactu.forEach(actu=>{

   actu.addEventListener('click',function(){
 
      /**recup Titre, text et img*/
      var Titretrans=actu.querySelector('.Titretrans').innerHTML
      var textetrans=actu.querySelector('.texttrans').innerHTML
      var imgtrans=actu.querySelector('.imgtrans').src
      

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




formprixmodal.addEventListener('submit',function(e){

var caseprix=document.querySelector('.caseprix')
var casenom=document.querySelector('.casenom')
var casecontact=document.querySelector('.casecontact')
var montantapi=parseInt(caseprix.value)
var msgalertprix=document.querySelector('.msgalertprix')
var msgalertcontact=document.querySelector('.msgalertcontact')

   if(caseprix.value <500){
      e.preventDefault()
      caseprix.classList.add("is-invalid")
      caseprix.classList.remove("is-valid")
      
     }if(casenom.value==='' || casecontact.value==='' || caseprix.value <500){
      e.preventDefault()
      msgalertprix.innerHTML="Veuillez remplir tous les champs"
      console.log('nom et contact')
      
     }else if(btncoche.checked===true && special.value===""){
      e.preventDefault()
      msgalertprix.innerHTML="* Veuillez remplir tous les champs"
      console.log('btn coche')
     }else if(casecontact.value.length<10){
      e.preventDefault()
      msgalertcontact.innerHTML="* Renseignez les 10 chiffres de votre contacts"
     }else{
        e.preventDefault()
        msgalertprix.innerHTML=""
        msgalertcontact.innerHTML=""
        caseprix.classList.remove("is-invalid")
        caseprix.classList.add("is-valid")


     

        CinetPay.setConfig({
          apikey: '496511264637a741547eca9.50530040',//   YOUR APIKEY
          site_id: '798238',//YOUR_SITE_ID
          notify_url: 'http://mondomaine.com/notify/',
          mode: 'PRODUCTION'
        });
        CinetPay.getCheckout({
          transaction_id: Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
          amount:montantapi,
          currency: 'XOF',
          channels: 'ALL',
          description: 'Test de paiement',   
           //Fournir ces variables pour le paiements par carte bancaire
          customer_name:casenom.value,//Le nom du client
          customer_surname:"souriredafrique",//Le prenom du client
          customer_email: "donn@test.com",//l'email du client
          customer_phone_number: casecontact.value,//l'email du client
          customer_address : "BP 0024",//addresse du client
          customer_city: "Antananarivo",// La ville du client
          customer_country : "CM",// le code ISO du pays
          customer_state : "CM",// le code ISO l'état
          customer_zip_code : "06510", // code postal
    
        });
        CinetPay.waitResponse(function(data) {
          if (data.status == "REFUSED") {
             e.preventDefault()
          } else if (data.status == "ACCEPTED") {
            document.querySelector('.formprixmodal').submit()
          }
      });
      CinetPay.onError(function(data) {
          console.log(data);
      });
  
  
  
       
        if(document.styleSheets[14].ownerNode){
  
          document.styleSheets[14].ownerNode.innerHTML= `input[type='text'], input[type='number'], input[type='email'], input[type='tel'], input[type='password'] {font-size: 16px;}#cp-close svg {fill: #fff;stroke: #fff;width: 10px;height: 10px;}button {cursor: pointer;}#cp-close:hover svg {fill: red;}.cp-modal {position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: center;height: 0vh;background-color: transparent;overflow: hidden;transition: background-color 0.25s ease;z-index: 9999;}.cp-modal.open {position: fixed;width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.75);transition: background-color 0.25s;}.cp-modal.open > .cp-content-wrapper {transform: scale(1);}.cp-modal .cp-content-wrapper {position: relative;display: flex;flex-direction: column;align-items: center;justify-content: flex-start;width: 540px;height: 710px;margin: 0;padding: 2.5rem;background-color: transparent;border-radius: 0.3125rem;transform: scale(0);transition: transform 0.25s;transition-delay: 0.15s;}.cp-modal .cp-content-wrapper .cp-close {position: absolute;top: 0.5rem;right: 0.5rem;display: flex;align-items: center;justify-content: center;width: 1.5rem;height: 1.5rem;border: none;background-color: transparent;font-size: 1.5rem;transition: 0.25s linear;}.cp-modal .cp-content-wrapper .cp-modal-header {position: relative;display: flex;flex-direction: row;align-items: center;justify-content: space-between;width: 100%;margin: 0;padding: 0 0 1.25rem;}.cp-modal .cp-content-wrapper .cp-modal-header h2 {font-size: 1.5rem;font-weight: bold;}.cp-modal .cp-content-wrapper .cp-content {position: relative;display: flex;width: 100%;height: 100%;}.cp-modal .cp-content-wrapper .cp-content p {font-size: 0.875rem;line-height: 1.75;}.cp-modal .cp-content-wrapper .cp-modal-footer {position: relative;display: flex;align-items: center;justify-content: flex-end;width: 100%;margin: 0;padding: 1.875rem 0 0;}.cp-modal .cp-content-wrapper .cp-modal-footer .action {position: relative;margin-left: 0.625rem;padding: 0.625rem 1.25rem;border: none;background-color: slategray;border-radius: 0.25rem;color: white;font-size: 0.87rem;font-weight: 300;overflow: hidden;z-index: 1;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:before {position: absolute;cp-content: "";top: .6rem;left: 0;width: 0%;height: 100%;background-color: rgba(255, 255, 255, 0.2);transition: width 0.25s;z-index: 0;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:first-child {background-color: #2ecc71;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:last-child {background-color: #e74c3c;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:hover:before {width: 100%;}.germinator {display: block;position: absolute;z-index: 100;background-position: center;left: 50%;top: 50%;transform: translate(-50%, -50%);}.germinator span {vertical-align: middle;border-radius: 100%;display: inline-block;width: 3rem;height: 3rem;margin: 3px 2px;-webkit-animation: germinator 0.8s linear infinite alternate;animation: germinator 0.8s linear infinite alternate;}.germinator span:nth-child(1) {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;background: #41ac4c;}.germinator span:nth-child(2) {-webkit-animation-delay: -0.26666s;animation-delay: -0.26666s;background: #357a4f;}.germinator span:nth-child(3) {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;background: #41ac4c;}@keyframes germinator {from {transform: scale(0, 0);}to {transform: scale(1, 1);}}@-webkit-keyframes germinator {from {-webkit-transform: scale(0, 0);}to {-webkit-transform: scale(1, 1);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}} @media only screen and (max-device-width: 667px) {.cp-modal .cp-content-wrapper .cp-close {z-index: 100 !important;right: 0 !important;top: 9% !important;transform: translate(-50%, -50%) !important; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;border-radius: 5px !important;position: absolute !important;display: flex !important;align-items: center !important;justify-content: center !important;width: 1.5rem !important;height: 1.5rem !important;border: none !important;background-color: white !important;transition: 0.25s linear !important;}#cp-close svg{fill: red !important; stroke: red !important;}}`

    }



     }
     
    
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


formadhe.addEventListener('submit',function(e){
  if(nomadhe.value==='' || dateadhe.value==='' || fonctionadhe.value==='' || photoadhe.value==='' || mailadhe.value==='' || regionadhe.value==='' || sectionadhe.value==='' || contactsadhe.value===''){

    e.preventDefault()
    msgalert.innerHTML= "Veillez remplire tous les champs"
    

  }else{
    e.preventDefault()
    msgalert.innerHTML= ""




 /**api de paiement */

        CinetPay.setConfig({
          apikey: '496511264637a741547eca9.50530040',//   YOUR APIKEY
          site_id: '798238',//YOUR_SITE_ID
          notify_url: 'http://mondomaine.com/notify/',
          mode: 'PRODUCTION'
        });
        CinetPay.getCheckout({
          transaction_id: Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
          amount:2000,
          currency: 'XOF',
          channels: 'ALL',
          description: 'Test de paiement',   
           //Fournir ces variables pour le paiements par carte bancaire
          customer_name:nomadhe.value,//Le nom du client
          customer_surname:"ONGSOURIREDAFRIQUE",//Le prenom du client
          customer_email:mailadhe.value,//l'email du client
          customer_phone_number:'0574686453',//l'email du client
          customer_address : "BP 0024",//addresse du client
          customer_city: "abidjan",// La ville du client
          customer_country : "CI",// le code ISO du pays
          customer_state : "CI",// le code ISO l'état
          customer_zip_code : "ABJ2", // code postal
    
        });
        CinetPay.waitResponse(function(data) {
          if (data.status == "REFUSED") {
             e.preventDefault()
    
          } else if (data.status == "ACCEPTED") {
            document.querySelector('.formadhe').submit()  
          }
      });
      CinetPay.onError(function(data) {
          console.log(data);
      });
    
     
      if(document.styleSheets[14].ownerNode){
    
          document.styleSheets[14].ownerNode.innerHTML= `input[type='text'], input[type='number'], input[type='email'], input[type='tel'], input[type='password'] {font-size: 16px;}#cp-close svg {fill: #fff;stroke: #fff;width: 10px;height: 10px;}button {cursor: pointer;}#cp-close:hover svg {fill: red;}.cp-modal {position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: center;height: 0vh;background-color: transparent;overflow: hidden;transition: background-color 0.25s ease;z-index: 9999;}.cp-modal.open {position: fixed;width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.75);transition: background-color 0.25s;}.cp-modal.open > .cp-content-wrapper {transform: scale(1);}.cp-modal .cp-content-wrapper {position: relative;display: flex;flex-direction: column;align-items: center;justify-content: flex-start;width: 540px;height: 710px;margin: 0;padding: 2.5rem;background-color: transparent;border-radius: 0.3125rem;transform: scale(0);transition: transform 0.25s;transition-delay: 0.15s;}.cp-modal .cp-content-wrapper .cp-close {position: absolute;top: 0.5rem;right: 0.5rem;display: flex;align-items: center;justify-content: center;width: 1.5rem;height: 1.5rem;border: none;background-color: transparent;font-size: 1.5rem;transition: 0.25s linear;}.cp-modal .cp-content-wrapper .cp-modal-header {position: relative;display: flex;flex-direction: row;align-items: center;justify-content: space-between;width: 100%;margin: 0;padding: 0 0 1.25rem;}.cp-modal .cp-content-wrapper .cp-modal-header h2 {font-size: 1.5rem;font-weight: bold;}.cp-modal .cp-content-wrapper .cp-content {position: relative;display: flex;width: 100%;height: 100%;}.cp-modal .cp-content-wrapper .cp-content p {font-size: 0.875rem;line-height: 1.75;}.cp-modal .cp-content-wrapper .cp-modal-footer {position: relative;display: flex;align-items: center;justify-content: flex-end;width: 100%;margin: 0;padding: 1.875rem 0 0;}.cp-modal .cp-content-wrapper .cp-modal-footer .action {position: relative;margin-left: 0.625rem;padding: 0.625rem 1.25rem;border: none;background-color: slategray;border-radius: 0.25rem;color: white;font-size: 0.87rem;font-weight: 300;overflow: hidden;z-index: 1;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:before {position: absolute;cp-content: "";top: .6rem;left: 0;width: 0%;height: 100%;background-color: rgba(255, 255, 255, 0.2);transition: width 0.25s;z-index: 0;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:first-child {background-color: #2ecc71;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:last-child {background-color: #e74c3c;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:hover:before {width: 100%;}.germinator {display: block;position: absolute;z-index: 100;background-position: center;left: 50%;top: 50%;transform: translate(-50%, -50%);}.germinator span {vertical-align: middle;border-radius: 100%;display: inline-block;width: 3rem;height: 3rem;margin: 3px 2px;-webkit-animation: germinator 0.8s linear infinite alternate;animation: germinator 0.8s linear infinite alternate;}.germinator span:nth-child(1) {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;background: #41ac4c;}.germinator span:nth-child(2) {-webkit-animation-delay: -0.26666s;animation-delay: -0.26666s;background: #357a4f;}.germinator span:nth-child(3) {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;background: #41ac4c;}@keyframes germinator {from {transform: scale(0, 0);}to {transform: scale(1, 1);}}@-webkit-keyframes germinator {from {-webkit-transform: scale(0, 0);}to {-webkit-transform: scale(1, 1);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}} @media only screen and (max-device-width: 667px) {.cp-modal .cp-content-wrapper .cp-close {z-index: 100 !important;right: 0 !important;top: 9% !important;transform: translate(-50%, -50%) !important; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;border-radius: 5px !important;position: absolute !important;display: flex !important;align-items: center !important;justify-content: center !important;width: 1.5rem !important;height: 1.5rem !important;border: none !important;background-color: white !important;transition: 0.25s linear !important;}#cp-close svg{fill: red !important; stroke: red !important;}}`
    
    }

  }
})