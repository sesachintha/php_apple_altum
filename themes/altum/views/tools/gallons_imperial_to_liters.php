<?php defined('ALTUMCODE') || die() ?>

<div class="container">
    <?= \Altum\Alerts::output_alerts() ?>

    <nav aria-label="breadcrumb">
        <ol class="custom-breadcrumbs small">
            <li><a href="<?= url('tools') ?>"><?= l('tools.breadcrumb') ?></a> <i class="fa fa-fw fa-angle-right"></i></li>
            <li class="active" aria-current="page"><?= l('tools.gallons_imperial_to_liters.name') ?></li>
        </ol>
    </nav>

    <div class="mb-4 intro-tools">
        <h1 class="h3 m-0"><?= l('tools.gallons_imperial_to_liters.name') ?></h1>
        <h2 class="h6 m-0"><?= l('tools.gallons_imperial_to_liters.description') ?></h2>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="" method="post" role="form">
                <input type="hidden" name="token" value="<?= \Altum\Csrf::get() ?>" />

                <div class="form-group">
                    <label for="gallons"><i class="fa fa-fw fa-tint fa-sm text-muted mr-1"></i> <?= l('tools.gallons_imperial_to_liters.gallons') ?></label>
                    <input type="number" step=".01" id="gallons" name="gallons" class="form-control <?= \Altum\Alerts::has_field_errors('gallons') ? 'is-invalid' : null ?>" value="<?= $data->values['gallons'] ?>" required="required" />
                    <?= \Altum\Alerts::output_field_error('gallons') ?>
                </div>

                <button type="submit" name="submit" class="btn btn-block btn-primary"><?= l('global.submit') ?></button>
            </form>

        </div>
    </div>

    <?php if(isset($data->result)): ?>
        <div class="mt-4">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="result"><?= l('tools.gallons_imperial_to_liters.liters') ?></label>
                            <div>
                                <button
                                        type="button"
                                        class="btn btn-link text-secondary"
                                        data-toggle="tooltip"
                                        title="<?= l('global.clipboard_copy') ?>"
                                        aria-label="<?= l('global.clipboard_copy') ?>"
                                        data-copy="<?= l('global.clipboard_copy') ?>"
                                        data-copied="<?= l('global.clipboard_copied') ?>"
                                        data-clipboard-target="#result"
                                        data-clipboard-text
                                >
                                    <i class="fa fa-fw fa-sm fa-copy"></i>
                                </button>
                            </div>
                        </div>
                        <textarea id="result" class="form-control"><?= nr($data->result, 2) ?></textarea>
                    </div>

                </div>
            </div>
        </div>
    <?php endif ?>

<?= $this->views['extra_content'] ?>

    <?= $this->views['similar_tools'] ?>
</div>

<?php include_view(THEME_PATH . 'views/partials/clipboard_js.php') ?>
