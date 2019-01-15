<?php

App::uses('AppShell', 'Console/Command');
class InsertStaffShell extends AppShell {

    const REMOTE_FILE = "https://docs.google.com/spreadsheets/u/0/d/1CV8mw3IgiR1zgQysgMG8zrA6vj-oapAwHiiULbTv8hE/export?format=csv&id=1CV8mw3IgiR1zgQysgMG8zrA6vj-oapAwHiiULbTv8hE&gid=0";

    public function initialize() {
    }

    public function main(){
        // Temp file name
        $this->tempFile = APP."staff.csv";

        if($this->__copy()){
            $this->__translate();
            $this->__removeTempFile();
        }
    }

    private function __copy(){
        if(!copy(self::REMOTE_FILE, $this->tempFile)){
            $this->out("<error>Error:</error> Cannot to copy file from Google driver");
            return false;
        }
        else
        {
            // Success
            return true;
        }
    }

    private function __removeTempFile(){
        unlink($this->tempFile);
    }

    private function __translate() {
        $connection = new MongoClient();
        $collection = $connection->database->user;

        try{
            $collection->remove();
        } catch (Exception $e) {
            $this->out("<error>Error:</error> Failed to remove data");
            return;
        }

        if($fp = fopen($this->tempFile, "r"))
        {
            $rowNumber = 0;


            while(!feof($fp))
            {
                $line = fgetcsv($fp);

                $rowNumber++;

                if ($rowNumber == 1) {continue;}
                if ($line[1] < 1000) {
                    $line[1] = "0".$line[1];
                }

                try{
                    $arr = array(
                        'name' => $line[2],
                        'code' => (string)$line[1],
                        'prize' => 0
                    );

                    $collection->insert( $arr );
                } catch (Exception $e) {
                    $this->out("<error>Error:</error> Failed to insert dataaa");
                    return;
                }
            }

            fclose($fp);
            $this->out("<info>Successful</info>");
        }
        else
            $this->out("<error>Error:</error> Failed to read file from ".$this->tempFile);
    }
}