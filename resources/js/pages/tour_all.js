import FilterTour from "../components/filter/FilterTour.js"

const advancedFilter = document.getElementById("advanced-filter-toggle")
const advancedPanel = document.getElementById("advanced-panel")
const destinationFilter = document.getElementById("destination-filter")




let clickCount = 0
advancedFilter.addEventListener("click", (e)=>{
      clickCount++

      if(clickCount %2 === 0){
            advancedPanel.classList.add("hidden")
      }else{
            advancedPanel.classList.remove("hidden")
      }
      
})

const filterTourInstance = new FilterTour()

// destinationFilter.addEventListener("change", (e)=>{
//       const categoryId = e.currentTarget.value
//       const filterTourInstance = new FilterTour(categoryId)
//       filterTourInstance.filterByDestination()
//       filterTourInstance.filterByRating()
      
// })
