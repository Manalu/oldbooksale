<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view("admin/partials/topber");?>
<?php $this->load->view("admin/partials/sidebar");?>

<?php $this->load->view("admin/contain_head");?>
  <h1>Data successfull update</h1>
 
  <a class="btn-btn success" href='<?php echo site_url('Profile/updateprofile/'.$this->session->userdata('user_id'))?>'>Update Profile</a>
 
