@extends('layouts.app')

@section('content')

<h2> Edit Pelanggan </h2>

    <form action="{{ url('pelanggan/' .$row->pel_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-3">
            <label for="">ID Golongan</label>
            <input type="text" name="pel_id_gol" id="" class="form-control" value="{{$row->pel_id_gol}}">
        </div>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="pel_nama" id="" class="form-control" value="{{$row->pel_nama}}">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <input type="text" name="pel_alamat" id="" class="form-control" value="{{$row->pel_alamat}}">
        </div>
        <div class="mb-3">
            <label for="">No HP</label>
            <input type="text" name="pel_hp" id="" class="form-control" value="{{$row->pel_hp}}">
        </div>
        <div class="mb-3">
            <label for="">ID User</label>
            <input type="text" name="pel_id_user" id="" class="form-control" value="{{$row->pel_id_user}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-success">
        </div>
    </form>

    <footer>
        <div class="text-center py-3">
            <p>&copy; Tugas PBWL Rafi Pratama - 0702212133</p>
        </div>
    </footer>

@endsection