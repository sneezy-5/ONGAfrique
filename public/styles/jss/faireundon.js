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


   // Récupérer les taux de change actuels
   var devise=document.querySelector('.devise').innerHTML
   var chiffrebtn=Number(btnprix.innerHTML)

  const url = "https://api.exchangerate-api.com/v4/latest/" + devise;
  fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error('Erreur de réponse du serveur');
      }
      return response.json();
    })
    .then(data => {
      const taux = data.rates;
      let resultat2 = "";
      
      // Convertir en Franc CFA
      if (devise !== "XOF") {
        const francs_cfa = chiffrebtn * taux.XOF;
        resultat2 += `${chiffrebtn.toFixed(2)} ${devise} = ${francs_cfa.toFixed(2)} Francs CFA<br>`;
        document.querySelector('.FrCfa').innerHTML=`${francs_cfa.toFixed(2)}`
        document.querySelector('.FrCfa').value=`${francs_cfa.toFixed(2)}`
      }

      if(devise === "XOF"){
        document.querySelector('.FrCfa').innerHTML=chiffrebtn
        document.querySelector('.FrCfa').value=chiffrebtn
      }
      
      // Afficher les résultats
      document.getElementById("resultat2").innerHTML = resultat2;
       document.getElementById("resultat2").style.display="flex"
       document.getElementById("resultat").style.display="none"
    })
    .catch(error => console.error(error));


   })

})



/**choix du moyens de paiemant */

var btnbancaire=document.querySelector('.btnbancaire')
var btnmobilemoney=document.querySelector('.btnmobilemoney')


/**FIN DEVISE */

