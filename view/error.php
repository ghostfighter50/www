<?php require_once('header.php') ?>

<div class="container mt-4 alert alert-danger" role="alert">
    <h2>Error</h2>
    <center><h4 class="text-dark"><?php echo $error ?? "Post not found" ?></h4></center>
<br>
<p><a class="btn btn-danger" href=".">Back to List</a></p>
</div>

<?php require_once('footer.php') ?>
