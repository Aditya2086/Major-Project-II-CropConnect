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
  <title>CROPCONNECT : Blogs</title>
</head>

<body style="background:beige">
  <div id="slideout-menu">
      <ul>
          <li>
              <a href="articles-index.php" style="font-family: 'Akaya Telivigala', cursive;">Home</a>
          </li>
          <li>
              <a href="bloglist.php" style="font-family: 'Akaya Telivigala', cursive;" >Blog</a>
          </li>
          <li>
              <a href="news.php" style="font-family: 'Akaya Telivigala', cursive;">News</a>
          </li>
		  <li>
              <a href="Login/logout.php" style="font-family: 'Akaya Telivigala', cursive;">Logout</a>
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
              <a class="active" href="bloglist.php" style="font-family: 'Akaya Telivigala', cursive;">Blog</a>
          </li>
          <li>
              <a href="news.php" style="font-family: 'Akaya Telivigala', cursive;">News</a>
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
    <h2 class="page-heading" style="font-family: 'Akaya Telivigala', cursive;">Blogs Spot</h2>

        <section>
            <div class="card">
                <div class="card-image">
                    <a href="blogpost.php">
                        <img src="img/onionsTypes.jpg" alt="Onions">
                    </a>
                </div>

                <div class="card-description">
                    
                        <h3>A beginner guide to onion farming in Kenya</h3>
                    
                    <p>
                        50 percent of the red onions in Kenya are imported from Tanzania, as 
						indicated by Food and Agriculture Organisation's (FAO) 2014 report. 
						Kenyan Farmers have been doing ...
                    </p>
                    <a href="blogpost.php" class="btn-readmore">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a href="blogpost.php">
                        <img src="img/tomato.jpg" alt="Tomatoes">
                    </a>
                </div>

                <div class="card-description">
                        <h3>Defeating tomato disease.</h3>

                    <p>
                        It's the warm season. Farmers are happy that their tomatoes are finally going to receive the much 
						sunlight needed for the fruit to grow bigger, juicier and firmer. What most probably ...
                    </p>
                    <a href="blogpost.php" class="btn-readmore">Read more</a>
                </div>
            </div>
			
			<div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        <img src="img/soil.jpg" alt="Healthy Soil">
                    </a>
                </div>

                <div class="card-description">
                        <h3>What is a healthy soil?</h3>

                    <p>
                        Soil health is the capacity of soil to function as a living system, with ecosystem and land use boundaries,
						to sustain plant and animal productivity, maintain or enhance water and air quality, and promote plant and
						animal health. Healthy soils maintain a diverse community of soil organisms that help to control plant disease, 
						insect and weed...
                    </p>
                    <a href="blogpost.php" class="btn-readmore">Read more</a>
                </div>
            </div>
			
			<div class="card">
                <div class="card-image">
                    <a href="blogpost.php">
                        <img src="img/farming.jpg" alt="Farming">
                    </a>
                </div>

                <div class="card-description">
                        <h3>Digital revolution in Farming.</h3>

                    <p>
                        With increasing population, urbanization and contagious depletion of natural resources, there has to 
						be a paradigm shift in farmer’s perception from...
                    </p>
                    <a href="blogpost.php" class="btn-readmore">Read more</a>
                </div>
            </div>
			
			<div class="card">
                <div class="card-image">
                    <a href="blogpost.php">
                        <img src="img/foodSecurity.jpg" alt="Food Security">
                    </a>
                </div>

                <div class="card-description">
                        <h3>Food security in Kenya.</h3>

                    <p>
                        The agricultural sector is the backbone of the economy, contributing approximately 33 percent of Kenya’s Gross Domestic 
						Product (GDP). The agriculture sector employs more than 40 percent of the total population and 70 percent of the 
						rural population. However, agricultural productivity has stagnated in recent years. Smallholder farmers and agricultural
						enterprises continue to face growing their businesses and improving the quality of agricultural goods. 
						We work to enhance agriculture-led economic...
                    </p>
                    <a href="blogpost.php" class="btn-readmore">Read more</a>
                </div>
            </div>
			
			<div class="card">
                <div class="card-image">
                    <a href="blogpost.php">
                        <img src="img/farmPartnership.jpg" alt="Farm Partnership">
                    </a>
                </div>

                <div class="card-description">
                    <a href="blogpost.php">
                        <h3>Succession farm partnerships.</h3>
                    </a>
                    <p>
                        With almost one in three farmers over the normal retirement age but only one in twenty farmers under the age of 35,
						the Department of Agriculture, Food and the ...
                    </p>
                    <a href="blogpost.php" class="btn-readmore">Read more</a>
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