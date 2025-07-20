import DupeInterface from "./DupeInterface.js"

export default class DupeQA extends DupeInterface  {
      constructor(){
            if (DupeQA.instance) {
                  return DupeQA.instance;
            }
            super()
            this.template = document.getElementById("qa_template").innerHTML
            this.qaWrapper = document.getElementById("qa-wrapper")

            DupeQA.instance = this;
      }

      static getInstance() {
            if (!DupeQA.instance) {
                  DupeQA.instance = new DupeQA();
            }
            return DupeQA.instance;
      }

      // Tour Hightlightの要素の追加
      duplicateElement(){
            this.createDOM()
      }

      createDOM(){
            const qaCount = this.qaWrapper.querySelectorAll(".qa-item").length
            let rawHTML = this.template.replace(/{qa_index}/g, qaCount).replace(/{qa_title}/g, qaCount + 1);
            const newDiv = document.createElement("div")
            newDiv.classList.add("qa-item")
            newDiv.innerHTML = rawHTML
            this.qaWrapper.appendChild(newDiv)
      }

      // Tour qaの要素の削除
      deleteElement(button){
            if(!this.hasOneData(this.qaWrapper, "qa")){
                  alert("create one qa at least")
                  return
            }
            const targetElement = button.closest(".qa-item")
            this.qaWrapper.removeChild(targetElement)
      }
}