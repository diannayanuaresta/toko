<?php
$conn = mysqli_connect('localhost', 'root', '', 'toko');

function query($sql)
{
    global $conn;
    $result  = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function addData($post)
{
    global $conn;
    $nama = $post['nama'];
    $harga = $post['harga'];
    $sql = "INSERT INTO barang(nama, harga) VALUES ('$nama', $harga)";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function delData($id)
{
    global $conn;
    $sql = "DELETE FROM barang WHERE barang_id = $id";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}
