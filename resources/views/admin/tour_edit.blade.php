@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/admin/admin-tours.css') }}">
@endsection

@section('title', 'Edit Tour')

@section('main')
    @include('components.header')

    <div class="container">
        <div class="admin-header">
            <div class="admin-header-title">
                <h1>Edit Tour</h1>
                <p>Update details for "Kyoto, Nara & Osaka"</p>
            </div>
            <div class="admin-header-actions">
                <a href="" class="btn-outline">
                    <i class="fas fa-arrow-left"></i> Back to Tours
                </a>
                <a href="#" class="btn-secondary">
                    <i class="fas fa-eye"></i> View Tour
                </a>
            </div>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data" class="tour-form">
            @csrf
            @method('PUT')

            <div class="form-sections">
                <!-- Basic Info Section -->
                <div class="form-section">
                    <h2 class="section-title">Basic Information</h2>
                    
                    <div class="form-group">
                        <label for="title">Tour Title <span class="required">*</span></label>
                        <input type="text" id="title" name="title" value="Kyoto, Nara & Osaka" required>
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="subtitle">Subtitle <span class="required">*</span></label>
                            <input type="text" id="subtitle" name="subtitle" value="3-Day Historical Journey Through Japan's Ancient Capitals" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="badge">Badge Text (optional)</label>
                            <input type="text" id="badge" name="badge" value="Best Seller" placeholder="e.g. Best Seller, New Tour">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hours">Hours <span class="required">*</span></label>
                        <input type="number" id="hours" name="hours" value="3" min="1" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="start_location">Start Location <span class="required">*</span></label>
                        <input type="text" id="start_location" name="start_location" value="Kyoto" required>
                    </div>
                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="destinations">Destinations <span class="required">*</span></label>
                            <input type="text" id="destinations" name="destinations" value="Kyoto, Nara, Osaka" placeholder="e.g. Kyoto, Nara, Osaka" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="languages">Available Languages <span class="required">*</span></label>
                            <input type="text" id="languages" name="languages" value="English, Japanese" placeholder="e.g. English, Japanese" required>
                        </div>
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="min_participants">Min. Participants <span class="required">*</span></label>
                            <input type="number" id="min_participants" name="min_participants" value="4" min="1" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="max_participants">Max. Group Size <span class="required">*</span></label>
                            <input type="number" id="max_participants" name="max_participants" value="12" min="1" required>
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
                                    <option value="¥" selected>¥ (JPY)</option>
                                    <option value="$">$ (USD)</option>
                                    <option value="€">€ (EUR)</option>
                                </select>
                                <input type="number" id="price" name="price" value="80000" min="0" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="discount_percentage">Discount Percentage (optional)</label>
                            <div class="input-with-icon">
                                <input type="number" id="discount_percentage" name="discount_percentage" value="15" min="0" max="100">
                                <span class="input-icon">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="limited_spots">Limited Availability Message (optional)</label>
                        <input type="text" id="limited_spots" name="limited_spots" value="Only 5 spots left for May dates!" placeholder="e.g. Only 5 spots left for May dates!">
                    </div>
                </div>

                <!-- Description Section -->
                <div class="form-section">
                    <h2 class="section-title">Tour Description</h2>
                    
                    <div class="form-group">
                        <label for="overview">Tour Overview <span class="required">*</span></label>
                        <textarea id="overview" name="overview" rows="5" required>Experience the best of Japan's cultural heritage in this 3-day journey through the historic cities of Kyoto, Nara, and Osaka. From ancient temples and shrines to modern culinary experiences, this tour offers a perfect blend of Japan's traditional past and vibrant present.

