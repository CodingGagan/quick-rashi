<section class="sidebar" id="sidebar">
    <div class="dashboard-logo">
        <img src="{{ asset('assets/images/company/logo.png') }}" alt="" />
    </div>
    <ul class="MuiList-root MuiList-padding css-1ontqvh">
        <li class="MuiListItem-root MuiListItem-gutters css-1tpp0wj">
            <a href="{{ route('admin_dashboard') }}">
                <div class="MuiButtonBase-root MuiListItemButton-root MuiListItemButton-gutters MuiListItemButton-root MuiListItemButton-gutters css-1uwabd6"
                    tabindex="0" role="button">
                    <div class="MuiListItemIcon-root css-1f8bwsm">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                            aria-hidden="true" viewBox="0 0 24 24" data-testid="PersonIcon">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                            </path>
                        </svg>
                    </div>
                    <div class="MuiListItemText-root css-1tsvksn">
                        <span
                            class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-yb0lig">Dashboard</span>
                    </div>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span>
                </div>
            </a>
        </li>
        <li class="MuiListItem-root MuiListItem-gutters css-1tpp0wj">
            <a href="{{ route('admin_user_list') }}">
                <div class="MuiButtonBase-root MuiListItemButton-root MuiListItemButton-gutters MuiListItemButton-root MuiListItemButton-gutters css-1uwabd6"
                    tabindex="0" role="button">
                    <div class="MuiListItemIcon-root css-1f8bwsm">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                            aria-hidden="true" viewBox="0 0 24 24" data-testid="PersonIcon">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                            </path>
                        </svg>
                    </div>
                    <div class="MuiListItemText-root css-1tsvksn">
                        <span
                            class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-yb0lig">User List</span>
                    </div>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span>
                </div>
            </a>
        </li>
        <li class="MuiListItem-root MuiListItem-gutters css-1tpp0wj">
            <a href="{{ route('admin_blog_details') }}">
                <div class="MuiButtonBase-root MuiListItemButton-root MuiListItemButton-gutters MuiListItemButton-root MuiListItemButton-gutters css-1uwabd6"
                    tabindex="0" role="button">
                    <div class="MuiListItemIcon-root css-1f8bwsm">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                            aria-hidden="true" viewBox="0 0 24 24" data-testid="PersonIcon">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                            </path>
                        </svg>
                    </div>
                    <div class="MuiListItemText-root css-1tsvksn">
                        <span
                            class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-yb0lig">Blogs</span>
                    </div>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span>
                </div>
            </a>
        </li>
        <li class="MuiListItem-root MuiListItem-gutters css-1tpp0wj">
            <a href="{{ route('admin_testimonial_details') }}">
                <div class="MuiButtonBase-root MuiListItemButton-root MuiListItemButton-gutters MuiListItemButton-root MuiListItemButton-gutters css-1uwabd6"
                    tabindex="0" role="button">
                    <div class="MuiListItemIcon-root css-1f8bwsm">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                            aria-hidden="true" viewBox="0 0 24 24" data-testid="PersonIcon">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                            </path>
                        </svg>
                    </div>
                    <div class="MuiListItemText-root css-1tsvksn">
                        <span
                            class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-yb0lig">Testimonial</span>
                    </div>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span>
                </div>
            </a>
        </li>
        {{-- <li class="MuiListItem-root MuiListItem-gutters css-1tpp0wj">
            <div class="MuiButtonBase-root MuiListItemButton-root MuiListItemButton-gutters MuiListItemButton-root MuiListItemButton-gutters css-1uwabd6"
                tabindex="0" role="button">
                <div class="MuiListItemIcon-root css-1f8bwsm">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                        aria-hidden="true" viewBox="0 0 24 24" data-testid="HomeIcon">
                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                    </svg>
                </div>
                <div class="MuiListItemText-root css-1tsvksn">
                    <span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-yb0lig">Home</span>
                </div>
                <span class="MuiTouchRipple-root css-w0pj6f"></span>
            </div>
        </li>
        <li class="MuiListItem-root MuiListItem-gutters css-1tpp0wj">
            <div class="MuiButtonBase-root MuiListItemButton-root MuiListItemButton-gutters MuiListItemButton-root MuiListItemButton-gutters css-1uwabd6"
                tabindex="0" role="button">
                <div class="MuiListItemIcon-root css-1f8bwsm">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                        aria-hidden="true" viewBox="0 0 24 24" data-testid="AccessibilityNewIcon">
                        <path
                            d="M20.5 6c-2.61.7-5.67 1-8.5 1s-5.89-.3-8.5-1L3 8c1.86.5 4 .83 6 1v13h2v-6h2v6h2V9c2-.17 4.14-.5 6-1l-.5-2zM12 6c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z">
                        </path>
                    </svg>
                </div>
                <div class="MuiListItemText-root css-1tsvksn">
                    <span
                        class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-yb0lig">Master</span>
                </div>
                <span class="MuiTouchRipple-root css-w0pj6f"></span>
            </div>
        </li>
        <li class="MuiListItem-root MuiListItem-gutters css-1tpp0wj">
            <div class="MuiButtonBase-root MuiListItemButton-root MuiListItemButton-gutters MuiListItemButton-root MuiListItemButton-gutters css-1uwabd6"
                tabindex="0" role="button">
                <div class="MuiListItemIcon-root css-1f8bwsm">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                        aria-hidden="true" viewBox="0 0 24 24" data-testid="NextWeekIcon">
                        <path
                            d="M20 7h-4V5c0-.55-.22-1.05-.59-1.41C15.05 3.22 14.55 3 14 3h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zM10 5h4v2h-4V5zm1 13.5-1-1 3-3-3-3 1-1 4 4-4 4z">
                        </path>
                    </svg>
                </div>
                <div class="MuiListItemText-root css-1tsvksn">
                    <span
                        class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-yb0lig">Services</span>
                </div>
                <span class="MuiTouchRipple-root css-w0pj6f"></span>
            </div>
        </li>
        <li class="MuiListItem-root MuiListItem-gutters css-1tpp0wj">
            <div class="MuiButtonBase-root MuiListItemButton-root MuiListItemButton-gutters MuiListItemButton-root MuiListItemButton-gutters css-1uwabd6"
                tabindex="0" role="button">
                <div class="MuiListItemIcon-root css-1f8bwsm">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                        aria-hidden="true" viewBox="0 0 24 24" data-testid="ContactMailIcon">
                        <path
                            d="M21 8V7l-3 2-3-2v1l3 2 3-2zm1-5H2C.9 3 0 3.9 0 5v14c0 1.1.9 2 2 2h20c1.1 0 1.99-.9 1.99-2L24 5c0-1.1-.9-2-2-2zM8 6c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H2v-1c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1zm8-6h-8V6h8v6z">
                        </path>
                    </svg>
                </div>
                <div class="MuiListItemText-root css-1tsvksn">
                    <span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-yb0lig">About
                        Us</span>
                </div>
                <span class="MuiTouchRipple-root css-w0pj6f"></span>
            </div>
        </li> --}}
        <li class="MuiListItem-root MuiListItem-gutters css-1tpp0wj">
            <a href="{{ route('logout') }}">
                <div class="MuiButtonBase-root MuiListItemButton-root MuiListItemButton-gutters MuiListItemButton-root MuiListItemButton-gutters css-1uwabd6"
                    tabindex="0" role="button">
                    <div class="MuiListItemIcon-root css-1f8bwsm">
                      <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                      aria-hidden="true" viewBox="0 0 24 24" data-testid="LogoutIcon">
                      <path
                          d="m17 7-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z">
                      </path>
                  </svg>
                    </div>
                    <div class="MuiListItemText-root css-1tsvksn">
                        <span
                            class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-yb0lig">Logout</span>
                    </div>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span>
                </div>
            </a>
        </li>
        {{-- <li class="MuiListItem-root MuiListItem-gutters css-1tpp0wj">
            <div class="MuiButtonBase-root MuiListItemButton-root MuiListItemButton-gutters MuiListItemButton-root MuiListItemButton-gutters css-1uwabd6"
                tabindex="0" role="button">
                <div class="MuiListItemIcon-root css-1f8bwsm">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                        aria-hidden="true" viewBox="0 0 24 24" data-testid="AssessmentIcon">
                        <path
                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z">
                        </path>
                    </svg>
                </div>
                <div class="MuiListItemText-root css-1tsvksn">
                    <span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-yb0lig">Blogs</span>
                </div>
                <span class="MuiTouchRipple-root css-w0pj6f"></span>
            </div>
        </li>
        <li class="MuiListItem-root MuiListItem-gutters css-1tpp0wj">
            <div class="MuiButtonBase-root MuiListItemButton-root MuiListItemButton-gutters MuiListItemButton-root MuiListItemButton-gutters css-1uwabd6"
                tabindex="0" role="button">
                <div class="MuiListItemIcon-root css-1f8bwsm">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                        aria-hidden="true" viewBox="0 0 24 24" data-testid="LogoutIcon">
                        <path
                            d="m17 7-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z">
                        </path>
                    </svg>
                </div>
                <div class="MuiListItemText-root css-1tsvksn">
                    <span
                        class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-yb0lig">Logout</span>
                </div>
                <span class="MuiTouchRipple-root css-w0pj6f"></span>
            </div>
        </li> --}}
    </ul>
</section>
