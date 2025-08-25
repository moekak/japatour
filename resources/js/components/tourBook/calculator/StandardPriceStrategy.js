import DiscountStrategy from "./DiscountStrategy.js";
import PriceCalculationStrategy from "./PriceCalculationStrategy.js";

export default class StandardPriceStrategy extends PriceCalculationStrategy{
      static calculateAdultPrice(adultPrice, options){
            // if(options.travelers > 1){
            //       return (basePrice * options.travelers) - DiscountStrategy.calculate(basePrice, options)
            // }else{
            //      return basePrice * options.travelers 
            // }

            console.log(options);
            console.log(adultPrice);
            

            return adultPrice * options.adultNumber
            
            
      }
      static calculateChildPrice(childPrice,  options){
            // if(options.travelers > 1){
            //       return (basePrice * options.travelers) - DiscountStrategy.calculate(basePrice, options)
            // }else{
            //      return basePrice * options.travelers 
            // }

            console.log("子供の料金" + childPrice);
            

            return childPrice * options.childNumber
            
            
      }
}