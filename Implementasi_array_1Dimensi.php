<?php
    $buah = ["apel", "jeruk", "mangga", "pisang", "anggur"];
?>
<P>Daftar Buah:</P>
<ul>
    <?php foreach($buah as $b): ?> 
        <li><?php echo $b; ?></li>
    <?php endforeach; ?>
</ul>
