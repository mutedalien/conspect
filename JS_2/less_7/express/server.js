const express = require('express');
const app = express();

app.use(express.static('.'));

app.get('/data', (req, res) => {
    res.send('data');
});

app.listen(3000, () => {
    console.log('Server is running on port 3000');
});