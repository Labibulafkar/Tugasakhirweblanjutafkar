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

<h1 class="txt">Form Booking Order</h1>
<form action="/order" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama">
    <label for="notel">Nomor Telepon</label>
    <input type="tel" name="notel" id="notel">
    <label for="jk">Jenis Kelamin</label>
    <input type="text" name="jk" id="jk">
    <label for="acara">Acara</label>
    <input type="text" name="acara" id="acara">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat">
    <label for="foto">Masukkan Foto Anda: </label>
    <input type="file" name="foto" id="foto">
    <button type="submit">Order Sekarang</button>
</form>
@endsection