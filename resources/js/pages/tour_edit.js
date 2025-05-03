import GalleryImage from "../components/GalleryImage.js";
import addElement from "../components/elementOperation/HighlightOperator.js";
import ItineraryOperator from "../components/elementOperation/itinerary/ItineraryOperator.js";
import QaOperator from "../components/elementOperation/QaOperator.js";
import ReviewOperator from "../components/elementOperation/ReviewOperator.js";
import TourTermsOperator from "../components/elementOperation/TourTermsOperator.js";

new GalleryImage(document.querySelector(".edit-tour-btn"))
new addElement()
new TourTermsOperator("inclusion")
new TourTermsOperator("exclusion")
new ItineraryOperator()
new ReviewOperator()
new QaOperator()