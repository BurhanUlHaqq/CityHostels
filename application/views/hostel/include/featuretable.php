<div style="height: 500px;">
  <table class = "table-bordered col-lg-12 table" style = "width:100%;">
    <tr>
      <th style = "width:30%;">Recommended for</th>
      <td style = "width:70%;">
        <div class="form-group has-feedback" ng-class="{'has-success':inputform.recommend.$dirty && inputform.recommend.$valid, 'has-error':inputform.recommend.$dirty && inputform.recommend.$invalid}">
          <input type="text" class="better-placeholder form-control" name="recommend" placeholder="Recommended for?? comma saperated" id="fback" ng-model="data.recommend" required>
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.recommend.$dirty && inputform.recommend.$valid, 'glyphicon-remove': inputform.recommend.$dirty && inputform.recommend.$invalid}" aria-hidden="true">
        </div>
      </td>
    </tr>
    <tr>
      <th style = "width:30%;">Free Facilities</th>
      <td style = "width:70%;">
        <div class="form-group has-feedback" ng-class="{'has-success':inputform.free_facilities.$dirty && inputform.free_facilities.$valid, 'has-error':inputform.free_facilities.$dirty && inputform.free_facilities.$invalid}">
          <input type="text" class="better-placeholder form-control" name="free_facilities" placeholder="Enter Free Facilities comma saperated" id="fback" ng-model="data.free_facilities" required>
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.free_facilities.$dirty && inputform.free_facilities.$valid, 'glyphicon-remove': inputform.free_facilities.$dirty && inputform.free_facilities.$invalid}" aria-hidden="true">
        </div>
      </td>
    </tr>
    <tr>
      <th style = "width:30%;">Paid Services</th>
      <td style = "width:70%;">
        <div class="form-group has-feedback" ng-class="{'has-success':inputform.paid_facilities.$dirty && inputform.paid_facilities.$valid, 'has-error':inputform.paid_facilities.$dirty && inputform.paid_facilities.$invalid}">
          <input type="text" class="better-placeholder form-control" name="paid_facilities" placeholder="Enter paid Facilities comma saperated" id="fback" ng-model="data.paid_facilities" required>
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.paid_facilities.$dirty && inputform.paid_facilities.$valid, 'glyphicon-remove': inputform.paid_facilities.$dirty && inputform.paid_facilities.$invalid}" aria-hidden="true">
        </div>
      </td>
    </tr>
    <tr>
      <th style = "width:30%;">Other Features</th>
      <td style = "width:70%;">
        <div class="form-group has-feedback" ng-class="{'has-success':inputform.others.$dirty && inputform.others.$valid, 'has-error':inputform.others.$dirty && inputform.others.$invalid}">
          <input type="text" class="better-placeholder form-control" name="others" placeholder="Enter Features you Offered comma saperated" id="fback" ng-model="data.others" required>
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.others.$dirty && inputform.others.$valid, 'glyphicon-remove': inputform.others.$dirty && inputform.others.$invalid}" aria-hidden="true">
        </div>
      </td>
    </tr>
    <tr>
      <th style = "width:30%;">Offered</th>
      <td style = "width:70%;">
        <div class="form-group has-feedback" ng-class="{'has-success':inputform.offered.$dirty && inputform.offered.$valid, 'has-error':inputform.offered.$dirty && inputform.offered.$invalid}">
          <input type="text" class="better-placeholder form-control" name="offered" placeholder="Enter things that you not Offered comma saperated" id="fback" ng-model="data.offered" required>
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.offered.$dirty && inputform.offered.$valid, 'glyphicon-remove': inputform.offered.$dirty && inputform.offered.$invalid}" aria-hidden="true">
        </div>
      </td>
    </tr>
    <tr>
      <th style = "width:30%;">Not Allowed</th>
      <td style = "width:70%;">
        <div class="form-group has-feedback" ng-class="{'has-success':inputform.not_allowed.$dirty && inputform.not_allowed.$valid, 'has-error':inputform.not_allowed.$dirty && inputform.not_allowed.$invalid}">
          <input type="text" class="better-placeholder form-control" name="not_allowed" placeholder="Enter things that not Allowed in hostel comma saperated" id="fback" ng-model="data.not_allowed" required>
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.not_allowed.$dirty && inputform.not_allowed.$valid, 'glyphicon-remove': inputform.not_allowed.$dirty && inputform.not_allowed.$invalid}" aria-hidden="true">
        </div>
      </td>
    </tr>
  </table>
</div>