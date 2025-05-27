import ElementOperatorInterface from "../ElementOperatorInterface.js";
import ItineraryHighlight from "./ItineraryHighlight.js";
import ItineraryImage from "./ItineraryImage.js";
import ItinerarySchedule from "./ItinerarySchedule.js";

export default class ItineraryOperator extends ElementOperatorInterface{
      constructor(){
            super(); // 親クラスのコンストラクタを呼び出す
            this.addButton = document.getElementById('add-day')
            this.dayCount  = document.querySelectorAll('.itinerary-day-item').length
            this.dayTemplate = document.getElementById('day-template').innerHTML;
            this.itineraryWrapper = document.getElementById("itinerary-days-container")
            this.scheduleTemplate = document.getElementById('schedule-template').innerHTML;
            this.initialize()
      }

      /**
       * イベントリスナーの初期化
       * @override
       */
      initialize(){
            // itinerary項目作成処理
            this.addButton.addEventListener("click", this.addElement.bind(this))
            // itinerary項目作成処理項目削除処理
            this.itineraryWrapper.addEventListener("click", this.removeElement.bind(this))
            this.itineraryWrapper.addEventListener("click", e =>{
                  new ItineraryHighlight(e)
                  new ItinerarySchedule(e)
                  new ItineraryImage(e)
            })

      }

      /**
       * ハイライト項目を追加する
       * @override
       */
      addElement(){
            this.dayCount++;
            this.itineraryWrapper.appendChild(this.createDOMElement());
      }

      /**
       * ハイライト項目のHTML文字列を生成
       * @override
       * @returns {string} ハイライト項目のHTML
       */
      createRawHTML(){
            return 
      }

      /**
       * ハイライト項目のDOM要素を作成
       * @override
       * @returns {HTMLElement} ハイライト項目のdiv要素
       */
      createDOMElement(){
            const dayIndex = this.dayCount - 1;
            let newDayHtml = this.dayTemplate
                  .replace(/{day_number}/g, this.dayCount)
                  .replace(/{day_index}/g, dayIndex);
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = newDayHtml;
            const newDay = tempDiv.firstElementChild;

            return newDay
      }

      /**
       * ハイライト項目を削除
       * @override
       * @param {Event} e - クリックイベント
       */
      removeElement(e){
            if (e.target.closest('.remove-day')) {
                  this.dayCount--
                  const item = e.target.closest('.itinerary-day-item');
                  if (document.querySelectorAll('.itinerary-day-item').length > 1) {
                        item.remove();
                      // Re-number the days
                        document.querySelectorAll('.itinerary-day-item').forEach((day, index) => {
                              day.querySelector('h3').textContent = `Day ${index + 1}`;
                        });
                  } else {
                        alert('At least one day is required in the itinerary.');
                  }
            }
      }
}