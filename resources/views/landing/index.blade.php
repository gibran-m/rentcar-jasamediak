@extends('global-layouts.templates.landing')

@section('body')
        <!--home section start-->
        <section class="landing-home section-pb-space" id="home">
            {{-- <img class="img-fluid bg-img-cover" src="../assets/images/landing/landing-home/home-bg2.jpg" alt=""> --}}
            <div class="custom-container">
              <div class="row">
                <div class="col-12">
                  <div class="landing-home-contain">
                    <div>
                      <h2>Rent <span>Car</span></h2>
                      <p>When it comes to dashboard or web apps. one of the first impression you consider is the design. It needs to be high quality enough otherwise you will lose potential users due to bad design.</p>
                      <div class="row">
                        <button class="btn btn-landing btn-lg" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                        &nbsp;
                        <button class="btn btn-landing btn-lg btn-info" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="position-block">   

                <ul class="animat-block">
                  {{-- <li><img class="img-fluid img-parten top-parten" src="../assets/images/landing/landing-home/home-position/img-parten.png" alt="">
                    <div><img class="img-fluid img1 v-align-t m-t-30" src="../assets/images/landing/landing-home/home-position/img-1.jpg" alt=""><img class="img-fluid img2 v-align-t" src="../assets/images/landing/landing-home/home-position/img-2.jpg" alt=""><img class="img-fluid img3 v-align-b" src="../assets/images/landing/landing-home/home-position/img-3.jpg" alt=""><img class="img-fluid img4 v-align-b" src="../assets/images/landing/landing-home/home-position/img-4.jpg" alt=""></div>
                  </li> --}}
                  <li>
                    <div>
                        <img class="" src="../assets/images/landing/landing-home/home-bg.png" alt="">
                    </div>
                  </li>
                  

                </ul>
            </div>
            
        </section>
        <!--home section end-->
        <!--footer start-->
        <section class="landing-footer section-py-space light-bg" id="footer">
            <div class="custom-container">
              <div class="row">
                <div class="col-12">
                  <div class="footer-contain">
                    <div class="rating-wrraper">
                      <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <path d="m323.686 231.62h25.519c11.892 0 21.533 9.641 21.533 21.533v16.135c0 11.892-9.641 21.533-21.533 21.533h-25.519z" fill="#ffb09e"></path>
                          <path d="m188.613 231.62h-25.519c-11.892 0-21.533 9.641-21.533 21.533v16.135c0 11.892 9.641 21.533 21.533 21.533h25.519z" fill="#f89580"></path>
                          <g>
                            <path d="m261.623 3.405 10.754 21.79c.889 1.802 2.608 3.05 4.596 3.339l24.047 3.494c5.007.728 7.006 6.88 3.383 10.412l-17.4 16.961c-1.439 1.402-2.095 3.423-1.756 5.403l4.108 23.95c.855 4.987-4.379 8.789-8.857 6.435l-21.508-11.308c-1.778-.935-3.903-.935-5.681 0l-21.508 11.307c-4.478 2.354-9.712-1.448-8.857-6.435l4.108-23.95c.34-1.98-.317-4.001-1.756-5.403l-17.4-16.961c-3.623-3.531-1.624-9.684 3.383-10.412l24.047-3.494c1.988-.289 3.707-1.538 4.596-3.339l10.754-21.79c2.239-4.536 8.708-4.536 10.947.001z" fill="#ffe177"></path>
                          </g>
                          <g>
                            <path d="m271.606 23.627-.773 1.566c-.886 1.803-2.607 3.05-4.596 3.339l-24.05 3.493c-5.008.732-7.007 6.883-3.38 10.417l17.404 16.961c1.432 1.401 2.092 3.421 1.752 5.399l-3.184 18.537c-.515.113-1.01.299-1.473.546l-21.505 11.304c-4.482 2.349-9.717-1.453-8.861-6.44l4.111-23.947c.34-1.978-.319-3.998-1.752-5.399l-17.404-16.961c-3.627-3.534-1.628-9.686 3.38-10.417l24.05-3.493c1.989-.289 3.709-1.535 4.596-3.339l10.757-21.793c2.236-4.534 8.707-4.534 10.943 0z" fill="#ffd15b"></path>
                          </g>
                          <g>
                            <path d="m361.831 3.405 10.754 21.79c.889 1.802 2.608 3.05 4.596 3.339l24.047 3.494c5.007.728 7.006 6.88 3.383 10.412l-17.4 16.961c-1.439 1.402-2.095 3.423-1.756 5.403l4.108 23.95c.855 4.987-4.379 8.789-8.857 6.435l-21.508-11.307c-1.778-.935-3.903-.935-5.681 0l-21.508 11.307c-4.478 2.354-9.712-1.448-8.857-6.435l4.108-23.95c.34-1.98-.317-4.001-1.756-5.403l-17.4-16.961c-3.623-3.531-1.624-9.684 3.383-10.412l24.047-3.494c1.988-.289 3.707-1.538 4.596-3.339l10.754-21.79c2.238-4.537 8.708-4.537 10.947 0z" fill="#ffe177"></path>
                          </g>
                          <g>
                            <path d="m371.813 23.627-.773 1.566c-.886 1.803-2.607 3.05-4.596 3.339l-24.05 3.493c-5.008.732-7.007 6.883-3.38 10.417l17.404 16.961c1.432 1.401 2.092 3.421 1.752 5.399l-3.184 18.537c-.505.113-.999.299-1.473.546l-21.505 11.304c-4.482 2.349-9.717-1.453-8.862-6.44l4.111-23.947c.34-1.978-.319-3.998-1.752-5.399l-17.404-16.961c-3.627-3.534-1.628-9.686 3.38-10.417l24.05-3.493c1.989-.289 3.71-1.535 4.596-3.339l10.758-21.793c2.236-4.534 8.707-4.534 10.943 0z" fill="#ffd15b"></path>
                          </g>
                          <g>
                            <path d="m439.455 65.23 10.754 21.79c.889 1.802 2.608 3.05 4.596 3.339l24.047 3.494c5.007.728 7.006 6.88 3.383 10.412l-17.4 16.961c-1.439 1.402-2.095 3.423-1.756 5.403l4.108 23.95c.855 4.987-4.379 8.789-8.857 6.435l-21.508-11.307c-1.778-.935-3.903-.935-5.681 0l-21.508 11.307c-4.478 2.354-9.712-1.448-8.857-6.435l4.108-23.95c.34-1.98-.317-4.001-1.756-5.403l-17.4-16.961c-3.623-3.531-1.624-9.684 3.383-10.412l24.047-3.494c1.988-.289 3.707-1.538 4.596-3.339l10.754-21.79c2.239-4.537 8.708-4.537 10.947 0z" fill="#ffe177"></path>
                          </g>
                          <g>
                            <path d="m449.434 85.452-.773 1.566c-.886 1.803-2.607 3.05-4.596 3.339l-24.04 3.493c-5.008.732-7.007 6.883-3.39 10.417l17.404 16.961c1.442 1.401 2.091 3.421 1.752 5.399l-3.174 18.537c-.505.113-.999.299-1.473.546l-21.515 11.304c-4.472 2.349-9.706-1.453-8.851-6.44l4.101-23.947c.34-1.978-.309-3.998-1.752-5.399l-17.404-16.961c-3.617-3.534-1.618-9.686 3.39-10.417l24.04-3.493c1.989-.289 3.709-1.535 4.596-3.339l10.757-21.793c2.236-4.534 8.707-4.534 10.953 0z" fill="#ffd15b"></path>
                          </g>
                          <g>
                            <path d="m83.492 65.23 10.754 21.79c.889 1.802 2.608 3.05 4.596 3.339l24.047 3.494c5.007.728 7.006 6.88 3.383 10.412l-17.4 16.961c-1.439 1.402-2.095 3.423-1.756 5.403l4.108 23.95c.855 4.987-4.379 8.789-8.857 6.435l-21.508-11.307c-1.778-.935-3.903-.935-5.681 0l-21.508 11.306c-4.478 2.354-9.712-1.448-8.857-6.435l4.108-23.95c.34-1.98-.317-4.001-1.756-5.403l-17.4-16.961c-3.623-3.531-1.624-9.684 3.383-10.412l24.047-3.494c1.988-.289 3.707-1.538 4.596-3.339l10.754-21.79c2.239-4.536 8.708-4.536 10.947.001z" fill="#ffe177"></path>
                          </g>
                          <g>
                            <path d="m93.479 85.462-.773 1.556c-.896 1.803-2.607 3.05-4.596 3.339l-24.05 3.493c-5.008.732-7.007 6.883-3.38 10.417l17.393 16.961c1.443 1.401 2.102 3.421 1.762 5.399l-3.184 18.537c-.505.113-.999.299-1.474.546l-21.505 11.304c-4.482 2.349-9.717-1.453-8.861-6.44l4.111-23.947c.34-1.978-.319-3.998-1.762-5.399l-17.393-16.961c-3.627-3.534-1.628-9.686 3.38-10.417l24.05-3.493c1.989-.289 3.699-1.535 4.596-3.339l10.747-21.793c2.246-4.534 8.717-4.534 10.953 0z" fill="#ffd15b"></path>
                          </g>
                          <g>
                            <path d="m161.416 3.405 10.754 21.79c.889 1.802 2.608 3.05 4.596 3.339l24.047 3.494c5.007.728 7.006 6.88 3.383 10.412l-17.4 16.961c-1.439 1.402-2.095 3.423-1.756 5.403l4.108 23.95c.855 4.987-4.379 8.789-8.857 6.435l-21.508-11.307c-1.778-.935-3.903-.935-5.681 0l-21.508 11.307c-4.478 2.354-9.712-1.448-8.857-6.435l4.108-23.95c.34-1.98-.317-4.001-1.756-5.403l-17.4-16.961c-3.623-3.531-1.624-9.684 3.383-10.412l24.047-3.494c1.988-.289 3.707-1.538 4.596-3.339l10.754-21.79c2.239-4.537 8.708-4.537 10.947 0z" fill="#ffe177"></path>
                          </g>
                          <g>
                            <path d="m171.398 23.627-.773 1.566c-.886 1.803-2.607 3.05-4.596 3.339l-24.05 3.493c-5.008.732-7.007 6.883-3.38 10.417l17.404 16.961c1.432 1.401 2.092 3.421 1.752 5.399l-3.184 18.537c-.505.113-.999.299-1.473.546l-21.505 11.304c-4.482 2.349-9.717-1.453-8.861-6.44l4.111-23.947c.34-1.978-.319-3.998-1.752-5.399l-17.404-16.961c-3.627-3.534-1.628-9.686 3.38-10.417l24.05-3.493c1.989-.289 3.709-1.535 4.596-3.339l10.758-21.793c2.236-4.534 8.707-4.534 10.943 0z" fill="#ffd15b"></path>
                          </g>
                          <path d="m393.086 438.162-72.923-24.944-18.828 13.56h-90.372l-18.828-13.56-72.923 24.944c-17.193 5.881-28.746 22.042-28.746 40.214v33.622h133.676l32.007-10 32.007 10h133.676v-33.622c0-18.171-11.552-34.333-28.746-40.214z" fill="#8ac9fe"></path>
                          <path d="m192.136 423.789-42.015 14.372c-17.187 5.884-28.738 22.04-28.738 40.217v33.622h-30.913v-33.622c0-18.176 11.551-34.333 28.738-40.217l72.927-24.945 9.489 2z" fill="#60b7ff"></path>
                          <path d="m301.364 331.472v85.364l-45.214 24.045-45.215-24.045v-50.392l.031-34.972z" fill="#ffb09e"></path>
                          <path d="m266.454 433.122-10.304 7.759-45.215-24.045v-50.392l.031-34.972h20.608l-.031 34.972v40.392z" fill="#f89580"></path>
                          <path d="m301.364 331.472v58.455c-11.932 5.657-25.255 8.81-39.3 8.81h-11.829c-14.044 0-27.368-3.153-39.3-8.81v-23.483l.031-34.972z" fill="#f89580"></path>
                          <path d="m178.613 192.427v114.088c0 39.553 32.064 71.617 71.617 71.617h11.838c39.553 0 71.617-32.064 71.617-71.617v-114.088c0-12.113-9.819-21.932-21.932-21.932h-111.208c-12.112 0-21.932 9.819-21.932 21.932z" fill="#ffcebf"></path>
                          <path d="m266.454 377.995c-1.453.093-2.916.134-4.39.134h-11.829c-39.557 0-71.624-32.066-71.624-71.613v-94.087c0-12.118 9.82-21.937 21.937-21.937h20.608c-12.118 0-21.937 9.82-21.937 21.937v94.087c.001 38.073 29.718 69.212 67.235 71.479z" fill="#ffb09e"></path>
                          <g>
                            <g>
                              <path d="m222.782 278.835c-4.269 0-7.728-3.46-7.728-7.728v-10.144c0-4.268 3.46-7.728 7.728-7.728s7.728 3.46 7.728 7.728v10.144c0 4.268-3.459 7.728-7.728 7.728z" fill="#68748f"></path>
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="m289.365 278.835c-4.269 0-7.728-3.46-7.728-7.728v-10.144c0-4.268 3.46-7.728 7.728-7.728s7.728 3.46 7.728 7.728v10.144c0 4.268-3.459 7.728-7.728 7.728z" fill="#68748f"></path>
                            </g>
                          </g>
                          <g>
                            <path d="m256.15 340.239c-14.948 0-27.109-12.161-27.109-27.109 0-4.268 3.46-7.728 7.728-7.728s7.728 3.46 7.728 7.728c0 6.425 5.228 11.653 11.652 11.653 6.425 0 11.652-5.228 11.652-11.653 0-4.268 3.46-7.728 7.728-7.728 4.269 0 7.728 3.46 7.728 7.728.001 14.948-12.159 27.109-27.107 27.109z" fill="#f89580"></path>
                          </g>
                          <path d="m256.15 440.886-22.15 3.781-9.857 15.769 16.003 19.555h32.007l16.003-19.555-9.156-14.769z" fill="#68748f"></path>
                          <path d="m244.753 460.438 16.003 19.557h-20.609l-16.002-19.557 9.855-15.771 22.15-3.786 16.129 3.379-5.825 2.917z" fill="#5d6980"></path>
                          <path d="m240.146 479.991-16.003 32.007h64.013l-16.003-32.007z" fill="#68748f"></path>
                          <path d="m260.756 479.995-16.003 32.005h-20.608l16.002-32.005z" fill="#5d6980"></path>
                          <path d="m210.935 406.836 45.214 34.045-53.364 32.604c-4.664 2.85-10.65-.507-10.65-5.973v-54.293z" fill="#eaf6ff"></path>
                          <path d="m301.364 406.836-45.214 34.045 53.364 32.604c4.664 2.85 10.65-.507 10.65-5.973v-54.293z" fill="#eaf6ff"></path>
                          <path d="m349.48 231.62h-20.688c-22.567 0-42.507-14.686-49.201-36.237l-4.747-15.283-16.89 27.188c-9.4 15.131-25.95 24.333-43.763 24.333h-51.371v-42.055c0-34.145 27.68-61.825 61.825-61.825h63.012c34.145 0 61.825 27.68 61.825 61.825v42.054z" fill="#68748f"></path>
                          <path d="m224.64 127.744h30.912c-34.137 0-61.825 27.677-61.825 61.825v42.051h-30.912v-42.051c0-34.149 27.687-61.825 61.825-61.825z" fill="#5d6980"></path>
                        </g>
                      </svg>
                    </div>
                    <h2>Rent Car App Trusted By Many People World Wide.</h2>
                    <p>If You like Our Service Rate Us.</p>
                    <ul class="star-rate">
                      <li><i class="fa fa-star font-warning"></i></li>
                      <li><i class="fa fa-star font-warning"></i></li>
                      <li><i class="fa fa-star font-warning"></i></li>
                      <li><i class="fa fa-star font-warning"></i></li>
                      <li><i class="fa fa-star font-warning"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <div class="sub-footer">
            <div class="custom-container">
                <div class="row">
                <div class="col-md-6 col-sm-10">
                        <p class="text-primary">Rent <span class="text-dark">Car @2023</span></p>
                </div>
                <div class="col-md-6 col-sm-10">
                    <div class="footer-contain">
                    <p class="mb-0"> © Copyright Rent Car | Design By viho</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--footer end-->
        
        @include('landing.partials.modal-login')

        @include('landing.partials.modal-register')
