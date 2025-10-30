<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Array 2 Dimensi</title>
</head>


<body>
    <?php
    $mahasiswa = [
        ["jaka", "22001", "Informatika"],
        ["sinta", "22002", "Sistem Informasi"],
        ["budi", "22003", "Teknik Komputer"]
    ];
    ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>

        <?php for($i = 0; $i < count($mahasiswa); $i++) : ?>
        <tr>
            <td><?php echo $mahasiswa[$i][0]; ?></td>
            <td><?php echo $mahasiswa[$i][1]; ?></td>
            <td><?php echo $mahasiswa[$i][2]; ?></td>
        </tr>
        <?php endfor; ?>

    </table>

</body>




