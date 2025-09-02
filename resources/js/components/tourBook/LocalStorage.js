export default class LocalStorage{

      static getData(){
            return localStorage.getItem("itineraryId")
      }

      static resetData(){
            localStorage.removeItem("itineraryId")
      }
}