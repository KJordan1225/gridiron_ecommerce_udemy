<div class="col-md-3 flex-shrink-0 p-3">
    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                Dashboard
            </button>
            <div class="collapse" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a href="{{ route('admin.index') }}" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded">
                           <i class="fas fa-dashboard me-1"></i> Overview
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#categories-collapse" aria-expanded="false">
                Categories
            </button>
            <div class="collapse" id="categories-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a href="{{ route('admin.categories.index') }}" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded">
                           <i class="fas fa-list me-1"></i> List Categories
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.create') }}" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded">
                           <i class="fas fa-plus me-1"></i> Add Category
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#subcategories-collapse" aria-expanded="false">
                Subcategories
            </button>
            <div class="collapse" id="subcategories-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a href="{{ route('admin.subcategories.index') }}" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded">
                           <i class="fas fa-list me-1"></i> List Subcategories
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.subcategories.create') }}" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded">
                           <i class="fas fa-plus me-1"></i> Add Subcategory
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                Account
            </button>
            <div class="collapse" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded">
                            <i class="fas fa-user me-1"></i> admin
                        </a>
                    </li>
                    <li>
                        <a 
                            href="#" 
                            class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded">
                            <i class="fas fa-sign-out me-1"></i> Sign out
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>