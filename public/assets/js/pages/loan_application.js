const loanAmount = document.querySelector('input[name="loan_amount"]');
const loanType = document.querySelector('select[name="loan_type"]');

const current_address = document.querySelector('input[name="current_address"]');
const current_address_2 = document.querySelector('input[name="current_address_2"]');
const current_landmark = document.querySelector('input[name="current_landmark"]');
const current_country = document.querySelector('select[name="current_country"]');
const current_pincode = document.querySelector('input[name="current_pincode"]');
const current_res = document.querySelector('input[name="current_residence"]');
const current_state = document.querySelector('#current_state');

const permanent_state = document.querySelector('#permanent_state');
const permanent_address = document.querySelector('input[name="permanent_address"]');
const permanent_address_2 = document.querySelector('input[name="permanent_address_2"]');
const permanent_landmark = document.querySelector('input[name="permanent_landmark"]');
const permanent_pincode = document.querySelector('input[name="permament_pincode"]');
const permanent_city = document.querySelector('select[name="permanent_city"]');
const permanent_country = document.querySelector('select[name="permanent_country"]');
const permanent_res = document.querySelector('input[name="permanent_residence"]');

const work_status = document.querySelector('#work_status');
const contact = document.querySelector('#contact');
const alt_contact = document.querySelector('#alt_contact');

const isRequired = value => value === '' ? false : true;

// Old Way of Error without localization
const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // add the error class
    formField.classList.add('has-error');

    // show the error message
    const error = formField.querySelector('.error');
    error.classList.remove('hide')
    error.classList.add('show')
    error.textContent = message;
};

const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;

    // remove the error class
    formField.classList.remove('has-error');

    // hide the error message
    const error = formField.querySelector('.error');
    error.classList.add('hide')
    error.classList.remove('show')
    error.textContent = '';
}

const checkInputField = (element) => {

    let valid = false;

    const Element_el = element.value.trim();
    if (!isRequired(Element_el)) {
        showError(element, 'First name cannot be blank.');
    } else {
        showSuccess(element);
        valid = true;
    }
    return valid;
};

const fetch_cities_by_state_id = async (id) => {
    let response = await fetch(`${window.location.origin}/fetchCitiesByStateId/${id}`, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        }
    });


    let fetchResponse = await response.json();
    if (fetchResponse[0]) {
        return fetchResponse['cities'];
    } else {
        return fetchResponse[1];
    }
}



if (current_state) {
    current_state.addEventListener('change', async () => {
        document.querySelector('#current_city').innerHTML = ''
        let current_state_id = current_state.value;
        let fetchedCities = await fetch_cities_by_state_id(current_state_id);
        if (fetchedCities) {
            console.log(fetchedCities);
            fetchedCities.forEach(city => {
                document.querySelector('#current_city').innerHTML += `<option value='${city.id}'>${city.city}</option>`
            });
        }
    })
}

if (permanent_state) {
    permanent_state.addEventListener('change', async () => {
        let permanent_state_id = permanent_state.value;
        let fetchedCities = await fetch_cities_by_state_id(permanent_state_id);
        if (fetchedCities) {
            console.log(fetchedCities);
            fetchedCities.forEach(city => {
                document.querySelector('#permanent_city').innerHTML += `<option value='${city.id}'>${city.city}</option>`
            });
        }
    })
}

const same_address_as_current = document.querySelector('#same_address_as_current');

if (same_address_as_current) {
    same_address_as_current.addEventListener('click', () => {
        if (same_address_as_current.checked) {
            permanent_address.value = current_address.value;
            permanent_address_2.value = current_address_2.value
            permanent_landmark.value = current_landmark.value
            permanent_pincode.value = current_pincode.value
            permanent_state.value = current_state.value;
            permanent_city.innerHTML = document.querySelector('#current_city').innerHTML;
            permanent_city.value = document.querySelector('#current_city').value
            permanent_res.value = current_res.value
            // permanent_pincode.value = current_pincode.value
            // document.querySelector('#permanent_address').classList.add('d-none')
        } else {
            permanent_address.value = "";
            permanent_address_2.value = ""
            permanent_landmark.value = ""
            permanent_pincode.value = ""
            permanent_state.value = 0;
            permanent_city.innerHTML = "";
            // permanent_city.value =  document.querySelector('#current_city').value
            permanent_res.value = ""
        }
    })
}

