import BookingCalculator from "../components/tourBook/BookingCalculator.js";

const bookingInstance = new BookingCalculator()

const incrementAdultBtn = document.getElementById("js_increment-adult")
const decrementAdultBtn = document.getElementById("js_decrement-adult")
const adultCount = document.getElementById("adults-count") 

incrementAdultBtn.addEventListener("click", ()=>{
      adultCount.innerHTML = parseInt(adultCount.innerHTML) + 1
})

decrementAdultBtn.addEventListener("click", ()=>{
      adultCount.innerHTML = parseInt(adultCount.innerHTML) - 1
})


