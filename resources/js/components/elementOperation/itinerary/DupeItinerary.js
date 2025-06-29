import FileOperation from "../../fileOperation/FileOperation.js";
import DupeInterface from "../DupeInterface.js";

export default class DupeItinerary extends DupeInterface {
    constructor() {
        if (DupeItinerary.instance) {
            return DupeItinerary.instance;
        }
        super();
        this.template = document.getElementById("itinerary-template").innerHTML;
        this.wrapper = document.getElementById("itinerary-wrapper");

        DupeItinerary.instance = this
    }

    /**
     * @override
     */
    static getInstance() {
        if (!DupeItinerary.instance) {
                DupeItinerary.instance = new DupeItinerary();
        }
        return DupeItinerary.instance;
    }

    /**
     * @override
     */
    duplicateElement() {
        const itineraryIndex = this.generateItineraryId();
        this.createDOM(itineraryIndex);
        this.fileUploadOperator(itineraryIndex)
    }

    /**
     * @override
     */
    createDOM(itineraryIndex) {
        let rawHTML = this.template
            .replace(/{itinerary_index}/g, itineraryIndex)
            .replace(/{activity_index}/g, 0)
            .replace(/{itinerary_count}/g, itineraryIndex + 1);
        const newDiv = document.createElement("div");
        newDiv.classList.add("itinerary-item", "mt-8");
        newDiv.dataset.id = itineraryIndex;
        newDiv.innerHTML = rawHTML;
        this.wrapper.appendChild(newDiv);
    }

    /**
     * @override
     */
    deleteElement(button) {
        if(!this.hasOneData(this.wrapper, "itinerary")){
            alert("create one itinerary at least")
            return
        }
        const targetElement = button.closest(".itinerary-item");
        this.wrapper.removeChild(targetElement);
    }


    fileUploadOperator(itineraryIndex){
        const fileUpload = document.getElementById(`itinerary_${itineraryIndex}`);
        const previewImageSrc = document.querySelector(`.itinerary_preview_src${itineraryIndex}`);
        const imageElement = document.querySelector(`.itinerary_image_element${itineraryIndex}`);
        const fileOperation = new FileOperation(fileUpload, previewImageSrc, imageElement)
        fileOperation.handleUpload()
    }
}
