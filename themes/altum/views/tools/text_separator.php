<?php defined('ALTUMCODE') || die() ?>

<div class="container">
    <?= \Altum\Alerts::output_alerts() ?>

    <nav aria-label="breadcrumb">
        <ol class="custom-breadcrumbs small">
            <li><a href="<?= url('tools') ?>"><?= l('tools.breadcrumb') ?></a> <i class="fa fa-fw fa-angle-right"></i></li>
            <li class="active" aria-current="page"><?= l('tools.text_separator.name') ?></li>
        </ol>
    </nav>

    <div class="mb-4 intro-tools">
        <h1 class="h3 m-0"><?= l('tools.text_separator.name') ?></h1>
        <h2 class="h6 m-0"><?= l('tools.text_separator.description') ?></h2>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="" method="post" role="form">
                <input type="hidden" name="token" value="<?= \Altum\Csrf::get() ?>" />

                <div class="form-group">
                    <label for="text"><i class="fa fa-fw fa-paragraph fa-sm text-muted mr-1"></i> <?= l('tools.text') ?></label>
                    <textarea id="text" name="text" class="form-control <?= \Altum\Alerts::has_field_errors('text') ? 'is-invalid' : null ?>" required="required"><?= $data->values['text'] ?></textarea>
                    <?= \Altum\Alerts::output_field_error('text') ?>
                </div>

                <div class="form-group">
                    <label for="separated_by"><i class="fa fa-fw fa-sm fa-fingerprint text-muted mr-1"></i> <?= l('tools.text_separator.separated_by') ?></label>
                    <select id="separated_by" name="separated_by" class="form-control" required="required">
                        <option value="new_line" <?= $data->values['separated_by'] == 'new_line' ? 'selected="selected"' : null ?>><?= l('tools.text_separator.new_line') ?></option>
                        <option value="space" <?= $data->values['separated_by'] == 'space' ? 'selected="selected"' : null ?>><?= l('tools.text_separator.space') ?></option>
                        <option value=";" <?= $data->values['separated_by'] == ';' ? 'selected="selected"' : null ?>>;</option>
                        <option value="-" <?= $data->values['separated_by'] == '-' ? 'selected="selected"' : null ?>>-</option>
                        <option value="|" <?= $data->values['separated_by'] == '|' ? 'selected="selected"' : null ?>>|</option>
                        <option value="." <?= $data->values['separated_by'] == '.' ? 'selected="selected"' : null ?>>.</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="separate_by"><i class="fa fa-fw fa-sm fa-object-ungroup text-muted mr-1"></i> <?= l('tools.text_separator.separate_by') ?></label>
                    <select id="separate_by" name="separate_by" class="form-control" required="required">
                        <option value="new_line" <?= $data->values['separate_by'] == 'new_line' ? 'selected="selected"' : null ?>><?= l('tools.text_separator.new_line') ?></option>
                        <option value="space" <?= $data->values['separate_by'] == 'space' ? 'selected="selected"' : null ?>><?= l('tools.text_separator.space') ?></option>
                        <option value=";" <?= $data->values['separate_by'] == ';' ? 'selected="selected"' : null ?>>;</option>
                        <option value="-" <?= $data->values['separate_by'] == '-' ? 'selected="selected"' : null ?>>-</option>
                        <option value="|" <?= $data->values['separate_by'] == '|' ? 'selected="selected"' : null ?>>|</option>
                        <option value="." <?= $data->values['separate_by'] == '.' ? 'selected="selected"' : null ?>>.</option>
                    </select>
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
                            <label for="result"><?= l('tools.result') ?></label>
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
                        <textarea id="result" class="form-control"><?= $data->result ?></textarea>
                    </div>

                </div>
            </div>

        </div>
    <?php endif ?>

    <?= $this->views['extra_content'] ?>

    <?= $this->views['similar_tools'] ?>
</div>

<?php include_view(THEME_PATH . 'views/partials/clipboard_js.php') ?>
