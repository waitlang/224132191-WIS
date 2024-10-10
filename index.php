<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>
<body>
    <?php
        $name = '';
        $nameErr = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "SINO KA KAKO";
            } else {
              $name = test_input($_POST["name"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          } 
    ?>
    <h1>Sino ka</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    "></form>
    
    <?php
    echo "<p>ABA SI </p><h2>" . $name . "</h2><p> PALA RE AH</p>"
    ?>
</body>
</html>