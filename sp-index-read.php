<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
echo $_POST["Fingerprint"];
$fingerpint = $_POST["fingerprint"];
$fingerpint = "08-ED-B9-49-B2-E5-1024";
include("connection.php");
try {
    $conn = new PDO("mysql: host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * from main WHERE mac='".$fingerpint."'";
    //echo $sql;
    $conn->exec($sql);
    //echo $conn;
    unset($username);
    unset($password);
    
    echo "result is ";
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

  $conn = null;
?>
</body>
</html> 
