<?php

$folders = [ 'B', 'b', 'K', 'k', 'N', 'n', 'P', 'p', 'Q', 'q', 'R', 'r', 'empty' ];

foreach ($folders as $folder) {
    foreach (glob("testing/$folder/*.jpg") as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}

foreach ($folders as $folder) {
    foreach (glob("training/$folder/*.jpg") as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}
