import PriceCalculationStrategy from "./PriceCalculationStrategy.js";

export default class DiscountStrategy extends PriceCalculationStrategy{
      static calculate(basePrice, options){
            return (0.15 * basePrice) * options.travelers
      }
}