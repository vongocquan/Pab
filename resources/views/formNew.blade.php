<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/vendor.bundlef86e.css?ver=192">
    <link rel="stylesheet" href="/assets/css/style-azaleaf86e.css?ver=192" id="changeTheme">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="/assets/css/themef86e.css?ver=192">

    <link rel="stylesheet" href="/assets/css/animation.css">

    <link rel="stylesheet" href="/assets/css/countdown.css">
    <!-- <link rel="stylesheet" href="../../unpkg.com/swiper%406.6.2/swiper-bundle.min.css"> -->

    <link rel="stylesheet" href="/assets/animation/spint.css">

    <script src="/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript' src='/assets/js/cota.js'></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165691202-2"></script>
</head>
<body>
<div class="row">
        <div class="container" style="box-shadow: 0 0 10px 10px rgba(32,21,31,0.52)">
            <div class=" text-center">
                <h1 style="font-family: Roboto; color: rgba(58,50,62,0.8)" class="mt-5 mb-5">Submit Project</h1>
            </div>
            <div class="container">
                <form action="{{ route('save.new') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-2">
                        <label for="formGroupExampleInput0" class="form-label text-black-50">Theme <span class="text-danger">*</span></label>
                        <input type="text" class="form-control input" id="formGroupExampleInput0"  name="theme" placeholder="Theme" value="{{ old('theme') }}">
                        <p style="color: red">@error('theme'){{ $message }}@enderror</p>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput5" class="form-label text-black-50">Image</label>
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <div class="file-upload">
                            <a class="file-upload-btn" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</a>

                            <div class="image-upload-wrap">
                                <input class="file-upload-input" id="formGroupExampleInput5" type='file' onchange="readURL(this)" name="image"/>
                                <div class="drag-text">
                                    <h3>Drag and drop a file or select add Image</h3>
                                </div>
                            </div>
                            <div class="file-upload-content">
                                <img class="file-upload-image" src="#" alt="your image" />
                                <div class="image-title-wrap">
                                    <a onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></a>
                                </div>
                            </div>
                        </div>
                        <p style="color: red">@error('image'){{ $message }}@enderror</p>

                    </div>
                    <div class="mb-3 mt-2">
                        <label for="formGroupExampleInput0" class="form-label text-black-50">Connect <span class="text-danger">*</span></label>
                        <input type="text" class="form-control input" id="formGroupExampleInput0"  name="connect" placeholder="Connect" value="{{ old('connect') }}">
                        <p style="color: red">@error('connect'){{ $message }}@enderror</p>
                    </div>
                    <div class="mt-5 mb-5">
                        <button style="background: rgba(0,2,255,0.71); width: 100%; border: none" type="submit" >Submit</button>
                    </div>
     
                </form>
            </div>
        </div>
</div>
<<style>
    .file-upload {
        background-color: #ffffff;
        width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #1FB264;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #15824B;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #1AA059;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 4px dashed #1FB264;
        position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: #1FB264;
        border: 4px dashed #ffffff;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #15824B;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 200px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }
</style>
<script src="assets/js/jquery.bundlef86e.js?ver=192"></script>
<script src="assets/js/scriptsf86e.js?ver=192"></script>
<script src="assets/js/chartsf86e.js?ver=192"></script>
<!-- <script src="assets/js/particles.min.js"></script> -->
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>
</html>