import BookingCalculator from "../components/tourBook/BookingCalculator.js";
import BookingInformation from "../components/tourBook/BookingInformation.js";

new BookingCalculator()
new BookingInformation()


document.getElementById('continue-to-step-2').addEventListener("click", ()=>{
      document.getElementById("step-2-content").classList.remove("hidden")
      document.getElementById("step-1-content").classList.add("hidden")
})