<form method="POST" action="/">
    <div class="modal-header">
        <h5 class="modal-title" id="popupModalTitle">Edit Targeted Countries</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i aria-hidden="true" class="ki ki-close"></i>
        </button>
    </div>
    <div class="modal-body align-items-stretch">
        <select id="selectTargetedCountries" class="dual-listbox " multiple >
            <?php echo $_SESSION['htmlSelectCountries']; ?>
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
</form>

