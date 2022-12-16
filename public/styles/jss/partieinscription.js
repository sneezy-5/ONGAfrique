/*FORM INSCRIPTION */

var forminscrimodal=document.querySelector('.forminscrimodal')

var chiffre=document.getElementById("chiffre")




forminscrimodal.addEventListener('submit', function(e){

  /**input inscription */
  var iptinscript1=document.querySelector('.iptinscript1')
  var iptinscript2=document.querySelector('.iptinscript2')
  var iptinscript3=document.querySelector('.iptinscript3')

  var alertinscri=document.querySelector('.alertinscri')


/**info pour api */
  var chiffre=document.querySelector(".chiffreinscri")

  var montantapi2=parseInt(chiffre.value)
 
  if(iptinscript1.value==="" || iptinscript2.value==="" || iptinscript3.value===""){
    e.preventDefault()
    alertinscri.innerHTML="* Remplissez les champs vide"
    alertinscri.style.color="red"
    

  }else{
    console.log(e)
  
    
    alertinscri.style.color="rgb(57 132 0)"
    alertinscri.innerHTML="* Très Bien"



  }



})
