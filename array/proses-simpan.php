<?php
if(isset($_POST['simpan'])){
    $koneksi = mysqli_connect("localhost","root","","crud")
    or die(mysqli_connect_error());
    $jum = $_POST['jum'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];

    for ($i=0; $i<$jum; $i++)
    {
        mysqli_query($koneksi,"insert into mahasiswa values (
        '$nim[$i]', '$nama[$i]')") or die (mysqli_error($koneksi));
    }
    echo "<script>alert('Data telah tersimpan');
    document.location='index.php'</script>";

}
else{
    echo "<script>alert('Data tidak tersimpan')";
}
?>
