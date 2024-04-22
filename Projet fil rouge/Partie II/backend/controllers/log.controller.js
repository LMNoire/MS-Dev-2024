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
    const logs = await LogModel.find({ loggerName: "User" });
    res.status(200).json(logs);
};

//Method to get customers rate
module.exports.getCustomersRate = async (req, res) => {
    var users = await LogModel.find({ loggerName: "Registration" });
    var NbUsers = await LogModel.count(users);

    var customers = await LogModel.find({
        "data": { $elemMatch: { "role": "ROLE_CUSTOMER" } }
    });
    var NbCustomers = await LogModel.count(customers);

    res.status(200).json({ NbUsers, NbCustomers });
}



