<?php
    error_reporting(E_ALL);

    ini_set("display_errors", 1);
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "hi5h*li5ht!0";


    $conn = new mysqli($servername, $username, $password);
    $dbName = "sample";
    mysqli_select_db($conn, $dbName) or die('DB selectionn failed');
    
    if($conn->connect_error){
        die("connection failed: " + $conn->connect_error);
        
        
    }
        

    $affectedRow = 0;
    

   
    $xml = "http://openapi.animal.go.kr/openapi/service/rest/abandonmentPublicSrvc/kind?numOfRows=300";
    $ServiceKey= 'YJ86Zj96UgNzzSsP6VN0ppDTEJfMmQtqt6cFV8X4f503nXlvq7%2Fg4dlO2xGIaTkycNSaYXq9eCo3zVZuKj%2FG7w%3D%3D';


    $selectCatSql = "SELECT * FROM category;";
    $catResult = $conn->query($selectCatSql);

    while($catRow = $catResult->fetch_assoc()){
        $catID = $catRow["categoryID"];
        $queryParams =$xml .'&up_kind_cd='. $catID .'&'. urldecode('ServiceKey').'='.$ServiceKey;
        $xmlData = simplexml_load_file($queryParams);
        $items = $xmlData->body->items->item;
        foreach ($items as $item) {
            $kindName = $item->KNm;
            $kindCode = $item->kindCd;

            $sql = "INSERT INTO kind(kindCode, kindName, categoryID)
            VALUES (" . $kindCode. ",'" . $kindName . "',".$catID . ");";

            if ($conn->query($sql)===TRUE) {
                    $affectedRow ++;
                } else {
                    $error_message = mysqli_error($conn) . "\n";
                }


    }


    }

    
    echo $affectedRow;
    $conn->close();
?>

