
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
                            <input type="hidden" name="available_dates" id="available_dates_input" value="{{old("available_dates")}}">
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
                                        <label for="itinerary[{{ $dayIndex }}][map]">Map URL</label>
                                        <input type="text" id="itinerary[{{ $dayIndex }}][map]" name="itinerary[{{ $dayIndex }}][map]" >
                                    </div>
                                    <div class="form-group">
                                        <label for="itinerary_image{{$dayIndex}}">Itinerary Image <span class="required">*</span></label>
                                        <div class="image-upload-container">
                                            <input type="file" id="itinerary_image{{$dayIndex}}"  name="itinerary[{{$dayIndex}}][itinerary_image]" accept="image/*" class="image-upload-input">
                                            <label for="itinerary_image{{$dayIndex}}" class="image-upload-label">
                                                <i class="fas fa-cloud-upload-alt"></i>
                                                <span style="color: #fff;">Choose a file...</span>
                                            </label>
                                            <div class="selected-file"></div>
                                        </div>
                                        <p class="field-help">This image will appear at the top of the tour page. Recommended size: 1600x800px.</p>
                                        <div class="preview-container">
                                            <img id="itineraryPreviewImage" class="preview-image" src="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Itineary highlights<span class="required">*</span></label>
                                        <div class="itinerary-highlights-container">
                                            @foreach($day['itinerary_highlight'] as $index => $highlight)
                                                <div class="itineary-highlight-item">
                                                    <input type="text" name="itinerary[{{ $dayIndex }}][itinerary_highlight][{{ $index}}]" value="{{ $highlight }}" >
                                                    <button type="button" class="remove-itinerary_highlight btn-icon"><i class="fas fa-times"></i></button>
                                                </div>
                                            @endforeach

                                        </div>
                                        <button type="button" id="add-highlight" class="btn-secondary"><i class="fas fa-plus"></i> Add Highlight</button>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Schedule <span class="required">*</span></label>
                                        <div class="schedule-items-container" data-day="{{ $dayIndex }}">
                                            @foreach($day['schedule'] as $scheduleIndex => $scheduleItem)
                                                <div class="schedule-item">
                                                    <div class="schedule-time">
                                                        <input type="time" name="itinerary[{{ $dayIndex }}][schedule][{{ $scheduleIndex }}][time]" placeholder="e.g. 9:00 AM" value="{{ $scheduleItem['time'] }}" >
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
                                    <label for="itinerary[0][map]">Map URL</label>
                                    <input type="text" id="itinerary[0][map]" name="itinerary[0][map]" >
                                </div>
                                <div class="form-group">
                                    <label for="itinerary_image0">Itinerary Image <span class="required">*</span></label>
                                    <div class="image-upload-container">
                                        <input type="file" id="itinerary_image0" name="itinerary[0][itinerary_image]" accept="image/*" class="image-upload-input" >
                                        <label for="itinerary_image0" class="image-upload-label">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <span style="color: #fff;">Choose a file...</span>
                                        </label>
                                        <div class="selected-file"></div>
                                    </div>
                                    <p class="field-help">This image will appear at the top of the tour page. Recommended size: 1600x800px.</p>
                                    <div class="preview-container">
                                        <img id="itineraryPreviewImage" class="preview-image" src="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Itineary highlights <span class="required">*</span></label>
                                    <div class="itinerary-highlights-container">
                                        <div class="itineary-highlight-item">
                                            <input type="text" name="itinerary[0][itinerary_highlight][0]" value="" >
                                            <button type="button" class="remove-itinerary_highlight btn-icon"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>                          
                                    <button type="button" class="add-itinerary-highlight btn-secondary"><i class="fas fa-plus"></i> Add Itinerary highlights</button>
                                </div>
                                <div class="form-group">
                                    <label>Schedule <span class="required">*</span></label>
                                    <div class="schedule-items-container" data-day="0">
                                        <div class="schedule-item">
                                            <div class="schedule-time">
                                                <input type="time" name="itinerary[0][schedule][0][time]" placeholder="e.g. 9:00 AM" >
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
                {{-- review form --}}
                <div class="form-section">
                    <h2 class="section-title">Reviews</h2>
                    <div id="review-container">
                        <!-- Day template will be added here dynamically -->
                        @if(old('review'))
                            @foreach(old('review') as $dayIndex => $day)
                                <div class="review-item">
                                    <div class="day-header">
                                        <h3>Review {{$dayIndex + 1}}</h3>
                                        <button type="button" class="remove-review btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="form-group">
                                        <label for="review[{{$dayIndex}}][name]">Customer's name<span class="required">*</span></label>
                                        <input type="text" id="review[{{$dayIndex}}][name]" name="review[{{$dayIndex}}][name]" value="{{ old('review.'.$dayIndex.'.name') }}">
                                    </div>
                                    <div class="form-grid-2">
                                        <div class="form-group">
                                            <label for="review[{{$dayIndex}}][date]">Date<span class="required">*</span></label>
                                            <input type="date" id="review[{{$dayIndex}}][date]" name="review[{{$dayIndex}}][date]" value="{{ old('review.'.$dayIndex.'.date') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="review[{{$dayIndex}}][rate]">Rate<span class="required">*</span></label>
                                            <input type="number" id="review[{{$dayIndex}}][rate]" name="review[{{$dayIndex}}][rate]" max=5 value="{{ old('review.'.$dayIndex.'.rate') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="review[{{$dayIndex}}][review]">Review<span class="required">*</span></label>
                                        <textarea id="review[{{$dayIndex}}][review]" name="review[{{$dayIndex}}][review]" rows="3" >{{ old('review.'.$dayIndex.'.review') }}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <!-- Default first review if no old input -->
                            <div class="review-item">
                                <div class="day-header">
                                    <h3>Review 1</h3>
                                    <button type="button" class="remove-review btn-icon"><i class="fas fa-times"></i></button>
                                </div>
                                <div class="form-group">
                                    <label for="review[0][name]">Customer's name<span class="required">*</span></label>
                                    <input type="text" id="review[0][name]" name="review[0][name]" >
                                </div>
                                <div class="form-grid-2">
                                    <div class="form-group">
                                        <label for="review[0][date]">Date<span class="required">*</span></label>
                                        <input type="date" id="review[0][date]" name="review[0][date]" >
                                    </div>
                                    <div class="form-group">
                                        <label for="review[0][rate]">Rate<span class="required">*</span></label>
                                        <input type="number" id="review[0][rate]" name="review[0][rate]" max=5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="review[0][review]">Review<span class="required">*</span></label>
                                    <textarea id="review[0][review]" name="review[0][review]" rows="3" ></textarea>
                                </div>
                            </div>
                        @endif
                    </div>
                    
                    <button type="button" id="add-review" class="btn-secondary"><i class="fas fa-plus"></i> Add Review</button>
                </div>
                {{-- QA form --}}
                <div class="form-section">
                    <h2 class="section-title">QA</h2>
                    <div id="qa-container">
                        <!-- Day template will be added here dynamically -->
                        @if(old('qa'))
                            @foreach(old('qa') as $dayIndex => $day)
                                <div class="qa-item">
                                    <div class="day-header">
                                        <h3>Question {{$dayIndex + 1}}</h3>
                                        <button type="button" class="remove-qa btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="form-group">
                                        <label for="qa[{{$dayIndex}}][question]">Question<span class="required">*</span></label>
                                        <textarea id="qa[{{$dayIndex}}][question]" name="qa[{{$dayIndex}}][question]" rows="3" >{{ old('qa.'.$dayIndex.'.question') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="qa[{{$dayIndex}}][answer]">Answer<span class="required">*</span></label>
                                        <textarea id="qa[{{$dayIndex}}][answer]" name="qa[{{$dayIndex}}][answer]" rows="3" >{{ old('qa.'.$dayIndex.'.answer') }}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <!-- Default first review if no old input -->
                            <div class="qa-item">
                                <div class="day-header">
                                    <h3>Question 1</h3>
                                    <button type="button" class="remove-qa btn-icon"><i class="fas fa-times"></i></button>
                                </div>
                                <div class="form-group">
                                    <label for="qa[0][question]">Question<span class="required">*</span></label>
                                    <textarea id="qa[0][question]" name="qa[0][question]" rows="3" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="qa[0][answer]">Answer<span class="required">*</span></label>
                                    <textarea id="qa[0][answer]" name="qa[0][answer]" rows="3" ></textarea>
                                </div>
                            </div>
                        @endif
                    </div>
                    
                    <button type="button" id="add-qa" class="btn-secondary"><i class="fas fa-plus"></i> Add QA</button>
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
                <label for="itinerary[{day_index}][map]">Map URL</label>
                <input type="text" id="itinerary[{day_index}][map]" name="itinerary[{day_index}][map]" >
            </div>

            <div class="form-group">
                <label for="itinerary_image{day_index}">Itinerary Image <span class="required">*</span></label>
                <div class="image-upload-container">
                    <input type="file" id="itinerary_image{day_index}" name="itinerary[{day_index}][itinerary_image]" accept="image/*" class="image-upload-input">
                    <label for="itinerary_image{day_index}" class="image-upload-label">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <span style="color: #fff;">Choose a file...</span>
                    </label>
                    <div class="selected-file"></div>
                </div>
                <p class="field-help">This image will appear at the top of the tour page. Recommended size: 1600x800px.</p>
                <div class="preview-container">
                    <img id="itineraryPreviewImage" class="preview-image" src="">
                </div>
            </div>
            
            <div class="form-group">
                <label>Itineary highlights <span class="required">*</span></label>
                <div class="itinerary-highlights-container">
                    <div class="itineary-highlight-item">
                        <input type="text" name="itinerary[{day_index}][itinerary_highlight][0]" value="" >
                        <button type="button" class="remove-itinerary_highlight btn-icon"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <button type="button" class="add-itinerary-highlight btn-secondary"><i class="fas fa-plus"></i> Add Itinerary highlights</button>
            </div>
            
            <div class="form-group">
                <label>Schedule <span class="required">*</span></label>
                <div class="schedule-items-container" data-day="{day_index}">
                    <div class="schedule-item">
                        <div class="schedule-time">
                            <input type="time" name="itinerary[{day_index}][schedule][0][time]" placeholder="e.g. 9:00 AM" >
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
                <input type="time" name="itinerary[{day_index}][schedule][{schedule_index}][time]" placeholder="e.g. 9:00 AM" >
            </div>
            <div class="schedule-description">
                <input type="text" name="itinerary[{day_index}][schedule][{schedule_index}][description]" placeholder="Activity description" >
            </div>
            <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
        </div>
    </template>

    <!-- Review Item Template (Hidden) -->
    <template id="review-template">
        <div class="review-item">
            <div class="day-header">
                <h3>Review {day_index}</h3>
                <button type="button" class="remove-review btn-icon"><i class="fas fa-times"></i></button>
            </div>
            <div class="form-group">
                <label for="review[{day_index}][name]">Customer's name<span class="required">*</span></label>
                <input type="text" id="review[{day_index}][name]" name="review[{day_index}][name]" >
            </div>
            <div class="form-grid-2">
                <div class="form-group">
                    <label for="review[{day_index}][date]">Date<span class="required">*</span></label>
                    <input type="date" id="review[{day_index}][date]" name="review[{day_index}][date]" >
                </div>
                <div class="form-group">
                    <label for="review[{day_index}][rate]">Rate<span class="required">*</span></label>
                    <input type="number" id="review[{day_index}][rate]" name="review[{day_index}][rate]" max=5>
                </div>
            </div>
            <div class="form-group">
                <label for="review[{day_index}][review]">Review<span class="required">*</span></label>
                <textarea id="review[{day_index}][review]" name="review[{day_index}][review]" rows="3" ></textarea>
            </div>
        </div>
    </template>

    <!-- Review QA Template (Hidden) -->
    <template id="qa-template">
        <div class="qa-item">
            <div class="day-header">
                <h3>Question {day_index}</h3>
                <button type="button" class="remove-qa btn-icon"><i class="fas fa-times"></i></button>
            </div>
            <div class="form-group">
                <label for="qa[{day_index}][question]">Question<span class="required">*</span></label>
                <textarea id="qa[{day_index}][question]" name="qa[{day_index}][question]" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <label for="qa[{day_index}][answer]">Answer<span class="required">*</span></label>
                <textarea id="qa[{day_index}][answer]" name="qa[{day_index}][answer]" rows="3" ></textarea>
            </div>
        </div>
    </template>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
        // デバッグ用に変数の生の値を確認
        const rawValue = '<?php echo addslashes(old("available_dates", "[]")); ?>';
        let availableDates
        if(rawValue){
            availableDates = JSON.parse(rawValue);
        }

        console.log(availableDates);
        
        const multiDatePicker = flatpickr("#date_range_start", {
            dateFormat: "Y-m-d",
            minDate: "today",
            mode: "multiple",
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
    <script src="{{mix("js/tour_create.js")}}"></script>
    
@endsection