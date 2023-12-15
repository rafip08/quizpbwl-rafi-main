@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #3498db; /* Warna biru yang elegan */
        color: #ffffff; /* Warna teks putih */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Ganti dengan font yang sesuai */
    }

    .card {
        background-color: #ffffff; /* Warna latar card putih */
        border: none; /* Menghapus border */
        border-radius: 10px; /* Corner radius */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow untuk efek levitasi */
        margin-top: 20px; /* Spasi atas card */
    }

    .card-header {
        background-color: #2980b9; /* Warna header biru yang lebih gelap */
        color: #ffffff; /* Warna teks header putih */
        font-size: 24px; /* Ukuran font header */
        font-weight: bold; /* Tebal font header */
        text-align: center; /* Tengah teks header */
        padding: 20px 0; /* Padding atas dan bawah */
        border-radius: 10px 10px 0 0; /* Corner radius untuk sudut atas */
    }

    .intro-text {
        margin-top: 20px;
        text-align: center; /* Tengah teks */
    }

    .dashboard-icons {
        font-size: 36px; /* Ukuran font ikon dashboard */
        margin: 20px 0; /* Spasi atas dan bawah ikon */
        text-align: center; /* Tengah ikon */
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Selamat Datang di PLN Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="dashboard-icons">
                        <i class="fas fa-chart-bar"></i> <!-- Ganti dengan ikon yang sesuai -->
                        <i class="fas fa-users"></i> <!-- Ganti dengan ikon yang sesuai -->
                        <i class="fas fa-cogs"></i> <!-- Ganti dengan ikon yang sesuai -->
                    </div>

                    <div class="intro-text">
                        <h1 class="card-header">{{ __('Eksplorasi Data dan Statistik') }}</h1>
                        <p>{{ __('Selamat datang di dashboard PLN. Di sini, Anda dapat mengeksplorasi data dan statistik terkait pembangkit listrik yang dikelola oleh PLN.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
        <div class="text-center py-3">
            <p>&copy; Tugas PBWL Rafi Pratama - 0702212133</p>
        </div>
</footer>

@endsection
