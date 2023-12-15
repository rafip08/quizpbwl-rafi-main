@extends('layouts.app')

@section('content')

<h2> Input Data Golongan </h2>

    <form action="{{ url('golongan') }}" method="post">
        @csrf 
        <div class="mb-3">
            <label for="">Kode*</label>
            <input type="text" name="gol_kode" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Golongan*</label>
            <input type="text" name="gol_nama" id="" class="form-control">
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