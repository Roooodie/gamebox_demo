<h3 class="uk-heading-line">
    <span>Delete Student Information</span>
</h3>
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <form class="uk-form-stacked" action="/delete?id=<?php __($id ?? ''); ?>" method="post">
        <div class="uk-alert-danger" uk-alert>
            <p>Data is priceless, please confirm whether to delete again!</p>
        </div>

        <input name="id" type="hidden" value="<?php __($id ?? ''); ?>">

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Student Number</label>
            <div class="uk-form-controls">
                <?php __($no ?? ''); ?>
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Name</label>
            <div class="uk-form-controls">
                <?php __($name ?? ''); ?>
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-form-label">Gender</div>
            <div class="uk-form-controls">
                <?php echo(($gender ?? '0') === 0 ? 'Male' : 'Female') ?>
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Phone Number</label>
            <div class="uk-form-controls">
                <?php __($phone ?? ''); ?>
            </div>
        </div>
        <button type="submit" class="uk-button uk-button-danger">Apply</button>
    </form>
</div>
