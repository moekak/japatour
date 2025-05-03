import ElementOperatorInterface from "./ElementOperatorInterface.js";

export default class QaOperator extends ElementOperatorInterface{
      constructor(){
            super(); // 親クラスのコンストラクタを呼び出す
            this.addButton = document.getElementById('add-qa')
            this.qaCount  = document.querySelectorAll('.qa-item').length
            this.qaTemplate = document.getElementById('qa-template').innerHTML;
            this.qaWrapper = document.getElementById("qa-container")
            this.initialize()
      }

      /**
       * イベントリスナーの初期化
       * @override
       */
      initialize(){
            // qa項目作成処理
            this.addButton.addEventListener("click", this.addElement.bind(this))
            // qa項目削除処理
            this.qaWrapper.addEventListener("click", this.removeElement.bind(this))
      }

      /**
       * ハイライト項目を追加する
       * @override
       */
      addElement(){
            this.qaCount++;
            this.qaWrapper.appendChild(this.createDOMElement());
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
            let newDayHtml = this.qaTemplate
                  .replace(/{day_index}/g, this.qaCount);
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
            if (e.target.closest('.remove-qa')) {
                  this.qaCount--
                  const item = e.target.closest('.qa-item');
                  if (document.querySelectorAll('.qa-item').length > 1) {
                        item.remove();
                        // Re-number the days
                        document.querySelectorAll('.qa-item').forEach((day, index) => {
                              day.querySelector('h3').textContent = `Question ${index + 1}`;
                        });
                  } else {
                        alert('At least one qa is required in the itinerary.');
                  }
            }
      }
}