<div class="container">
    <h4>$_POST Request</h4>
    <!-- since we will be doing the post request we will need a form -->
    <form action="" method="post">
        <div class="form-outline">
            <label class="form-label" for="name">Enter Name</label>
            <input type="text" name="name" class="form-input">
        </div>
        <div class="form-outline">
            <label class="form-label" for="name">Enter Profession</label>
            <input type="text" name="profession" class="form-input">
        </div>
        <?php
        //here we include the hidden input field that contains a xsrf token since we are performing a post request
        include './config/csrf.php';
        ?>
        <div class="form-outline">
            <input type="submit" class="form-btn" value="Submit">
        </div>
    </form>
</div>