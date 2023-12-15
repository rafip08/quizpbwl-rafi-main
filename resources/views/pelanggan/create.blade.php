@extends('layouts.app')

@section('content')

<h2> Input Data Pelanggan </h2>

    <form action="{{ url('pelanggan') }}" method="post">
        @csrf 
        <div class="mb-3">
            <label for="">ID Golongan*</label>
            <input type="text" name="pel_id_gol" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No Pelanggan*</label>
            <input type="text" name="pel_no" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Nama*</label>
            <input type="text" name="pel_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Alamat*</label>
            <input type="text" name="pel_alamat" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No HP*</label>
            <input type="text" name="pel_hp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No KTP*</label>
            <input type="text" name="pel_ktp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No Seri*</label>
            <input type="text" name="pel_seri" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No Meteran*</label>
            <input type="text" name="pel_meteran" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Pelanggan Aktif*</label>
            <input type="text" name="pel_aktif" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">ID User*</label>
            <input type="text" name="pel_id_user" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>

    <footer>
        <div class="text-center py-3">
            <p>&copy; Tugas PBWL Rafi Pratama - 0702212133</p>
        </div>
    </footer>
    
@endsection