<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Winter project</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <style>
        #logo {
            height: 200px;
            width: auto;
            text-align: center;
            background-color: white;;
        }

        #logo p {
            color: #472A3C;
            padding: 50px 0px 0px 0px;
            font-size: 50pt;
        }

        #menu {
            height: 40px;
            background-color: #472A3C;


        }

        #menu ul {
            text-align: center;
            list-style: none;
            vertical-align: middle;
        }

        #menu li {
            display: inline-block;

        }

        #menu a {
            width: 150px;
            color: white;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
            display: block;
            text-align: center;
            list-style: none;

            float: left;
            vertical-align: middle;
            line-height: 40px;
            border: none;

        }

        #menu a:hover,
        #menu .currentPage {
            background: #DE5635;
            text-decoration: none;
            color: #FFFFFF;
        }

        #menu-wrapper {
            overflow: hidden;
            height: 52px;
            margin-bottom: 2em;
            background: white;
        }

    </style>
</head>

<body>
    <div id="logo" class="container">
        <p>logo</p>

    </div>
    <div id="menu-wrapper">
        <div id="menu">
            <ul>
                <li><a href="main.php">MAIN</a></li>
                <li><a class="currentPage" href="#">NULL</a></li>
                <li><a href="abandon.php">유기동물 조회</a></li>
                <li><a href="community.php">커뮤니티</a></li>
            </ul>
        </div>
    </div>






</body>

</html>
