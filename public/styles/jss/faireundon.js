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

/**DEVISE */
/*  NEWWWWWWWWWWWWW FORM CHOIX DU MONTANT*/

var boutondevis=document.querySelectorAll('.btnprdevise')
var francscfa=document.querySelector('.francscfa')

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


/**FIN DEVISE */



formprixmodal.addEventListener('submit',function(e){

var caseprix=document.querySelector('.caseprix')
var casenom=document.querySelector('.casenom')
var casecontact=document.querySelector('.casecontact')
var montantapi=parseInt(caseprix.value)
var msgalertprix=document.querySelector('.msgalertprix')
var msgalertcontact=document.querySelector('.msgalertcontact')

var devise=document.querySelector('.devise')
var alertprix=document.querySelector('.alertprix')


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

   }


   if(caseprix.value > 50){
    e.preventDefault()
    caseprix.classList.remove("is-invalid")
    caseprix.classList.add("is-valid")
    
   }


}

     
    
})


/*FIN FORM CHOIX DU MONTANT*/

/*FIN MODAL */