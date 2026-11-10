@extends('layout.dashboard')
    
@section('content')

<div class="container-fluid py-2">
    
    <!-- Page Header -->
    <div class="row g-3 align-items-center mb-4">
        <div class="col">
            <h1 class="h3 fw-bold text-dark">Dashboard Overview</h1>
            <p class="text-muted mb-0">Welcome back! Here is a summary of the school portal statistics.</p>
        </div>
        <div class="col-auto">
            <button class="btn btn-primary btn-sm shadow-sm">
                <i class="bi bi-download me-1"></i> Generate Report
            </button>
        </div>
    </div>

    <!-- Quick Statistics Cards Row -->
    <div class="row g-3 mb-4">
        <!-- Total Students -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100 border-start border-primary border-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="text-uppercase text-muted fw-semibold small">Total Students</span>
                            <h2 class="fw-bold text-dark mb-0 mt-1">1,425</h2>
                            <span class="text-success small fw-bold"><i class="bi bi-arrow-up-short"></i> +12%</span> <span class="text-muted small">since last month</span>
                        </div>
                        <div class="col-auto">
                            <div class="bg-primary bg-opacity-15 p-3 rounded-circle text-primary">
                                <i class="bi bi-people fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Courses -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100 border-start border-success border-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="text-uppercase text-muted fw-semibold small">Active Courses</span>
                            <h2 class="fw-bold text-dark mb-0 mt-1">48</h2>
                            <span class="text-success small fw-bold"><i class="bi bi-check-circle me-1"></i>44 On Schedule</span>
                        </div>
                        <div class="col-auto">
                            <div class="bg-success bg-opacity-15 p-3 rounded-circle text-success">
                                <i class="bi bi-book fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fee Collections -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100 border-start border-warning border-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="text-uppercase text-muted fw-semibold small">Fee Collected</span>
                            <h2 class="fw-bold text-dark mb-0 mt-1">$84,200</h2>
                            <span class="text-muted small">Target: $100,000</span>
                        </div>
                        <div class="col-auto">
                            <div class="bg-warning bg-opacity-15 p-3 rounded-circle text-warning">
                                <i class="bi bi-cash-stack fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Enrollments -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100 border-start border-info border-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="text-uppercase text-muted fw-semibold small">Pending Enrollments</span>
                            <h2 class="fw-bold text-dark mb-0 mt-1">32</h2>
                            <span class="text-primary small fw-bold">Requires Review</span>
                        </div>
                        <div class="col-auto">
                            <div class="bg-info bg-opacity-15 p-3 rounded-circle text-info">
                                <i class="bi bi-journal-check fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Tables / Recent Activity Row -->
    <div class="row g-3">
        <!-- Recent Student Registrations -->
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold text-dark">Recent Student Registrations</h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-3">Student Name</th>
                                    <th>Course</th>
                                    <th>Enrollment Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px; font-size: 14px;">JD</div>
                                            <div>
                                                <span class="fw-bold d-block">Jane Doe</span>
                                                <small class="text-muted">jane.doe@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Computer Science 101</td>
                                    <td>Oct 14, 2026</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px; font-size: 14px;">JS</div>
                                            <div>
                                                <span class="fw-bold d-block">John Smith</span>
                                                <small class="text-muted">john.smith@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Business Administration</td>
                                    <td>Oct 13, 2026</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px; font-size: 14px;">AJ</div>
                                            <div>
                                                <span class="fw-bold d-block">Alice Johnson</span>
                                                <small class="text-muted">alice.j@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Mechanical Engineering</td>
                                    <td>Oct 12, 2026</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px; font-size: 14px;">RB</div>
                                            <div>
                                                <span class="fw-bold d-block">Robert Brown</span>
                                                <small class="text-muted">robert.b@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Graphic Design</td>
                                    <td>Oct 10, 2026</td>
                                    <td><span class="badge bg-danger">Inactive</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Announcements / System Notifications -->
        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold text-dark">System Notices</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3 border-bottom pb-3">
                        <span class="badge bg-primary mb-1">Academic</span>
                        <h6 class="fw-bold mb-1">Mid-term Exams Schedule Released</h6>
                        <p class="text-muted small mb-0">The examination timetable for the Fall semester has been published.</p>
                        <small class="text-muted">2 hours ago</small>
                    </div>
                    <div class="mb-3 border-bottom pb-3">
                        <span class="badge bg-warning text-dark mb-1">Finance</span>
                        <h6 class="fw-bold mb-1">Fee Deadline Approaching</h6>
                        <p class="text-muted small mb-0">All students must clear pending fee balances before the end of the month.</p>
                        <small class="text-muted">Yesterday</small>
                    </div>
                    <div>
                        <span class="badge bg-success mb-1">System</span>
                        <h6 class="fw-bold mb-1">Portal Maintenance Complete</h6>
                        <p class="text-muted small mb-0">Server upgrade successfully finalized with zero downtime.</p>
                        <small class="text-muted">3 days ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection        
