<div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Test the Database Connection</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Database Hostname</label>
                                  <input type="text" class="form-control" id="username" name="dbname" value="" required="" title="Please enter the Database name" placeholder="localhost">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="name" class="control-label">Database User</label>
                                  <input type="text" class="form-control" id="name" name="user" value="" required="" placeholder="root" title="Please enter the Database user">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Database Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" placeholder="password" title="Please enter the Password">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                              
                              <input type="submit" class="btn btn-success btn-block" value="Test Connection">
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">

                      <div class="well">
                        <p class="lead"><u>Database Test Log</u></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li style="color:blue;"><span class="glyphicon glyphicon-ok" ></span> Connection Successful</li>
                      </ul>
                        <br><br><br><br><br><br>
                      <p>
                        <button type="button" class="btn btn-primary btn-round">Previous</button>
                        <button type="button" class="btn btn-default btn-round" style="float:right;">Next</button>
                      </p>  
                      </div>     
                      

                  </div>
              </div>
          </div>
      </div>
  </div>