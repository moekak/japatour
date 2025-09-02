import PersonalInfoSaveObserver from "./observer/PersonalInfoSaveObserver.js"

export default class BookingInformation{
      constructor(){
            this.observers = []
            this.initializeElements()
            this.initialzeEvents()
            this.resisterSaveObservers()
      }

      initializeElements(){
            this.elements = {
                  firstName: document.getElementById("first-name"),
                  lastName: document.getElementById("last-name"),
                  email: document.getElementById("email"),
                  phone: document.getElementById("phone"),
                  request: document.getElementById("special-requests"),
            }
      }

      initialzeEvents(){
            for(const element in this.elements){
                  this.elements[element].addEventListener("input", ()=>{
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
            }))
      }
      getAndNotify(){
            const firstName = this.elements.firstName.value
            const lastName = this.elements.lastName.value
            const email = this.elements.email.value
            const phone = this.elements.phone.value
            const request = this.elements.request.value

            const data = {
                  firstName,
                  lastName,
                  email,
                  phone,
                  request,
            }

            this.notifyObservers(data)
      }


}