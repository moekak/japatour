import ElementOperatorInterface from "./ElementOperatorInterface.js";

export default class TourTermsOperator extends ElementOperatorInterface{
      constructor(name){
            super(); // 親クラスのコンストラクタを呼び出す
            this.name = name
            this.container = document.getElementById(`${this.name}s-container`)
            this.addButton = document.getElementById(`add-${this.name}`)
            this.initialize()
      }

      /**
       * イベントリスナーの初期化
       * @override
       */
      initialize(){
            // 含まれるもの含まれないものの項目作成処理
            this.addButton.addEventListener("click", this.addElement.bind(this))
            // 含まれるもの含まれないものの項目削除処理
            this.container.addEventListener("click", this.removeElement.bind(this))
      }

      /**
       * 含まれるもの含まれないものの項目を追加する
       * @override
       */
      addElement(){
            this.container.appendChild(this.createDOMElement());
      }

      /**
       * 含まれるもの含まれないものの項目のHTML文字列を生成
       * @override
       * @returns {string} 含まれるもの含まれないものの項目のHTML
       */
      createRawHTML(){
            return `
                  <input type="text" name="${this.name}s[]" >
                  <button type="button" class="remove-${this.name} btn-icon"><i class="fas fa-times"></i></button>
            `
      }

      /**
       * 含まれるもの含まれないものの項目のDOM要素を作成
       * @override
       * @returns {HTMLElement} 含まれるもの含まれないものの項目のdiv要素
       */
      createDOMElement(){
            const newItem = document.createElement('div');
            newItem.className = `${this.name}-item`;
            newItem.innerHTML = this.createRawHTML()

            return newItem
      }

      /**
       * 含まれるもの含まれないものの項目を削除
       * @override
       * @param {Event} e - クリックイベント
       */
      removeElement(e){
            if (e.target.closest(`.remove-${this.name}`)) {
                  const item = e.target.closest(`.${this.name}-item`);
                  if (document.querySelectorAll(`.${this.name}-item`).length > 1) {
                        item.remove();
                  } else {
                        alert(`At least one ${this.name} is required.`);
                  }
            }
      }
}