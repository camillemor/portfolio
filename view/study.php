<section class="study">
    <h2> Ma formaion </h2>
    <?php foreach($studies as $study): ?>
        <article>
            <h3> <?= $study['diploma'] ?> </h3> <!-- diplome-->
            <p> <?= $study['years'] ?> </p> <!-- annee-->
            <p> <?= $study['city'] ?>  </p> <!-- lieu-->
        </article>
    <?php endforeach; ?>
</section>