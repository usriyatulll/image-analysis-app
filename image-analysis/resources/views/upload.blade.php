@extends('layout')

@section('title', 'Upload Image')

@section('content')
    <style>
        .container {
            margin-top: 5rem;
            margin-bottom: 5rem;

        }
    </style>

    <div class="container">
        <h2 class="text-center mb-4">Upload Image for Diabetic Retinopathy Analysis</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <form action="/upload" method="post" enctype="multipart/form-data">
                            @csrf

                            <!-- File Upload Section -->
                            <div class="form-group text-center">
                                <label for="fileInput" class="form-label font-weight-bold">Select a retinal image</label>
                                <div class="custom-file">
                                    <input type="file" id="fileInput" name="image" accept="image/*"
                                        onchange="showAnalyzeButton(); previewImage();" class="custom-file-input" required>
                                    <label class="custom-file-label" for="fileInput">Choose file...</label>
                                </div>
                            </div>

                            <!-- Image Preview -->
                            <div class="form-group text-center">
                                <img id="imagePreview" src="#" alt="Image Preview" class="img-fluid"
                                    style="display: none; max-height: 300px; object-fit: contain;" />
                            </div>

                            <!-- Submit Section -->
                            <div class="text-center">
                                {{-- <button type="button" class="btn btn-primary" onclick="document.getElementById('fileInput').click()">Choose File</button> --}}
                                <br><br>
                                <button type="submit" class="btn btn-primary" id="analyzeButton"
                                    style="display: none;">Start Analysis</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Show the Analyze button after file selection
        function showAnalyzeButton() {
            document.getElementById('analyzeButton').style.display = 'inline-block';
        }

        // Preview the selected image
        function previewImage() {
            var file = document.getElementById('fileInput').files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                var imagePreview = document.getElementById('imagePreview');
                imagePreview.style.display = 'block';
                imagePreview.src = e.target.result;
            };
            if (file) {
                reader.readAsDataURL(file);
            }
        }

        // Update file input label with the selected file name
        $('#fileInput').on('change', function() {
            var fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>

    <style>
        /* Custom file input styling */
        .custom-file-label::after {
            content: "Browse";
        }

        .custom-file-input:lang(en)~.custom-file-label::after {
            content: "Browse";
        }

        .btn-primary {
            padding: 10px 30px;
            font-size: 1rem;
            border-radius: 5px;
        }

        .btn-success {
            padding: 12px 30px;
            font-size: 1rem;
            border-radius: 5px;
        }
    </style>
@endsection
