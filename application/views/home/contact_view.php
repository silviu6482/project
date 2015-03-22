<div class="row">
  <div id="home-side" class="col-md-10">

<?php 
if( $_SERVER['REQUEST_METHOD'] == 'GET' )   /* display the contact form */ 
    { 
    ?> 
    <form  id="register_form" class="form-horizontal" action="" method="POST" enctype="multipart/form-data"> 
        <input type="hidden" name="action" value="submit"> 
        <div class="form-group">
            <label class="col-sm-4 control-label">Name</label>
            <div class="col-sm-8">
                <input class="form-control" name="name" type="text" value="" size="30"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Email</label>
            <div class="col-sm-8">
                <input class="form-control" name="email" type="text" value="" size="30"/><br> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Email</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="message" rows="7" cols="30"></textarea><br> 
            </div>
        </div>        
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <input type="submit" value="Send" class="btn btn-primary" /> 
                <a class="btn btn-default" href="<?=site_url('/')?>">Back</a>
            </div>
        </div>
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("silviu.parjolea@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 

</div>
</div>