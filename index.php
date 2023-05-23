 <h3> Data Buku </h3>
  <table border="1">
    <tr>
        <th> No </th>
        <th> Id Buku </th>
        <th> Judul </th>
        <th> Kategori </th>
        <th> Penerbit </th>
        <th> Pengarang </th>
        <th> Tahun Terbit </th>
        <th> ISBN </th>
        <th> Jumlah Buku Baik </th>
        <th> Jumlah Buku Rusak </th>
    </tr>

    <?php


$koneksi = mysqli_connect(
    'db',
    'db_user',
    'password',
    'db_perpustakaan'
    );

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$no = 1;
$ambildata = mysqli_query($koneksi, "select * from buku");
while ($tampil= mysqli_fetch_array($ambildata)){
    echo "
    <tr> 
        <td>$no</td>
        <td>$tampil[id_buku]</td>
        <td>$tampil[judul_buku]</td>
        <td>$tampil[kategori_buku]</td>
        <td>$tampil[penerbit_buku]</td>
        <td>$tampil[pengarang]</td>
        <td>$tampil[tahun_terbit]</td>
        <td>$tampil[isbn]</td>
        <td>$tampil[j_buku_baik]</td>
        <td>$tampil[j_buku_rusak]</td>
    </tr>";

    $no++;
}
    ?>
</table>
        
        
        

   