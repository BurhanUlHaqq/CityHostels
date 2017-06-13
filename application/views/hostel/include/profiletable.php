<script src="http://api.mygeoposition.com/api/geopicker/api.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        function lookupGeoData() {            
            myGeoPositionGeoPicker({
                startAddress     : 'White House, Washington',
                returnFieldMap   : {
                                     'geoposition1a' : '<LAT>',
                                     'geoposition1b' : '<LNG>'
                                   }
            });
        }
    </script>

<table class = "table-bordered col-lg-12 table" style = "width:100%;">
  <tr>
    <th style = "width:30%;">Admin Name</th>
    <td style = "width:70%;">
      <div class="form-group has-feedback" ng-class="{'has-success':inputform.admin_name.$dirty && inputform.admin_name.$valid, 'has-error':inputform.admin_name.$dirty && inputform.admin_name.$invalid}">
        <input type="text" class="better-placeholder form-control" name="admin_name" placeholder="Enter Name" id="fback" ng-model="data.admin_name" required>
        <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.admin_name.$dirty && inputform.admin_name.$valid, 'glyphicon-remove': inputform.admin_name.$dirty && inputform.admin_name.$invalid}" aria-hidden="true">
      </div>
    </td>
  </tr>
  <tr>
    <th style = "width:30%;">CNIC</th>
    <td style = "width:70%;">
      <div class="form-group has-feedback" ng-class="{'has-success':inputform.cnic.$dirty && inputform.cnic.$valid, 'has-error':inputform.cnic.$dirty && inputform.cnic.$invalid}">
        <input type="text" class="better-placeholder form-control" name="cnic" placeholder="Enter CNIC" id="fback" ng-model="data.cnic" required>
        <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.cnic.$dirty && inputform.cnic.$valid, 'glyphicon-remove': inputform.cnic.$dirty && inputform.cnic.$invalid}" aria-hidden="true">
      </div>
    </td>
  </tr>
  <tr>
    <th style = "width:30%;">Hostel Name</th>
    <td style = "width:70%;">
      <div class="form-group has-feedback" ng-class="{'has-success':inputform.H_name.$dirty && inputform.H_name.$valid, 'has-error':inputform.H_name.$dirty && inputform.H_name.$invalid}">
        <input type="text" class="better-placeholder form-control" name="H_name" placeholder="Enter Hostel Name" id="fback" ng-model="data.H_name" required>
        <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.H_name.$dirty && inputform.H_name.$valid, 'glyphicon-remove': inputform.H_name.$dirty && inputform.H_name.$invalid}" aria-hidden="true">
      </div>
    </td>
  </tr>
  <tr>
    <th style = "width:30%;">Street Address</th>
    <td style = "width:70%;">
      <div class="form-group has-feedback" ng-class="{'has-success':inputform.street_address.$dirty && inputform.street_address.$valid, 'has-error':inputform.street_address.$dirty && inputform.street_address.$invalid}">
        <input type="text" class="better-placeholder form-control" name="street_address" placeholder="Enter street Address" id="fback" ng-model="data.street_address" required>
        <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.street_address.$dirty && inputform.street_address.$valid, 'glyphicon-remove': inputform.street_address.$dirty && inputform.street_address.$invalid}" aria-hidden="true">
      </div>
    </td>
  </tr>
  <tr>
    <th style = "width:30%;">City</th>
    <td style = "width:70%;">
      <div class="form-group has-feedback" ng-class="{'has-success':inputform.city.$dirty && inputform.city.$valid, 'has-error':inputform.city.$dirty && inputform.city.$invalid}">
        <input type="text" class="better-placeholder form-control" name="city" placeholder="Enter City Name" id="fback" ng-model="data.city" required>
        <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.city.$dirty && inputform.city.$valid, 'glyphicon-remove': inputform.city.$dirty && inputform.city.$invalid}" aria-hidden="true">
      </div>
    </td>
  </tr>
  <tr>
    <th style = "width:30%;">State/Province</th>
    <td style = "width:70%;">
      <div class="form-group has-feedback" ng-class="{'has-success':inputform.state.$dirty && inputform.state.$valid, 'has-error':inputform.state.$dirty && inputform.state.$invalid}">
        <input type="text" class="better-placeholder form-control" name="state" placeholder="Enter State/Province" id="fback" ng-model="data.state" required>
        <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.state.$dirty && inputform.state.$valid, 'glyphicon-remove': inputform.state.$dirty && inputform.state.$invalid}" aria-hidden="true">
      </div>
    </td>
  </tr>
  <tr>
    <th style = "width:30%;">Discription</th>
    <td style = "width:70%;">
      <div class="form-group has-feedback" ng-class="{'has-success':inputform.Discription.$dirty && inputform.Discription.$valid, 'has-error':inputform.Discription.$dirty && inputform.Discription.$invalid}">
        <textarea type="text" class="better-placeholder form-control" name="Discription" placeholder="Discription" id="fback" ng-model="data.Discription" required></textarea>
        <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.Discription.$dirty && inputform.Discription.$valid, 'glyphicon-remove': inputform.Discription.$dirty && inputform.Discription.$invalid}" aria-hidden="true">
      </div>
    </td>
  </tr>
  <tr>
    <th>Geo-Coordinates</th>
    <td colspan="">
      <button class="btn btn-default" style="background-color: CornflowerBlue; color:white;" onclick="lookupGeoData();">Collect Your Coordinates</button>
    </td>
  </tr>
  <tr>
    <th style = "width:30%;">Latitude on map</th>
    <td style = "width:70%;">
      <div class="form-group has-feedback" ng-class="{'has-success':inputform.latitude.$dirty && inputform.latitude.$valid, 'has-error':inputform.latitude.$dirty && inputform.latitude.$invalid}">
        <input type="text" class="form-control" name="geoposition1a" id="geoposition1a" id="fback" ng-model="data.latitude" required disabled>
        <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.latitude.$dirty && inputform.latitude.$valid, 'glyphicon-remove': inputform.latitude.$dirty && inputform.latitude.$invalid}" aria-hidden="true">
      </div>
    </td>
  </tr>
  <tr>
    <th style = "width:30%;">Longitude on map</th>
    <td style = "width:70%;">
      <div class="form-group has-feedback" ng-class="{'has-success':inputform.longitude.$dirty && inputform.longitude.$valid, 'has-error':inputform.longitude.$dirty && inputform.longitude.$invalid}">
        <input type="text" class="form-control" name="geoposition1b" id="geoposition1b" size="10" id="fback" ng-model="data.longitude" required disabled>
        <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.longitude.$dirty && inputform.longitude.$valid, 'glyphicon-remove': inputform.longitude.$dirty && inputform.longitude.$invalid}" aria-hidden="true">
      </div>
    </td>
  </tr>
  <tr>
    <th style = "width:30%;">Telephone/Cell #</th>
    <td style = "width:70%;">
      <div class="form-group has-feedback" ng-class="{'has-success':inputform.contact.$dirty && inputform.contact.$valid, 'has-error':inputform.contact.$dirty && inputform.contact.$invalid}">
        <input type="text" class="better-placeholder form-control" name="contact" placeholder="Enter Telephone/Cell #" id="fback" ng-model="data.contact" required>
        <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.contact.$dirty && inputform.contact.$valid, 'glyphicon-remove': inputform.contact.$dirty && inputform.contact.$invalid}" aria-hidden="true">
      </div>
    </td>
  </tr>
</table>