@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <div class="header-actions">
        <a href="{{ route('admin.agents.index') }}" class="btn-back">← Back to Agents</a>
    </div>
    <h1>Add New Agent</h1>
    <p>Register a new facilitation agent</p>
</div>

<div class="content-body">
    <form method="POST" action="{{ route('admin.agents.store') }}" class="agent-form">
        @csrf
        
        <div class="form-section">
            <h2>Basic Information</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Agent Name *</label>
                    <input type="text" id="name" name="name" class="form-input @error('name') error @enderror" 
                           value="{{ old('name') }}" required>
                    @error('name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="agent_code">Agent Code *</label>
                    <input type="text" id="agent_code" name="agent_code" class="form-input @error('agent_code') error @enderror" 
                           value="{{ old('agent_code') }}" required>
                    @error('agent_code')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="experience_years">Experience (Years) *</label>
                    <input type="number" id="experience_years" name="experience_years" class="form-input @error('experience_years') error @enderror" 
                           value="{{ old('experience_years') }}" min="0" required>
                    @error('experience_years')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category *</label>
                    <select id="category" name="category" class="form-select @error('category') error @enderror" required>
                        <option value="">Select Category</option>
                        <option value="category-a" {{ old('category') == 'category-a' ? 'selected' : '' }}>Category A - Individual & Small Business NOC</option>
                        <option value="category-b" {{ old('category') == 'category-b' ? 'selected' : '' }}>Category B - Corporate & Large Business NOC</option>
                        <option value="category-c" {{ old('category') == 'category-c' ? 'selected' : '' }}>Category C - International Trade NOC</option>
                        <option value="category-d" {{ old('category') == 'category-d' ? 'selected' : '' }}>Category D - Investment & Financial NOC</option>
                        <option value="category-e" {{ old('category') == 'category-e' ? 'selected' : '' }}>Category E - Special Projects NOC</option>
                    </select>
                    @error('category')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-section">
            <h2>Contact Information</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" class="form-input @error('phone') error @enderror" 
                           value="{{ old('phone') }}">
                    @error('phone')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-input @error('email') error @enderror" 
                           value="{{ old('email') }}">
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" class="form-textarea @error('address') error @enderror" rows="3">{{ old('address') }}</textarea>
                @error('address')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-section">
            <h2>Professional Details</h2>
            <div class="form-group">
                <label for="specialization">Specialization</label>
                <textarea id="specialization" name="specialization" class="form-textarea @error('specialization') error @enderror" 
                          rows="3" placeholder="Describe the agent's areas of expertise...">{{ old('specialization') }}</textarea>
                @error('specialization')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="service_fee_percentage">Service Fee Percentage</label>
                    <input type="number" id="service_fee_percentage" name="service_fee_percentage" 
                           class="form-input @error('service_fee_percentage') error @enderror" 
                           value="{{ old('service_fee_percentage', 2.00) }}" step="0.01" min="0" max="100">
                    @error('service_fee_percentage')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sbi_account_number">SBI Account Number</label>
                    <input type="text" id="sbi_account_number" name="sbi_account_number" 
                           class="form-input @error('sbi_account_number') error @enderror" 
                           value="{{ old('sbi_account_number') }}" placeholder="DEA1234567890">
                    @error('sbi_account_number')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="daily_fee_min">Daily Fee Minimum (₹)</label>
                    <input type="number" id="daily_fee_min" name="daily_fee_min" 
                           class="form-input @error('daily_fee_min') error @enderror" 
                           value="{{ old('daily_fee_min', 3500) }}" step="0.01" min="0">
                    @error('daily_fee_min')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="daily_fee_max">Daily Fee Maximum (₹)</label>
                    <input type="number" id="daily_fee_max" name="daily_fee_max" 
                           class="form-input @error('daily_fee_max') error @enderror" 
                           value="{{ old('daily_fee_max', 10000) }}" step="0.01" min="0">
                    @error('daily_fee_max')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-section">
            <h2>Status & Notes</h2>
            <div class="form-group">
                <label class="checkbox-label">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                    <span class="checkmark"></span>
                    Active Agent
                </label>
            </div>
            
            <div class="form-group">
                <label for="notes">Admin Notes</label>
                <textarea id="notes" name="notes" class="form-textarea @error('notes') error @enderror" 
                          rows="3" placeholder="Internal notes about this agent...">{{ old('notes') }}</textarea>
                @error('notes')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">Create Agent</button>
            <a href="{{ route('admin.agents.index') }}" class="btn-secondary">Cancel</a>
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

.agent-form {
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
