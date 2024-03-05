<?php defined('ALTUMCODE') || die() ?>

<?php 

$pageviews = json_decode($data->links_chart["pageviews"]);
$total_pageviews = 0;

foreach ($pageviews as $value_total_pageviews) {
    $total_pageviews += $value_total_pageviews;
}

$visitors = json_decode($data->links_chart["visitors"]);
$total_visitors = 0;

foreach ($visitors as $value_total_visitors) {
    $total_visitors += $value_total_visitors;
}

?>

<div class="container content-dashboard">
    <?= \Altum\Alerts::output_alerts() ?>

    <div class="mb-6">
        <div class="row justify-content-between">
            <?php if(settings()->links->biolinks_is_enabled): ?>
            <div class="col-12 col-sm-6 col-xl-4 mb-3">
                <div class="card h-100 position-relative">
                    <div class="card-body d-flex">
                        <div>
                            <div class="card border-0 bg-primary-100 mr-3 position-static">
                                <div class="p-3 d-flex align-items-center justify-content-between">
                                    <a href="<?= url('links?type=biolink') ?>" class="stretched-link text-primary-600">
                                        <i class="fa fa-fw fa-link fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card-title h4 m-0"><?= nr($data->biolinks_total) ?></div>
                            <?php if (($data->biolinks_total) > 1) : ?>
                                <span class="text-muted">Pages créées</span>
                            <?php else : ?>
                                <span class="text-muted">Page créée</span>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif ?>

            <div class="col-12 col-sm-6 col-xl-4 mb-3">
                <div class="card h-100 position-relative">
                    <div class="card-body d-flex">
                        <div>
                            <div class="card border-0 bg-primary-100 mr-3 position-static">
                                <div class="p-3 d-flex align-items-center justify-content-between">
                                    <a href="<?= url('links?type=biolink') ?>" class="stretched-link text-primary-600">
                                        <i class="fa fa-fw fa-chart-line fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card-title h4 m-0"><?= $total_pageviews ?></div>
                            <?php if (($total_pageviews) > 1) : ?>
                                <span class="text-muted">Pages vues (sur 30 jours)</span>
                            <?php else : ?>
                                <span class="text-muted">Page vue</span>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-4 mb-3">
                <div class="card h-100 position-relative">
                    <div class="card-body d-flex">
                        <div>
                            <div class="card border-0 bg-primary-100 mr-3 position-static">
                                <div class="p-3 d-flex align-items-center justify-content-between">
                                    <a href="<?= url('links?type=biolink') ?>" class="stretched-link text-primary-600">
                                        <i class="fa fa-fw fa-users fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card-title h4 m-0"><?= $total_visitors ?></div>
                            <?php if (($total_visitors) > 1) : ?>
                                <span class="text-muted">Visiteurs uniques (sur 30 jours)</span>
                            <?php else : ?>
                                <span class="text-muted">Visiteur unique</span>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php if($data->links_chart): ?>
            <div class="card mt-4">
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="clicks_chart"></canvas>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </div>

    <?= $this->views['links_content'] ?>
</div>

<?php ob_start() ?>
<script src="<?= ASSETS_FULL_URL . 'js/libraries/Chart.bundle.min.js' ?>"></script>
<script src="<?= ASSETS_FULL_URL . 'js/chartjs_defaults.js' ?>"></script>

<script>
    if(document.getElementById('clicks_chart')) {
        let clicks_chart = document.getElementById('clicks_chart').getContext('2d');

        let gradient = clicks_chart.createLinearGradient(0, 0, 0, 250);
        gradient.addColorStop(0, 'rgba(41, 128, 185, 0.6)');
        gradient.addColorStop(1, 'rgba(41, 128, 185, 0.05)');

        let gradient_white = clicks_chart.createLinearGradient(0, 0, 0, 250);
        gradient_white.addColorStop(0, 'rgba(142,68,173,0.6)');
        gradient_white.addColorStop(1, 'rgba(142,68,173, 0.05)');

        new Chart(clicks_chart, {
            type: 'line',
            data: {
                labels: <?= $data->links_chart['labels'] ?? '[]' ?>,
                datasets: [
                    {
                        label: <?= json_encode(l('link.statistics.pageviews')) ?>,
                        data: <?= $data->links_chart['pageviews'] ?? '[]' ?>,
                        backgroundColor: gradient,
                        borderColor: '#2980b9',
                        fill: true
                    },
                    {
                        label: <?= json_encode(l('link.statistics.visitors')) ?>,
                        data: <?= $data->links_chart['visitors'] ?? '[]' ?>,
                        backgroundColor: gradient_white,
                        borderColor: '#8e44ad',
                        fill: true
                    }
                ]
            },
            options: chart_options
        });
    }
</script>
<?php \Altum\Event::add_content(ob_get_clean(), 'javascript') ?>

