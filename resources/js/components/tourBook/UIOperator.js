export default class UIOperator{
      static removeClickedStyle(element){
            element?.classList.remove('border-[#e92929]', 'bg-red-50');
            element?.classList.add('border-[#e7d0d0]');
      }

      static addClickedStyle(selectedElement){
            selectedElement?.classList.remove('border-[#e7d0d0]');
            selectedElement?.classList.add('border-[#e92929]', 'bg-red-50');
      }
}