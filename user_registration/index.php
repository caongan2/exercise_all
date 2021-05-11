<?php
$condition1 = true;
$name=null;
$email=null;
$phone=null;
function getUserList($filename) {
    $jsonData = file_get_contents($filename);
    return json_decode($jsonData,true);
}


function saveDataJSON($filename, $name, $email, $phone ){
    try {
        $contact = getUserList($filename);


        $data['name']= $name;
        $data['email']= $email;
        $data['phone']= $phone;

        $contact[] = $data;

        // chuyen array -> json
        $jsonData = json_encode($contact);

        file_put_contents($filename,$jsonData);
        echo "luu du lieu thanh cong";
    }catch (Exception $e){
        echo $e->getMessage();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    if (empty($name) || empty($email) || empty($phone)) {
        echo "Thiếu thông tin đăng kí!!!";
        $condition1 = false;
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Email Khong hop le";
        $condition1=false;
    }
    if($condition1===true){
        saveDataJSON('user.json',$name,$email,$phone);
        $name=null;
        $email=null;
        $phone=null;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <fieldset>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Number Phone:</td>
                <td><input type="number" name="phone"></td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </fieldset>
</form>
<?php
$registrations = getUserList('user.json');
?>
<h2>Đăng ký người dùng</h2>
<table>
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Số điện thoại</td>
    </tr>
    <?php foreach ($registrations as $registration): ?>
        <tr>
            <td><?php echo $registration['name'] ?></td>
            <td><?php echo $registration['email'] ?></td>
            <td><?php echo $registration['phone'] ?></td>
        </tr>
    <?php endforeach; ?>
</body>
</html>


