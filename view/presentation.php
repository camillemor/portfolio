<section id='logo'>    
  <img src="images/HTML.jpg" alt="logo html">
  <img src="images/CSS.jpg" alt="logo css">
  <img src="images/js.jpg" alt="logo js">
  <img src="images/php.jpg" alt="logo php">
  <img src="images/my.jpg" alt="logo mysql">
</section>

<section class="presentation">

    <h2> A propos de moi </h2>
        <p> 
            <?= $presentation[0]['presentation'];?>
        </p> <!--presentation-->
        <p> 
            <?= $presentation[0]['age'] ?> ans 
        </p> <!-- age-->
        <p>
           de  <?= $presentation[0]['city'] ?>
        </p> <!-- ville-->
        <p> 
           mon adresse mail <?= $presentation[0]['mail'] ?>
        </p> <!--mail-->
</section>
