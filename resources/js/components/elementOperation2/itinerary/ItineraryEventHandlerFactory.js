import DupeItineraryActivity from "./DupeItineraryActivity.js"
import DupeItineraryHighlight from "./DupeItineraryHighlight.js"

export default class ItineraryEventHandlerFactory{
      static getHandler(elementType){
            switch(elementType){
                  case "itinerary-highlight": return new DupeItineraryHighlight()
                  case "activity" : return  new DupeItineraryActivity()
            }
      }
}