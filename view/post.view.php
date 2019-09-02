<?php
include('layouts/header.view.php');
?>
<h1 class="display-1 text-center mb-5">Nice</h1>
<div class="row">
    <?php if($response): ?>
        <div class="col-md6 mx-auto">
            <img src=<?= $response->url ?> class="img-fluid" alt="Responsive image">
            <p><a href=<?= $response->page_url ?> target="_blank">ImgFlip</a></p>
        </div>
    <?php else: ?>
        <p>Something went wrong</p>
    <?php endif; ?>
</div>
<?php
include('layouts/footer.view.php');
include('components/modal.view.php');
?>