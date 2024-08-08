<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wowdash - Bootstrap 5 Admin Dashboard HTML Template</title>
  <link rel="icon" type="image/png" href="admins/images/favicon.png" sizes="16x16">
  <!-- remix icon font css  -->
  <link rel="stylesheet" href="admins/css/remixicon.css">
  <!-- BootStrap css -->
  <link rel="stylesheet" href="admins/css/lib/bootstrap.min.css">
  <!-- Apex Chart css -->
  <link rel="stylesheet" href="admins/css/lib/apexcharts.css">
  <!-- Data Table css -->
  <link rel="stylesheet" href="admins/css/lib/dataTables.min.css">
  <!-- Text Editor css -->
  <link rel="stylesheet" href="admins/css/lib/editor-katex.min.css">
  <link rel="stylesheet" href="admins/css/lib/editor.atom-one-dark.min.css">
  <link rel="stylesheet" href="admins/css/lib/editor.quill.snow.css">
  <!-- Date picker css -->
  <link rel="stylesheet" href="admins/css/lib/flatpickr.min.css">
  <!-- Calendar css -->
  <link rel="stylesheet" href="admins/css/lib/full-calendar.css">
  <!-- Vector Map css -->
  <link rel="stylesheet" href="admins/css/lib/jquery-jvectormap-2.0.5.css">
  <!-- Popup css -->
  <link rel="stylesheet" href="admins/css/lib/magnific-popup.css">
  <!-- Slick Slider css -->
  <link rel="stylesheet" href="admins/css/lib/slick.css">
  <!-- main css -->
  <link rel="stylesheet" href="admins/css/style.css">
</head>
  <body>

<section class="auth bg-base d-flex flex-wrap">  
    <div class="auth-left d-lg-block d-none">
        <div class="d-flex align-items-center flex-column h-100 justify-content-center">
            <img src="admins/images/auth/auth-img.png" alt="">
        </div>
    </div>
    <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
        <div class="max-w-464-px mx-auto w-100">
            <div>
                <a href="index.html" class="mb-40 max-w-290-px">
                    <img src="admins/images/logo.png" alt="">
                </a>
                <h4 class="mb-12">Sign Up to your Account</h4>
                <p class="mb-32 text-secondary-light text-lg">Welcome back! please enter your detail</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="icon-field mb-16">
                    <span class="icon top-50 translate-middle-y">
                        <iconify-icon icon="f7:person"></iconify-icon>
                    </span>
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Username">
                    @error('name')
                            <span class="mt-12 text-sm text-secondary-light">{{ $message }}</span>
                    @enderror                </div>
                <div class="icon-field mb-16">
                    <span class="icon top-50 translate-middle-y">
                        <iconify-icon icon="mage:email"></iconify-icon>
                    </span>
                    <input name="email" value="{{ old('email') }}" type="email" class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Email">
                    @error('email')
                            <span class="mt-12 text-sm text-secondary-light">{{ $message }}</span>
                     @enderror
                </div>
                <div class="mb-20">
                    <div class="position-relative ">
                        <div class="icon-field">
                            <span class="icon top-50 translate-middle-y">
                                <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                            </span> 
                            <input name="password" value="{{ old('password') }}" type="password" class="form-control h-56-px bg-neutral-50 radius-12" id="your-password" placeholder="Password (at least 8 characters)">
                        </div>
                        <span class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#your-password"></span>
                    </div>
                    @error('password')
                        <span class="mt-12 text-sm text-secondary-light">{{ $message }}</span>
                     @enderror
                  
                </div>
                <div class="mb-20">
                    <div class="position-relative ">
                        <div class="icon-field">
                            <span class="icon top-50 translate-middle-y">
                                <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                            </span> 
                            <input name="password_confirmation" value="{{ old('password_confirmation') }}" type="password" class="form-control h-56-px bg-neutral-50 radius-12" id="your-password" placeholder="Confirm Password">
                        </div>
                        <span class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#your-password"></span>
                    </div>
                    @error('password_confirmation')
                        <span class="mt-12 text-sm text-secondary-light">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <div class="d-flex justify-content-between gap-2">
                        <div class="form-check style-check d-flex align-items-start">
                            <input class="form-check-input border border-neutral-300 mt-4" type="checkbox" value="" id="condition">
                            <label class="form-check-label text-sm" for="condition">
                                By creating an account means you agree to the 
                                <a href="javascript:void(0)" class="text-primary-600 fw-semibold">Terms & Conditions</a> and our 
                                <a href="javascript:void(0)" class="text-primary-600 fw-semibold">Privacy Policy</a>
                            </label>
                        </div>
                        
                    </div>
                </div>

                <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32"> Sign Up</button>
                @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="mt-32 center-border-horizontal text-center">
                    <span class="bg-base z-1 px-4">Or sign up with</span>
                </div>
                <div class="mt-32 d-flex align-items-center gap-3">
                    <button type="button" class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50"> 
                        <iconify-icon icon="ic:baseline-facebook" class="text-primary-600 text-xl line-height-1"></iconify-icon>
                        Google
                    </button>
                    <button type="button" class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50"> 
                        <iconify-icon icon="logos:google-icon" class="text-primary-600 text-xl line-height-1"></iconify-icon>
                        Google
                    </button>
                </div>
                <div class="mt-32 text-center text-sm">
                    <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-primary-600 fw-semibold">Sign In</a></p>
                </div>
                
            </form>
        </div>
    </div>
</section>

  <!-- jQuery library js -->
  <script src="admins/js/lib/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap js -->
  <script src="admins/js/lib/bootstrap.bundle.min.js"></script>
  <!-- Apex Chart js -->
  <script src="admins/js/lib/apexcharts.min.js"></script>
  <!-- Data Table js -->
  <script src="admins/js/lib/dataTables.min.js"></script>
  <!-- Iconify Font js -->
  <script src="admins/js/lib/iconify-icon.min.js"></script>
  <!-- jQuery UI js -->
  <script src="admins/js/lib/jquery-ui.min.js"></script>
  <!-- Vector Map js -->
  <script src="admins/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
  <script src="admins/js/lib/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Popup js -->
  <script src="admins/js/lib/magnifc-popup.min.js"></script>
  <!-- Slick Slider js -->
  <script src="admins/js/lib/slick.min.js"></script>
  <!-- main js -->
  <script src="admins/js/app.js"></script>

<script>
      // ================== Password Show Hide Js Start ==========
      function initializePasswordToggle(toggleSelector) {
        $(toggleSelector).on('click', function() {
            $(this).toggleClass("ri-eye-off-line");
            var input = $($(this).attr("data-toggle"));
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    }
    // Call the function
    initializePasswordToggle('.toggle-password');
  // ========================= Password Show Hide Js End ===========================
</script>

</body>
</html>
