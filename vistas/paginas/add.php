<?php
// Get submitted form data  
$postData = array(); 
if(!empty($sessData['postData'])){ 
    $postData = $sessData['postData']; 
    unset($_SESSION['postData']); 
}
?>
<div class="container">
<!-- Content here -->

    <div class="row">
        <div class="col-md-12 head">
            <h1>Add User</h1>
            
            <!-- Back link -->
            <div class="float-right">
                <a href="index.php" class="btn btn-success"><i class="back"></i> Back</a>
            </div>
        </div>
        
        <!-- Status message -->
        <?php if(!empty($statusMsg)){ ?>
            <div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
        <?php } ?>
        
        <div class="col-md-12">
            <form method="post" class="form">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required="">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required="">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>" required="">
                </div>
                <input type="hidden" name="action_type" value="add"/>
                <input type="submit" class="form-control btn-primary" name="submit" value="Add User"/>
                <?php
                $registro = new ControladorCRUD();
                $registro->ctrAdd();
                ?>
            </form>
        </div>
    </div>
</div>