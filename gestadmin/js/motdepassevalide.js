function motdepasse(){
    let motdepasse1 = document.querySelector('#newmotdepasse');
    let motdepasse2 = document.querySelector('#newmotdepasse2');
    let caseMessage = document.querySelector('.message-password');
    //console.log(motdepasse1.value);
    //console.log(motdepasse2.value);
    if(motdepasse1.value == motdepasse2.value){
      //console.log('mot de passe valide');
      caseMessage.innerHTML = "<i class='fas fa-solid fa-check' id='check-message'></i>";

    }
    else{
      //console.log('mot de passe invalide');
      caseMessage.innerHTML = "<i class='fas fa-solid fa-xmark' id='mark-message'></i>";
    }
  }