<?php

$resid=MySQLi_Connect("localhost", "cvarner5", "cvarner5", "cvarner5");
if(MySQLi_Connect_Errno()) {
	echo "<tr align='center'> <td colspan='5'> Failed to connect to MySQL </td> </tr>";
}
// else {
// }
?> 

<!-- 
Original source: https://github.com/abhn/simple-php-mysql-project 
Licensed under the MIT License
-->

