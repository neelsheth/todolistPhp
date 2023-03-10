<head>
    <link rel = "stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css"/>
</head>

<div class='flex'>
    <h1>Edit</h1>
</div>

<form method='post' name="creatUser" action="<?php echo base_url().'index.php/user/edit/'.$user['id'];?>">
<div class="flex">
<div class="addTodo">   
<div>

        <input name="title" placeHolder="Title.."  value="<?php echo set_value('title',$user['title']); ?>"></input>
        <?php echo form_error('title');?>
    </div>

    <div>

        <input name="description" placeHolder="Description.."  value="<?php echo set_value('description',$user['description']); ?>""></input>
        <?php echo form_error('description');?>
    
    </div>

    <button class="addbtn">Submit</button>
    </div>
    
    </div>

</from>