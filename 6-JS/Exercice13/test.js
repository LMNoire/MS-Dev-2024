// Modify the code here
// ======================

const calculateAverageRating = (rates) => {
  let sommeValeurs = 0;

  for (let i = 0; i < rates.length; i++) {
    sommeValeurs += rates[i];
  }
  
  const average = sommeValeurs / rates.length;
  return average;
}

// ======================

const gotRatings = [5, 4, 5, 5, 1, 2];
const harrypRatings = [5, 5, 5, 4, 5];
const swRates = [2, 3, 2, 4, 3];

const gotAverage = calculateAverageRating(gotRatings);
const harrypAverage = calculateAverageRating(harrypRatings);
const swAverage = calculateAverageRating(swRates);

if (gotAverage && harrypAverage) {
  document.querySelector('#got-score').innerText = gotAverage.toFixed(1) + ' étoiles';
  document.querySelector('#harryp-score').innerText = harrypAverage.toFixed(1) + ' étoiles';
  document.querySelector('#sw-score').innerText = swAverage.toFixed(1) + ' étoiles';
}