Beginning in Kyoto, Japan's cultural capital for over 1,000 years, you'll visit UNESCO World Heritage sites before traveling to Nara, home to friendly deer and impressive Buddhist monuments. The journey concludes in Osaka, where you'll experience contemporary Japan through its castle, lively districts, and renowned food culture.</textarea>
                        <p class="field-help">Provide a compelling overview of the tour experience. This will appear in the Tour Overview section.</p>
                    </div>

                    <div class="form-group">
                        <label>Tour Highlights <span class="required">*</span></label>
                        <div id="highlights-container">
                            <div class="highlight-item">
                                <input type="text" name="highlights[]" value="Visit Kyoto's UNESCO World Heritage Sites" required>
                                <button type="button" class="remove-highlight btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="highlight-item">
                                <input type="text" name="highlights[]" value="Interact with sacred deer at Nara Park" required>
                                <button type="button" class="remove-highlight btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="highlight-item">
                                <input type="text" name="highlights[]" value="Explore the iconic Fushimi Inari Shrine" required>
                                <button type="button" class="remove-highlight btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="highlight-item">
                                <input type="text" name="highlights[]" value="Tour Osaka Castle and its surroundings" required>
                                <button type="button" class="remove-highlight btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="highlight-item">
                                <input type="text" name="highlights[]" value="Experience authentic Japanese cuisine" required>
                                <button type="button" class="remove-highlight btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="highlight-item">
                                <input type="text" name="highlights[]" value="Optional traditional tea ceremony" required>
                                <button type="button" class="remove-highlight btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <button type="button" id="add-highlight" class="btn-secondary"><i class="fas fa-plus"></i> Add Highlight</button>
                    </div>
                </div>

                <!-- Itinerary Section -->
                <div class="form-section">
                    <h2 class="section-title">Itinerary Details</h2>
                    
                    <div id="itinerary-days-container">
                        <!-- Day 1 -->
                        <div class="itinerary-day-item">
                            <div class="day-header">
                                <h3>Day 1</h3>
                                <button type="button" class="remove-day btn-icon" data-day="1"><i class="fas fa-times"></i></button>
                            </div>
                            
                            <div class="form-group">
                                <label for="itinerary[0][title]">Day Title <span class="required">*</span></label>
                                <input type="text" id="itinerary[0][title]" name="itinerary[0][title]" value="Kyoto Exploration" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="itinerary[0][description]">Day Description <span class="required">*</span></label>
                                <textarea id="itinerary[0][description]" name="itinerary[0][description]" rows="3" required>After meeting at Kyoto Station, we'll visit the iconic Golden Pavilion (Kinkaku-ji) and Kiyomizu Temple. In the afternoon, we'll explore the famous torii gates of Fushimi Inari Shrine, followed by a traditional Kyoto kaiseki dinner.</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Schedule <span class="required">*</span></label>
                                <div class="schedule-items-container" data-day="0">
                                    <div class="schedule-item">
                                        <div class="schedule-time">
                                            <input type="text" name="itinerary[0][schedule][0][time]" value="9:00 AM" placeholder="e.g. 9:00 AM" required>
                                        </div>
                                        <div class="schedule-description">
                                            <input type="text" name="itinerary[0][schedule][0][description]" value="Meet at Kyoto Station, tour orientation" placeholder="Activity description" required>
                                        </div>
                                        <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="schedule-item">
                                        <div class="schedule-time">
                                            <input type="text" name="itinerary[0][schedule][1][time]" value="10:00 AM" placeholder="e.g. 9:00 AM" required>
                                        </div>
                                        <div class="schedule-description">
                                            <input type="text" name="itinerary[0][schedule][1][description]" value="Visit Kinkaku-ji (Golden Pavilion)" placeholder="Activity description" required>
                                        </div>
                                        <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="schedule-item">
                                        <div class="schedule-time">
                                            <input type="text" name="itinerary[0][schedule][2][time]" value="12:00 PM" placeholder="e.g. 9:00 AM" required>
                                        </div>
                                        <div class="schedule-description">
                                            <input type="text" name="itinerary[0][schedule][2][description]" value="Lunch featuring Kyoto's famous tofu cuisine" placeholder="Activity description" required>
                                        </div>
                                        <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="add-schedule btn-secondary" data-day="0"><i class="fas fa-plus"></i> Add Schedule Item</button>
                            </div>
                        </div>

                        <!-- Day 2 -->
                        <div class="itinerary-day-item">
                            <div class="day-header">
                                <h3>Day 2</h3>
                                <button type="button" class="remove-day btn-icon" data-day="2"><i class="fas fa-times"></i></button>
                            </div>
                            
                            <div class="form-group">
                                <label for="itinerary[1][title]">Day Title <span class="required">*</span></label>
                                <input type="text" id="itinerary[1][title]" name="itinerary[1][title]" value="Nara Day Trip" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="itinerary[1][description]">Day Description <span class="required">*</span></label>
                                <textarea id="itinerary[1][description]" name="itinerary[1][description]" rows="3" required>Travel by train to Nara, Japan's first permanent capital. Visit Todai-ji Temple with its Great Buddha statue and explore Nara Park with its friendly deer. After visiting Kasuga Taisha Shrine, return to Kyoto for an evening at leisure.</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Schedule <span class="required">*</span></label>
                                <div class="schedule-items-container" data-day="1">
                                    <div class="schedule-item">
                                        <div class="schedule-time">
                                            <input type="text" name="itinerary[1][schedule][0][time]" value="8:30 AM" placeholder="e.g. 9:00 AM" required>
                                        </div>
                                        <div class="schedule-description">
                                            <input type="text" name="itinerary[1][schedule][0][description]" value="Depart hotel for Nara" placeholder="Activity description" required>
                                        </div>
                                        <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="schedule-item">
                                        <div class="schedule-time">
                                            <input type="text" name="itinerary[1][schedule][1][time]" value="9:30 AM" placeholder="e.g. 9:00 AM" required>
                                        </div>
                                        <div class="schedule-description">
                                            <input type="text" name="itinerary[1][schedule][1][description]" value="Arrive in Nara, visit Todai-ji Temple" placeholder="Activity description" required>
                                        </div>
                                        <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="schedule-item">
                                        <div class="schedule-time">
                                            <input type="text" name="itinerary[1][schedule][2][time]" value="11:00 AM" placeholder="e.g. 9:00 AM" required>
                                        </div>
                                        <div class="schedule-description">
                                            <input type="text" name="itinerary[1][schedule][2][description]" value="Explore Nara Park (interact with friendly deer)" placeholder="Activity description" required>
                                        </div>
                                        <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="add-schedule btn-secondary" data-day="1"><i class="fas fa-plus"></i> Add Schedule Item</button>
                            </div>
                        </div>

                        <!-- Day 3 -->
                        <div class="itinerary-day-item">
                            <div class="day-header">
                                <h3>Day 3</h3>
                                <button type="button" class="remove-day btn-icon" data-day="3"><i class="fas fa-times"></i></button>
                            </div>
                            
                            <div class="form-group">
                                <label for="itinerary[2][title]">Day Title <span class="required">*</span></label>
                                <input type="text" id="itinerary[2][title]" name="itinerary[2][title]" value="Osaka Adventure" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="itinerary[2][description]">Day Description <span class="required">*</span></label>
                                <textarea id="itinerary[2][description]" name="itinerary[2][description]" rows="3" required>Travel to vibrant Osaka and visit Osaka Castle and its surrounding park. Experience local Osaka cuisine with a street food lunch, then explore Tennoji district before finishing at the lively Dotonbori and Shinsaibashi areas.</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Schedule <span class="required">*</span></label>
                                <div class="schedule-items-container" data-day="2">
                                    <div class="schedule-item">
                                        <div class="schedule-time">
                                            <input type="text" name="itinerary[2][schedule][0][time]" value="9:00 AM" placeholder="e.g. 9:00 AM" required>
                                        </div>
                                        <div class="schedule-description">
                                            <input type="text" name="itinerary[2][schedule][0][description]" value="Hotel checkout, travel to Osaka" placeholder="Activity description" required>
                                        </div>
                                        <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="schedule-item">
                                        <div class="schedule-time">
                                            <input type="text" name="itinerary[2][schedule][1][time]" value="10:30 AM" placeholder="e.g. 9:00 AM" required>
                                        </div>
                                        <div class="schedule-description">
                                            <input type="text" name="itinerary[2][schedule][1][description]" value="Osaka Castle and park exploration" placeholder="Activity description" required>
                                        </div>
                                        <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="schedule-item">
                                        <div class="schedule-time">
                                            <input type="text" name="itinerary[2][schedule][2][time]" value="12:30 PM" placeholder="e.g. 9:00 AM" required>
                                        </div>
                                        <div class="schedule-description">
                                            <input type="text" name="itinerary[2][schedule][2][description]" value="Osaka street food experience (takoyaki & okonomiyaki)" placeholder="Activity description" required>
                                        </div>
                                        <button type="button" class="remove-schedule btn-icon"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="add-schedule btn-secondary" data-day="2"><i class="fas fa-plus"></i> Add Schedule Item</button>
                            </div>
                        </div>
                    </div>
                    
                    <button type="button" id="add-day" class="btn-secondary"><i class="fas fa-plus"></i> Add Day</button>
                </div>

                <!-- Inclusions & Exclusions -->
                <div class="form-section">
                    <h2 class="section-title">What's Included / Not Included</h2>
                    
                    <div class="form-group">
                        <label>Inclusions <span class="required">*</span></label>
                        <div id="inclusions-container">
                            <div class="inclusion-item">
                                <input type="text" name="inclusions[]" value="Accommodation (2 nights with breakfast)" required>
                                <button type="button" class="remove-inclusion btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="inclusion-item">
                                <input type="text" name="inclusions[]" value="Lunch (all 3 days)" required>
                                <button type="button" class="remove-inclusion btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="inclusion-item">
                                <input type="text" name="inclusions[]" value="Welcome dinner (Day 1)" required>
                                <button type="button" class="remove-inclusion btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="inclusion-item">
                                <input type="text" name="inclusions[]" value="Professional English-speaking guide" required>
                                <button type="button" class="remove-inclusion btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="inclusion-item">
                                <input type="text" name="inclusions[]" value="All entrance fees to attractions" required>
                                <button type="button" class="remove-inclusion btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="inclusion-item">
                                <input type="text" name="inclusions[]" value="Transportation between Kyoto, Nara and Osaka" required>
                                <button type="button" class="remove-inclusion btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <button type="button" id="add-inclusion" class="btn-secondary"><i class="fas fa-plus"></i> Add Inclusion</button>
                    </div>
                    
                    <div class="form-group">
                        <label>Exclusions <span class="required">*</span></label>
                        <div id="exclusions-container">
                            <div class="exclusion-item">
                                <input type="text" name="exclusions[]" value="Transportation to Kyoto/from Osaka" required>
                                <button type="button" class="remove-exclusion btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="exclusion-item">
                                <input type="text" name="exclusions[]" value="Dinner on Day 2" required>
                                <button type="button" class="remove-exclusion btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="exclusion-item">
                                <input type="text" name="exclusions[]" value="Optional activities and tours" required>
                                <button type="button" class="remove-exclusion btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="exclusion-item">
                                <input type="text" name="exclusions[]" value="Personal expenses" required>
                                <button type="button" class="remove-exclusion btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="exclusion-item">
                                <input type="text" name="exclusions[]" value="Travel insurance" required>
                                <button type="button" class="remove-exclusion btn-icon"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <button type="button" id="add-exclusion" class="btn-secondary"><i class="fas fa-plus"></i> Add Exclusion</button>
                    </div>
                </div>

                <!-- Tour Images -->
                <div class="form-section">
                    <h2 class="section-title">Tour Images</h2>
                    
                    <div class="form-group">
                        <label for="hero_image">Hero Image</label>
                        <div class="current-image">
                            <img src="https://via.placeholder.com/100x70?text=Hero+Image" alt="Hero Image" class="thumbnail">
                            <p class="current-image-name">Current: kyoto_nara_osaka_hero.jpg</p>
                        </div>
                        <div class="image-upload-container">
                            <input type="file" id="hero_image" name="hero_image" accept="image/*" class="image-upload-input">
                            <label for="hero_image" class="image-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Change image...</span>
                            </label>
                            <div class="selected-file"></div>
                        </div>
                        <p class="field-help">Leave empty to keep the current image.</p>
                    </div>
                    
                    <div class="form-group">
                        <label for="gallery_images">Gallery Images</label>
                        <div class="current-gallery">
                            <div class="gallery-image-item">
                                <img src="https://via.placeholder.com/100x70?text=Image+1" alt="Gallery image 1" class="thumbnail">
                                <div class="gallery-image-actions">
                                    <input type="checkbox" id="remove_gallery_0" name="remove_gallery[]" value="tours/kyoto_nara_osaka_1.jpg">
                                    <label for="remove_gallery_0" class="remove-checkbox-label">Remove</label>
                                </div>
                            </div>
                            <div class="gallery-image-item">
                                <img src="https://via.placeholder.com/100x70?text=Image+2" alt="Gallery image 2" class="thumbnail">
                                <div class="gallery-image-actions">
                                    <input type="checkbox" id="remove_gallery_1" name="remove_gallery[]" value="tours/kyoto_nara_osaka_2.jpg">
                                    <label for="remove_gallery_1" class="remove-checkbox-label">Remove</label>
                                </div>
                            </div>
                            <div class="gallery-image-item">
                                <img src="https://via.placeholder.com/100x70?text=Image+3" alt="Gallery image 3" class="thumbnail">
                                <div class="gallery-image-actions">
                                    <input type="checkbox" id="remove_gallery_2" name="remove_gallery[]" value="tours/kyoto_nara_osaka_3.jpg">
                                    <label for="remove_gallery_2" class="remove-checkbox-label">Remove</label>
                                </div>
                            </div>
                        </div>
                        <div class="image-upload-container">
                            <input type="file" id="gallery_images" name="new_gallery_images[]" accept="image/*" class="image-upload-input" multiple>
                            <label for="gallery_images" class="image-upload-label">
                                <i class="fas fa-images"></i>
                                <span>Add more images...</span>
                            </label>
                            <div class="selected-files"></div>
                        </div>
                        <p class="field-help">Check the "Remove" box to delete existing images. Upload new images to add to the gallery.</p>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="button" class="btn-outline" onclick="window.location.href=''">Cancel</button>
                <button type="submit" class="btn-primary">Update Tour</button>
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
                <input type="text" id="itinerary[{day_index}][title]" name="itinerary[{day_index}][title]" required>
            </div>
            
            <div class="form-group">
                <label for="itinerary[{day_index}][description]">Day Description <span class="required">*</span></label>
                <textarea id="itinerary[{day_index}][description]" name="itinerary[{day_index}][description]" rows="3" required></textarea>
            </div>
            
            <div class="form-group">
                <label>Schedule <span class="required">*</span></label>
                <div class="schedule-items-container" data-day="{day_index}">
                    <div class="schedule-item">
                        <div class="schedule-time">
                            <input type="text" name="itinerary[{day_index}][schedule][0][time]" placeholder="e.g. 9:00 AM" required>
                        </div>
                        <div class="schedule-description">
                            <input type="text" name="itinerary[{day_index}][schedule][0][description]" placeholder="Activity description" required>
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
                <input type="text" name="itinerary[{day_index}][schedule][{schedule_index}][time]" placeholder="e.g. 9:00 AM" required>
            </div>
            <div class="schedule-description">
                <input type="text" name="itinerary[{day_index}][schedule][{schedule_index}][description]" placeholder="Activity description" required>
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
                    <input type="text" name="highlights[]" required>
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
                    <input type="text" name="inclusions[]" required>
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
                    <input type="text" name="exclusions[]" required>
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

            document.getElementById('gallery_images').addEventListener('change', function(e) {
                const fileCount = e.target.files.length;
                const fileDisplay = e.target.parentElement.querySelector('.selected-files');
                fileDisplay.innerHTML = '';
                
                if (fileCount > 0) {
                    const fileList = document.createElement('ul');
                    for (let i = 0; i < fileCount; i++) {
                        const listItem = document.createElement('li');
                        listItem.textContent = e.target.files[i].name;
                        fileList.appendChild(listItem);
                    }
                    fileDisplay.appendChild(fileList);
                } else {
                    fileDisplay.textContent = 'No files chosen';
                }
            });
        });
    </script>
@endsection