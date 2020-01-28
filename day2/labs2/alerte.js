function checkforminputs(){

    let prenom = document.forms['infos']['prenom'].value;
    let nom = document.forms['infos']['nom'].value;
    let email = document.forms['infos']['email'].value;
    let adresse = document.forms['infos']['adresse'].value;
    let city = document.forms['infos']['city'].value;
    let postcode = document.forms['infos']['postcode'].value;

    let redirection = !!(prenom && nom && email && adresse && city && postcode);
    if(redirection){
        return true;
    }
    else{
        alert('Champs manquants');
        return false;
    }

}