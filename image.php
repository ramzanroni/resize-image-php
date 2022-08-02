<!DOCTYPE html>
<html>

<head>
    <title>Resize</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- Font Awesome Css -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="css/bootstrap-select.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="css/app_style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <style>
        body {
            margin: 0px;
            background: #333;
        }

        .image-upload-one {
            grid-area: img-u-one;
            display: flex;
            justify-content: center;
        }

        .image-upload-two {
            grid-area: img-u-two;
            display: flex;
            justify-content: center;
        }

        .image-upload-three {
            grid-area: img-u-three;
            display: flex;
            justify-content: center;
        }

        .image-upload-four {
            grid-area: img-u-four;
            display: flex;
            justify-content: center;
        }

        .image-upload-five {
            grid-area: img-u-five;
            display: flex;
            justify-content: center;
        }

        .image-upload-six {
            grid-area: img-u-six;
            display: flex;
            justify-content: center;
        }

        .image-upload-container {
            display: grid;
            grid-template-areas: 'img-u-one img-u-two img-u-three img-u-four img-u-five img-u-six';
        }

        .center {
            display: inline;
            margin: 3px;
        }

        .form-input {
            width: 100px;
            padding: 3px;
            background: #fff;
            border: 2px dashed dodgerblue;
        }

        .form-input input {
            display: none;
        }

        .form-input label {
            display: block;
            width: 100px;
            height: auto;
            max-height: 100px;
            background: #333;
            border-radius: 10px;
            cursor: pointer;
        }

        .form-input img {
            width: 89px;
            height: 102px;
            margin: 2px;
            /* opacity: .4; */
        }

        .imgRemove {
            position: relative;
            bottom: 114px;
            left: 59%;
            background-color: transparent;
            border: none;
            font-size: 34px;
        }

        .imgRemove::after {
            content: ' \21BA';
            color: #fff;
            font-weight: 900;
            border-radius: 8px;
            cursor: pointer;
        }

        .small {
            color: #fff;
        }

        @media only screen and (max-width: 700px) {
            .image-upload-container {
                grid-template-areas: 'img-u-one img-u-two img-u-three'
                    'img-u-four img-u-five img-u-six';
            }
        }
    </style>
</head>

