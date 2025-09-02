
import PriceCalculationStrategy from "./PriceCalculationStrategy.js";

export default class StandardPriceStrategy extends PriceCalculationStrategy{
      static calculateAdultPrice(adultPrice, options){
            return adultPrice * options.adultNumber
      }
      static calculateChildPrice(childPrice,  options){
            return childPrice * options.childNumber
            
            
      }
}