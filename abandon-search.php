<?php 
error_reporting(E_ALL);

ini_set("display_errors", 1);

$bgnde = $_POST['bgnde'];
$endde = $_POST['endde'];


$bgndate = date("Ymd", strtotime( $bgnde ) );
$enddate = date("Ymd", strtotime( $endde ) );

$upr_cd = $_POST['sidoCode'];
$org_cd = $_POST['sigunguCode'];
$upkind = $_POST['upkind'];
$kind = $_POST['kind'];


$xml = "http://openapi.animal.go.kr/openapi/service/rest/abandonmentPublicSrvc/abandonmentPublic";
$ServiceKey= 'G4ewK4nYr5nRmnrJjJtFueg4vV%2FnmH6tFa1aBPaxYUPA4LkQFIQLUUQVA5HSQUqMYt06psIaP%2F4rShErDIayXA%3D%3D';
$queryParams =$xml .'?bgnde='.$bgndate.'&endde='.$enddate.'&upr_cd='. $upr_cd . '&org_cd=' .$org_cd. '&upkind='. $upkind.'&kind='.$kind. '&numOfRows=16&'. urldecode('ServiceKey').'='.$ServiceKey;
$xmlData = simplexml_load_file($queryParams);
$items = $xmlData->body->items->item;

//$totalCount = $xmlData->body->totalCount; //전체 게시물 개수
//$totalPage = ceil($totalCount/16); //전체 페이지 개수
foreach ($items as $item) {
    
    echo '<div class="content">';
    echo '<div class="content-image">';
    echo '<img src="'.$item->popfile.'" width="180" height="150" alt="" /><br /></div>';
    
    
    echo '<div class="content-right">';
    echo '<ul class="content-info">';
    echo '<b><li class="noticeNo">'.$item->noticeNo.'</li></b>';
    echo '<li>'.$item->happenDt.'</li>';
    echo '<li>'.$item->kindCd. ' / '.$item->sexCd.'</li>';
    echo '<li>'.$item->specialMark.'</li>';
    echo '<li>'.$item->happenPlace.'</li>';
    echo '<li>'.$item->processState.'</li>';
    echo '<button id = "animal-info">자세히 보기</button>';
    echo '</ul></div></div>';    
}


/*
if(isset($_GET["page"]))
    $page = $_GET["page"];
else
    $page = 1;

$list = 5;
$block_cnt=5;
$block_num = ceil($page/$block_cnt);
$block_start = (($block_num - 1) * $block_cnt) + 1;
$block_end = $block_start + $block_cnt -1;

$total_page = ceil($totalCount / $list);
if($block_end > $total_page) {
    
    $block_end = $total_page;
    
    
}


$total_block = ceil($total_page/$block_cnt); 
$page_start = ($page -1) * $list;

echo $page_start;
/*echo "\n";
$queryParamsPage = $queryParams . '&pageNo=';

$xmlData = simplexml_load_file($queryParamsPage);
$items = $xmlData->body->items->item;
foreach ($items as $item) {
    echo '<div class="content">';
    echo '<img src="'.$item->popfile.'" width="150" height="120" alt="" /><br />';
    echo '<p>'.$item->happenDt.'</p>';
    echo '<p>'.$item->kindCd.'</p>';
    echo '</div>';
}

/*echo $queryParamsPage;
echo "\n";
if($page <=1){
    //
}else {
    echo '<a href="abandon.php?page=1">처음</a>';
    
}

if($page <=1){
    //
}else {
    $pre = $page - 1;
    echo '<a href="abandon.php?page='.$pre.'">이전</a>';
    
}


for($i = $block_start; $i <= $block_end; $i++){
    
    if($page == $i){
        echo '<b>'.$i.'</b>';
    }else {
        echo '<a href="abandon.php?page='.$i.'">'.$i.'</a>';
    }
}

if($page >= $total_page){
    //
}else {
    $next = $page + 1;
    echo '<a href="abandon.php?page='.$next.'">다음</a>';
    
}

if($page >= $total_page){
    //
}else {
    echo '<a href="abandon.php?page=.'.$total_page.'">마지막</a>';
    
}
*/



?>
