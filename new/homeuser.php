
<!DOCTYPE html>
<html>
 <head>
<title>Home[Artez.co]</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="dmo4.css" />
  <script src="jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/twd_slideshow.js"></script>
  <link rel="stylesheet" href="css/slide.css">
 <style type="text/css">

 </style>
 </head>
 <body>
 
 <?php include 'resource/headeruser.php'; ?>  
 <div class="container">
<div class="header">
		<h1>Trending Manga</h1>
		<section>
    <h3>On This Spring</h3>
    <div id="twd_opa" class="shadow">
      <a href="tokyo.php"><img class='opaque' src="images/4.jpg" ></a>
      <a href="fate.php"><img src="images/2.jpg" ></a>
      <a href="sanpaku.php"><img src="images/3.jpg" ></a>
      <a href="one.php"><img src="images/1.jpg" ></a>
    </div>

    <p id="twd_opa_controls">
      <span class="selected"><img src="images/asd7.png" width="2%"></span>
      <span><img src="images/asd7.png" width="2%"></span>
      <span><img src="images/asd7.png" width="2%"></span>
      <span><img src="images/asd7.png" width="2%"></span>
    </p>
  </section>
	</div> <!--/ .header -->

	<div class="main">
		
		

		<div class="middle">
			<h3> News</h3>
			<p><strong><a href="#" target="_blank"><u>New Release! Fate/stay night: Heaven's Feel II. lost butterfly (2018) PV</a></strong></u><br> – Hallo para pengunjung Artez.co, pertama-tama Admin ingin mengucapkan terima kasih telah berkunjung, semoga website ini dapat terus maju dan bermanfaat bagi kalian. Kali ini kita akan membahas mengenai film...<a href="#"><u>Lanjutkan membaca</u></a></p>
			<p><img src="images/fate-stay-night-heavens-feel.jpg" alt="heavens feel" width="80%"></p><HR WIDTH=100% SIZE=1 NOSHADE>
			<p><a href="#"><u>“My Hero Academia: One’s Justice” Akan Rilis di PC</a></u><br> Jika Anda belum pernah menonton anime atau membaca manga ini dan tengah mencari konten seru untuk memenani waktu liburan panjang akhir tahun Anda, maka kami tidak bisa lagi merekomendasikan My Hero Academia aka Boku no Hero Academia. Kisah pertarungan...<a href="#"><u>Lanjutkan membaca</u></a> </p>
			<p><img src="images/one-justice.jpg" alt=""></p>

		</div> <!--/ .middle -->

		<div class="right">
			<h3>Contact</h3>
			<p>Empty</p>
			<h3>Another Article</h3>
			<p>
				<ul>
					<li><a href="http://www.tutorial-webdesign.com/pengenalan-responsive-web-design/">List Most Popular Manga Summer 2018.</a></li>
					<li><a href="http://www.tutorial-webdesign.com/kegunaan-manfaat-responsive-web-design/">Top Recomended Romance Manga 2018.</a></li>
					<li><a href="http://www.tutorial-webdesign.com/6-tips-untuk-membuat-website-responsive/">List Manga Yang Akan Dibuat Versi Anime!</a></li>
					
				</ul>
			</p>
		</div> <!--/ .right -->

	</div> <!--/ .main -->

	<div class="footer">
		<h4>Created by</h4>
		<p>Copyright &copy; 2018 Acselax Kazz</a></p>
	</div> <!--/ .footer -->
 </div>
 <script type="text/javascript">
  $(window).scroll(function(){
  if ($(window).scrollTop() >= 300) {
   $('nav').addClass('fixed-header');
  }
  else {
   $('nav').removeClass('fixed-header');
  }
 });
 </script>
 
 </body>
</html>