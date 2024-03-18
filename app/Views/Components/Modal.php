<form method="POST" action="<?= $content["id"] ?>">
<div class="modal fade" id="<?= $content["id"] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">
          <?= $content["title"] ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?= $content["message"] ?>
        <input type="hidden" id="hiddenID" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <?php if($content["type"] == "delete"): ?>
          <button type="button" class="btn btn-danger">Delete</button>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
        </form>