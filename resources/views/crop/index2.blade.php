<html>
<head>
    <title>Make Price Range Slider using JQuery with PHP Ajax</title>

    <script src="{{asset('jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('cropper.js')}}"></script>
    <script src="{{asset('crop2.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('cropper.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.js">

</head>
<body>

<img src="{{ asset('storage/photos')}}/{{$album_id}}/{{$photo_id}}" style="width: 200px;" id="image">

<script>
    src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.css"
    src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.js"
    src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.css"
    src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.js"

    $(function () {
        $("#image").cropper({
            zoomable: false
        });
    });
</script>
<script src="{{asset('/js/crop2.js')}}"></script>
<style>
    .cropper-crop {
        display: none;
    }
    .cropper-bg {
        background: none;
    }
</style>
<!-- A button when clicked will save the cropped area -->
<button type="button" onclick="crop();">
    Crop
</button>
</body>
</html>

