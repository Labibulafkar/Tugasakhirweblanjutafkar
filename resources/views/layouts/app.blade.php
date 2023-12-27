<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AV CREATOR{{}}</title>
    <style>
        body {
            background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            overflow-x: hidden;
        }

        nav {
            top: 0;
            display: flex;
            background-color: gray;
            width: 100%;
            justify-content: space-around;
            font-size: 25px;
        }

        ul {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        a {
            text-decoration: none;
            color: rgb(0, 0, 0);
        }

        footer {
            background-color: grey;
            width: 100%;
            font-size: 10px;
            padding: 15px;
        }
        h2{
            color: white;
        }
        table, a {
            color: white;
        }
    </style>
</head>

<body>
    <nav>
        <p>AV CREATOR</p>
        <ul>
            <a href="/">
                <li>Home</li>
            </a>
            <a href="/halaman2">
                <li>Biodata</li>
            </a>
            <a href="/order">
                <li>Order</li>
            </a>
            <a href="/orderlist">
                <li>List Order</li>
            </a>
            <a href="/halaman3">
                <li>End</li>
            </a>
        </ul>
    </nav>
    @yield('content')
    <footer>
        <h2>By:@av.creator_</h2>
    </footer>
</body>

</html>
