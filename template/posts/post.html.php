<style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
</style>

<div class="post mt-3 text-light ">
    <h3><?= $post["title"]?></h3>
    <p><?= $post['content'] ?></p>
    <div class="d-flex justify-content-end ">
    <form method="post" action="delete-post.php">
        <button class="btn btn-outline-light me-2"><input class="btn btn-danger" name="id" type="hidden" value="<?= $post["id"]?>"><i class="bi bi-trash-fill"></i></button>
    </form>
    <a href="update-post.php?id=<?= $post['id'] ?>" class="btn btn-outline-light me-2 "><i class="bi bi-pencil"></i></a>

    <a href="index.php" class="btn btn-outline-light"><i class="bi bi-skip-backward"></i></a>
</div>
</div>
<div class="mt-5 fs-5 text-primary">
    <p>Comments</p>
</div>
<div class="col-12 mt-3 row d-flex p-2 bg-dark bg-opacity-10 border border-light border-start-2 rounded-end text-light">
    <?php foreach ($comments as $comment): ?>
<div >
        <hr class="mt-3">

        <p><strong class=""><?= $comment['content'] ?></strong></p>
        <a href="#" class="btn btn-outline-light me-2"><strong><i class="bi bi-trash-fill"></i></strong></a>
        <a href="#" class="btn btn-outline-light me-2 "><strong><i class="bi bi-pencil"></i></strong></a>

        <hr>

</div>

    <?php endforeach; ?>

    <hr>
</div>
<div class=" ">
    <p class="text-primary mt-5 fs-5">Add Comments</p>
    <form method="post" class="form text-light col d-flex " action="createcomments.php">
        <div class="col-11 mt-3 row d-flex p-2 bg-dark bg-opacity-10  rounded-end text-light ">
        <input class="form-control bg-dark text-light"  type="text" name="content" placeholder="add a comment">
        <input name="id" class="form-text text-light " type="hidden" value="<?= $post['id'] ?>">
        </div>
        <button class="btn btn-outline-light ms-4 FormPost col-1" type="submit"><i class="bi bi-arrow-left-circle"></i></button>
    </form>
</div>