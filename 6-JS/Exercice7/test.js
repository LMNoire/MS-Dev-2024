// Create a class here
// =====================================

class episode {
    constructor(title, duration, hasBeenWatched) {
        this.title = title ;
        this.duration = duration ;
        this.hasBeenWatched = hasBeenWatched ;
    }
}

let firstEpisode = new episode("Titre1", 50, false) ;
let secondEpisode = new episode("Titre2", 45, true) ;
let thirdEpisode = new episode("Les noces pourpres", 55, true) ;

// =====================================

document.querySelector('#first-episode-info').innerText = `Épisode: ${firstEpisode.title}
Durée: ${firstEpisode.duration} min
${firstEpisode.hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`;

document.querySelector('#second-episode-info').innerText = `Épisode: ${secondEpisode.title}
Durée: ${secondEpisode.duration} min
${secondEpisode.hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`;

document.querySelector('#third-episode-info').innerText = `Épisode: ${thirdEpisode.title}
Durée: ${thirdEpisode.duration} min
${thirdEpisode.hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`;