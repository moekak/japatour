import ObserverInterface from "./ObserverInterface.js";

export default class TourDataInputObserver extends ObserverInterface{
      constructor(){
            super()
            this.nextButton = document.getElementById("continue-to-step-2")
      }
      update(tourData){
            const hasAllData = 
                  tourData.itineraryId && 
                  (tourData.adultNumber > 0) && 
                  tourData.total > 0 && 
                  tourData.selectedDate

            this.nextButton.disabled = !hasAllData
      }
}