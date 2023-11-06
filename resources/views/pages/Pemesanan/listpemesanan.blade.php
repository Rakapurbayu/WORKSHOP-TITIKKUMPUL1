@extends('layouts.appUser')

@section('content')
<div class="container mt-4 mb-4" style="padding-top: 90px;"> <!-- Sesuaikan nilai padding-top sesuai kebutuhan -->
    <h2>List Pesanan</h2>

    <!-- Konten list pesanan -->
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        Pesanan 1
                        <span class="badge bg-primary rounded-pill">5</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        Pesanan 2
                        <span class="badge bg-primary rounded-pill">3</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        Pesanan 3
                        <span class="badge bg-primary rounded-pill">8</span>
                    </div>
                </div>
            </div>
            <!-- Tambahkan item pesanan sesuai kebutuhan -->
        </div>
    </div>
@endsection
