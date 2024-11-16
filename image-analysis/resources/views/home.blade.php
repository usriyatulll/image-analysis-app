<!-- resources/views/home.blade.php -->
@extends('layout')

@section('title', 'Diabetic Retinopathy Analyzer')

@section('content')
    <style>
        /* Mengatur body untuk tampilan penuh dan latar belakang */
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            /* Mencegah scroll */
            height: 100vh;
            /* Tinggi penuh sesuai layar */
            /* Ganti dengan gambar retina atau tema medis */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }

        /* Centering Container */
        .welcome {
            margin-top:10rem;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            /* Tinggi penuh untuk center alignment */
        }

        /* Box Styling */
        .welcome-box {
            background-color: rgba(0, 0, 0, 0.7);
            /* Warna kotak gelap dengan transparansi */
            padding: 40px 60px;
            /* Padding untuk konten */
            border-radius: 15px;
            /* Membulatkan sudut */
            text-align: center;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
            /* Bayangan */
            color: white;
            /* Warna teks */
        }

        .welcome-box h1 {
            font-size: 2.5rem;
            /* Ukuran heading */
            margin-bottom: 20px;
            font-weight: bold;
        }

        .welcome-box p {
            font-size: 1.2rem;
            /* Ukuran teks deskripsi */
            margin-bottom: 30px;
            color: #d1d1d1;
            /* Warna teks abu-abu terang */
        }

        /* Tombol Upload */
        .btn-primary {
            background-color: rgb(42, 42, 232);
            /* Warna hijau (untuk kesehatan) */
            border: none;
            padding: 12px 25px;
            font-size: 1rem;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            /* Hilangkan underline */
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: rgb(138, 138, 215);
            /* Warna hijau lebih gelap saat hover */
        }
    </style>

    <div class="welcome">
        <div class="welcome-box">
            <h1>Diabetic Retinopathy Analyzer</h1>
            <p>Upload retinal images to detect diabetic retinopathy with precision.</p>
            <a href="/upload" class="btn-primary">Start Analysis</a>
        </div>
    </div>
@endsection
