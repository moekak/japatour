{{-- TOUR HIGHLIGHT--}}
<template id="highlight_template">
      <div class="bg-gray-50 rounded-lg p-4">
            <div class="flex items-start gap-4">
                  <div
                        class="w-12 h-12 bg-[#e92929]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-torii-gate text-[#e92929]"></i>
                  </div>
                  <div class="flex-1">
                        <input type="text" name="highlight_title[]"
                              placeholder="Highlight title (e.g., Ancient Temples & Shrines)"
                              class="w-full px-3 py-2 mb-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm font-medium">
                        <textarea rows="2" name="highlight_description[]"
                              placeholder="Brief description of this highlight..."
                              class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                  </div>
                  <button class="p-2 text-gray-400 hover:text-red-500 transition-colors delete_highlight-button">
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
                                          name="itinerary[{itinerary_index}][activity_title][{activity_index}]"
                                          placeholder="e.g., Senso-ji Temple Visit"
                                          class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                              </div>
                        </div>
                        <div>
                              <textarea rows="2"
                                    name="itinerary[{itinerary_index}][activity_description][{activity_index}]"
                                    placeholder="Brief description of the activity..."
                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                        </div>
                  </div>
                  <button type="button"
                        class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-activity">
                        <i class="fas fa-times"></i>
                  </button>
            </div>
      </div>
</template>


