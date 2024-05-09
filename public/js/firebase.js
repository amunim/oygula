    var firebaseConfig = {
        apiKey: "AIzaSyAtQNqpU75OJay1xadybYwrfOFF2xZhGHc",
        authDomain: "otpapp-9045d.firebaseapp.com",
        databaseURL: "https://otpapp-9045d-default-rtdb.firebaseio.com",
        projectId: "otpapp-9045d",
        storageBucket: "otpapp-9045d.appspot.com",
        messagingSenderId: "427515080456",
        appId: "1:427515080456:web:0464ec63537f2ae65346bd",
        measurementId: "G-ZXTVEBQX3S"
    };

    firebase.initializeApp(firebaseConfig);
    window.onload = function() {
        render();
    };

    window.onload = function() {
        render();
    };

    function render() {
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
        recaptchaVerifier.render();
    }

    function sendOTP() {
        var number = $("#number").val();
        firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
            window.confirmationResult = confirmationResult;
            coderesult = confirmationResult;
            console.log(coderesult);
            $("#successAuth").text("Message sent");
            $("#successAuth").show();
        }).catch(function(error) {
            $("#error").text(error.message);
            $("#error").show();
        });


    }

    /****************************************************** */
    /*
    function sendOTP2() {


        var number = $("#number").val();
        $.ajax({
            url: '/password/email',
            type: 'POST',
            dataType: 'html',
            data: {
                'mobile': number,
                //'event': event,

            },
            success: function(data) {
                console.log("success")

                console.log(data);
                firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
                    window.confirmationResult = confirmationResult;
                    coderesult = confirmationResult;
                    console.log(coderesult);
                    $("#successAuth2").text("Message sent");
                    $("#successAuth2").show();
                }).catch(function(error) {
                    $("#error2").text(error.message);
                    $("#error2").show();
                });

            }
        });
    }

    function verify2() {
        var code = $("#verification").val();
        coderesult.confirm(code).then(function(result) {
            var user = result.user;
            console.log(user);
            $("#successOtpAuth").text("Auth is successful");
            $("#successOtpAuth").show();
            check2();
        }).catch(function(error) {
            $("#error").text(error.message);
            $("#error").show();
        });
    }
    //Register 2
    function check2() {
        var mobile = $("#number").val();
        // var event = $("#event").val();

        $.ajax({
            url: '/register2',
            type: 'GET',
            dataType: 'html',
            data: {
                'mobile': mobile,
                //      'event': event,

            },
            success: function(data) {
                $(".reg-body").html(data);
                $(".mox").text(mobile);


            }
        });
    }
*/
    /********************************************************** */

    function verify() {
        var code = $("#verification").val();
        coderesult.confirm(code).then(function(result) {
            var user = result.user;
            console.log(user);
            $("#successOtpAuth").text("Auth is successful");
            $("#successOtpAuth").show();
            check();
        }).catch(function(error) {
            $("#error").text(error.message);
            $("#error").show();
        });
    }
    //Register 2
    function check() {
        var mobile = $("#number").val();
        // var event = $("#event").val();

        $.ajax({
            url: '/register2',
            type: 'GET',
            dataType: 'html',
            data: {
                'mobile': mobile,
                //      'event': event,

            },
            success: function(data) {
                $(".reg-body").html(data);
                $(".mox").text(mobile);


            }
        });
    }

    $(".btn-submit").click(function(e) {
        e.preventDefault();
        var mobile = $("#number").val();
        var password = $("#password").val();
        var passwordconfirm = $("#password-confirm").val();
        // var event = $("#event").val();
        $.ajax({
            url: '/register',
            type: 'POST',
            dataType: 'html',
            data: {
                'mobile': mobile,
                'password': password,
                'password-confirm': passwordconfirm,
                //      'event': event,

            },
            success: function(data) {
                console.log("done");


            }
        });
    });