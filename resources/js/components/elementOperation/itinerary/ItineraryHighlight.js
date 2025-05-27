import ElementOperatorInterface from "../ElementOperatorInterface.js";

export default class ItineraryHighlight extends ElementOperatorInterface{
      constructor(event){
            super(); // 親クラスのコンストラクタを呼び出す - これが欠けている
            this.event = event

            if(this.event.target.closest(".add-itinerary-highlight")){
                  this.itineraryBtnOperator = this.event.target.closest(".add-itinerary-highlight")
            }else if(this.event.target.closest(".remove-itinerary_highlight")){
                  this.itineraryBtnOperator = this.event.target.closest(".remove-itinerary_highlight")
            }
            this.container = this.itineraryBtnOperator?.closest('.form-group').querySelector('.itinerary-highlights-container');
            this.dayItem = this.itineraryBtnOperator?.closest('.itinerary-day-item');
            this.dayIndex = Array.from(document.querySelectorAll('.itinerary-day-item')).indexOf(this.dayItem);
            this.highlightItems = this.container?.querySelectorAll('.itineary-highlight-item');
            this.highlightIndex = this.highlightItems?.length;
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
            console.log("clickされました");
            
            if(this.event.target.closest(".add-itinerary-highlight")){
                  this.container.appendChild(this.createDOMElement()); 
            }
            
      }

      /**
       * ハイライト項目のHTML文字列を生成
       * @override
       * @returns {string} ハイライト項目のHTML
       */
      createRawHTML(){
            return `
                  <input type="text" name="itinerary[${this.dayIndex}][itinerary_highlight][${this.highlightIndex}]" value="" >
                  <button type="button" class="remove-itinerary_highlight btn-icon"><i class="fas fa-times"></i></button>
            `;
      }

      /**
       * ハイライト項目のDOM要素を作成
       * @override
       * @returns {HTMLElement} ハイライト項目のdiv要素
       */
      createDOMElement(){
            const newItem = document.createElement('div');
            newItem.className = 'itineary-highlight-item';
            newItem.innerHTML = this.createRawHTML()

            return newItem
      }

      /**
       * ハイライト項目を削除
       * @override
       */
      removeElement(){
            if (this.event.target.closest(".remove-itinerary_highlight")) {
                  const item = this.event.target.closest('.itineary-highlight-item');
                  if (this.highlightItems.length > 1) {
                        item.parentNode.removeChild(item);
                  } else {
                        alert('At least one itinerary highlight is required.');
                  }
            }
      }
}