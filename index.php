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
    <div class="container">
        <br><br><br>
        <div class="d-flex justify-content-center">
            <div class="card mt-5 w-75">
                <div class="card-body p-5">
                    <h3><div class="text-center">เข้าสู่ระบบ</div></h3>
                    <form action="check_login_admin.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ผู้ใช้งาน</label>
                            <input type="text" name="admin_l" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputPassword1">รหัสผ่าน</label>
                            <input type="password" name="admin_p" class="form-control" id="exampleInputPassword1">
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-success btn-block">เข้าสู่ระบบ</button>
                    </form>
                </div>
            </div>
        </div>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>