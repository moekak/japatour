import ObserverInterface from "./ObserverInterface";

export default class DataInputObserver extends ObserverInterface{
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