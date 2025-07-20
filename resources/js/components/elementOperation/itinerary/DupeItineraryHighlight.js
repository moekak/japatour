import DupeInterface from "../DupeInterface.js";

export default class DupeItineraryHighlight extends DupeInterface {
    constructor() {
        if (DupeItineraryHighlight.instance) {
            return DupeItineraryHighlight.instance;
        }
        super();
        this.template = document.getElementById("itinerary-highlight_template").innerHTML;
        this.itemWrapper = null

        DupeItineraryHighlight.instance = this;
    }

    /**
     * @override
     */
    static getInstance() {
        if (!DupeItineraryHighlight.instance) {
                DupeItineraryHighlight.instance = new DupeItineraryHighlight();
        }
        return DupeItineraryHighlight.instance;
    }

    /**
     * @override
     */
    duplicateElement(itineraryContainer) {
        this.activityIndex++;
        this.createDOM(itineraryContainer);
    }

    /**
     * @override
     */
    createDOM(itineraryContainer) {
        this.itemWrapper = itineraryContainer.querySelector(".itinerary_highlight-wrapper");
        const highlightCount = this.itemWrapper.querySelectorAll(".itinerary_highlight-item").length;
        let rawHTML = this.template
            .replace(/{itinerary_index}/g, itineraryContainer.dataset.id)
            .replace(/{itinerary_highlight}/g, highlightCount);
        const newDiv = document.createElement("div");
        newDiv.classList.add("itinerary_highlight-item");
        newDiv.innerHTML = rawHTML;
        this.itemWrapper.appendChild(newDiv);
    }

    /**
     * @override
     */
    deleteElement(button) {
        if(!this.hasOneData(this.itemWrapper, "itinerary_highlight")){
            alert("create one itinerary highlight at least")
            return
        }
        const targetElement = button.closest(".itinerary_highlight-item");
        this.itemWrapper.removeChild(targetElement);
    }
}
