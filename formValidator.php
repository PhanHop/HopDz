<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="./assets/css/form.css">
    <script src = "./assets/js/formValidator.js"></script>
</head>
<body>
    <div class="main">
        <form action="register_submit.php" method="post" class="form" id="form-1">
            <h3 class="heading">Đăng ký</h3>
            <p class="desc">Mời bạn nhập thông tin đăng ký tại form sau</p>
            <div class="space"></div>
            <div class="form-group">
                <label for="fullname" class="form-lable">Tên đăng ký</label>
                <input type="text" id="fullname" name="fullname" placeholder="VD: Nguyen Van A" class="form-control">
                <span class="form-massage"></span>
            </div> 

            <div class="form-group">
                <label for="email" class="form-lable">Email</label>
                <input type="text" id="email" name="email" placeholder="VD: email@domain.com" class="form-control">
                <span class="form-massage"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-lable">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-massage"></span>
            </div>

            <div class="form-group">
                <label for="password_confirm" class="form-lable">Nhập lại mật khẩu</label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Nhập lại mật khẩu" class="form-control">
                <span class="form-massage"></span>
            </div>
            <button class="form-submit submit_disabled" name ="form-submit" id = "submit_register">Đăng ký</button>
        </form>
    </div>

    <script>
        Validator({
            form: 'form-1',
            formMassage: '.form-massage',
            rules: [
                Validator.isRequired('#fullname'),
                Validator.isEmail('#email'),
                Validator.minLength('#password', 8),
                Validator.isConfirmPassword('#password_confirm', function(){
                    return document.querySelector('#password').value;
                })
            ]
        });
    </script>
</body>
</html>