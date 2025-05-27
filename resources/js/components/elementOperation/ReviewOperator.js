import ElementOperatorInterface from "./ElementOperatorInterface.js";

export default class ReviewOperator extends ElementOperatorInterface{
      constructor(){
            super(); // 親クラスのコンストラクタを呼び出す
            this.addButton = document.getElementById('add-review')
            this.reviewCount  = document.querySelectorAll('.review-item').length
            this.reviewTemplate = document.getElementById('review-template').innerHTML;
            this.reviewWrapper = document.getElementById("review-container")
            this.initialize()
      }

      /**
       * イベントリスナーの初期化
       * @override
       */
      initialize(){
            // review項目作成処理
            this.addButton.addEventListener("click", this.addElement.bind(this))
            // review項目削除処理
            this.reviewWrapper.addEventListener("click", this.removeElement.bind(this))
      }

      /**
       * ハイライト項目を追加する
       * @override
       */
      addElement(){
            this.reviewWrapper.appendChild(this.createDOMElement());
            this.reviewCount++;
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
            let newDayHtml = this.reviewTemplate
                  .replace(/{day_index}/g, this.reviewCount)
                  .replace(/{review_index}/g, this.reviewCount + 1);
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
            if (e.target.closest('.remove-review')) {
                  this.reviewCount--
                  const item = e.target.closest('.review-item');
                  if (document.querySelectorAll('.review-item').length > 1) {
                        item.remove();
                        // Re-number the days
                        document.querySelectorAll('.review-item').forEach((day, index) => {
                              day.querySelector('h3').textContent = `Review ${index + 1}`;
                        });
                  } else {
                        alert('At least one review is required in the itinerary.');
                  }
            }
      }
}