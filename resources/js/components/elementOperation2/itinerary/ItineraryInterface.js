export default class ItineraryInterface {
    constructor() {
        this.template = "";
        this.wrapper = "";
    }

    generateItineraryId() {
        const items = Array.from(document.querySelectorAll(".itinerary-item"));
        return Number(items[items.length - 1].dataset.id) + 1;
    }

    #duplicateElement() {
        throw new Error("Method not implemented");
    }

    #createDOM() {
        throw new Error("Method not implemented");
    }

    #deleteElement() {
        throw new Error("Method not implemented");
    }
}
