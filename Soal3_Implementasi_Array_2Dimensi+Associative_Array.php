<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asoy</title>
</head>


<body>
    <?php
        $nilai = [
            ["nama" => "jaka", "tugas" => 80, "uts" => 75, "uas" => 85],
            ["nama" => "sinta", "tugas" => 90, "uts" => 88, "uas" => 92],
            ["nama" => "budi", "tugas" => 70, "uts" => 65, "uas" => 78]
        ]
    ?>

    <?php foreach($nilai as $woi) : ?>
        <ul>
            <li>Nama : <?= $woi["nama"]; ?></li>
            <li>Nilai Tugas : <?= $woi["tugas"]; ?></li>
            <li>Nilai UTS : <?=$woi["uts"]; ?></li>
            <li>Nilai UAS : <?=$woi["uas"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>