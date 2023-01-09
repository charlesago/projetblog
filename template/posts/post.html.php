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
    <?php foreach ($comments as $comment): ?>

        <hr>

        <p><strong><?= $comment['content'] ?></strong></p>
        <a href="#" class="btn btn-danger"><strong>X</strong></a>
        <a href="#" class="btn btn-warning"><strong>update</strong></a>

        <hr>
        <hr>

    <?php endforeach; ?>

    <hr>
<div>
    <form method="post" class="form" action="createcomments.php">
        <input class="form-control"  type="text" name="content" placeholder="add a comment">
        <input name="id" class="form-control" type="hidden" value="<?= $post['id'] ?>">
        <button class="btn btn-success" type="submit">Send</button>
    </form>
</div>