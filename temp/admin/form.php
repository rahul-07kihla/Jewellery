<form class="form-validate form-horizontal col-lg-30" id="register_form" method="post" action="models/signproccess.php">
                    <div class="login-wrap col-lg-30">
                    <h1>Sign Up</h1>
                    <div class="form-group ">
                     <label for="profile" class="control-label col-lg-3">Profile <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="profile" name="image" type="file" />
                      </div>
                    </div>
                    <div class="form-group ">
                     <label for="username" class="control-label col-lg-3">Username <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" name="username" type="text" placeholder="Enter your username" autofocus/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-3">Email <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="email" name="email" type="email" placeholder="Enter your email"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-3">Password <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="password" name="pwd" type="password" placeholder="Enter your password"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="confirm_password" class="control-label col-lg-3">Confirm Password <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="confirm_password" name="cpwd" type="password" placeholder="Enter your confirm password"/>
                      </div>
                    </div>
                        <input class="btn btn-primary" type="submit" value="Sign up">