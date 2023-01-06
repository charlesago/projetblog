<div class="col-12 row d-flex">
    <?php
    foreach ($posts as $post) :
        ?>

        <div class="card text-center order-info mb-3 m-2" style="max-width: 18rem;">
            <div class="card-header">
                Articles
            </div>
            <div class="card-body ">
                <h5 class="card-title titre"><?= $post["title"]?></h5>
                <p class="card-text"><?= $post["content"]?></p>
                <a href="post.php?id=<?= $post['id']?>" class="btn btn-success ">Ouvrir</a>
            </div>

        </div>
    <?php endforeach; ?>
</div>