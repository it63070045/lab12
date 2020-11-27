  
<?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070045_test', 'NGUcvk58', 'testtable', 3306);

    if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
};
    $w = $_POST['in_a'];
    $x = $_POST['in_b'];
    $y = $_POST['in_c'];
    $z = $x / $y**2;

    $sql = "INSERT INTO it63070045 (A , B , C, D) VALUES ('$w', '$x', '$y', '$z')";

    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully"; 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
<script>
    window.location.replace("show.php");
</script>
