@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <div class="header-actions">
        <a href="{{ route('admin.finance-ministers.index') }}" class="btn-back">← Back to Finance Ministers</a>
    </div>
    <h1>Edit Finance Minister</h1>
    <p>Update minister information</p>
</div>

<div class="content-body">
    <form method="POST" action="{{ route('admin.finance-ministers.update', $financeMinister) }}" class="minister-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-section">
            <h2>Basic Information</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Name (English) *</label>
                    <input type="text" id="name" name="name" class="form-input @error('name') error @enderror" 
                           value="{{ old('name', $financeMinister->name) }}" required>
                    @error('name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hindi_name">Name (Hindi)</label>
                    <input type="text" id="hindi_name" name="hindi_name" class="form-input @error('hindi_name') error @enderror" 
                           value="{{ old('hindi_name', $financeMinister->hindi_name) }}">
                    @error('hindi_name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="designation">Designation (English) *</label>
                    <select id="designation" name="designation" class="form-select @error('designation') error @enderror" required>
                        <option value="">Select Designation</option>
                        <option value="Finance Minister" {{ old('designation', $financeMinister->designation) == 'Finance Minister' ? 'selected' : '' }}>Finance Minister</option>
                        <option value="Minister of State" {{ old('designation', $financeMinister->designation) == 'Minister of State' ? 'selected' : '' }}>Minister of State</option>
                    </select>
                    @error('designation')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hindi_designation">Designation (Hindi)</label>
                    <input type="text" id="hindi_designation" name="hindi_designation" class="form-input @error('hindi_designation') error @enderror" 
                           value="{{ old('hindi_designation', $financeMinister->hindi_designation) }}">
                    @error('hindi_designation')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-section">
            <h2>Image & Bio</h2>
            @if($financeMinister->image_path)
            <div class="current-image">
                <label>Current Image:</label>
                <img src="{{ $financeMinister->image_url }}" alt="{{ $financeMinister->name }}" class="current-minister-image">
            </div>
            @endif
            
            <div class="form-group">
                <label for="image">Update Minister Photo</label>
                <input type="file" id="image" name="image" class="form-input @error('image') error @enderror" 
                       accept="image/*">
                @error('image')
                    <span class="error-message">{{ $message }}</span>
                @enderror
                <small class="form-help">Upload a new photo to replace the current one (max 2MB, JPG/PNG/GIF)</small>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="bio">Bio (English)</label>
                    <textarea id="bio" name="bio" class="form-textarea @error('bio') error @enderror" 
                              rows="4" placeholder="Brief biography of the minister...">{{ old('bio', $financeMinister->bio) }}</textarea>
                    @error('bio')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hindi_bio">Bio (Hindi)</label>
                    <textarea id="hindi_bio" name="hindi_bio" class="form-textarea @error('hindi_bio') error @enderror" 
                              rows="4" placeholder="मंत्री का संक्षिप्त जीवन परिचय...">{{ old('hindi_bio', $financeMinister->hindi_bio) }}</textarea>
                    @error('hindi_bio')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-section">
            <h2>Settings</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="sort_order">Sort Order</label>
                    <input type="number" id="sort_order" name="sort_order" class="form-input @error('sort_order') error @enderror" 
                           value="{{ old('sort_order', $financeMinister->sort_order) }}" min="0">
                    @error('sort_order')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                    <small class="form-help">Lower numbers appear first</small>
                </div>
                <div class="form-group">
                    <label class="checkbox-label">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $financeMinister->is_active) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        Active Minister
                    </label>
                </div>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">Update Minister</button>
            <a href="{{ route('admin.finance-ministers.index') }}" class="btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<style>
.content-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.header-actions {
    display: flex;
    gap: 10px;
}

.btn-back {
    padding: 8px 16px;
    background: #6c757d;
    color: white;
    text-decoration: none;
    border-radius: 4px;
}

.minister-form {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.form-section {
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e9ecef;
}

.form-section:last-child {
    border-bottom: none;
}

.form-section h2 {
    color: #1a365d;
    margin-bottom: 20px;
    font-size: 18px;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: 600;
    color: #333;
}

.form-input, .form-select, .form-textarea {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

.form-input:focus, .form-select:focus, .form-textarea:focus {
    outline: none;
    border-color: #1a365d;
    box-shadow: 0 0 0 2px rgba(26, 54, 93, 0.1);
}

.form-input.error, .form-select.error, .form-textarea.error {
    border-color: #dc3545;
}

.error-message {
    color: #dc3545;
    font-size: 12px;
    margin-top: 5px;
    display: block;
}

.form-help {
    color: #6c757d;
    font-size: 12px;
    margin-top: 5px;
    display: block;
}

.current-image {
    margin-bottom: 20px;
}

.current-minister-image {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #ddd;
    margin-top: 10px;
}

.checkbox-label {
    display: flex;
    align-items: center;
    cursor: pointer;
    font-weight: normal;
}

.checkbox-label input[type="checkbox"] {
    margin-right: 10px;
}

.form-actions {
    margin-top: 30px;
    display: flex;
    gap: 15px;
}

.btn-primary, .btn-secondary {
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    font-weight: 600;
}

.btn-primary {
    background: #1a365d;
    color: white;
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn-primary:hover {
    background: #2c5282;
}

.btn-secondary:hover {
    background: #5a6268;
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-actions {
        flex-direction: column;
    }
}
</style>
@endsection
