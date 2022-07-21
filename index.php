<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="topheading">Todo Application</h1>
    <div class="container">
       
        <form action="handleAction.php" method="post">
            <div class="inpt-cntr">
                <input type="text" name="inputBox" id="inputBox">
                <button type="submit" name="add" id="add">ADD</button>
            </div>
            <ul class="list">
                <?php  
               $itemList= get_items();
               while($row=$itemList->fetch_assoc()){

               


                 ?>
                <li class="item">
                    <p><?php echo $row["item"]; ?></p>
                    <div class="icon-contr">
                    <button type="submit" name="checked" id="check" value="<?php echo $row["id"]; ?>"><i class="fa-solid fa-circle-check"></i></button>
                    <button type="submit" name="deleted" id="delete" value="<?php echo $row["id"]; ?>"><i class="fa-solid fa-trash-can"></i></button>
                    </div>

                </li>
                <?php } ?>
            </ul>
           
            <hr>
            <ul class="list">
            <?php  
               $itemList= get_items_checked();
               while($row=$itemList->fetch_assoc()){

            ?>

                <li class="item fade">
                    <p class="deleted-text"><span><?php echo $row["item"]; ?></span></p>
                    <div class="icon-contr">
                    <button type="submit" name="" id="check"><i class="fa-solid fa-circle-check hidden"></i></button>
                    <button type="submit" name="deleted" id="delete" value="<?php echo $row["id"]; ?>"><i class="fa-solid fa-trash-can"></i></button>
                    </div>

                </li>
                <?php } ?>
            </ul>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/d8ead51cf8.js" crossorigin="anonymous"></script>
</body>
</html>