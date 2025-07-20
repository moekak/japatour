document.addEventListener('DOMContentLoaded', function() {
    var submitForm = document.querySelector(".js_form")
    if (submitForm) {
            submitForm.addEventListener('submit', function(e) {
                e.preventDefault(); // フォームの自動送信を防止
                grecaptcha.ready(function() {
                        grecaptcha.execute(
                            '6LfsOIkrAAAAAK9nICyBNQeanLgdeQjHa2Go_Myb', {
                                    action: 'submit'
                            }).then(function(token) {
                            document.getElementById(
                                        'recaptchaResponse')
                                    .value = token;
                            document.querySelector('form')
                                    .submit(); // フォームを送信
                        });
                });
            });
    } else {
            console.error('Submit button not found');
    }
});



const submit_btn = document.getElementById("js_submit_btn");
submit_btn.addEventListener("click", () => {
    
    document.querySelector(".js_sending").classList.remove("hidden");
    document.querySelector(".js_main").classList.add("hidden")
});