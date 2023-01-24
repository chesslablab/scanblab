<?php

include __DIR__ . '/vendor/autoload.php';

$max = (int) $argv[1];

$pieces = [ 'B', 'b', 'K', 'k', 'N', 'n', 'P', 'p', 'Q', 'q', 'R', 'r', ];

$count = 0;
if (($handle = fopen("roboflow/training/_annotations.csv", "r")) !== false) {
    while (($row = fgetcsv($handle, 1000, ",")) !== false) {
        $count++;
        if ($count <= $max + 1) {
            if ($count == 1) {
                continue;
            }
            if (in_array($row['3'], $pieces)) {
                $image = imagecreatefromjpeg("roboflow/training/{$row[0]}");
                $tile = imagecrop($image, [
                    'x' => $row['4'] - 1,
                    'y' => $row['5'] - 1,
                    'width' => 52,
                    'height' => 52,
                ]);
                if ($tile !== false) {
                    imagejpeg($tile, "training/{$row['3']}/".sprintf("%05d", $count).'.jpg');
                    imagedestroy($tile);
                }
                imagedestroy($image);
            }
        }
    }
    fclose($handle);
}
