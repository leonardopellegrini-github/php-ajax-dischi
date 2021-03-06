<?php

include __DIR__.'/db.php'

/*
$dischi = [
      [
      "poster"=> "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
      "title"=> "New Jersey",
      "author"=> "Bon Jovi",
      "genre"=> "Rock",
        "year"=> "1988"
      ],
      [
          "poster"=> "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
          "title"=> "Live at Wembley 86",
          "author"=> "Queen",
          "genre"=> "Pop",
          "year"=> "1992"
      ],
      [
          "poster"=> "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
          "title"=> "Ten's Summoner's Tales",
          "author"=> "Sting",
          "genre"=> "Pop",
          "year"=> "1993"
      ],
      [
          "poster"=> "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
          "title"=> "Steve Gadd Band",
          "author"=> "Steve Gadd Band",
          "genre"=> "Jazz",
          "year"=> "2018"
      ],
      [
          "poster"=> "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
          "title"=> "Brave new World",
          "author"=> "Iron Maiden",
          "genre"=> "Metal",
          "year"=> "2000"
      ],
      [
          "poster"=> "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
          "title"=> "One more car, one more raider",
          "author"=> "Eric Clapton",
          "genre"=> "Rock",
          "year"=> "2002"
      ],
      [
          "poster"=> "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
          "title"=> "Made in Japan",
          "author"=> "Deep Purple",
          "genre"=> "Rock",
          "year"=> "1972"
      ],
      [
          "poster"=> "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
          "title"=> "And Justice for All",
          "author"=> "Metallica",
          "genre"=> "Metal",
          "year"=> "1988"
      ],
      [
          "poster"=> "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
          "title"=> "Hard Wired",
          "author"=> "Dave Weckl",
          "genre"=> "Jazz",
          "year"=> "1994"
      ],
      [
          "poster"=> "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
          "title"=> "Bad",
          "author"=> "Michael Jacjson",
          "genre"=> "Pop",
          "year"=> "1987"
      ]
]
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <title>PHP Dischi</title>
</head>
<body>
  <div id="app">

  <div id="header" class="d-flex d-flex justify-content-between align-items-center">

    <img src="img/pngegg.png" alt="Logo">

    <select v-model="cercaGenere" @change="('cerca', cercaGenere)">
      <option value="">Seleziona un genere</option>
      <option value="Pop">Pop</option>
      <option value="Rock">Rock</option>
      <option value="Jazz">Jazz</option>
      <option value="Metal">Metal</option>
    </select>

  </div>

  <div id="main">
    <div class="container">
        <div :genereDaCercare="genereDaCercare">

        <div id="divline">
        
        <?php foreach($dischi as $disco):?>
        <div class="col-3 carta">
        <img class="thumb" src="<?php echo $disco['poster']?>" alt="Disco.title">
         <div>
          <h5><?php echo $disco['title']?></h5>
          <h5><?php echo $disco['author']?></h5>
          <p><?php echo $disco['year']?></p>
          <p><?php echo $disco['genre']?></p>
         </div>
        </div>
        <?php endforeach ?>

        </div>
        </div>
    </div>
  </div>



  </div>
  
</body>
</html>