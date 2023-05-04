const express = require("express");
const app = express();
require("dotenv").config();

const cors = require("cors");
const generateRoute = require("./routes/slideRoute");

app.use(cors());

app.use(function (req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header(
        "Access-Control-Allow-Headers",
        "Origin, X-Requested-With, Content-Type, Accept"
    );
    next();
});

const port = process.env.PORT || 5000;

app.use(express.json());

app.use("/api", generateRoute);

app.listen(port, () => {
    console.log("Backend Server is Running on Port 5000`");
});
