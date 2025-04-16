let candidatures = [{
    id: 1,
    nom: "Ali Benali",
    age: 20,
    projet: "Application mobile de recyclage",
    statut: "en attente" 
  }
  ]


  function ajouterCandidature(nom, age, projet){
    let id = candidatures.length + 1;
    let statut = "en attente";
    let nouvelleCandidature = { id, nom, age, projet, statut };
    candidatures.push(nouvelleCandidature);
    console.log("Candidature ajoutée");
  }


    
  function  afficherToutesLesCandidatures(){
      
    candidatures.forEach(candidature => {
      console.log(`ID: ${candidature.id}, Nom: ${candidature.nom}, Age: ${candidature.age}, Projet: ${candidature.projet}, Statut: ${candidature.statut}`);
    });
      
  }



function validerCandidature(id){

    let candidature = candidatures.find(c => c.id === id);
    if (candidature) {
      candidature.statut = "validée";
      console.log("Candidature validée!");
    } else {
      console.log("Candidature non validée.");
    }
  
}



function rejeterCandidature(id){
    

        let candidature = candidatures.find(c => c.id === id);
        
        if(candidature.statut === "validée"){
            candidature.statut = "rejetée";
       }else{
            console.log("Candidature non validée.");
       }


}





function rechercherCandidat(nom){

    nom = nom.toLowerCase();
    let resultats = candidatures.filter(candidature => candidature.nom.toLowerCase().includes(nom));

    if (resultats.length > 0) {
      resultats.forEach(candidature => {
        console.log(`ID: ${candidature.id}, Nom: ${candidature.nom}, Age: ${candidature.age}, Projet: ${candidature.projet}, Statut: ${candidature.statut}`);
      });
    } else {
      console.log("Aucun candidat trouvé.");
    }
}


function filtrerParStatut(statut){

    let resultats = candidatures.filter(candidature => candidature.statut === statut);

    if (resultats.length > 0) {
      resultats.forEach(candidature => {
        console.log(`ID: ${candidature.id}, Nom: ${candidature.nom}, Age: ${candidature.age}, Projet: ${candidature.projet}, Statut: ${candidature.statut}`);
      });
    } else {
      console.log("Aucun candidat trouvé.");
    }
}

function statistiques(){

    let totaCondidateurValider = candidatures.filter(candidature => candidature.statut === "validée").length;
    let totaCondidateurRejete = candidatures.filter(candidature => candidature.statut === "Rejetées ").length;
     let totaCondidateurAttente = candidatures.filter(candidature => candidature.statut === "En attente").length;

    
}



function trierParNom(){
    let newaray = candidatures.sort((a, b) => a.nom.localeCompare(b.nom));
    console.log(newaray)
}


function trierParAge(desc = false)
{

    let newarr 
    if(desc == true){
        newarr = candidatures.sort((a, b) => b.age - a.age);
    }
    else{
        newarr = candidatures.sort((a, b) => a.age - b.age);
    }

    console.log(newarr);
    
}


function afficheprojects(motCle){
    let motCleLowerCase = motCle.toLowerCase();
    
    let resault = candidatures.filter(candidature => candidature.projet.toLowerCase().includes(motCleLowerCase));
    

    if(resault.length > 0)
    {
           resault.forEach(res => {console.log(res.projet)});
    }
}

function resetSysteme(){

    candidatures = [];
    console.log(candidatures.length);
}



ajouterCandidature("Fatima Zahra", 22, "Plateforme de tutorat");
ajouterCandidature("Mohamed Amine", 19, "Application de dons alimentaires");
validerCandidature(1);
rejeterCandidature(2);
afficherToutesLesCandidatures();
statistiques();
rechercherCandidat("fatima");
filtrerParStatut("validée");
trierParAge();
