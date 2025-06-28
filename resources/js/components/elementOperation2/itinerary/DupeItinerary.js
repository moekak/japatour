import ItineraryInterface from "./ItineraryInterface.js";

export default class DupeItinerary extends ItineraryInterface {
    constructor() {
        super();
        this.template = document.getElementById("itinerary-template").innerHTML;
        this.wrapper = document.getElementById("itinerary-wrapper");
    }

    /**
     * @override
     */
    duplicateElement() {
        this.createDOM();
    }

    /**
     * @override
     */
    createDOM() {
        console.log(this.generateItineraryId());

        const itineraryIndex = this.generateItineraryId();
        let rawHTML = this.template
            .replace(/{itinerary_index}/g, itineraryIndex)
            .replace(/{activity_index}/g, 0)
            .replace(/{itinerary_count}/g, itineraryIndex + 1);
        const newDiv = document.createElement("div");
        newDiv.classList.add("itinerary-item");
        newDiv.dataset.id = itineraryIndex;
        newDiv.innerHTML = rawHTML;
        this.wrapper.appendChild(newDiv);
    }

    /**
     * @override
     */
    deleteElement(button) {
        const targetElement = button.closest(".itinerary-item");
        this.wrapper.removeChild(targetElement);
    }
}
