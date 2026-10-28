<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Staffs</h2>
        <p class="text-muted mb-0">Manage and track all your staff members</p>
    </div>
</div>
 
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <!-- Form Header -->
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Staffs Form
                </h5>
                <small class="text-muted">Fill in the details of a staff member</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>
 
        <hr>
 
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="sid" class="form-label">Staff ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="staff_num" id="staff_num" type="text" class="form-control" placeholder="Enter Staff ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="Name" class="form-label">Staff Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="staff_name" id="staff_name" type="text" class="form-control" placeholder="Enter Staff Name" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="Phone Number" class="form-label">Phone Number <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="staff_phone" id="staff_phone" type="text" class="form-control" placeholder="Enter Phone Number" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="Staff Email" class="form-label">Email Address <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="staff_email" id="staff_email" type="email" class="form-control" placeholder="Enter Email Address" value="" required>    
                </div>
        </form>
    </div>
</div>
 
<div class="card shadow-sm">
    <div class="card-body">
  
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Staffs List
                </h5>
                <small class="text-muted">View and manage all staffs</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 items</span>
            </div>
        </div>
 
        <hr>
 
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Staff ID</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                 <tr>
                        <td>S001</td>
                        <td>Jane Smith</td>
                        <td>019-8765432</td>
                        <td>janesmith@example.com</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-center">No staff member found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>