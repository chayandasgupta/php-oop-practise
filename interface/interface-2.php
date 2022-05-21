<?php

interface Logger
{
	public function log($message);
}

class FileLogger implements Logger
{
	private $handle;

	private $logFile;

	public function __construct($filename, $mode = 'a')
	{
		$this->logFile = $filename;
		// open log file for append
		$this->handle = fopen($filename, $mode)
				or die('Could not open the log file');
	}

	public function log($message)
	{
		$message = date('F j, Y, g:i a') . ': ' . $message . "\n";
		fwrite($this->handle, $message);
	}

	public function __destruct()
	{
		if ($this->handle) {
			fclose($this->handle);
		}
	}
}

class DatabaseLogger implements Logger
{
	public function log($message)
	{
		echo sprintf("%s to the database\n", $message);
	}
}

// examle 1
$logger = new FileLogger('./log.txt', 'w');
$logger->log('PHP interfae is awesome');

// example 2
$loggers = [
	new FileLogger('./log.txt'),
	new DatabaseLogger()
];

foreach ($loggers as $logger) {
	$logger->log('Log message');
}
