@extends('layouts.app')
@section('content')

<style>
    form {
        color: white;
        display: flex;
        flex-direction: column;
        gap: 10px;
        font-size: 30px;
        margin: 20px 20px;
    }

    button {
        width: max-content;
        margin-left: 45vw;
        font-size: 20px;
        background-color: aliceblue;
        border-radius: 10px;
    }

    input {
        height: 50px;
        font-size: 20px;
        border-radius: 50px;
        border: 0;
    }
    .txt {
        color: white;
        margin-left: 20px;
        margin-top: 30px;
        text-decoration: underline;
    }
</style>

<h1 class="txt">Edit Booking Order</h1>
<form action="{{route('app.edit', $orderlist->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" value="{{$orderlist->nama}}">
    <label for="notel">Nomor Telepon</label>
    <input type="tel" name="notel" id="notel" value="{{$orderlist->notel}}">
    <label for="jk">Jenis Kelamin</label>
    <input type="text" name="jk" id="jk" value="{{$orderlist->jk}}">
    <label for="acara">Acara</label>
    <input type="text" name="acara" id="acara" value="{{$orderlist->acara}}">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat" value="{{$orderlist->alamat}}">
    <label for="foto">Perbarui Foto Anda</label>
    <input type="file" name="foto" id="foto">
    <button type="submit">Ubah Orderan</button>
</form>
@endsection