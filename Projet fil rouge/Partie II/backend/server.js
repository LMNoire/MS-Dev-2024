//Import express lib
const express = require("express")
const app = express();
//Import .env
const dotenv = require('dotenv').config();
//Import db
const connectDB = require('./config/db');

//Connexion db
connectDB();

//Middleware (traitement data de la request)
app.use(express.json());
app.use(express.urlencoded({ extended: false }));

//Import routes
app.use("/log", require("./routes/log.routes"));

//Start server
const port = 3000;
app.listen(port, () => console.log("Le serveur a démarré au port " + port));

