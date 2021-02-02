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
            background-color: white;
            ;
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

        #option {
            width: auto;
            height: 300px;

        }

        #option .option-select {

            position: absolute;
            top: 40%;
            left: 45%;
            margin-top: -51px;
            margin-left: -153px;
            width: 450px;
            height: 250px;
            background-color: #DEDCD5;
        }

        #option .date-select {

            margin-top: 10px;
            padding: 10px;
            width: 400px;
        }

        #option .date-select p {
            display: inline-block;
            padding: 5px;
        }

        #option .address-select {
            padding: 10px;
            width: 400px;

        }

        #option .address-select p {
            display: inline-block;
            padding: 5px;

        }

        #option .kind-select {
            padding: 10px;
            width: 400px;

        }

        #option .kind-select p {
            display: inline-block;
            padding: 5px;


        }

        #option .select-submit {
            padding: 10px;
            width: 400px;
            text-align: center;


        }
        #searchResult {
            text-align: center;
        }

        #searchResult .result {
            display: inline-block;  
            text-align: center;
            width: 760px;
        }



        #searchResult .content {
            float: left;
            text-align: center;
            padding-left: 20px;
            padding-right:20px;
        }

    </style>
</head>

<body>
    <div id="logo" class="container">
        <p>logo</p>

    </div>

    <div id="menu-wrapper" class="container">
        <div id="menu">
            <ul>
                <li><a href="#">MAIN</a></li>
                <li><a href="#">NULL</a></li>
                <li><a class="currentPage" href="#">유기동물 조회</a></li>
                <li><a href="#">커뮤니티</a></li>
            </ul>
        </div>
    </div>

    <?php 
    // Include the database config file 
    include_once("DB.php");

     
    // Fetch all the country data 
    $query = "SELECT * FROM sido"; 
    $result = $conn->query($query); 
?>
    <div id="option">
        <div class="option-select">
            <form method="post" id="abandonSearch" action="abandon-search.php">
                <div class="date-select">
                    <p>시작</p>
                    <input type="date" name="bgnde">
                    <p>끝</p>
                    <input type="date" name="endde">
                </div>
                <div class="address-select">
                    <p>시/도</p>
                    <select id="sido" name="sidoCode">
                        <option value="">전체</option>
                        <?php 
                    if($result->num_rows > 0){ 
                        while($row = $result->fetch_assoc()){  
                            echo '<option value="'.$row['sidoCode'].'">'.$row['sidoName'].'</option>'; 
                        } 
                    }else{ 
                        echo '<option value="">sido not available</option>'; 
                    } 
    ?>
                    </select>
                    <p>시/군/구</p>
                    <!-- State dropdown -->
                    <select id="sigungu" name="sigunguCode">
                        <option value="">전체</option>
                    </select>

                    <!-- City dropdown -->
                    <?php
                  // Fetch all the country data 
                    $query = "SELECT * FROM category"; 
                    $result = $conn->query($query); 
                ?>
                </div>
                <div class="kind-select">
                    <p>축종</p>
                    <select id="category" name="upkind">
                        <option value="">전체</option>
                        <?php 
                        if($result->num_rows > 0){ 
                            while($row = $result->fetch_assoc()){  
                                echo '<option value="'.$row['categoryID'].'">'.$row['categoryName'].'</option>'; 

                                } 
                            }else{ 
                                    echo '<option value="">sido not available</option>'; 
                                } 
                        ?>
                    </select>
                    <p>품종</p>
                    <select id="kind" name="kind">
                        <option value="">전체</option>
                    </select>
                </div>

                <div class="select-submit">
                    <input type="submit" name="검색" id="submitBtn">
                </div>
            </form>

        </div>
    </div>
    <div id="searchResult" class="container">
        <div class="result">
            <div class="content">
                <img src="images/img01.jpg" width="150" height="120" alt="" /><br />
                <p>날짜</p>
                <p>장소</p>
                <p>견종</p>
            </div>
            <div class="content">
                <img src="images/img01.jpg" width="150" height="120" alt="" /><br />
                <p>날짜</p>
                <p>장소</p>
                <p>견종</p>
            </div>

            <div class="content">
                <img src="images/img01.jpg" width="150" height="120" alt="" /><br />
                <p>날짜</p>
                <p>장소</p>
                <p>견종</p>
            </div>
            <div class="content">
                <img src="images/img01.jpg" width="150" height="120" alt="" /><br />
                <p>날짜</p>
                <p>장소</p>
                <p>견종</p>
            </div>
        </div>
    </div>


</body>

</html>
<script>
    $(document).ready(function() {
        $('#sido').on('change', function() {
            var sidoID = $(this).val();
            if (sidoID) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxData.php',
                    data: 'sido_id=' + sidoID,
                    success: function(html) {
                        $('#sigungu').html(html);;
                    }

                });
            } else {
                $('#sigungu').html('<option value="">Select country first</option>');
            }
        });

        $('#category').on('change', function() {
            var categoryID = $(this).val();
            if (categoryID) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxData.php',
                    data: 'category_id=' + categoryID,
                    success: function(html) {
                        $('#kind').html(html);
                    }
                });
            } else {
                $('#kind').html('<option value="">Select category first</option>');
            }
        });
    });


    function abSubmit() {
        var formData = $("#abandonSearch").serialize();

        $.ajax({

            cache: false,
            url: "abandon-search.php",
            type: 'POST',
            data: formData,
            success: function(result) {
                console.log(result);
            },
            error: function(request, status, error) {
                console.log(error);
            }


        });
    }

</script>
