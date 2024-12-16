@extends("layouts.dashboard")
@section('dashboard')
<div class="container">
    <div class="inner-page">
        <h2>Create Article</h2>
        <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-md-4">
                    <label for="cover"><b>Cover Photo</b></label>
                    <div class="ms-2 card p-3 border-dark bg-transparent shadow" style="border-style:dashed;">
                        <img id="outCard" src="/storage/{{$article->path}}" style="width: 100%;height:30vh; object-fit:contain;" />
                        <input type="file" accept="image/*" name="cover" id="cover"
                            style="display: none;" class="form-control"
                            onchange="loadcoverFile(event)">
                        <div class="pt-2" id="desc">
                            <div class="text-center" style="font-size: xxx-large; font-weight:bolder;">
                                <i class="bi bi-upload"></i>
                            </div>
                            <div class="text-center">
                                <label for="cover" class="btn btn-success text-white"
                                    title="Upload new profile image">Browse</label>
                            </div>
                            <div class="text-center prim">*File supported .png .jpg .webp</div>
                        </div>
                        <script>
                            var loadcoverFile = function(event) {
                                var image = document.getElementById('outCard');
                                image.src = URL.createObjectURL(event.target.files[0]);
                                document.getElementById('cover').value == image.src;

                            };
                        </script>
                        @error('cover')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-8 mb-2">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="title" name="title" placeholder=" " required>
                        <label for="title">Title</label>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <textarea id="editor" name="content" rows="10"></textarea>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/super-build/ckeditor.js"></script>
<script>
    CKEDITOR.ClassicEditor
        .create(document.getElementById("editor"), {

            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },

            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
            },
            htmlEmbed: {
                showPreviews: true
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
            removePlugins: [
                'CKBox',
                'CKFinder',
                'EasyImage',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType'
            ]
        }).then(editor => {
            editor.editing.view.change(writer => {
                writer.setStyle('min-height', '60vh', editor.editing.view.document.getRoot());
            });
        });
</script>
@endsection