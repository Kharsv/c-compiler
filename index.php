<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>web-based code compiler</title>
	
	
	<link rel="stylesheet" href="src/prism-vsc-dark-plus.css" />
	
	<link rel="stylesheet" href="prism-live.css">
	<link rel="stylesheet" href="src/prism-line-numbers.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>


<main>
	<div id="content">
		<div class=fakeMenu>
			<div class="fakeButtons fakeClose"></div>
			<div class="fakeButtons fakeMinimize"></div>
			<div class="fakeButtons fakeZoom"></div>
		</div>
		<div class="fakeScreen">
			<p class="line1">$ edit main.c</p>
	
		<!-- <p id="logout">Click <a href="../logout.php">Here</a> to logout!!</p> -->
		<!-- <table class="code">
			<td class="code">	 -->	
			<form action="compile.php" method="post" id="form">
				<p class="line1">Select Language:</p>
					<select name="language" id="language">
						<option value="c">C</option>
						<option value="cpp">C++</option>
						<option value="java">Java</option>
						<option value="python2.7">Python</option>
						<option value="python3.2">Python3</option>
					</select>
				<br />
				<p class="line2">$ Enter your code here: <span class="cursor1">_</span></p>

				<textarea class="prism-live language-c line-numbers" style="--height: 25em" name="code" rows=15 cols=100 id="code">
#include <stdio.h>
#include <unistd.h>
char ft_putstr( char *str)
{
int i = 0;
while ( str[i] !='\0' && str[i]!='\t' && str[i]!=' ' ) ++i;
write (1, str, i);
return (0);
}

int main ( int argc, char **argv)
{
if ( argc >= 1) ft_putstr( argv[1]);
write (1, "\n", 1);
return(0);
}
				</textarea>
				<p class="line4">Output here:</p>	
					<span id="output"></span>
					<p class="line4">$>
						<span id="errorCode" class="error"></span>
						<span id="output"></span>
						<span class="cursor4">_</span>
					</p>
					
					<p class="line4">Input here:</p>
					<textarea class="prism-live language-с" style="--height: 5em" name="input" rows=5 cols=100 id="input"></textarea>
					<input type="submit" value="Run" id="submit">
					<input type="reset" value="Submit">
					
				</form>	
                <!-- <form class="show_next_task" action="" method="POST">
					<input type="submit" value="Next" id="link">
				</form> -->
				<div class="counter"><span>Exam subject:</span> <span id="counter">0</span></div>
				<!-- <a href="#" title="Click me" id="link">Click me</a> -->
			<!-- <div class="otvet2"></div> -->
			<form class="show_next" action="" method="POST">
				<input type="submit" value="Next" id="link">
			</form>
			<pre><code><div class="counter"><span id="counter"><?= $data ?></span></div></code></pre>
			<div class="otvet3"></div>
		</div>
	</div>

</main>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/compile.js"></script>
<script type="text/javascript" src="js/tab.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript">
	$(document).ready(function() { 
		$('#form2').ajaxForm(function(msg) { 
			$('#output2').html(msg); 
		}); 
	});
</script>

<script src="https://blissfuljs.com/bliss.shy.min.js"></script>
<script src="src/prism.js"></script>
<script src="src/prism-line-numbers.js"></script>
<script src="src/prism-live.js"></script>
<script src="src/prism-live-markup.js"></script>
<script src="src/prism-live-css.js"></script>
<script src="src/prism-live-javascript.js"></script>
<script src="index.js"></script>
<!-- <script src="js/jquery-3.3.1.min.js"></script> -->
<script src="main.js"></script>
</body>
</html>
