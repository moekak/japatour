{{-- <div class="bg-white rounded-xl shadow-sm p-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
            <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                  <i class="fas fa-images text-[#e92929]"></i>
            </div>
            Tour Gallery
      </h2>

      <p class="text-sm text-gray-600 mb-4">Upload multiple images to showcase different aspects of your tour</p>

      <div class="grid grid-cols-3 gap-4 max-w-[1100px] mx-auto">
            <!-- Column 1 -->
            <div class="space-y-4">
                  <!-- Image 1 - Large -->
                  <div class="relative">
                        <div class="upload-container h-[500px] border-2 border-dashed border-gray-300 rounded-lg hover:border-[#e92929] transition-colors cursor-pointer flex items-center justify-center" onclick="document.getElementById('gallery-input-1').click()">
                              <div class="text-center">
                                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-sm text-gray-600">Upload Image 1</p>
                                    <p class="text-xs text-gray-500">400x500px recommended</p>
                              </div>
                        </div>
                        <img id="preview-1" class="hidden w-full h-[500px] object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="document.getElementById('gallery-input-1').click()">
                        <input type="file" id="gallery-input-1" name="gallery_image[0]" accept="image/*" class="hidden" onchange="previewImage(1, this)">
                        <button type="button" id="remove-1" class="hidden absolute top-2 right-2 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors" onclick="removeImage(1)">
                              <i class="fas fa-times text-sm"></i>
                        </button>
                  </div>
                  
                  <!-- Image 2 - Medium -->
                  <div class="relative">
                        <div class="upload-container h-[300px] border-2 border-dashed border-gray-300 rounded-lg hover:border-[#e92929] transition-colors cursor-pointer flex items-center justify-center" onclick="document.getElementById('gallery-input-2').click()">
                              <div class="text-center">
                                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-sm text-gray-600">Upload Image 2</p>
                                    <p class="text-xs text-gray-500">400x300px recommended</p>
                              </div>
                        </div>
                        <img id="preview-2" class="hidden w-full h-[300px] object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="document.getElementById('gallery-input-2').click()">
                        <input type="file" id="gallery-input-2" name="gallery_image[1]" accept="image/*" class="hidden" onchange="previewImage(2, this)">
                        <button type="button" id="remove-2" class="hidden absolute top-2 right-2 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors" onclick="removeImage(2)">
                              <i class="fas fa-times text-sm"></i>
                        </button>
                  </div>
            </div>

            <!-- Column 2 -->
            <div class="space-y-4">
                  <!-- Image 3 - Medium -->
                  <div class="relative">
                        <div class="upload-container h-[300px] border-2 border-dashed border-gray-300 rounded-lg hover:border-[#e92929] transition-colors cursor-pointer flex items-center justify-center" onclick="document.getElementById('gallery-input-3').click()">
                              <div class="text-center">
                                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-sm text-gray-600">Upload Image 3</p>
                                    <p class="text-xs text-gray-500">400x300px recommended</p>
                              </div>
                        </div>
                        <img id="preview-3" class="hidden w-full h-[300px] object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="document.getElementById('gallery-input-3').click()">
                        <input type="file" id="gallery-input-3" name="gallery_image[2]" accept="image/*" class="hidden" onchange="previewImage(3, this)">
                        <button type="button" id="remove-3" class="hidden absolute top-2 right-2 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors" onclick="removeImage(3)">
                              <i class="fas fa-times text-sm"></i>
                        </button>
                  </div>
                  
                  <!-- Image 4 - Large -->
                  <div class="relative">
                  <div class="upload-container h-[500px] border-2 border-dashed border-gray-300 rounded-lg hover:border-[#e92929] transition-colors cursor-pointer flex items-center justify-center" onclick="document.getElementById('gallery-input-4').click()">
                        <div class="text-center">
                              <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                              <p class="text-sm text-gray-600">Upload Image 4</p>
                              <p class="text-xs text-gray-500">400x500px recommended</p>
                        </div>
                  </div>
                  <img id="preview-4" class="hidden w-full h-[500px] object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="document.getElementById('gallery-input-4').click()">
                  <input type="file" id="gallery-input-4" name="gallery_image[3]" accept="image/*" class="hidden" onchange="previewImage(4, this)">
                  <button type="button" id="remove-4" class="hidden absolute top-2 right-2 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors" onclick="removeImage(4)">
                        <i class="fas fa-times text-sm"></i>
                  </button>
                  </div>
            </div>

            <!-- Column 3 -->
            <div class="space-y-4">
                  <!-- Image 5 - Square -->
                  <div class="relative">
                        <div class="upload-container h-[400px] border-2 border-dashed border-gray-300 rounded-lg hover:border-[#e92929] transition-colors cursor-pointer flex items-center justify-center" onclick="document.getElementById('gallery-input-5').click()">
                              <div class="text-center">
                                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-sm text-gray-600">Upload Image 5</p>
                                    <p class="text-xs text-gray-500">400x400px recommended</p>
                              </div>
                        </div>
                        <img id="preview-5" class="hidden w-full h-[400px] object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="document.getElementById('gallery-input-5').click()">
                        <input type="file" id="gallery-input-5" name="gallery_image[4]" accept="image/*" class="hidden" onchange="previewImage(5, this)">
                        <button type="button" id="remove-5" class="hidden absolute top-2 right-2 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors" onclick="removeImage(5)">
                              <i class="fas fa-times text-sm"></i>
                        </button>
                  </div>
                  
                  <!-- Image 6 - Square -->
                  <div class="relative">
                        <div class="upload-container h-[400px] border-2 border-dashed border-gray-300 rounded-lg hover:border-[#e92929] transition-colors cursor-pointer flex items-center justify-center" onclick="document.getElementById('gallery-input-6').click()">
                              <div class="text-center">
                                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-sm text-gray-600">Upload Image 6</p>
                                    <p class="text-xs text-gray-500">400x400px recommended</p>
                              </div>
                        </div>
                        <img id="preview-6" class="hidden w-full h-[400px] object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="document.getElementById('gallery-input-6').click()">
                        <input type="file" id="gallery-input-6" name="gallery_image[]" accept="image/*" class="hidden" onchange="previewImage(6, this)">
                        <button type="button" id="remove-6" class="hidden absolute top-2 right-2 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors" onclick="removeImage(6)">
                              <i class="fas fa-times text-sm"></i>
                        </button>
                  </div>
            </div>
      </div>
</div>

<script>
      function removeImage(index) {
            const preview = document.getElementById(`preview-${index}`);
            const uploadContainer = preview.previousElementSibling;
            const removeButton = document.getElementById(`remove-${index}`);
            const input = document.getElementById(`gallery-input-${index}`);
            
            preview.src = '';
            preview.classList.add('hidden');
            uploadContainer.classList.remove('hidden');
            removeButton.classList.add('hidden');
            input.value = '';
      }
      function previewImage(index, input) {
            const file = input.files[0];
            if (file) {
                  const reader = new FileReader();
                  reader.onload = function(e) {
                        const preview = document.getElementById(`preview-${index}`);
                        const uploadContainer = preview.previousElementSibling;
                        const removeButton = document.getElementById(`remove-${index}`);
                        
                        preview.src = e.target.result;
                        preview.classList.remove('hidden');
                        uploadContainer.classList.add('hidden');
                        removeButton.classList.remove('hidden');
                  };
                  reader.readAsDataURL(file);
            }
      }
</script>
 --}}




