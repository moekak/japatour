import ElementOperatorInterface from "./ElementOperatorInterface.js";

export default class AdditionalServiceOperator extends ElementOperatorInterface{
      constructor(){
            super(); // 親クラスのコンストラクタを呼び出す
            this.container = document.getElementById('services-container')
            this.addButton = document.getElementById('add-service')
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
            return `
                  <input type="text" name="services[service][]" >
                  <div class="price-input">
                        <input type="number" id="price" name="services[price][]"  min="0" placeholder="price(￥)">
                  </div>
                  <button type="button" class="remove-service btn-icon"><i class="fas fa-times"></i></button>
            `
      }

      /**
       * ハイライト項目のDOM要素を作成
       * @override
       * @returns {HTMLElement} ハイライト項目のdiv要素
       */
      createDOMElement(){
            const newItem = document.createElement('div');
            newItem.className = 'service-item';
            newItem.innerHTML = this.createRawHTML()

            return newItem
      }

      /**
       * ハイライト項目を削除
       * @override
       * @param {Event} e - クリックイベント
       */
      removeElement(e){
            if (e.target.closest('.remove-service')) {
                  const item = e.target.closest('.service-item');
                  item.remove();
            }
      }
}