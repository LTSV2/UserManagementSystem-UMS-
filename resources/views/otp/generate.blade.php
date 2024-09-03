@extends('layouts.main')
@section('content')

<style>

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .message {
            margin-top: 10px;
            color: red;
        }
</style>

<div id="content">
    <section class="message-area">
    <div class="container py-5">
        <div class="row">
         <div class="col-md-12" style="">
          <div class="card mt-3">
            <div class="card-header">
          <!-- SEARCH BY TASK START -->
             <nav class="navbar navbar-light bg-light">
             <h4 style="margin: 11px;margin-left:26px;">Generate Mobile Code</h4>
             </div>
                <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                      <div class="card border border-light-subtle rounded-4">
                          <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                              <div class="col-12">
                                  @if(Session::has('success'))
                                  <div class="alert alert-success">{{ Session::get('success') }}</div>
                                  @endif

                                  @if(Session::has('error'))
                                  <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                  @endif
                                  
                                  <div class="mb-5">
                                      <h4 class="text-center">Mobile Generate OTP Code</h4>
                                  </div>
                              </div>
                          </div>

          {{-- <form action="{{ route('otp.generateOTP') }}" method="post"> --}}

                    <form action="{{ route('otp.generateOTP') }}" method="post">
                        @csrf
                          <div class="row gy-3 overflow-hidden">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <label for="name" style="margin-top: 14px;"> Name</label>
                              </div>
                              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name " value="{{ old('name', null) }}" style="margin-left: 13px;">
                                  @if($errors->has('name'))
                                    <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <label for="email" style="margin-top: 14px;"> Email-Id </label>
                              </div>
                              <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror"placeholder="" value="{{ old('email', null) }}"  style="margin-left: 13px;">
                              @if($errors->has('email'))
                                  <div class="invalid-feedback">
                                      {{ $errors->first('email') }}
                                  </div>
                              @endif
                          </div>
      
                        
                            <div class="input-group mb-3">
                            <h2>OTP Verification</h2>
                            <div id="otp-section">
                                <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="text" id="phone" placeholder="Enter your phone number">
                                </div>
                                <button class="btn"  onclick="generateOTP()">Generate OTP</button>
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
                      


                          {{-- <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <label for="phone" style="margin-top: 14px;"> Phone </label>
                            </div>
                            <input type="text" name="phone"   id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="00000-00000" value="{{ old('phone', null) }}" style="margin-left: 13px;">
                            @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <label for="OTP" style="margin-top: 14px;"> OTP </label>
                          </div>
                          <input type="text" name="mobile"   id="phone" class="form-control @error('mobile') is-invalid @enderror" placeholder="00000-00000" value="{{ old('mobile', null) }}" style="margin-left: 13px;">
                          @if($errors->has('phone'))
                              <div class="invalid-feedback">
                                  {{ $errors->first('phone') }}
                              </div>
                          @endif
                      </div> --}}

                          </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             </div>
          </div>
        </div>
      </div>
   </div>
</div>

</section>
@endsection

            