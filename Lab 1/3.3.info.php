<!DOCTYPE html>
<html>
    <head>
        <title> 3.3.info.php </title>    
    </head>
    <body>
        <p><?= var_dump($_GET) ?></p>
        <p><?= var_dump($_POST) ?></p>
        <div> 
            So <?php echo htmlspecialchars($_GET['name']) ?>, 
            I hear you like <?php echo htmlspecialchars($_GET['animal']) ?> and
            <?php echo htmlspecialchars($_GET['food']) ?>, why did you answer that 
            WW2 question though? 
            <?php echo (int)$_GET['WW2'] ?>, really?
            Kind of weird... 
        </div>
    </body>
</html>