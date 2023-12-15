@extends('layouts.app')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #e74c3c, #f39c12); /* Ganti dengan warna latar belakang yang diinginkan */
        color: #ffffff; /* Ganti dengan warna teks yang kontras */
        font-family: 'Nunito', sans-serif; /* Ganti dengan jenis font yang diinginkan */
    }

    h2 {
        color: #ffffff; /* Ganti dengan warna teks judul yang diinginkan */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Efek bayangan teks */
        margin-bottom: 20px;
    }

    .btn-success {
        background-color: #27ae60; /* Warna tombol sukses */
        border-color: #2ecc71;
    }

    .btn-success:hover {
        background-color: #2ecc71; /* Warna tombol sukses saat hover */
        border-color: #27ae60;
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
    <h2 class="text-center mt-4 mb-4">Data Pelanggan</h2>

    <a href="{{ url('pelanggan/create') }}" class="btn btn-success mb-3">Tambah Data Pelanggan</a>

    <table class="table table-bordered table-striped">
        <thead class="text-center bg-primary text-white">
            <tr>
                <th scope="col">ID PELANGGAN</th>
                <th scope="col">ID GOLONGAN</th>
                <th scope="col">NAMA</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">HP</th>
                <th scope="col">ID USER</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->pel_id }}</td>
                <td>{{ $row->pel_id_gol }}</td>
                <td>{{ $row->pel_nama }}</td>
                <td>{{ $row->pel_alamat }}</td>
                <td>{{ $row->pel_hp }}</td>
                <td>{{ $row->pel_id_user }}</td>
                <td>
                    <a href="{{ url('pelanggan/edit/' . $row->pel_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post" class="d-inline">
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