formprixmodal.addEventListener('submit',function(e){

var caseprix=document.querySelector('.caseprix')
var casenom=document.querySelector('.casenom')
var nomclient=casenom.value
var casecontact=document.querySelector('.casecontact')
var montantapi=parseInt(caseprix.value)
var montantapayer=document.querySelector('.FrCfa').value
var msgalertprix=document.querySelector('.msgalertprix')
var msgalertcontact=document.querySelector('.msgalertcontact')

var devise=document.querySelector('.devise')
var alertprix=document.querySelector('.alertprix')



if(btnmobilemoney.classList.contains('active')){

  if(devise.innerHTML=="XOF"){

    if(caseprix.value <100){
      e.preventDefault()
      caseprix.classList.add("is-invalid")
      caseprix.classList.remove("is-valid")
      alertprix.innerHTML='Entrez un montant superieur ou égale à 100'
      
     }if(casenom.value==='' || casecontact.value==='' || caseprix.value <100){
      e.preventDefault()
      msgalertprix.style.display="flex"
      alertprix.innerHTML='Entrez un montant superieur ou égale à 100'
      console.log('nom et contact')
      
     }else if(btncoche.checked===true && special.value===""){
      e.preventDefault()
      msgalertprix.style.display="flex"
      
      console.log('btn coche')
     }else if(casecontact.value.length<10){
      e.preventDefault()
      msgalertcontact.style.display="flex"
  
     }else{
        e.preventDefault()
        msgalertprix.style.display="none"
        msgalertcontact.style.display="none"
        caseprix.classList.remove("is-invalid")
        caseprix.classList.add("is-valid")
  
  
        console.log('payer en XOF')
  
        CinetPay.setConfig({
          apikey: '496511264637a741547eca9.50530040',//   YOUR APIKEY
          site_id: '798238',//YOUR_SITE_ID
          notify_url: 'http://mondomaine.com/notify/',
          mode: 'PRODUCTION'
        });
        CinetPay.getCheckout({
          transaction_id: Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
          amount:montantapayer,
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
  
  
  
       
        if(document.head.lastChild){
  
          document.head.lastChild.innerHTML= `input[type='text'], input[type='number'], input[type='email'], input[type='tel'], input[type='password'] {font-size: 16px;}#cp-close svg {fill: #fff;stroke: #fff;width: 10px;height: 10px;}button {cursor: pointer;}#cp-close:hover svg {fill: red;}.cp-modal {position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: center;height: 0vh;background-color: transparent;overflow: hidden;transition: background-color 0.25s ease;z-index: 9999;}.cp-modal.open {position: fixed;width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.75);transition: background-color 0.25s;}.cp-modal.open > .cp-content-wrapper {transform: scale(1);}.cp-modal .cp-content-wrapper {position: relative;display: flex;flex-direction: column;align-items: center;justify-content: flex-start;width: 540px;height: 710px;margin: 0;padding: 2.5rem;background-color: transparent;border-radius: 0.3125rem;transform: scale(0);transition: transform 0.25s;transition-delay: 0.15s;}.cp-modal .cp-content-wrapper .cp-close {position: absolute;top: 0.5rem;right: 0.5rem;display: flex;align-items: center;justify-content: center;width: 1.5rem;height: 1.5rem;border: none;background-color: transparent;font-size: 1.5rem;transition: 0.25s linear;}.cp-modal .cp-content-wrapper .cp-modal-header {position: relative;display: flex;flex-direction: row;align-items: center;justify-content: space-between;width: 100%;margin: 0;padding: 0 0 1.25rem;}.cp-modal .cp-content-wrapper .cp-modal-header h2 {font-size: 1.5rem;font-weight: bold;}.cp-modal .cp-content-wrapper .cp-content {position: relative;display: flex;width: 100%;height: 100%;}.cp-modal .cp-content-wrapper .cp-content p {font-size: 0.875rem;line-height: 1.75;}.cp-modal .cp-content-wrapper .cp-modal-footer {position: relative;display: flex;align-items: center;justify-content: flex-end;width: 100%;margin: 0;padding: 1.875rem 0 0;}.cp-modal .cp-content-wrapper .cp-modal-footer .action {position: relative;margin-left: 0.625rem;padding: 0.625rem 1.25rem;border: none;background-color: slategray;border-radius: 0.25rem;color: white;font-size: 0.87rem;font-weight: 300;overflow: hidden;z-index: 1;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:before {position: absolute;cp-content: "";top: .6rem;left: 0;width: 0%;height: 100%;background-color: rgba(255, 255, 255, 0.2);transition: width 0.25s;z-index: 0;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:first-child {background-color: #2ecc71;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:last-child {background-color: #e74c3c;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:hover:before {width: 100%;}.germinator {display: block;position: absolute;z-index: 100;background-position: center;left: 50%;top: 50%;transform: translate(-50%, -50%);}.germinator span {vertical-align: middle;border-radius: 100%;display: inline-block;width: 3rem;height: 3rem;margin: 3px 2px;-webkit-animation: germinator 0.8s linear infinite alternate;animation: germinator 0.8s linear infinite alternate;}.germinator span:nth-child(1) {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;background: #41ac4c;}.germinator span:nth-child(2) {-webkit-animation-delay: -0.26666s;animation-delay: -0.26666s;background: #357a4f;}.germinator span:nth-child(3) {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;background: #41ac4c;}@keyframes germinator {from {transform: scale(0, 0);}to {transform: scale(1, 1);}}@-webkit-keyframes germinator {from {-webkit-transform: scale(0, 0);}to {-webkit-transform: scale(1, 1);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}} @media only screen and (max-device-width: 667px) {.cp-modal .cp-content-wrapper .cp-close {z-index: 100 !important;right: 0 !important;top: 9% !important;transform: translate(-50%, -50%) !important; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;border-radius: 5px !important;position: absolute !important;display: flex !important;align-items: center !important;justify-content: center !important;width: 1.5rem !important;height: 1.5rem !important;border: none !important;background-color: white !important;transition: 0.25s linear !important;}#cp-close svg{fill: red !important; stroke: red !important;}}`
  
    }
  
     }
  
     if(caseprix.value > 100){
      e.preventDefault()
      caseprix.classList.remove("is-invalid")
      caseprix.classList.add("is-valid")
      
     }
  
  
  }
  
  if(devise.innerHTML=="EUR" || devise.innerHTML=="USD"){
  
    if(caseprix.value <50){
      e.preventDefault()
      caseprix.classList.add("is-invalid")
      caseprix.classList.remove("is-valid")
      alertprix.innerHTML='Entrez un montant superieur ou égale à 50'
      
     }if(casenom.value==='' || casecontact.value==='' || caseprix.value <50){
      e.preventDefault()
      msgalertprix.style.display="flex"
      alertprix.innerHTML='Entrez un montant superieur ou égale à 50'
      console.log('nom et contact')
      
     }else if(btncoche.checked===true && special.value===""){
      e.preventDefault()
      msgalertprix.style.display="flex"
      
      console.log('btn coche')
     }else if(casecontact.value.length<10){
      e.preventDefault()
      msgalertcontact.style.display="flex"
  
     }else{
        e.preventDefault()
        msgalertprix.style.display="none"
        msgalertcontact.style.display="none"
        caseprix.classList.remove("is-invalid")
        caseprix.classList.add("is-valid")
  
  
        console.log('payer en EUR ET USD' )
  
  
        CinetPay.setConfig({
          apikey: '496511264637a741547eca9.50530040',//   YOUR APIKEY
          site_id: '798238',//YOUR_SITE_ID
          notify_url: 'http://mondomaine.com/notify/',
          mode: 'PRODUCTION'
        });
        CinetPay.getCheckout({
          transaction_id: Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
          amount:montantapayer,
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
  
  
  
       
        if(document.head.lastChild.ownerNode){
  
          document.head.lastChild.ownerNode.innerHTML= `input[type='text'], input[type='number'], input[type='email'], input[type='tel'], input[type='password'] {font-size: 16px;}#cp-close svg {fill: #fff;stroke: #fff;width: 10px;height: 10px;}button {cursor: pointer;}#cp-close:hover svg {fill: red;}.cp-modal {position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: center;height: 0vh;background-color: transparent;overflow: hidden;transition: background-color 0.25s ease;z-index: 9999;}.cp-modal.open {position: fixed;width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.75);transition: background-color 0.25s;}.cp-modal.open > .cp-content-wrapper {transform: scale(1);}.cp-modal .cp-content-wrapper {position: relative;display: flex;flex-direction: column;align-items: center;justify-content: flex-start;width: 540px;height: 710px;margin: 0;padding: 2.5rem;background-color: transparent;border-radius: 0.3125rem;transform: scale(0);transition: transform 0.25s;transition-delay: 0.15s;}.cp-modal .cp-content-wrapper .cp-close {position: absolute;top: 0.5rem;right: 0.5rem;display: flex;align-items: center;justify-content: center;width: 1.5rem;height: 1.5rem;border: none;background-color: transparent;font-size: 1.5rem;transition: 0.25s linear;}.cp-modal .cp-content-wrapper .cp-modal-header {position: relative;display: flex;flex-direction: row;align-items: center;justify-content: space-between;width: 100%;margin: 0;padding: 0 0 1.25rem;}.cp-modal .cp-content-wrapper .cp-modal-header h2 {font-size: 1.5rem;font-weight: bold;}.cp-modal .cp-content-wrapper .cp-content {position: relative;display: flex;width: 100%;height: 100%;}.cp-modal .cp-content-wrapper .cp-content p {font-size: 0.875rem;line-height: 1.75;}.cp-modal .cp-content-wrapper .cp-modal-footer {position: relative;display: flex;align-items: center;justify-content: flex-end;width: 100%;margin: 0;padding: 1.875rem 0 0;}.cp-modal .cp-content-wrapper .cp-modal-footer .action {position: relative;margin-left: 0.625rem;padding: 0.625rem 1.25rem;border: none;background-color: slategray;border-radius: 0.25rem;color: white;font-size: 0.87rem;font-weight: 300;overflow: hidden;z-index: 1;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:before {position: absolute;cp-content: "";top: .6rem;left: 0;width: 0%;height: 100%;background-color: rgba(255, 255, 255, 0.2);transition: width 0.25s;z-index: 0;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:first-child {background-color: #2ecc71;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:last-child {background-color: #e74c3c;}.cp-modal .cp-content-wrapper .cp-modal-footer .action:hover:before {width: 100%;}.germinator {display: block;position: absolute;z-index: 100;background-position: center;left: 50%;top: 50%;transform: translate(-50%, -50%);}.germinator span {vertical-align: middle;border-radius: 100%;display: inline-block;width: 3rem;height: 3rem;margin: 3px 2px;-webkit-animation: germinator 0.8s linear infinite alternate;animation: germinator 0.8s linear infinite alternate;}.germinator span:nth-child(1) {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;background: #41ac4c;}.germinator span:nth-child(2) {-webkit-animation-delay: -0.26666s;animation-delay: -0.26666s;background: #357a4f;}.germinator span:nth-child(3) {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;background: #41ac4c;}@keyframes germinator {from {transform: scale(0, 0);}to {transform: scale(1, 1);}}@-webkit-keyframes germinator {from {-webkit-transform: scale(0, 0);}to {-webkit-transform: scale(1, 1);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 320px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}}@media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 384px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) and (orientation: portrait) {}@media screen and (device-width: 360px) and (device-height: 592px) and (-webkit-device-pixel-ratio: 4) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) and (orientation: portrait) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}}@media screen and (device-width: 480px) and (device-height: 800px) and (orientation: landscape) {.cp-modal .cp-content-wrapper {width: 100%;padding: .0rem;}#cp-close svg {fill: red;stroke: red;width: 15px;height: 15px;}.cp-modal .cp-content-wrapper .cp-close {top: .6rem;right: .6rem;}.cp-modal .cp-content-wrapper {height: clamp(600px, calc(100vh - 2rem), 741px);}} @media only screen and (max-device-width: 667px) {.cp-modal .cp-content-wrapper .cp-close {z-index: 100 !important;right: 0 !important;top: 9% !important;transform: translate(-50%, -50%) !important; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;border-radius: 5px !important;position: absolute !important;display: flex !important;align-items: center !important;justify-content: center !important;width: 1.5rem !important;height: 1.5rem !important;border: none !important;background-color: white !important;transition: 0.25s linear !important;}#cp-close svg{fill: red !important; stroke: red !important;}}`
  
    }
  
     }
  
  
     if(caseprix.value > 50){
      e.preventDefault()
      caseprix.classList.remove("is-invalid")
      caseprix.classList.add("is-valid")
      
     }
  
  
  }


}else if(btnbancaire.classList.contains('active')){

  if(devise.innerHTML=="XOF"){

    if(caseprix.value <100){
      e.preventDefault()
      caseprix.classList.add("is-invalid")
      caseprix.classList.remove("is-valid")
      alertprix.innerHTML='Entrez un montant superieur ou égale à 100'
      
     }if(casenom.value==='' || casecontact.value==='' || caseprix.value <100){
      e.preventDefault()
      msgalertprix.style.display="flex"
      alertprix.innerHTML='Entrez un montant superieur ou égale à 100'
      console.log('nom et contact')
      
     }else if(btncoche.checked===true && special.value===""){
      e.preventDefault()
      msgalertprix.style.display="flex"
      
      console.log('btn coche')
     }else if(casecontact.value.length<10){
      e.preventDefault()
      msgalertcontact.style.display="flex"
  
     }else{
        e.preventDefault()
        msgalertprix.style.display="none"
        msgalertcontact.style.display="none"
        caseprix.classList.remove("is-invalid")
        caseprix.classList.add("is-valid")
  
  
        console.log('payer en XOF')
  
        
        
        openKkiapayWidget({amount:montantapayer,position:"center",theme:"rgb(200 166 43)",callback:"",name:nomclient, sandbox:"true", key:"85d5ea40ce3911edb98f214e308c4a18"})
      
        addSuccessListener(response => {
          console.log(response);
          document.querySelector('.formprixmodal').submit()
      });
  
     }
  
     if(caseprix.value > 100){
      e.preventDefault()
      caseprix.classList.remove("is-invalid")
      caseprix.classList.add("is-valid")
      
     }
  
  
  }



  if(devise.innerHTML=="EUR" || devise.innerHTML=="USD"){
  
    if(caseprix.value <50){
      e.preventDefault()
      caseprix.classList.add("is-invalid")
      caseprix.classList.remove("is-valid")
      alertprix.innerHTML='Entrez un montant superieur ou égale à 50'
      
     }if(casenom.value==='' || casecontact.value==='' || caseprix.value <50){
      e.preventDefault()
      msgalertprix.style.display="flex"
      alertprix.innerHTML='Entrez un montant superieur ou égale à 50'
      console.log('nom et contact')
      
     }else if(btncoche.checked===true && special.value===""){
      e.preventDefault()
      msgalertprix.style.display="flex"
      
      console.log('btn coche')
     }else if(casecontact.value.length<10){
      e.preventDefault()
      msgalertcontact.style.display="flex"
  
     }else{
        e.preventDefault()
        msgalertprix.style.display="none"
        msgalertcontact.style.display="none"
        caseprix.classList.remove("is-invalid")
        caseprix.classList.add("is-valid")
  
  
        console.log('payer en EUR ET USD' )
  

        openKkiapayWidget({amount:montantapayer,position:"center",theme:"#0095ff",callback:"", sandbox:"true", key:"85d5ea40ce3911edb98f214e308c4a18"})

  
     }
  
  
     if(caseprix.value > 50){
      e.preventDefault()
      caseprix.classList.remove("is-invalid")
      caseprix.classList.add("is-valid")
      
     }
  
  
  }


}else{
  e.preventDefault()
  console.log("bloc")
}



     
    
})










/**DEVISE 1 */
/*  NEWWWWWWWWWWWWW FORM CHOIX DU MONTANT*/

var boutondevis=document.querySelectorAll('.btnprdevise')

boutondevis.forEach(btndevis=>{
   var devise=document.querySelector('.devise')
   var devisealerte=document.querySelector('.devisealerte')
   var FrCfa=document.querySelector('.FrCfa')
   btndevis.addEventListener('click',function(){

      if(btndevis.classList.contains('active')){
        devise.innerHTML=btndevis.innerHTML
        devisealerte.innerHTML=btndevis.innerHTML
        caseprix.value=""
        resultat.innerHTML=""
        caseprix.classList.remove('is-invalid')
        caseprix.classList.remove("is-valid")
        resultat.style.display="none"
        resultat2.style.display="none"
        FrCfa.value=""
        FrCfa.innerHTML=""
    
       }
   })

})


function convertisseur_devise() {
  const montant = Number(document.querySelector(".caseprix").value);
  const devise = document.querySelector(".devise").innerHTML;
  
  // Vérifier que le montant est un nombre
  if (isNaN(montant)) {
    alert("Veuillez entrer un nombre valide.");
    return;
  }
  
  // Récupérer les taux de change actuels
  const url = "https://api.exchangerate-api.com/v4/latest/" + devise;
  fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error('Erreur de réponse du serveur');
      }
      return response.json();
    })
    .then(data => {
      const taux = data.rates;
      let resultat = "";
      
      // Convertir en Franc CFA
      if (devise !== "XOF") {
        const francs_cfa = montant * taux.XOF;
        resultat += `${montant.toFixed(2)} ${devise} = ${francs_cfa.toFixed(2)} Francs CFA<br>`;
        document.querySelector('.FrCfa').innerHTML=`${francs_cfa.toFixed(2)}`
        document.querySelector('.FrCfa').value=`${francs_cfa.toFixed(2)}`
      }

      if(devise === "XOF"){
        document.querySelector('.FrCfa').innerHTML=montant
        document.querySelector('.FrCfa').value=montant
      }

      
      // Afficher les résultats
      document.getElementById("resultat").innerHTML = resultat;
      document.getElementById("resultat").style.display="flex"
      document.getElementById("resultat2").style.display="none"
    })
    .catch(error => console.error(error));
}







/*DEVIS 2*/

var boutondevis2=document.querySelectorAll('.btnprdevise2')


boutondevis2.forEach(btndevis=>{
   var devise2=document.querySelector('.devise2')
   var devisealerte2=document.querySelector('.devisealerte2')
   var resultat3=document.getElementById('resultat3')
   var resultat4=document.getElementById('resultat4')
   var caseprix2=document.querySelector('.caseprix2')
   var FrCfa2=document.querySelector('.FrCfa2')
   btndevis.addEventListener('click',function(){

      if(btndevis.classList.contains('active')){
        devise2.innerHTML=btndevis.innerHTML
        devisealerte2.innerHTML=btndevis.innerHTML
        caseprix2.value=""
        caseprix2.classList.remove('is-invalid')
        caseprix2.classList.remove("is-valid")
        resultat3.style.display="none"
        resultat4.style.display="none"
        FrCfa2.value=""
        FrCfa2.innerHTML=""
    
       }
   })

})









var champs=document.querySelectorAll('.champ')
var formconnex=document.querySelector('.formconnex')

var devise3=document.querySelector('.devise3')
var devisealerte3=document.querySelector('.devisealerte3')
var resultat5=document.getElementById('resultat5')
var resultat6=document.getElementById('resultat6')
var caseprix3=document.querySelector('.caseprix3')
var FrCfa3=document.querySelector('.FrCfa3')
var alertprix3=document.querySelector('.alertprix3')

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





    if(devise3.innerHTML=="XOF"){

      if(caseprix3.value <100){
        e.preventDefault()
        caseprix3.classList.add("is-invalid")
        caseprix3.classList.remove("is-valid")
        alertprix3.innerHTML='Entrez un montant superieur ou égale à 100'
        
       }else{
       
    
          caseprix3.classList.remove("is-invalid")
          caseprix3.classList.add("is-valid")
    
    
          console.log('payer en XOF')
    

       }
    
       if(caseprix3.value > 100){
  
        caseprix3.classList.remove("is-invalid")
        caseprix3.classList.add("is-valid")
        
       }
    
    
    }
    
    if(devise3.innerHTML=="EUR" || devise3.innerHTML=="USD"){
    
      if(caseprix3.value <50){
        e.preventDefault()
        caseprix3.classList.add("is-invalid")
        caseprix3.classList.remove("is-valid")
        alertprix3.innerHTML='Entrez un montant superieur ou égale à 50'
        
       }else{

          caseprix3.classList.remove("is-invalid")
          caseprix3.classList.add("is-valid")
    
    
          console.log('payer en EUR ET USD' )
    
  
    
    
    
       }
    
    
       if(caseprix3.value > 50){

        caseprix3.classList.remove("is-invalid")
        caseprix3.classList.add("is-valid")
        
       }
    
    
    }
    })


