import ItineraryInterface from "./ItineraryInterface.js";

export default class DupeItineraryHighlight extends ItineraryInterface {
    constructor() {
        super();
        this.template = document.getElementById(
            "itinerary-highlight_template"
        ).innerHTML;
    }

    /**
     * @override
     */
    duplicateElement(wrapper) {
        this.activityIndex++;
        this.createDOM(wrapper);
    }

    /**
     * @override
     */
    createDOM(wrapper) {
        console.log(wrapper);

        const highlightWrapper = wrapper.querySelector(
            ".itinerary_highlight-wrapper"
        );

        console.log(highlightWrapper);

        const highlightCount = highlightWrapper.querySelectorAll(
            ".itinerary_highlight-item"
        ).length;
        let rawHTML = this.template
            .replace(/{itinerary_index}/g, wrapper.dataset.id)
            .replace(/{activity_highlight}/g, highlightCount);
        const newDiv = document.createElement("div");
        newDiv.classList.add("itinerary_highlight-item");
        newDiv.innerHTML = rawHTML;
        highlightWrapper.appendChild(newDiv);
    }

    /**
     * @override
     */
    deleteElement(button, wrapper) {
        const targetElement = button.closest(".itinerary_highlight-item");
        wrapper
            .querySelector(".itinerary_highlight-wrapper")
            .removeChild(targetElement);
    }
}
