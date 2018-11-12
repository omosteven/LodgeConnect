<?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
* Change the value of parameter 3 if you have set a password on the root userid
* Add port number 3307 in parameter number 5 to use MariaDB instead of MySQL
*
*     Utilisation de "mysqli" � la place de "mysql" qui est obsol�te.
* Changer la valeur du 3e param�tre si vous avez mis un mot de passe � root
* Ajouter le port 3307 en param�tre 5 si vous voulez utiliser MariaDB
*/
function DBCONNECTION() //create a function to connect to database
{
    $server = '127.0.0.1';
    $user = 'LodgeConnect';
    $password = 'ConnectLodge';
    $dbName = 'lodgeconnect';
    global $Mysqli_database;
    $Mysqli_database = mysqli_connect($server,$user,$password,$dbName);
     if($Mysqli_database) {
            return 'CONNECTION MADE';
            return '<p>Connection OK '. $Mysqli_database->host_info.'</p>';
            return '<p>Server '.$Mysqli_database->server_info.'</p>';
            $Mysqli_database->close();
     } else {
        die('CONNECTION REFUSED,PLEASE CHECK CONNECTION INFO WELL'. mysqli_connect_error());
        die('Connect Error (' . $Mysqli_database->connect_errno . ') '
            . $Mysqli_database->connect_error);
     }
}
$x = DBCONNECTION();

function CREATEMEMBERSHIPTABLE($Mysqli_database)
{  
    $table = "CREATE TABLE if not exists LodgeConnectMembers(
    id INT(6) AUTO_INCREMENT,
    FULLNAME VARCHAR(255) NULL,
    BUSINESSNAME VARCHAR(255) NULL,
    EMAIL VARCHAR(255) NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL,
    TELEPHONE INT(11) NULL,
    CITY VARCHAR(255) NULL, 
    STATE VARCHAR(255) NULL, 
    COUNTRY VARCHAR(255) NULL, 
    ADDRESS VARCHAR(255) NULL, 
    GENDER VARCHAR(255) NULL, 
    WEBSITE VARCHAR(255) NULL,
    CODE_VERIFY INT(255) NULL,
    VERIFY_STATUS INT(1) NULL,
    ONLINE_STATUS INT(1) NULL,
    LAST_SEEN INT(255) NULL,
    INSTITUTION VARCHAR(255) NULL,
    ORG_NAME VARCHAR(255) NULL,
    SELF_JOB VARCHAR(255) NULL,
    PERSONALITY VARCHAR(255) NULL,
    PRIMARY KEY(id)
    )";
    if(mysqli_query($Mysqli_database,$table)) {
        return 'TABLE SUCCESSFULLY CREATED FOR USER';
    } else {
        return 'TABLE UNSUCCESSFULLY CREATED';
    }
}
CREATEMEMBERSHIPTABLE($Mysqli_database);
function CREATEMESSAGETABLE($Mysqli_database)
{
    $table1 = "CREATE TABLE if not exists Messages(
        id INT(6) AUTO_INCREMENT,
        EMAIL VARCHAR(255) NOT NULL,
        FULLNAME VARCHAR(255) NULL,
        CONTACTEMAIL VARCHAR(255) NULL,
        CONTACTMSG VARCHAR(255) NULL,
        FEEDBACKMSG VARCHAR(255) NULL,
        AWARENESS_MEDIUM VARCHAR(255) NULL,
        RATE VARCHAR(255) NULL,
        MSGTYPE VARCHAR(255) NOT NULL,
        REPLIED INT(1) NULL,
        PRIMARY KEY(id)
        )";
        if(mysqli_query($Mysqli_database,$table1)){
            return 'TABLE SUCCESSFULLY CREATED FOR USER';
        } else {
            return 'TABLE UNSUCCESSFULLY CREATED';
        }
}
CREATEMESSAGETABLE($Mysqli_database);
?>
