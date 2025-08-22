import PriceObserver from "./PriceObserver.js";

export default class SummaryDisplayObserver extends PriceObserver{
      constructor(elements) {
            super();
            this.elements = elements;
      }
      
      update(priceData) {
            console.log(priceData);
            console.log(this.elements);
            
            
            this.elements.total.textContent = `￥${priceData.total.toLocaleString('ja-JP')}`;
            this.elements.adultNumber.textContent = `${priceData.adultNumber.toLocaleString('ja-JP')}`;
            this.elements.childNumber.textContent = `${priceData.childNumber.toLocaleString('ja-JP')}`;
            this.elements.adultPrice.textContent = `￥${(priceData.adultPriceTotal).toLocaleString('ja-JP')}`;
            this.elements.childPrice.textContent = `￥${(priceData.childPriceTotal).toLocaleString('ja-JP')}`;
            this.elements.tourTitle.textContent = priceData.tourTitle
            this.elements.summaryContent.classList.add("hidden");
            this.elements.priceBrakdown.classList.remove("hidden");
            // this.elements.touristNumber.innerHTML = priceData.travelers;
            // this.elements.discountTotal.innerHTML = `-￥${(priceData.discount).toLocaleString('ja-JP')}`;

            // this.elements.discountSection.classList.toggle("hidden", priceData.travelersNumber < 2)
            // this.elements.totalSaving.classList.toggle("hidden", priceData.travelersNumber < 2)
      }
      
}