<head>
    <link rel = "stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css"/>
</head>

<header>TODO'S</header>

<form method='post' name="creatUser" action="<?php echo base_url().'index.php/user/create';?>">
    <div class="flex">
<div class="addTodo">
    <div>

        <input name="title"  placeHolder="Title.." value="<?php echo set_value('title'); ?>"></input>
        <?php echo form_error('title');?>
    </div>

    <div>

        <input name="description" placeHolder="Description.." value="<?php echo set_value('description'); ?>"></input>
        <?php echo form_error('description');?>
    
    </div>

    <button class="addbtn" >Add to list</button>

    </div>
    
    </div>
</from>