<?php

interface Logger {
    public function logInfo($message);
    public function logWarning($message);
    public function logError($message);
}

class FileLogger implements Logger {
    protected $logFile;

    public function __construct($logFile) {
        $this->logFile = $logFile;
    }

    public function logInfo($message) {
        $this->logToFile("[INFO] " . $message);
    }

    public function logWarning($message) {
        $this->logToFile("[WARNING] " . $message);
    }

    public function logError($message) {
        $this->logToFile("[ERROR] " . $message);
    }

    protected function logToFile($message) {
        file_put_contents($this->logFile, $message . PHP_EOL, FILE_APPEND);
    }
}

class DatabaseLogger implements Logger {
    protected $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function logInfo($message) {
        $this->logToDatabase("[INFO] " . $message);
    }

    public function logWarning($message) {
        $this->logToDatabase("[WARNING] " . $message);
    }

    public function logError($message) {
        $this->logToDatabase("[ERROR] " . $message);
    }

    protected function logToDatabase($message) {
        // Code to log message to the database
        // ...
        print "Logging to database: " . $message . "\n";
    }
}

// Create a FileLogger object
$fileLogger = new FileLogger("log.txt");
$fileLogger->logInfo("This is an information message");
$fileLogger->logWarning("This is a warning message");
$fileLogger->logError("This is an error message");

// Create a DatabaseLogger object
$databaseLogger = new DatabaseLogger("my_database");
$databaseLogger->logInfo("This is an information message");
$databaseLogger->logWarning("This is a warning message");
$databaseLogger->logError("This is an error message");

?>