// const fetch_cities_by_state_id = document.querySelector('#permanent_state')

let FORMINSERTID = "";
document.addEventListener("DOMContentLoaded", function () {
    var current_fs, next_fs, previous_fs; // fieldsets
    var opacity;
    var current = 1;
    var steps = document.querySelectorAll("fieldset").length;

    setProgressBar(current);

    $("#msform").validate()


    document.querySelectorAll(".next").forEach(function (nextButton) {
        nextButton.addEventListener("click", async function () {

            let current_form_id = nextButton.getAttribute('id')
            let moveNext = false;
            if (current_form_id == 'first_form') {
                isFormValid = $('#msform').valid();
                if (isFormValid) {
                    let csrf_token = document.querySelector('meta[name="csrf-token"]').content;
                    let loan_id = EditedLoanId ? EditedLoanId : null;
                    let response = await fetch(`${window.location.origin}/save_form_first`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': csrf_token
                        },
                        body: JSON.stringify({
                            loan_amount: loanAmount.value,
                            loantype: loanType.value,
                            current_address: current_address.value,
                            current_address_2: current_address_2.value,
                            current_landmark: current_landmark.value,
                            current_country: current_country.value,
                            current_state: current_state.value,
                            current_pincode: current_pincode.value,
                            current_res: current_res.value,
                            current_city: document.querySelector('#current_city').value,
                            permanent_address: permanent_address.value,
                            permanent_address_2: permanent_address_2.value,
                            permanent_landmark: permanent_landmark.value,
                            permanent_country: permanent_country.value,
                            permanent_state: permanent_state.value,
                            permanent_city: permanent_city.value,
                            permanent_pincode: permanent_pincode.value,
                            permanent_res: permanent_res.value,
                            loan_id: loan_id
                        })
                    });

                    let fetchResponse = await response.json();

                    if (fetchResponse[0]) {
                        FORMINSERTID = fetchResponse[1];
                        moveNext = true;
                    } else {
                        Swal.fire({
                            title: "Previous Loan?",
                            text: fetchResponse[1],
                            icon: "question"
                        });
                    }

                } else {
                    moveNext = false;
                }
            } else if (current_form_id == 'second_form') {
                isFormValid = $('#msform').valid();
                if (isFormValid) {
                    let csrf_token = document.querySelector('meta[name="csrf-token"]').content;

                    let response = await fetch(`${window.location.origin}/save_form_second`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': csrf_token
                        },
                        body: JSON.stringify({
                            loan_id: FORMINSERTID,
                            work_status: work_status.value,
                            contact: contact.value,
                            alt_contact: alt_contact.value
                        })
                    });

                    let fetchResponse = await response.json();

                    if (fetchResponse[0]) {
                        FORMINSERTID = fetchResponse[1];
                        moveNext = true;
                    } else {
                        console.log(fetchResponse[1]);
                    }

                    moveNext = true;
                } else {
                    moveNext = false;
                }
            } else if (current_form_id == 'third_form') {
                isFormValid = $('#msform').valid();
                if (isFormValid) {
                    moveNext = true;
                } else {
                    moveNext = false;
                }
            }

            if (moveNext) {
                current_fs = this.parentElement;
                next_fs = this.parentElement.nextElementSibling;

                // Add Class Active
                document.querySelectorAll("#progressbar li")[Array.from(document
                    .querySelectorAll("fieldset")).indexOf(next_fs)].classList.add(
                        "active");

                // Show the next fieldset
                next_fs.style.display = "block";

                // Hide the current fieldset with style
                var animation = setInterval(function () {
                    opacity = parseFloat(current_fs.style.opacity) || 1;
                    opacity -= 0.1;
                    current_fs.style.opacity = opacity;

                    if (opacity <= 0) {
                        clearInterval(animation);
                        current_fs.style.display = 'none';
                        next_fs.style.opacity = 1;
                    }
                }, 50);

                setProgressBar(++current);
            }

        });
    });

    document.querySelectorAll(".previous").forEach(function (prevButton) {
        prevButton.addEventListener("click", function () {
            current_fs = this.parentElement;
            previous_fs = this.parentElement.previousElementSibling;

            // Remove class active
            document.querySelectorAll("#progressbar li")[Array.from(document
                .querySelectorAll("fieldset")).indexOf(current_fs)].classList.remove(
                    "active");

            // Show the previous fieldset
            previous_fs.style.display = "block";

            // Hide the current fieldset with style
            var animation = setInterval(function () {
                opacity = parseFloat(current_fs.style.opacity) || 1;
                opacity -= 0.1;
                current_fs.style.opacity = opacity;

                if (opacity <= 0) {
                    clearInterval(animation);
                    current_fs.style.display = 'none';
                    previous_fs.style.opacity = 1;
                }
            }, 50);

            setProgressBar(--current);
        });
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        document.querySelector(".progress-bar").style.width = percent + "%";
    }

    // document.querySelector(".submit").addEventListener("click", function () {
    //     return false;
    // });
});
const bank_pdf = document.querySelector('#bank_pdf');
const pan_card = document.querySelector('#pan_card');
const adhar_card_front = document.querySelector('#adhar_card_front');
const adhar_card_back = document.querySelector('#adhar_card_back');
const passport = document.querySelector('#passport');
const financial = document.querySelector('#financial');
const salary = document.querySelector('#salary');
const work_exp = document.querySelector('#work_exp');

