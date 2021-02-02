<?php 

     error_reporting(E_ALL);

    ini_set("display_errors", 1);

    $bgnde = $_POST['bgnde'];
    $endde = $_POST['endde'];
    $upr_cd = $_POST['sidoCode'];
    $org_cd = $_POST['sigunguCode'];
    $upkind = $_POST['upkind'];
    $kind = $_POST['kind'];

    

    $xml = "http://openapi.animal.go.kr/openapi/service/rest/abandonmentPublicSrvc/abandonmentPublic?numOfRows=10";
    $ServiceKey= 'YJ86Zj96UgNzzSsP6VN0ppDTEJfMmQtqt6cFV8X4f503nXlvq7%2Fg4dlO2xGIaTkycNSaYXq9eCo3zVZuKj%2FG7w%3D%3D';
    $queryParams =$xml .'bgncd='.$bgnde.'&upr_cd='. $upr_cd . '&org_cd=' .$org_cd. '&upkind='. $upkind.'&kind='.$kind. '&'. urldecode('ServiceKey').'='.$ServiceKey;

    
    $xmlData = simplexml_load_file($queryParams);
    $items = $xmlData->body->items->item;
        foreach ($items as $item) {
            echo $item->kindCd;
            echo "\n";
            echo $item->colorCd;
            echo "\n";
            echo $item->happenPlace;
            echo "\n";
            echo $item->filename;


        }



?>
