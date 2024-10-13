<!-- Left Sidebar Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light flex-column">
    <div class="container">
        <!-- General Tabs -->
        @if (Auth::user()->permissions->dashboard)
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
        @endif

        @if (Auth::user()->permissions->company_branches)
            <a class="nav-link" href="{{ route('company.branches') }}">Company Branches</a>
        @endif

        <!-- Inventory Tabs -->
        <h6 class="navbar-heading">Inventory</h6>
        @if (Auth::user()->permissions->add_item)
            <a class="nav-link" href="{{ route('inventory.add') }}">Add Item</a>
        @endif

        @if (Auth::user()->permissions->items_list)
            <a class="nav-link" href="{{ route('inventory.list') }}">Items List</a>
        @endif

        <!-- Vehicle Tabs -->
        <h6 class="navbar-heading">Vehicle</h6>
        @if (Auth::user()->permissions->brands)
            <a class="nav-link" href="{{ route('vehicle.brands') }}">Brands</a>
        @endif

        @if (Auth::user()->permissions->add_vehicle)
            <a class="nav-link" href="{{ route('vehicle.add') }}">Add Vehicle</a>
        @endif

        @if (Auth::user()->permissions->vehicle_list)
            <a class="nav-link" href="{{ route('vehicle.list') }}">Vehicle List</a>
        @endif

        <!-- Customer Tabs -->
        <h6 class="navbar-heading">Customer</h6>
        @if (Auth::user()->permissions->add_customer)
            <a class="nav-link" href="{{ route('customer.add') }}">Add Customer</a>
        @endif

        @if (Auth::user()->permissions->customer_list)
            <a class="nav-link" href="{{ route('customer.list') }}">Customer List</a>
        @endif

        @if (Auth::user()->permissions->customer_payment)
            <a class="nav-link" href="{{ route('customer.payment') }}">Customer Payment</a>
        @endif

        @if (Auth::user()->permissions->appointment)
            <a class="nav-link" href="{{ route('customer.appointment') }}">Appointments</a>
        @endif

        <!-- Supplier Tabs -->
        <h6 class="navbar-heading">Supplier</h6>
        @if (Auth::user()->permissions->add_supplier)
            <a class="nav-link" href="{{ route('supplier.add') }}">Add Supplier</a>
        @endif

        @if (Auth::user()->permissions->supplier_list)
            <a class="nav-link" href="{{ route('supplier.list') }}">Supplier List</a>
        @endif

        @if (Auth::user()->permissions->supplier_payment)
            <a class="nav-link" href="{{ route('supplier.payment') }}">Supplier Payment</a>
        @endif

        <!-- Finance Tabs -->
        <h6 class="navbar-heading">Finance</h6>
        @if (Auth::user()->permissions->finance_payment)
            <a class="nav-link" href="{{ route('finance.payment') }}">Finance Payment</a>
        @endif

        @if (Auth::user()->permissions->finance_loan)
            <a class="nav-link" href="{{ route('finance.loan') }}">Finance Loan</a>
        @endif

        @if (Auth::user()->permissions->finance_bank)
            <a class="nav-link" href="{{ route('finance.bank') }}">Finance Bank</a>
        @endif

        <!-- Reports Tabs -->
        <h6 class="navbar-heading">Reports</h6>
        @if (Auth::user()->permissions->sales_reports)
            <a class="nav-link" href="{{ route('reports.sales') }}">Sales Reports</a>
        @endif

        @if (Auth::user()->permissions->income_report)
            <a class="nav-link" href="{{ route('reports.income') }}">Income Reports</a>
        @endif

        @if (Auth::user()->permissions->expense_report)
            <a class="nav-link" href="{{ route('reports.expense') }}">Expense Reports</a>
        @endif

        @if (Auth::user()->permissions->inventory_analytics)
            <a class="nav-link" href="{{ route('reports.inventory') }}">Inventory Analytics</a>
        @endif
    </div>
</nav>
