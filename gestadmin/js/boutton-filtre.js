let listeFiltre = document.querySelector('.list-filter');
let valueFiltre = document.querySelectorAll('.list-filter li');
//let nombre = 0;
let form = document.querySelector('.form-filter');
let bouttonFiltre = document.querySelector('.boutton-filter');


bouttonFiltre.addEventListener('click',() =>{
    listeFiltre.classList.toggle('active');
    //console.log('1');
})

function bouttonClickListe(nombre) {
    listeFiltre.classList.remove('active');
    for (let i = 0; i < valueFiltre.length; i++) {
        let contentFonction = valueFiltre[nombre].textContent;
        console.log(contentFonction);
        //console.log(i);
        //window.location.href = "http://localhost/ClimTechStock/gestadmin/modules/employes/lister/requete_affiche_employes.php?Filtre=" + valueFiltre[nombre].textContent;
    }
    //form.submit();
    
}


