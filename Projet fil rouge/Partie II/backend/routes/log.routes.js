//Import express lib
const express = require("express");
//Import methods
const { setLogs, getLogs, getCustomersRate } = require("../controllers/log.controller");
const router = express.Router();

//Post logs
router.post("/", setLogs);
//Get logs
router.get("/", getLogs);
//Get customer rate
router.get("/customers", getCustomersRate);

module.exports = router