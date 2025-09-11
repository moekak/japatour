import BookingCalculator from "../components/tourBook/BookingCalculator.js";

new BookingCalculator()

// Stripe初期化
const stripe = Stripe('pk_test_51RFVY7IDvRtJolMEYyiMXucEU0xwOVn7wGAUaBMUXpUBtjodvtIwsBP2exG5QyHmaIumlG2QQv0ecfi0u1nbKOaM00UFjt2Xc5');
let paymentElement;
let elements; // グローバル変数として宣言

// PaymentIntent作成関数
async function createPaymentIntent() {
      const formData = new FormData(document.getElementById("booking-form"));
      
      // 追加サービスをformDataに追加する
      const checkBoxes = Array.from(document.querySelectorAll(".js_service_checkbox")).filter((checkbox) => checkbox.checked);
      const additionalServices = checkBoxes.map((checkbox) => ({
            id: checkbox.id,
            price: checkbox.dataset.price
      }));
      formData.append("additional_services", JSON.stringify(additionalServices));

      // ツアー日をformDataに追加する
      const date = document.getElementById("date_range_start");
      formData.append("tour_date", date.value);

      // itinearyを選択されたものをformDataに追加する
      const selectedItineary = Array.from(document.querySelectorAll(".option-card")).filter((card) => card.classList.contains("selected"));
      const itineary = selectedItineary.map((itineary) => ({
            title: itineary.dataset.itinerary,
            price: itineary.dataset.price
      }));
      formData.append("itineary", JSON.stringify(itineary));

      // 合計金額をformDataに追加する
      const totalCost = document.querySelector(".total-price").innerHTML;
      formData.append("total", totalCost);

      const formDataObj = Object.fromEntries(formData.entries());
      return fetch('/api/create-payment-intent', {
            method: 'POST',
            body: formData
      });
}

// Payment Element初期化関数
async function initializePaymentElement() {
      try {
            // まずPayment Intentを作成
            const response = await createPaymentIntent();
            const data = await response.json();

            
            if (!response.ok) {
                  throw new Error(data.error || 'Payment Intent creation failed');
            }
            
            // clientSecretが取得できたらElementsを初期化
            elements = stripe.elements({
                  clientSecret: data.clientSecret, // ここが重要：clientSecretを必ず指定
                  locale: 'en',
                  appearance: {
                        theme: 'stripe',
                        // その他の外観設定
                  },
                  paymentMethods: {
                        applePay: 'always',
                        googlePay: 'always',
                        link: 'always'
                  }
            });

            // デバッグ：Payment Request の可用性を確認
            const paymentRequest = stripe.paymentRequest({
                  country: 'US',
                  currency: 'usd',
                  total: {
                        label: 'Tour Booking',
                        amount: 259800,
                  },
                  requestPayerName: true,
                  requestPayerEmail: true,
            });
            
            const result = await paymentRequest.canMakePayment();
            
            // Payment Elementを作成
            paymentElement = elements.create('payment', {
                  layout: 'tabs',
                  defaultValues: {
                        billingDetails: {
                              name: document.getElementById('customer-name')?.value || '',
                              email: document.getElementById('customer-email')?.value || '',
                        }
                  }
            });

            // Payment Elementをマウント
            paymentElement.mount('#payment-element');
            
            // デバッグ：Payment Elementに何が表示されているかを確認
            paymentElement.on('ready', () => {
                  console.log('Payment Element is ready');
            });
            
            // エラーハンドリング
            paymentElement.on('change', (event) => {
                  console.log('Payment Element changed:', event);
                  const displayError = document.getElementById('card-errors');
                  if (event.error && displayError) {
                        displayError.textContent = event.error.message;
                  } else if (displayError) {
                        displayError.textContent = '';
                  }
            });

      } catch (error) {
            console.error('Error:', error);
            const displayError = document.getElementById('card-errors');
            if (displayError) {
                  displayError.textContent = 'Failed to initialize payment. Please try again.';
            }
      }
}

// ステップ管理
let currentStep = 1;

