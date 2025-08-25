import ObserverInterface from "./ObserverInterface.js";

export default class TourDataSaveObserver extends ObserverInterface{
      constructor(elements) {
            super();
            this.elements = elements;
      }
      
      update(data) {
            this.elements.itineraryId.value = data.itineraryId
            this.elements.itineraryTitle.value = data.itineraryTitle
            this.elements.adultNumber.value =  data.adultNumber
            this.elements.adultPrice.value = data.adultPriceTotal
            this.elements.childNumber.value = data.childNumber
            this.elements.childPrice.value = data.childPriceTotal
            this.elements.totalPrice.value = data.total
            this.elements.date.value = data.selectedDate
      }
      
}