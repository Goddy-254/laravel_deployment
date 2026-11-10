@extends('layout.dashboard')

@section('title', isset($student) ? 'Edit Student - School Portal' : 'Add Student - School Portal')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>{{ isset($student) ? 'Edit Student' : 'Add New Student' }}</h1>
       {{-- <a href="{{ route('students.hello') }}" class="btn btn-secondary"> --}}
            <i class="bi bi-arrow-left"></i> Back to Students
        </a>
    </div>

    {{-- Form action dynamically switches depending on whether $student exists --}}
    <form action="{{ isset($student) ? route('students.update', $student->id) : route('students.store') }}" method="PATCH">
        @csrf
        @if(isset($student))
            @method('PATCH')
        @endif

        <div class="row">
            <!-- Student Number -->
            <div class="col-md-6 mb-3">
                <label for="student_number" class="form-label">Student Number</label>
                <input type="text" class="form-control @error('student_number') is-invalid @enderror" 
                    id="student_number" name="student_number" 
                    value="{{ old('student_number', $student->student_number ?? '') }}">
                @error('student_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                    id="email" name="email" 
                    value="{{ old('email', $student->email ?? '') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <!-- First Name -->
            <div class="col-md-6 mb-3">
                <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                    id="first_name" name="first_name" 
                    value="{{ old('first_name', $student->first_name ?? '') }}" required>
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="col-md-6 mb-3">
                <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
                    id="last_name" name="last_name" 
                    value="{{ old('last_name', $student->last_name ?? '') }}" required>
                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <!-- Gender -->
            <div class="col-md-6 mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender">
                    <option value="">Select Gender</option>
                    <option value="Male" {{ old('gender', $student->gender ?? '') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender', $student->gender ?? '') == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Other" {{ old('gender', $student->gender ?? '') == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Date of Birth -->
            <div class="col-md-6 mb-3">
                <label for="date_of_birth" class="form-label">Date of Birth</label>
                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" 
                    id="date_of_birth" name="date_of_birth" 
                    value="{{ old('date_of_birth', $student->date_of_birth ?? '') }}">
                @error('date_of_birth')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <!-- Phone -->
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                    id="phone" name="phone" 
                    value="{{ old('phone', $student->phone ?? '') }}">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Status -->
            <div class="col-md-6 mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                    <option value="Active" {{ old('status', $student->status ?? 'Active') == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ old('status', $student->status ?? '') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                    <option value="Graduated" {{ old('status', $student->status ?? '') == 'Graduated' ? 'selected' : '' }}>Graduated</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Address -->
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control @error('address') is-invalid @enderror" 
                id="address" name="address" rows="3">{{ old('address', $student->address ?? '') }}</textarea>
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit & Cancel Buttons -->
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">
                {{ isset($student) ? 'Update Student' : 'Save Student' }}
            </button>
            <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>

@endsection