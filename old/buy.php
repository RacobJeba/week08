<?php require_once("content.php"); ?>
<html lang="en">
<head>
    <?php include("head.php"); ?>
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12"></div>
                <?php include("nav.php"); ?>
            </div>    
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php echo $buy; ?>
            </div>
        </div>
    </div>
</body>
</html>