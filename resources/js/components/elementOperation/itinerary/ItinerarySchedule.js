import ElementOperatorInterface from "../ElementOperatorInterface.js";

export default class ItinerarySchedule extends ElementOperatorInterface{
      constructor(event){
            super(); // 親クラスのコンストラクタを呼び出す - これが欠けている
            this.event = event

            if(this.event.target.closest('.add-schedule')){
                  this.btn =  this.event.target.closest('.add-schedule');  
            }else if(this.event.target.closest('.remove-schedule')){
                  this.btn =  this.event.target.closest('.remove-schedule');  
            }
            
            this.dayIndex = this.btn?.getAttribute('data-day');
            this.container = document.querySelector(`.schedule-items-container[data-day="${this.dayIndex}"]`);
            this.scheduleItems = this.container?.querySelectorAll('.schedule-item');
            this.scheduleIndex = this.scheduleItems?.length;
            const templateElement = document.getElementById('schedule-template');
            this.scheduleTemplate = templateElement.innerHTML;
            this.initialize()
      }


      /**
       * イベントリスナーの初期化
       * @override
       */
      initialize(){
            // ハイライト項目作成処理
            this.addElement()
            // ハイライト項目削除処理
            this.removeElement()
      }

      /**
       * ハイライト項目を追加する
       * @override
       */
      addElement(){
            if (this.event.target.closest('.add-schedule')){
                  this.container.appendChild(this.createDOMElement());  
            }
            
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
            let newScheduleHtml = this.scheduleTemplate
                  .replace(/{day_index}/g, this.dayIndex)
                  .replace(/{schedule_index}/g, this.scheduleIndex);
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = newScheduleHtml;
            const newSchedule = tempDiv.firstElementChild;

            return newSchedule
      }

      /**
       * ハイライト項目を削除
       * @override
       */
      removeElement(){
            if (this.event.target.closest('.remove-schedule')) {
                  const item = this.event.target.closest('.schedule-item');
                  const container = item.closest('.schedule-items-container');
                  if (container.querySelectorAll('.schedule-item').length > 1) {
                        item.remove();
                  } else {
                        alert('At least one schedule item is required per day.');
                  }
            }
      }
}