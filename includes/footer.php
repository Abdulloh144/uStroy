<section class="footer__end">
      <div class="container">
        <div class="footer__menu">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="footer__box">
                <div class="footer__box-block">
                  <p class="footer__box-text">Социальные сети</p>
                  <a class="footer__box-link" href="#!">Facebook</a>
                  <a class="footer__box-link" href="#!">Instagram</a>
                  <a class="footer__box-link" href="#!">Telegram</a>
                </div>
                <div class="footer__box-block">
                  <p class="footer__box-text">Навигация по сайту</p>
                  <? foreach($arrayPages as $link => $pageInfo): ?>
                  <a class="footer__box-link" href="/?route=<?= $link ?>"><?= $pageInfo['page_title']; ?></a>
                  <? endforeach; ?>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="footer__box">
                <div class="footer__box-block">
                  <p class="footer__box-text">Частые вопросы</p>
                  <a class="footer__box-link" href="#">Процедура покупки недвижимости</a>
                  <a class="footer__box-link" href="#">Юридическая информация</a>
                  <a class="footer__box-link" href="#">Условия договора с арендаторами</a>
                  <a class="footer__box-link" href="#">Прибыльность объектов</a>
                </div>
                <div class="footer__box-item">
                  <img  class="footer__box-img" src="img/Logo.png" alt="logo">
                  <p class="footer__box-text2">ул. Абрикосовая 57, офис 10, </p>
                  <p class="footer__box-text2">Запорожье, Украина, 09:00—21:00</p>
                  <a class="footer__box-link2" href="#">+38 (065) 246—7122</a>
                  <a class="footer__box-link2" href="#">astra.inc@gmail.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__botton">
          <a class="footer__botton-link" href="#">Сайт создал Винников</a>
          <a class="footer__botton-link" href="#">©2002—2021 U.STROY, все права защищены.</a>
          <a class="footer__botton-link" href="#">Политика конфиденциальности</a>
        </div>
      </div>
      
    </section>
  </footer>
    <script src="js/jquary.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>