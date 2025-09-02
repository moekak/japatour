export default class TourTemplate{
      static createTourCard(tour) {
            return `
                  <div class="tour-card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer" data-price=${tour["minimum_price"]} data-duration="1" data-destination=${tour["category_id"]} data-rating=${tour["average_rate"]}>
                        <div class="relative h-48 overflow-hidden">
                              <img src="/storage/${tour["hero_image"]}" alt=${tour["title"]} class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                              <div class="absolute top-4 right-4">
                                    <span class="bg-black/50 text-white px-3 py-1 rounded-full text-sm">${tour["badge"]}</span>
                              </div>
                        </div>
                        <div class="p-4">
                              <div class="flex items-center gap-2 mb-2 text-xs text-[#994d4d]">
                                    <i class="fas fa-clock"></i>
                                    <span>${tour["minimum_duration"]} hours~</span>
                                    <span>•</span>
                                    <i class="fas fa-users"></i>
                                    <span>Max 12 people</span>
                              </div>
                              <h3 class="text-[#1b0e0e] text-lg font-bold mb-2  transition-colors line-clamp-2">${tour["title"]}</h3>
                              <p class="text-[#994d4d] text-sm leading-relaxed mb-3 line-clamp-3">${tour["subtitle"]}</p>
                              <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                          <div class="flex items-center gap-1 text-[#994d4d]">
                                                {!!\App\Services\Util\FormatService::generateStar($tour->average_rate)!!}
                                                <span class="text-sm font-medium">{{number_format($tour->average_rate, 1)}}</span>
                                          </div>
                                          <span class="text-[#994d4d] text-xs">${tour["tourReviews"].length} reviews)</span>
                                    </div>
                                    <div class="text-right">
                                          <div class="text-[#e92929] text-lg font-bold">¥${tour["minimum_price"]}~</div>
                                    </div>
                              </div>
                        </div>
                  </div>
            `
      }
}