export default class FilterTour{
      constructor(){
            this.tours = document.querySelectorAll('.tour-card[style*="display: block"]')
            this.categoryId = null
            this.rating = null

            this.destinationFilter = document.getElementById("destination-filter")
            this.ratingFilters = document.querySelectorAll(".rating-filter")
            this.applyFilter = document.getElementById("apply-filters")

            this.initializeEvents()
      }

      initializeEvents(){
            this.destinationFilter.addEventListener("change", (e)=>{
                  this.categoryId = e.currentTarget.value 
            })
            this.ratingFilters.forEach((rating)=>{
                  rating.addEventListener("change", (e)=>{
                        this.rating = e.currentTarget.value
                  })
            })

            this.applyFilter.addEventListener("click", ()=>{
                  this.filterByDestination()
                  // this.filterByRating()
            })
      }


      filterByDestination(){

            const tours =  document.querySelectorAll('.tour-card[style*="display: block"]')
            tours.forEach(tour => {
                  // 目的地フィルター
                  const destinationMatch = !this.categoryId || tour.dataset.destination === this.categoryId;
                  
                  // 評価フィルター（空文字列の場合は全て表示）
                  const ratingMatch = !this.rating || Number(tour.dataset.rating) >= Number(this.rating);
                  
                  if (destinationMatch && ratingMatch) {
                        tour.style.display = 'block';
                        tour.style.animation = 'fadeIn 0.5s ease-in-out';
                  } else {
                        tour.style.display = 'none';
                        tour.style.animation = '';
                  }
            });
      }

      filterByRating(){
            if(this.rating == null) return
            const tours =  document.querySelectorAll('.tour-card[style*="display: block"]')
            tours.forEach((tour)=>{
                  if(Number(tour.dataset.rating) >= Number(this.rating)){
                        tour.style.display = 'block';
                        tour.style.animation = 'fadeIn 0.5s ease-in';
                  }else{
                        tour.style.display = 'none';
                  }
            })
      }
}