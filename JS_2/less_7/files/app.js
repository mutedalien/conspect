const fs = require('fs');

fs.readFile('./data.json', 'utf-8', (err, data) => {
    if (!err) {
        const fileData = JSON.parse(data);
        fileData.thrid = 'third';

        fs.writeFile('./data.json', JSON.stringify(fileData), (err) => {
            console.log(err);
        });
    }
});
