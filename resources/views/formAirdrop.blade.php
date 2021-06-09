<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
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
                <form action="{{ route('save.airdrop') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-2">
                        <label for="formGroupExampleInput0" class="form-label text-black-50">Link airdrop <span class="text-danger">*</span></label>
                        <input type="text" class="form-control input" id="formGroupExampleInput0"  name="link_airdrop" placeholder="Link Airdrop" value="{{ old('link_airdrop') }}">
                        <p style="color: red">@error('link_airdrop'){{ $message }}@enderror</p>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="formGroupExampleInput0" class="form-label text-black-50">End day <span class="text-danger">*</span></label>
                        <input type="date" class="form-control input" id="formGroupExampleInput0"  name="end_day"  value="{{ old('end_day') }}">
                        <p style="color: red">@error('end_day'){{ $message }}@enderror</p>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="formGroupExampleInput0" class="form-label text-black-50">Max reward<span class="text-danger">*</span></label>
                        <input type="number" class="form-control input" id="formGroupExampleInput0" value="0" name="max_rewards"  value="{{ old('max_rewards') }}">
                        <p style="color: red">@error('max_rewards'){{ $message }}@enderror</p>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="formGroupExampleInput0" class="form-label text-black-50">Step <span class="text-danger">*</span></label>
                        <input type="text" class="form-control input" id="formGroupExampleInput0"  name="steps" placeholder="Step"  value="{{ old('steps') }}">
                        <p style="color: red">@error('steps'){{ $message }}@enderror</p>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="formGroupExampleInput0" class="form-label text-black-50">Estimated value <span class="text-danger">*</span></label>
                        <input type="number" class="form-control input" id="formGroupExampleInput0" value="0"  name="estimated_value"  value="{{ old('estimated_value') }}">
                        <p style="color: red">@error('estimated_value'){{ $message }}@enderror</p>
                    </div>
                    <div class="mt-5 mb-5">
                        <button style="background: rgba(0,2,255,0.71); width: 100%; border: none" type="submit" >Continue</button>
                    </div>
                </form>
            </div>
        </div>
</div>
<script src="/assets/js/jquery.bundlef86e.js?ver=192"></script>
<script src="/assets/js/scriptsf86e.js?ver=192"></script>
<script src="/assets/js/chartsf86e.js?ver=192"></script>
<!-- <script src="assets/js/particles.min.js"></script> -->
<script src="https://smtpjs.com/v3/smtp.js"></script>
</body>

</html>