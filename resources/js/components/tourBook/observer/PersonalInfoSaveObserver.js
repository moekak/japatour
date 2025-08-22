import ObserverInterface from "./ObserverInterface.js";

export default class PersonalInfoSaveObserver extends ObserverInterface{
      constructor(elements) {
            super();
            this.elements = elements;
            this.reviewButton = document.getElementById("continue-to-step-3")
      }
      
      update(information) {
            this.elements.firstName.value = information.firstName
            this.elements.lastName.value =  information.lastName
            this.elements.email.value = information.email
            this.elements.phone.value = information.phone
            this.elements.request.value = information.request

            const hasData =  this.elements.firstName !== "" && this.elements.lastName!== ""  && this.elements.email !== "" && this.elements.phone !== "" 
            this.reviewButton.disabled = !hasData
      }
      
}