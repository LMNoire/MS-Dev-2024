class Episode {
  constructor(title, duration, hasBeenWatched) {
    this.title = title;
    this.duration = duration;
    this.hasBeenWatched = hasBeenWatched;
  }
}

let firstEpisode = new Episode("L'hiver vient", 52, true);
let secondEpisode = new Episode("La Route royal", 52, false);
let thirdEpisode = new Episode("Lord Snow", 52, false);

// Modify the array here
// ====================================
let episodes = [];

      	episodes.push(firstEpisode);
      	episodes.push(secondEpisode);		
      	episodes.push(thirdEpisode);	
      	episodes.push(thirdEpisode);
		
    episodes.pop();
	
let numberOfEpisodes = episodes.length;

// ====================================

const body = document.querySelector('body');

document.querySelector('#episodes').innerText = numberOfEpisodes;

for(let episode of episodes) {
  let newDiv = document.createElement('div');
  newDiv.classList.add('series-frame');
  let newTitle = document.createElement('h2');
  newTitle.innerText = 'Game of Thrones';
  let newParagraph = document.createElement('p');
  newParagraph.innerText = `${episode.title}
${episode.duration} minutes
${episode.hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`;
  newDiv.append(newTitle);
  newDiv.append(newParagraph);
  body.append(newDiv);
}