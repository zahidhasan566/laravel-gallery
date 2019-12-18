{{$photo_id}}
{{$album_id}}


<html>
<head>
    <title>Make Price Range Slider using JQuery with PHP Ajax</title>

    <script src="{{asset('jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap.min.js')}}"></script>
    <script src="{{asset('croppie.js')}}"></script>
    <script src="{{asset('crop.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css.map" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.js" />
</head>
<body>
<div class="container">
    <br />
    <h3 align="center">Image Croping </h3>
    <br />
    <br />
    <div class="panel panel-default">
        <div class="panel-heading">Select Profile Image</div>
        <div class="panel-body" align="center">


            <input type="file" name="upload_image" id="upload_image" accept="image/*" />
            <br />
            <div id="uploaded_image"></div>
        </div>
    </div>
</div>
</body>
</html>

<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload & Crop Image</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <div id="image_demo" style="width:350px; margin-top:30px"></div>
                    </div>
                    <div class="col-md-4" style="padding-top:30px;">
                        <br />
                        <br />
                        <br/>
                        <button class="btn btn-success crop_image">Crop & Upload Image</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

