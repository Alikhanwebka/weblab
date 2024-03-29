<html lang="en">
<head>
<style>
    .car{
      display:flex;
      border:1px solid black;
      border-radius:5px;
      width:250px;
      padding:10px;
    }
    .title{
      font-size:16px;
      font-weight:bold;
    }
    .attributes .row{
      display:flex;
    }
    .attributes .row div{
      width:50%;
    }
    .attributes .row .name{
      font-weight:bold;
    }
    .car img{
      margin-right:10px;
    }
  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="task10_2_submit.php" style="display: flex">
        <select name="maker">
            <option value="-1">Select car</option>
            <?php 
                $arr = [];
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_assoc($result);
                    if (!in_array($row['maker'], $arr)) { ?> 
                        <option value="<?php print $row['maker']; ?>" <?php if(isset($_GET['maker']) && $_GET['maker'] == $row['maker']) print 'selected = "selected"';?> > <?php  print $row['maker']; array_push($arr, $row['maker']); ?>  </option>
                    <?php } ?>
                <?php } ?>
        </select>
        <input type="submit" value="Filter">
    </form>
    <?php 
        if (isset($_GET['maker'])) {
            $sql = "SELECT * FROM cars WHERE maker='" . $_GET['maker'] . "'";
        }
        else {
            $sql = "SELECT * FROM cars";
        }
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
    ?>
    <div class="cars">
        <?php 
        for ($i = 0; $i < $num; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo "<div class='car'>";
            echo "<img src='" . $row['image'] . "' style='width: 100px; height: 60px'>";
            echo "<div class='right'>";
            echo "<div class='title'>" .$row['maker']. ' ' .$row['model']. '</div>';
            echo "<div class='attributes'>";
            echo "<div class='row'><div class='name'>Price:</div><div>"  .$row['price']. '$</div></div>';
            echo "<div class='row'><div class='name'>Year:</div><div>" .$row['year']. '</div></div></div></div></div>'; 
    }
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>