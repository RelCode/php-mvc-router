<div class="container">
    <h4>List of DC Heroes</h4>
    <ul>
        <?php
            $li = '';
            foreach ($data as $id => $hero) {
                $li .= '<li><a href="./heroes/read/'.$hero['id'].'">'.$hero['superhero'].'</a></li>';
            }
            echo $li;
        ?>
    </ul>
</div>