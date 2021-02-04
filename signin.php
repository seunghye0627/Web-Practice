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
    <link href="abstyle.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

    <div id="top" class="container">
        <div class="top-icon">
            <button type="button"class="btn btn-light" onclick="location.href='signup.php'">Sign up</button>
            <button type="button"class="btn btn-light" onclick="location.href='signin.php'">Sign in</button>
        </div>

    </div>
    <div id="logo" class="container">
        <p>logo</p>

    </div>
    <div id=wrapeer>
        <div id="menu-wrapper" class="container">
            <div id="menu">
                <ul>
                    <li><a href="main.php">MAIN</a></li>
                    <li><a href="null.php">NULL</a></li>
                    <li><a href="abandon.php">유기동물 조회</a></li>
                    <li><a href="community.php">커뮤니티</a></li>
                </ul>
            </div>
        </div>

        <div id="signin" class="container">
            <center>
                <form method="post" id="signinForm" action="signinCheck.php">
                    <p>ID</p><input type="text" name="userID" placeholder="ID">
                    <p>Password</p><input type="password" name="userPW" placeholder="Password"><br /><br />
                    <div class="signBtn">  
                        <button type="button" class="btn btn-light">Sign up</button>
                        <button type="submit" class="btn btn-light">Sign in</button>                        
                    </div>
                    
                    
                </form>
            </center>
        </div>

        <div id="footer" class="container">
            <div class="footer-item">
                <p>
                    Winter-Project
                </p>

                <div class="footer-item2">
                    <p>
                        Choi Seung-hye
                    </p>
                    <p>
                        mutanxx@naver.com
                    </p>
                </div>
            </div>

        </div>
    </div>





</body>

</html>
