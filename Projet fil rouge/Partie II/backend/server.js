//Import express lib
const express = require("express")
const app = express();
const cors = require('cors'); 
//Import .env
const dotenv = require('dotenv').config();
//Import db
const connectDB = require('./config/db');

//Connexion db
connectDB();

//Middleware (traitement data de la request)
app.use(cors()); 
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

//Import routes
app.use("/logs", require("./routes/log.routes"));

//Start server
const port = 3000;
app.listen(port, () => console.log("Le serveur a démarré au port " + port));

