<div>
    @if (session("temp_gallery_image.{$index}"))
        <div class="relative">
            <div class="hidden upload-container h-[{{$height}}px] border-2 border-dashed border-gray-300 rounded-lg hover:border-[#e92929] transition-colors cursor-pointer flex items-center justify-center" onclick="document.getElementById('gallery-input-{{$index + 1}}').click()">
                    <div class="text-center">
                        <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                        <p class="text-sm text-gray-600">Upload Image {{$index+1}}</p>
                        <p class="text-xs text-gray-500">400x{{$height}}px recommended</p>
                    </div>
            </div>
            <input type="hidden" value="{{session("temp_gallery_image.{$index}")}}" name="temp_gallery_image[{{$index}}]">
            <img id="preview-{{$index + 1}}" src="{{asset("storage/" . session("temp_gallery_image.{$index}"))}}" class="w-full h-[{{$height}}px] object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="document.getElementById('gallery-input-{{$index + 1}}').click()">
            <input type="file" id="gallery-input-{{$index + 1}}" name="gallery_image[{{$index}}]" accept="image/*" class="hidden" onchange="previewImage({{$index + 1}}, this)">
            <button type="button" id="remove-{{$index + 1}}" class="hidden absolute top-2 right-2 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors" onclick="removeImage({{$index + 1}})">
                    <i class="fas fa-times text-sm"></i>
            </button>
        </div>

    @elseif($src)
        <div class="relative">
            <div class="hidden upload-container h-[{{$height}}px] border-2 border-dashed border-gray-300 rounded-lg hover:border-[#e92929] transition-colors cursor-pointer flex items-center justify-center" onclick="document.getElementById('gallery-input-{{$index + 1}}').click()">
                    <div class="text-center">
                        <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                        <p class="text-sm text-gray-600">Upload Image {{$index+1}}</p>
                        <p class="text-xs text-gray-500">400x{{$height}}px recommended</p>
                    </div>
            </div>
            <img id="preview-{{$index + 1}}" src="{{asset("storage/" . $src)}}" class="w-full h-[{{$height}}px] object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="document.getElementById('gallery-input-{{$index + 1}}').click()">
            <input type="file" id="gallery-input-{{$index + 1}}" name="gallery_image[{{$index}}]" accept="image/*" class="hidden" onchange="previewImage({{$index + 1}}, this)">
            <button type="button" id="remove-{{$index + 1}}" class="hidden absolute top-2 right-2 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors" onclick="removeImage({{$index + 1}})">
                    <i class="fas fa-times text-sm"></i>
            </button>
        </div>
    @else
        <div class="relative">
            <div class="upload-container h-[{{$height}}px] border-2 border-dashed border-gray-300 rounded-lg hover:border-[#e92929] transition-colors cursor-pointer flex items-center justify-center" onclick="document.getElementById('gallery-input-{{$index + 1}}').click()">
                    <div class="text-center">
                        <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                        <p class="text-sm text-gray-600">Upload Image {{$index+1}}</p>
                        <p class="text-xs text-gray-500">400x{{$height}}px recommended</p>
                    </div>
            </div>
            <img id="preview-{{$index + 1}}" class="hidden w-full h-[{{$height}}px] object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="document.getElementById('gallery-input-{{$index + 1}}').click()">
            <input type="file" id="gallery-input-{{$index + 1}}" name="gallery_image[{{$index}}]" accept="image/*" class="hidden" onchange="previewImage({{$index + 1}}, this)">
            <button type="button" id="remove-{{$index + 1}}" class="hidden absolute top-2 right-2 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors" onclick="removeImage({{$index + 1}})">
                    <i class="fas fa-times text-sm"></i>
            </button>
        </div>
    @endif

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
