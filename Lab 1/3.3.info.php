<!DOCTYPE html>
<html>
    <head>
        <title> 3.3.info.php </title>    
    </head>
    <body>
        <!-- <p><?= var_dump($_GET) ?></p>
        <p><?= var_dump($_POST) ?></p> -->
        <div> 
            So <?php echo htmlspecialchars($_POST['name']) ?>, 
            I hear you like <?php echo htmlspecialchars($_POST['animal']) ?> and
            <?php echo htmlspecialchars($_POST['food']) ?>, why did you answer that 
            WW2 question though? 
            <?php echo (int)$_POST['WW2'] ?>, really?
            Kind of weird... 
        </div>
    </body>
</html>