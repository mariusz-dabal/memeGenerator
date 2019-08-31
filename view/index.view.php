<?php
require_once 'layouts/header.view.php';
?>
<h1 class="display-1 text-center mb-5">Meme Generator</h1>
<div class="row">
<?php foreach($memes as $meme): ?>
    <div class="col-md-4">
        <img src=<?= $meme->url ?> alt=<?= $meme->name ?> class="img-thumbnail meme" data-toggle="modal" data-target="#modalMeme" data-title="<?= $meme->name ?>">
    </div>
<?php endforeach; ?>
</div>
<?php
require_once 'layouts/footer.view.php';
require_once 'components/modal.view.php';
?>
