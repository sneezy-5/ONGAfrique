/*FORM INSCRIPTION MODAL FAIRE UN DON */

var forminscrimodal=document.querySelector('.forminscrimodal')

var chiffre=document.getElementById("chiffre")
var devise2=document.querySelector('.devise2')
var caseprix2=document.querySelector('.caseprix2')
var alertprix2=document.querySelector('.alertprix2')


forminscrimodal.addEventListener('submit', function(e){

  /**input inscription */
  var iptinscript1=document.querySelector('.iptinscript1')
  var iptinscript2=document.querySelector('.iptinscript2')
  var iptinscript3=document.querySelector('.iptinscript3')
  var iptinscript4=document.querySelector('.iptinscript4')
  var inpinsmodals=document.querySelectorAll('.inpinsmodal')

  var alertinscri=document.querySelector('.alertinscri')


/**info pour api */
  var chiffre=document.querySelector(".chiffreinscri")


  inpinsmodals.forEach(inpinsmodal=>{
    if(inpinsmodal.value===""){
        e.preventDefault()
        inpinsmodal.style.border="1px solid red"
        alertinscri.style.display="flex"
        alertinscri.innerHTML="Veuillez remplir tous les champs"
        
    }else{
      inpinsmodal.style.border="1px solid #ced4da"
      alertinscri.style.display="none"
    }
})
 
  if(devise2.innerHTML==="XOF"){

    if(caseprix2.value <100){
      e.preventDefault()
      caseprix2.classList.add("is-invalid")
      caseprix2.classList.remove("is-valid")
      alertprix2.innerHTML='Entrez un montant superieur ou égale à 100'
      
     }else{
     
  
        caseprix2.classList.remove("is-invalid")
        caseprix2.classList.add("is-valid")
  
  
        console.log('payer en XOF')
  

     }
  
     if(caseprix2.value > 100){

      caseprix2.classList.remove("is-invalid")
      caseprix2.classList.add("is-valid")
      
     }
  
  
  }if(devise2.innerHTML==="EUR" || devise2.innerHTML==="USD"){
  
    if(caseprix2.value <50){
      e.preventDefault()
      caseprix2.classList.add("is-invalid")
      caseprix2.classList.remove("is-valid")
      alertprix2.innerHTML='Entrez un montant superieur ou égale à 50'
      
     }else{

        caseprix2.classList.remove("is-invalid")
        caseprix2.classList.add("is-valid")
  
  
        console.log('payer en EUR ET USD' )
  

  
  
  
     }
  
  
     if(caseprix2.value > 50){

      caseprix2.classList.remove("is-invalid")
      caseprix2.classList.add("is-valid")
      
     }
  
  
  }
  



















})










/**DEVIS 2 */ 
function convertisseur_devise2() {
  const montant = Number(document.querySelector(".caseprix2").value);
  const devise2 = document.querySelector(".devise2").innerHTML;
  
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
        document.querySelector('.FrCfa2').innerHTML=`${francs_cfa.toFixed(2)}`
        document.querySelector('.FrCfa2').value=`${francs_cfa.toFixed(2)}`
      }

      if(devise2 === "XOF"){
        document.querySelector('.FrCfa2').innerHTML=montant
        document.querySelector('.FrCfa2').value=montant
      }

      
      // Afficher les résultats
      document.getElementById("resultat3").innerHTML = resultat;
      document.getElementById("resultat3").style.display="flex"
      document.getElementById("resultat4").style.display="none"
    })
    .catch(error => console.error(error));
}