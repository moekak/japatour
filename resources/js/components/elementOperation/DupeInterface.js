export default class DupeInterface {
    constructor() {
        this.template = "";
    }

    generateItineraryId() {
        const items = Array.from(document.querySelectorAll(".itinerary-item"));
        console.log("id" + items[items.length - 1].dataset.id);
        
        return Number(items[items.length - 1].dataset.id) + 1;
    }

    hasOneData(element, type){
        return element?.querySelectorAll(`.${type}-item`).length > 1
    }

    duplicateElement(itineraryContainer = null) {
        throw new Error("Method not implemented");
    }

    createDOM(itineraryContainer = null) {
        throw new Error("Method not implemented");
    }

    deleteElement(button) {
        throw new Error("Method not implemented");
    }

    static getInstance(){
        throw new Error("Method not implemented");
    }
}
