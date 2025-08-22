import BookingCalculator from "../components/tourBook/BookingCalculator.js";

const bookingInstance = new BookingCalculator()


document.getElementById('continue-to-step-2').addEventListener("click", ()=>{
      document.getElementById("step-2-content").classList.remove("hidden")
      document.getElementById("step-1-content").classList.remove("add")
})