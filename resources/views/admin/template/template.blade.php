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
                        <i  class="fas fa-times"></i>
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
                                          <div class="activity-item">
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