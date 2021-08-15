<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-users"></i>
        <span class="nav-text">Manage Students</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route('student.add') }}">New Student</a></li>
        <li><a href="{{ route("student.view") }}">All Students</a></li>
    </ul>
</li>

<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class=" fa fa-cogs"></i>
        <span class="nav-text">Manage Settings</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route('department.add') }}">Department</a></li>
        <li><a href="{{ route('publisher.add') }}">Publisher</a></li>
        <li><a href="{{ route('writer.add') }}">Writer</a></li>
        <li><a href="{{ route('origin.add') }}">Origin</a></li>
        <li><a href="{{ route('supplier.add') }}">Supplier</a></li>
    </ul>
</li>

<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-book"></i>
        <span class="nav-text">Manage Book</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route('book.add') }}">Book Add/Update</a></li>
    </ul>
</li>


<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="flaticon-381-network"></i>
        <span class="nav-text">Manage Stock</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route("stock.add") }}">New Book Stock</a></li>
        <li><a href="{{ route('stock.show') }}">All Stock Summary</a></li>
    </ul>
</li>

<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-clipboard"></i>
        <span class="nav-text">Manage Book Issue</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route('bookissue.add') }}">  New Book Issue</a></li>
        <li><a href="{{ route('bookissue.returnable') }}">Book Return</a></li>
        <li><a href="{{ route('bookissue.bookAlert') }}">Alert for Book Return</a></li>
    </ul>
</li>


<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-file-pdf-o"></i>
        <span class="nav-text">Manage Resources</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route('archive.add') }}">  New/View PDF</a></li>
    </ul>
</li>
