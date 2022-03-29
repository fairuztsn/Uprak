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
        .this-form span{
            font-weight: bolder;
        }
        .content {
            padding: 30px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            transition: 0.2s;
            width: 500px;
        }
        .content:hover {
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        input {
            padding: 15px;
        }
        input[type="text"], input[type="number"], textarea {
            
            width: 400px;
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
    <div class="content">
        <form action="{{ url("create") }}" method="POST" class="this-form" enctype="multipart/form-data">
            @csrf
            
            <span>Name</span><br>
            <input type="text" name="name" id="" placeholder="Name">
            <br><br>

            <span>Location</span><br>
            <input type="text" name="location" id="" placeholder="Location">
            <br><br>

            <span>Image</span><br>
            <input type="file" name="image" id="">
            <br><br>
            
            <span>Price per Night</span><br>
            <input type="number" name="price_per_night" id="" placeholder="Price per Night">
            <br><br>

            {{-- Checkbox Inputs --}}
            <span>Facilities</span><br>
            <input type="checkbox" id="facilities1" name="facilities1" value="Shower">
            <label for="facilities1">Shower</label><br>
            <input type="checkbox" id="facilities2" name="facilities2" value="Pool">
            <label for="vehicle2">Pool</label><br>
            <input type="checkbox" id="facilities3" name="facilities3" value="Breakfast">
            <label for="vehicle3">Breakfast</label><br>
            <input type="checkbox" id="facilities4" name="facilities4" value="Wifi">
            <label for="facilities4">Wifi</label><br>
            <input type="checkbox" id="facilities5" name="facilities5" value="Double Bed">
            <label for="facilities5">Double Bed</label><br>
            <input type="checkbox" id="facilities6" name="facilities6" value="Refrigerator">
            <label for="facilities6">Refrigerator</label><br>
            
            <br>
            {{-- Checkbox Inputs --}}

            <textarea name="synopsis" id="" rows="5" placeholder="Synopsis"></textarea>

            <br>
            <button class="btn default">Upload :D</button>

        </form>
    </div>
</div>
</body>
</html>