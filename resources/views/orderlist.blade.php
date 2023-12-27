@extends('layouts.app')
@section('content')
    <h2>Halaman Data Mahasiswa</h2>
    @if(Session::has('success'))        
    <h2>
        {{ Session::get('success') }}
    </h2>
    @endif
    <table style="text-align:left; border: 1px solid; border-collapse: collapse;">
        <tr>
            <th style="border: 1px solid; padding: 10px; text-align: center">ID</th>
            <th style="border: 1px solid; padding: 10px; text-align: center">Nama</th>
            <th style="border: 1px solid; padding: 10px; text-align: center">No Telepon</th>
            <th style="border: 1px solid; padding: 10px; text-align: center">Jenis Kelamin</th>
            <th style="border: 1px solid; padding: 10px; text-align: center">Acara</th>
            <th style="border: 1px solid; padding: 10px; text-align: center">Alamat</th>
            <th style="border: 1px solid; padding: 10px; text-align: center">Foto</th>
            <th style="border: 1px solid; padding: 10px; text-align: center">Edit</th>
            <th style="border: 1px solid; padding: 10px; text-align: center">Delete</th>
        </tr>
        @foreach ($orderlist as $orderlist)
            <tr>
                <td style="border: 1px solid; padding: 10px; text-align: center">{{ $orderlist->id }}</td>
                <td style="border: 1px solid; padding: 10px; text-align: center">{{ $orderlist->nama }}</td>
                <td style="border: 1px solid; padding: 10px; text-align: center">{{ $orderlist->notel }}</td>
                <td style="border: 1px solid; padding: 10px; text-align: center">{{ $orderlist->jk }}</td>
                <td style="border: 1px solid; padding: 10px; text-align: center">{{ $orderlist->acara }}</td>
                <td style="border: 1px solid; padding: 10px; text-align: center">{{ $orderlist->alamat }}</td>
                <td style="border: 1px solid; padding: 10px; text-align: center"><img src="{{asset('gambar/' .$orderlist->foto)}}" alt="fotonya" style="width: 60px"></td>
                <td style="border: 1px solid; padding: 10px; text-align: center; text-decoration: underline;"><a href="{{route('app.edit', $orderlist->id)}}">Edit</a></td>
                <form action="{{route('app.destroy', $orderlist->id)}}" method="post">
                    @csrf
                    @method('delete')
                <td style="border: 1px solid; padding: 10px; text-align: center,"><button type="submit">Delete</button></td>
                </form>
            </tr>
        @endforeach
    </table>
@endsection