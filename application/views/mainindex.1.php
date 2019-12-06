<?php $this->load->view('header');?>
<!--backgroud image -->
<div class="view" style="background-image: url('<?php echo base_url();?>tamplete_assets/images/coverbook.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center; height:450px">

<!-- navbar area start -->
<div class="form_style"><form class="form-inline" action="<?php echo site_url('Search/search');?>" method = "post">
      <input class="form-control mr-sm-2" type="search"  name = "keyword" placeholder="Search Your Book" aria-label="Search">
     <button class="btn btn-success my-2 p-2 my-sm-0" type="submit">Seacrh Book</button>   
    </form>
    
    <?php
echo form_open('Search/specialsearch');?>
<?php echo form_dropdown('category', $cat_options, '','class="p-2"'); ?>
<?php echo form_submit(array('name' => 'submit','value' => 'Find with Category', 'class' => 'btn ')); ?>
<?php echo form_close();?>
    </div>
   
   
    </div>
    <hr> 
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" height='360px'; src="<?php echo base_url();?>tamplete_assets/images/caresoninage.jpg" >
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text_color font-weight-bold">WELL COME</h1>
                        <h3 class="text-success font-weight-bold">Sell and buy </h3>
                        <h4 class="text_p font-weight-bold">Sell your old book </h4>
                    </div>
                </div>
				<?php foreach ($query->result() as $row) : ?>
                <div class="carousel-item">
                    <a  href='<?php echo site_url('Mainindex/showall/'.$row->id)?>'><img class="d-block w-100"height='360px'; src="<?php echo base_url();?>assets/images/upload/<?php echo $row->image; ?>"></a>
                
                    <div class="carousel-caption d-none d-md-block">
						<h1 class="text_color text-danger font-weight-bold">Click Now</h1>
                        <h2 class="text-success font-weight-bold"><?php echo $row->name; ?> </h2>
                        <h5 class="text_p font-weight-bold"><?php echo $row->price; ?> </h5>
                        
                    </div>
                </div>
               <?php endforeach;?>
               
           
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
        <!-- carousel carosol area end -->
 

 <div class="card-deck card_style123">
 
 <?php foreach ($query->result() as $row) : ?>
 
 <div class="card">
  <a  href='<?php echo site_url('Mainindex/showall/'.$row->id)?>'><img class="card-img-top" src="<?php echo base_url();?>assets/images/upload/<?php echo $row->image; ?>" width=150px; height=150px alt=""></a>
     
    <div class="card-body">
      <h3 class="card-title"><?php echo $row->name; ?></h3>
      <h5 class="card-title"><?php echo $row->price; ?>TK</h5>
      
   <a  href='<?php echo site_url('Mainindex/showall/'.$row->id)?>'>Show More</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Posted &nbsp; <?php echo $row->created; ?> </small>
    </div>
    </div>
      <?php endforeach; ?>


</div>


<div class="row">
<h2 class="h_header mt-3 ">Bye Your books </h2> <!--heading -->
      <div class="card-columns card_style123">
      
 <?php foreach ($queryall->result() as $row) : ?>
 <div class="card">
  <a  href='<?php echo site_url('Mainindex/showall/'.$row->id)?>'><img class="card-img-top" src="<?php echo base_url();?>assets/images/upload/<?php echo $row->image; ?>" width=300px; height=300px alt=""></a>
     
    <div class="card-body">
      <h3 class="card-title"><?php echo $row->name; ?></h3>
      <h5 class="card-title"><?php echo $row->price; ?>TK</h5>
      
   <a  href='<?php echo site_url('Mainindex/showall/'.$row->id)?>'>Show More</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Post<?php echo $row->created; ?> </small>
    </div>
    </div>
      <?php endforeach; ?>
     
      </div>
      <div  class="mx-auto m-4 col-sm-1 col-md-9"><?php echo $links ; ?></div>
     
     
 <?php $this->load->view('footer');?>