<div class="modal fade" id="modalMeme" tabindex="-1" role="dialog" aria-labelledby="modalMemeTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMemeTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src=<?= $meme->url ?> class="img-fluid modal-img" alt="Responsive image">
        <form method="post" action="/post">
          <div class="form-group">
            <label for="upperText">Upper Text</label>
            <input type="text" class="form-control" id="upperText" name="text0">
          </div>
          <div class="form-group">
            <label for="lowerText">Lower Text</label>
            <input type="text" class="form-control" id="lowerText" name="text1">
          </div>
          <input type="hidden" name="template_id" class="modalId">
          <button type="submit" class="btn btn-primary" name="submitText">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>