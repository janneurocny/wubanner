<?php 
// Author: Jan Neurocny
// emeteo.sk
// https://github.com/bagocina/wubanner

$id = isset($_GET['id']) ? $_GET['id'] : ''; 
$id = strtoupper($id);
$domain = 'https://'.$_SERVER['SERVER_NAME'];
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>HTTPS generator of Wunderground Weather Stickers®</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<style>
		textarea {
			font-size: 12px !important;
		}

		footer {
			padding: 15px 0;
		}
	</style>
</head>

<body>
	<div class="container">

	<?php if ($id == ''): ?>
		<h1 class="text-center pt-4">Wunderground Weather Stickers®</h1>

		<br /><br />

		<p class="text-center pb-4">
			This generator is FREE generator of HTTPS protocol supported Weather Stickers® of Wunderground.com
		</p>

		<form action="index.php" method="get">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Wunderground Station ID" aria-label="Recipient's username" aria-describedby="basic-addon2" name="id">
				<div class="input-group-append">
					<input class="btn btn-outline-success" value="GENERATE" type="submit">
				</div>
			</div>
		</form>

		<p class="text-center pt-4">
			This generator is on <a href="https://github.com/bagocina/wubanner" target="_blank"><i class="fab fa-github"></i> Github</a> under MIT License!
		</p>

	<?php else: ?>
		<h1 class="text-center pt-4"><?=$id;?> Weather Stickers®</h1>

		<br />

		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">
					<img src="<?=$domain;?>/wubanner.php?bannertype=pws250_both&weatherstationcount=<?=$id;?>">
					<br />
					<br />
				</div>
			</div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4">
						<div class="text-center"><h3>English</h3></div>
						<textarea class="form-control" style="min-height: 150px;"><a href="https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=<?=$id;?>"><img src="<?=$domain;?>/wubanner.php?bannertype=pws250&weatherstationcount=<?=$id;?>" width="250" height="150" border="0" alt="Weather Underground PWS <?=$id;?>" /></a></textarea>
					</div>
					<div class="col-sm-4">
						<div class="text-center"><h3>Metric</h3></div>
						<textarea class="form-control" style="min-height: 150px;"><a href="https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=<?=$id;?>"><img src="<?=$domain;?>/wubanner.php?bannertype=pws250_metric&weatherstationcount=<?=$id;?>" width="250" height="150" border="0" alt="Weather Underground PWS <?=$id;?>" /></a></textarea>
					</div>
					<div class="col-sm-4">
						<div class="text-center"><h3>Both</h3></div>
						<textarea class="form-control" style="min-height: 150px;"><a href="https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=<?=$id;?>"><img src="<?=$domain;?>/wubanner.php?bannertype=pws250_both&weatherstationcount=<?=$id;?>" width="250" height="150" border="0" alt="Weather Underground PWS <?=$id;?>" /></a></textarea>
					</div>
				</div>
			</div>
		</div>

		<br /><br />

		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">
					<img src="<?=$domain;?>/wubanner.php?bannertype=wxstnsticker_both&weatherstationcount=<?=$id;?>">
					<br />
					<br />
				</div>
			</div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4">
						<div class="text-center"><h3>English</h3></div>
						<textarea class="form-control" style="min-height: 150px;"><a href="https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=<?=$id;?>"><img src="<?=$domain;?>/wubanner.php?bannertype=wxstnsticker&weatherstationcount=<?=$id;?>" width="250" height="150" border="0" alt="Weather Underground PWS <?=$id;?>" /></a></textarea>
					</div>
					<div class="col-sm-4">
						<div class="text-center"><h3>Metric</h3></div>
						<textarea class="form-control" style="min-height: 150px;"><a href="https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=<?=$id;?>"><img src="<?=$domain;?>/wubanner.php?bannertype=wxstnsticker_metric&weatherstationcount=<?=$id;?>" width="250" height="150" border="0" alt="Weather Underground PWS <?=$id;?>" /></a></textarea>
					</div>
					<div class="col-sm-4">
						<div class="text-center"><h3>Both</h3></div>
						<textarea class="form-control" style="min-height: 150px;"><a href="https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=<?=$id;?>"><img src="<?=$domain;?>/wubanner.php?bannertype=wxstnsticker_both&weatherstationcount=<?=$id;?>" width="250" height="150" border="0" alt="Weather Underground PWS <?=$id;?>" /></a></textarea>
					</div>
				</div>
			</div>
		</div>

		<br /><br />

		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">
					<img src="<?=$domain;?>/wubanner.php?bannertype=WeatherStationCount&weatherstationcount=<?=$id;?>">
					<br />
					<br />
				</div>
			</div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-4">
						<div class="text-center"><h3>Classic</h3></div>
						<textarea class="form-control" style="min-height: 150px;"><a href="https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=<?=$id;?>"><img src="<?=$domain;?>/wubanner.php?bannertype=WeatherStationCount&weatherstationcount=<?=$id;?>" width="250" height="150" border="0" alt="Weather Underground PWS <?=$id;?>" /></a></textarea>
					</div>
					<div class="col-sm-4">
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	</div>

	<footer class="text-center">
		<hr />
		<a href="#" data-toggle="modal" data-target="#how-it-works">How it works?</a> | <a href="https://github.com/bagocina/wubanner" target="_blank"><i class="fab fa-github"></i> Github</a><br />
		Weather Underground (WU), Wunderground, WU logo and Weather Stickers are owned by <a href="https://www.wunderground.com" target="_blank">The Weather Company, LLC, an IBM Business</a> |
		This page IS NOT owned and operated by <a href="https://www.wunderground.com" target="_blank">The Weather Company, LLC, an IBM Business</a><br />
		This generator was developed by <a href="https://emeteo.sk" target="_blank">eMeteo.sk</a> | <a href="https://emeteo.sk" target="_blank">eMeteo.sk</a> has no responsibility for the use of this site. 
	</footer>

	<!-- How it works modal -->
	<div class="modal fade" id="how-it-works" tabindex="-1" role="dialog" aria-labelledby="how-it-works-label" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="how-it-works-label">How it works?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>
					<a href="https://www.wunderground.com" target="_blank">Wunderground</a> doesn't support secured HTTPS protocol for their Weather Strickers&reg;, so they not works
					on secured sites. Until Wunderground resolve this error, we've decided to develop a script that will keep Weather Stickers running on HTTPS sites.
					Our PHP script get Wunderground Weather Sticker&reg via PHP <em>file_get_contents</em> function and directly show as image.
				</p>
				<p>
					This script is for FREE on <a href="https://github.com/bagocina/wubanner" target="_blank"><i class="fab fa-github"></i> Github</a> under MIT License and everyone can use it on own web hosting with own HTTPS certificate.
				</p>
				<p>
					Developers of this script has no responsibility for the use of this script and site. 
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
	</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>
