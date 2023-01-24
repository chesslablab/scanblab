<?php

$pieces = [ 'B', 'b', 'K', 'k', 'N', 'n', 'P', 'p', 'Q', 'q', 'R', 'r', ];

foreach ($pieces as $piece) {
    foreach (glob("testing/$piece/*.jpg") as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}

foreach ($pieces as $piece) {
    foreach (glob("training/$piece/*.jpg") as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}
