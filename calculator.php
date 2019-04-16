<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <link rel="canonical" href="https://rakub.pl/calc/calculator">
    <link rel="icon" href="../img/ezn.ico" type="image/x-icon" />
    <title>Jakub Radzik- Kalkulator</title>
    <meta name="description" content="My favorite project, there are some little bugs which need some solutions, so I think this is medium-advanced exercise but also make me satisfied.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="script/script.js"></script>

</head>

<body class=" bg-dark text-uppercase font-weight-bold text-white">


        <nav class="navbar navbar-shrink" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" data-toggle="modal" data-target="#logPannel">Log in</a>
                    <button class="navbar-toggler navbar-toggler-right bg-secondary rounded" type="button" data-toggle="collapse" 
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
                    PROJEKTY
                    </button>
                  <div class="navbar-collapse collapse" id="navbarResponsive" >
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://rakub.pl/">main page</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../pesel/pesel-generator">Pesel Generator</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../rps/game">Rock Paper Scissors</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-danger" href="../ruletka/roulette">Ruletka</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../opinion/opinionPage">Opinions</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../contact/contactPage">Contact</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../certification/mycertification">certifications</a>
                        </li>
                    </ul>
                  </div>
                </div>
              </nav>

              <div id="logPannel" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content text-dark">
      <div class="modal-header">

        <button id="logBtn" class="btn btn-outline-dark" onclick="classing(this)">Log in</button>
        <button id="crtBtn" class="btn btn-outline-dark" onclick="classing(this)">Create account</button>

      </div>
      <div id="modalScript" class="modal-body d-flex justify-content-center">
          <form>
              <input class="data" type="text" placeholder="Login">
              <input class="data" type="password" placeholder="Password">
            </form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


              <h1 class="display-3 text-center pt-4">Calc</h1>
<div class="container-fluid d-flex justify-content-center align-items-center calc">
    
        <table class="table">
            <tr>
                <td colspan="4"><input type="text" id="help" disabled class="form-control text-right" value=""></td>
                
            </tr>
            <tr>
                <td colspan="4"><input type="text" id="result" disabled class="form-control text-right" value=""></td>
                
            </tr>
            <tr><!--UWAGA ZMIANA KLAS PRZYCISKU RÓWNA SIĘ ZE ZMIANĄ WARTOŚCI W PILKU script.js/8-linijka/funkcja click-->
                <td><button class="btn btn-outline-light" value="C">C</button></td>
                <td><button class="btn btn-outline-light" value=">">&gt;</button></td>
                <td><button class="btn btn-outline-light" value="/">/</button></td>
                <td><button class="btn btn-outline-light" value="X">X</button></td>
            </tr>
            <tr>
                <td><button class="btn btn-outline-light" value="7">7</button></td>
                <td><button class="btn btn-outline-light" value="8">8</button></td>
                <td><button class="btn btn-outline-light" value="9">9</button></td>
                <td><button class="btn btn-outline-light" value="-">-</button></td>
            </tr>
            <tr>
                <td><button class="btn btn-outline-light" value="4">4</button></td>
                <td><button class="btn btn-outline-light" value="5">5</button></td>
                <td><button class="btn btn-outline-light" value="6">6</button></td>
                <td><button class="btn btn-outline-light" value="+">+</button></td>
            </tr>
            <tr>
                <td><button class="btn btn-outline-light" value="1">1</button></td>
                <td><button class="btn btn-outline-light" value="2">2</button></td>
                <td><button class="btn btn-outline-light" value="3">3</button></td>
                <td rowspan="2" class="align-middle"><button class="btn btn-outline-light" style="height:126px;" value="=">=</button></td>
            </tr>
            <tr>
                <td colspan="2"><button class="btn btn-outline-light" value="0">0</button></td>
                <td><button class="btn btn-outline-light" value=".">.</button></td>
            </tr>
        </table>
    </div> 

    <footer class="text-center bg-secondary">
        <div class="container-fluid">
          find me on
        </div>
      
        <div class="logos">
          <a href="https://www.facebook.com/jakub.radzik.12"><img src="../img/facebook.png" alt="facebook-logo"></a>
          <a href="https://www.instagram.com/ja.kub_ra.dzik/"><img src="../img/instagram.png" alt="instagram-logo"></a>
          <a href="https://www.linkedin.com/in/jakub-radzik-726682174/"><img src="../img/linkedin.png" alt="linkedin-logo"></a>
          <a href="https://open.spotify.com/user/jradzik4"><img src="../img/spotify.png" alt="spotify-logo"></a>
          <img src="../img/snapchat.png" alt="snapchat-log" data-toggle="modal" data-target="#myModal" class="link-modal">
        </div>
      
        <div id="myModal" class="modal fade text-dark" role="dialog">
          <div class="modal-dialog">
      
            <div class="modal-content">
      
              <div class="modal-header d-flex justify-content-center">
                <h4 class="modal-title text-lowercase">independence.ru</h4>
              </div>
              <div class="modal-body bg-dark">
                <img src="../img/snapcode.png" alt="independence.ru-snapcode">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark text-uppercase" data-dismiss="modal">Close</button>
              </div>
      
            </div>
          </div>
        </div>
      
      
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href="http://rakub.pl"> rakub.pl</a>
        </div>
      </footer>

        <script src="../logScript.js"></script>


</body>

</html>