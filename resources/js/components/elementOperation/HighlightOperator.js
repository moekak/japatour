import ElementOperatorInterface from "./ElementOperatorInterface.js";

export default class HighlightOperator extends ElementOperatorInterface{
      constructor(){
            super(); // 親クラスのコンストラクタを呼び出す
            this.container = document.getElementById('highlights-container')
            this.addButton = document.getElementById('add-highlight')
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
                  <input type="text" name="highlights[]" >
                  <button type="button" class="remove-highlight btn-icon"><i class="fas fa-times"></i></button>
            `
      }

      /**
       * ハイライト項目のDOM要素を作成
       * @override
       * @returns {HTMLElement} ハイライト項目のdiv要素
       */
      createDOMElement(){
            const newItem = document.createElement('div');
            newItem.className = 'highlight-item';
            newItem.innerHTML = this.createRawHTML()

            return newItem
      }

      /**
       * ハイライト項目を削除
       * @override
       * @param {Event} e - クリックイベント
       */
      removeElement(e){
            if (e.target.closest('.remove-highlight')) {
                  const item = e.target.closest('.highlight-item');
                  if (document.querySelectorAll('.highlight-item').length > 1) {
                        item.remove();
                  } else {
                        alert('At least one highlight is required.');
                  }
            }
      }
}