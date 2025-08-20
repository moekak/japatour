import DupeInterface from "./DupeInterface.js"

export default class DupeReview extends DupeInterface  {
      constructor(){
            if (DupeReview.instance) {
                  return DupeReview.instance;
            }
            super()
            this.template = document.getElementById("review_template").innerHTML
            this.reviewWrapper = document.getElementById("review-wrapper")

            DupeReview.instance = this;
      }

      static getInstance() {
            if (!DupeReview.instance) {
                  DupeReview.instance = new DupeReview();
            }
            return DupeReview.instance;
      }

      // Tour Hightlightの要素の追加
      duplicateElement(){
            this.createDOM()
      }

      createDOM(){
            const reviewCount = this.reviewWrapper.querySelectorAll(".review-item").length
            let rawHTML = this.template.replace(/{review_index}/g, reviewCount).replace(/{review_title}/g, reviewCount + 1);
            const newDiv = document.createElement("div")
            newDiv.classList.add("review-item")
            newDiv.innerHTML = rawHTML
            this.reviewWrapper.appendChild(newDiv)
      }

      // Tour reviewの要素の削除
      deleteElement(button){
            if(!this.hasOneData(this.reviewWrapper, "review")){
                  alert("create one review at least")
                  return
            }
            const targetElement = button.closest(".review-item")
            this.reviewWrapper.removeChild(targetElement)
      }
}