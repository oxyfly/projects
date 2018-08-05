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

const list = [
  {id: 0, track: '1. GMO – Forty-Two [Metronome Remix] (09:33)'},
  {id: 1, track: '2. Paul Oakenfold – Full Moon Party [Liquid Soul & Zyce Remix] (07:44)'},
  {id: 2, track: '3. Menno De Jong – Ananda [Extended Mix] (07:14)'},
  {id: 3, track: '4. Andain – Beautiful Things [Skylex Rework] (05:57)'},
  {id: 4, track: '5. Skylex – Victra (06:29)'},
  {id: 5, track: '6. Alex Di Stefano – My Shadow (08:21)'},
  {id: 6, track: '7. Ciaran McAuley – The Titanic (07:05)'},
  {id: 7, track: '8. Robbie Van Doe – If I Survive (07:04)'},
  {id: 8, track: '9. Amir Hussain – Mana (07:01)'},
  {id: 9, track: '10. Leroy Moreno – Ultraviolet (07:02)'},
  {id: 10, track: '11. Misja Helsloot & Cari – See the Sun Again [XiJaro & Pitch Remix] (07:06)'},
  {id: 11, track: '12. Casey Rasch – Flying High (06:40)'},
  {id: 12, track: '13. John OCallaghan – Next Stop Muddy Waters (07:10)'},
  {id: 13, track: '14. Sector7 – Paradox (07:33)'},
  {id: 14, track: '15. Talla 2xlc – Uprising (07:06)'},
  {id: 15, track: '16. Menno De Jong, Adam Ellis & Kate Louise Smith – Set to Sail [2018 Outro Edit] (04:42)'},
  {id: 16, track: '17. Menno De Jong – In Trance We Trust 022 [Continuous Mix] (01:18:08)'}
];

app.get('/api/albums', (req, res) => {
res.send(data);
});

app.get('/api/album-detail', (req, res) => {
  res.send(list);
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

app.get('/api/album-detail/:id', (req, res) => {
  let reqId = req.params.id;
  let result;
  list.map((dat) => {
    if(dat.id === reqId){
      result = dat;
    }/*else{
      result = {status: 'Error'}
    }*/
  });
  res.send(result);
});

app.listen(8585);

