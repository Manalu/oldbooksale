<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view("admin/partials/topber");?>
<?php $this->load->view("admin/partials/sidebar");?>
<?php $this->load->view("admin/contain_head");?>

          <?php echo anchor('Books/addbooks','Add Books',array("class"=>"btn btn-outline-success"));?> 
		  <h2  class="h1 text-center">All Books info</h3>
        <?php if ($query->num_rows() > 0) : ?>
        <table class="table table-hover table-responsive" width="100%">
  <thead>
<th scope="col">No</th>
<th scope="col">Books Name</th>
<th scope="col">Image</th>
<th scope="col">Price</th>
<th scope="col">Writer </th>
<th scope="col">Description </th>
<th scope="col">Publication</th>
<th scope="col">Status</th>
<th scope="col">Actions</th>
</thead>
<tbody>
	<?php $i=1;
 foreach ($query->result() as $row) : ?>
<tr>
<th scope="row"><?php echo $i++; ?></th>
<td><?php echo $row->bookname; ?></td>
<td><img src="<?php echo base_url();?>assets/images/upload/<?php echo $row->image; ?>" width=90px; height=80px alt=""></td>
<td><?php echo $row->price; ?>TK</td>
<td><?php echo $row->author_name; ?></td>
<td><?php echo $row->description; ?></td>
<td><?php echo $row->publication; ?></td>
<td><?php echo $row->status; ?></td>
<td><a onclick="return confirm('Are you sure?')" href='<?php echo site_url('Books/delete/'.$row->id)?>'><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
<a  href='<?php echo site_url('Books/edit_books/'.$row->id)?>'><i class="fa fa-edit"></i></a>
</td>
<td><a onclick="return confirm('Are you sure?')" href='<?php echo site_url('Admin/delete_user/'.$row->id)?>'><i class="fa fa-check-circle"></i></a>&nbsp;&nbsp;
<a  href='<?php echo site_url('Admin/delete_user/'.$row->id)?>'><i class="fa  fa-ban"></i></a>
</td>
</tr>
<?php endforeach; ?>
<tbody>
</table>
<?php endif; ?>
 
          
        <!-- /.container-fluid -->
        <?php $this->load->view("admin/contain_foot");?>
<?php $this->load->view("admin/partials/footer");?>