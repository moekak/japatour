import PriceObserver from "./PriceObserver.js";

export default class SummaryDisplayObserver extends PriceObserver{
      constructor(elements) {
            super();
            this.elements = elements;
      }
      
      update(priceData) {
            this.elements.packageTotal.textContent = `￥${priceData.packageTotal.toLocaleString('ja-JP')}`;
            this.elements.grandTotal.textContent = `￥${priceData.grandTotal.toLocaleString('ja-JP')}`;
            this.elements.paymentTotal.textContent = `￥${priceData.grandTotal.toLocaleString('ja-JP')}`;
            this.elements.depositAmount.textContent = `￥${(priceData.grandTotal * 0.2).toLocaleString('ja-JP')}`;
            this.elements.serviceTotal.textContent = `￥${(priceData.serviceTotal).toLocaleString('ja-JP')}`;
            this.elements.touristNumber.innerHTML = priceData.travelers;
            this.elements.discountTotal.innerHTML = `-￥${(priceData.discount).toLocaleString('ja-JP')}`;

            this.elements.discountSection.classList.toggle("hidden", priceData.travelersNumber < 2)
            this.elements.totalSaving.classList.toggle("hidden", priceData.travelersNumber < 2)
      }
      
}