<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Project Initializer</title>
</head>
<body>
    <main>
        <div class="container container-init" id="start">
            <h1 class="header">Project Initializer</h1>
            <div class="btn">
                <a href="#proj-name" class="begin">Begin</a>
            </div>
        </div>
        <div class="container container-init" id="proj-name" name="name">
            <h1 class="header">Project Name</h1>
            <form action="" class="form form-name" method="post">
                <input type="text" name="proj-name" class="input-main">
            </form>
            <div class="btn">
                <a href="#proj-type" class="next">Next</a>
            </div>
        </div>
        <div class="container container-init" id="proj-type">
            <h1 class="header">Project Type</h1>
            <form action="" class="form form-name" method="post" name="type">
                <input type="checkbox" name="php" id="php" value="php"><label for="php">PHP</label><br>
                <input type="checkbox" name="scss" id="scss" value="scss"><label for="scss">SCSS</label><br>
                <input type="checkbox" name="js" id="js" value="js"><label for="js">JS</label><br>
                <input type="checkbox" name="css" id="css" value="css"><label for="css">CSS</label><br>
                <input type="file" webkitdirectory directory multiple/>
            </form>
            <div class="btn">
                <a href="#proj-name" class="next">Next</a>
            </div>
        </div>
        
    </main>
</body>
</html>

<!-- 
    Project name
    Project type
        PHP
        SCSS
        JS
        CSS
    Project Location

 -->