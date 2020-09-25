<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BeCitizen</title>
    <link rel="icon" href="img/logo.jpeg" />
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous" />
    <link href="styles/index.css" rel="stylesheet" />
    <link href="styles/header.css" rel="stylesheet" />
    <link href="styles/footer.css" rel="stylesheet" />
</head>
  <body>
    <header >
        <h1>
            BeCitizen
        </h1>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" id="homelik" href="index.php">Головна<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" id="regestrationlink" href="signin.php">Вхід/Реєстрація<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" id="searchlink" href="search.html">Пошук по тегах<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" id='chatslink' href="chats.html">Чати<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" id="ideaslink" href="ideas.html">Мої ідеї<span class="sr-only">(current)</span></a>
              </div>
            </div>
        </nav>
    </header>
    <main>
        <h2>Глобальні екологічні проблеми світу</h2>
        <div id="navbuttons">
        <button type="button" id="airbutton" class="btn btn-outline-light btn-lg btn-block">Забруднення повітря</button>
        <button type="button" id="waterbutton" class="btn btn-outline-light btn-lg btn-block">Забруднення води</button>
        <button type="button" id="forestsbutton" class="btn btn-outline-light btn-lg btn-block">Масштабні лісові пожежі</button>
        <button type="button" id="warmingbutton" class="btn btn-outline-light btn-lg btn-block">Глобальне потепління</button>
        <button type="button" id="plasticbutton" class="btn btn-outline-light btn-lg btn-block">Надмірне використання пласттику</button>
        </div>
    </main>

    <footer>
        <hr />
        <div id="contactinfo">
          <p>123-122-1323 zastavna@gmail.com</p>
          <p>1715 Soborna str, Lemberg, Ukraine</p>
          <p>©2020 YX Studio</p>
        </div>
    </footer>
    <script src="index.js"></script>
  </body>
</html>


