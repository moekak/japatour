import AdditionalServiceOperator from "../components/elementOperation/AdditionalServiceOperator.js";
import addElement from "../components/elementOperation/HighlightOperator.js";
import ItineraryOperator from "../components/elementOperation/itinerary/ItineraryOperator.js";
import QaOperator from "../components/elementOperation/QaOperator.js";
import ReviewOperator from "../components/elementOperation/ReviewOperator.js";
import TourTermsOperator from "../components/elementOperation/TourTermsOperator.js";
import GalleryImage from "../components/GalleryImage.js";

new GalleryImage(document.querySelector(".create-tour-btn"))
new addElement()
new TourTermsOperator("inclusion")
new TourTermsOperator("exclusion")
new ItineraryOperator()
new ReviewOperator()
new QaOperator()
new AdditionalServiceOperator()