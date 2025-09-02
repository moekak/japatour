import ObserverInterface from "./ObserverInterface.js";

export default class SummaryDisplayObserver extends ObserverInterface{
      constructor(elements) {
            super();
            this.elements = elements;
      }
      
      update(TourData) {
            this.elements.total.textContent = `￥${TourData.total ? TourData.total.toLocaleString('ja-JP') : 0}`;
            this.elements.adultNumber.textContent = `${TourData.adultNumbe ?? 0}`;
            this.elements.childNumber.textContent = `${TourData.childNumber ?? 0}`;
            this.elements.adultPrice.textContent =  `￥${(TourData.adultPriceTotal ? TourData.adultPriceTotal : 0).toLocaleString('ja-JP')}`;
            this.elements.childPrice.textContent = `￥${(TourData.childPriceTotal ? TourData.childPriceTotal : 0).toLocaleString('ja-JP')}`;
            this.elements.itineraryTitle.textContent = TourData.itineraryTitle
            this.elements.date.textContent = TourData.selectedDate
            this.elements.summaryContent.classList.add("hidden");
            this.elements.priceBrakdown.classList.remove("hidden");

      }
      
}