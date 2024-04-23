//Import Log Schema as LogModel
const LogModel = require('../models/log.model');

//Method to post logs
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

//Method to get all logs
module.exports.getLogs = async (req, res) => {
    var logs = await LogModel.find({ loggerName: "User" });
    res.status(200).json(logs);
};

//Method to get customers rate
module.exports.getCustomersRate = async (req, res) => {
    try {
        let users = await LogModel.find({ loggerName: "Registration" });
        let NbUsers = await LogModel.countDocuments({ loggerName: "Registration" });

// Find documents where any string in the "data" array contains "ROLE_CUSTOMER"
let customers = await LogModel.find({ "data": { $regex: "ROLE_CUSTOMER" } });

// Count the number of documents where any string in the "data" array contains "ROLE_CUSTOMER"
let NbCustomers = await LogModel.countDocuments({ "data": { $regex: "ROLE_CUSTOMER" } });



        res.status(200).json({ NbUsers, NbCustomers });
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
}


