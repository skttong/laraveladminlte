<?php $__env->startSection('content'); ?>
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>รายชื่อโรงพยาบาล</h1>
          </div>
          <!--<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hospital</li>
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
                  <h3 class="card-title"><a href="<?php echo e(URL::to('/add_hospital')); ?>" ><button type="button" class="btn btn-block bg-gradient-success btn-sm">ADD</button></a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-sm">
                    <thead>
                      <!--<tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Progress</th>
                        <th style="width: 40px">Label</th>
                      </tr>-->
                      <tr>
                        <th>ลำดับ</th>  
                        <th>ชื่อโรงพยาบาล</th>
                        <th>เบอร์โทร</th>
                        <th>ที่อยู่</th>
                        <th>จังหวัด</th>
                        <th>อำเภอ</th>
                        <th>ตำบล</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                      <td><?php echo e($row->id); ?></td>
                      <td><?php echo e($row->hp_name); ?></td>
                      <td> <?php echo e($row->hp_phone); ?> </td>
                      <td> <?php echo e($row->hp_address); ?> </td>
                      <td><?php echo e($row->hp_province); ?></td>
                      <td><?php echo e($row->hp_district); ?></td>
                      <td> <?php echo e($row->hp_subdistrict); ?> </td>
                      <td> 
                      <a href="<?php echo e(URL::to('/edit_hospital/'.$row->id)); ?>" class="btn btn-sm btn-info">Edit</a>
                      <!--<a href="#" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>-->
                      </td>

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
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/backend/hospital/list_hospital.blade.php ENDPATH**/ ?>