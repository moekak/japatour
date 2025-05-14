import ElementOperatorInterface from "./ElementOperatorInterface.js";

export default class AdditionalServiceOperator extends ElementOperatorInterface{
      constructor(){
            super(); // 親クラスのコンストラクタを呼び出す
            this.container = document.getElementById('services-container')
            this.addButton = document.getElementById('add-service')
            this.serviceTemplate = document.getElementById("service-template").innerHTML
            this.serviceCount  = document.querySelectorAll('.service-item').length
            this.initialize()
      }

      /**
       * イベントリスナーの初期化
       * @override
       */
      initialize(){
            // ハイライト項目作成処理
            this.addButton.addEventListener("click", this.addElement.bind(this))
            // ハイライト項目削除処理
            this.container.addEventListener("click", this.removeElement.bind(this))
      }

      /**
       * ハイライト項目を追加する
       * @override
       */
      addElement(){
            this.container.appendChild(this.createDOMElement());
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
            let newDayHtml = this.serviceTemplate
                  .replace(/{index}/g, this.serviceCount);
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
            if (e.target.closest('.remove-service')) {
                  this.serviceCount--
                  const item = e.target.closest('.service-item');
                  item.remove();
            }
      }
}