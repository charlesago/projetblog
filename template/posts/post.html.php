<div class="post mt-3">
    <h3><?= $post["title"]?></h3>
    <p><?= $post['content'] ?></p>
    <form method="post" action="delete-post.php">
        <button class="btn-danger btn"><input class="btn btn-danger" name="id" type="hidden" value="<?= $post["id"]?>">DEL</button>
    </form>
    <a href="update-post.php?id=<?= $post['id'] ?>" class="btn btn-primary ">Edit</a>

    <a href="index.php" class="btn btn-success">retour</a>
</div>

<div class="mt-5 fs-5 text-primary">
    <p>Comments</p>
</div>
<div class="col-12 mt-3 row d-flex p-2 bg-dark bg-opacity-10 border border-dark border-start-2 rounded-end">
    <?php
    foreach ($comments as $comment) :
        ?>
            <div class="">
                <p class="text-dark"><?= $comment["content"]?></p>
            </div>

        </div>
    <?php endforeach; ?>
</div>


<form method="POST">
    <div class="mb-3 ">
        <label for="exampleInputPassword1"  class="form-label formulaires">Comments</label>
        <input type="text" name="postComments" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>