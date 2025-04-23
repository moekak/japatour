@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/admin/admin-tours.css') }}">
<link rel="stylesheet" href="{{ asset('css/tour_create.css') }}">
@endsection

@section('title', 'Edit Tour')

@section('main')
    @include('components.header')

    <div class="container">
        <div class="admin-header">
            <div class="admin-header-title">
                <h1>Edit Tour</h1>
                <p>Update details for {{$tour->title}}</p>
            </div>
            <div class="admin-header-actions">
                <a href="{{route('tour_list')}}" class="btn-outline">
                    <i class="fas fa-arrow-left"></i> Back to Tours
                </a>
                <a href="#" class="btn-secondary">
                    <i class="fas fa-eye"></i> View Tour
                </a>
            </div>
        </div>

        <form action="{{ route('tour.update', $tour->id) }}" method="POST" enctype="multipart/form-data" class="tour-form">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-sections">
                <!-- Basic Info Section -->
                <div class="form-section">
                    <h2 class="section-title">Basic Information</h2>
                    
                    <div class="form-group">
                        <label for="title">Tour Title <span class="required">*</span></label>
                        <input type="text" id="title" name="title" value="{{$tour->title}}" >
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="subtitle">Subtitle <span class="required">*</span></label>
                            <input type="text" id="subtitle" name="subtitle" value="{{$tour->subtitle}}" >
                        </div>
                        
                        <div class="form-group">
                            <label for="badge">Badge Text (optional)</label>
                            <input type="text" id="badge" name="badge" value="{{$tour->badge}}" placeholder="e.g. Best Seller, New Tour">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hours">Hours <span class="required">*</span></label>
                        <input type="number" id="hours" name="hours" value="{{$tour->hours}}" min="1" >
                    </div>
                    <div class="form-group">
                        <label for="start_location">Start Location <span class="required">*</span></label>
                        <input type="text" id="start_location" name="start_location" value="{{$tour->start_location}}" >
                    </div>
                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="destinations">Destinations <span class="required">*</span></label>
                            <input type="text" id="destinations" name="destinations" value="{{$tour->destinations}}" placeholder="e.g. Kyoto, Nara, Osaka" >
                        </div>
                        
                        <div class="form-group">
                            <label for="languages">Available Languages <span class="required">*</span></label>
                            <input type="text" id="languages" name="languages" value="{{$tour->languages}}" placeholder="e.g. English, Japanese" >
                        </div>
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="min_participants">Min. Participants <span class="required">*</span></label>
                            <input type="number" id="min_participants" name="min_participants" value="{{$tour->min_participants}}" min="1" >
                        </div>
                        
                        <div class="form-group">
                            <label for="max_participants">Max. Group Size <span class="required">*</span></label>
                            <input type="number" id="max_participants" name="max_participants" value="{{$tour->max_participants}}" min="1" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="available_dates">Available Dates <span class="required">*</span></label>
                        <div class="date-selection">
                            <div class="date-range-inputs">
                                <input type="text" id="date_range_start" placeholder="choose multiple dates" class="flatpickr-input" style="width: 100%;">
                            </div>
                            <div class="selected-dates" id="selected_dates_container">
                                <!-- Selected dates will appear here as tags -->
                            </div>
                            
                            <!-- Hidden input to store all selected dates as JSON -->
                            <input type="hidden" name="available_dates" id="available_dates_input" value="{{$tour->available_dates}}">
                        </div>
                    </div>
                </div>

                <!-- Pricing Section -->
                <div class="form-section">
                    <h2 class="section-title">Pricing Information</h2>
                    
                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="price">Price (per person) <span class="required">*</span></label>
                            <div class="price-input">
                                <select id="currency" name="currency">
                                    <option value="¥" {{ $tour->currency == "yen" ? "selected" : "" }}>¥ (JPY)</option>
                                    <option value="$">$ (USD)</option>
                                    <option value="€">€ (EUR)</option>
                                </select>
                                <input type="number" id="price" name="price" value="{{$tour->price}}" min="0" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="discount_percentage">Discount Percentage (optional)</label>
                            <div class="input-with-icon">
                                <input type="number" id="discount_percentage" name="discount_percentage" value="{{$tour->discount_percentage}}" min="0" max="100">
                                <span class="input-icon">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="limited_spots">Limited Availability Message (optional)</label>
                        <input type="text" id="limited_spots" name="limited_spots" value="{{$tour->limited_spots}}" placeholder="e.g. Only 5 spots left for May dates!">
                    </div>
                </div>

                <!-- Description Section -->
                <div class="form-section">
                    <h2 class="section-title">Tour Description</h2>
                    
                    <div class="form-group">
                        <label for="overview">Tour Overview <span class="required">*</span></label>
                        <textarea id="overview" name="overview" rows="5" >{{$tour->overview}}</textarea>
                        <p class="field-help">Provide a compelling overview of the tour experience. This will appear in the Tour Overview section.</p>
                    </div>

                    <div class="form-group">
                        <label>Tour Highlights <span class="required">*</span></label>
                        <div id="highlights-container">
                            @foreach ($tour->highlights as $highlight)
                                <div class="highlight-item">
                                    <input type="text" name="highlights[]" value="{{$highlight}}" >
                                    <button type="button" class="remove-highlight btn-icon"><i class="fas fa-times"></i></button>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" id="add-highlight" class="btn-secondary"><i class="fas fa-plus"></i> Add Highlight</button>
                    </div>
                </div>

                <!-- Itinerary Section -->
                <div class="form-section">
                    <h2 class="section-title">Itinerary Details</h2>
                    
                    <div id="itinerary-days-container">
                        <!-- Day 1 -->
                        @foreach ($tour->itinerary as $index => $itinerary)
                            <div class="itinerary-day-item">
                                <div class="day-header">
                                    <button type="button" class="remove-day btn-icon" data-day="1"><i class="fas fa-times"></i></button>
                                </div>
                                
                                <div class="form-group">
                                    <label for="itinerary[{{$index}}][title]">Day Title <span class="required">*</span></label>
                                    <input type="text" id="itinerary[{{$index}}][title]" name="itinerary[{{$index}}][title]" value="{{$itinerary["title"]}}" >
                                </div>
                                
                                <div class="form-group">
                                    <label for="itinerary[{{$index}}][description]">Day Description <span class="required">*</span></label>
                                    <textarea id="itinerary[{{$index}}][description]" name="itinerary[{{$index}}][description]" rows="3" >{{$itinerary["description"]}}</textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label>Schedule <span class="required">*</span></label>
                                    <div class="schedule-items-container" data-day={{$index}}>
                                        @foreach ($itinerary["schedule"] as $index2 =>$schedule)
                                            <div class="schedule-item">
                                                <div class="schedule-time">
                                                    <input type="text" name="itinerary[{{$index}}][schedule][{{$index2}}][time]" value="{{$schedule["time"]}}" placeholder="e.g. 9:00 AM" >
                                                </div>
                                                <div class="schedule-description">
                                                    <input type="text" name="itinerary[{{$index}}][schedule][{{$index2}}][description]" value="{{$schedule["description"]}}" placeholder="Activity description" >
                                                </div>
                                                <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" class="add-schedule btn-secondary" data-day={{$index}}><i class="fas fa-plus"></i> Add Schedule Item</button>
                                </div>
                            </div>

                        @endforeach
                        
                        
                    </div>
                    
                    <button type="button" id="add-day" class="btn-secondary"><i class="fas fa-plus"></i> Add Day</button>
                </div>

                <!-- Inclusions & Exclusions -->
                <div class="form-section">
                    <h2 class="section-title">What's Included / Not Included</h2>
                    
                    <div class="form-group">
                        <label>Inclusions <span class="required">*</span></label>
                        <div id="inclusions-container">
                            @foreach ($tour->inclusions as $inclusion)
                                <div class="inclusion-item">
                                    <input type="text" name="inclusions[]" value="{{$inclusion}}" >
                                    <button type="button" class="remove-inclusion btn-icon"><i class="fas fa-times"></i></button>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" id="add-inclusion" class="btn-secondary"><i class="fas fa-plus"></i> Add Inclusion</button>
                    </div>
                    
                    <div class="form-group">
                        <label>Exclusions <span class="required">*</span></label>
                        <div id="exclusions-container">
                            @foreach ($tour->exclusions as $exclusion)
                                <div class="exclusion-item">
                                    <input type="text" name="exclusions[]" value="{{$exclusion}}" >
                                    <button type="button" class="remove-exclusion btn-icon"><i class="fas fa-times"></i></button>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" id="add-exclusion" class="btn-secondary"><i class="fas fa-plus"></i> Add Exclusion</button>
                    </div>
                </div>

                <!-- Tour Images -->
                <div class="form-section">
                    <h2 class="section-title">Tour Images</h2>
                    
                    <div class="form-group">
                        <label for="hero_image">Hero Image</label>
                        <div class="image-upload-container">
                            <input type="file" id="hero_image" name="hero_image" accept="image/*" class="image-upload-input">
                            <label for="hero_image" class="image-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Change image...</span>
                            </label>
                            <div class="selected-file"></div>
                        </div>
                        <div class="preview-container">
                            <img id="previewImage" class="preview-image" src="{{ asset('storage/' . $tour->hero_image) }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="gallery_images">Gallery Images</label>

                        <div class="gallery_image-wrapepr">
                            <div class="image-upload-container" id="js_gallery_image" data-id="0">
                                <input type="file"  id="gallery_images_0" name="gallery_images[0]" accept="image/*" class="image-upload-input js_galllery_images"  >
                                <label for="gallery_images_0" class="image-upload-label">
                                    <i class="fas fa-images"></i>
                                    <span style="color: #fff;">Choose a file</span>
                                </label>
                                <div class="selected-files"></div>
                            </div>
                        </div>
                        <button type="button" id="add-gallery" class="btn-secondary"><i class="fas fa-plus"></i> Add Gallery Image</button>
                        <p class="field-help">Check the "Remove" box to delete existing images. Upload new images to add to the gallery.</p>
                        <div class="current-gallery">
                            @foreach ($tour->gallery_images as $index => $gallery_image)
                                <div class="gallery-image-item">
                                    <img src="{{ asset('storage/' . $gallery_image) }}" alt="{{ $tour->title }}" alt="Gallery image 1" class="thumbnail">
                                    <div class="gallery-image-actions">
                                        <input type="checkbox" id="remove_gallery_{{$index}}" name="remove_gallery[]" value="{{$gallery_image}}">
                                        <input type="hidden"  name="current_gallery_images[]"value="{{$gallery_image}}">
                                        <label for="remove_gallery_{{$index}}" class="remove-checkbox-label">Remove</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <p class="field-help">new gallery images</p>
                        <div class="preview-container" id="gallery_image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="button" class="btn-outline" onclick="window.location.href=">Cancel</button>
                <button type="submit" class="btn-primary edit-tour-btn">Update Tour</button>
            </div>
        </form>
    </div>

    <!-- Day Template (Hidden) -->
    <template id="day-template">
        <div class="itinerary-day-item">
            <div class="day-header">
                <h3>Day {day_number}</h3>
                <button type="button" class="remove-day btn-icon" data-day="{day_number}"><i class="fas fa-times"></i></button>
            </div>
            
            <div class="form-group">
                <label for="itinerary[{day_index}][title]">Day Title <span class="required">*</span></label>
                <input type="text" id="itinerary[{day_index}][title]" name="itinerary[{day_index}][title]" >
            </div>
            
            <div class="form-group">
                <label for="itinerary[{day_index}][description]">Day Description <span class="required">*</span></label>
                <textarea id="itinerary[{day_index}][description]" name="itinerary[{day_index}][description]" rows="3" ></textarea>
            </div>
            
            <div class="form-group">
                <label>Schedule <span class="required">*</span></label>
                <div class="schedule-items-container" data-day="{day_index}">
                    <div class="schedule-item">
                        <div class="schedule-time">
                            <input type="text" name="itinerary[{day_index}][schedule][0][time]" placeholder="e.g. 9:00 AM" >
                        </div>
                        <div class="schedule-description">
                            <input type="text" name="itinerary[{day_index}][schedule][0][description]" placeholder="Activity description" >
                        </div>
                        <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <button type="button" class="add-schedule btn-secondary" data-day="{day_index}"><i class="fas fa-plus"></i> Add Schedule Item</button>
            </div>
        </div>
    </template>

    <!-- Schedule Item Template (Hidden) -->
    <template id="schedule-template">
        <div class="schedule-item">
            <div class="schedule-time">
                <input type="text" name="itinerary[{day_index}][schedule][{schedule_index}][time]" placeholder="e.g. 9:00 AM" >
            </div>
            <div class="schedule-description">
                <input type="text" name="itinerary[{day_index}][schedule][{schedule_index}][description]" placeholder="Activity description" >
            </div>
            <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
        </div>
    </template>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Highlight management
            document.getElementById('add-highlight').addEventListener('click', function() {
                const container = document.getElementById('highlights-container');
                const newItem = document.createElement('div');
                newItem.className = 'highlight-item';
                newItem.innerHTML = `
                    <input type="text" name="highlights[]" >
                    <button type="button" class="remove-highlight btn-icon"><i class="fas fa-times"></i></button>
                `;
                container.appendChild(newItem);
            });

            document.getElementById('highlights-container').addEventListener('click', function(e) {
                if (e.target.closest('.remove-highlight')) {
                    const item = e.target.closest('.highlight-item');
                    if (document.querySelectorAll('.highlight-item').length > 1) {
                        item.remove();
                    } else {
                        alert('At least one highlight is required.');
                    }
                }
            });

            // Inclusion management
            document.getElementById('add-inclusion').addEventListener('click', function() {
                const container = document.getElementById('inclusions-container');
                const newItem = document.createElement('div');
                newItem.className = 'inclusion-item';
                newItem.innerHTML = `
                    <input type="text" name="inclusions[]" >
                    <button type="button" class="remove-inclusion btn-icon"><i class="fas fa-times"></i></button>
                `;
                container.appendChild(newItem);
            });

            document.getElementById('inclusions-container').addEventListener('click', function(e) {
                if (e.target.closest('.remove-inclusion')) {
                    const item = e.target.closest('.inclusion-item');
                    if (document.querySelectorAll('.inclusion-item').length > 1) {
                        item.remove();
                    } else {
                        alert('At least one inclusion is required.');
                    }
                }
            });

            // Exclusion management
            document.getElementById('add-exclusion').addEventListener('click', function() {
                const container = document.getElementById('exclusions-container');
                const newItem = document.createElement('div');
                newItem.className = 'exclusion-item';
                newItem.innerHTML = `
                    <input type="text" name="exclusions[]" >
                    <button type="button" class="remove-exclusion btn-icon"><i class="fas fa-times"></i></button>
                `;
                container.appendChild(newItem);
            });

            document.getElementById('exclusions-container').addEventListener('click', function(e) {
                if (e.target.closest('.remove-exclusion')) {
                    const item = e.target.closest('.exclusion-item');
                    if (document.querySelectorAll('.exclusion-item').length > 1) {
                        item.remove();
                    } else {
                        alert('At least one exclusion is required.');
                    }
                }
            });

            // Itinerary days management
            const dayTemplate = document.getElementById('day-template').innerHTML;
            const scheduleTemplate = document.getElementById('schedule-template').innerHTML;
            let dayCount = document.querySelectorAll('.itinerary-day-item').length;

            document.getElementById('add-day').addEventListener('click', function() {
                const container = document.getElementById('itinerary-days-container');
                dayCount++;
                const dayIndex = dayCount - 1;
                let newDayHtml = dayTemplate
                    .replace(/{day_number}/g, dayCount)
                    .replace(/{day_index}/g, dayIndex);
                
                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = newDayHtml;
                const newDay = tempDiv.firstElementChild;
                container.appendChild(newDay);
            });

            document.getElementById('itinerary-days-container').addEventListener('click', function(e) {
                // Handle remove day
                if (e.target.closest('.remove-day')) {
                    const item = e.target.closest('.itinerary-day-item');
                    if (document.querySelectorAll('.itinerary-day-item').length > 1) {
                        item.remove();
                        // Re-number the days
                        document.querySelectorAll('.itinerary-day-item').forEach((day, index) => {
                            day.querySelector('h3').textContent = `Day ${index + 1}`;
                        });
                    } else {
                        alert('At least one day is required in the itinerary.');
                    }
                }
                
                // Handle add schedule item
                if (e.target.closest('.add-schedule')) {
                    const btn = e.target.closest('.add-schedule');
                    const dayIndex = btn.getAttribute('data-day');
                    const container = document.querySelector(`.schedule-items-container[data-day="${dayIndex}"]`);
                    const scheduleItems = container.querySelectorAll('.schedule-item');
                    const scheduleIndex = scheduleItems.length;
                    
                    let newScheduleHtml = scheduleTemplate
                        .replace(/{day_index}/g, dayIndex)
                        .replace(/{schedule_index}/g, scheduleIndex);
                    
                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = newScheduleHtml;
                    const newSchedule = tempDiv.firstElementChild;
                    container.appendChild(newSchedule);
                }
                
                // Handle remove schedule item
                if (e.target.closest('.remove-schedule')) {
                    const item = e.target.closest('.schedule-item');
                    const container = item.closest('.schedule-items-container');
                    if (container.querySelectorAll('.schedule-item').length > 1) {
                        item.remove();
                    } else {
                        alert('At least one schedule item is required per day.');
                    }
                }
            });

            // File upload previews
            document.getElementById('hero_image').addEventListener('change', function(e) {
                const fileName = e.target.files[0]?.name || 'No file chosen';
                e.target.parentElement.querySelector('.selected-file').textContent = fileName;
            });

        });
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        const availableDates = <?php echo json_encode($tour->available_dates); ?>;
        const multiDatePicker = flatpickr("#date_range_start", {
            dateFormat: "Y-m-d",
            minDate: "today",
            mode: "multiple",
            // あらかじめ選択する日付を配列で指定
            defaultDate: availableDates,
            onChange: function(selectedDates, dateStr, instance) {
                // 選択された日付をJSON形式で隠しフィールドに保存
                document.getElementById('available_dates_input').value = JSON.stringify(selectedDates.map(date => {
                    // タイムゾーンを考慮した日付フォーマット
                    const year = date.getFullYear();
                    const month = String(date.getMonth() + 1).padStart(2, '0');
                    const day = String(date.getDate()).padStart(2, '0');
                    return `${year}-${month}-${day}`;
                }));
            }
        });
    </script>
    <script src="{{mix("js/tour_edit.js")}}"></script>
@endsection