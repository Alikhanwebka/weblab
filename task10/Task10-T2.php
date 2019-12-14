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
    <form action="task10_2_submit.php" style="display: flex" method="get">
        <select name="maker">\
            <option value="-1">Select car</option>
            <option value="-1">Toyota</option>
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
    
</body>
</html>