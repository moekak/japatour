import DupeItinerary from "./DupeItinerary.js";
import DupeItineraryActivity from "./DupeItineraryActivity.js";
import DupeItineraryHighlight from "./DupeItineraryHighlight.js";

export default class ItineraryEventHandler {
    constructor() {
        console.log("ItineraryEventHandler インスタンス作成");
        this.section = document.getElementById("itinerary-section");
        // this.instance = ItineraryEventHandlerFactory.getHandler(elementType)
        this.instance = null;

        this.initialize();
    }

    initialize() {
        document
            .getElementById("itinerary-section")
            .addEventListener("click", this.#handleEvent.bind(this));
    }

    #handleEvent(e) {
        const wrapper = e.target.closest(".itinerary-item");

        if (e.target.closest(`.remove-activity_button`)) {
            this.instance = new DupeItineraryActivity();
            this.instance.deleteElement(
                e.target.closest(`.remove-activity_button`),
                wrapper
            );
        }
        if (e.target.closest(`.add-activity_button`)) {
            this.instance = new DupeItineraryActivity();
            this.instance.duplicateElement(wrapper);
        }

        if (e.target.closest(`.remove-itinerary_button`)) {
            this.instance = new DupeItinerary();
            this.instance.deleteElement(
                e.target.closest(`.remove-itinerary_button`),
                wrapper
            );
        }
        if (e.target.closest(`.add-itinerary_button`)) {
            this.instance = new DupeItinerary();
            this.instance.duplicateElement(wrapper);
        }

        if (e.target.closest(`.remove-itinerary-highlight_button`)) {
            this.instance = new DupeItineraryHighlight();
            this.instance.deleteElement(
                e.target.closest(`.remove-itinerary-highlight_button`),
                wrapper
            );
        }
        if (e.target.closest(`.add-itinerary-highlight_button`)) {
            this.instance = new DupeItineraryHighlight();
            this.instance.duplicateElement(wrapper);
        }
    }
}
