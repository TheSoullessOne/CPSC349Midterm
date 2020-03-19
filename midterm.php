<?php
// <!--                                                        #2                                                                               -->
// <!-- (10 pts) Write the php code to connect to a remote database, and display an error message if the connection fails.                      -->
$connection = mysqli_connect("localhost", "root", "", "classregistration");
  if (!$connection) {
    echo "Cannot connect to MySQL.". mysqli_connect_error();
    exit();
  }



// <!--                                                        #3                                                                                 -->
// <!--                        Fill in the missing HTML and php code needed to insert information
                            // into the database administrator table we studied in class.
                            // Assume it has fields admin_id, admin_password, and admin_name.                                                      -->
$row = mysqli_fetch_object($result);

$db_userid = $row->admin_id;
$db_password = $row→admin_password;
$encryptpasswd = sha1($userPasswd); // Note: sha1 encryption is obsolete
$db_name = $row->admin_name;

if ($db_userid != $userid || $db_password != $encryptpasswd) {
$query = "INSERT INTO administrator(admin_id, admin_password, admin_name) 
              VALUES('$userid', '$encryptpasswd', '$name')";
    mysqli_query($connection, $query);    if (!$result) {
        echo ("Insert to administrator failed. ". mysqli_error($connection));
        exit();
    }
}
?>