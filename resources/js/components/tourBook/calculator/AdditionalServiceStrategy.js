import PriceCalculationStrategy from "./PriceCalculationStrategy.js";

export default class AdditionalServiceStrategy extends PriceCalculationStrategy{
      static calculate(basePrice, options) {
            let additionalCost = 0;
            options.services.forEach(service => {
                  if (service.checked) {
                  additionalCost += Number(service.price);
                  }
            });
            return additionalCost;
      }
      
}