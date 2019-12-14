<html lang="en">
<head>
<style>
    .cars {
      height: 500px;
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
    }
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
<body style="display: flex">
    <form action="task3.php" style="margin-right: 50px">
      <h1>Admin Page</h1>
      <table>
            <tr>
                <td>Maker: </td>
                <td><input type="text" name="maker">
            </tr>
            <tr>
                <td>Model:</td>
                <td><input type="text" name="model"></td>
            </tr>
            <tr>
                <td>Year:</td>
                <td><input type="number" name="year"></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>Image(URL):</td>
                <td><input type="text" name="url"></td>
            </tr>
        </table>
        <input type="submit" value="Add new">
    </form>
    <div class="cars">
        
    </div>
</body>
</html>