<?php $__env->startSection('content'); ?>

       <div class="row">
<div class="col-md-12">
<div class="card card-primary">
<div class="card-header info">
<h3 class="card-title">User List</h3>
</div>
            <!-- /.card-header -->
 <div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Name</th>               
<th>email</th>  
<th>Permission</th> 
<th>Action</th>                  
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($row->id); ?></td>
<td><?php echo e($row->name); ?></td>
<td> <?php echo e($row->email); ?> </td>
<td> 
       <?php 


if($row->role==1)
{
       echo 'Admin';
}
if($row->role==2)
{
       echo 'Manager';
}
if($row->role==3)
{
       echo 'User';
}

?> 

</td>
<td>
<a href="<?php echo e(URL::to('/edit_user/'.$row->id)); ?>" class="btn btn-sm btn-info">Edit</a>
<a href="<?php echo e(URL::to('delete_user/'.$row->id)); ?>" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>

</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>Name</th>               
<th>email</th>  
<th>Permission</th> 
<th>Action</th>
</tr>
</tfoot>
        </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        </div>

            <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/backend/user/list_user.blade.php ENDPATH**/ ?>