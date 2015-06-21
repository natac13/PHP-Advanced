<?php


class Log {

// it is good practice to name my private and protected variables with the
// underscore at the beginning
    private $_fileName;
    private $_data;

/**
 * Writes to a file as an logger
 * @param  string $strFileName The name of a file
 * @param  string $data        Data that will be appended to the file
 */
    public function write($strFileName, $inputData) {
        // set class variables
        $this->_fileName = $strFileName;
        $this->_data = $inputData;

        // checks data
        $this->_checkPermission();
        $this->_checkData();

        // this opens a file in append mode, also creates due to +
        $workingFile = fopen($strFileName, 'a+');

        fwrite($workingFile, "\n\r" . $inputData);
        fclose($workingFile);
    }
/**
 * Reading a file
 * @param  string $strFileName File to read from
 * @return string              This is the contents of the file
 */
    public function read($strFileName) {
        $this->_fileName = $strFileName;

        $this->_checkExists();

        $workingFile = fopen($strFileName, 'r');
        return file_get_contents($strFileName);
    }
/**
 * Checks to see if the file exists before being used
 */
    private function _checkExists() {
        if(!file_exists($this->_fileName)) {
            die("The file does not exists. Please create " . $this->_fileName
                . " before you read from it.");
        }
    }

    private function _checkPermission() {
        if(!is_writable($this->_fileName)) {
            die("Change your CHMOD permission to " . $this->_fileName);
        }
    }

    private function _checkData() {
        if(strlen($this->_data) < 1) {
            die("You must have a string of more then 1 character to write.");
        }
    }
}
?>