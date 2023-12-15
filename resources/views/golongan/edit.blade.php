@extends('layouts.app')

@section('content')

<h2> Edit Golongan </h2>

    <form action="{{ url('golongan/' .$row->gol_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-3">
            <label for="">Kode</label>
            <input type="text" name="gol_kode" id="" class="form-control" value="{{$row->gol_kode}}">
        </div>
        <div class="mb-3">
            <label for="">Golongan</label>
            <input type="text" name="gol_nama" id="" class="form-control" value="{{$row->gol_nama}}">
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