<div class="col-md-4">

<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form method="post" action="search.php">
    <div class="input-group">
        <input type="text" name = "search" class="form-control">
        <span class="input-group-btn">
            <button name="submit" class="btn btn-default" type="submit" >
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
        </form> <!-- form search -->
    </div>
    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<?php 
$query = "SELECT cat_title from categories";
$selectCatagories = mysqli_query($conn,$query);
?>

<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">
            <?php 
            while($row = mysqli_fetch_assoc($selectCatagories))
            {
                $catTitle = strtoupper($row['cat_title']);
                echo "<li><a href = '#'>$catTitle</a></li>";

            }   
            ?>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
        <!-- <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div> -->
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<?php include "widget.php"; ?>
</div>



