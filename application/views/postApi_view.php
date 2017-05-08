<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn PHP CodeIgniter Framework with AJAX and Bootstrap</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


  
    <!--
    <div class="container">
  
    </center>
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
					<th>ID User</th>
					<th>Username</th>
					<th>Password</th>
					<th>ID Role</th>
          <th style="width:125px;">Action</p></th>
          <th>ID Role</th>
        </tr>
      </thead>

      <tbody>
				<?php foreach($posts as $post){?>
				     <tr>
				        <td><?php echo $post->id_post; ?></td>
				        <td><?php echo $post->title; ?></td>
								<td><?php echo $post->content; ?></td>
								<td><?php echo $post->create_date; ?></td>
								<td><?php echo $post->attachment; ?></td>
                <td><?php echo $post->id_hima; ?></td>
				      </tr>
				     <?php }?>
      </tbody>
    </table>
    </div>
    -->
<pre style="word-wrap: break-word; white-space: pre-wrap;">
<?php echo json_encode($posts, JSON_PRETTY_PRINT); ?>
</pre>


  <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
  <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>

  </body>
</html>
