@extends('layouts.app')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #333333, #555555); /* Gradien abu yang agak gelap pada latar belakang body */
        color: #ffffff; /* Warna teks yang kontras */
        font-family: 'Nunito', sans-serif; /* Jenis font */
    }

    h2 {
        color: #ffffff; /* Warna teks judul */
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
        background-color: rgba(255, 255, 255, 0.9); /* Latar belakang tabel dengan transparansi */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan tabel */
        color: #333; /* Warna teks dalam tabel */
    }

    .table th, .table td {
        color: #333; /* Warna teks dalam sel tabel */
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.7); /* Warna latar belakang setiap baris ganjil dalam tabel striped */
    }

    footer {
        background-color: #333; /* Warna latar belakang footer */
        color: #ffffff; /* Warna teks footer yang kontras */
    }
</style>

<div class="container">
    <h2 class="text-center mt-4 mb-4">Data Pengguna</h2>

    <a href="{{ url('pengguna/create') }}" class="btn btn-success mb-3">Tambah Data Pengguna</a>

    <table class="table table-bordered table-striped">
        <thead class="text-center bg-primary text-white">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">EMAIL</th>
                <th scope="col">NAMA</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">ROLE</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->user_id }}</td>
                <td>{{ $row->user_email }}</td>
                <td>{{ $row->user_nama }}</td>
                <td>{{ $row->user_alamat }}</td>
                <td>{{ $row->user_role }}</td>
                <td>
                    <a href="{{ url('pengguna/edit/' . $row->user_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('pengguna/' . $row->user_id) }}" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</button>
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
