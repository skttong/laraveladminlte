<?php $__env->startSection('content'); ?>

   <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>รายชื่อเด็ก</h1>
          </div>
          <!--<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">TableChild</li>
            </ol>
          </div>-->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  
        
        <div class="row">
          
          <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><a href="<?php echo e(URL::to('/add_child')); ?>" ><button type="button" class="btn btn-block bg-gradient-success btn-sm">ADD</button></a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-sm">
                    <thead>
                      <!--<tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Progress</th>
                        <th style="width: 40px">Label</th>
                      </tr>-->
                      <tr>
                        <th>ลำดับ</th>  
                        <th>ชื่อ-นามสกุล</th>
                        <th>รายละเอียด</th>
                        <th>DSPM</th>
                        <th>TripleP24 </th>
                        <th>EQ 15 </th>
                        <th>TripleP6 </th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <tbody>
                      <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                      <td><?php echo e($row->id); ?></td>
                      <td><?php echo e($row->prefix); ?><?php echo e($row->names); ?>  <?php echo e($row->surnames); ?></td>
                      <td><a href="<?php echo e(URL::to('/edit_child/'.$row->id)); ?>" class="btn btn-block bg-gradient-primary btn-sm">ดู</a></td>
                      <td><a href="<?php echo e(URL::to('/add_dspm/'.$row->id)); ?>" class="btn btn-block bg-gradient-secondary btn-sm">ตอบ</a></td>
                      <td><a href="<?php echo e(URL::to('/add_triplep24/'.$row->id)); ?>" class="btn btn-block bg-gradient-success btn-sm">ตอบ</a></td>
                      <td><a href="<?php echo e(URL::to('/add_eq15/'.$row->id)); ?>" class="btn btn-block bg-gradient-info btn-sm">ตอบ</a></td>
                      <td><a href="<?php echo e(URL::to('/add_triplep6/'.$row->id)); ?>" class="btn btn-block bg-gradient-warning btn-sm">ตอบ</a></td>
                      <td></td>
                      

                     <!-- <td>
                      <a href="<?php echo e(URL::to('/edit_bookcategory/'.$row->id)); ?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?php echo e(URL::to('delete_bookcategory/'.$row->id)); ?>" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>

                      </td>-->
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                       
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


          </div>
          <!-- /.col (right) -->
        </div>
        <!-- /.row -->
        
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

            <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/backend/child/list_child.blade.php ENDPATH**/ ?>