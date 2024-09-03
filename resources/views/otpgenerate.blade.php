<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  
  
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>OTP Verification</title>
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
</head>
<body>

    <form action="">
        <div class="container">
            <h2>OTP Verification</h2>
            <div id="otp-section">
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" id="number" placeholder="+91 9415036315">
                </div>
                <div id="recaptha-container"></div><br>
                <button  type="button" class="btn" onclick="sendCode()">Generate OTP</button>
            </div>

            <div id="error" style="color:red;display:none;"></div>
            <div id="sendMessage" style="color:green;display:none;"></div>

        
            {{-- <div id="verify-section" style="display: none;">
                <div class="form-group">
                    <label for="otp">Enter OTP:</label>
                    <input type="text" id="otp" placeholder="Enter the OTP you received">
                </div>
                <button class="btn" onclick="verifyOTP()">Verify OTP</button>
            </div>
            <div class="message" id="message"></div> --}}
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
  
        <script>
            var firebaseConfig  = {
                apiKey: "AIzaSyBg89eyVaZ5lV9pIkjv5gE5ZRVv_zs9pyw",
                authDomain: "testsmsendlaravel.firebaseapp.com",
                projectId: "testsmsendlaravel",
                storageBucket: "testsmsendlaravel.appspot.com",
                messagingSenderId: "185289383201",
                appId: "1:185289383201:web:01d233a207cea828e97260",
                measurementId: "G-MKH1L3FPKR"
                }
                firebase.initializeApp(firebaseConfig);
                const auth = firebase.auth();

        </script>
        <script type="text/javascript">
                window.onload = function(){
                render();
                }

                function render(){
                window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptha-container');
                recaptchaVerifier.render();
                }

                function sendCode()
                {
                    var number = $ ('#number').val();

                    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult){

                        window.confirmationResult = confirmationResult;

                        coderesult = confirmationResult;

                        console.log(coderesult);
                        
                        $('#sendMessage').text('Message send is OTP Successfully');
                        $('#sendMessage').show();

                    }).catch(function(){
                        $('#error').text('Message is not send OTP  Mobile');
                        $('#error').show();
                    });

                }
        </script>


</body>
</html>


