import ObserverInterface from "./ObserverInterface.js";

export default class PersonalInfoSaveObserver extends ObserverInterface{
      constructor(elements) {
            super();
            this.elements = elements;
      }
      
      update(information) {
            this.elements.firstName.value = information.firstName
            this.elements.lastName.value =  information.lastName
            this.elements.email.value = information.email
            this.elements.phone.value = information.phone
            this.elements.request.value = information.request
            this.elements.terms.value = information.terms
      }
      
}