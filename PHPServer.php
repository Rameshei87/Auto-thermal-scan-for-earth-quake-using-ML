<?php
$port = $argv[2];
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

if (!socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1)) {
    echo 'Unable to set option on socket: '. socket_strerror(socket_last_error()) . PHP_EOL;
}

socket_bind($socket, '10.30.152.85', $port);
socket_listen($socket);

if(isset($argv[1]))
	$delay = $argv[1];
else
	$delay = 0;

if(isset($argv[3]))
	$response = $argv[3].";";
else
	$response = "Failure;";

while(true)
{
	if(($newc = socket_accept($socket)) !== false)
	{
		file_put_contents("Server.log", "Client {$newc} has connected\n", FILE_APPEND);

		$pid = pcntl_fork();
		if(-1 == $pid)
		{
			die('Could not fork.');
		}
		else if($pid)
		{
			// we are the parent
			// pcntl_wait($status); // Protect against Zombie children
			socket_close($newc);
		} 
		else
		{
			// we are the child
			socket_close($socket);

			while($input = socket_read($newc, 1024))
			{
				sleep($delay);

				socket_write($newc, $response);
				file_put_contents("Server.log", "Client {$newc} :: Input : {$input}\n", FILE_APPEND);
				echo "Request mml recieved --".$input."\n";
				file_put_contents("Server.log", "Client {$newc} :: Output : {$response}\n", FILE_APPEND);
				echo "Response sent --".$response."\n";
				echo "\n";
			}
			exit;
		}
	}
}
?>
