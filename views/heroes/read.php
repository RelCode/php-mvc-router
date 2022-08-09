<div class="container">
    <?php
    //we check if the superhero id we passed returned some superhero data and then view the list
    if ($data) {
    ?>
        <h4><?= $data['superhero'] ?></h4>
        <ul>
            <?php
            //we don't need a loop here since we are returning a single individual, not a list
            $li = '<li>Publisher: <strong>' . $data['publisher'] . '</strong></li>';
            $li .= '<li>Alter Ego: <strong>' . $data['alter_ego'] . '</strong></li>';
            $li .= '<li>First Appearance: <strong>' . $data['first_appearance'] . '</strong></li>';
            $li .= '<li>Characters: <strong>' . $data['characters'] . '</strong></li>';
            echo $li;
            ?>
        </ul>
    <?php
    }else{
        //else, we display the following alert message
        echo '<h4>No Hero Has The Provided ID</h4>';
    }
    ?>
</div>