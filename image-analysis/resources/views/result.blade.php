@extends('layout')

@section('title', 'Analysis Result')

@section('content')
    <style>
        .container {
            margin-top: 0.1rem;
            margin-bottom:10rem;
        }
    </style>
    <div class="container">
        <h2 class="text-center mb-4">Analysis Result</h2>

        <div class="card shadow-lg border-0 rounded">
            <div class="card-body">
                <h4 class="text-center mb-3">Your Image has been Analyzed</h4>
                <p class="text-center">Here are the results of the diabetic retinopathy analysis:</p>

                <!-- Display the result based on the response -->
                <div class="result-container text-center">
                    @if (isset($data['condition']))
                        <h5 class="mb-3">Detected Condition: <strong>{{ $data['condition'] }}</strong></h5>
                        <div class="alert alert-danger" role="alert">
                            <strong>Warning:</strong>
                            {{ $data['message'] ?? 'Consult a specialist for further diagnosis.' }}
                        </div>
                    @else
                        <p>No conditions detected or an error occurred during analysis. Please try again with another image.
                        </p>
                    @endif

                    <!-- Display the uploaded image URL (if available from API response) -->
                    @if (isset($data['image_url']))
                        <img src="{{ $data['image_url'] }}" alt="Analysis Result" class="img-fluid mb-3">
                    @else
                        <img src="https://via.placeholder.com/400x300" alt="Analysis Result" class="img-fluid mb-3">
                    @endif

                    <p>Further diagnosis is recommended based on the results. Please upload a new image or contact a
                        healthcare professional.</p>
                </div>

                <div class="text-center">
                    <a href="/upload" class="btn btn-primary">Analyze Another Image</a>
                    <a href="/" class="btn btn-secondary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
