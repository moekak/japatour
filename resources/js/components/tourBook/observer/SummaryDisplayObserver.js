import ObserverInterface from "./ObserverInterface.js";

export default class SummaryDisplayObserver extends ObserverInterface{
      constructor(elements) {
            super();
            this.elements = elements;
      }
      
      update(TourData) {
            this.elements.total.textContent = `￥${TourData.total.toLocaleString('ja-JP')}`;
            this.elements.adultNumber.textContent = `${TourData.adultNumber.toLocaleString('ja-JP')}`;
            this.elements.childNumber.textContent = `${TourData.childNumber.toLocaleString('ja-JP')}`;
            this.elements.adultPrice.textContent = `￥${(TourData.adultPriceTotal).toLocaleString('ja-JP')}`;
            this.elements.childPrice.textContent = `￥${(TourData.childPriceTotal).toLocaleString('ja-JP')}`;
            this.elements.tourTitle.textContent = TourData.itineraryTitle
            this.elements.date.textContent = TourData.selectedDate
            this.elements.summaryContent.classList.add("hidden");
            this.elements.priceBrakdown.classList.remove("hidden");

      }
      
}