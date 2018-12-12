<?php
include 'includes/config.php';
include 'includes/header.php';
include 'includes/db_getusers.php';
?>

<section id="main">
  <div class="container">
    <div class="row">
      <?php include 'includes/sidebar.php'; ?>
      <div class="col-md-9">
        <?php 
        while ($row=mysqli_fetch_array($result)) {
          echo "<div id='modifydiv' class='collapsible'><a class='list-group-item' data-toggle='collapse' data-target='#".$row['user_id']."' style='cursor:pointer'>".$row['first_name']."</a></div>
          <div id='".$row['user_id']."' class='collapse'>

          <input type='text' name='user_id'
          class='form-control' value='"
          .$row['user_id']."' readonly/>

          <input type='text' name='user_id'
          class='form-control' value='"
          .$row['first_name']."' readonly/>

          <input type='text' name='user_id'
          class='form-control' value='"
          .$row['last_name']."' readonly/>

          <input type='text' name='user_id'
          class='form-control' value='"
          .$row['username']."' readonly/>

          <input type='text' name='user_id'
          class='form-control' value='"
          .$row['email']."' readonly/>
          </div>";
        }
        ?>
      </div>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>