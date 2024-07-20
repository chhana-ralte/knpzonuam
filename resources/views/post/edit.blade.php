<x-bslayout>
    <x-slot:heading>
        Post siam danglamna
    </x-slot:heading>
    
    <div class="container">
        <form method="post" action="/post/{{ $post->id }}">
            @csrf
            @method('patch')
            <x-card>
                <x-card-header>
                    Post siam danglamna.
                </x-card-header>
                <x-card-body>
                    <div class="form-group row">
                        <div class="col">
                            <label for=subject>Thupui</label>
                            <input type="text" class="form-control" name="subject" placeholder="Thupui" required value="{{ $post->subject }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <label for="content" >Thusei</label>
                            <textarea id="editor" name='content' rows="10" placeholder="Ziak rawh le">{{ $post->content }}</textarea>
                        </div>
                    </div>

                </x-card-body>
                <x-card-footer>
                    <div class="form-group">
                        <a class="btn btn-outline-secondary" href="/post/{{ $post->id }}">Cancel</a>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </x-card-footer>
            </x-card>
        </form>
    </div>
<!-- Scripts for CKEDIT -->
<script type="importmap">
            {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.1/ckeditor5.js",
                    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.1/"
                }
            }
        </script>
        <script type="module">
            import {
                ClassicEditor,
                Essentials,
                Paragraph,
                Bold,
                Italic,
                Font
            } from 'ckeditor5';

            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    plugins: [ Essentials, Paragraph, Bold, Italic, Font ],
                    toolbar: [
						'undo', 'redo', '|', 'bold', 'italic', '|',
						'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                } )
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <!-- A friendly reminder to run on a server, remove this during the integration. -->
        <script>
		        window.onload = function() {
		            if ( window.location.protocol === "file:" ) {
		                alert( "This sample requires an HTTP server. Please serve this file with a web server." );
		            }
		        };
		</script>

</x-bslayout>
