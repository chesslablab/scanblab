<?php

include __DIR__ . '/vendor/autoload.php';
include './init.php';

$max = (int) $argv[1];
$action = $argv[2];
$count = 0;
if (($handle = fopen("roboflow/$action/_annotations.csv", "r")) !== false) {
    $coord = [];
    while (($row = fgetcsv($handle, 1000, ",")) !== false) {
        $count++;
        if ($count <= $max + 1) {
            if ($count == 1) {
                continue;
            }
            $image = imagecreatefromjpeg("roboflow/$action/{$row[0]}");
            if (in_array($row['3'], $pieces)) {
                $coord[] = $row['4'].$row['5'].$row['6'].$row['7'];
                $tile = imagecrop($image, [
                    'x' => $row['4'] - 1,
                    'y' => $row['5'] - 1,
                    'width' => 52,
                    'height' => 52,
                ]);
                if ($tile !== false) {
                    imagejpeg($tile, "$action/{$row['3']}/".sprintf("%05d", $count).'.jpg');
                    imagedestroy($tile);
                }
            } elseif ($row['3'] === 'board') {
                $diff = array_diff($xyImploded, $coord);
                foreach ($diff as $key => $val) {
                    $tile = imagecrop($image, [
                        'x' => $xy[$key][0] - 1,
                        'y' => $xy[$key][1] - 1,
                        'width' => 52,
                        'height' => 52,
                    ]);
                    if ($tile !== false) {
                        imagejpeg($tile, "$action/1/".sprintf("%05d", $count).'.jpg');
                        imagedestroy($tile);
                    }
                }
                $coord = [];
            }
            imagedestroy($image);
        }
    }
    fclose($handle);
}
