//Import express lib
const express = require("express");
//Import methods
const { setLogs, getLogs } = require("../controllers/log.controller");
const router = express.Router();

//Post logs
router.post("/", setLogs);
//Get logs
router.get("/", getLogs);

module.exports = router