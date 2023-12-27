@extends('layouts.app')
@section('content')

    <head>
        <style>
            main{
                display: flex;
                justify-content: center;
                align-content: center;
            }
            .container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
                text-align: center;
                margin-top: 5%;
            }

            h1 {
                color: #faf7f7;
            }

            .profile-img {
                justify-content: center;
                align-content: center;
                width: 200px;
                margin-bottom: 20px;
                margin-left: 5%;
            }

            .info {
                color: rgb(255, 255, 255);
            }
        </style>
    </head>
    <main>
        <div class="container">
            <h1>Biodata</h1>
            <img src="https://static.wixstatic.com/media/571f0b_2890eb8794ac4e4380c79ceb60136898~mv2.png/v1/fit/w_2500,h_1330,al_c/571f0b_2890eb8794ac4e4380c79ceb60136898~mv2.png" alt="Foto Profil"
                class="profile-img">
            <div class="info">
                <p><strong>Nama:</strong> Muhammad Labibul Afkar</p>
                <p><strong>Umur:</strong> 20 Years Old</p>
                <p><strong>Alamat:</strong> SMW</p>
            </div>
        </div>
    </main>
@endsection
