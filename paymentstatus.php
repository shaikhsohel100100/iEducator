<!-- Start including Header -->
<?php

include('./Main_Include/header.php');

?>
<!-- End including Header -->

<!-- Start Course Page Banner -->

<div class="container-fluid bg-dark">
<div class="row">
<img src="./images/coursebanner.jpg" alt="course" style="height:500px; width:100%; object-fit:cover; box-shadow: 10px;">
</div>
</div>

<!-- End Course Page Banner -->

<!-- Start Main Content -->


<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="form-group row">
        <label class="offset-sm-3 col-form-label">Order Id: </label>
        <div>
            <input type="text" class="form-control mx-3">
        </div>
        <div>
        <input type="submit"class="btn btn-primary mx-4" style="background-color: teal;" value="View">
    </div>
</div>
</form>
</div>

<!-- End Main Content -->


<!-- Start Contact Us -->

<?php
include('./contact.php');
?>

<!-- End of Contact Us -->



<!-- Start including Header -->
<?php

include('./Main_Include/footer.php');

?>
<!-- Start including Header -->