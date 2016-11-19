<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portugol Webstudio</title>

	<link rel="shortcut icon" href="https://raw.githubusercontent.com/UNIVALI-LITE/Portugol-Studio/master/src/br/univali/ps/ui/icones/pequeno/light_pix.png">
	<link rel="icon" href="https://raw.githubusercontent.com/UNIVALI-LITE/Portugol-Studio/master/src/br/univali/ps/ui/icones/pequeno/light_pix.png">

	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/ax5ui/ax5ui-layout/master/dist/ax5layout.css?7544f5a6f789ebaf83e5f070a19a881725c16b6f">
	<link rel="stylesheet" type="text/css" href="<?=$siteURL;?>assets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$siteURL;?>assets/portugol.css">
	<link rel="stylesheet" type="text/css" href="<?=$siteURL;?>assets/ide.css">
</head>
<body>
	<div id="ide">
		<ul class="tabs">
			<li><a id="anchor-inicio" href="#tab-inicio">Portugol Webstudio <span class="portugol-icon"></span><span class="spacing-icon"></span><span class="open-icon" onClick="openFile();return false"></span><span class="mini-spacing-icon"></span><span class="add-icon" onClick="addTab();return false"></span></a></li>
		</ul>

		<div class="tab" id="tab-inicio">
			<div class="tab-content">
				<div class="row" id="btl">
					<div class="col-md-3">
						<button onClick="addTab()">
							<img src="https://raw.githubusercontent.com/UNIVALI-LITE/Portugol-Studio/master/src/br/univali/ps/ui/icones/grande/lite/programar.png">
							<span>Programar</span>
						</button>
					</div>
					<div class="col-md-3">
						<a href="javascript:alert('Não implementado.')">
							<img src="https://raw.githubusercontent.com/UNIVALI-LITE/Portugol-Studio/master/src/br/univali/ps/ui/icones/grande/lite/ajuda.png">
							<span>Ajuda</span>
						</a>
					</div>
					<div class="col-md-3">
						<a href="https://www.youtube.com/watch?v=K02TnB3IGnQ&list=PLb9yvNDCid3jQAEbNoPHtPR0SWwmRSM-t" target="_blank" rel="nofollow">
							<img src="https://raw.githubusercontent.com/UNIVALI-LITE/Portugol-Studio/master/src/br/univali/ps/ui/icones/grande/lite/videoaulas.png">
							<span>Videoaulas</span>
						</a>
					</div>
					<div class="col-md-3">
						<a href="javascript:alert('Não implementado.')">
							<img src="https://raw.githubusercontent.com/UNIVALI-LITE/Portugol-Studio/master/src/br/univali/ps/ui/icones/grande/lite/bibliotecas.png">
							<span>Bibliotecas</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="hide" id="special"></div>

	<script type="text/javascript"> window.TextEncoder = window.TextDecoder = null; </script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.5/ace.js"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/ax5ui/ax5core/master/dist/ax5core.min.js?e2df1421a819efa43b46c0cab92940ef4410776d"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/ax5ui/ax5ui-layout/master/dist/ax5layout.min.js?7544f5a6f789ebaf83e5f070a19a881725c16b6f"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/blob-polyfill/1.0.20150320/Blob.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/inexorabletash/text-encoding/master/lib/encoding-indexes.js?192293ea17e775bdd6a66ab85db05f34c5104a34"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/inexorabletash/text-encoding/master/lib/encoding.js?b8503e781cfe62c80582ff36ae467435baa35ba1"></script>
	<script type="text/javascript" src="<?=$siteURL;?>assets/mode-portugol.js"></script>
	<script type="text/javascript" src="<?=$siteURL;?>assets/portugol.js"></script>
	<script type="text/javascript">var d={ajaxUrl:"<?=$ajaxURL;?>",tabs:[],scrollDown:function(tid){var r=d.tabs[tid].output.session.getLength()-1;var c=d.tabs[tid].output.session.getLine(r).length;d.tabs[tid].output.gotoLine(r+1,c)}};</script>
	<script type="text/javascript" src="<?=$siteURL;?>assets/ide.js"></script>
</body>
</html>
