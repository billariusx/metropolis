<?php
    date_default_timezone_set("Asia/Bangkok");
    require "../_connection/connections.php";

    if($_POST){
        $data;
        $idcardno = $_POST['id'];
        $prename = $_POST['prename'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $entryposition = $_POST['entryposition'];
        $phone = $_POST['phone'];
        $workposition = $_POST['workposition'];
        $worktime = $_POST['worktime'];

        $data = array(
            'status' => true
            ,'mode' => 'INSERT_OTREGIS'
                ,'data' => array(
                'idcard' => $idcardno
                ,'prename' => $prename
                ,'fname' => $fname
                ,'lname' => $lname
                ,'entryposition' => $entryposition
                ,'mobile' => $phone
                ,'telephone' => ''
                ,'workposition' => $workposition
                ,'worktime' => $worktime
                ,'datecreate' => date('Y-m-d:H:i:s')
            )
        );

        // $conn = new OpenConnect();
        // $conn->openconnect();
        // $sql = "INSERT INTO (otdate,otstart,idcard,prename,fname,lname,selfposition,otcode,otcontact,telephone,datecreated) VALUES ('','','','','','','','','','','');";
        // // $row = $conn->getDataInfo($sql);


        echo json_encode($data);
    }


?>