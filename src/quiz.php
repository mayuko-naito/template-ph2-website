<?php
require 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QUIZ1</title>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="quiz.css">
</head>
<body>

<?php for ($i = 0; $i < count($questions); $i++) { ?>
　<h2 class="p-quiz-box__question__title">
　　<span class="p-quiz-box__label">Q<?= $i + 1 ?></span>
　　<span class="p-quiz-box__question__title__text"><?= $questions[$i]["content"]; ?></span>
　</h2>
<?php } ?>

<?php for ($i = 0; $i < count($questions); $i++) { ?>
　<h2 class="p-quiz-box__question__title">
　　<span class="p-quiz-box__label">Q<?= $i + 1 ?></span>
　　<span class="p-quiz-box__question__title__text"><?= $questions[$i]["image"]; ?></span>
　</h2>
<?php } ?>

  <header>
    <div class="posse_header">
      <h1 class="posse_logo">
        <img src="./img/logo.svg" alt="h_posse" width="148px" height="27.53px">
      </h1>

        <nav class="header__nav nav" id="js-nav">
          <ul class="nav__items nav-items ">
            <li class="nav-items__item" ><a href="">POSSEとは</a></li>
            <li class="nav-items__item"><a href="">クイズ</a></li>
            <li class="nav-items__item"><a href=""><img src="./img/icon/icon-twitter.svg" alt="header_Twitter"></a></li>
            <li class="nav-items__item"><a href=""><img src="img/icon/icon-instagram.svg" alt="header_Instagram"></a></li>
          </ul>
        </nav>

        <button class="header__hamburger hamburger " id="js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
        
      </nav>
    </div>


  </header>
  <main>
    <div class="quiz_main">
      <img class="quiz_main" src="img/quiz/bg-hero.jpg" alt="">
      
      <div class="q_main_paragraph">
        <span class="q_paragraph_1st">POSSE課題</span>
        <span class="q_paragraph_2nd">ITクイズ</span>
      </div>
    </div>
    <div id="quiz_container" class="quiz_container"></div>
  </main>
  <footer>
    <div class="posse_footer">
      <div class="footer_info">
        <img src="./img/logo.svg" alt="f_posse" width="202px" height="39.22px">
        <a href="https://posse-ap.com/" rel="noopener noreferrer" class="footer_info_logo">POSSE公式サイト</a>
      </div>
      <div class="footer_sns">
        <ul style="list-style-type: none">
          <li>
            <a href=""><img src="./img/icon/icon-twitter.svg" alt="footer_Twitter"></a>
          </li>
          <li>
            <a href=""><img src="./img/icon/icon-instagram.svg" alt="footer_Instagram"></a>
          </li>
        </ul>
      </div>
      <div class="footer_copyright">
        <small>&copy; 2022 POSSE</small>
      </div>
    </div>
  </footer>
  <script src="quiz2.js"></script>
</body>
</html>