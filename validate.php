<?php

include __DIR__ . '/vendor/autoload.php';

use Rubix\ML\Loggers\Screen;
use Rubix\ML\Datasets\Labeled;
use Rubix\ML\PersistentModel;
use Rubix\ML\Persisters\Filesystem;
use Rubix\ML\CrossValidation\Reports\AggregateReport;
use Rubix\ML\CrossValidation\Reports\ConfusionMatrix;
use Rubix\ML\CrossValidation\Reports\MulticlassBreakdown;

ini_set('memory_limit', '-1');

$logger = new Screen();

$logger->info('Loading data into memory');

$samples = $labels = [];

$folders = [ 'B', 'b', 'K', 'k', 'N', 'n', 'P', 'p', 'Q', 'q', 'R', 'r', 'empty', ];

foreach ($folders as $folder) {
    foreach (glob("testing/$folder/*.jpg") as $file) {
        $samples[] = [imagecreatefromjpeg($file)];
        $labels[] = $folder;
    }
}

$dataset = new Labeled($samples, $labels);

$estimator = PersistentModel::load(new Filesystem('piece.rbx'));

$logger->info('Making predictions');

$predictions = $estimator->predict($dataset);

$report = new AggregateReport([
    'breakdown' => new MulticlassBreakdown(),
    'matrix' => new ConfusionMatrix(),
]);

$results = $report->generate($predictions, $dataset->labels());

echo $results;

$results->toJSON()->saveTo(new Filesystem('report.json'));

$logger->info('Report saved to report.json');
