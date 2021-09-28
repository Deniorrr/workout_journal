<?php
include("navbar.php");
if (!isset($_SESSION["name"])) header('Location: index.php');

?>

<head>
    <link rel="stylesheet" href="add_unit.css">
</head>
<div class="container">
    <div class="row mt-4 ">
        <form class="col-12" action="add_unit_script.php" method="POST">
            <div class="unit-form-header">
                <?php
                if (!empty($_SESSION["error_text"])) print(" <div class='alert alert-danger' role='alert'>" . $_SESSION["error_text"] . "</div>");
                //clear the error_text 
                $_SESSION["error_text"] = ""
                ?>
                <div class="form-row inner-header">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="training_name">Name of the unit:</label>
                            <input type="text" class="form-control" id="training_name" name="training_name" placeholder="For example: 'Endurance unit'">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="weight">Weight (kg): </label>
                            <input type="number" class="form-control" id="weight" name="weight" placeholder="weight">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="date">Date of the training</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="date">
                        </div>
                    </div>
                </div>
            </div>
            <table style="width:100%" border class="form-table">
                <tr style="width:100%">
                    <th style="width: 40%">exercise</th>
                    <th style="width: 15%">weight</th>
                    <th style="width: 15%">reps</th>
                    <th style="width: 10%">sets</th>
                    <th style="width: 20%">time</th>
                </tr>
                <script src="script.js"></script>
            </table>
            <div class="d-flex justify-content-end">
                <input type="button" value="+" class="add_button" onclick="add_row()">

                <!-- dodać submita, jakieś usuwanie, sprawdzić czy php to jakoś czyta, poprawić wygląd tabeli -->
            </div>
            <div class="submit_wrapper col-2">
                <input type="submit" value="Submit" class="submit_button">
            </div>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
</body>

</html>