function updateProgress(step) {
      const progressBar = document.querySelector('.progress-bar');
      const progressSteps = document.querySelectorAll('.progress-step');
      
      // Progress bar update
      const percent = ((step - 1) / (progressSteps.length - 1)) * 100;
      progressBar.style.width = `${percent}%`;
      
      // Step status update
      progressSteps.forEach((stepEl, idx) => {
            const stepNum = idx + 1;
            stepEl.classList.remove('active', 'completed');
            
            if (stepNum < step) {
                  stepEl.classList.add('completed');
            } else if (stepNum === step) {
                  stepEl.classList.add('active');
            }
      });
}

const showStep = (step) =>{
      const formSections = document.querySelectorAll('.form-section');
      formSections.forEach((section, idx) => {
            section.classList.remove('active');
            if (idx + 1 === step) {
                  section.classList.add('active');
            }
      });
      
      updateProgress(step);
      currentStep = step;
      
      // Step 3に移動したときにPayment Elementを初期化（まだ初期化されていない場合のみ）
      if (step === 3 && !paymentElement) {
            initializePaymentElement();
      }
}

// Next/Previous button handlers
document.querySelectorAll('.next-step').forEach(button => {
      button.addEventListener('click', () => {
            if(currentStep === 1 && validator() == false){
                  return
                  
            }if(currentStep === 2 && validatorTourOptions() === false){
                  return
            }
            if (currentStep < 3) {
                  showStep(currentStep + 1);
            }
      });
});

document.querySelectorAll('.prev-step').forEach(button => {
      button.addEventListener('click', () => {
            if (currentStep > 1) {
                  showStep(currentStep - 1);
            }
      });
});

// 決済処理
document.addEventListener('DOMContentLoaded', () => {
      const submitButton = document.getElementById('submit-payment');
      if (submitButton) {
            submitButton.addEventListener('click', async (e) => {
                  e.preventDefault();
                  
                  const button = e.target;
                  button.disabled = true;
                  button.classList.add('loading');
                  
                  try {
                        // Payment ElementとElementsが初期化されているか確認
                        if (!paymentElement || !elements) {
                              throw new Error('Payment Element not initialized');
                        }
                        
                        // 決済確定
                        const {error} = await stripe.confirmPayment({
                              elements, // elementsオブジェクトを渡す
                              redirect: 'if_required',
                              confirmParams: {
                                    return_url: window.location.origin + '/thank'
                              }
                        });
                        
                        if (error) {
                              const displayError = document.getElementById('card-errors');
                              if (displayError) {
                                    displayError.textContent = error.message;
                              }
                        } else {
                              // 成功処理
                              window.location.href = '/thank';
                        }
                  } catch (error) {
                        console.error('Error:', error);
                        const displayError = document.getElementById('card-errors');
                        if (displayError) {
                              displayError.textContent = error.message || 'An unexpected error occurred.';
                        }
                  } finally {
                        button.disabled = false;
                        button.classList.remove('loading');
                  }
            });
      }
});



// 関数
const validator = () =>{
      const inputs = document.querySelectorAll(".input-required")
      const selects = document.querySelectorAll(".select-required")
      let hasAllValue = true

      for (const input of inputs) {
            if (input.value == 0 || input.value === "") {
                  hasAllValue = false
                  input.classList.add("error")
                  input.closest(".form-group").querySelector(".field-error").classList.remove("hidden")
            }else{
                  input.classList.remove("error")
                  input.closest(".form-group").querySelector(".field-error").classList.add("hidden")
            }
      }
      
      for (const select of selects) {
            if (select.value === "" || select.selectedIndex === 0) {
                  hasAllValue = false
                  select.classList.add("error")
                  select.closest(".form-group").querySelector(".field-error").classList.remove("hidden")
            }else{
                  select.classList.remove("error")
                  select.closest(".form-group").querySelector(".field-error").classList.add("hidden")
            }
      }

      return hasAllValue
}

const validatorTourOptions = ()=>{
      const date = document.getElementById("date_range_start")
      const itineraryOptions = document.querySelectorAll(".option-card")
      let hasdate= true
      let hasItinerary = false

      if(date.value.length == 0 || date.value === ""){
            hasdate = false
            date.closest(".form-group").querySelector(".form-input").classList.add("error")
            date.closest(".form-group").querySelector(".field-error").classList.remove("hidden")
      }

      itineraryOptions.forEach((option)=>{
            if(option.classList.contains("selected")){
                  hasItinerary = true
            }
      })


      if(!hasItinerary){
            document.querySelector(".itineary_option_error").classList.remove("hidden")
      }
      return hasdate && hasItinerary
}