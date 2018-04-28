const express = require('express');
const mongoose = require('mongoose');

const app = express();

const users = require('./src/routes/api/users');

const db = require('./config/keys').mongoURI;

mongoose
    .connect(db)
    .then(() => console.log("MongoDB connected"))
    .catch(err => console.log(err));
    
app.get('/', (req, res) => res.sendfile('src/html/index.php'));

app.use('/api/users', users);

const port = process.env.PORT || 5000;

app.listen(port, () => console.log(
    `Server running on port ${port}`));