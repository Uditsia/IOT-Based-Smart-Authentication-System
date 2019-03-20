<?php
	$page = $_SERVER['PHP_SELF'];
	$sec = "20";
	?>


		<?php

				$handler = new PDO('mysql:host=localhost;dbname=iotdb','iotuser','iotpass54321');

				
				$gasvalue = 0;
				$fan = 0;
				$buzzer = 0 ; 
                
				$sql1 = 'SELECT * FROM `Gasmonitoring` where sensorid=1 order by id DESC limit 1';
				$query1 = $handler -> query($sql1);
				while($record = $query1 -> fetch()){
					$gasvalue=$record['value'];
					$fan=$record['fan'];
					$buzzer=$record['buzzer'];
				}
				
				
				
				
               /*
		
                $sql2 = 'SELECT * FROM `Gasmonitoring` where sensorid=2 order by id DESC limit 1';
				$query2 = $handler -> query($sql2);
				while($record = $query2 -> fetch()){
					$fan=$record['value'];
				}

                
               	 
		

                $sql3 = 'SELECT * FROM `Gasmonitoring` where sensorid=3 order by id DESC limit 1';
				$query3 = $handler -> query($sql3);
				while($record = $query3 -> fetch()){
					$buzzer=$record['value'];
				} 
		*/
?>				
				
	<html>

<head>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>GAS MONITORING STATUS</title>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="594" background="blur-background-2880x1800-spectrum-electromagnetic-4k-901.jpg">
  <tr>
    <td width="100%" height="109" bordercolor="#C0C0C0" colspan="6">
    <p align="center"><font size="6" face="Kristen ITC">
    <span style="font-weight: 700">GAS MONITORING STATUS</span></font></td>
  </tr>
  <tr>
    <td width="100%" height="109" colspan="6">
    <p align="center"><b><font size="6">DASHBOARD</font></b></td>
  </tr>
  <tr>
    <td width="17%" height="51">&nbsp;</td>
    <td width="17%" height="51" bgcolor="#3366FF">
    <p align="center"><b>GAS STATUS</b></td>
    <td width="17%" height="51" bgcolor="#3366FF">
    <p align="center"><b>GAS VALUE</b></td>
    <td width="17%" height="51" bgcolor="#3366FF">
    <p align="center"><b>BUZZER STATUS</b></td>
    <td width="16%" height="51" bgcolor="#3366FF">
    <p align="center"><b>FAN STATUS</b></td>
    <td width="16%" height="51">&nbsp;</td>
  </tr>
  <tr>
    <td width="17%" height="109">&nbsp;</td>
    <td width="17%" height="109" bgcolor="#808000">
    <p align="center"><b><?php 
										echo $gasvalue;  
						?>
									DETECTED</b></td>
    <td width="17%" height="109" bgcolor="#808000" align="center"><b>
						<?php 
										echo $gasvalue;  
						?>720 PPM</b></td>
    <td width="17%" height="109" bgcolor="#808000" align="center"><b>
						<?php 
										echo   $fan;

										if ($fan==1)
										{
										echo "<br>ON";
										}
										else
										{
										echo "<br>OFF";
										}	


						?></b></td>
    <td width="16%" height="109" bgcolor="#808000" align="center"><b>
						
						<?php 
										echo $buzzer;

										if ($buzzer==1)
										{
										echo "<br>ON";
										}
										else
										{
										echo "<br>OFF";
										}
 
						?></b></td>
    <td width="16%" height="109">&nbsp;</td>
  </tr>
  <tr>
    <td width="100%" height="108" colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td width="100%" height="108" colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td width="100%" height="108" colspan="6">&nbsp;</td>
  </tr>
</table>

</body>

</html>
