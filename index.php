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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   <!-- <link rel="stylesheet" type="text/css" href="./styles.css" /> -->
   <style>
      .img-thumbs {
         background: #eee;
         border: 1px solid #ccc;
         border-radius: 0.25rem;
         margin: 1.5rem 0;
         padding: 0.75rem;
      }

      .img-thumbs-hidden {
         display: none;
      }

      .wrapper-thumb {
         position: relative;
         display: inline-block;
         margin: 1rem 0;
         justify-content: space-around;
      }

      .img-preview-thumb {
         background: #fff;
         border: 1px solid none;
         border-radius: 0.25rem;
         box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
         margin-right: 1rem;
         max-width: 140px;
         padding: 0.25rem;
      }

      .remove-btn {
         position: absolute;
         display: flex;
         justify-content: center;
         align-items: center;
         font-size: .7rem;
         top: -5px;
         right: 10px;
         width: 20px;
         height: 20px;
         background: white;
         border-radius: 10px;
         font-weight: bold;
         cursor: pointer;
      }

      .remove-btn:hover {
         box-shadow: 0px 0px 3px grey;
         transition: all .3s ease-in-out;
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

                                    <h3 class="text-center">Multiple Upload Images and Remove Button </h3>


                                    <div class="form-group mt-5">
                                       <label for="">Choose Images</label>
                                       <input type="file" class="form-control" name="upload_image[]" multiple id="upload-img" />
                                    </div>
                                    <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
                                    <!-- <button type="submit" class="btn btn-dark">Upload</button> -->



                                    <!-- <div class="form-group col-md-3">
                                       <label class="required">Width</label>
                                       <input type="number" name="new_width" required />
                                    </div> -->
                                    <!-- <div class="form-group col-md-3">
                                       <label class="required">Height</label>
                                       <input type="number" name="new_height" />
                                    </div> -->
                                    <!-- <div class="form-group col-md-6">
                                       <label class="required">Choose Image</label>
                                       <input id="files" type="file" name="upload_image[]" class="custom-file-input" required multiple>
                                       <div id="preview"></div> -->
                                    <!-- <label class="required">Choose Image</label>
                                       <input type="file" onchange="loadFile(event)" name="upload_image[]" multiple class="custom-file-input" required /> -->
                              </div>
                              <div id="output" class="col-md-12"></div>
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
                                 $imageProcess = 0;
                                 $i = 1;
                                 foreach ($_FILES['upload_image']['tmp_name'] as $key => $image) {
                                    $new_width = 150;
                                    if ($new_width == 150) {
                                       $fileName = $_FILES['upload_image']['tmp_name'][$key];
                                       $sourceProperties = getimagesize($fileName);
                                       $resizeFileName = time() . $i;
                                       $uploadPath = "thump/";
                                       $fileExt = pathinfo($_FILES['upload_image']['name'][$key], PATHINFO_EXTENSION);
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
                                       $fileName = $_FILES['upload_image']['tmp_name'][$key];
                                       $sourceProperties = getimagesize($fileName);
                                       $resizeFileName = time() . ++$i;
                                       $uploadPath = "cover/";
                                       $fileExt = pathinfo($_FILES['upload_image']['name'][$key], PATHINFO_EXTENSION);
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
         var imgUpload = document.getElementById('upload-img'),
            imgPreview = document.getElementById('img-preview'),
            imgUploadForm = document.getElementById('form-upload'),
            totalFiles, previewTitle, previewTitleText, img;

         imgUpload.addEventListener('change', previewImgs, true);

         function previewImgs(event) {
            totalFiles = imgUpload.files.length;

            if (!!totalFiles) {
               imgPreview.classList.remove('img-thumbs-hidden');
            }

            for (var i = 0; i < totalFiles; i++) {
               wrapper = document.createElement('div');
               wrapper.classList.add('wrapper-thumb');
               removeBtn = document.createElement("span");
               nodeRemove = document.createTextNode('x');
               removeBtn.classList.add('remove-btn');
               removeBtn.appendChild(nodeRemove);
               img = document.createElement('img');
               img.src = URL.createObjectURL(event.target.files[i]);
               img.classList.add('img-preview-thumb');
               wrapper.appendChild(img);
               wrapper.appendChild(removeBtn);
               imgPreview.appendChild(wrapper);

               $('.remove-btn').click(function() {
                  $(this).parent('.wrapper-thumb').remove();
               });

            }


         }

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
      <script src="js/jquery.min.js"></script>
      <!-- Bootstrap Core Js -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Bootstrap Select Js -->
      <script src="js/bootstrap-select.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
</body>

</html>


<img id="output" style="margin-top: 20px;" width="400" />