const express = require('express');
const app = express();

const session = require('express-session');
const bodyParser = require('body-parser');
const path = require('path');

app.use(bodyParser.json());

const port = 443;

const user = [
  {username: 'user', password: '0000'}
];

const sessionS = require('session');
const storage = sessionS.createStorage();

//CREATE SESSION
app.use(session({
  storage: storage,
  save: false
  //?????????????????????????????????????????
}));

app.get('/', function (req, res) {
  res.sendFile(path.join('index.html'));
});

app.post('/login', function (req, res) {

  //search users
  let searchUsers;
  for (let i = 0; i < user.length; i++) { //пробежка по массиву юзеров
    let usr = user[i];

    if (usr.username === req.body.username && usr.password === req.body.password) { //если нашло соответствие
      searchUsers = usr.username;
      break; //то конец итерации
    }
  }

  if (searchUsers === undefined) {
    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!     response not implemented
  }
});

app.listen(port, function () {
  console.log('Running on port ' + port);
});