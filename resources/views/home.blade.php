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
    <div class="dflex" style="margin-top: 50px;">
        <div class="content" style="max-width: 500px;">
            <h1>Our world is your playground</h1>
            <p>We gave you what you want, less what you need</p>
            <a href="/hotels">Explore</a>
        </div>
        <img src="{{asset("images/hotel1.jpg")}}" alt="img" style="height: 500px; width: 500px; margin-left: 30px;border:1px solid black;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
    </div>
</body>
</html>