<?php
session_start();
$user = $_POST["user"];

$con = mysqli_connect('localhost','root','', 'chat') or die ("Sem conexão com o servidor");

//$result = mysql_query("SELECT * FROM 'users' WHERE 'name' = '$user'");
$select = "SELECT * FROM users WHERE name = '$user'";
$result = $con->query($select);
//var_dump($result);die; usa para veririfcar o código
// documentação  https://secure.php.net/manual/pt_BR/book.mysqli.php
/*coisa do gustavo 	"Print to console": {
		"prefix": "deb",
		"body": [
			"",
			"echo '<pre>';",
			"print_r($1);",
			"echo '</pre>';",
			"die(\"$1\");",
			""
		],
		"description": "Log output to console"
	}*/

if($result > 0)
    {
        $_SESSION['user']=$user;
        echo "<script>location.href='home.php'</script>";
    }
    else{
        $query = "INSERT INTO 'users' ('name') VALUES ('$user')";
        ($query);
        header("Location: home.php");
    }
    