//Import Log Schema as LogModel
const LogModel = require('../models/log.model');

//Set logs method
module.exports.setLogs = async (req, res) => {
    const log = await LogModel.create({
        loggerName: req.body.loggerName,
        user: req.body.user,
        message: req.body.message,
        level: req.body.level,
        data: req.body.data
    });
    res.status(200).json(log);
};

//Get all logs method
module.exports.getLogs = async (req, res) => {
    const logs = await LogModel.find();
    res.status(200).json(logs)
};

//Get log by id
module.exports.getLogByUser = async (req, res) => {
    // try {
        const logsUsers = await db.collection('cleanthis').find({ user: req.params.user });
        // if (!logs) {
        //     return res.status(400).json({ message: "Ce log n'existe pas" });
        // }
        res.status(200).json(logsUsers);
    // } catch (error) {
    //     res.status(500).json({ message: "Une erreur s'est produite lors de la récupération du log" });
    // }
};

