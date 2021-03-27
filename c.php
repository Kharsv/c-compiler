<?php
	$CC="gcc";
	$out="./a.out";
	$code=$_POST["code"];
	$input=$_POST["input"];
	$filename_code="main.c";
	$filename_in="input.txt";
	$filename_error="error.txt";
	//putenv("PATH=C:\OSPanel\domains\gpp\bin");
	$executable="a.out";
	$command=$CC." -lm ".$filename_code;	
	$command_error=$command." 2>".$filename_error;

	//if(trim($code)=="")
	//die("The code area is empty");
	
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);

	exec("chmod 777 $executable"); 
	exec("chmod 777 $filename_error");
	exec("chmod 777 $file_in");

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($out);
			 echo '<script>';
 			 echo 'console.log('. json_encode( $output ) .')';
  			echo '</script>';
		}
		else
		{
			$out=$out." ".$input;
			$output=shell_exec($out);
			echo '<script>';
			echo 'console.log('. json_encode( $input ) .')';
			echo '</script>';
			echo '<script>';
			echo 'console.log('. json_encode( $output ) .')';
			echo '</script>';
		}
		echo "<pre class='command-line language-powershell' ><code class=' language-powershell'>$output</code></pre>";
	}
	else if(!strpos($error,"error"))
	{
		echo "<pre class='command-line language-powershell' ><code class=' language-powershell'>$error</code></pre>";
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." ".$input;
			$output=shell_exec($out);
		}
		echo "<pre class='command-line language-powershell' ><code class=' language-powershell'>$output</code></pre>";
	}
	else
	{
		echo "<pre class='command-line language-powershell' ><code class=' language-powershell'>$error</code></pre>";
	}
	exec("rm $filename_code");
	exec("rm *.o");
	exec("rm *.txt");
	exec("rm $executable");
?>

