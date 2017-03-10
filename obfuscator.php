<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="about" content="For Obfuscating Php Code Given" />
        <meta name="author" content="An0n 3xPloiTeR, Umar Arfeen Shah" />
        <meta name="description" content="For Obfuscating the Php Code given" />
        <meta name="keywords" content="Obfuscator, index.php, Tool" />
        <meta http-equiv="refresh" content=""><!-- For Refreshing The Page After ____ intervals of time -->
		<meta name="revisit-after" content="1 days" />
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
			function box() {
				alert ("Php Obfuscator By An0n 3xPloiTeR");
				alert ("Although There Are No Rights But You Aren't Supposed To Copy My Code :P");
				alert ("Got Your Ip: <?php $ip = $_SERVER['REMOTE_ADDR']; echo $ip; ?> And Reported to An0n 3xPloiTeR :-)");
				return false;
			} document.oncontextmenu = box;
		</script>
		<style>
			body {
				background-color: black;
			}
			textarea {
				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black; 
			}
			input {
				color: white;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black; 
			}
			select {
				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black;
			}
			option {
				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black;
			}
			footer {
				font-family: cursive;
				color: white;
				font-size: 120%;
				text-align: center;
				text-transform: capitalize;
				position: fixed;
				bottom: 1vh;
				left: 0vh;
				right: 0vh;
			}
			a {
				text-decoration: none;
				color: white;
			}
			a:hover {
				color: red;
			}
			/*
			a:visited {
				color: pink;
			}
			*/
			.heading {
				margin-top: 1vh;
				color: red;
				font-family: cursive;
				font-size: 300%;
				text-align: center;
			}
			.subheading {
				margin-top: 1vh;
				color: white;
				font-family: Comic Sans Ms;
				font-size: 170%;
				text-align: center;
				text-transform: capitalize;
			}
			.input {
				margin-top: 10vh;
				text-align: center;
			}
			.footer {
				font-family: cursive;
				color: white;
				text-align: center;
				text-transform: capitalize;
				position: fixed;
				bottom: 0vh;
				left: 0vh;
				right: 0vh;
			}
		</style>
	</head>

	<body>
		<div class="heading">
			<font>Php Obfuscator By An0n 3xPloiTeR</font>
		</div>
		<div class="subheading">
			<font>It obfuscates the given php code :-)</font>
		</div>
		<div class="input">
			<form action="" method="POST">
				<textarea rows="9" cols="85" type="text" name="php" placeholder="Input Php Code Here"></textarea><br><br>
				<select name="option">
					<option>Weak Obfuscation</option>
					<option>Medium Level Obfuscation</option>
					<option>Strong Obfuscation</option>
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
							$final = strrev(base64_encode(gzdeflate(gzcompress($phpcode))));
							$obfuscated_code = $final;

							switch ($option) {
								case 'Weak Obfuscation':
									echo '
<textarea rows="9" cols="85">
<?php
/*
		The Given Code Was Successfully Obfuscated By An0n 3xPloiTeR\'s Obfuscator :-)
						From : '.$all_in_one.'
									Thanks For Using :D
							Dont Forget To Like And Share <3
		Dont Change The Variables Names And If You Change Obfuscated Code Wont Work Properly :-)
							Changing Author\'s Name Wont Make You The Author :) ^_^
									  #RespectCoders 
								!!! ~ By An0n 3xPloiTeR ~ !!!
*/
$UeXploiT = "ZXZhbCUyOCUyNyUzRiUyNmd0JTNCJTI3Lmd6dW5jb21wcmVzcyUyOGd6aW5mbGF0ZSUyOGJhc2U2NF9kZWNvZGUlMjhzdHJyZXYlMjglMjRBbjBuXzN4UGxvaVRlUiUyOSUyOSUyOSUyOSUyOSUzQg==";
$An0n_3xPloiTeR = "'.$obfuscated_code.'";
eval(htmlspecialchars_decode(urldecode(base64_decode($UeXploiT))));
exit;
?></textarea>
';
								break;

								case 'Medium Level Obfuscation':
									$obfuscate_medium_level = strrev(base64_encode(gzdeflate(gzdeflate(gzcompress($phpcode)))));
									echo '<textarea rows="9" cols="85">
<?php
/*
		The Given Code Was Successfully Obfuscated By An0n 3xPloiTeR\'s Obfuscator :-)
						From : '.$all_in_one.'
									Thanks For Using :D
							Dont Forget To Like And Share <3
		Dont Change The Variables Names And If You Change Obfuscated Code Wont Work Properly :-)
							Changing Author\'s Name Wont Make You The Author :) ^_^
									  #RespectCoders 
								!!! ~ By An0n 3xPloiTeR ~ !!!
*/
$UeXploiT = "ZXZhbCUyOCUyNyUzRiUyNmd0JTNCJTI3Lmd6dW5jb21wcmVzcyUyOGd6aW5mbGF0ZSUyOGd6aW5mbGF0ZSUyOGJhc2U2NF9kZWNvZGUlMjhzdHJyZXYlMjglMjRBbjBuXzN4UGxvaVRlUiUyOSUyOSUyOSUyOSUyOSUyOSUzQg==";
$An0n_3xPloiTeR = "'.$obfuscate_medium_level.'";
eval(htmlspecialchars_decode(urldecode(base64_decode($UeXploiT))));
exit;
?></textarea>
';

								break;

								case 'Strong Obfuscation':
								$obfuscate_high_level = strrev(base64_encode(gzdeflate(gzdeflate(gzdeflate(gzcompress(gzcompress($phpcode)))))));
									echo '<textarea rows="9" cols="85">
<?php
/*
		The Given Code Was Successfully Obfuscated By An0n 3xPloiTeR\'s Obfuscator :-)
						From : '.$all_in_one.'
									Thanks For Using :D
							Dont Forget To Like And Share <3
		Dont Change The Variables Names And If You Change Obfuscated Code Wont Work Properly :-)
							Changing Author\'s Name Wont Make You The Author :) ^_^
									  #RespectCoders 
								!!! ~ By An0n 3xPloiTeR ~ !!!
*/
$UeXploiT = "ZXZhbCUyOCUyNnF1b3QlM0IlM0YlMjZndCUzQiUyNnF1b3QlM0IuZ3p1bmNvbXByZXNzJTI4Z3p1bmNvbXByZXNzJTI4Z3ppbmZsYXRlJTI4Z3ppbmZsYXRlJTI4Z3ppbmZsYXRlJTI4YmFzZTY0X2RlY29kZSUyOHN0cnJldiUyOCUyNEFuMG5fM3hQbG9pVGVSJTI5JTI5JTI5JTI5JTI5JTI5JTI5JTI5JTNC";
$An0n_3xPloiTeR = "'.$obfuscate_high_level.'";
eval(htmlspecialchars_decode(urldecode(base64_decode($UeXploiT))));
exit;
?></textarea>
';
								break;
							} 
						}
					}
				?>
			</form>
		</div>
		<div class="footer">
			<footer>
				<font>Developed By <a href="https://www.google.com/search?q=An0n 3xPloiTeR" target="_blank">An0n 3xPloiTeR</a></font>
			</footer>
		</div>
	</body>
</html>