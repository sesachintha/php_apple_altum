<?php defined('ALTUMCODE') || die() ?>

<div class="container">
    <?= \Altum\Alerts::output_alerts() ?>

    <nav aria-label="breadcrumb">
        <ol class="custom-breadcrumbs small">
            <li><a href="<?= url('tools') ?>"><?= l('tools.breadcrumb') ?></a> <i class="fa fa-fw fa-angle-right"></i></li>
            <li class="active" aria-current="page"><?= l('tools.meta_tags_checker.name') ?></li>
        </ol>
    </nav>

    <div class="mb-4 intro-tools">
        <h1 class="h3 m-0"><?= l('tools.meta_tags_checker.name') ?></h1>
        <h2 class="h6 m-0"><?= l('tools.meta_tags_checker.description') ?></h2>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="" method="post" role="form">
                <input type="hidden" name="token" value="<?= \Altum\Csrf::get() ?>" />

                <div class="form-group">
                    <label for="url"><i class="fa fa-fw fa-link fa-sm text-muted mr-1"></i> <?= l('tools.url') ?></label>
                    <input type="url" id="url" name="url" class="form-control <?= \Altum\Alerts::has_field_errors('url') ? 'is-invalid' : null ?>" value="<?= $data->values['url'] ?>" required="required" />
                    <?= \Altum\Alerts::output_field_error('url') ?>
                </div>

                <button type="submit" name="submit" class="btn btn-block btn-primary"><?= l('global.submit') ?></button>
            </form>

        </div>
    </div>

    <?php if(isset($data->result)): ?>
        <div class="mt-4">
            <div class="table-responsive table-custom-container">
                <table class="table table-custom">
                    <tbody>

                    <?php foreach($data->result as $key => $value): ?>
                        <tr>
                            <td class="font-weight-bold">
                                <?= $key ?>
                            </td>
                            <td class="text-nowrap">
                                <?= $value ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    <?php endif ?>

    <?= $this->views['extra_content'] ?>

    <?= $this->views['similar_tools'] ?>
</div>

<?php include_view(THEME_PATH . 'views/partials/clipboard_js.php') ?>

