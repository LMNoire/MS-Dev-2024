// Create variables here
// =========================================

let episodeTitle = "Les noces pourpres" ;
let episodeDuration = 50 ;
let hasBeenWatched = true ;

// =========================================

document.querySelector('#episode-info').innerText = `Épisode: ${episodeTitle}
Durée: ${episodeDuration} min
${hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`