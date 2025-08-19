{{-- TOUR HIGHLIGHT--}}
<template id="highlight_template">
      <div class="bg-gray-50 rounded-lg p-4">
            <div class="flex items-start gap-4">
                  <div class="w-12 h-12 bg-[#e92929]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-torii-gate text-[#e92929]"></i>
                  </div>
                  <div class="flex-1">
                        <input type="text" name="highlights[{highlight_index}][title]"
                              placeholder="Highlight title (e.g., Ancient Temples & Shrines)"
                              class="w-full px-3 py-2 mb-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm font-medium">
                        <textarea rows="2" name="highlights[{highlight_index}][description]"
                              placeholder="Brief description of this highlight..."
                              class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                  </div>
                  <button type="button"
                        class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-highlight_button">
                        <i class="fas fa-trash"></i>
                  </button>
            </div>
      </div>
</template>

{{-- ACTIVITY TEMPLATE --}}
<template id="activity_template">
      {{-- <div class="bg-gray-50 rounded-lg p-3">
            <div class="flex items-start gap-3">
                  <div class="flex-1 space-y-3">
                        <div class="grid md:grid-cols-3 gap-3">
                              <div class="md:col-span-2">
                                    <input type="text"
                                          name="itinerary[{itinerary_index}][activity][{activity_index}][activity_title]"
                                          placeholder="e.g., Senso-ji Temple Visit"
                                          class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                              </div>
                        </div>
                        <div>
                              <textarea
                                    rows="2"
                                    name="itinerary[{itinerary_index}][activity][{activity_index}][activity_description]"
                                    placeholder="Brief description of the activity..."
                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                        </div>
                  </div>
                  <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-activity_button">
                        <i  class="fas fa-times"></i>
                  </button>
            </div>
      </div> --}}
      <div class="bg-gray-50 rounded-lg p-3">
            <div class="flex items-start gap-3">
                  <!-- アイコン選択エリア（左側に追加） -->
                  <div class="flex-shrink-0 relative">
                        <button type="button" class="icon-selector-btn w-10 h-10 bg-white border-2 border-gray-300 rounded-lg flex items-center justify-center hover:border-[#e92929] transition-all focus:outline-none focus:ring-2 focus:ring-[#e92929]/20">
                        <i class="selected-icon fas fa-map-marker-alt text-[#e92929] text-sm"></i>
                        </button>
                        
                        <!-- アイコン選択ドロップダウン -->
                        <div class="icon-dropdown absolute top-12 left-0 bg-white border border-gray-200 rounded-lg shadow-lg p-3 w-60 hidden z-10">
                              <div class="text-xs font-medium text-gray-600 mb-2">アイコンを選択:</div>
                              <div class="grid grid-cols-6 gap-2">
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-map-marker-alt" title="場所">
                                          <i class="fas fa-map-marker-alt text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-camera" title="写真撮影">
                                          <i class="fas fa-camera text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-utensils" title="食事">
                                          <i class="fas fa-utensils text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-shopping-bag" title="ショッピング">
                                          <i class="fas fa-shopping-bag text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-train" title="交通">
                                          <i class="fas fa-train text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-museum" title="博物館">
                                          <i class="fas fa-museum text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-tree" title="公園">
                                          <i class="fas fa-tree text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-torii-gate" title="神社">
                                          <i class="fas fa-torii-gate text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-building" title="建物">
                                          <i class="fas fa-building text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-hot-tub" title="温泉">
                                          <i class="fas fa-hot-tub text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-mountain" title="山">
                                          <i class="fas fa-mountain text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-water" title="海">
                                          <i class="fas fa-water text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-star" title="観光地">
                                          <i class="fas fa-star text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-coffee" title="カフェ">
                                          <i class="fas fa-coffee text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-bed" title="宿泊">
                                          <i class="fas fa-bed text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-bus" title="バス">
                                          <i class="fas fa-bus text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-ticket-alt" title="チケット">
                                          <i class="fas fa-ticket-alt text-gray-600"></i>
                                    </button>
                                    <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-clock" title="時間">
                                          <i class="fas fa-clock text-gray-600"></i>
                                    </button>
                              </div>
                        </div>
                        <!-- 隠しフィールド：選択されたアイコンを保存 -->
                        <input type="hidden" name="itinerary[{itinerary_index}][activity][{activity_index}][activity_icon]" value="fa-map-marker-alt" class="activity-icon-input">
                  </div>

                  <div class="flex-1 space-y-3">
                        <div class="grid md:grid-cols-3 gap-3">
                              <div class="md:col-span-2">
                                    <input type="text" 
                                          name="itinerary[{itinerary_index}][activity][{activity_index}][activity_title]"
                                          placeholder="e.g., Senso-ji Temple Visit"
                                          class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                              </div>
                        </div>
                        <div>
                              <textarea
                                    rows="2"
                                    name="itinerary[{itinerary_index}][activity][{activity_index}][activity_description]"
                                    placeholder="Brief description of the activity..."
                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                        </div>
                  </div>
                  <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-activity_button">
                        <i class="fas fa-times"></i>
                  </button>
            </div>
      </div>
