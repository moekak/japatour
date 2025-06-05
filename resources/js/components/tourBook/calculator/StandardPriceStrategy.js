import DiscountStrategy from "./DiscountStrategy.js";
import PriceCalculationStrategy from "./PriceCalculationStrategy.js";

export default class StandardPriceStrategy extends PriceCalculationStrategy{
      static calculate(basePrice, options){
            if(options.travelers > 1){
                  return (basePrice * options.travelers) - DiscountStrategy.calculate(basePrice, options)
            }else{
                 return basePrice * options.travelers 
            }
            
            
      }
}