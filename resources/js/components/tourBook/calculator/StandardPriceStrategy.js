import PriceCalculationStrategy from "./PriceCalculationStrategy.js";

export default class StandardPriceStrategy extends PriceCalculationStrategy{
      calculate(basePrice, options){
            return basePrice * options.travelers
      }
}