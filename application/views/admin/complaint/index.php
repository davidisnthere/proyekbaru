<head>
<meta name="viewport" content="width=device-width, initial-scale = 0.86, maximum-scale=3.0, minimum-scale=0.86">
	<style>
body {
   overflow-x: hidden;
}

	</style>
</head>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Complaint'); ?></h5>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/complaint/save'); ?>"
			class="btn btn-success">Add</a>
	</div>
</div>
<br>
<br>
<br>

<!--End of Action//--> 
   
<!--Data display of complaint-->       
<table id="basic-datatable" class="table table-striped table-bordered table-responsive w-100 d-block d-md-table">
	<thead>
    <tr>
		<th>Users</th>
<th>Category</th>
<th>Subject</th>
<th>Description</th>
<th>File Picture</th>
<th>Cell Phone</th>
<th>Email</th>
<th>Address</th>
<th>Status</th>


		<th>Actions</th>
    </tr>
	</thead>
	<tbody>
	<?php foreach($complaint as $c){ ?>
    <tr>
		<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Users_model');
									   $dataArr = $this->CI->Users_model->get_users($c['users_id']);
									   echo $dataArr['email'];?>
									</td>
<td><?php
									   $this->CI =& get_instance();
									   $this->CI->load->database();	
									   $this->CI->load->model('Category_model');
									   $dataArr = $this->CI->Category_model->get_category($c['category_id']);
									   echo $dataArr['cat_name'];?>
									</td>
<td><?php echo $c['subject']; ?></td>
<td><?php echo $c['description']; ?></td>
<td><?php
											if(is_file(APPPATH.'../public/'.$c['file_picture'])&&file_exists(APPPATH.'../public/'.$c['file_picture']))
											{
										 ?>
										  <img src="<?php echo base_url().'public/'.$c['file_picture']?>" class="picture_50x50">
										  <?php
											}
											else
											{
										?>
										<img src="<?php echo base_url()?>public/uploads/no_image.jpg" class="picture_50x50">
										<?php		
											}
										  ?>	
										</td>
<td><?php echo $c['cell_phone']; ?></td>
<td><?php echo $c['email']; ?></td>
<td><?php echo $c['address']; ?></td>
<td><?php echo $c['status']; ?></td>

		<td>
            <a href="<?php echo site_url('admin/complaint/details/'.$c['id']); ?>"  class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
            <a href="<?php echo site_url('admin/complaint/save/'.$c['id']); ?>" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
            <a href="<?php echo site_url('admin/complaint/remove/'.$c['id']); ?>" onClick="return confirm('Are you sure to delete this item?');" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
</table>

<br>
<div class="float_left padding_10">
		<i class="fa fa-download"></i> Export <select name="xeport_type" class="select"
			onChange="window.location='<?php echo site_url('admin/complaint/export'); ?>/'+this.value">
			<option>Select..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
<!--End of Data display of complaint//--> 
<script></script>
