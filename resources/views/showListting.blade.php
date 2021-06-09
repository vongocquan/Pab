<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listting</title>
    <link rel="stylesheet" href="/assets/css/vendor.bundlef86e.css?ver=192">
    <link rel="stylesheet" href="/assets/css/style-azaleaf86e.css?ver=192" id="changeTheme">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="/assets/css/themef86e.css?ver=192">

    <link rel="stylesheet" href="/assets/css/animation.css">

    <link rel="stylesheet" href="/assets/css/countdown.css">
    <!-- <link rel="stylesheet" href="../../unpkg.com/swiper%406.6.2/swiper-bundle.min.css"> -->

    <link rel="stylesheet" href="/assets/animation/spint.css">

    <script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                <form action="{{ route('listting.save') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-2">
                        <label for="formGroupExampleInput0" class="form-label text-black-50">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control input" id="formGroupExampleInput0"  name="project_name" placeholder="Project title" value="{{ old('project_name') }}">
                        <p style="color: red">@error('project_name'){{ $message }}@enderror</p>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput1" class="form-label text-black-50">Category <span class="text-danger">*</span></label>
                        <select class="form-control input" id="formGroupExampleInput1" name="id_category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{ $category->name_category }}</option>
                        @endforeach
                        </select>
                        <p style="color: red">@error('category'){{ $message }}@enderror</p>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label text-black-50">Short Introduction <span class="text-danger">*</span></label>
                        <textarea name="introduction" rows="4" type="text" class="form-control input" id="formGroupExampleInput3" maxlength="256" placeholder="Short Introduction (Limit 256 Character)" ></textarea>
                        <p style="color: red">@error('introduction'){{ $message }}@enderror</p>
                    </div>
        
                    <div class="mb-3">
                        <label for="formGroupExampleInput5" class="form-label text-black-50">Logo</label>
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <div class="file-upload">
                            <a class="file-upload-btn" onclick="$('.file-upload-input').trigger( 'click' )">Add Logo</a>

                            <div class="image-upload-wrap">
                                <input class="file-upload-input" id="formGroupExampleInput5" type='file' onchange="readURL(this)" name="logo"/>
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
                        <p style="color: red">@error('logo'){{ $message }}@enderror</p>

                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput6" class="form-label text-black-50">Token </label>
                        <input name="token" type="text" class="form-control input" id="formGroupExampleInput6"  title="" placeholder="Token">
                        <p style="color: red">@error('token'){{ $message }}@enderror</p>

                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput6" class="form-label text-black-50">Website </label>
                        <input name="project_web" type="text" class="form-control input" id="formGroupExampleInput6"  title="" placeholder="https://...">
                        <p style="color: red">@error('project_web'){{ $message }}@enderror</p>

                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput7" class="form-label text-black-50">Facebook </label>
                        <input name="link_fb" type="text" class="form-control input" id="formGroupExampleInput7"  title="" placeholder="Facebook">
                        <p style="color: red">@error('link_fb'){{ $message }}@enderror</p>

                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput8" class="form-label text-black-50">Twitter </label>
                        <input name="link_tw" type="text" class="form-control input" id="formGroupExampleInput8"  title="" placeholder="Twitter">
                        <p style="color: red">@error('link_tw'){{ $message }}@enderror</p>

                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput9" class="form-label text-black-50">Youtube </label>
                        <input name="link_yt" type="text" class="form-control input" id="formGroupExampleInput9"  title="" placeholder="Youtube">
                        <p style="color: red">@error('link_yt'){{ $message }}@enderror</p>

                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput11" class="form-label text-black-50">Github </label>
                        <input name="link_gh" type="text" class="form-control input" id="formGroupExampleInput11"  title="" placeholder="https://github.com/...">
                        <p style="color: red">@error('link_gh'){{ $message }}@enderror</p>

                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput11" class="form-label text-black-50">Email </label>
                        <input name="email" type="text" class="form-control input" id="formGroupExampleInput11"  title="" placeholder="abc@abc.abc">
                        <p style="color: red">@error('email'){{ $message }}@enderror</p>

                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput9" class="form-label text-black-50">Telegram </label>
                        <input name="ytele" type="text" class="form-control input" id="formGroupExampleInput9"  title="" placeholder="Telegram">
                        <p style="color: red">@error('ytele'){{ $message }}@enderror</p>

                    </div>
                    <div class="mt-5 mb-5">
                        <button style="background: rgba(0,2,255,0.71); width: 100%; border: none" type="submit" >Continue</button>
                    </div>
                
                </form>
            </div>
        </div>
    </div>
</body>
<style>
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