@extends('layouts.app')

@section('content')

<h2> Edit User </h2>

    <form action="{{ url('pengguna/' .$row->user_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" name="user_email" id="" class="form-control" value="{{$row->user_email}}">
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="text" name="user_password" id="" class="form-control" value="{{$row->user_password}}">
        </div>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="user_nama" id="" class="form-control" value="{{$row->user_nama}}">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <input type="text" name="user_alamat" id="" class="form-control" value="{{$row->user_alamat}}">
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