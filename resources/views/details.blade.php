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
        .action * {
            padding: 10px;
        }
        .hotel-img {
            height: 300px; width: 300px;
            border-radius: 20px;
            box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
            transition: 0.2s;
        }
        .hotel-img:hover {
            box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
            transform: scale(0.98);
        }
        .hotel-img:active {
            transform: scale(0.95);
            box-shadow: none;
        }
        .content {
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            padding: 20px;
        }
        .edit-btn {
            text-decoration: none;
            color:white;
            background: rgb(0, 182, 0); 
            border-radius: 10px;
            box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
        }
        .delete-btn {
            background: red;
            border: none;
            color: white;
            transition: 0.2s;
        }
        .edit-btn:hover, .delete-btn:hover {
            transform: scale(0.98);
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
    
    <div class="body">
        <div class="action dflex">
            <a href="../../hotel/{{$hotels->id}}/edit" class="edit-btn">Edit this hotel</a>

            <form action="{{ url("hotel/".$hotels->id) }}" method="POST">
                @csrf

                @method("Delete")
                <button class="delete-btn">Delete this hotel</button>
            </form>
        </div>

        <div class="dflex">
        <div class="content">
            <div class="dflex">
                <img src="{{ asset("uploads/images/$hotels->image") }}" alt="hotel-img" class="hotel-img">
            </div>
            <h1 style="text-align: center">{{$hotels->name}} <br> </h1>
            <h3 style="text-align: center;">Location</h3>
            <p style="text-align: center;">{{$hotels->location}}</p>
            <h3 style="text-align: center;">Facilities</h3>
            <p style="text-align: center;">{{$hotels->facilities}}</p>
            <h3 style="text-align: center;">Price per night</h3>
            <p style="text-align: center;">${{$hotels->price_per_night}}</p>
            <h3 style="text-align: center;">Description</h3>
            <p style="text-align: justify; max-width: 500px;">
                {{$hotels->synopsis}}
            </p>
            <form>
                <p style="
                    text-align:center;
                    padding:10px;
                    background-color:blue;
                    color: white;
                    border-radius: 10px;
                    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
                ">$<span id="price">1</span></p>
                <div class="dflex">
                <input type="button" onclick="decrementValue()" value="-"/>
                <input type="text" id="number" value="1" min="1" style="text-align: center"/> 
                <input type="button" onclick="incrementValue()" value="+" min="0"/>
                &nbsp;nights
            </div>
             </form>

             <div class="dflex">
             <a href="" class="buy-btn" style="
             ">BUY ROOM</a>
             </div>
             <script>
                 function incrementValue()
                    {
                        var value = parseInt(document.getElementById('number').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value++;
                        document.getElementById('number').value = value;
                        document.getElementById('price').innerHTML = value*{{$hotels->price_per_night}};
                    }
                function decrementValue()
                    {
                        var value = parseInt(document.getElementById('number').value, 10);
                        value = isNaN(value) ? 0 : value;
                        if (value == 1) {
                            value = value;
                        }else if (value > 1) {
                            value--;
                        }
                        document.getElementById('number').value = value;
                        document.getElementById('price').innerHTML = value*{{$hotels->price_per_night}};
                    }
             </script>
        </div>
        
        </div>

        
    </div>
</body>
</html>