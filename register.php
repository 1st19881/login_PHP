<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>login</title>
</head>

<body>
    <div class="container p-3">
        <br><br><br>
        <div class="col-md-12">
            <form name="register" action="register_db.php" method="POST" enctype="multipart/form-data"
                class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-2"> </div>
                    <div class="col-md-12" align="center">
                        <h4> สมัครสมาชิก </h4>
                        <hr>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2" align=""> username :</div>
                    <div class="col-md-12" align="left">
                        <input name="username" type="text" required class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2" align=""> password :</div>
                    <div class="col-md-12" align="left">
                        <input name="password" type="password" required class="form-control" id="m_pass" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2" align="left"> คำนำหน้า :</div>
                    <div class="col-md-12" align="left">
                        <select name="title" class="form-control" id="exampleFormControlSelect1">
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2" align=""> ชื่อ:</div>
                    <div class="col-md-12" align="left">
                        <input name="name" type="text" required class="form-control" id="m_name" placeholder="" />
                    </div>
                    <div class="col-sm-2" align=""> นามสกุล:</div>
                    <div class="col-md-12" align="left">
                        <input name="lastname" type="text" required class="form-control" id="m_name" placeholder="" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3" align=""> อีเมล : </div>
                    <div class="col-md-12" align="left">
                        <input name="email" type="email" class="form-control" id="m_email" required placeholder="" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2" align=""> เบอร์โทรศัพท์ : </div>
                    <div class="col-md-12" align="left">
                        <input name="phone" type="text" class="form-control" id="m_tel" required placeholder=""
                            maxlength="10" />
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-2"> </div>
                    <div class="col-md-12" align="right">
                        <input type="hidden" name="member_type" value="member">
                        <button type="submit" class="btn btn-success btn-flat" id="btn"><span
                                class="glyphicon glyphicon-saved"></span> สมัครสมาชิก
                        </button> <a href="index.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                                class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
                    </div>

                </div>
            </form>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>