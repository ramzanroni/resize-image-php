<!DOCTYPE html>
<html>

<head>
    <title>Resize</title>
    <link rel="stylesheet" href="csss.css">
    <!-- Bootstrap Core Css -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- Font Awesome Css -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="css/bootstrap-select.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="css/app_style.css" rel="stylesheet" />
    <script data-require="jquery@2.2.4" data-semver="2.2.4" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <!-- <link rel="stylesheet" type="text/css" href="./styles.css" /> -->
    <style>
        form .post-image-collection {
            padding: 20px 0px;
            overflow: hidden;
        }

        form .post-image {
            position: relative;
            float: left;
            height: 152px;
            width: 170px;
            background: #f2f2f2;
            border: 1px dashed #ccc;
            padding: 0;
            border-radius: 4px;
            text-align: center;
            cursor: pointer;
        }

        .mrm {
            margin-right: 20px;
        }

        .mts {
            margin-top: 10px;
        }

        form .post-image .upload-section img {
            max-width: 80px;
            max-height: 80px;
            width: auto;
            height: auto;
            vertical-align: top;
            border-radius: 3px;
            overflow: hidden;
            margin-top: 50px;
        }

        form .post-image .preview-section img {
            border-radius: 3px;
            overflow: hidden;
            margin: 0px;
        }

        form .post-image .icon-camera {
            display: none;
        }

        form .post-image input {
            display: none;
        }

        form .post-image.empty {
            position: relative;
            float: left;
            height: 130px;
            width: 130px;
            background: #f2f2f2;
            border: 1px dashed #ccc;
            padding: 0;
            border-radius: 4px;
            text-align: center;
            cursor: pointer;
            vertical-align: top;
        }

        form .post-image.empty .icon-camera {
            display: block;
            height: 100%;
            line-height: 30px;
            left: 0;
            position: absolute;
            text-align: center;
            top: 0%;
            width: 100%;
            cursor: pointer;
        }

        form .post-image.empty .icon-camera img {
            height: 60px;
            width: 60px;
        }

        form .post-image.empty input {
            cursor: pointer;
        }

        form .post-image p,
        .file_container-orange p {
            margin: 10px 0;
            margin: 1rem 0;
            text-align: center;
            font-family: "OpenSansSemiBold", sans-serif;
        }

        .uppercase {
            text-transform: uppercase;
        }

        #list {
            float: left;
        }

        .thumb {
            height: 130px;
            width: 130px;
            margin-right: 20px;
            margin-top: 10px;
        }

        .remove_img_preview {
            position: relative;
            top: -145px;
            right: -64px;
            font-size: 20px;
            padding: 2px 5px;
            border-radius: 16px;
            text-align: center;
            cursor: pointer;
            background-color: #000;
        }

        .remove_img_preview:before {
            content: "×";
            color: #fff;
            font-size: 22px;
            font-weight: bold;
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
                                                <div class="row row-images">
                                                    <label for="image">Images*</label>
                                                    <div class="column image_container">
                                                        <div class="post-image-collection">
                                                            <div class="post-image post-image-placeholder mrm mts empty">
                                                                <div class="upload-section">
                                                                    <input type="file" name="upload_image" id="Photofile1" class="upload-img" accept="image/*" />
                                                                    <label class="icon-camera" for="Photofile1">
                                                                        <img src="https://cdn.onlinewebfonts.com/svg/img_134042.png" />
                                                                    </label>
                                                                    <p class="uppercase">Photo 1</p>
                                                                </div>
                                                                <div onclick="" class="preview-section"></div>
                                                            </div>
                                                            <div class="post-image post-image-placeholder mrm mts empty">
                                                                <div class="upload-section">
                                                                    <input type="file" name="image1" id="Photofile2" class="upload-img" required accept="image/*" />
                                                                    <label class="icon-camera" for="Photofile2">
                                                                        <img src="https://cdn.onlinewebfonts.com/svg/img_134042.png" />
                                                                    </label>
                                                                    <p class="uppercase">Photo 1</p>
                                                                </div>
                                                                <div class="preview-section"></div>
                                                            </div>
                                                            <!--  <div class="post-image post-image-placeholder mrm mts empty">
                                                                <div class="upload-section">
                                                                    <input type="file" name="image1" id="Photofile3" class="upload-img" required accept="image/*" />
                                                                    <label class="icon-camera" for="Photofile3">
                                                                        <img src="https://cdn.onlinewebfonts.com/svg/img_134042.png" />
                                                                    </label>
                                                                    <p class="uppercase">Photo 1</p>
                                                                </div>
                                                                <div class="preview-section"></div>
                                                            </div>
                                                            <div class="post-image post-image-placeholder mrm mts empty">
                                                                <div class="upload-section">
                                                                    <input type="file" name="image2" id="Photofile4" class="upload-img" required accept="image/*" />
                                                                    <label class="icon-camera" for="Photofile4">
                                                                        <img src="https://cdn.onlinewebfonts.com/svg/img_134042.png" />
                                                                    </label>
                                                                    <p class="uppercase">Photo 2</p>
                                                                </div>
                                                                <div class="preview-section"></div>
                                                            </div>
                                                            <div class="post-image post-image-placeholder mrm mts empty">
                                                                <div class="upload-section">
                                                                    <input type="file" name="image3" id="Photofile5" class="upload-img" required accept="image/*" />
                                                                    <label class="icon-camera" for="Photofile5">
                                                                        <img src="https://cdn.onlinewebfonts.com/svg/img_134042.png" />
                                                                    </label>
                                                                    <p class="uppercase">Photo 3</p>
                                                                </div>
                                                                <div class="preview-section"></div>
                                                            </div> -->
                                                        </div>
                                                        <input type="submit" name="form_submit" class="btn btn-primary" value="Submit" />
                                            </form>
                                            <!-- <input type="submit" name="form_submit" value="submit"> -->
                                        </div>
                                    </div>

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
                                        $imageProcess = 0;
                                        $i = 1;
                                        // foreach ($_FILES['upload_image']['tmp_name'] as $key => $image) {
                                        $new_width = 150;
                                        // if ($new_width == 150) {
                                        $fileName = $_FILES['upload_image']['tmp_name'];
                                        print_r($fileName);
                                        echo "hello";
                                        exit;


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
        $(function() {
            var count = 0;
            $('.upload-img').on('change', function(evt) {

                var file = evt.target.files[0];
                var _this = evt.target;
                // console.log(file);
                $(this).parent('.upload-section').hide();
                var reader = new FileReader();
                reader.onload = function(e) {
                    var span = '<img class="thumb mrm mts" src="' + e.target.result + '" title="' + escape(file.name) + '"/><span class="remove_img_preview"></span>';
                    $(_this).parent('.upload-section').next().append($(span));
                };
                reader.readAsDataURL(file);
                // evt.target.value = "";
            });


            $('.preview-section').on('click', '.remove_img_preview', function() {

                // console.log(evt);
                // console.log("working");
                $(this).parent('.preview-section').prev().show();
                $(this).parent('.preview-section').remove();
            });
        });

        // function removeImg() {
        //     console.log("working");
        //     $('.preview-section').prev().show();
        //     $('.preview-section').remove();
        // }
        // var loadFile = function(event) {
        //    var image = document.getElementById('output');
        //    var imageArr = event.target.files;
        //    console.log(event.target.files);
        //    var image = '';
        //    for (let i = 0; i < imageArr.length; i++) {
        //       image += '<div class="col-md-4 p-1" style="float: none;"><img id="img_' + i + '" style="margin-top: 20px;" width="400" /></div>';
        //    }
        //    $("#output").html(image);
        //    for (let i = 0; i < imageArr.length; i++) {
        //       var imageSec = document.getElementById('img_' + i);
        //       imageSec.src = URL.createObjectURL(event.target.files[i]);
        //    }
        //    // image.src = URL.createObjectURL(event.target.files[0]);
        // };




        // function previewImages() {

        //    var preview = document.querySelector('#preview');

        //    if (this.files) {
        //       [].forEach.call(this.files, readAndPreview);
        //    }

        //    function readAndPreview(file) {

        //       // Make sure `file.name` matches our extensions criteria
        //       if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
        //          return alert(file.name + " is not an image");
        //       } // else...

        //       var reader = new FileReader();

        //       reader.addEventListener("load", function() {
        //          var image = new Image();
        //          image.height = 100;
        //          image.title = file.name;
        //          image.src = this.result;
        //          preview.appendChild(image);
        //       });

        //       reader.readAsDataURL(file);

        //    }

        // }

        // document.querySelector('#file-input').addEventListener("change", previewImages);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap Select Js -->
    <script src="js/bootstrap-select.js"></script>

</body>

</html>