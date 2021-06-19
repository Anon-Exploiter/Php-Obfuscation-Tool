<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>PhP Code Obfuscator</title>
		<meta name="about" content="For Obfuscating Php Code Given" />
		<meta name="author" content="An0n 3xPloiTeR" />
		<meta name="description" content="For Obfuscating the Php Code given" />
		<meta name="keywords" content="Obfuscator, index.php, Tool" />
		<meta http-equiv="refresh" content="">
		<meta name="language" content="en" />
		<meta content='general' name='rating' />
		<meta content='google' name='generator' />
		<meta content='follow,all' name='msnbot' />
		<meta content='follow,all' name='alexabot' />
		<meta content='pakistan' name='geo.placename' />
		<meta content="index,follow,all" name="googlebot" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name='search engines' content='Aeiwi,Alexa,AllTheWeb,AltaVista,AOLNetfind,Anzwers,Canada,DirectHit,EuroSeek,Excite,Overture,Go,Google,HotBot InfoMak,Kanoodle,Lycos,MachineSite,National Directory,Northern Light,SearchIt,SimpleSearch,WebsMostLinked,WebTop,What-U-Seek,AOL,Yahoo,WebCrawler,Infoseek,Excite,Magellan,LookSmart,bing,CNET,Googlebot' />
		<script>
			function _alert() {
				alert("Php Obfuscator By An0n 3xPloiTeR");
				alert("Although There Are No Rights But You Aren't Supposed To Copy HTML too! :P");
				return false;
			} document.oncontextmenu = _alert;
		</script>
		<style>
			body {
				background-color: #080510;
			}
            a {
                color: red;
                text-decoration: none;
            }
            a:hover {
                color: teal;
            }
            .heading {
                text-align: center;
                font: 300% impact;
                margin-top: 1vh;
            }
			.subheading {
				margin-top: 1vh;
				color: lawngreen;
				font-family: Comic Sans Ms;
				font: 170% impact;
				text-align: center;
				text-transform: capitalize;
			}
			.input {
				margin-top: 10vh;
				text-align: center;
			}
            .footer {
                text-align: center;
                font: 25px impact;
                color: white;
                position: fixed;
                bottom: 0vh;
                left: 0vh;
                right: 0vh;
            }
			textarea {
				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: #080510; 
			}
			input {
				color: white;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: #080510; 
			}
			select {
				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: #080510;
			}
			option {
				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: #080510;
			}
		</style>
	</head>

	<body>
        <div class="heading">
            <font>
                <span style="color: white;">Php Obfuscator By</span> 
                <span style="color: red;">An0n 3xPloiTeR</span>
            </font>
        </div>
		<div class="subheading">
			<font>It Obfuscates The Given Php Code, yes, just that!</font>
		</div>
		<div class="input">
			<form action="" method="POST">
				<textarea rows="9" cols="85" type="text" name="php" placeholder="Input Php Code Here"></textarea><br><br>
				<select name="option">
					<option>Weak Obfuscation</option>
					<option>Medium Level Obfuscation</option>
					<option>Strong Obfuscation</option>
					<option>High Level Obfuscation</option>
				</select><br><br><br>
				<input type="submit" name="submit" value="Submit" /><br>
				<?php
					if (isset($_POST['submit'])) {
					$phpcode = $_POST['php'];
						if (!empty($phpcode)) {
							$option = htmlspecialchars($_POST['option']);
							$website = "http://".$_SERVER['HTTP_HOST'];
							$file_location = $_SERVER['REQUEST_URI'];
							$all_in_one = $website.$file_location;
							$uuencode = base64_encode(convert_uuencode($phpcode));
							$obfuscate_low_level = strrev(base64_encode(gzdeflate(gzcompress($phpcode))));
							$obfuscate_medium_level = strrev(base64_encode(gzdeflate(gzdeflate(gzcompress($phpcode)))));
							$obfuscate_high_level = strrev(base64_encode(gzdeflate(gzdeflate(gzdeflate(gzcompress(gzcompress($phpcode)))))));
							$high_level = strrev(base64_encode(gzcompress(gzdeflate(gzcompress(gzdeflate(gzcompress(gzdeflate(gzcompress(gzdeflate(str_rot13($phpcode)))))))))));
							$high_level_1 = str_replace('a', '\x61', $high_level);
							$high_level_2 = str_replace('A', '\x41', $high_level_1);
							$high_level_3 = str_replace('b', '\x62', $high_level_2);
							$high_level_4 = str_replace('B', '\x42', $high_level_3);
							$high_level_5 = str_replace('c', '\x63', $high_level_4);
							$high_level_6 = str_replace('C', '\x43', $high_level_5);
							$high_level_7 = str_replace('=', '\x3d', $high_level_6);
							$high_level_8 = str_replace('+', '\x2b', $high_level_7);
							switch ($option) {	
								case 'Weak Obfuscation':
									echo '
<textarea rows="9" cols="85">
<?php
$stt1 = "Sy1LzNFQt7dT10uvKs1Lzs8tKEotLtZIr8rMS8tJLEnVSEosTjUziU9JT\x635PSdUoLikqSi3TU\x43kuKTHQ\x42\x41Fr\x41\x41\x3d\x3d";
$stt0 = "'.$obfuscate_low_level.'";
eval(htmlspecialchars_decode(gzinflate(base64_decode($stt1))));
?></textarea><br><br>
';
								break;

								case 'Medium Level Obfuscation':
									echo '<textarea rows="9" cols="85">
<?php
$stt1 = "Sy1LzNFQt7dT10uvKs1Lzs8tKEotLtZIr8rMS8tJLElFYiUlFqe\x61m\x63Snp\x43\x62np6RqFJ\x63UF\x61WW\x61\x61gUl5QY\x61IK\x42NQ\x41\x3d";
$stt0 = "'.$obfuscate_medium_level.'";
eval(htmlspecialchars_decode(gzinflate(base64_decode($stt1))));
?></textarea><br><br>
';

								break;

								case 'Strong Obfuscation':
									echo '<textarea rows="9" cols="85">
<?php
$stt1 = "Sy1LzNFQsrdT0kuvKs1Lzs8tKEotLtZ\x4142TmpeUklqRiZSUlFqe\x61m\x63Snp\x43\x62np6RqFJ\x63UF\x61WW\x61\x61gUl5QY\x61EK\x42NQ\x41\x3d";
$stt0 = "'.$obfuscate_high_level.'";
eval(htmlspecialchars_decode(gzinflate(base64_decode($stt1))));
?></textarea><br><br>
';
								break;

								case 'High Level Obfuscation':
									echo '<textarea rows="9" cols="85">
<?php
$stt1 = "Sy1LzNFQsrdT0isuKYovyi8xNNZIr8rMS8tJLEkFskrzkvNz\x434pSi4upI5yUWJxqZhKfkpq\x63n5Kq\x41\x62SzKLVMQ6W4pMR\x41EwlY\x41w\x41\x3d";
$stt0 = "'.$high_level_8.'";
eval(htmlspecialchars_decode(gzinflate(base64_decode($stt1))));
?></textarea><br><br>
';
								break;
							} 
						}
					}

// $small      = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUHHMM8iLN64IyMnPDEkN0kQ\x431g\x41\x3d";
// $converted  = htmlspecialchars_decode(gzinflate(base64_decode($small)));

// $replaced   = str_replace('$An0n_3xPloiTeR', '$stt0', $converted);
// $reconv     = base64_encode(gzdeflate($replaced));

// $high_level_1 = str_replace('a', '\x61', $reconv);
// $high_level_2 = str_replace('A', '\x41', $high_level_1);
// $high_level_3 = str_replace('b', '\x62', $high_level_2);
// $high_level_4 = str_replace('B', '\x42', $high_level_3);
// $high_level_5 = str_replace('c', '\x63', $high_level_4);
// $high_level_6 = str_replace('C', '\x43', $high_level_5);
// $high_level_7 = str_replace('=', '\x3d', $high_level_6);
// $high_level_8 = str_replace('+', '\x2b', $high_level_7);

// echo $high_level_8;

				?>
			</form>
		</div>
        <div class="footer">
            <font>
            Developed By 
                <span style="color: red;">An0n 3xPloiTeR</span>
            </font>
        </div>
	</body>
</html>
