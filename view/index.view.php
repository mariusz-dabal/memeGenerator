<?php
include('layouts/header.view.php');
?>
<h1 class="display-1 text-center mb-5">Meme Generator</h1>
<div class="row">
<?php foreach($memes as $meme): ?>
    <div class="col-md-4">
        <img src=<?= $meme->url ?> alt=<?= $meme->name ?> class="img-thumbnail meme" data-toggle="modal" data-target="#modalMeme" data-title="<?= $meme->name ?>" data-id=<?= $meme->id ?>>
    </div>
<?php endforeach; ?>
</div>
<?php
include('layouts/footer.view.php');
include('components/modal.view.php');
?>
