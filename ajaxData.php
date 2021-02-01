
<?php 
// Include the database config file 
include_once("D:/Apache24/htdocs/DB.php");

 
if(!empty($_POST["sido_id"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM sigungu WHERE sidoCode = ".$_POST['sido_id'] .";"; 
    $result = $conn->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select State</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['sigunguCode'].'">'.$row['sigunguName'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">State not available</option>'; 
    } 
}elseif(!empty($_POST["category_id"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM kind WHERE categoryID = ".$_POST['category_id'].";"; 
    $result = $conn->query($query); 
     
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['kindCode'].'">'.$row['kindName'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Kind not available</option>'; 
    } 
} 
?>