
<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script>
$(document).ready(function(){
$(".preloader").fadeOut();
})
</script>
	<style type="text/css">
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background-color: #fff;
}
.preloader .loading {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  font: 14px arial;
}
</style>
	<title>Entri Data Nilai Siswa</title>
</head>
<body>
<div class="preloader">
  <div class="loading">
    <img src="poi.gif" width="80">
    <p>Harap Tunggu</p>
  </div>
</div>
	

</body>
</html>