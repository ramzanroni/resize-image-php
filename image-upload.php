<?php

if (isset($_POST['data'])) {
    $images = json_decode($_POST['data']);
    foreach ($images as $image) {

        // extract image data from base64 data string
        $pattern = '/data:image\/(.+);base64,(.*)/';
        preg_match($pattern, $image, $matches);

        // image file extension
        $imageExtension = $matches[1];

        // base64-encoded image data
        echo $encodedImageData = $matches[2];
        exit;
        // decode base64-encoded image data
        $decodedImageData = base64_decode($encodedImageData);
        echo '<img src="' . $decodedImageData . '">';
        exit;
        // save image data as file
        $test = file_put_contents("/images.{$imageExtension}", $decodedImageData);
    }
}
