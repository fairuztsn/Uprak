<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }
        .navbar ul {
            display: flex;
        }
        .navbar ul li {
            list-style: none;
        }
        .navbar ul li a {
            padding: 10px;
            text-decoration: none;
        }
        .right {
            float: right;
            display: flex;
            position: relative;
            left: 1200px;
        }
        .dflex {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .hotel-list ul {
            display: flex;
            flex-wrap: wrap;
        }
        .hotel-list ul li {
            margin: 20px;
            
        }
        .btn {
            text-decoration: none;
            padding: 10px;
        }
        .default {
            margin-top: 20px;
            background: rgb(255, 76, 76);
            color: white;
            border-radius: 5px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .card {
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
            transition: 0.2s;
            margin-top: 30px;
            padding: 20px;
        }
        .card:hover {
            transform: scale(0.98);
            box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
        }
        .card:active {
            transform: scale(0.95);
        }

        li {
            list-style: none;
        }
        .hotel-img {
            height: 150px;
            width: 150px;
            border-radius: 10px;
        }
        .card a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li>
                <a href="/">Hotelio</a>
            </li>
            <div class="right">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/hotels">Hotels</a>
                </li>
            </div>
        </ul>
    </div>

    <div class="dflex">
        <div class="">
            
            <a href="{{ url("create") }}" class="btn default">+ Add new hotel</a>
        </div>
    </div>

    <div class="dflex hotel-list">
        <ul>
            @foreach($hotels as $hotels)
                    <li class="card">
                        <a href="hotels/{{$hotels->id}}/details">
                            <img src="{{ asset("uploads/images/$hotels->image") }}" alt="hotel-img" class="hotel-img">
                            <h1>{{$hotels->name}}</h1>
                            <p style="font-weight: bold;">{{$hotels->location}}</p>
                            <p>${{$hotels->price_per_night}} per night</p>
                        </a>
                    </li>
            @endforeach
        </ul>
    </div>
</body>
</html>