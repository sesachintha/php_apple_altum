<?php defined('ALTUMCODE') || die() ?>

<div class="container container-pages">
    <nav aria-label="breadcrumb">
        <ol class="custom-breadcrumbs small">
            <li><a href="<?= url() ?>"><?= l('index.breadcrumb') ?></a> <i class="fa fa-fw fa-angle-right"></i></li>
            <li class="active" aria-current="page"><?= $data->page->title ?></li>
        </ol>
    </nav>


    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between">
        <h1 class="mb-1"><?= $data->page->title ?></h1>
    </div>

    <p><?= $data->page->description ?></p>

    <?= nl2br($data->page->content) ?>

    <div class="mt-4">
        <small class="text-muted"><?= sprintf(l('global.last_datetime_tooltip'), \Altum\Date::get($data->page->last_datetime, 2)) ?></small>
    </div>

</div>
