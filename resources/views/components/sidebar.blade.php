<div class="deznav">
    <div class="deznav-scroll">

     @if (Auth::check()&& Auth::user()->role=='SuperAdmin')

      {

    <ul class="metismenu" id="menu">



            <li><a  href="{{route('dashboard.index')}}" aria-expanded="false">
                    <i class="flaticon-381-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-user"></i>
                <span class="nav-text">users</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('users.index')}}">Viewusers</a></li>


            </ul>
        </li>
            <li><a  href="#" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">POS</span>
                </a>

            </li>


        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-internet"></i>
                <span class="nav-text">inventory</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="./ui-typography.html">Typography</a></li>
                <li><a href="./ui-pagination.html">Pagination</a></li>
                <li><a href="./ui-grid.html">Grid</a></li>

            </ul>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="flaticon-381-internet"></i>
            <span class="nav-text">product</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="./ui-typography.html">Typography</a></li>
            <li><a href="./ui-pagination.html">Pagination</a></li>
            <li><a href="./ui-grid.html">Grid</a></li>

        </ul>
     </li>
     <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="flaticon-381-internet"></i>
        <span class="nav-text">reports</span>
         </a>
        <ul aria-expanded="false">
        <li><a href="./ui-typography.html">Typography</a></li>
        <li><a href="./ui-pagination.html">Pagination</a></li>
        <li><a href="./ui-grid.html">Grid</a></li>

        </ul>
        </li>

            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./uc-select2.html">Select 2</a></li>
                    <li><a href="./uc-nestable.html">Nestedable</a></li>
                    <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="./uc-toastr.html">Toastr</a></li>
                    <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                </ul>
            </li>
            <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Widget</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./form-element.html">Form Elements</a></li>
                    <li><a href="./form-wizard.html">Wizard</a></li>
                    <li><a href="./form-editor-summernote.html">Summernote</a></li>
                    <li><a href="form-pickers.html">Pickers</a></li>
                    <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./page-register.html">Register</a></li>
                    <li><a href="./page-login.html">Login</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-error-400.html">Error 400</a></li>
                            <li><a href="./page-error-403.html">Error 403</a></li>
                            <li><a href="./page-error-404.html">Error 404</a></li>
                            <li><a href="./page-error-500.html">Error 500</a></li>
                            <li><a href="./page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li> --}}
    </ul>
     }
        @elseif(Auth::check() && Auth::user()->role=='salesperson'){
    <ul class="metismenu" id="menu">



            <li><a  href="{{route('dashboard.index')}}" aria-expanded="false">
                    <i class="flaticon-381-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li><a  href="#" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">POS</span>
                </a>

            </li>





    </ul>
}
    @elseif(Auth::check() && Auth::user()->role=='inventory')
 {
       <ul class="metismenu" id="menu">



        <li><a  href="{{route('dashboard.index')}}" aria-expanded="false">
                <i class="flaticon-381-home"></i>
                <span class="nav-text">Dashboard</span>
            </a>

        </li>
        <li><a  href="#" aria-expanded="false">
                <i class="flaticon-381-television"></i>
                <span class="nav-text">inventory</span>
            </a>

        </li>





    </ul>
}

    @endif
        {{-- <div class="add-menu-sidebar">
            <img src="images/icon1.png" alt=""/>
            <p>Organize your menus through button bellow</p>
            <a href="javascript:void(0);" class="btn btn-primary btn-block light">+ Add Menus</a>
        </div> --}}
        <div class="copyright">
            <p><strong>phi - Restaurant Admin Dashboard</strong> © 2020 All Rights Reserved</p>
            <p>Made with <i class="fa fa-heart"></i> by zalmicoding</p>
        </div>
    </div>
</div>
