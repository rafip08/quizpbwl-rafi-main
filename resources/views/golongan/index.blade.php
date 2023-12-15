@extends('layouts.app')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #3498db, #8e44ad); /* Ganti dengan warna latar belakang yang diinginkan */
        color: #ffffff; /* Ganti dengan warna teks yang kontras */
        font-family: 'Nunito', sans-serif; /* Ganti dengan jenis font yang diinginkan */
    }

    h2 {
        color: #ffffff; /* Ganti dengan warna teks judul yang diinginkan */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Efek bayangan teks */
        margin-bottom: 20px;
    }

    .btn-success {
        background-color: #2ecc71; /* Warna tombol sukses */
        border-color: #27ae60;
    }

    .btn-success:hover {
        background-color: #27ae60; /* Warna tombol sukses saat hover */
        border-color: #2ecc71;
    }

    .table {
        background-color: rgba(255, 255, 255, 0.9); /* Ganti dengan warna latar belakang tabel yang diinginkan */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan tabel */
    }

    .table th, .table td {
        color: #333; /* Warna teks dalam sel tabel */
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.7); /* Warna latar belakang setiap baris ganjil dalam tabel striped */
    }

    footer {
        background-color: #333; /* Ganti dengan warna latar belakang footer yang diinginkan */
        color: #ffffff; /* Ganti dengan warna teks footer yang kontras */
    }
</style>

<div class="container">
    <h2 class="text-center mt-4 mb-4">Data Golongan</h2>

    <a href="{{ url('golongan/create') }}" class="btn btn-success mb-3">Tambah Data Golongan</a>

    <table class="table table-bordered table-striped">
        <thead class="text-center bg-primary text-white">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">KODE</th>
                <th scope="col">GOLONGAN</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->gol_id }}</td>
                <td>{{ $row->gol_kode }}</td>
                <td>{{ $row->gol_nama }}</td>
                <td>
                    <a href="{{ url('golongan/edit/' . $row->gol_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('golongan/' . $row->gol_id) }}" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ardian said: You Are Sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<footer>
    <div class="text-center py-3">
        <p>&copy; Tugas PBWL Rafi Pratama - 0702212133</p>
    </div>
</footer>

@endsection