<body>
    <!-- Grid -->
    <div class="w3-row w3-padding w3-border">
        <!-- Blog entries -->
        <div class="w3-col l12 s12">
            <!-- Blog entry -->
            <div class="w3-container w3-white w3-margin w3-padding-large all-content-wrapper">
                <section class="container">
                    <div class="form-group custom-input-space has-feedback">
                        <div class="page-heading">
                            <h3 class="post-title">Upload and Resize an Image</h3>
                        </div>
                        <div class="page-body clearfix">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Image Upload and Resize it:</div>
                                        <div class="panel-body">
                                            <form action="" method="post" enctype="multipart/form-data">

                                                <h3 class="text-center">Upload Images </h3>


                                                <div class="image-upload-container">
                                                    <div class="image-upload-one">
                                                        <div class="center">
                                                            <div class="form-input">
                                                                <label for="file-ip-1">
                                                                    <img id="file-ip-1-preview" src="uploads/default.png">
                                                                    <button type="button" class="imgRemove" onclick="myImgRemove(1)"></button>
                                                                </label>
                                                                <input type="file" name="img_one" id="file-ip-1" accept="image/*" onchange="showPreview(event, 1);">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="image-upload-two">
                                                        <div class="center">
                                                            <div class="form-input">
                                                                <label for="file-ip-2">
                                                                    <img id="file-ip-2-preview" src="uploads/default.png">
                                                                    <button type="button" class="imgRemove" onclick="myImgRemove(2)"></button>
                                                                </label>
                                                                <input type="file" name="img_two" id="file-ip-2" accept="image/*" onchange="showPreview(event, 2);">
                                                            </div>
                                                            <small class="small">Use the &#8634; icon to reset the image</small>
                                                        </div>
                                                    </div>
                                                    <div class="image-upload-three">
                                                        <div class="center">
                                                            <div class="form-input">
                                                                <label for="file-ip-3">
                                                                    <img id="file-ip-3-preview" src="uploads/default.png">
                                                                    <button type="button" class="imgRemove" onclick="myImgRemove(3)"></button>
                                                                </label>
                                                                <input type="file" name="img_three" id="file-ip-3" accept="image/*" onchange="showPreview(event, 3);">
                                                            </div>
                                                            <small class="small">Use the &#8634; icon to reset the image</small>
                                                        </div>
                                                    </div>
                                                    <div class="image-upload-four">
                                                        <div class="center">
                                                            <div class="form-input">
                                                                <label for="file-ip-4">
                                                                    <img id="file-ip-4-preview" src="uploads/default.png">
                                                                    <button type="button" class="imgRemove" onclick="myImgRemove(4)"></button>
                                                                </label>
                                                                <input type="file" name="img_four" id="file-ip-4" accept="image/*" onchange="showPreview(event, 4);">
                                                            </div>
                                                            <small class="small">Use the &#8634; icon to reset the image</small>
                                                        </div>
                                                    </div>
                                                    <div class="image-upload-five">
                                                        <div class="center">
                                                            <div class="form-input">
                                                                <label for="file-ip-5">
                                                                    <img id="file-ip-5-preview" src="uploads/default.png">
                                                                    <button type="button" class="imgRemove" onclick="myImgRemove(5)"></button>
                                                                </label>
                                                                <input type="file" name="img_five" id="file-ip-5" accept="image/*" onchange="showPreview(event, 5);">
                                                            </div>
                                                            <small class="small">Use the &#8634; icon to reset the image</small>
                                                        </div>
                                                    </div>
                                                    <div class="image-upload-six">
                                                        <div class="center">
                                                            <div class="form-input">
                                                                <label for="file-ip-6">
                                                                    <img id="file-ip-6-preview" src="uploads/default.png">
                                                                    <button type="button" class="imgRemove" onclick="myImgRemove(6)"></button>
                                                                </label>
                                                                <input type="file" name="img_six" id="file-ip-6" accept="image/*" onchange="showPreview(event, 6);">
                                                            </div>
                                                            <small class="small">Use the &#8634; icon to reset the image</small>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div style="text-align: center;">
                                            <script id="mNCC" language="javascript">
                                                medianet_width = "728";
                                                medianet_height = "90";
                                                medianet_crid = "655540672";
                                                medianet_versionId = "3111299";
                                            </script>
                                        </div>
                                        <input type="submit" name="form_submit" class="btn btn-primary" value="Submit" style="
                                    margin-top: 25px;
                                    width: 100%;
                                    background-color: #1d91d2;
                                    " />
                                        </form>
                                        <?php
                                        function resizeImage($resourceType, $image_width, $image_height, $resizeWidth, $resizeHeight)
                                        {
                                            // $resizeWidth = 100;
                                            // $resizeHeight = 100;
                                            $imageLayer = imagecreatetruecolor($resizeWidth, $resizeHeight);
                                            imagecopyresampled($imageLayer, $resourceType, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $image_width, $image_height);
                                            return $imageLayer;
                                        }

                                        if (isset($_POST["form_submit"])) {
                                            $imgArr = array();
                                            $img_1 = $_FILES['img_one']['tmp_name'];
                                            $imgName_1 = $_FILES['img_one']['name'];

                                            $img_2 = $_FILES['img_two']['tmp_name'];
                                            $imgName_2 = $_FILES['img_two']['name'];

                                            $img_3 = $_FILES['img_three']['tmp_name'];
                                            $imgName_3 = $_FILES['img_three']['name'];

                                            $img_4 = $_FILES['img_four']['tmp_name'];
                                            $imgName_4 = $_FILES['img_four']['name'];

                                            $img_5 = $_FILES['img_five']['tmp_name'];
                                            $imgName_5 = $_FILES['img_five']['name'];

                                            $img_6 = $_FILES['img_six']['tmp_name'];
                                            $imgName_6 = $_FILES['img_six']['name'];

                                            if ($img_1 != '') {
                                                $imgArr[] = array('tmpName' =>  $img_1, 'name' => $imgName_1);
                                            }
                                            if ($img_2 != '') {
                                                $imgArr[] = array('tmpName' =>  $img_2, 'name' => $imgName_2);
                                            }
                                            if ($img_3 != '') {
                                                $imgArr[] = array('tmpName' =>  $img_3, 'name' => $imgName_3);
                                            }
                                            if ($img_4 != '') {
                                                $imgArr[] = array('tmpName' =>  $img_4, 'name' => $imgName_4);
                                            }
                                            if ($img_5 != '') {
                                                $imgArr[] = array('tmpName' =>  $img_5, 'name' => $imgName_5);
                                            }
                                            if ($img_6 != '') {
                                                $imgArr[] = array('tmpName' =>  $img_6, 'name' => $imgName_6);
                                            }

                                            $imageProcess = 0;
                                            $i = 1;
                                            foreach ($imgArr as $image) {
                                                $new_width = 150;
                                                $imageTmp = $image['tmpName'];
                                                $imageName = $image['name'];
                                                if ($new_width == 150) {
                                                    $fileName = $imageTmp;
                                                    $sourceProperties = getimagesize($fileName);
                                                    $resizeFileName = time() . $i;
                                                    $uploadPath = "thump/";
                                                    $fileExt = pathinfo($imageName, PATHINFO_EXTENSION);
                                                    $uploadImageType = $sourceProperties[2];
                                                    $sourceImageWidth = $sourceProperties[0];
                                                    $sourceImageHeight = $sourceProperties[1];
                                                    $new_height = ($sourceImageHeight / $sourceImageWidth) * $new_width;
                                                    switch ($uploadImageType) {
                                                        case IMAGETYPE_JPEG:
                                                            $resourceType = imagecreatefromjpeg($fileName);
                                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                                            imagejpeg($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
                                                            break;

                                                        case IMAGETYPE_GIF:
                                                            $resourceType = imagecreatefromgif($fileName);
                                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                                            imagegif($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
                                                            break;

                                                        case IMAGETYPE_PNG:
                                                            $resourceType = imagecreatefrompng($fileName);
                                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                                            imagepng($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
                                                            break;
                                                        default:
                                                            $imageProcess = 0;
                                                            break;
                                                    }
                                                }
                                                $new_width = 512;
                                                if ($new_width == 512) {
                                                    $fileName = $imageTmp;
                                                    $sourceProperties = getimagesize($fileName);
                                                    $resizeFileName = time() . ++$i;
                                                    $uploadPath = "cover/";
                                                    $fileExt = pathinfo($imageName, PATHINFO_EXTENSION);
                                                    $uploadImageType = $sourceProperties[2];
                                                    $sourceImageWidth = $sourceProperties[0];
                                                    $sourceImageHeight = $sourceProperties[1];
                                                    $new_height = ($sourceImageHeight / $sourceImageWidth) * $new_width;
                                                    switch ($uploadImageType) {
                                                        case IMAGETYPE_JPEG:
                                                            $resourceType = imagecreatefromjpeg($fileName);
                                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                                            imagejpeg($imageLayer, $uploadPath . "cover_" . $resizeFileName . '.' . $fileExt);
                                                            break;

                                                        case IMAGETYPE_GIF:
                                                            $resourceType = imagecreatefromgif($fileName);
                                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                                            imagegif($imageLayer, $uploadPath . "cover_" . $resizeFileName . '.' . $fileExt);
                                                            break;

                                                        case IMAGETYPE_PNG:
                                                            $resourceType = imagecreatefrompng($fileName);
                                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                                            imagepng($imageLayer, $uploadPath . "cover_" . $resizeFileName . '.' . $fileExt);
                                                            break;
                                                        default:
                                                            $imageProcess = 0;
                                                            break;
                                                    }
                                                }
                                                $imageProcess = 1;
                                            }
                                            if ($imageProcess == 1) {
                                        ?>

                                                <div class="alert icon-alert with-arrow alert-success form-alter" role="alert">
                                                    <i class="fa fa-fw fa-check-circle"></i>
                                                    <strong> Success !</strong> <span class="success-message">Image Resize Successfully </span>
                                                </div>
                                                <hr>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="alert icon-alert with-arrow alert-danger form-alter" role="alert">
                                                    <i class="fa fa-fw fa-times-circle"></i>
                                                    <strong> Note !</strong> <span class="warning-message">Invalid Image </span>
                                                </div>
                                        <?php
                                            }
                                            $imageProcess = 0;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
        <script>
            var number = 1;
            do {
                function showPreview(event, number) {
                    if (event.target.files.length > 0) {
                        let src = URL.createObjectURL(event.target.files[0]);
                        let preview = document.getElementById("file-ip-" + number + "-preview");
                        preview.src = src;
                        preview.style.display = "block";
                    }
                }

                function myImgRemove(number) {
                    document.getElementById("file-ip-" + number + "-preview").src = "uploads/default.png";
                    document.getElementById("file-ip-" + number).value = null;
                }
                number++;
            }
            while (number < 5);
        </script>
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap Core Js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Bootstrap Select Js -->
        <script src="js/bootstrap-select.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
</body>

</html>