const apiDiv = document.querySelector('.apiContact');
//de base une ƒ° => est anonyme, astuce pour désanonymiser, on la stocke dans une variable
const contactApi =  () => {
    //Data va récup Toutes les données de l'api
    const data =  fetch('');
    console.log(data);
    //Plutot que de Travailler sur la réponse, on va la transformé pour 
    //qu'elle deviennt un OBJET JS (+ pratique)
    const dataTransformed =  data.json();
    console.log(dataTransformed);
    apiDiv.innerText = dataTransformed.latitude;
};
contactApi();