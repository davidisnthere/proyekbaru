<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Category'); ?></h5>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/category/save'); ?>"
			class="btn btn-success">Add</a>
	</div>
<!--End of Action//--> 
   
<!--Data display of category-->       
<table id="scroll-vertical-datatable" class="table table-striped table-bordered">
	<thead>
    <tr>
		<th>Cat Name</th>

		<th>Actions</th>
    </tr>
	</thead>
	<tbody>
	<?php foreach($category as $c){ ?>
    <tr>
		<td><?php echo $c['cat_name']; ?></td>

		<td>
            <a href="<?php echo site_url('admin/category/details/'.$c['id']); ?>"  class="action-icon"> <i class="zmdi zmdi-eye"></i></a>
            <a href="<?php echo site_url('admin/category/save/'.$c['id']); ?>" class="action-icon"> <i class="zmdi zmdi-edit"></i></a>
            <a href="<?php echo site_url('admin/category/remove/'.$c['id']); ?>" onClick="return confirm('Are you sure to delete this item?');" class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
</table>
<div class="float_left padding_10">
		<i class="fa fa-download"></i> Export <select name="xeport_type" class="select"
			onChange="window.location='<?php echo site_url('admin/category/export'); ?>/'+this.value">
			<option>Select..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
<!--End of Data display of category//--> 

<!--No data-->
<?php
	if(count($category)==0){
?>
 <div align="center"><h3>Data is not exists</h3></div>
<?php
	}
?>
<!--End of No data//-->

<!--Pagination-->
<?php
	echo $link;
?>
<!--End of Pagination//-->
