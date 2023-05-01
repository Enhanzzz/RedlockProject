<?php 

$host = 'db';

$user = 'MYSQL_USER';

$pass = 'MYSQL_PASSWORD';

$mydatabase = 'Redlock';

echo "List Of Users!";
echo "<br>";
echo "-----------------------";

$conn = new mysqli($host, $user, $pass, $mydatabase);

$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->ID;
    echo "<br>";
    echo $user->Nama;
    echo "<br>";
    echo $user->Alamat;
    echo "<br>";
    echo $user->Jabatan;
    echo "<br>";
    echo "-----------------------";
}

echo "<br>";

$sql = "SELECT COUNT(*) AS jumlah_user FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Jumlah User : " . $row["jumlah_user"];
} 
else {
    echo "Jumlah User : 0";
}
