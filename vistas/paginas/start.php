<?php
$users = ControladorCRUD::ctrShow();
//print_r($users);
?>
<div class="container">
<!-- Content here -->

    <div class="row">
        <div class="col-md-12 head">
            <h1>Users</h1>
            <!-- Add link -->
            <div class="float-right">
                <a href="index.php?pagina=add" class="btn btn-success"><i class="plus"></i> New User</a>
            </div>
        </div>
        
        <!-- Status message -->
        <?php if(!empty($statusMsg)){ ?>
            <div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
        <?php } ?>

        <!-- List the users -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th width="5%">#</th>
                    <th width="20%">Name</th>
                    <th width="25%">Email</th>
                    <th width="18%">Phone</th>
                    <th width="18%">Created</th>
                    <th width="14%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($users)){ $i=0; foreach($users as $row){ $i++; ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['created']; ?></td>
                    <td>
                        <a href="index.php?pagina=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning">edit</a>
                        <a href="action.php?action_type=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete data?');">delete</a>
                    </td>
                </tr>
                <?php } }else{ ?>
                <tr><td colspan="5">No user(s) found...</td></tr>
                <?php }  ?>
            </tbody>
        </table>
    </div>
</div>