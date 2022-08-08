<div class="container">
    <h4><?= $data['superhero'] ?></h4>
    <ul>
        <?php
        $li = '<li>Publisher: <strong>' . $data['publisher'] . '</strong></li>';
        $li .= '<li>Alter Ego: <strong>' . $data['alter_ego'] . '</strong></li>';
        $li .= '<li>First Appearance: <strong>' . $data['first_appearance'] . '</strong></li>';
        $li .= '<li>Characters: <strong>' . $data['characters'] . '</strong></li>';
        echo $li;
        ?>
    </ul>
</div>