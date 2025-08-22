export default class TourReview{
      constructor(){
            this.initializeElements()
      }

      initializeElements(){
            this.elements = {             
                  adult_number: document.querySelectorAll(".adult_number"),
                  adult_price: document.querySelectorAll(".adult_price"),
                  child_number: document.querySelectorAll(".child_number"),
                  child_price: document.querySelectorAll(".child_price"),
                  total_price: document.querySelectorAll(".total_price"),
                  date: document.querySelectorAll(".date"),
                  firstName: document.querySelectorAll(".firstName"),
                  lastName: document.querySelectorAll(".lastName"),
                  email: document.querySelectorAll(".email"),
                  phone: document.querySelectorAll(".phone"),
                  request: document.querySelectorAll(".request"),

            }
      }

      updateReview(){
            for(const element in this.elements){
                  this.elements[element].forEach((el)=>{
                        el.innerHtml = document.getElementById(`js_${element}`).value
                  })
            }
      }

      
}     