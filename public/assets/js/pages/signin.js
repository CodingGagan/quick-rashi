const sign_in_btn = document.querySelector('#signin_button');

const otp_verify_section = document.querySelector('.otp_verify_section');
let resendOtp = document.querySelector('.js--resend_otp');

const fetchOtp = async (email) => {
    try {
        let csrf_token = document.querySelector('meta[name="csrf-token"]').content;
        let response = await fetch(`${window.location.origin}/generateOtp`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrf_token
            },
            body: JSON.stringify({
                email
            })
        });


        let fetchResponse = await response.json();
        if (fetchResponse[1] == "Verified") {
            window.location.replace(window.location.origin + '/add-posts');
        }
        if (fetchResponse[0]) {
            return fetchResponse[1];
        } else {
            return fetchResponse[1];
        }
    } catch (error) {
        console.log(error);
    }
}

if (sign_in_btn) {
    sign_in_btn.addEventListener('click', async () => {
        email = document.querySelector('input[type="email"]').value;
        if (email) {
            if (otp_verify_section) {
                currentTime = await fetchOtp(email);
                console.log(currentTime);
                if (currentTime == 'User Email Does not Exist') {
                    alert("User Email Does not Exist")
                } else {
                    otp_verify_section.classList.remove('d-none');
                    sign_in_btn.classList.add('d-none')
                    timer(currentTime)
                }

            }
        } else {

        }
    })
}


let reverseTime = document.querySelector('reverseTime');
let timerOn = true;

function timer(remaining) {
    minute = Math.floor(remaining / 60);
    second = remaining % 60;

    minute = minute < 10 ? '0' + minute : minute;
    second = second < 10 ? '0' + second : second;
    reverseTime.innerHTML = minute + ':' + second;
    remaining -= 1;

    if (remaining >= 0 && timerOn) {
        setTimeout(function () {
            timer(remaining);
        }, 1000);
        return;
    }

    if (!timerOn) {
        // Do validate stuff here
        return;
    }

    // Do timeout stuff here
    resendOtp.classList.remove('text-muted')
    resendOtp.classList.add('verify_otp_now');
}

/* Resend Functionality */
if (resendOtp) {
    resendOtp.addEventListener("click", async (e) => {
        email = document.querySelector('input[type="email"]').value;

        let eligible = e.target.classList.contains('verify_otp_now')
        if (eligible) {
            let response = await fetchOtp(email);
            e.target.classList.remove('verify_otp_now')
            e.target.classList.add('text-muted')
            timer(response)
        }
    });
}


const otp_verify = document.querySelector('#otp_verify');

const verifyOtpFunc = async (otp, email) => {
    try {
        let csrf_token = document.querySelector('meta[name="csrf-token"]').content;
        let response = await fetch(`${window.location.origin}/emailOtpVerification`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrf_token
            },
            body: JSON.stringify({
                "otp": otp,
                email
            })
        });
        let fetchResponse = await response.json();
        return fetchResponse;
    } catch (error) {
        console.log(error);
    }
}

if (otp_verify) {
    otp_verify.addEventListener('click', async () => {
        let currentValue = document.querySelector('#otp').value;
        email = document.querySelector('input[type="email"]').value;

        if (currentValue) {
            const response = await verifyOtpFunc(currentValue, email);
            if (response[0]) {
                window.location.replace(window.location.origin + '/user/dashboard');
            } else {
                let errorHandler = document.querySelector('.rn-alert.danger');
                errorHandler.querySelector('.js--content').children[0].innerHTML = response[1];
                errorHandler.classList.remove('hide')
                otpGlobalVariable = "";
                setTimeout(() => {
                    errorHandler.classList.add('hide')
                }, 2500);
            }
        }
    })
}