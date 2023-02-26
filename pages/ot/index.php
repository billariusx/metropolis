<?php
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ระบบลงชื่อเข้าปฏิบัติหน้าที่นอกเวลา</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesom -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/1c21166e95.css" crossorigin="anonymous">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/../../assets/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- ../../assets/libraries Stylesheet -->
    <link href="../../assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">...กรุณารอซักครู่...</span>
            </div>
        </div>
        <!-- Spinner End -->


        
            <!-- bg-primary -->
            <div class="container-xxl hero-header" style="background-color: #67F1B9;">
                <div class="mx-auto container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-gray mb-4 animated slideInDown">ระบบลงชื่อเข้าปฏิบัติหน้าที่นอกเวลา</h1>
                            <p class="text-orange pb-3 animated slideInDown"><b>เนื่องจากทางระบบจะทำการรวมบรวมรายชื่อส่งเข้าไลน์กลุ่ม ดังนั้นกรุณากรอกข้อมูลและนำส่งข้อมูลให้แล้วเสร็จภายในเวลาดังนี้<br> - เวรเช้า ส่งข้อมูลไม่เกิน 10.30น.<br> - เวรบ่าย ส่งข้อมูลไม่เกิน 18.30น.<br> - เวรดึก ส่งข้อมูลไม่เกิน 00.30 น.</b></p>
                            <form action="" method="post">
                                <div class="position-relative w-100 mt-3">
                                    <div class="row" id="idcarddiv">
                                        <label class="text-white"><b>~ กรุณากรอกเลขบัตรประจำตัวประชาชน ~</b></label>
                                        <div class="col-10">
                                            <input id="idcard" class="form-control ml-0" type="number" placeholder="XXXXXXXXXXXXX" maxlength="13" required>
                                        </div>
                                        <div class="col-2 ml-0">
                                            <button id="checkdata" type="button" class="form-control ml-0" style="width:50px;"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        </div>
                                        <!-- <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="เลขบัตรประจำตัวประชาชนของท่าน" style="height: 58px;"> -->
                                    </div>
                                    <div id="showdata" align="left" style="display:none;">
                                        <!-- <div id="info"></div> -->
                                        <p class="mt-2" style="color:red">ตรวจพบข้อมูล!!</p>
                                        <div class="col-6"><input class="form-control" id="prename" type="text" name="prename" style="text-align: center; display: none;"></div>
                                        <div class="col-6"><input class="form-control" id="fname" type="text" name="fname" style="text-align: center; display: none;"></div>
                                        <div class="row col-12">
                                            <div class="col-6"><input class="form-control" id="fullname" type="text" name="fullname" style="text-align: center;" disabled></div>
                                            <div class="col-6"><input class="form-control" id="lname" type="text" name="lname" style="text-align: center;" disabled></div>
                                        </div>
                                        <div class="row col-12 mt-2">
                                            <div class="col-6"><input class="form-control" id="entryposition" type="text" name="entryposition" style="text-align: center;" disabled></div>
                                            <div class="col-6"><input class="form-control" id="phone" type="text" name="phone" style="text-align: center;"></div>
                                        </div>

                                    </div>
                                    <div id="positioninput" class="mt-2">
                                        <label for="position" class="text-white">ปฏิบัติหน้าที่ในจุด : </label>
                                        <select id="workposition" class="form-select" required>
                                            <option selected>กรุณาเลือกจุดปฏิบัติงาน</option>
                                            <option value="FIN">[FIN]งานการเงินและบัญชี</option>
                                            <option value="DEN">[DEN]งานทันตกรรม</option>
                                            <option value="PHA">[PHA]ฝ่ายเภสัชกรรม</option>
                                            <option value="LAB">[LAB]กลุ่มงานเทคนิคการแพทย์</option>
                                            <option value="RAD">[RAD]งานรังสี</option>
                                            <option value="IPD">[IPD]งานการพยาบาลผู้ป่วนใน</option>
                                            <option value="EMR">[EMR]งานการพยาบาลผู้ป่วยอุบัติเหตุฉุกเฉินและนิติเวช</option>
                                            <option value="OBS">[OBS]งานการพยาบาลผู้คลอด</option>
                                            <option value="PTD">[PTD]งานกายภาพบำบัด</option>
                                            <option value="MDR">[MDR]งานเวชระเบียน</option>
                                            <option value="CCT">[CCT]ศูนย์คอมพิวเตอร์เละเทคโนโลยี</option>
                                            <option value="UCD">[UCD]ศูนย์ประกันสุขภาพถ้วนหน้า</option>
                                            <option value="SUP">[SUP]งานซักฝอก-จ่ายกลาง</option>
                                            <option value="TTM">[TTM]กลุ่มงานการแพทย์แผนไทยและแพทย์ทางเลือก</option>
                                            <option value="PRC">[PRC]งานโสตและประชาสัมพันธ์</option>
                                            <option value="AUT">[AUT]งานยานพาหนะ</option>
                                            <option value="SCD">[SCD]งานรักษาความปลอดภัย</option>
                                            <option value="MAT">[MAT]งานซ่อมบำรุง</option>
                                            <option value="GDN">[GDN]งานสวน</option>
                                        </select>
                                    </div>
                                    <div id="timeinput" class="mt-1">
                                        <label for="time" class="text-white">เลือกลงข้อมูลปฏิบัติงานใน : </label>
                                        <select id="worktime" class="form-select" required>
                                            <option selected>กรุณาเลือกช่วงเวลา</option>
                                            <?php if(date("Y/m/d:H:i:s") > date("Y/m/d:08:30:00") && date("Y/m/d:H:i:s") < date("Y/m/d:16:30:00")) {?>
                                            <option value="<?php echo date('Y-m-d|08:30'); ?>">เวรเช้า [ 08.30น. - 16.30น. ] วันที่ <?php echo date('d/m/').(date('Y')+543); ?></option> <?php } ?>
                                            <?php if(date("Y/m/d:H:i:s") > date("Y/m/d:16:30:00") || date("Y/m/d:H:i:s") < date("Y/m/d:00:30:00", strtotime(date('Y/m/d') .' +1 day'))) {?>
                                            <option value="<?php echo date('Y-m-d|16:30'); ?>">เวรบ่าย [ 16.30น. - 00.30น. ] วันที่ <?php echo date('d/m/').(date('Y')+543); ?></option> <?php } ?>
                                            <option value="<?php echo date('Y-m-d|00:30', strtotime(date('Y/m/d') .' +1 day')); ?>">เวรดึก [ 00.30น. - 08.30น. ] วันที่ <?php echo (date('d')+1).'/'.date('m/').(date('Y')+543); ?></option>
                                        </select>
                                    </div>
                                    <p align="right">
                                    <button id="submit" type="button" class="mt-2 col-6 btn btn-success">ลงข้อมูล</button>
                                    </p>
                                    
                                        <!-- <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="เลขบัตรประจำตัวประชาชนของท่าน" style="height: 58px;"> -->
                                    </div>
                                    <!-- <button type="button" class="btn btn-primary rounded-pill py-2 px-3 shadow-none position-absolute top-0 end-0 m-2">Free Trail</button> -->
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid rounded animated zoomIn" src="img/hero.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">กรุณาตรวจสอบความถูกต้อง</h5>
                        <!-- <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                        <div>ท่านยืนยันที่จะส่งข้อมูลตามรายละเอียดต่อไปนี้หรือไม่</div>
                        <div>ชื่อของท่าน : <span id="mname"></span></div>
                        <div>ตำแหน่ง : <span id="mpos"></span></div>
                        <div>เบอร์ติดต่อ : <span id="mphone"></span></div>
                        <div>สถานที่ปฏิบัติงาน : <span id="mwpos"></span></div>
                        <div>เวลาปฏิบัติงาน : <span id="mwtime"></span></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal" id="closeModal">ยกเลิก</button>
                        <button type="button" class="btn btn-primary" id="datasave">ส่งข้อมูล</button>
                    </div>
                    </div>
                </div>
            </div>


        

    <!-- JavaScript ../../assets/libraries -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1c21166e95.js" crossorigin="anonymous"></script>
    <script src="../../assets/lib/wow/wow.min.js"></script>
    <script src="../../assets/lib/easing/easing.min.js"></script>
    <script src="../../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../../assets/lib/counterup/counterup.min.js"></script>
    <script src="../../assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../assets/js/main.js"></script>
    <script type="text/javascript">

        var workposition,worktime;
    
    $('#workposition').change(function(){
        workposition = $(this).val();
        // alert($(this).val());
    });

    $('#worktime').change(function(){

        worktime = $(this).val();

        // alert(workposition);
        // alert(worktime);
        // switch ($(this).val()) {
        //     case 1:
                
        //         break;
        
        //     default:
        //         0;
        // }
    })

    jQuery('#closeModal').on("click", function(e) {
        $('#exampleModal').modal('hide');
    });

    jQuery('#datasave').on("click", function(e) {
        var idcard = document.getElementById("idcard").value;
        var prename = document.getElementById("prename").value;
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var entryposition = document.getElementById("entryposition").value;
        var phone = document.getElementById("phone").value;
        var workposition = document.getElementById("workposition").value;
        var worktime = document.getElementById("worktime").value;
        

        var str = fname+' '+lname+'\n'+entryposition+'\n'+phone+'\n'+workposition+'\n'+worktime;
        alert(str);


        $.ajax({
            type: 'POST',
            url: "../../backend_/otregis.php",
            data: {'id':idcard, 'prename':prename, 'fname':fname, 'lname':lname, 'entryposition':entryposition, 'phone':phone, 'workposition':workposition, 'worktime':worktime},
            async: false,
            beforeSend: (xhr) => {
                if (xhr && xhr.overrideMimeType) {
                xhr.overrideMimeType('application/json;charset=utf-8');
                }
            },
            dataType: 'json',
            success: (data) => {
                alert(data['data']['datecreate']);
                // document.getElementById("fname").setAttribute('value',data['person']['prename']+data['person']['fname']);
                // document.getElementById("lname").setAttribute('value',data['person']['lname']);
                // document.getElementById("entryposition").setAttribute('value',data['person']['entryposition']);
                // if(data['person']['phone1'] != null){
                //     document.getElementById("phone").setAttribute('value',data['person']['phone1']);
                // }else{
                //     document.getElementById("phone").setAttribute('value',data['person']['phone2']);
                // }
                $('#showdata').show();
            }
        });

        $('#exampleModal').modal('hide');
    });

    jQuery('#submit').on("click", function(e) {
        
        $('#exampleModal').modal('show');
        var prename = document.getElementById("prename").value;
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var entryposition = document.getElementById("entryposition").value;
        var phone = document.getElementById("phone").value;
        var workposition = document.getElementById("workposition").value;
        var worktime = document.getElementById("worktime").value;

        document.getElementById("mname").innerHTML = prename+fname + ' ' + lname;
        document.getElementById("mpos").innerHTML = entryposition;
        document.getElementById("mphone").innerHTML = phone;
        document.getElementById("mwpos").innerHTML = workposition;
        document.getElementById("mwtime").innerHTML = worktime;

    });

    jQuery('#checkdata').on("click", function(e) {
        var data = document.getElementById("idcard").value;

        $.ajax({
            type: 'POST',
            url: "../../backend_/getpersoninfo.php",
            data: {'id':data},
            async: false,
            beforeSend: (xhr) => {
                if (xhr && xhr.overrideMimeType) {
                xhr.overrideMimeType('application/json;charset=utf-8');
                }
            },
            dataType: 'json',
            success: (data) => {
                document.getElementById('prename').setAttribute('value',data['person']['prename'])
                document.getElementById("fname").setAttribute('value',data['person']['fname']);
                document.getElementById("fullname").setAttribute('value',data['person']['prename']+data['person']['fname']);
                document.getElementById("lname").setAttribute('value',data['person']['lname']);
                document.getElementById("entryposition").setAttribute('value',data['person']['entryposition']);
                if(data['person']['phone1'] != null){
                    document.getElementById("phone").setAttribute('value',data['person']['phone1']);
                }else{
                    document.getElementById("phone").setAttribute('value',data['person']['phone2']);
                }
                $('#showdata').show();
            }
        });

    });

    </script>
</body>

</html>