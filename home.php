<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WatchMaDog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" href="css/tooplate-style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="home.js"></script>
</head>
<body>
  <div class="tm-main">
    <div class="h-25 tm-welcome-section">
      <div class="container tm-navbar-container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-sm">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="#" onclick="openModal()" class="nav-link tm-nav-link">Log In / Sign up</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome">
          <img src="img/logo.png" alt="Logo">
          <p class="tm-site-description">Whether you are willing to sit some pets or you need someone to look after your furry babies. All can be found what here.</p>
        </div>
      </div>
    </div> <!-- end welcome section -->

    <div class="container">
      <div class="tm-search-form-container">
        <form id ="location" action="index.html" method="GET" class="form-inline tm-search-form">
            <div class="form-group tm-search-box">
              <input type="text" name="keyword" class="form-control tm-search-input" placeholder="Search by province...">
              <input type="submit" value="Search" class="form-control tm-search-submit">
            </div>
        </form>
        </div>
        
        <h2 class="mt-5">Start now</h2>
          <div class="row">
              <div class="col-4">
                      <label for="owner-sitter"></label>
                      <select id="owner-sitter" class="form-control">
                          <option id="toHide" value="">What are you looking for?</option>
                          <option value="Pet">Pet</option>
                          <option value="Pet-sitter">Pet-sitter</option>
                      </select>
                      <div id="filter">
                          <form id="petForm" method="post">
                              <div id="petFilter">
                                <br>
                                  <div id="petType" class='form-check form-check-group'>
                                      <label for="dog" style='padding: 0 5px 0 0 !important'>Dog</label>
                                      <input class='pt' type="checkbox" value="dog" name="pet[]">
                                      <label for="cat" style='padding: 0 5px 0 0 !important'>Cat</label>
                                      <input class='pt' type="checkbox" value="cat" name="pet[]">
                                  </div>
                                  <br>
                                  <div id="petSize" class='form-check form-check-group'>
                                      <label for="small" style='padding: 0 5px 0 0 !important'>Small</label>
                                      <input class="sizeTypeBox" type="checkbox" value="small" name="size[]">
                                      <label for="medium" style='padding: 0 5px 0 0 !important'>Medium</label>
                                      <input class="sizeTypeBox" type="checkbox" value="medium" name="size[]">
                                      <label for="dobigg" style='padding: 0 5px 0 0 !important'>Big</label>
                                      <input class="sizeTypeBox" type="checkbox" value="large" name="size[]">
                                  </div>
                                  <br>
                                  <div>
                                    <button class="btn btn-primary" id="petSub" type="submit">Submit</button>
                                  </div>
                                </div>
                          </form>
                          <form id="petsitterForm" method="post">
                              <div id="petsitterFilter">
                                  <br>
                                  <p id="par">Max Price </p>
                                  <input id="priceSlide" name="price" type="range" min="0" max="30" value="0" onchange="updateTextInput(this.value)">
                                  <div>
                                    <br>
                                  <button class="btn btn-primary" id="petsitterSub" type="submit" style="">Submit</button>
                                </div>
                                </div>
                          </form>
                    </div>
            </div>
        <div class="col-8">
          <div class="media-boxes">
            <div class="media">
              <img src="img/dog1.jpg" alt="Image" class="mr-3" style='width:auto;height:140px;'>
              <div class="media-body tm-bg-gray">
                <div class="tm-description-box">
                  <h5 class="tm-text-blue">Vivamus eget urna vitae ante</h5>
                  <p class="mb-0">Insertion HTML Template includes 3 different pages. You can use this layout for your website. Please tell your friends about <a href="https://plus.google.com/+tooplate" target="_parent">Tooplate</a>. Thank you.</p>
                </div>
                <div class="tm-buy-box">
                  <a href="#" class="tm-bg-blue tm-text-white tm-buy">hourly rate</a>
                  <span class="tm-text-blue tm-price-tag">$5.50</span>
                </div>
              </div>
            </div>

            <div class="media">
              <img src="img/cat1.jpg" alt="Image" class="mr-3" style="width:auto;height:140px;">
              <div class="media-body tm-bg-pink-light">
                <div class="tm-description-box">
                  <h5 class="tm-text-pink">Proin fermentum sapien sed nisl</h5>
                  <p class="mb-0">Donec est felis, posuere viverra dapibus ac, pretium vel libero. Aliquam consectetur, arcu eget euismod congue, tortor metus vehicula.</p>
                </div>
                <div class="tm-buy-box">
                  <a href="#" class="tm-bg-pink tm-text-white tm-buy">hourly rate</a>
                  <span class="tm-text-pink tm-price-tag">$7.25</span>
                </div>
              </div>
            </div> 
        </div>
      <footer>
      </footer>
    </div> <!-- .container -->
  </div> <!-- .main -->
</body>
</html>
