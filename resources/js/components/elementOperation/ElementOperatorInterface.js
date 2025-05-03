/**
 * 項目作成のインターフェース
 * @interface
 */
export default class ElementOperatorInterface {
      constructor() {
            if (new.target === ElementOperatorInterface) {
                  throw new Error('インターフェースのインスタンスは作成できません');
            }
      }

      /**
       * 初期化処理
       * @returns {void}
       */
      initialize() {
            throw new Error('Method not implemented');
      }

      /**
      * 新しく作成した項目を親要素の一番最後に挿入する
      * @returns {void} 
      */
      addElement() {
            throw new Error('Method not implemented');
      }

      /**
      * 項目のHTML要素を作成する
      * @returns {string} 項目のHTML文字列
      */
      createRawHTML(user) {
            throw new Error('Method not implemented');
      }
      /**
      * 項目のDOM要素を作成する
      * @returns {HTMLElement} 項目のdivタグ
      */
      createDOMElement(user) {
            throw new Error('Method not implemented');
      }

      /**
      * 新しく作成した項目を親要素の一番最後に挿入する
      * @returns {void} 
      */
      removeElement() {
            throw new Error('Method not implemented');
      }
}