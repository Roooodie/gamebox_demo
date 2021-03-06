<h3 class="uk-heading-line">
    <span>Add Student</span>
</h3>
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <form class="uk-form-stacked" action="/add" method="post">

        <?php if (isset($error) && $error !== '') { ?>
            <div class="uk-alert-danger" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <p><?php __($error) ?></p>
            </div>
        <?php } ?>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Student Number</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="no" type="text" placeholder="Input Student Number" value="<?php __($no ?? ''); ?>">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Name</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="name" type="text" placeholder="Input Name" value="<?php __($name ?? ''); ?>">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-form-label">Gender</div>
            <div class="uk-form-controls">
                <label><input class="uk-radio" type="radio" name="gender"
                              value="0" <?php echo(($gender ?? '0') === '0' ? 'checked' : '') ?>>Male</label>
                <label><input class="uk-radio" type="radio" name="gender"
                              value="1" <?php echo(($gender ?? '0') === '1' ? 'checked' : '') ?>>Female</label>
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Phone Number</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="phone" type="text" placeholder="Input Phone Number"
                       value="<?php __($phone ?? ''); ?>">
            </div>
        </div>
        <button type="submit" class="uk-button uk-button-primary">Add Student</button>
    </form>
</div>
