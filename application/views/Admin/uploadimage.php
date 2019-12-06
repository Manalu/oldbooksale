<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view("admin/partials/topber");?>
<?php $this->load->view("admin/partials/sidebar");?>

<?php $this->load->view("admin/contain_head");?>
<?php if ($error) : ?>
<?php echo $error ; ?>
<?php endif ; ?>


<?php $this->load->view("admin/contain_foot");?>
        <!-- /.container-fluid -->

<?php $this->load->view("admin/partials/footer");?>

