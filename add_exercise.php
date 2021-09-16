<?php
include("navbar.php");
if (!isset($_SESSION["name"])) header('Location: index.php');

?>
<div class="container">
    <form class="row flex-column align-items-center">
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="training_name">Name the exercise</label>
                    <input type="text" class="form-control" id="training_name" placeholder="Enter the name">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <input type="checkbox" class="form-control" id="bw" placeholder="weight">
                    <label for="bw">It's a bodyweight exercise</label>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <input type="button" class="btn btn-secondary" id="add" placeholder="weight" value="Add exercise">
                </div>
            </div>
        </div>
    </form>
</div>
</body>

</html>