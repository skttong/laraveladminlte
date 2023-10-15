<?php $__env->startSection('content'); ?>

<div class="row">
<div class="col-md-12">
<div class="card card-primary">
<div class="card-header info">
<h3 class="card-title">TripleP24 List</h3>
</div>
            <!-- /.card-header -->
 <div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Name</th>               
<th>ข้อ 1</th>  
<th>ข้อ 2</th>  
<th>ข้อ 3</th> 
<th>ข้อ 4</th>  
<th>ข้อ 5</th>  
<th>ข้อ 6</th>  
<th>ข้อ 7</th>  
<th>ข้อ 8</th>  
<th>ข้อ 9</th>  
<th>ข้อ 10</th>
<th>ข้อ 11</th>  
<th>ข้อ 12</th>  
<th>ข้อ 13</th> 
<th>ข้อ 14</th>  
<th>ข้อ 15</th>  
<th>ข้อ 16</th>  
<th>ข้อ 17</th>  
<th>ข้อ 18</th>  
<th>ข้อ 19</th>  
<th>ข้อ 20</th> 
<th>ข้อ 21</th> 
<th>ข้อ 22</th> 
<th>ข้อ 23</th> 
<th>ข้อ 24</th> 
<th>รวม</th>   
<th>Action</th>                  
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($row->id); ?></td>
<td><?php echo e($row->prefix); ?><?php echo e($row->names); ?> <?php echo e($row->surnames); ?></td>
<td> <?php echo e($row->r1); ?> </td>
<td> <?php echo e($row->r2); ?> </td>
<td> <?php echo e($row->r3); ?> </td>
<td> <?php echo e($row->r4); ?> </td>
<td> <?php echo e($row->r5); ?> </td>
<td> <?php echo e($row->r6); ?> </td>
<td> <?php echo e($row->r7); ?> </td>
<td> <?php echo e($row->r8); ?> </td>
<td> <?php echo e($row->r9); ?> </td>
<td> <?php echo e($row->r10); ?> </td>
<td> <?php echo e($row->r11); ?> </td>
<td> <?php echo e($row->r12); ?> </td>
<td> <?php echo e($row->r13); ?> </td>
<td> <?php echo e($row->r14); ?> </td>
<td> <?php echo e($row->r15); ?> </td>
<td> <?php echo e($row->r16); ?> </td>
<td> <?php echo e($row->r17); ?> </td>
<td> <?php echo e($row->r18); ?> </td>
<td> <?php echo e($row->r19); ?> </td>
<td> <?php echo e($row->r20); ?> </td>
<td> <?php echo e($row->r21); ?> </td>
<td> <?php echo e($row->r22); ?> </td>
<td> <?php echo e($row->r23); ?> </td>
<td> <?php echo e($row->r24); ?> </td>
<td></td>

<td>
<a href="<?php echo e(URL::to('/edit_bookcategory/'.$row->id)); ?>" class="btn btn-sm btn-info">Edit</a>
<a href="<?php echo e(URL::to('delete_bookcategory/'.$row->id)); ?>" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>

</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
        </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        </div>

            <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/backend/triplep24/list_triplep24.blade.php ENDPATH**/ ?>