if (bank_pdf) {
    bank_pdf.addEventListener('change', () => {
        preview = document.querySelector('img[alt="bank_pdf"]')
        preview.classList.remove('d-none')

        var file = bank_pdf.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
            uploadImage(file, 'bank_pdf')

        } else {
            preview.src = "#";
        }
    })
}
if (pan_card) {
    pan_card.addEventListener('change', () => {
        preview = document.querySelector('img[alt="pan_card"]')
        preview.classList.remove('d-none')

        var file = pan_card.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
            uploadImage(file, 'pan_card')
        } else {
            preview.src = "#";
        }
    })
}
if (adhar_card_front) {
    adhar_card_front.addEventListener('change', () => {
        preview = document.querySelector('img[alt="adhar_card_front"]')
        preview.classList.remove('d-none')

        var file = adhar_card_front.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
            uploadImage(file, 'adhar_card_front')
        } else {
            preview.src = "#";
        }
    })
}
if (adhar_card_back) {
    adhar_card_back.addEventListener('change', () => {
        preview = document.querySelector('img[alt="adhar_card_back"]')
        preview.classList.remove('d-none')

        var file = adhar_card_back.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
            uploadImage(file, 'adhar_card_back')
        } else {
            preview.src = "#";
        }
    })
}
if (passport) {
    passport.addEventListener('change', () => {
        preview = document.querySelector('img[alt="passport"]')
        preview.classList.remove('d-none')

        var file = passport.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
            uploadImage(file, 'passport')
        } else {
            preview.src = "#";
        }
    })
}
if (salary) {
    salary.addEventListener('change', () => {
        preview = document.querySelector('img[alt="salary"]')
        preview.classList.remove('d-none')

        var file = salary.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
            uploadImage(file, 'salary')
        } else {
            preview.src = "#";
        }
    })
}
if (financial) {
    financial.addEventListener('change', () => {
        preview = document.querySelector('img[alt="financial"]')
        preview.classList.remove('d-none')

        var file = financial.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
            uploadImage(file, 'financial')
        } else {
            preview.src = "#";
        }
    })
}
if (work_exp) {
    work_exp.addEventListener('change', () => {
        preview = document.querySelector('img[alt="work_exp"]')
        preview.classList.remove('d-none')

        var file = work_exp.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
            uploadImage(file, 'work_exp')
        } else {
            preview.src = "#";
        }
    })
}

/* Upload Image */

const uploadImage = async (image, image_type) => {
    csrf_token = document.querySelector('meta[name="csrf-token"]').content;
    url = '/product/image/upload';

    // Set up the form data
    var formData = new FormData();
    formData.append('image', image);
    formData.append('image_type', image_type);
    formData.append('loan_id', FORMINSERTID);

    // Set up the headers
    var headers = new Headers();
    headers.append('X-CSRF-TOKEN', csrf_token);

    // Send the request
    let imageResponse = await fetch(url, {
        method: 'POST',
        headers: headers,
        body: formData
    })
    if (imageResponse) {
        let response = await imageResponse.json();
        if (response[0]) {
            return response;
        } else {
            Swal.fire({
                title: "Oh no!",
                text: response[1],
                icon: "warning"
            });
        }
    }

}
