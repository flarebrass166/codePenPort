<!doctype html>
<html>
<head>
    <title>Matthew Langford's Portfolio</title>
    <style>
        .left-port{
            width: 100px;
            height: 100px;
            float: left;
            margin-left: 100px;
        }
        .right-port{
            width: 100px;
            height: 100px;
            float: right;
            margin-right: 100px;
        }
        .port{
            border-style: outset;
            border-color: blue;
            width: 100%;
            display: inline-block;
            align: center;
            background-color: green;
        }
        .about-me{
            border-style: inset;
            border-color: #006f78;
            width: 50%;
            margin-left: 25%;
            display: inline-block;
            align: center;
            background-color: #006f78;
        }
        body{
            background-color: black;
        }
        .about{
            margin-left: 400px;
        }
        .banner{
            background-color: gray;
        }
        ul{

            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            height: 75px;
            display: inline-block;
        }
        li{
            padding-left: -10px;
            padding-right: -10px;
            margin: 9px;
            font-size: 20px;
            float: right;
            border-right: white;
        }
        li a{
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover{
            background-color: black;
        }
        .text-center{
            display: block;
            text-align: center;
        }
        p{
            font-size: 18px;
        }
        .nav-bar{
            width: 100%;
            text-align: center;
        }
        .smaller-pic{
            border-style: inset;
            border-color: blue;
            width: 400px;
            height: 400px;
        }
        .active{
            background-color: black;
        }
    </style>
    <header class="banner">
        <div class="nav-bar">
            <ul >
                <li class="about"><a class="active" href="#">About me</a> </li>
                <li><a class="active" href="#">Contact me</a></li>
                <li><a class="active" href="#">Portfolio</a></li>
                <li><a class="active" href="#">Home</a></li>
            </ul>
        </div>
    </header>
</head>
<body>

<div class="about-me">
    <p>My name is Matthew Langford, I'm a student at slcc</p>
    <img style="float: right" class="smaller-pic" src="http://sizzlingsuperstars.com/wp-content/uploads/2016/06/Tom-Cruise-8.jpg"
</div>
<div class="port">
    <p>hihi</p>
    <img class="left-port" src="http://sizzlingsuperstars.com/wp-content/uploads/2016/06/Tom-Cruise-8.jpg">
    <img class="right-port" src="http://sizzlingsuperstars.com/wp-content/uploads/2016/06/Tom-Cruise-8.jpg">
    <img class="left-port" src="http://sizzlingsuperstars.com/wp-content/uploads/2016/06/Tom-Cruise-8.jpg">
    <img class="right-port" src="http://sizzlingsuperstars.com/wp-content/uploads/2016/06/Tom-Cruise-8.jpg">

</div>
</body>

</html>