<?php

  $images = scandir('../images/');
  $galleryFile = 'gallery.yml';
  file_put_contents($galleryFile, 'images: '."\n");

  $toSkip = ['.', '..', 'thumb'];

  foreach ($images as $imageName) {
    if (in_array($imageName, $toSkip)) {
      continue;
    }

    file_put_contents($galleryFile, '  - name: '.$imageName."\n", FILE_APPEND);
  }

 ?>
