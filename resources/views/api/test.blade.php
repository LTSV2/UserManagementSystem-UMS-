->withMiddleware(function (Middleware $middleware) {

    $middleware->alias ([
        // Other middleware
        'admin.guests' => \App\Http\Middleware\AdminRedirect::class,
        'admin.auth' => \App\Http\Middleware\AdminAuthenticate::class,
         'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
         'auth' => \App\Http\Middleware\Authenticate::class,

    ]);
    //
    $middleware->alias([
       'is_admin'  => RedirectIfAuthenticated::class
    ]);

    $middleware->redirectTo(

        guests: 'account/login',
        users : 'account/dashboard'

    );
.


...  {{-- <div class="input-group mb-3">
    <div id="otp-section">
    <div class="input-group-prepend">
        <span class="input-group-text">
            <i class="fa fa-phone"></i>
        </span>
    </div>
    <input type="text" name="phone"   id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="00000-00000" value="{{ old('phone', null) }}" style="margin-left: 56px;margin-top: -33px;">
    @if($errors->has('phone'))
        <div class="invalid-feedback">
            {{ $errors->first('phone') }}
        </div>
    @endif
    <button class="btn" onclick="generateOTP()" style="margin-top:11px;margin-left:44px;">Generate OTP</button>
    <div id="verify-section" style="display: none;">
        <div class="form-group">
            <label for="otp">Enter OTP:</label>
            <input type="text" id="otp" placeholder="Enter the OTP you received">
        </div>
        <button class="btn" onclick="verifyOTP()" >Verify OTP</button>
    </div>
    <div class="message" id="message"></div>
</div>

</div> --}}
<div class="container">
<h2>OTP Verification</h2>
<div id="otp-section">
    <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" placeholder="Enter your phone number">
    </div>
    <button class="btn" onclick="generateOTP()">Generate OTP</button>
</div>
<div id="verify-section" style="display: none;">
    <div class="form-group">
        <label for="otp">Enter OTP:</label>
        <input type="text" id="otp" placeholder="Enter the OTP you received">
    </div>
    <button class="btn" onclick="verifyOTP()">Verify OTP</button>
</div>
<div class="message" id="message"></div>
</div>
