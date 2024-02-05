// Create Object here
// =========================================

var episode = {
    title : "Les noces pourpres",
    duration : 50,
    hasBeenWatched : true
}

// =========================================

document.querySelector('#episode-info').innerText = `Épisode: ${episode.title}
Durée: ${episode.duration} min
${episode.hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`