@endsection




@section('script')
<script>
    // $(document).ready(function() {
    //     $('#modalErrorGlobal').modal('show');
    // });

    function changeModal(){
        $('#registerModal').modal('show');
        $('#loginModal').modal('hide');
    }

    function registerValidation(){
        const formData = new FormData($('#registerForm')[0]);

        // Iterate through form fields
        for (let [fieldName, fieldValue] of formData.entries()) {
            const inputElement = document.querySelector(`[name="${fieldName}"]`);
            inputElement.classList.remove('is-invalid', 'is-valid');

            if (fieldValue.trim() === '') {
                inputElement.classList.add('is-invalid');
            } else {
                inputElement.classList.add('is-valid');
            }

        }

        // Submit the form if all validation passes
        if (!document.querySelector('.is-invalid')) {
            $('#modalConfirm').modal('show');
            register();
        }
    }

    function register(){
        document.getElementById('createAccountButton').setAttribute('hidden','true');
        document.getElementById('spinner').removeAttribute('hidden');

        var data = {};

        var form = document.getElementById('registerForm');

        var formElements = form.querySelectorAll('input, select');

        formElements.forEach(function(element) {
            data[element.name] = element.value;
        });

        $.ajax({
            url: '{{ route('register') }}',
            method: 'POST',
            data: data,
            success: function(response) {
            console.log(response);
                if(response.status == 200 ){
                    document.getElementById('spinner').setAttribute('hidden','true');
                    document.getElementById('registerForm').setAttribute('hidden','true');
                    document.getElementById('success').removeAttribute('hidden');
                }else{
                    document.getElementById('spinner').setAttribute('hidden','true');
                    document.getElementById('registerForm').setAttribute('hidden','true');
                    document.getElementById('error').removeAttribute('hidden');
                }

            },
            error: function(xhr, status) {
                console.log(xhr, status);
                // alert("oops, something went wrong please try again later")
                $('#registerModal').modal('hide');
                $('#errorGlobalModal').modal('show');
            }
        });
    }

    function loginValidation(){
        const formData = new FormData($('#loginForm')[0]);

        // Iterate through form fields
        for (let [fieldName, fieldValue] of formData.entries()) {
            const inputElement = document.querySelector(`[name="${fieldName}"]`);
            inputElement.classList.remove('is-invalid', 'is-valid');

            if (fieldValue.trim() === '') {
                inputElement.classList.add('is-invalid');
            } else {
                inputElement.classList.add('is-valid');
            }

        }

        // Submit the form if all validation passes
        if (!document.querySelector('.is-invalid')) {
            $('#modalConfirm').modal('show');
            login();
        }
    }

    function login(){
        document.getElementById('signInButton').setAttribute('hidden','true');
        document.getElementById('createAccountText').setAttribute('hidden','true');
        document.getElementById('spinner').removeAttribute('hidden');

        var data = {};

        var form = document.getElementById('loginForm');

        var formElements = form.querySelectorAll('input, select');

        formElements.forEach(function(element) {
            data[element.name] = element.value;
        });

        $.ajax({
            url: '{{ route('login') }}',
            method: 'POST',
            data: data,
            success: function(response) {
                console.log(response);
                if(response.status == 200 ){
                    window.location.href = "{{ route('dashboard') }}"

                }else{
                    const formData = new FormData($('#loginForm')[0]);

                    for (let [fieldName, fieldValue] of formData.entries()) {
                        const inputElement = document.querySelector(`[name="${fieldName}"]`);
                        inputElement.classList.remove('is-invalid', 'is-valid');

                        inputElement.classList.add('is-invalid');

                    }

                    var invalidFeedback = document.querySelector('.invalid-feedback');
                    invalidFeedback.innerHTML = 'Data not match in our database';
                    

                    document.getElementById('spinner').setAttribute('hidden', 'true');
                    document.getElementById('signInButton').removeAttribute('hidden');
                    document.getElementById('createAccountText').removeAttribute('hidden');
                }

            },
            error: function(xhr, status) {
                console.log(xhr, status);
                // alert("oops, something went wrong please try again later")
                $('#loginModal').modal('hide');
                $('#errorGlobalModal').modal('show');
            }
        });
    }

    function resetForm(id) {
        const form = document.getElementById(id);
        form.reset(); 

        const formControls = form.querySelectorAll('.form-control');
        formControls.forEach(control => {
            control.classList.remove('is-valid', 'is-invalid');
        });

        const feedbackDivs = form.querySelectorAll('.invalid-feedback');
        feedbackDivs.forEach(feedback => {
            feedback.style.display = 'none';
        });
    }

    $('#registerModal').on('hidden.bs.modal', function () {
        resetForm('registerForm');
        document.getElementById('error').setAttribute('hidden','true');
        document.getElementById('success').setAttribute('hidden','true');

        document.getElementById('registerForm').removeAttribute('hidden');
        document.getElementById('createAccountButton').removeAttribute('hidden');
    });

    $('#loginModal').on('hidden.bs.modal', function () {
        resetForm('loginForm');
        document.getElementById('error').setAttribute('hidden','true');
        document.getElementById('success').setAttribute('hidden','true');

        document.getElementById('loginForm').removeAttribute('hidden');
        document.getElementById('createAccountButton').removeAttribute('hidden');
    });




</script>    
@endsection