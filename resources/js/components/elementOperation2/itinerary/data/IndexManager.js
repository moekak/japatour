// シングルトンパターン
class IndexManager{
      constructor(){
            if (!IndexManager.instance) {
                  this.list = {}; // 初期状態
                  IndexManager.instance = this; // インスタンスを保存
            }
            return IndexManager.instance; // 常に同じインスタンスを返す
      }

      getState(){
            return this.list
      }

      setState(value){
            this.list.push(value)
      }
}

const indexManager = new IndexManager();
Object.freeze(indexManager); // インスタンスを凍結して変更不可に

export default indexManager;