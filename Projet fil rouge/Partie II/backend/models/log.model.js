//Import mongoose
const mongoose = require("mongoose");

//Log Schema
const logSchema = mongoose.Schema(
    {
        loggerName: {
            type: String,
            required: true
        },
        user: {
            type: String,
            required: true
        },
        message: {
            type: String,
            required: true
        },
        level: {
            type: String,
            required: true
        },
        data: {
            type: [String]
        }
    },
    {
        timestamps: true
    }
);

module.exports = mongoose.model('log', logSchema)