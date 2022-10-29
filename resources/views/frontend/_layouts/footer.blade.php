    <!--------Footer---------->
    <footer data-aos="fade-up">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="textwidget custom-html-widget"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d35409.66395728725!2d85.65828748294842!3d24.99927169422195!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f257a4af2fc4bf%3A0xdb203fc6dda995c5!2sVivekanand%20Public%20School%2Cwarisaliganj!5e0!3m2!1sen!2sin!4v1660492386311!5m2!1sen!2sin"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                    <div class="col-sm-12 col-md-5 pl-lg-5">
                        <h4 class="text-center hh4">Useful Links</h4>
                        <ul class="navbar-nav">
                            <li class="text-center nav-item"><a href=""> Mandatory Disclosure</a></li>
                            <li class="text-center nav-item"><a href=""> Mandatory Disclosure</a></li>
                            <li class="text-center nav-item"><a href=""> Mandatory Disclosure</a></li>
                            <li class="text-center nav-item"><a href=""> Mandatory Disclosure</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <h4>Contact Us </h4>
                        @php
                            $footer = App\Models\Footer::findOrFail(1);
                        @endphp
                        <div class="f-address">
                            <p> {{ $footer->address }} <br>
                                <a href="">{{ $footer->contact }} </a><br>
                                <a href="mailto: {{ $footer->email }}"> {{ $footer->email }}</a><br>
                                <a href="{{ $footer->website }}" target="_blank">{{ $footer->website }}</a>
                            </p>
                        </div>
                        <div class="footer-social">
                            <a href="{{ $footer->facebook }}" class="social-link" title="" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 96.124 96.123">
                                    <path
                                        d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803
                          c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654
                          c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246
                          c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z">
                                    </path>
                                </svg>
                            </a>
                            <a href="{{ $footer->twitter }}" class="social-link" title="" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                          c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                          c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                          c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                          c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                          c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                          C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                          C480.224,136.96,497.728,118.496,512,97.248z">
                                    </path>
                                </svg>
                            </a>
                            <a href="{{ $footer->youtube }}" class="social-link" title="" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 310 310">
                                    <path id="XMLID_823_"
                                        d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938
                          C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527
                          C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991
                          c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764
                          c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861
                          C204.394,157.263,202.325,160.684,199.021,162.41z">
                                    </path>
                                </svg>
                            </a>
                            <a href="{{ $footer->instagram }}" class="social-link" title="" target="_blank">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h362c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm-180 390c-74.441406 0-135-60.558594-135-135s60.558594-135 135-135 135 60.558594 135 135-60.558594 135-135 135zm150-240c-24.8125 0-45-20.1875-45-45s20.1875-45 45-45 45 20.1875 45 45-20.1875 45-45 45zm0 0">
                                    </path>
                                    <path
                                        d="m407 90c-8.277344 0-15 6.722656-15 15s6.722656 15 15 15 15-6.722656 15-15-6.722656-15-15-15zm0 0">
                                    </path>
                                    <path
                                        d="m257 150c-57.890625 0-105 47.109375-105 105s47.109375 105 105 105 105-47.109375 105-105-47.109375-105-105-105zm0 0">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-sec">
            <div class="container d-flex  flex-column flex-lg-row justify-content-md-between align-items-md-center">
                <div>© <span id="year">2022</span> &nbsp;Vivekanand Public School Warisaliganj. All Rights
                    Reserved.
                </div>
                <div class="d-flex align-items-md-center">Total Visitors :
                    <h6 class="vcount mb-0">
                        <div id="visitorcounter"></div>
                    </h6>
                </div>
                <div>Designed &amp; Developed by: Akshiptika Infotech &amp; Private Limited</div>
            </div>
        </div>
    </footer>
    
