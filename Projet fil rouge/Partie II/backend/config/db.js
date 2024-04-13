//Import mongoose lib
const mongoose = require('mongoose');

//MongoDB connexion
const connectDB = () => {
    mongoose.set('strictQuery', false);
    mongoose.connect(process.env.MONGO_URI)
    .then(() => console.log('Connexion à MongoDB réussie !'))
    .catch((error) => console.error('Erreur lors de la connexion à MongoDB :', error.message));
};

module.exports = connectDB;