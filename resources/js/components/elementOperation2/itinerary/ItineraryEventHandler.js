
import ItineraryEventHandlerFactory from "./ItineraryEventHandlerFactory.js"

export default class ItineraryEventHandler{
      constructor(elementType){
            this.elementType = elementType
            this.section = document.getElementById("itinerary-section")
            this.instance = ItineraryEventHandlerFactory.getHandler(elementType)

            this.initialize()
      }

      initialize(){
            this.section.addEventListener("click", this.#handleEvent.bind(this))
      }

      #handleEvent(e){

            console.log(e.target.closest(`.add-${this.elementType}_button`));
            

            if(e.target.closest(`.remove-${this.elementType}_button`)){
                  this.instance.deleteElement(e.target.closest(`.remove-${this.elementType}_button`))
            }
            if(e.target.closest(`.add-${this.elementType}_button`)){
                  this.instance.duplicateElement() 
            }
      }
}