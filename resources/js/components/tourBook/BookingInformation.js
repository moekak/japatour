import PersonalInfoSaveObserver from "./observer/PersonalInfoSaveObserver.js"

export default class BookingInformation{
      constructor(){
            this.observers = []
            this.initializeElements()
            this.initialzeEvents()
      }

      initializeElements(){
            this.elements = {
                  firstName: document.getElementById("first-name"),
                  lastName: document.getElementById("last-name"),
                  email: document.getElementById("email"),
                  phone: document.getElementById("phone"),
                  request: document.getElementById("special-requests"),
                  terms: document.getElementById("terms"),
            }
      }

      initialzeEvents(){

            console.log("222222222222222222222222222");
            
            for(const element in this.elements){
                  console.log(element);
                  
            }
            if(this.elements.firstName){
                  this.elements.firstName.addEventListener("change", ()=>{
                        this.getAndNotify()
                  })
            }
            if(this.elements.lastName){
                  this.elements.lastName.addEventListener("change", ()=>{
                        this.getAndNotify()
                  })
            }
            if(this.elements.email){
                  this.elements.email.addEventListener("change", ()=>{
                        this.getAndNotify()
                  })
            }
            if(this.elements.phone){
                  this.elements.phone.addEventListener("change", ()=>{
                        this.getAndNotify()
                  })
            }
            if(this.elements.request){
                  this.elements.request.addEventListener("change", ()=>{
                        this.getAndNotify()
                  })
            }
            if(this.elements.terms){
                  this.elements.terms.addEventListener("change", ()=>{
                        this.getAndNotify()
                  })
            }
      }

       // オブザーバーへの通知メソッド
      notifyObservers(information){
            this.observers.forEach((observer)=>{
                  observer.update(information)
            })
      }

      // オブザーバー登録メソッド
      registerObserver(observer){
            this.observers.push(observer)
      }


      resisterSaveObservers(){
            this.registerObserver(new PersonalInfoSaveObserver({
                  firstName: document.getElementById("js_firstName"),
                  lastName: document.getElementById("js_lastName"),
                  email: document.getElementById("js_email"),
                  phone: document.getElementById("js_phone"),
                  request: document.getElementById("js_request"),
                  terms: document.getElementById("js_terms"),
            }))
      }
      getAndNotify(){
            const firstName = this.elements.firstName.value
            const lastName = this.elements.lastName.value
            const email = this.elements.email.value
            const phone = this.elements.phone.value
            const request = this.elements.request.value
            const terms = this.elements.terms.value

            const data = {
                  firstName,
                  lastName,
                  email,
                  phone,
                  request,
                  terms
            }

            this.notifyObservers(data)
      }


}