/*DEVIS 3 de inscription normalE*/

var boutondevis3=document.querySelectorAll('.btnprdevise3')


boutondevis3.forEach(btndevis=>{
   var devise3=document.querySelector('.devise3')
   var devisealerte3=document.querySelector('.devisealerte3')
   var resultat5=document.getElementById('resultat5')
   var resultat6=document.getElementById('resultat6')
   var caseprix3=document.querySelector('.caseprix3')
   var FrCfa3=document.querySelector('.FrCfa3')
   btndevis.addEventListener('click',function(){

      if(btndevis.classList.contains('active')){
        devise3.innerHTML=btndevis.innerHTML
        devisealerte3.innerHTML=btndevis.innerHTML
        caseprix3.value=""
        caseprix3.classList.remove('is-invalid')
        caseprix3.classList.remove("is-valid")
        resultat5.style.display="none"
        resultat6.style.display="none"
        FrCfa3.value=""
        FrCfa3.innerHTML=""
    
       }
   })

})


function convertisseur_devise3() {
  const montant = Number(document.querySelector(".caseprix3").value);
  const devise2 = document.querySelector(".devise3").innerHTML;
  
  // Vérifier que le montant est un nombre
  if (isNaN(montant)) {
    alert("Veuillez entrer un nombre valide.");
    return;
  }
  
  // Récupérer les taux de change actuels
  const url = "https://api.exchangerate-api.com/v4/latest/" + devise2;
  fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error('Erreur de réponse du serveur');
      }
      return response.json();
    })
    .then(data => {
      const taux = data.rates;
      let resultat = "";
      
      // Convertir en Franc CFA
      if (devise2 !== "XOF") {
        const francs_cfa = montant * taux.XOF;
        resultat += `${montant.toFixed(2)} ${devise2} = ${francs_cfa.toFixed(2)} Francs CFA<br>`;
        document.querySelector('.FrCfa3').innerHTML=`${francs_cfa.toFixed(2)}`
        document.querySelector('.FrCfa3').value=`${francs_cfa.toFixed(2)}`
      }

      if(devise2 === "XOF"){
        document.querySelector('.FrCfa3').innerHTML=montant
        document.querySelector('.FrCfa3').value=montant
      }

      
      // Afficher les résultats
      document.getElementById("resultat5").innerHTML = resultat;
      document.getElementById("resultat5").style.display="flex"
      document.getElementById("resultat6").style.display="none"
    })
    .catch(error => console.error(error));
}










