<!-- Header -->
<header>
  <!-- Scrol top -->
  <button class="top"><i class="fad fa-angle-double-up top__icon"></i></button>
  <!-- Nav -->
  <div class="container">
    <nav class="navbartop">
      <ul class="navbartop__list">
        <li><a class="navbartop__link" href="#!">+38 (066) 123 45—67</a></li>
        <li><img class="logo" src="img/Logo.png" alt="Logo"></li>
        <li><a class="navbartop__link" href="#">Консультация</a></li>
      </ul>
   </nav>
   <div class="block-menu"></div>
  <nav class="navbarpro">
     <p class="menu-text">Menu</p>
    <i class="fas fa-chevron-circle-down menu-icon"></i>
    <ul class="navbarpro__list">
    <? foreach($arrayPages as $link => $pageInfo): ?>
      
      <li><a class="navbarpro__link" href="/?route=<?= $link ?>"> <?= $pageInfo['page_title']; ?> </a></li>
      
    <? endforeach; ?>
    </ul>
 </nav>
  </div>

</header>