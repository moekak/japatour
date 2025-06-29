import DupeHighlight from "./DupeHighlight.js";
import DupeItinerary from "./itinerary/DupeItinerary.js";
import DupeItineraryActivity from "./itinerary/DupeItineraryActivity.js";
import DupeItineraryHighlight from "./itinerary/DupeItineraryHighlight.js";

export default class DupeEventhandler {
    constructor() {
        this.initialize();
        this.initializeHandlers();
    }

    initialize() {
        document.getElementById("tour-section").addEventListener("click", this.#handleEvent.bind(this));
    }

    initializeHandlers() {
        this.handlers = new Map([
            ['remove-activity_button', { instance: DupeItineraryActivity.getInstance(), action: 'delete' }],
            ['add-activity_button', { instance: DupeItineraryActivity.getInstance(), action: 'duplicate' }],
            ['remove-itinerary_button', { instance: DupeItinerary.getInstance(), action: 'delete' }],
            ['add-itinerary_button', { instance: DupeItinerary.getInstance(), action: 'duplicate' }],
            ['remove-itinerary-highlight_button', { instance: DupeItineraryHighlight.getInstance(), action: 'delete' }],
            ['add-itinerary-highlight_button', { instance: DupeItineraryHighlight.getInstance(), action: 'duplicate' }],
            ['remove-highlight_button', { instance: DupeHighlight.getInstance(), action: 'delete' }],
            ['add-highlight_button', { instance: DupeHighlight.getInstance(), action: 'duplicate' }]
        ]);
    }

    #handleEvent(e) {
        const itineraryContainer = e.target.closest(".itinerary-item");
        
        for (const [selector, { instance, action }] of this.handlers) {
            const button = e.target.closest(`.${selector}`);
            if (button) {
                if (action === 'delete') {
                    instance.deleteElement(button);
                } else {
                    instance.duplicateElement(itineraryContainer);
                }
                break; // 一つ見つかったら終了
            }
        }
    }
}