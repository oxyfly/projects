const express = require('express');
const app = express();
const cors = require('cors');
app.use(cors({origin: 'http://localhost:4200'})); //Разрешаем кросс браузерные запросы от localhost: 4200

const data = [
  {id: 0, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'},
  {id: 1, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'},
  {id: 2, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'},
  {id: 3, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'},
  {id: 4, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'},
  {id: 5, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'},
  {id: 6, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'},
  {id: 7, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'},
  {id: 8, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'},
  {id: 9, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'},
  {id: 10, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'},
  {id: 11, artist: 'Menno De Jong', title: 'In Trance We Trust 022', genre: 'Trance, Progressive', year: 2018, tracks: 17, size: '452 Mb', img: 'assets/img/covers/001.jpg'}
];

app.get('/api/albums', (req, res) => {
res.send(data);
});

app.get('/api/albums/:id', (req, res) => {
  let reqId = req.params.id;
  let result;
  data.map((dat) => {
    if(dat.id === reqId){
      result = dat;
    }/*else{
      result = {status: 'Error'}
    }*/

  });
  res.send(result);
});

app.listen(8585);

