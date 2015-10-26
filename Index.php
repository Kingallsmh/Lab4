<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
    <?php
    include("Circle.php");
    include("Triangle.php");
    include("Rectangle.php");

    $circle = new Circle($_POST['cRadius']);
    $triangle = new Triangle($_POST['tBase'], $_POST['tHeight']);
    $rectangle = new Rectangle($_POST['rWidth'], $_POST['rHeight']);

    if($_POST['cAdjust']){
        $circleAdjust = $_POST['cAdjust'];
        $circleArea = $circle->CalculateSize($_POST['cRadius'], 0);
        $circle->shapeWidth = $circle->adjustSize($circleArea, $circleAdjust);
    }
    if($_POST['tAdjust']){
        $triangleAdjust = $_POST['tAdjust'];
        $triangleBase = ($_POST['tBase']);
        $triangle->shapeWidth = $triangle->adjustSize($triangleBase, $triangleAdjust);
        $triangle->shapeHeight = $_POST['tHeight'];
    }

    ?>

    <h1>Circle</h1>
    <form action="Index.php" method="post">
        Radius: <input type="text" name="cRadius"
                       value=<?php echo $circle->shapeWidth;?>>

    <h1>Triangle</h1>

        Height: <input type="text" name="tHeight"
                       value=<?php echo $triangle->shapeHeight;?>>
        Base: <input type="text" name="tBase"
                     value=<?php echo $triangle->shapeWidth;?>>

    <h1>Rectangle</h1>

        Height: <input type="text" name="rHeight"
                       value=<?php echo $rectangle->shapeHeight;?>>
        Width: <input type="text" name="rWidth"
                      value=<?php echo $rectangle->shapeWidth;?>>
        <br/>
        <br/>
        <br/>
        <input type="submit" name="submit" id="submit" value="Submit">
    </form>
    <?php
    $circle->shapeArea = $circle->CalculateSize($circle->shapeWidth, 0);
    $triangle->shapeArea = $triangle->CalculateSize($triangle->shapeWidth, $triangle->shapeHeight);
    $rectangle->shapeArea = $rectangle->CalculateSize($rectangle->shapeWidth, $rectangle->shapeHeight);

    ?>

    <h2>Results</h2>
    <p>Circle Area: <?php echo $circle->shapeArea ?></p>
    <form action="Index.php" method="post">
        Resize by %: <input type="text" name="cAdjust" value="">
        <input type="hidden" name="cRadius" value=<?php echo $circle->shapeWidth ?>>
        <input type="submit" name="submit" id="submit" value="Resize">
    </form>
    <p>Triangle Area: <?php echo $triangle->shapeArea ?></p>
    <form action="Index.php" method="post">
        Resize base by %: <input type="text" name="tAdjust" value="">
        <input type="hidden" name="tBase" value=<?php echo $triangle->shapeWidth ?>>
        <input type="hidden" name="tHeight" value=<?php echo $triangle->shapeHeight ?>>
        <input type="submit" name="submit" id="submit" value="Resize">
    </form>
    <p>Rectangle Area: <?php echo $rectangle->shapeArea ?></p>


</body>
</html>