</template>

{{-- REVIEW TEMPLATE --}}
<template id="review_template">
      <div class="border border-gray-200 rounded-lg p-4">
            <div class="flex items-center justify-between mb-4">
                  <h3 class="text-lg font-medium text-gray-800">Review #{review_title}</h3>
                  <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-review_button" title="Delete this review">
                        <i class="fas fa-trash"></i>
                  </button>
            </div>
            
            <div class="grid md:grid-cols-2 gap-4 mb-4">
                  <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Reviewer Name *</label>
                  <input type="text" name="reviews[{review_index}][name]" value=""
                        placeholder="e.g., Sarah Johnson"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                  </div>
                  
                  <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Rating *</label>
                  <select name="reviews[{review_index}][rating]" 
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                        <option value="">Select Rating</option>
                        <option value="5">⭐⭐⭐⭐⭐ (5 stars)</option>
                        <option value="4">⭐⭐⭐⭐ (4 stars)</option>
                        <option value="3">⭐⭐⭐ (3 stars)</option>
                        <option value="2">⭐⭐ (2 stars)</option>
                        <option value="1">⭐ (1 star)</option>
                  </select>
                  </div>
            </div>

            <div class="mb-4">
                  <label class="block text-sm font-medium text-gray-700 mb-2">Review Content *</label>
                  <textarea rows="3" name="reviews[{review_index}][content]"
                  placeholder="Share what made this tour amazing..."
                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none"></textarea>
                  <p class="text-xs text-gray-500 mt-1">0/300 characters</p>
            </div>

            <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Review Date</label>
                  <input type="date" name="reviews[{review_index}][date]" value=""
                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
            </div>
      </div>
</template>




{{-- QA TEMPLATE --}}
<template id="qa_template">
      <div class="bg-gray-50 rounded-lg p-4">
            <div class="flex items-start gap-4">
                  <div class="flex-1">
                  <input type="text" name="questions[{qa_index}][question]"
                        placeholder="Type a frequently asked question..."
                        class="w-full px-3 py-2 mb-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm font-medium">
                  <textarea rows="2"  name="questions[{qa_index}][answer]"
                        placeholder="Type your answer here..."
                        class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                  </div>
                  <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-qa_button">
                  <i class="fas fa-trash"></i>
                  </button>
            </div>
      </div>
</template>


