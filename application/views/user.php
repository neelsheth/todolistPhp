

<head>
<div>
    <link rel = "stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css"/>
</div>
</head>

<body>
    <div class='flex'>
        <h1>ToDO List</h1>
</div>


<div class='flexRow'>

<?php
// $colors = array("red", "green", "blue", "yellow");

foreach ($names as $idx){
    ?>

    <div class="box">
        <div class="title"><?php echo $idx['title'] ; ?></div>
        <div class="description"><?php echo $idx['description'] ; ?></div>
        <div class='btncol'>
            <div > </div>

            <div class="btn edit"><a href="<?php echo base_url().'index.php/user/edit/'.$idx['id']?>"> <img class="logo" src="<?php echo base_url('assets/img.png')?>" /> </a></div>    
            <div class="btn delete"><a href="<?php echo base_url().'index.php/user/delete/'.$idx['id']?>">  <img class="logo1" src="<?php echo base_url('assets/img2.png')?>" /> </a></div>    
 
</div>
</div>

    
<?php } ?>
</div>


</body>
</html>

