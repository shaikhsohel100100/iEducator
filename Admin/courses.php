
<?php
        
    include('./adminInclude/header.php');
        
?>

<div class="col-sm-9 mt-5">
    <!-- Table -->
    <p class="bg-dark text-white p-2">List Of Courses</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Course ID</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">22
                <td>Learn Guitar</td>
                <td>Sohel khan</td>
                <td><button type="submit" class="btn btn-info mr-3" name="view" value="View"><i class="fas fa-pen"></i></button>
                <button type="submit" class="btn btn-secondary" name="delete" val   ue="Delete"><i class="far fa-trash-alt"></i></button>
            </td>
        </th>
    </tr>

</tbody>
</table>
</div>
</div>
<!-- div row close from header -->

<div>
    <a href="./addCourse.php" class="btn btn-danger box">
        <i class="fas fa-plus fa-2x"></i>
    </a>
</div>
</div>
<!-- div Container-fluid close from header -->



<?php
        
    include('./adminInclude/footer.php');
        
?>