{{-- ITINERARY TEMPLATE --}}
<template>  
      <div class="bg-white rounded-xl shadow-sm p-6 relative">
            <div class="absolute top-6 right-6">
                  <button class="p-2 text-gray-400 hover:text-red-500 transition-colors"
                        title="Delete this itinerary">
                        <i class="fas fa-trash"></i>
                  </button>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                  <div
                        class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-route text-[#e92929]"></i>
                  </div>
                  Tour Itinerary & Details #{itinerary_index}
            </h3>

            <!-- Tour Basic Details -->
            <div class="bg-gray-50 rounded-lg p-5 mb-6">
                  <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-info-circle text-gray-400 mr-2"></i>
                        Tour Information
                  </h4>
                  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">Duration (hours) *</label>
                              <input  name="itinerary[{itinerary_index}][duration]" type="number" placeholder="e.g., 8" min="1" max="24"
                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                        </div>

                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">MaxParticipants *</label>
                              <input name="itinerary[{itinerary_index}][max_participants]" type="number" placeholder="e.g., 15" min="1" max="50"
                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                        </div>

                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">Tour Type *</label>
                              <select name="itinerary[{itinerary_index}][tour_type]"
                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                    <option>City Tour</option>
                                    <option>Cultural Experience</option>
                                    <option>Food Tour</option>
                                    <option>Nature & Adventure</option>
                                    <option>Night Tour</option>
                              </select>
                        </div>

                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">Meeting Point *</label>
                              <input type="text" name="itinerary[{itinerary_index}][meeting_point]"
                                    placeholder="e.g., Hotel lobby or JR Shibuya Station"
                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                        </div>

                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">Adult Price (¥) *</label>
                              <input name="itinerary[{itinerary_index}][adult_price]" type="number" placeholder="e.g., 12000" min="0"
                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                        </div>

                        <div>
                              <label class="block text-sm font-medium text-gray-700 mb-1">Child Price (¥)</label>
                              <input name="itinerary[{itinerary_index}][child_price]" type="number" placeholder="e.g., 6000" min="0"
                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                        </div>
                  </div>

                  <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Languages
                              Available</label>
                        <div class="flex flex-wrap gap-3">
                              <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" checked name="itinerary[{itinerary_index}][languages][]"
                                          class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                                    <span class="text-sm text-gray-700">English</span>
                              </label>
                              <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" checked name="itinerary[{itinerary_index}][languages][]"
                                          class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                                    <span class="text-sm text-gray-700">Japanese</span>
                              </label>
                              <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" name="itinerary[{itinerary_index}][languages][]"
                                          class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                                    <span class="text-sm text-gray-700">Chinese</span>
                              </label>
                              <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" name="itinerary[{itinerary_index}][languages][]"
                                          class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                                    <span class="text-sm text-gray-700">Korean</span>
                              </label>
                        </div>
                  </div>
            </div>

            <!-- Itinerary Items -->
            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                  <i class="fas fa-list-ol text-gray-400 mr-2"></i>
                  Itinerary Schedule
            </h4>

            <div class="space-y-4"  id="itinerary-section">
                  <!-- Itinerary Item 1 -->
                  <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <div class="bg-gray-50 p-4 border-b border-gray-200">
                              <div class="flex items-center justify-between">
                                    <h5 class="font-semibold text-gray-800">Itinerary Item #{activity_index}</h5>
                                    <div class="flex gap-2">
                                          <button
                                                class="p-1.5 text-gray-400 hover:text-gray-600 transition-colors">
                                                <i class="fas fa-grip-vertical"></i>
                                          </button>
                                          <button
                                                class="p-1.5 text-gray-400 hover:text-red-500 transition-colors">
                                                <i class="fas fa-trash"></i>
                                          </button>
                                    </div>
                              </div>
                        </div>

                        <div class="p-4 space-y-4">
                              <!-- Activities Section -->
                              <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Activities</label>
                                    <div class="space-y-3" id="activity-wrapper">
                                          <!-- Activity Entry 1 -->
                                          <div class="activity-item">
                                                <div class="bg-gray-50 rounded-lg p-3">
                                                      <div class="flex items-start gap-3">
                                                            <div class="flex-1 space-y-3">
                                                                  <div class="grid md:grid-cols-3 gap-3">
                                                                        <div class="md:col-span-2">
                                                                              <input type="text"  name="itinerary[{itinerary_index}][activity_title][{activity_index}]"
                                                                                    placeholder="e.g., Senso-ji Temple Visit"
                                                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                                        </div>
                                                                  </div>
                                                                  <div>
                                                                        <textarea rows="2"
                                                                              name="itinerary[{itinerary_index}][activity_description][{activity_index}]"
                                                                              placeholder="Brief description of the activity..."
                                                                              class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                                                                  </div>
                                                            </div>
                                                            <button type="button"
                                                                  class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-activity">
                                                                  <i class="fas fa-times"></i>
                                                            </button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    
                                    <!-- Add Activity Button -->
                                    <button type="button" class="mt-3 text-[#e92929] hover:text-[#d61f1f] text-sm font-medium flex items-center gap-1 add-activity">
                                          <i class="fas fa-plus-circle"></i>
                                          Add activity
                                    </button>
                              </div>

                              <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Main
                                          Image for this Activity</label>
                                    <div
                                          class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center hover:border-[#e92929] transition-colors cursor-pointer">
                                          <i class="fas fa-image text-2xl text-gray-400 mb-2"></i>
                                          <p class="text-xs text-gray-500">Upload activity image</p>
                                    </div>
                              </div>

                              <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Activity Highlights</label>
                                    <div class="space-y-2">
                                          <div class="flex items-center gap-2">
                                                <input type="text"
                                                      name="itinerary[{itinerary_index}][activity_highlight][]"
                                                      placeholder="e.g., Tokyo's oldest Buddhist temple"
                                                      class="flex-1 px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                <button
                                                      class="p-2 text-gray-400 hover:text-red-500 transition-colors">
                                                      <i class="fas fa-times"></i>
                                                </button>
                                          </div>
                                          <button
                                                class="text-[#e92929] hover:text-[#d61f1f] text-sm font-medium flex items-center gap-1">
                                                <i class="fas fa-plus-circle"></i>
                                                Add highlight
                                          </button>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            <button
                  class="mt-4 w-full py-3 border-2 border-dashed border-gray-300 rounded-lg text-gray-600 hover:border-[#e92929] hover:text-[#e92929] transition-colors flex items-center justify-center gap-2">
                  <i class="fas fa-plus"></i>
                  <span class="font-medium">Add Itinerary Item</span>
            </button>
      </div>
</template>