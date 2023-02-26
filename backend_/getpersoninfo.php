<?php
    date_default_timezone_set("Asia/Bangkok");
    require "../_connection/connections.php";

    if($_POST){
        $data;
        $idcardno = $_POST['id'];

        $conn = new DBConnect();
        $conn->dbconnect();
        $sql = "SELECT p.cid,p.title,p.name,p.sname,u.entryposition,p.phone1,p.phone2 FROM ant_people_main p INNER JOIN opduser u ON u.cid = p.cid WHERE p.cid = '$idcardno';";
        $row = $conn->getDataInfo($sql);

        if(!is_null($row)){
            $data = array(
                'status' => true
                ,'mode' => 'PERSON_INFO'
                ,'person' => array(
                'idcard' => $row['cid']
                ,'prename' => $row['title']
                ,'fname' => $row['name']
                ,'lname' => $row['sname']
                ,'entryposition' => $row['entryposition']
                ,'phone1' => $row['phone1']
                ,'phone2' => $row['phone2']
                )
            );
        }else{
            $conn->close();
            $conn = new OpenConnect();
            $conn->openconnect();
            // $row = $conn->getDataInfo($sql);
            // $data = array(
            //     'status' => true
            //     ,'mode' => 'PERSON_INFO'
            //     ,'person' => array(
            //     'idcard' => $row['cid']
            //     ,'prename' => $row['title']
            //     ,'fname' => $row['name']
            //     ,'lname' => $row['sname']
            //     ,'entryposition' => $row['entryposition']
            //     ,'phone1' => $row['phone1']
            //     ,'phone2' => $row['phone2']
            //     )
            // );
        }

        echo json_encode($data);
    }


?>