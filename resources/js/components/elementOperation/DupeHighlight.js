import DupeInterface from "./DupeInterface.js"

export default class DupeHighlight extends DupeInterface  {
      constructor(){
            if (DupeHighlight.instance) {
                  return DupeHighlight.instance;
            }
            super()
            this.template = document.getElementById("highlight_template").innerHTML
            this.tourHighlightWrapper = document.getElementById("tour_highlight-wrapper")

            DupeHighlight.instance = this;
      }

      static getInstance() {
            if (!DupeHighlight.instance) {
                  DupeHighlight.instance = new DupeHighlight();
            }
            return DupeHighlight.instance;
      }

      // Tour Hightlightの要素の追加
      duplicateElement(){
            this.createDOM()
      }

      createDOM(){
            const highlightCount = this.tourHighlightWrapper.querySelectorAll(".highlight-item").length
            let rawHTML = this.template.replace(/{highlight_index}/g, highlightCount);
            const newDiv = document.createElement("div")
            newDiv.classList.add("highlight-item")
            newDiv.innerHTML = rawHTML
            this.tourHighlightWrapper.appendChild(newDiv)
      }

      // Tour highlightの要素の削除
      deleteElement(button){
            if(!this.hasOneData(this.tourHighlightWrapper, "highlight")){
                  alert("create one highlight at least")
                  return
            }
            const targetElement = button.closest(".highlight-item")
            this.tourHighlightWrapper.removeChild(targetElement)
      }
}