{{-- ITINERARY TEMPLATE --}}
<template id="itinerary-template">
      <div class="bg-white rounded-xl shadow-sm p-6 relative">
            <div class="absolute top-6 right-6">
                  <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-itinerary_button" title="Delete this itinerary">
                        <i class="fas fa-trash"></i>
                  </button>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                  <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-route text-[#e92929]"></i>
                  </div>
                  Tour Itinerary & Details #{itinerary_count}
            </h3>

            <!-- Tour Basic Details -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                  <div class="bg-gray-50 p-4 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                              <h5 class="font-semibold text-gray-800">
                                    <i class="fas fa-info-circle text-gray-400 mr-2"></i>
                                    Tour Information
                              </h5>
                              
                        </div>
                  </div>

                  <div class="m-8 grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">Duration(hours) *</label>
                              <input name="itinerary[{itinerary_index}][duration]" type="number" placeholder="e.g., 8" min="1" max="24" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                        </div>

                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">MaxParticipants *</label>
                              <input name="itinerary[{itinerary_index}][max_participants]" type="number" placeholder="e.g., 15" min="1" max="50" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                        </div>

                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">TourType *</label>
                              <select name="itinerary[{itinerary_index}][tour_type]" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                    <option>public</option>
                                    <option>private</option>
                              </select>
                        </div>

                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">Meeting Point *</label>
                              <input type="text" name="itinerary[{itinerary_index}][meeting_point]" placeholder="e.g., Hotel lobby or JR Shibuya Station" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                        </div>

                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">Adult Price (¥) *</label>
                              <input name="itinerary[{itinerary_index}][adult_price]" type="number" placeholder="e.g., 12000" min="0" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                        </div>

                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">Child Price (¥)</label>
                              <input name="itinerary[{itinerary_index}][child_price]" type="number" placeholder="e.g., 6000" min="0" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                        </div>
                  </div>

                  <div class="m-8">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Languages Available</label>
                        <div class="flex flex-wrap gap-3">
                              @foreach ($languages as $language)
                                    <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" 
                                          value="{{ $language->id }}"
                                          name="itinerary[{itinerary_index}][languages][]"
                                          class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                                    <span class="text-sm text-gray-700">{{$language->language}}</span>
                                    </label>
                              @endforeach
                        </div>
                  </div>
            </div>

            <!-- Itinerary Overview-->
            <div class="mt-8">
                  <div class="border border-gray-200 rounded-lg overflow-hidden">
                  <div class="bg-gray-50 p-4 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                              <h5 class="font-semibold text-gray-800">Overview</h5>
                        </div>
                  </div>
                  <div class="p-8">
                        <div>
                              <div class="space-y-5">
                              <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Overview Title *</label>
                                    <input type="text" name="itinerary[{itinerary_index}][overview_title]"
                                          placeholder="e.g., Experience Tokyo Like Never Before"
                                          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                              </div>

                              <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Overview Description *</label>
                                    <textarea rows="4"  name="itinerary[{itinerary_index}][overview_description]"
                                          placeholder="Describe what makes this tour special..."
                                          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none"></textarea>
                                    <p class="text-xs text-gray-500 mt-1">0/500 characters</p>
                              </div>
                              </div>
                        </div>
                  </div>
                  </div>
            </div>

            <div class="mt-8">
            <!-- Itinerary Item 1 -->
                  <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <div class="bg-gray-50 p-4 border-b border-gray-200">
                              <div class="flex items-center justify-between">
                                    <h5 class="font-semibold text-gray-800"> Itinerary Item</h5>
                              </div>
                        </div>

                        <div class="p-8">
                              <!-- Activities Section -->
                              <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Activities</label>
                                    <div class="space-y-3 activity-wrapper">
                                          <!-- Activity Entry 1 -->
                                          {{-- <div class="activity-item">
                                                <div class="bg-gray-50 rounded-lg p-3">
                                                      <div class="flex items-start gap-3">
                                                            <div class="flex-1 space-y-3">
                                                                  <div class="grid md:grid-cols-3 gap-3">
                                                                        <div class="md:col-span-2">
                                                                              <input type="text"
                                                                                    name="itinerary[{itinerary_index}][activity][{activity_index}][activity_title]"
                                                                                    placeholder="e.g., Senso-ji Temple Visit"
                                                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                                        </div>
                                                                  </div>
                                                                  <div>
                                                                        <textarea
                                                                              rows="2"
                                                                              name="itinerary[{itinerary_index}][activity][{activity_index}][activity_description]"
                                                                              placeholder="Brief description of the activity..."
                                                                              class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                                                                  </div>
                                                            </div>
                                                            <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-activity_button">
                                                                  <i class="fas fa-times"></i>
                                                            </button>
                                                      </div>
                                                </div>
                                          </div> --}}
                                          <div class="activity-item">
                                                <div class="bg-gray-50 rounded-lg p-3">
                                                      <div class="flex items-start gap-3">
                                                            <!-- アイコン選択エリア（左側に追加） -->
                                                            <div class="flex-shrink-0 relative">
                                                                  <button type="button" class="icon-selector-btn w-10 h-10 bg-white border-2 border-gray-300 rounded-lg flex items-center justify-center hover:border-[#e92929] transition-all focus:outline-none focus:ring-2 focus:ring-[#e92929]/20">
                                                                        <i class="selected-icon fas fa-map-marker-alt text-[#e92929] text-sm"></i>
                                                                  </button>
                                                                  
                                                                  <!-- アイコン選択ドロップダウン -->
                                                                  <div class="icon-dropdown absolute top-12 left-0 bg-white border border-gray-200 rounded-lg shadow-lg p-3 w-60 hidden z-10">
                                                                        <div class="text-xs font-medium text-gray-600 mb-2">アイコンを選択:</div>
                                                                        <div class="grid grid-cols-6 gap-2">
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-map-marker-alt" title="場所">
                                                                                    <i class="fas fa-map-marker-alt text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-camera" title="写真撮影">
                                                                                    <i class="fas fa-camera text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-utensils" title="食事">
                                                                                    <i class="fas fa-utensils text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-shopping-bag" title="ショッピング">
                                                                                    <i class="fas fa-shopping-bag text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-train" title="交通">
                                                                                    <i class="fas fa-train text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-museum" title="博物館">
                                                                                    <i class="fas fa-museum text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-tree" title="公園">
                                                                                    <i class="fas fa-tree text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-torii-gate" title="神社">
                                                                                    <i class="fas fa-torii-gate text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-building" title="建物">
                                                                                    <i class="fas fa-building text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-hot-tub" title="温泉">
                                                                                    <i class="fas fa-hot-tub text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-mountain" title="山">
                                                                                    <i class="fas fa-mountain text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-water" title="海">
                                                                                    <i class="fas fa-water text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-star" title="観光地">
                                                                                    <i class="fas fa-star text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-coffee" title="カフェ">
                                                                                    <i class="fas fa-coffee text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-bed" title="宿泊">
                                                                                    <i class="fas fa-bed text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-bus" title="バス">
                                                                                    <i class="fas fa-bus text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-ticket-alt" title="チケット">
                                                                                    <i class="fas fa-ticket-alt text-gray-600"></i>
                                                                              </button>
                                                                              <button type="button" class="icon-option w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 transition-colors" data-icon="fa-clock" title="時間">
                                                                                    <i class="fas fa-clock text-gray-600"></i>
                                                                              </button>
                                                                        </div>
                                                                  </div>
                                                                  <!-- 隠しフィールド：選択されたアイコンを保存 -->
                                                                  <input type="hidden" name="itinerary[{itinerary_index}][activity][{activity_index}][activity_icon]" value="fa-map-marker-alt" class="activity-icon-input">
                                                            </div>

                                                            <div class="flex-1 space-y-3">
                                                                  <div class="grid md:grid-cols-3 gap-3">
                                                                        <div class="md:col-span-2">
                                                                              <input type="text" 
                                                                                    name="itinerary[{itinerary_index}][activity][{activity_index}][activity_title]"
                                                                                    placeholder="e.g., Senso-ji Temple Visit"
                                                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                                        </div>
                                                                  </div>
                                                                  <div>
                                                                        <textarea
                                                                              rows="2"
                                                                              name="itinerary[{itinerary_index}][activity][{activity_index}][activity_description]"
                                                                              placeholder="Brief description of the activity..."
                                                                              class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                                                                  </div>
                                                            </div>
                                                            <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-activity_button">
                                                                  <i class="fas fa-times"></i>
                                                            </button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>

                                    <!-- Add Activity Button -->
                                    <button type="button" class="mt-3 text-[#e92929] hover:text-[#d61f1f] text-sm font-medium flex items-center gap-1 add-activity_button">
                                          <i class="fas fa-plus-circle"></i>
                                          Add activity
                                    </button>
                              </div>
                        </div>
                  </div>
                  <div class="border border-gray-200 rounded-lg overflow-hidden mt-8">
                        <div class="bg-gray-50 p-4 border-b border-gray-200">
                              <div class="flex items-center justify-between">
                                    <h5 class="font-semibold text-gray-800">Main Image for this Itinerary</h5>
                              </div>
                        </div>
                        <div class="preview_container border-2 border-dashed border-gray-300 rounded-lg p-5 text-center hover:border-[#e92929] transition-colors cursor-pointer hidden h-[350px]">
                              <label for="itinerary_{itinerary_index}" class="h-full block">
                                    <img src="" alt="" class="itinerary_preview_src{itinerary_index} h-full w-full object-cover">
                              </label>
                        </div>
                        <div class="m-8 itinerary_image_element{itinerary_index} border-2 border-dashed border-gray-300 rounded-lg p-8 text-center flex items-center flex-col justify-center hover:border-[#e92929] transition-colors cursor-pointer h-[350px]">
                              <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                              <p class="text-gray-600 font-medium mb-2">Upload itinerary image</p>
                              <p class="text-sm text-gray-500">This will be displayed as the itinerary banner image</p>
                              <p class="text-sm text-gray-500 mb-4">Recommended size: 1920x1080px</p>
                              <label for="itinerary_{itinerary_index}" class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors font-medium text-sm w-fit">
                                    Select Itinerary Image
                              </label>
                              <input type="file" name="itinerary[{itinerary_index}][image]" id="itinerary_{itinerary_index}" class="hidden">
                        </div>
                  </div>

                  <div class="border border-gray-200 rounded-lg overflow-hidden mt-8">
                        <div class="bg-gray-50 p-4 border-b border-gray-200">
                              <div class="flex items-center justify-between">
                                    <h5 class="font-semibold text-gray-800">Activity Highlights</h5>
                              </div>
                        </div>
                        <div class="m-8 space-y-2 itinerary_highlight-wrapper">
                              <div class="itinerary_highlight-item">
                                    <div class="flex items-center gap-2">
                                          <input type="text" name="itinerary[{itinerary_index}][itinerary_highlight][]" placeholder="e.g., Tokyo's oldest Buddhist temple"
                                                class="flex-1 px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                          <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-itinerary-highlight_button">
                                                <i class="fas fa-times"></i>
                                          </button>
                                    </div>
                              </div>
                        </div>
                        <button type="button" class="m-8 text-[#e92929] hover:text-[#d61f1f] text-sm font-medium flex items-center gap-1 add-itinerary-highlight_button mt-3">
                              <i class="fas fa-plus-circle"></i>
                              Add highlight
                        </button>
                  </div>
            </div>
      </div>
</template>



{{-- ITINERARY HIGHLIGHT TEMPLATE --}}
<template id="itinerary-highlight_template">
      <div class="flex items-center gap-2">
            <input type="text" name="itinerary[{itinerary_index}][itinerary_highlight][]" placeholder="e.g., Tokyo's oldest Buddhist temple"
                  class="flex-1 px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
            <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-itinerary-highlight_button">
                  <i class="fas fa-times"></i>
            </button>
      </div>
</template>