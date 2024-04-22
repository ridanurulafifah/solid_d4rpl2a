<?php

include_once ("DBMS.php");

class DBMSconnection {
    public function connect(DBMS $dbms): void {
        $dbms->createConnection();
    }
}