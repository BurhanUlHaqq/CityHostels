<div class="modal fade" id="1<?php echo $tenant->T_Id; ?>" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="panel panel-primary">
          <div class="panel-heading my-bg-color">
          <h4 class="modal-title">Tenant Detail</h4>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <table class="table table-responsive">
          <tr>
            <th>Name</th>
            <th>Father Name</th>
            <th>Image</th>
            <th>CNIC</th>
            <th>Cell</th>
            <th>Job</th>
            <th>Company</th>
            <th>Admission Date</th>
          </tr>
          <tr>
            <td><?php echo ucwords($tenant->Name); ?></td>
            <td><?php echo ucwords($tenant->F_Name); ?></td>
            <td><img src="<?=base_url('assets/images/'.$tenant->image);?>" height="120px" width="100px"></td>
            <td><?php echo $tenant->CNIC; ?></td>
            <td><?php echo $tenant->Cell_No; ?></td>
            <td><?php echo ucwords($tenant->job); ?></td>
            <td><?php echo ucwords($tenant->organization); ?></td>
            <td><?php echo $tenant->Admission_date; ?></td>
          </tr>
        </table>
      </div>
      <div class="form-group modal-footer">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="button" class="btn btn-info my-bg-color" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>