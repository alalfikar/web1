<?php
$conn = mysqli_connect('localhost','root','','dbartezco');
class Koneksi {
		var $kon = null;
		public function __construct() {
			try{
				$this->kon = new PDO("mysql:host=localhost;dbname=dbartezco","root","");
				$this->kon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
				die("Connection error" .$e->getMessage);
			}
		}
		function getSelect($table, $column ="*") {
			$query =$this->kon->prepare("select $column from $table");
			$query->execute();
			return $query;
		}
		function getNur($query) {
			return $data = $query->rowCount();
		}
		function getPost($p, $a = "") {
			return isset($_POST["$p"])?$_POST["$p"]:"$a";
		}
		function getSession($p, $a = "") {
			return isset($_SESSION["$p"])?$_SESSION["$p"]:"$a";
		}
		function getAlert($alert) {
			echo "<script>('$alert')</script>";
		}
		function getRedirect($redirect) {
			echo "<script>location.href='$redirect'</script>";
		}
	}
	$koneksi = new koneksi();
?>

