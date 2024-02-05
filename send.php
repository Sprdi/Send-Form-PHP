<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $mempelai_pria = $_POST['mempelai_pria'];
    $mempelai_wanita = $_POST['mempelai_wanita'];
    $tgl_pernikahan = $_POST['tgl_pernikahan'];
    $desain = $_POST['desain'];
    $email = $_POST['email'];
    $catatan = $_POST['catatan'];
    $no_wa = $_POST['noWa'];
    header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama Pemesan:%20$nama%20%0DMempelai Pria: $mempelai_pria%20%0DMempelai Wanita: $mempelai_wanita%20%0DDesain: $desain%20%0DTanggal Pernikahan:%20$tgl_pernikahan%20%0DEmail:%20$email%20%0DCatatan:%20$catatan");
} else {
    echo "
        <script>
            window.location=history.go(-1);
        </script>
        ";
}
