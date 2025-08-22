import BookingCalculator from "../components/tourBook/BookingCalculator.js";
import BookingInformation from "../components/tourBook/BookingInformation.js";
import TourReview from "../components/tourBook/TourReview.js";

new BookingCalculator()
new BookingInformation()
const tourReviewInstance = new TourReview()


document.getElementById('continue-to-step-2').addEventListener("click", ()=>{
      document.getElementById("step-2-content").classList.remove("hidden")
      document.getElementById("step-1-content").classList.add("hidden")
})
document.getElementById('continue-to-step-3').addEventListener("click", ()=>{
      document.getElementById("step-3-content").classList.remove("hidden")
      document.getElementById("step-2-content").classList.add("hidden")

      tourReviewInstance.updateReview()
})