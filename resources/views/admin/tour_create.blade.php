
@extends('layouts.app')

@section('title', 'Create New Tour')
@section('style')
<link rel="stylesheet" href="{{ asset('css/tour_create.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/admin-tours.css') }}">
    
@endsection

@section('content')
    <div class="container">
        <div class="admin-header">
            <h1>Create New Tour</h1>
            <p>Add a new tour to your catalog</p>
        </div>

        <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data" class="tour-form">
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
                        <input type="text" id="title" name="title" value="{{ old('title') }}" >
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="subtitle">Subtitle <span class="required">*</span></label>
                            <input type="text" id="subtitle" name="subtitle" value="{{ old('subtitle') }}" >
                        </div>
                        
                        <div class="form-group">
                            <label for="badge">Badge Text (optional)</label>
                            <input type="text" id="badge" name="badge" value="{{ old('badge') }}" placeholder="e.g. Best Seller, New Tour">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hours">Hours<span class="required">*</span></label>
                        <input type="number" id="hours" name="hours" value="{{ old('hours') }}" min="1" >
                    </div>
                    <div class="form-group">
                        <label for="start_location">Start Location <span class="required">*</span></label>
                        <input type="text" id="start_location" name="start_location" value="{{ old('start_location') }}" >
                    </div>


                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="destinations">Destinations <span class="required">*</span></label>
                            <input type="text" id="destinations" name="destinations" value="{{ old('destinations') }}" placeholder="e.g. Kyoto, Nara, Osaka" >
                        </div>
                        
                        <div class="form-group">
                            <label for="languages">Available Languages <span class="required">*</span></label>
                            <input type="text" id="languages" name="languages" value="{{ old('languages') }}" placeholder="e.g. English, Japanese" >
                        </div>
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="min_participants">Min. Participants <span class="required">*</span></label>
                            <input type="number" id="min_participants" name="min_participants" value="{{ old('min_participants') }}" min="1" >
                        </div>
                        
                        <div class="form-group">
                            <label for="max_participants">Max. Group Size <span class="required">*</span></label>
                            <input type="number" id="max_participants" name="max_participants" value="{{ old('max_participants') }}" min="1" >
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
                            <input type="hidden" name="available_dates" id="available_dates_input">
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
                                    <option value="¥">¥ (JPY)</option>
                                    <option value="$">$ (USD)</option>
                                    <option value="€">€ (EUR)</option>
                                </select>
                                <input type="number" id="price" name="price" value="{{ old('price') }}" min="0" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="discount_percentage">Discount Percentage (optional)</label>
                            <div class="input-with-icon">
                                <input type="number" id="discount_percentage" name="discount_percentage" value="{{ old('discount_percentage', 0) }}" min="0" max="100">
                                <span class="input-icon">%</span>
                            </div>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="limited_spots">Limited Availability Message (optional)</label>
                        <input type="text" id="limited_spots" name="limited_spots" value="{{ old('limited_spots') }}" placeholder="e.g. Only 5 spots left for May dates!">
                    </div>
                </div>

                <!-- Description Section -->
                <div class="form-section">
                    <h2 class="section-title">Tour Description</h2>
                    
                    <div class="form-group">
                        <label for="overview">Tour Overview <span class="required">*</span></label>
                        <textarea id="overview" name="overview" rows="5" >{{ old('overview') }}</textarea>
                        <p class="field-help">Provide a compelling overview of the tour experience. This will appear in the Tour Overview section.</p>
                    </div>

                    <div class="form-group">
                        <label>Tour Highlights <span class="required">*</span></label>
                        <div id="highlights-container">
                            @if(old('highlights'))
                                @foreach(old('highlights') as $index => $highlight)
                                    <div class="highlight-item">
                                        <input type="text" name="highlights[]" value="{{ $highlight }}" >
                                        <button type="button" class="remove-highlight btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                @endforeach
                            @else
                                <div class="highlight-item">
                                    <input type="text" name="highlights[]" >
                                    <button type="button" class="remove-highlight btn-icon"><i class="fas fa-times"></i></button>
                                </div>
                            @endif
                        </div>
                        <button type="button" id="add-highlight" class="btn-secondary"><i class="fas fa-plus"></i> Add Highlight</button>
                    </div>
                </div>

                <!-- Itinerary Section -->
                <div class="form-section">
                    <h2 class="section-title">Itinerary Details</h2>
                    
                    <div id="itinerary-days-container">
                        <!-- Day template will be added here dynamically -->
                        @if(old('itinerary'))
                            @foreach(old('itinerary') as $dayIndex => $day)
                                <div class="itinerary-day-item">
                                    <div class="day-header">
                                        <h3>Day {{ $dayIndex + 1 }}</h3>
                                        <button type="button" class="remove-day btn-icon" data-day="{{ $dayIndex + 1 }}"><i class="fas fa-times"></i></button>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="itinerary[{{ $dayIndex }}][title]">Day Title <span class="required">*</span></label>
                                        <input type="text" id="itinerary[{{ $dayIndex }}][title]" name="itinerary[{{ $dayIndex }}][title]" value="{{ $day['title'] }}" >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="itinerary[{{ $dayIndex }}][description]">Day Description <span class="required">*</span></label>
                                        <textarea id="itinerary[{{ $dayIndex }}][description]" name="itinerary[{{ $dayIndex }}][description]" rows="3" >{{ $day['description'] }}</textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Schedule <span class="required">*</span></label>
                                        <div class="schedule-items-container" data-day="{{ $dayIndex }}">
                                            @foreach($day['schedule'] as $scheduleIndex => $scheduleItem)
                                                <div class="schedule-item">
                                                    <div class="schedule-time">
                                                        <input type="text" name="itinerary[{{ $dayIndex }}][schedule][{{ $scheduleIndex }}][time]" placeholder="e.g. 9:00 AM" value="{{ $scheduleItem['time'] }}" >
                                                    </div>
                                                    <div class="schedule-description">
                                                        <input type="text" name="itinerary[{{ $dayIndex }}][schedule][{{ $scheduleIndex }}][description]" placeholder="Activity description" value="{{ $scheduleItem['description'] }}" >
                                                    </div>
                                                    <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="add-schedule btn-secondary" data-day="{{ $dayIndex }}"><i class="fas fa-plus"></i> Add Schedule Item</button>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <!-- Default first day if no old input -->
                            <div class="itinerary-day-item">
                                <div class="day-header">
                                    <h3>Day 1</h3>
                                    <button type="button" class="remove-day btn-icon" data-day="1"><i class="fas fa-times"></i></button>
                                </div>
                                
                                <div class="form-group">
                                    <label for="itinerary[0][title]">Day Title <span class="required">*</span></label>
                                    <input type="text" id="itinerary[0][title]" name="itinerary[0][title]" >
                                </div>
                                
                                <div class="form-group">
                                    <label for="itinerary[0][description]">Day Description <span class="required">*</span></label>
                                    <textarea id="itinerary[0][description]" name="itinerary[0][description]" rows="3" ></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label>Schedule <span class="required">*</span></label>
                                    <div class="schedule-items-container" data-day="0">
                                        <div class="schedule-item">
                                            <div class="schedule-time">
                                                <input type="text" name="itinerary[0][schedule][0][time]" placeholder="e.g. 9:00 AM" >
                                            </div>
                                            <div class="schedule-description">
                                                <input type="text" name="itinerary[0][schedule][0][description]" placeholder="Activity description" >
                                            </div>
                                            <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <button type="button" class="add-schedule btn-secondary" data-day="0"><i class="fas fa-plus"></i> Add Schedule Item</button>
                                </div>
                            </div>
                        @endif
                    </div>
                    
                    <button type="button" id="add-day" class="btn-secondary"><i class="fas fa-plus"></i> Add Day</button>
                </div>

                <!-- Inclusions & Exclusions -->
                <div class="form-section">
                    <h2 class="section-title">What's Included / Not Included</h2>
                    
                    <div class="form-group">
                        <label>Inclusions <span class="required">*</span></label>
                        <div id="inclusions-container">
                            @if(old('inclusions'))
                                @foreach(old('inclusions') as $index => $inclusion)
                                    <div class="inclusion-item">
                                        <input type="text" name="inclusions[]" value="{{ $inclusion }}" >
                                        <button type="button" class="remove-inclusion btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                @endforeach
                            @else
                                <div class="inclusion-item">
                                    <input type="text" name="inclusions[]" >
                                    <button type="button" class="remove-inclusion btn-icon"><i class="fas fa-times"></i></button>
                                </div>
                            @endif
                        </div>
                        <button type="button" id="add-inclusion" class="btn-secondary"><i class="fas fa-plus"></i> Add Inclusion</button>
                    </div>
                    
                    <div class="form-group">
                        <label>Exclusions <span class="required">*</span></label>
                        <div id="exclusions-container">
                            @if(old('exclusions'))
                                @foreach(old('exclusions') as $index => $exclusion)
                                    <div class="exclusion-item">
                                        <input type="text" name="exclusions[]" value="{{ $exclusion }}" >
                                        <button type="button" class="remove-exclusion btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                @endforeach
                            @else
                                <div class="exclusion-item">
                                    <input type="text" name="exclusions[]" >
                                    <button type="button" class="remove-exclusion btn-icon"><i class="fas fa-times"></i></button>
                                </div>
                            @endif
                        </div>
                        <button type="button" id="add-exclusion" class="btn-secondary"><i class="fas fa-plus"></i> Add Exclusion</button>
                    </div>
                </div>

                <!-- Tour Images -->
                <div class="form-section">
                    <h2 class="section-title">Tour Images</h2>
                    
                    <div class="form-group">
                        <label for="hero_image">Hero Image <span class="required">*</span></label>
                        <div class="image-upload-container">
                            <input type="file" id="hero_image" name="hero_image" accept="image/*" class="image-upload-input" >
                            <label for="hero_image" class="image-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span style="color: #fff;">Choose a file...</span>
                            </label>
                            <div class="selected-file"></div>
                        </div>
                        <p class="field-help">This image will appear at the top of the tour page. Recommended size: 1600x800px.</p>
                        <div class="preview-container">
                            <img id="previewImage" class="preview-image" src="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="gallery_images">Gallery Images <span class="required">*</span></label>
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
                        <p class="field-help">Upload at least 3 images for the tour gallery. Recommended size: 1200x800px.</p>
                        <div class="preview-container" id="gallery_image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="button" class="btn-outline" onclick="history.back()">Cancel</button>
                <button type="submit" class="btn-primary create-tour-btn">Create Tour</button>
            </div>
        </form>
    </div>

    <!-- Itinerary Day Template (Hidden) -->
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
                const objectURL = URL.createObjectURL(e.target.files[0]);
                document.getElementById("previewImage").src = objectURL
            });

        });
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        const multiDatePicker = flatpickr("#date_range_start", {
            dateFormat: "Y-m-d",
            minDate: "today",
            mode: "multiple",
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
    <script src="{{mix("js/tour_create.js")}}"></script>
    
@endsection