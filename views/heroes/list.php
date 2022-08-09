<div class="container">
    <h4>List of DC Heroes</h4>
    <ul>
        <?php
            $li = '';
            //foreach loop to iterate through the returned superheroes list that's passed from  the controller
            foreach ($data as $id => $hero) {
                $li .= '<li><a class="underlined" href="./heroes/read/'.$hero['id'].'">'.$hero['superhero'].'</a></li>';
            }
            echo $li;
        ?>
    </ul>
</div>