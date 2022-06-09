<?php 




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
        
        <div class="col-3 carta" :key="`Disco-${index}`" v-for="(Disco, index) in dischiFiltrati" :Disco="Disco">
        <img class="thumb" :src="Disco.poster" alt="Disco.title">
         <div>
          <h5>{{Disco.title}}</h5>
          <h5>{{Disco.author}}</h5>
          <p>{{Disco.year}}</p>
          <p>{{Disco.genre}}</p>
         </div>
        </div>


        </div>
        </div>
    </div>
  </div>



  </div>
  <script src="/script.js"></script>
</body>
</html>