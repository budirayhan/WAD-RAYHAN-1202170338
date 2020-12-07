<?php
if(!isset($_SESSION)){
    session_start();
}

$conn = mysqli_connect("localhost","root","","wad_modul4");

if(!$conn){
    echo " <script>
        alert(Failed to Connect Database');
        </script>";
    
    die("connection failed." .mysqli_connect_error());
}

// logout
if (!empty($_GET['logout'])) {
    if ($_GET['logout'] == 'yes') {
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit;
    }
}


function registrasi($request)
{
    global $conn;
    $nama = $request['nama'];
    $email = $request['email'];
    $no_hp = $request['no_hp'];
    $password = mysqli_real_escape_string($conn, $request['password']);
    $password1 = mysqli_real_escape_string($conn, $request['password1']);

    // mengecek email
    $cekemail = "SELECT email FROM user WHERE email='$email'";
    $select = mysqli_query($conn, $cekemail);

    if (!mysqli_fetch_assoc($select)) {
        // mengecek password
        if ($password == $password1) {
            // enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);

            // insert query
            $query = "INSERT INTO user VALUES ('', '$nama', '$email', '$no_hp', '$password')";
            mysqli_query($conn, $query);

            $_SESSION['message'] = 'Berhasil registrasi';

            return mysqli_affected_rows($conn);
        }
    }
}

function login($request)
{
    global $conn;

    $email = $request['email'];
    $password = $request['password'];

    // cek email
    $cekemail = "SELECT * FROM user WHERE email = '$email'";
    $select = mysqli_query($conn, $cekemail);

    if (mysqli_num_rows($select) == 1) {
        $result = mysqli_fetch_assoc($select);

        // cek password
        if (password_verify($password, $result['password'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['no_hp'] = $result['no_hp'];

            // set cookie
            if (is_null($request['rememberMe'])) {
                setcookie('email', '', time() - 1);
                setcookie('password', '', time() - 1);
                setcookie('rememberMe', '', time() - 1);
            } else {
                setcookie("email", $email);
                setcookie("password", $password);
                setcookie("rememberMe", "checked");
            }

            $_SESSION['message'] = 'Berhasil Login';
            header("Location: index.php");
        }
    }
}