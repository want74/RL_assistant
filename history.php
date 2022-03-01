<?php
    include "connect.php";
    $query1 = mysqli_query($con, "SELECT * FROM history WHERE user_id='{$_GET['user_id']}'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>RLchik</title>
</head>

<body>
    <div class="col">
        
        <?php
            for($i=0;$i<$query1->num_rows;$i++){
                $stroka1 = $query1->fetch_assoc();
        ?>
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <h3>
                        <?php 
                            if ($stroka1['type']==1) {
                                echo "Завтрак";
                            }elseif ($stroka1['type']==2) {
                                echo "Обед";
                            }elseif ($stroka1['type']==3) {
                                echo "Ужин";
                            }
                        ?>
                    </h3>
                </div>
                <div class="row">
                    <p>
                        <?php 
                            echo $stroka1['day1'];
                        ?>
                    </p>
                </div>
            </div>
            <div class="col">
                <form action="delhist.php" method="POST">
                    <?php
                        echo '<input style="display:none;"type="num" name="id" value="'.$stroka1['id'].'">'
                    ?>                    
                    <button class="btn">DELETE</button>
                </form>
            </div>
        </div>
        <?php
            }
        ?>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>