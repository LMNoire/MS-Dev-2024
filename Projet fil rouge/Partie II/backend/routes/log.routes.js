//Import express lib
const express = require("express");
//Import methods
const { setLogs, getLogs, getLogById } = require("../controllers/log.controller");
const router = express.Router();

//Get logs
router.get("/", getLogs);
//Get log
router.get("/:id", getLogById);
//Post logs
router.post("/", setLogs);

//Put
router.put("/:id", (req, res) => {
    res.json({ messageId: req.params.id });
});
//Delete
router.delete("/:id", (req, res) => {
    res.json({ message: "Suppression effective : " + req.params.id });
});

module.exports = router