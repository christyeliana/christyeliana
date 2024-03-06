<!DOCTYPE html>
<!-- saved from url=(0034)http://localhost/proweb/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./postingan_files/bootstrap.css">
</head>
<body>
    <div class="container mb-5">
        <nav class="navbar navbar-expand-lg bg-light\">
            <div class="container-fluid">
              <a class="navbar-brand" href="http://localhost/proweb/index.html#"><img src="./postingan_files/gigi.jpg" width="70"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/proweb/index.html#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/proweb/index.html#">About Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://localhost/proweb/index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      What's your problem?
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" a="" href="http://localhost/proweb/registerity.html">Regular dental check ups</a></li>
                      <li><a class="dropdown-item" a="" href="http://localhost/proweb/registerity.html">Teeth scaling</a></li>
                      <li><a class="dropdown-item" a="" href="http://localhost/proweb/registerity.html">Tooth Decay</a></li>
                      <li><a class="dropdown-item" a="" href="http://localhost/proweb/registerity.html">Gum Disease</a></li>
                      <li><a class="dropdown-item" a="" href="http://localhost/proweb/registerity.html">Root Infection</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" a="" href="http://localhost/proweb/registerity.html">Another problems</a></li>
                    </ul>
                  </li>
                  <li class="nav-item mr-1">
                    <a class="btn btn-outline-success" href="http://localhost/proweb/login/register.html"> Sign Up</a>
                  </li>
                  &nbsp;
                  <li class="nav-item mr-1">
                    <a class="btn btn-outline-success" href="http://localhost/proweb/login/login.php"> Login </a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </div>
    <section>
        <div class="container">
            <div class="row">
              <style>
                @import url('https://fonts.googleapis.com/css2?family=Quantico:wght@700&display=swap');
                </style>
                <div class="col align-self-center">
                <h1 style="font-family: &#39;Quantico&#39;, cursive;"> Hai! <br> Welcome to Eliana's Dental Clinic </h1>
                <p class="mt-3 mb-4"></p><h5>Let your smile change the world, but don't let the world change your smile. <br>
                - Connor Franta</h5>

                

             <!--     <p></p>
                <button type="button" class="btn btn-success">mulai sekarang</button>
                </div>
                <div class="col d-none d-lg-block d-xl-block">
                  <img src="./postingan_files/dentist3.jpg" alt="" width="600">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
      <center> <h2 style="font-style: times new roman;"> Dental News </h2></center> -->
     
    <div class="container">
      <div class="row">
        foreach($hasil as $data)
        {
          ?>
          <div class="col-sm-12">
            <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo "$data[judul]"; ?></h5>
              <p class="card-text">
                <?php
                echo "$data[username]";
                $tanggal = date_create($data["tanggal"]);
                echo " | ";
                echo date_format($tanggal, "d-M-Y")
                ?></p>
                <p class="card-text"><?php echo "$data[konten]"; ?></p>
        </div>
        </div>
        </div>
        }
          </div>
        </div>
     
    
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="./postingan_files/bright smile.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tips to Promote a Bright Smile</h5>
            <p class="card-text">Everyone, of course, wants to look and feel their best. And maintaining one’s oral health is 
              an essential part of an overall healthcare routine. But what should we all be ...</p>
            <a href="https://www.dentistrytoday.com/renowned-dentist-will-offer-tips-to-promote-a-bright-smile/" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
    
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="./postingan_files/flouridation.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Exposure to water fluoridation during childhood ‘unquestionably effective’</h5>
            <p class="card-text">Published in the Journal of Dental Research (JDR),the research found that fluoride in water is ...</p>
            <a href="https://dentistry.co.uk/2022/10/14/exposure-to-water-fluoridation-during-childhood-unquestionably-effective/" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
    </div>
  </div></section>
    
  
  <div class="container">
    <!-- JavaScript Bundle with Popper -->
<script src="./postingan_files/bootstrap.bundle.min.js.download" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </div>
 

</body></html>