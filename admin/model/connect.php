<?php
    function connect(){
        $dburl = "mysql:host=localhost;dbname=fhome;charset=utf8";
        $username = 'root';
        $password = '';
        $conn = new PDO($dburl, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    };
?>
<?php
    function getOne($sql){
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
?>