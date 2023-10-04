<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header" style="border-bottom: none">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id ="loginForm" class="theme-form login-form needs-validation" novalidate>
                    @csrf
                    <h4>Login</h4>
                    <br>
                    <div class="form-group">
                    <label>Phone Number</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-mobile"></i></span>
                        <input class="form-control" type="number" name="no_telepon" required="" placeholder="ex : 62813224xxxx">
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
                    {{-- <p><a class="ms-2" href="javascript:void(0)">forgot password ?</a></p> --}}
                    <div id="signInButton" class="form-group">
                    <button  type="button" class="btn btn-primary btn-block" onclick="loginValidation()">Sign in</button>
                    </div>
                    <p id="createAccountText">Don't have account?<a class="ms-2"  href="javascript:void(0)" onclick="changeModal()">Create Account</a></p>
                </form>
                <div id="spinner" class="form-group text-center" hidden>
                    <div  class="row spinner-border p-0 mb-0" role="status">
                        <span class="visually-hidden p-0 mb-0">Loading...</span>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>