// シングルトンパターン
class IndexManager {
    constructor() {
        if (!IndexManager.instance) {
            this.list = []; // 初期状態
            IndexManager.instance = this; // インスタンスを保存
        }
        return IndexManager.instance; // 常に同じインスタンスを返す
    }

    getItineraryCount(itineraryCount) {
        return this.list[itineraryCount];
    }

    setItinerayCount(itineraryCount) {
        this.list.push(itineraryCount);
    }
}

const indexManager = new IndexManager();
Object.freeze(indexManager); // インスタンスを凍結して変更不可に

export default indexManager;
