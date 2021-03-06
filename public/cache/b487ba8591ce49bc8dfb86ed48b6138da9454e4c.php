<div class="col-md-6 m_t_10">
  <div class="card custom-card">
    <div class="card-header cstm-card-head tac">
      <i class="fas fa-clock"></i>
      Admin Panel Action Logs
    </div>
    <div id="actionLogs">
      <div class="card-block content_bg content pContent">
        <?php if(count($data['panels']->actionLogs()) > 0): ?>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Action</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $data['panels']->actionLogs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($action->DisplayName); ?> - <?php echo e($action->Action); ?></td>
                    <td>
                      <span class="badge badge-pill badge-secondary">
                        <?php echo e($data['data']->convertTimeToDate('F d, Y h:i:s A', $action->ActionTime)); ?>

                      </span>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <p class="text-center">There are currently no access logs.</p>
        <?php endif; ?>
        <div class="text-center">
          <a class="btn btn-sm btn-outline-info b_i f14" href="/admin/accessLogs">View All Activity</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
setInterval(function(){
  $("#actionLogs").load(window.location.href + " #actionLogs" )
}, 60000);
</script>
<?php /**PATH C:\laragon\www\ShaiyaCMS\resources\views/partials/ap/panels/actionLogs.blade.php ENDPATH**/ ?>