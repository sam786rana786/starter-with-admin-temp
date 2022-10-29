<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ !empty(Auth::user()->profile_image) ? url(Auth::user()->profile_image) : url('backend/images/small/img-2.jpg') }}"
                    alt="Profile Image" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ Auth::user()->name }}</h4>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-home-smile-2-fill"></i>
                        <span>Home Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('banner.index') }}">Banner</a></li>
                        <li><a href="{{ route('highlights.index') }}">Highlights</a></li>
                        <li><a href="{{ route('school.edit') }}">School Section</a></li>
                        <li><a href="{{ route('album.index') }}">Gallery Section</a></li>
                        <li><a href="{{ route('vandm.index') }}">Vision & Mission Section</a></li>
                        <li><a href="{{ route('footer.index') }}">Footer Section</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Notices & Events</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('notice.index') }}">List Notice</a></li>
                        <li><a href="{{ route('notice.create') }}">Create Notices</a></li>
                        <li><a href="{{ route('events.index') }}">List Events</a></li>
                        <li><a href="{{ route('events.create') }}">Create Events</a></li>
                    </ul>
                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-file-info-line"></i>
                        <span>About Us</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.index') }}">About School</a></li>
                        <li><a href="{{ route('vandm.edit', 3) }}">Principal Message</a></li>
                        <li><a href="{{ route('employee.index') }}">Employees</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{ route('important.index') }}">
                        <i class="ri-image-add-fill"></i>
                        Important Images
                    </a>
                </li>
                <li>
                    <a href="{{ route('mandatory.index') }}" class="waves-effect">
                        <i class="mdi mdi-file-document-multiple"></i>
                        Mandatory Disclosure
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Admission</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('uniform.index') }}">Fee Structure</a></li>
                        <li><a href="{{ route('online.admission') }}">Online Admission List</a></li>
                        {{-- <li><a href="#">Admission Notification</a></li>
                        <li><a href="#">Rules and Regulations</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Academics</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{  route('notice.index')  }}">Student Daily Notice</a></li>
                        {{-- <li><a href="pages-timeline.html">Syllabus (Upload as PDF)</a></li>
                        <li><a href="pages-directory.html">Study Materials</a></li>
                        <li><a href="pages-invoice.html">Result</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a href="{{ route('facilities.index') }}" class="waves-effect">
                        <i class="ri-profile-line"></i>
                        Facilities
                    </a>
                </li>
                <li><a href="{{ route('album.index') }}" class="waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Gallery</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Achievements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('achievement.index') }}">VPS Achivers List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Transfer Certificates</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('tc.index') }}">TC Views</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('alumni.list') }}" class="waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Alumni</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
