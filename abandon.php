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
            width: 450px;
            height: 250px;
            background-color: #DEDCD5;
            text-align: left;
            padding: 5px;
            margin-bottom: 30px;

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
            display: block;
            width: 900px;
        }


        #searchResult .content {
            float: left;
            text-align: left;
            padding-left: 10px;
            padding-right: 10px;
            white-space: normal;
            width: 400px;
        }


        }


        #searchResult .content a {

            text-decoration: none;
        }

        #searchResult .content-image {
            padding: 0px 5px 20px 0px;
            float: left;

        }

        .content-noticeNo {
            font-size: 15px;
        }

        .content-info {
            margin: 0;
            padding: 0;
            list-style: none;
            white-space: normal;
        }

        .noticeNo {
            font-size: 15px;

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
                <li><a href="main.php">MAIN</a></li>
                <li><a href="null.php">NULL</a></li>
                <li><a class="currentPage" href="#">유기동물 조회</a></li>
                <li><a href="community.php">커뮤니티</a></li>
            </ul>
        </div>
    </div>

    <?php 
    // Include the database config file 
      error_reporting(E_ALL);

    ini_set("display_errors", 1);
    include_once("DB.php");

     
    // Fetch all the country data 
    $query = "SELECT * FROM sido"; 
    $result = $conn->query($query); 
?>
    <center>
        <div id="option">
                <form method="post" id="abandonSearch">
                    <div class="date-select">
                        <p>시작</p>
                        <input type="date" id="bgnde" name="bgnde">
                        <p>끝</p>
                        <input type="date" id="endde" name="endde">
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
                                echo '<option value="">Error</option>'; 
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
    </center>
    <div id="searchResult" class="container">
            <div class="content">
                <div class="content-image">
                    <img src="images/img03.jpg" width="180" height="150" alt="" />
                </div>
                <div class="content-right">
                    <ul class="content-info">
                        <b>
                            <li class="noticeNo">서울-양천-2014-0050</li>
                        </b>
                        <li>20140301</li>
                        <li>[개] 믹스견/여</li>
                        <li>중이염 심각함, 줄무늬</li>
                        <li>신월3공 195-1 근처</li>
                        <li>공고 중</li>
                        <button id="animal-info">자세히 보기</button>
                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="content-image">
                    <img src="images/img03.jpg" width="180" height="150" alt="" />
                </div>
                <div class="content-right">
                    <ul class="content-info">
                        <b>
                            <li class="noticeNo">서울-양천-2014-0050</li>
                        </b>
                        <li>20140301</li>
                        <li>[개] 믹스견/여</li>
                        <li>중이염 심각함, 줄무늬</li>
                        <li>신월3공 195-1 근처</li>
                        <li>공고 중</li>
                        <button id="animal-info">자세히 보기</button>
                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="content-image">
                    <img src="images/img03.jpg" width="180" height="150" alt="" />
                </div>
                <div class="content-right">
                    <ul class="content-info">
                        <b>
                            <li class="noticeNo">서울-양천-2014-0050</li>
                        </b>
                        <li>20140301</li>
                        <li>[개] 믹스견/여</li>
                        <li>중이염 심각함, 줄무늬</li>
                        <li>신월3공 195-1 근처</li>
                        <li>공고 중</li>
                        <button id="animal-info">자세히 보기</button>
                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="content-image">
                    <img src="images/img03.jpg" width="180" height="150" alt="" />
                </div>
                <div class="content-right">
                    <ul class="content-info">
                        <b>
                            <li class="noticeNo">서울-양천-2014-0050</li>
                        </b>
                        <li>20140301</li>
                        <li>[개] 믹스견/여</li>
                        <li>중이염 심각함, 줄무늬</li>
                        <li>신월3공 195-1 근처</li>
                        <li>공고 중</li>
                        <button id="animal-info">자세히 보기</button>
                    </ul>
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

    $("#submitBtn").click(function(event) {

        //preventDefault 는 기본으로 정의된 이벤트를 작동하지 못하게 하는 메서드이다. submit을 막음
        event.preventDefault();

        // Get form
        var form = $('#abandonSearch')[0];

        // Create an FormData object 
        var data = new FormData(form);

        // disabled the submit button
        //$("#submitBtn").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "abandon-search.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(html) {
                $("#searchResult").html(html);
            },
            error: function(e) {
                console.log("ERROR : ", e);
                $("#submitBtn").prop("disabled", false);
                alert("fail");
            }
        });

    });

</script>
