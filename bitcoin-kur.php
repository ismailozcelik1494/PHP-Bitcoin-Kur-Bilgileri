<?php $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/kripto.json'), true); ?>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<title>Kripto Paralar</title>
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/embed-css.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <script src="assets/js/jquery_all.js"></script>
    <script type="text/javascript" src="assets/js/marquee.min.js"></script>
</head>
<body>
	<div class="renk-siyah">
		<div class="sitene-ekle kripto ekle-stil-4"><div style="width: 100000px; margin-left: 1901px; animation: 48.4145s linear 0s 1 normal none running marqueeAnimation-9652782;" class="js-marquee-wrapper"><div class="js-marquee" style="margin-right: 50px; float: left;">
			<div class="ekle-ic">
				<ul class="ekle-head">
					<li class="col-1">Birim Adı</li>
					<li class="col-2"></li>
					<li class="col-3">Fiyat</li>
					<li class="col-ara"></li>
					<li class="col-4">Yön</li>
					<li class="col-5">Değişim (%)</li>
					<li class="col-6 c-chevron-up"></li>
				</ul>
				<ul>
				<li class="col-1"><span class="flag-img"><img height="21" width="21" src="assets/img/flag/BTC.svg"></span><span class="ekle-kod">BTC</span><span class="ekle-try">/USD<span></span></span></li>
				<li class="col-2">Bitcoin</li>
				<li class="col-3">Satış: <?php echo $JSON['BTC']['satis']; ?> $</li>
				<li class="col-ara"></li>
				<li class="col-4 c-chevron-down"><i class="fas fa-chevron-down"></i></li>
				<li class="col-5 c-chevron-down">Alış: <?php echo $JSON['BTC']['alis']; ?></li>
				<li class="col-6 c-chevron-down">Değişim: <?php echo $JSON['BTC']['degisim']; ?>%</li>
			</ul><ul>
				<li class="col-1"><span class="flag-img"><img height="21" width="21" src="assets/img/flag/ETH.svg"></span><span class="ekle-kod">ETH</span><span class="ekle-try">/USD<span></span></span></li>
				<li class="col-2">Ethereum</li>
				<li class="col-3">Satış: <?php echo $JSON['ETH']['satis']; ?> $</li>
				<li class="col-ara"></li>
				<li class="col-4 c-chevron-down"><i class="fas fa-chevron-down"></i></li>
				<li class="col-5 c-chevron-down">Alış: <?php echo $JSON['ETH']['alis']; ?></li>
				<li class="col-6 c-chevron-down">Değişim: <?php echo $JSON['ETH']['degisim']; ?>%</li>
			</ul><ul>
				<li class="col-1"><span class="flag-img"><img height="21" width="21" src="assets/img/flag/XRP.svg"></span><span class="ekle-kod">XRP</span><span class="ekle-try">/USD<span></span></span></li>
				<li class="col-2">Ripple</li>
				<li class="col-3">Satış: <?php echo $JSON['XRP']['satis']; ?> $</li>
				<li class="col-ara"></li>
				<li class="col-4 c-chevron-down"><i class="fas fa-chevron-down"></i></li>
				<li class="col-5 c-chevron-down">Alış: <?php echo $JSON['XRP']['alis']; ?></li>
				<li class="col-6 c-chevron-down">Değişim: <?php echo $JSON['XRP']['degisim']; ?>%</li>
			</ul><ul>
				<li class="col-1"><span class="flag-img"><img height="21" width="21" src="assets/img/flag/BCH.svg"></span><span class="ekle-kod">BCH</span><span class="ekle-try">/USD<span></span></span></li>
				<li class="col-2">Bitcoin Cash</li>
				<li class="col-3">Satış: <?php echo $JSON['BCH']['satis']; ?> $</li>
				<li class="col-ara"></li>
				<li class="col-4 c-chevron-down"><i class="fas fa-chevron-down"></i></li>
				<li class="col-5 c-chevron-down">Alış: <?php echo $JSON['BCH']['alis']; ?></li>
				<li class="col-6 c-chevron-down">Değişim: <?php echo $JSON['BCH']['degisim']; ?>%</li>
			</ul><ul>
				<li class="col-1"><span class="flag-img"><img height="21" width="21" src="assets/img/flag/LTC.svg"></span><span class="ekle-kod">LTC</span><span class="ekle-try">/USD<span></span></span></li>
				<li class="col-2">Litecoin</li>
				<li class="col-3">Satış: <?php echo $JSON['LTC']['satis']; ?> $</li>
				<li class="col-ara"></li>
				<li class="col-4 c-chevron-down"><i class="fas fa-chevron-down"></i></li>
				<li class="col-5 c-chevron-down">Alış: <?php echo $JSON['LTC']['alis']; ?></li>
				<li class="col-6 c-chevron-down">Değişim: <?php echo $JSON['LTC']['degisim']; ?>%</li>
			</ul>
			</div>
		</div>
    </div>
	</div>
	</div>
<script src="assets/js/embed-js.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-174553798-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174553798-4');
</script>

</body>
</html>