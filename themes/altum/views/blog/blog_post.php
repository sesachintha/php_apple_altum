<?php defined('ALTUMCODE') || die() ?>

<div class="container container-pages">
    <nav aria-label="breadcrumb">
        <ol class="custom-breadcrumbs small">
            <li><a href="<?= url() ?>"><?= l('index.breadcrumb') ?></a> <i class="fa fa-fw fa-angle-right"></i></li>
            <li><a href="<?= url('blog') ?>"><?= l('blog.breadcrumb') ?></a> <i class="fa fa-fw fa-angle-right"></i></li>
            <?php if($data->blog_posts_category): ?>
                <li><a href="<?= url('blog/category/' . $data->blog_posts_category->url) ?>"><?= $data->blog_posts_category->title ?></a> <i class="fa fa-fw fa-angle-right"></i></li>
            <?php endif ?>
            <li class="active" aria-current="page"><?= $data->blog_post->title ?></li>
        </ol>
    </nav>

    <?php require THEME_PATH . 'views/partials/ads_header.php' ?>

    <div class="row">
        <div class="col-12">

            <h1 class="mb-1"><?= $data->blog_post->title ?></h1>
            <p class="small text-muted">
                <span><?= sprintf(l('global.datetime_tooltip'), \Altum\Date::get($data->blog_post->datetime, 2)) ?></span> |

                <?php if($data->blog_posts_category): ?>
                    <a href="<?= SITE_URL . ($data->blog_posts_category->language ? \Altum\Language::$active_languages[$data->blog_posts_category->language] . '/' : null) . 'blog/category/' . $data->blog_posts_category->url ?>" class="text-muted"><?= $data->blog_posts_category->title ?></a>
                <?php endif ?>
            </p>

            <?php if($data->blog_post->image): ?>
                <img src="<?= UPLOADS_FULL_URL . 'blog/' . $data->blog_post->image ?>" class="blog-post-image img-fluid w-100 rounded mb-3" />
            <?php endif ?>

            <?= nl2br($data->blog_post->content) ?>

            <div class="mt-4">
                <small class="text-muted"><?= sprintf(l('global.last_datetime_tooltip'), \Altum\Date::get($data->blog_post->last_datetime, 2)) ?></small>
            </div>

            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2426922403667677"
                 crossorigin="anonymous"></script>
            <!-- Allinks footer -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-2426922403667677"
                 data-ad-slot="5503957551"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

        </div>
    </div>

    <?php require THEME_PATH . 'views/partials/ads_footer.php' ?>

</div>
