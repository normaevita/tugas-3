<?phpif(isset($_POST['simpan'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $conn = mysqli_connect('localhost', 'root', '', 'db_login');
    if(mysqli_connect_errno()){
        echo "Koneksi Ke Server Gagal";
        exit();
    }

    $sql="select"
    )