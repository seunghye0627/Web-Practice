<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>??</title>
    <script src="//code.jquery.com/jquery.min.js"></script>
</head>

<body>
<input type="date">
<input type="date">  
    <?php 
    // Include the database config file 
    include_once("DB.php");

     
    // Fetch all the country data 
    $query = "SELECT * FROM sido"; 
    $result = $conn->query($query); 
?>

    <!-- Country dropdown -->
    <div class="container">
        <select id="sido">
            <option value="">Select Country</option>
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

        <!-- State dropdown -->
        <select id="sigungu">
            <option value="">Select country first</option>
        </select>
    </div>
    <!-- City dropdown -->
    <?php
      // Fetch all the country data 
        $query = "SELECT * FROM category"; 
        $result = $conn->query($query); 
    ?>

    <div class="container">
        <select id="category">
            <option value="">Select</option>
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
        <select id="kind">
            <option value="">Select kind</option>
        </select>
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

</script>
