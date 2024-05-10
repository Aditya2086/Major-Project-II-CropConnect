<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
  <link rel="stylesheet" href="article.css">
  <title>CropConnect : News </title>
</head>

<body style="background:beige">
  <div id="slideout-menu">
      <ul>
          <li>
              <a href="articles-index.php" style="font-family: 'Akaya Telivigala', cursive;">Home</a>
          </li>
          <li>
              <a href="bloglist.php" style="font-family: 'Akaya Telivigala', cursive;">Blog</a>
          </li>
          <li>
              <a href="news.php" style="font-family: 'Akaya Telivigala', cursive;">News</a>
          </li>
		  <li>
              <a href="Login/Logout.php" style="font-family: 'Akaya Telivigala', cursive;">Logout</a>
          </li>
          <li>
              <input type="text" placeholder="Search Here">
          </li>
      </ul>
  </div>

  <nav>
      <div id="logo-img">
          <a href="index.html" style="font-family: 'Akaya Telivigala', cursive;">
            CROPCONNECT  
          </a>
      </div>
      <div id="menu-icon">
          <i class="fas fa-bars"></i>
      </div>
      <ul>
          <li>
              <a href="articles-index.php" style="font-family: 'Akaya Telivigala', cursive;">Home</a>
          </li>
          <li>
              <a  href="bloglist.php" style="font-family: 'Akaya Telivigala', cursive;">Blog</a>
          </li>
          <li>
              <a class="active" href="news.php" style="font-family: 'Akaya Telivigala', cursive;">News</a>
          </li>
		  <li>
              <a href="Login/logout.php" style="font-family: 'Akaya Telivigala', cursive;">Logout</a>
          </li>
          <li>
              <div id="search-icon">
                  <i class="fas fa-search"></i>
              </div>
          </li>
      </ul>
  </nav>

  <div id="searchbox">
      <input type="text" placeholder="Search Here">
  </div>

  <main>
    <h2 class="page-heading" style="font-family: 'Akaya Telivigala', cursive;">Latest News</h2>

    <section>
      <div class="card">
        <div class="card-image">
            <img src="img/farmer.jpg" alt="Farmer">
        </div>

        <div class="card-description">
            <h3 style="font-family: 'Akaya Telivigala', cursive;">Farming changes life for youth in Central African Republic.</h3>

          <div class="card-meta">
            Posted March 1, 2024
          </div>
          <p>
            Whilst studying for his business degree, Emmanuel had dreams of being an entrepreneur and earning...
          </p>
          <a href="https://kilimonews.co.ke/agribusiness/farming-changes-life-for-youth-in-central-african-republic/" class="btn-readmore">Read more</a>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
            <img src="img/tea.jpg" alt="Tea">
        </div>

        <div class="card-description">
            <h3 style="font-family: 'Akaya Telivigala', cursive;">Tea prices dip 13% as high volumes persist</h3>
          <div class="card-meta">
            Posted February 23, 2024
          </div>
          <p>
			Average tea prices for factories managed by Kenya Tea Development Agency have dropped by 13.3%...
          </p>
          <a href="https://kilimonews.co.ke/general-news/tea-prices-dip-13-as-high-volumes-persist/" class="btn-readmore">Read more</a>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
            <img src="img/pyrethrum.jpg" alt="Pyrethrum">
        </div>

        <div class="card-description">

            <h3 style="font-family: 'Akaya Telivigala', cursive;">Pyrethrum farmers to benefit from Norwegian agency support </h3>

          <div class="card-meta">
            Posted February 22, 2024
          </div>
          <p>
			Pyrethrum farmers from four counties in Kenya will benefit from support by the Norwegian Agency
          </p>
          <a href="https://kilimonews.co.ke/agriculture-investment/pyrethrum-farmers-to-benefit-from-norwegian-agency-support/" class="btn-readmore">Read more</a>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
            <img src="img/youth.jpg" alt="Youth">
        </div>

        <div class="card-description">
            <h3 style="font-family: 'Akaya Telivigala', cursive;">Study shows access to infrastructure can increase youth engagement in agriculture </h3>

          <div class="card-meta">
            Posted February 1, 2024
          </div>
          <p>
			Youth unemployment remains a critical challenge in developing countries, especially in Sub-Saharan Africa where the...
          </p>
          <a href="https://kilimonews.co.ke/agribusiness/study-shows-access-to-infrastructure-can-increase-youth-engagement-in-agriculture/" class="btn-readmore">Read more</a>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
            <img src="img/pesticide.jpg" alt="Pesticide">
        </div>

        <div class="card-description">
            <h3 style="font-family: 'Akaya Telivigala', cursive;">Industry has pesticides ready for locust spraying in Kenya- Agrochemicals Association</h3>
          <div class="card-meta">
            Posted April 21, 2024
          </div>
          <p>
			Kenya has the pesticides to tackle the country’s locust invasion ready and stored in local..
          </p>
          <a href="https://kilimonews.co.ke/agricultural-products/industry-has-pesticides-ready-for-locust-spraying-in-kenya-agrochemicals-association/" class="btn-readmore">Read more</a>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
            <img src="img/milkProcessing.jpg" alt="Partnership">
        </div>

        <div class="card-description">
            <h3 style="font-family: 'Akaya Telivigala', cursive;">New KCC to venture into goat and camel milk processing</h3>

          <div class="card-meta">
            Posted January 22, 2024
          </div>
          <p>
			Dairy goat and camel farmers have a reason to smile as New KCC plans to
          </p>
          <a href="https://kilimonews.co.ke/agricultural-products/new-kcc-to-venture-into-goat-and-camel-milk-processing/" class="btn-readmore">Read more</a>
        </div>
      </div>
    </section>

    <div class="pagination">
      <a href="#">Prev</a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">Next</a>
    </div>


  </main>

  <script src="main.js"></script>
</body>

</html>