<div class="bg-white rounded-xl shadow-sm p-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
            <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                  <i class="fas fa-images text-[#e92929]"></i>
            </div>
            Tour Gallery
      </h2>

      <p class="text-sm text-gray-600 mb-4">Upload multiple images to showcase different aspects of your tour</p>

      <div class="grid grid-cols-3 gap-4 max-w-[1100px] mx-auto">
            <!-- Column 1 -->
            <div class="space-y-4">
                  <p>{{$tour['tour_gallery_images'][0]['gallery_image']}}</p>
                  <!-- Image 1 - Large -->
                  <x-gallery-image-upload :index="0" :height="500" :src={{$tour['tour_gallery_images'][0]['gallery_image'] ?? null}} />
                  <!-- Image 2 - Medium -->
                  <x-gallery-image-upload :index="1" :height="300" :src={{$tour['tour_gallery_images'][1]['gallery_image'] ?? null}} />
            </div>

            <!-- Column 2 -->
            <div class="space-y-4">
                  <!-- Image 3 - Medium -->
                  <x-gallery-image-upload :index="2" :height="300" :src={{$tour['tour_gallery_images'][2]['gallery_image'] ?? null}} />
                  <!-- Image 4 - Large -->
                  <x-gallery-image-upload :index="3" :height="500" :src={{$tour['tour_gallery_images'][3]['gallery_image'] ?? null}} />
            </div>

            <!-- Column 3 -->
            <div class="space-y-4">
                  <!-- Image 5 - Square -->
                  <x-gallery-image-upload :index="4" :height="400" :src={{$tour['tour_gallery_images'][4]['gallery_image'] ?? null}} />
                  <!-- Image 6 - Square -->
                  <x-gallery-image-upload :index="5" :height="400" :src={{$tour['tour_gallery_images'][5]['gallery_image'] ?? null}} />
            </div>
      </div>
</div>