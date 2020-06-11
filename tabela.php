<?php

	$glosy = array("Henio" => 0, "Mietek" => 0, "Wajha" => 0, "Kos" => 0, "NoName" => 0);


	$host = "localhost";
        $username = "dkulikowski";
        $password = "dupadupa";
        $dbname = "dkulikowski_szkola";

        $mariadb = mysqli_connect($host, $username, $password, $dbname);
	$sql = "SELECT vote, COUNT(*) FROM votes GROUP BY vote";

        if(!$mariadb)
        {
                die('<div class="alert alert-danger" role="alert">Połączenie nie powiodło się!</div>');

        }
        else
        {
                echo('<div class="alert alert-success" role="alert">Połączenie powiodło się</div>');

        }
function sql(){

	global $mariadb, $host, $username, $password, $dbname, $sql;

	if($result = mysqli_query($mariadb, $sql))
	{
	for ($i = 0; $i < mysqli_num_rows($result); $i++)
	{

	$row = mysqli_fetch_row($result);
	echo $row[0]."<br>".$row[1]."<br>";
	}

	}else{
	echo "error: ".mysqli_error();
	}


        $mariadb->close();


}

sql();

?>


<!DOCTYPE html>
<html>

<head>

        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>

<h1>Wyniki Głosowania</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nazwisko</th>
      <th scope="col">Wynik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <!-- th scope="row">1</th -->
      <td>Henio</td>
      <td><?php echo $glosy["Henio"] ?></td>
    </tr>
    <tr>
      <!-- th scope="row">2</th -->
      <td>Mietek</td>
      <td><?php echo $glosy["Mietek"] ?></td>
    </tr>
    <tr>
      <!-- th scope="row">3</th -->
      <td>Wajha</td>
      <td><?php echo $glosy["Wajha"] ?></td>
    </tr>
    <tr>
      <!-- th scope="row">4</th -->
      <td>Kos</td>
      <td><?php echo $glosy["Kos"] ?></td>
    </tr>
    <tr>
      <!-- th scope="row">5</th -->
      <td>NoName</td>
      <td><?php echo $glosy["NoName"] ?></td>
    </tr>
  </tbody>
</table>

		<!-- <div class="alert alert-success" role="alert">                                                                                                                                                                                                                                    A simple success alert with  Give it a click if you like.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                </div>

                <div class="alert alert-danger" role="alert">
                        A simple success alert with  Give it a click if you like.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                </div> -->




</body>
