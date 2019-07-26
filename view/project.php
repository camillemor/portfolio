<section class="project">
      
    <h2> Mes projets </h2>
    
        <?php foreach($projects as $project):?>
            <article>
                <h3> <?= $project['title'] ?> </h3>
                <p> <?= $project['presentation'] ?> </p>
                <img src="" alt="">
                <a href="<?= $project['link'] ?>"> Lien du site </a>
            </article>
        <?php endforeach; ?>
</section>