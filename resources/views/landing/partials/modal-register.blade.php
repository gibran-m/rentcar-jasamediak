<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header" style="border-bottom: none">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id ="registerForm" class="needs-validation theme-form login-form" novalidate>
                    @csrf
                    <h4>register</h4>
                    <br>
                    <div class="form-group">
                    <label>Phone Number</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-mobile"></i></span>
                        <input class="form-control" type="number" name="phone" required="" placeholder="ex : 62813224xxxx">
                        <div class="invalid-feedback">required</div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                            <input class="form-control" type="text" name="name" required="" placeholder="ex : David Da Silva">
                            <div class="invalid-feedback">required</div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Home Address</label>
                        <div class="input-group"><span class="input-group-text"><i class="icon-home"></i></span>
                            <input class="form-control" type="text" name="address" required="" placeholder="ex : Braga Streets No.1">
                            <div class="invalid-feedback">required</div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Driver License</label>
                        <div class="input-group"><span class="input-group-text"><i class="icon-id-badge"></i></span>
                            <input class="form-control" type="text" name="license" required="" placeholder="ex : 32092390xxxxx">
                            <div class="invalid-feedback">required</div>
                        </div>

                    </div>
                    <div class="form-group">
                    <label>Password</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                        <input class="form-control" type="password" name="password" required="" placeholder="*********">
                        <div class="show-hide"><span class="show">                         </span></div>
                        <div class="invalid-feedback">required</div>
                    </div>
                    </div>
                    <div id="createAccountButton" class="form-group">
                        <button class="btn btn-primary btn-block" type="button" onclick="registerValidation()">Create Account</button>
                    </div>
                    <div id="spinner" class="form-group text-center" hidden>
                        <div  class="row spinner-border p-0 mb-0" role="status">
                            <span class="visually-hidden p-0 mb-0">Loading...</span>
                        </div>
                    </div>  
                </form>
                <div id="success" class="form-group text-center" hidden>
                    <img src="/assets/images/landing/global/success.png"  style="width: 50%">
                    <p>Congratulations!, Welcome to our family</p> 
                </div> 
                <div id="error" class="form-group text-center" hidden>
                    <img src="/assets/images/landing/global/fail.png"  style="width: 30%"> 
                    <p>Sorry, something went wrong, please try again later</p> 

                </div> 
            </div>
        </div>
    </div>
</div>