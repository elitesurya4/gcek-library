<!------------ HEADER SECTION ----------->

<?php include('PARTIALS/header.php') ?>

<!-------------NOTICE BOARD SECTION------------->
<div class="about">
    <p class="wiki">
        <a href="noticeboard.php" id="wiki-1">NOTICE&nbsp;BOARD</a>
    </p>
</div>
<table class="notice-table" id="table-id">
  <thead>
    <tr>
      <th class="notice-id"><h1 class="notice-header">ID</h1></th>
      <th><h1 class="notice-header">TITLE</h1></th>
      <th><h1 class="notice-header">DATE</h1></th>
      <th><h1 class="notice-header">DOWNLOAD</h1></th>
    </tr>
  </thead>
  <tbody id="table-body">
    <?php 
    $display_query = "SELECT * FROM noticeboard";
    
    $results = mysqli_query($con3,$display_query);
    $count = mysqli_num_rows($results);

    if($count>0){
      while($data_row = mysqli_fetch_array($results,MYSQLI_ASSOC)){
        ?>
        <tr>
          <td class="notice-id"><?php echo $data_row['id']; ?></td>
          <td><?php echo $data_row['notice_title']; ?></td>
          <td><?php echo $data_row['notice_date']; ?></td>
          <td>
            <a href='<?php echo "CMS/NOTICE/" . $data_row['notice_file'];?>' class="btn btn-info" type="button" target="blank"><i class="fas fa-cloud-download-alt"></i></a>
          </td>

        </tr>
        <?php
        }
      }
      ?>
  </tbody>
</table>
<!-----------FOOTER SECTION----------->

<?php include('PARTIALS/footer.php')?>