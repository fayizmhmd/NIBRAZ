<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->


<head>
    <meta charset="utf-8">
    <meta name="description" content="GETAFIXMD | Dashboard">
    <meta name="author" content="Howin Cloud">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @php
        $path = asset('/');
    @endphp
    {{-- <link rel="shortcut icon" href="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"> --}}
    <link rel="icon" type="image/x-icon" href="{{ $path }}NibrazImages/NIBRAZ-fav.png">
    <link rel="stylesheet" href="{{ $path }}assets/css/dashlitee5ca.css">
    <link id="skin-default" rel="stylesheet" href="{{ $path }}assets/css/themee5ca.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


</head>
<!--end::Head-->
<!--begin::Body-->

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root user-select-none">
        <div class="nk-main">
            @include('admin.includes.sidebar')

            <div class="nk-wrap ">
                @include('admin.includes.header')
                <div class="nk-content ">
                    {{-- @include('admin.includes.toastr') --}}
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            @yield('content')
                        </div>
                    </div>
                </div>
                @include('admin.includes.footer')
            </div>
        </div>
    </div>
    <script src="{{ $path }}assets/toastr/toastr.js"></script>
    <script src="{{ $path }}assets/js/bundlee5ca.js"></script>
    <script src="{{ $path }}assets/js/scriptse5ca.js"></script>
    {{-- <script src="{{ $path }}assets/js/demo-settingse5ca.js"></script> --}}
    {{-- <script src="{{ $path }}assets/js/charts/chart-ecommercee5ca.js"></script> --}}

    <script>
        var path = "{{ $path }}";
    </script>
    <script src="{{ $path }}assets/plugins/custom/tinymce/tinymce.bundle.js"></script>
    <script src="https://cdn.tiny.cloud/1/xglc7avqzi80ti3arayewa85tmhzedfpl4iioptnx4dzgxvr/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
    <script>
        tinymce.init({
            selector: '.myeditorinstance',
            plugins: ' autolink link image paste imagetools lists  searchreplace   code  autolink lists  media   preview table   help',
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons',
            toolbar_mode: 'floating',
            menu: {
                favs: {
                    title: 'My Favorites',
                    items: 'code visualaid | searchreplace | emoticons'
                }
            },
            menubar: 'favs file edit view insert view format tools table help',
            // image_uploadtab: true,
            images_file_types: 'jpg,svg,webp,png',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            /* enable title field in the Image dialog*/
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,
            /*
              URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
              images_upload_url: 'postAcceptor.php',
              here we add custom filepicker only to Image dialog
            */
            file_picker_types: 'image',
            /* and here's our custom image picker*/
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                /*
                  Note: In modern browsers input[type="file"] is functional without
                  even adding it to the DOM, but that might not be the case in some older
                  or quirky browsers like IE, so you might want to add it to the DOM
                  just in case, and visually hide it. And do not forget do remove it
                  once you do not need it anymore.
                */

                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function() {
                        /*
                          Note: Now we need to register the blob in TinyMCEs image blob
                          registry. In the next release this part hopefully won't be
                          necessary, as we are looking to handle it internally.
                        */
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>

    {{-- <script src="{{ asset('path/to/jquery/jquery.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('path/to/summernote/summernote-bs4.min.js') }}"></script> --}}


    {{-- <script>
        tinymce.init({
            selector: '#editor', // CSS selector for the textarea
            plugins: 'lists link image code',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
            height: 400 // Customize height
        });
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,

                codeviewFilter: false, // Disable code view filtering
                codeviewIframeFilter: true, // Enable iframe filtering
                styleTags: [
                    'p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'ul', 'ol', 'li' // Include ul, ol, li
                ]
            });
        });
    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
</body>

</html>
