<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>POLO | The Multi-Purpose HTML5 Template</title>
    <!-- Stylesheets & Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/css/plugins.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.html">
                            <span class="logo-default">SIMKATMAWA</span>
                            <span class="logo-dark">SIMKATMAWA</span>
                        </a>
                    </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">Layout</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Topbar</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-topbar.html">Light</a></li>
                                                    <li><a href="header-topbar-dark.html">Dark</a></li>
                                                    <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                                    <li><a href="header-topbar-colored.html">Colored</a></li>
                                                    <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Header</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header.html">Light</a></li>
                                                    <li><a href="header-dark.html">Dark</a></li>
                                                    <li><a href="header-transparent.html">Transparent</a></li>
                                                    <li><a href="header-fullwidth.html">Fullwidth</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Modern</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-modern.html">Light</a></li>
                                                            <li><a href="header-modern-dark.html">Dark</a></li>
                                                            <li><a href="header-modern-transparent.html">Transparent</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-mini.html">Mini</a></li>
                                                    <li><a href="header-alternative.html">Alternative</a></li>
                                                    <li><a href="header-always-fixed.html">Always Fixed</a></li>
                                                    <li><a href="header-disable-fixed.html">Disable Fixed</a></li>
                                                    <li><a href="header-responsive-fixed.html">Responsive Fixed</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Logo</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-logo.html">Left</a></li>
                                                            <li><a href="header-logo-right.html">Right</a></li>
                                                            <li><a href="header-logo-center.html">Center</a></li>
                                                            <li><a href="header-logo-fixed-header.html">Header Fixed Logo</a></li>
                                                            <li><a href="header-logo-responsive.html">Header Responsive Logo</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Menu Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-menu-left.html">Left</a></li>
                                                            <li><a href="header-menu-right.html">Right</a></li>
                                                            <li><a href="header-menu-center.html">Center</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Main Menu<span class="badge bg-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu.html">Default</a></li>
                                                    <li><a href="menu-lowercase.html">Lowercase</a></li>
                                                    <li><a href="menu-split.html">Split Menu</a></li>
                                                    <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                                    <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                                    <li><a href="menu-creative.html">Creative Menu</a></li>
                                                    <li><a href="menu-lines.html">Lines Menu</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Outline</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-outline.html">Default</a></li>
                                                            <li><a href="menu-outline-dark.html">Dark</a></li>
                                                            <li><a href="menu-outline-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Rounded</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-rounded.html">Default</a></li>
                                                            <li><a href="menu-rounded-dark.html">Dark</a></li>
                                                            <li><a href="menu-rounded-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-left.html">Left Aligned</a></li>
                                                            <li><a href="menu-center.html">Center Aligned</a></li>
                                                            <li><a href="menu-right.html">Right Aligned</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="menu-dots.html">Dots Menu</a></li>
                                                    <li><a href="menu-one-page.html">One Page Menu</a></li>
                                                    <li><a href="menu-hover-background.html">Hover Background</a></li>
                                                    <li><a href="menu-button.html">Button Version</a></li>
                                                    <li><a href="menu-social-icons.html">Social Icons Version</a></li>
                                                    <li><a href="menu-onclick.html">OnClick Open</a></li>
                                                    <li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Title</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-title.html">Default</a></li>
                                                    <li><a href="page-title-image.html">Image background</a></li>
                                                    <li><a href="page-title-video.html">Video background</a></li>
                                                    <li><a href="page-title-particle.html">Particle animation</a></li>
                                                    <li><a href="page-title-pattern.html">Pattern background</a></li>
                                                    <li><a href="page-title-background-color.html">Colored background</a></li>
                                                    <li><a href="page-title-parallax.html">Parallax</a></li>
                                                    <li><a href="page-title-animated.html">Animated</a></li>
                                                    <li><a href="page-title-right.html">Right Aligned</a></li>
                                                    <li><a href="page-title-left.html">Left Aligned</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Menu<span class="badge bg-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-menu.html">Default</a></li>
                                                    <li><a href="page-menu-sticky.html">Sticky</a></li>
                                                    <li><a href="page-menu-rounded.html">Rounded</a></li>
                                                    <li><a href="page-menu-outline.html">Outline</a></li>
                                                    <li><a href="page-menu-lines.html">Lines</a></li>
                                                    <li><a href="page-menu-solid.html">Solid</a></li>
                                                    <li><a href="page-menu-light.html">Light</a></li>
                                                    <li><a href="page-menu-dark.html">Dark</a></li>
                                                    <li><a href="page-menu-creative.html">Creative</a></li>
                                                    <li><a href="page-menu.html">Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Sidebars</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="sidebar-sticky.html">Sticky version</a></li>
                                                    <li><a href="sidebar.html">Left aligned</a></li>
                                                    <li><a href="sidebar-right.html">Right aligned</a></li>
                                                    <li><a href="sidebar-both.html">Both Sidebars</a></li>
                                                    <li><a href="sidebar-modern.html">Modern</a></li>
                                                    <li><a href="sidebar-modern-right.html">Modern Right</a></li>
                                                    <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Footers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="footer.html#footer">Default</a></li>
                                                    <li><a href="footer-dark.html#footer">Dark</a></li>
                                                    <li><a href="footer-1.html#footer">Footer 1</a></li>
                                                    <li><a href="footer-2.html#footer">Footer 2</a></li>
                                                    <li><a href="footer-3.html#footer">Footer 3</a></li>
                                                    <li><a href="footer-4.html#footer">Footer 4</a></li>
                                                    <li><a href="footer-5.html#footer">Footer 5</a></li>
                                                    <li><a href="footer-6.html#footer">Footer 6</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Options</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="layout-boxed.html">Boxed</a></li>
                                                    <li><a href="layout-modern.html">Modern</a></li>
                                                    <li><a href="layout-frame.html">Frame</a></li>
                                                    <li><a href="layout-wide.html">Wide (default)</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Features</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Sliders</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="slider-revolution-slider.html">Revolution Slider</a></li>
                                                    <li><a href="slider-inspiro-slider.html">Inspiro Slider</a></li>
                                                    <li><a href="slider-static-media-image.html">Fullscreen Image</a></li>
                                                    <li><a href="slider-static-media-parallax.html">Fullscreen Parallax</a></li>
                                                    <li><a href="slider-static-media-text-rotator.html">Fullscreen Text Rotator</a></li>
                                                    <li><a href="slider-static-media-video.html">Fullscreen HTML5 Video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                            <li><a href="page-loaders.html">Page Loaders<span class="badge bg-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#">Modal Auto Open<span class="badge bg-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="modal-auto-open-subscription.html">Subscription</a></li>
                                                    <li><a href="modal-auto-open-shop.html">Shop Promotion</a></li>
                                                    <li><a href="modal-auto-open-login.html">Login Form</a></li>
                                                    <li><a href="modal-auto-open-audio.html">Audio Player</a></li>
                                                    <li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
                                                    <li><a href="modal-auto-open-youtube.html">YouTube Video</a></li>
                                                    <li><a href="modal-auto-open-vimeo.html">Vimeo Video</a></li>
                                                    <li><a href="modal-auto-open-iframe.html">Iframe</a></li>
                                                    <li><a href="modal-auto-open.html">Sample Text</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Cookie Notify<span class="badge bg-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cookie-notify.html">Top position</a></li>
                                                    <li><a href="cookie-notify-bottom.html">Bottom position</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shape-dividers.html">Shape Dividers<span class="badge bg-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#">Menu Labels</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Label (new)<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="#">Label (hot)<span class="badge bg-danger">HOT</span></a></li>
                                                    <li><a href="#">Label (popular)<span class="badge bg-success">POPULAR</span></a></li>
                                                    <li><a href="#">Label (sale)<span class="badge bg-warning">SALE</span></a></li>
                                                    <li><a href="#">Label (info)<span class="badge bg-info">INFO</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Elements</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-according.html">Accordions</a></li>
                                                            <li><a href="shortcode-alerts.html">Alerts</a></li>
                                                            <li><a href="shortcode-animations.html">Animations</a></li>
                                                            <li><a href="shortcode-avatar.html">Avatar</a></li>
                                                            <li><a href="shortcode-audio-video.html">Audio & Video</a></li>
                                                            <li><a href="shortcode-blockquotes.html">Blockquotes</a></li>
                                                            <li><a href="component-bootstrap-switch.html">BS Switch<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="component-bootstrap-notify.html">BS Notify<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-breadcrumbs.html">Breadcrumbs</a></li>
                                                            <li><a href="shortcode-buttons.html">Buttons</a></li>
                                                            <li><a href="shortcode-background-image.html">Background Image</a></li>
                                                            <li><a href="shortcode-background-overlays.html">Background Overlays</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="component-charts-chartjs.html">Charts<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="component-calendar.html">Calendar<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-client-logo.html">Clients logos</a></li>
                                                            <li><a href="shortcode-calltoaction.html">Call to action</a></li>
                                                            <li><a href="shortcode-carousel.html">Carousel</a></li>
                                                            <li><a href="shortcode-code.html">Code</a></li>
                                                            <li><a href="shortcode-countdown-timer.html">Countdown Timers</a></li>
                                                            <li><a href="shortcode-countdown.html">Countdown<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-counters.html">Counter Numbers</a></li>
                                                            <li><a href="component-clipboard.html">Clipboard<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="component-datatable.html">Data Tables<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="component-daterangepicker.html">Date & Time Pickers</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-dropcat-highlight.html">Dropcat & Highlight</a></li>
                                                            <li><a href="shortcode-dropdowns.html">Dropdowns</a></li>
                                                            <li><a href="shortcode-team-members.html">Team members</a></li>
                                                            <li><a href="shortcode-forms.html">Form Controls</a></li>
                                                            <li><a href="shortcode-form-validation.html">Form Validation</a></li>
                                                            <li><a href="shortcode-form-layouts.html">Form Layouts</a></li>
                                                            <li><a href="shortcode-file-upload.html">File upload</a></li>
                                                            <li><a href="shortcode-grid.html">Grid System</a></li>
                                                            <li><a href="shortcode-heading-styles.html">Heading Styles</a></li>
                                                            <li><a href="shortcode-icon-boxes.html">Icon Boxes</a></li>
                                                            <li><a href="shortcode-icon-lists.html">Icons</a></li>
                                                            <li><a href="shortcode-images.html">Images</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-lightbox.html">Lightbox</a></li>
                                                            <li><a href="shortcode-lists.html">Lists</a></li>
                                                            <li><a href="shortcode-labels-badgets.html">Labels & Badges</a></li>
                                                            <li><a href="shortcode-maps.html">Maps</a></li>
                                                            <li><a href="shortcode-modal.html">Modal</a></li>
                                                            <li><a href="shortcode-modal-strip.html">Modal Strip</a></li>
                                                            <li><a href="shortcode-navs.html">Navbar & Navs</a></li>
                                                            <li><a href="shortcode-paginations.html">Pagination & Pager</a></li>
                                                            <li><a href="shortcode-panels.html">Panels</a></li>
                                                            <li><a href="shortcode-pie-chart.html">Pie charts</a></li>
                                                            <li><a href="shortcode-popover.html">Popover</a></li>
                                                            <li><a href="shortcode-milestone-stats.html">Milestone & Stats</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-pricing-table.html">Pricing tables</a></li>
                                                            <li><a href="shortcode-progress-bar.html">Progress bars</a></li>
                                                            <li><a href="shortcode-parallax.html">Parallax</a></li>
                                                            <li><a href="shortcode-particles.html">Particles<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-responsive-utilities.html">Responsive utilities</a></li>
                                                            <li><a href="component-ion-range-slider.html">Range Slider<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-sections.html">Sections</a></li>
                                                            <li><a href="shortcode-smooth-scrolling.html">Smooth Scrolling</a></li>
                                                            <li><a href="shortcode-social-icons.html">Social Icons</a></li>
                                                            <li><a href="shortcode-spinners.html">Spinners<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="component-toggles-radio-checkboxes.html">Switch Toggle<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-shape-dividers.html">Shape Dividers<span class="badge bg-danger">NEW</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-ratings.html">Ratings<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-tables.html">Tables</a></li>
                                                            <li><a href="shortcode-textbox.html">Text Boxes</a></li>
                                                            <li><a href="shortcode-tabs.html">Tabs</a></li>
                                                            <li><a href="shortcode-testimonial.html">Testimonials</a></li>
                                                            <li><a href="shortcode-toggles.html">Toggles</a></li>
                                                            <li><a href="shortcode-tooltips.html">Tooltips</a></li>
                                                            <li><a href="shortcode-typography.html">Typography</a></li>
                                                            <li><a href="shortcode-text-rotator.html">Text Rotator</a></li>
                                                            <li><a href="shortcode-timeline.html">Timeline<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-video-background.html">Video Background</a></li>
                                                            <li><a href="shortcode-wizard.html">Wizard<span class="badge bg-danger">NEW</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-basic.html">Basic</a></li>
                                                    <li><a href="page-about-extended.html">Extended</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About me</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-me-creative.html">Creative<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="page-about-me-basic.html">Basic</a></li>
                                                    <li><a href="page-about-me-extended.html">Extended</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-contact-classic.html">Classic</a></li>
                                                    <li><a href="page-contact-advanced.html">Advanced</a> </li>
                                                    <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a></li>
                                                    <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a></li>
                                                    <li><a href="page-contact-map-bottom.html">Map bottom</a></li>
                                                    <li><a href="page-contact-sidebar-left.html">Sidebar Left</a></li>
                                                    <li><a href="page-contact-sidebar-right.html">Sidebar Right</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Gallery</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-gallery-2.html">Two Columns</a></li>
                                                    <li><a href="page-gallery-3.html">Three Columns</a></li>
                                                    <li><a href="page-gallery-4.html">Four Columns</a></li>
                                                    <li><a href="page-gallery-5.html">Five Columns</a></li>
                                                    <li><a href="page-gallery-6.html">Six Columns</a></li>
                                                    <li><a href="page-gallery-sidebar.html">Sidebar version</a></li>
                                                    <li><a href="page-gallery-wide.html">Wide version</a></li>
                                                    <li><a href="page-gallery-load-more.html">Load more</a></li>
                                                    <li><a href="page-gallery-infinite-scroll.html">Infinity Scroll</a></li>
                                                    <!--<li><a href="page-gallery-gallery-albums.html">Gallery Albums</a></li>-->
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User pages</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-user-login.html">Login</a></li>
                                                    <li><a href="page-user-login-cover.html">Login - Side Cover</a></li>
                                                    <li><a href="page-user-login-classic.html">Login - Classic</a></li>
                                                    <li><a href="page-user-register-cover.html">Register - Side Cover</a></li>
                                                    <li><a href="page-user-register.html">Register</a></li>
                                                    <li><a href="page-user-register-classic.html">Register - Classic</a></li>
                                                    <li><a href="page-user-password-recovery.html">Recovery Password</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="page-services.html">Services</a></li>
                                            <li><a href="page-our-team.html">Our team</a></li>
                                            <li><a href="page-our-clients.html">Our clients</a></li>
                                            <li><a href="page-maintenance.html">Maintenance</a></li>
                                            <li><a href="page-404.html">404 Page</a></li>
                                            <li><a href="page-404-parallax.html">404 Page - Parallax</a></li>
                                            <li><a href="page-500.html">500 Page</a></li>
                                            <li><a href="page-fullwidth.html">Fullwidth page</a></li>
                                            <li><a href="page-fullwidth-wide.html">Fullwidth page - Wide</a></li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page with Sidebar</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-sidebar.html">Sidebar Left</a></li>
                                                    <li><a href="page-sidebar-right.html">Sidebar Right</a></li>
                                                    <li><a href="page-sidebar-both.html">Sidebar Both</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="page-site-map.html">Site Map</a></li>
                                            <li><a href="page-faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids</li>
                                                            <li><a href="portfolio-2.html">Two Columns</a></li>
                                                            <li><a href="portfolio-3.html">Three Columns</a></li>
                                                            <li><a href="portfolio-4.html">Four Columns</a></li>
                                                            <li><a href="portfolio-5.html">Five Columns</a></li>
                                                            <li><a href="portfolio-6.html">Six Columns</a></li>
                                                            <li><a href="portfolio-sidebar.html">Sidebar version</a></li>
                                                            <li><a href="portfolio-wide-3.html">Wide version</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li><a href="portfolio-masonry-2.html">Two Columns</a></li>
                                                            <li><a href="portfolio-masonry-3.html">Three Columns<span class="badge bg-danger">HOT</span></a></li>
                                                            <li><a href="portfolio-masonry-4.html">Four Columns</a></li>
                                                            <li><a href="portfolio-masonry-5.html">Five Columns</a></li>
                                                            <li><a href="portfolio-masonry-6.html">Six Columns</a></li>
                                                            <li><a href="portfolio-masonry-sidebar.html">Sidebar version</a></li>
                                                            <li><a href="portfolio-masonry-wide-3.html">Wide version</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Styles</li>
                                                            <li><a href="portfolio-filter-styles.html">Filter Styles</a></li>
                                                            <li><a href="portfolio-load-more.html">Load more</a></li>
                                                            <li><a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a></li>
                                                            <li><a href="portfolio-infinite-scroll.html">Infinity Scroll</a></li>
                                                            <li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
                                                            <li><a href="portfolio-gallery-modal.html">Gallery Modal</a></li>
                                                            <li><a href="portfolio-video-modal.html">Video Modal</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="portfolio-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="portfolio-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="portfolio-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="portfolio-slider-3.html">Slider Default</a></li>
                                                            <li><a href="portfolio-no-page-title.html">No Page Title</a></li>
                                                            <li><a href="portfolio-no-page-title-sidebar.html">No Page Title - Sidebar</a></li>
                                                            <li><a href="portfolio-hover-styles.html">Hover Styles</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Project</li>
                                                            <li><a href="portfolio-page-grid-gallery.html">Grid Gallery</a></li>
                                                            <li><a href="portfolio-page-particles.html">Particles Wide Project</a></li>
                                                            <li><a href="portfolio-page-floating-sidebar.html">Floating Sidebar</a></li>
                                                            <li><a href="portfolio-page-slider.html">Slider version</a></li>
                                                            <li><a href="portfolio-page-background-image.html">Fullscreen image</a></li>
                                                            <li><a href="portfolio-page-background-video.html">Fullscreen Video</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12 no-padding">
                                                        <div class="d-none d-lg-block m-t-40 m-b-10">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-9 m-t-10">
                                                                        <div class="text-center center">
                                                                            <div class="heading-creative"><strong>20+</strong> Amazing Hover Styles</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3"><a href="portfolio-hover-styles.html" class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View All Hover Styles</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="d-block d-lg-none">
                                                            <li><a class="mega-menu-title" href="portfolio-hover-styles.html">20+ Amazing Hover Styles</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li><a href="blog-masonry-2.html">Two Columns</a></li>
                                                            <li><a href="blog-masonry-3.html">Three Columns<span class="badge bg-danger">HOT</span></a></li>
                                                            <li><a href="blog-masonry-4.html">Four Columns</a></li>
                                                            <li><a href="blog-masonry-sidebar.html">Sidebar version</a></li>
                                                            <li><a href="blog-masonry-no-page-title.html">No page title</a></li>
                                                            <li><a href="blog-masonry-wide.html">Wide version</a></li>
                                                            <li><a href="blog-masonry-load-more.html">Load More</a></li>
                                                            <li><a href="blog-masonry-infinite-scroll.html">Infinite Scroll</a></li>
                                                            <li><a href="blog-masonry-filter.html">Filter Categories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids Layout</li>
                                                            <li><a href="blog-1.html">One Column</a></li>
                                                            <li><a href="blog-2.html">Two Columns</a></li>
                                                            <li><a href="blog-3.html">Three Columns</a></li>
                                                            <li><a href="blog-4.html">Four Columns</a></li>
                                                            <li><a href="blog-no-page-title.html">No page title</a></li>
                                                            <li><a href="blog-wide.html">Wide version</a></li>
                                                            <li><a href="blog-load-more.html">Load More</a></li>
                                                            <li><a href="blog-infinite-scroll.html">Infinite Scroll</a></li>
                                                            <li><a href="blog-filter.html">Filter Categories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Left Image</li>
                                                            <li><a href="blog-left-image-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="blog-left-image-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="blog-left-image-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="blog-left-image-no-sidebar.html">No Sidebar</a></li>
                                                            <li><a href="blog-left-image-no-page-title.html">No page title</a></li>
                                                            <li><a href="blog-left-image-load-more.html">Load More</a></li>
                                                            <li><a href="blog-left-image-infinite-scroll.html">Infinite Scroll</a></li>
                                                            <li><a href="blog-left-image-author-info.html">Author Info</a></li>
                                                            <li><a href="blog-left-image-filter.html">Filter Categories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="blog-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="blog-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="blog-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="blog-fullwidth.html">Fullwidth</a></li>
                                                            <li class="mega-menu-title">Post Item Styles</li>
                                                            <li><a href="blog-style-shadow.html">Shadow</a></li>
                                                            <li><a href="blog-style-textual.html">Textual</a></li>
                                                            <li><a href="blog-style-grey-bg.html">Grey Background</a></li>
                                                            <li><a href="blog-style-author-info.html">Author Info</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Post</li>
                                                            <li><a href="blog-single.html">Default</a></li>
                                                            <li><a href="blog-single-slider.html">Slider</a></li>
                                                            <li><a href="blog-single-video.html">Video</a></li>
                                                            <li><a href="blog-single-audio.html">Audio</a></li>
                                                            <li><a href="blog-single-creative.html">Creative</a></li>
                                                            <li class="mega-menu-title">Comments<span class="badge bg-danger">NEW</span></li>
                                                            <li><a href="blog-comments.html#comments">Default Comments</a></li>
                                                            <li><a href="blog-comments-disqus.html#comments">Disqus Comments</a></li>
                                                            <li><a href="blog-comments-facebook.html#comments">Facebook Comments</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Columns</li>
                                                            <li><a href="shop-columns-2.html">Two Columns</a></li>
                                                            <li><a href="shop-columns-3.html">Three Columns</a></li>
                                                            <li><a href="shop-columns-4.html">Four Columns</a></li>
                                                            <li><a href="shop-columns-5.html">Five Columns</a></li>
                                                            <li><a href="shop-columns-6.html">Six Columns</a></li>
                                                            <li><a href="shop-sidebar-sticky.html">Sidebar Sticky</a></li>
                                                            <li><a href="shop-wide.html">Wide version</a></li>
                                                            <li><a href="shop-no-page-title.html">No page title</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="shop-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="shop-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="shop-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="shop-fullwidth.html">Fullwidth (Wide)</a></li>
                                                            <li class="mega-menu-title">Loading Styles</li>
                                                            <li><a href="shop-load-more.html">Load more</a><a href="shop-load-more-sidebar.html">Load Sidebar</a></li>
                                                            <li><a href="shop-infinite-scroll.html">Infinity Scroll</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Order process</li>
                                                            <li><a class="animsition-link" href="shop-cart.html">Shoping Cart</a></li>
                                                            <li><a class="animsition-link" href="shop-cart-empty.html">Shoping Cart - Empty</a></li>
                                                            <li><a class="animsition-link" href="shop-checkout.html">Checkout</a></li>
                                                            <li><a class="animsition-link" href="shop-checkout-completed.html">Checkout Completed</a></li>
                                                            <li><a href="shop-wishlist.html">Wishlist</a></li>
                                                            <li><a href="shop-wishlist-empty.html">Wishlist Empty</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Product</li>
                                                            <li><a href="shop-single-product.html">Fullwidth</a></li>
                                                            <li><a href="shop-single-product-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="shop-single-product-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="shop-single-product-sidebar-both.html">Both Sidebars</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5 p-l-0">
                                                        <h4 class="text-theme">BIG SALE<small>Up to</small></h4>
                                                        <h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
                                                        <p class="m-b-0">The most happiest time of the day!. Morbi sagittis, sem quis ipsum dolor sit amet lacinia faucibus.</p><a class="btn btn-shadow btn-roundeded btn-block m-t-10">SHOP NOW!</a><small class="t300">
                                                            <p class="text-center m-0"><em>* Limited time Offer</em></p>
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
            <!-- Slide 1 -->
            <div class="slide kenburns" data-bg-image="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/slider/notgeneric_bg3.jpg">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <h1 data-caption-animate="zoom-out">WELCOME TO THE WORLD OF POLO</h1>
                        <p>Say hello to the smartest and most flexible bootstrap template. Polo is an powerful template that can build any type of websites, and quite possibly the only one you will ever need.</p>
                        <div><a href="#welcome" class="btn btn-primary scroll-to">Explore more</a></div>
                        </span>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 1 -->
            <!-- Slide 2 -->
            <div class="slide" data-bg-video="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/video/pexels-waves.mp4">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-start text-light">
                        <!-- Captions -->
                        <h1>220+ Laytout Demos</h1>
                        <p class="text-small">POLO is packed with 220+ pre-made layouts that allow you to quickly jumpstart your project. Completely customizable for creating your own designs.</p>
                        <div><a href="#welcome" class="btn btn-primary scroll-to">Explore more</a></div>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
        </div>
        <!--end: Inspiro Slider -->
        <!-- WELCOME -->
        <section id="welcome" class="p-b-0">
            <div class="container">
                <div class="heading-text heading-section text-center m-b-40" data-animate="animate__fadeInUp">
                    <h2>WELCOME TO THE WORLD OF POLO</h2>
                    <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
                </div>
                <div class="row" data-animate="animate__fadeInUp">
                    <div class="col-lg-12">
                        <img class="img-fluid" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/other/responsive-1.jpg" alt="Welcome to POLO">
                    </div>
                </div>
            </div>
        </section>
        <!-- end: WELCOME -->
        <!-- WHAT WE DO -->
        <section class="background-grey">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2>WHAT WE DO</h2>
                    <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="0">
                            <h4>Modern Design</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="200">
                            <h4>Loaded with Features</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="400">
                            <h4>Completely Customizable</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="600">
                            <h4>100% Responsive Layout</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="800">
                            <h4>Clean Modern Code</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="1000">
                            <h4>Free Updates & Support</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WHAT WE DO -->
        <!-- PORTFOLIO -->
        <section class="p-b-0">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2>Recent Work</h2>
                    <span class="lead">Lorem ipsum dolor sit amet, coper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                        consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</span>
                </div>
            </div>
            <div class="portfolio">
                <!-- Portfolio Items -->
                <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">
                    <!-- portfolio item -->
                    <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/64.jpg" alt=""></a>
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/70.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/60.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="image" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/83l.jpg"><i class="icon-maximize"></i></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/61.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Let's Go Outside</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/65.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/81l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/82l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/66.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Last Iceland Sunshine</h3>
                                    <span>Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/67.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="iframe" href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="icon-play"></i></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/68.jpg" alt=""></a>
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/71.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/69.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Luxury Wine</h3>
                                    <span>Graphics / Branding</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                </div>
                <!-- end: Portfolio Items -->
            </div>
        </section>
        <!-- end: PORTFOLIO -->
        <!-- SERVICES -->
        <section>
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>SERVICES</h2>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="0">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-plug"></i></a>
                            </div>
                            <h3>Powerful template</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="200">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-desktop"></i></a>
                            </div>
                            <h3>Flexible Layouts</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="400">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-cloud"></i></a>
                            </div>
                            <h3>Retina Ready</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="600">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="far fa-lightbulb"></i></a>
                            </div>
                            <h3>Fast processing</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="800">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-trophy"></i></a>
                            </div>
                            <h3>Unlimited Colors</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="1000">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-thumbs-up"></i></a>
                            </div>
                            <h3>Premium Sliders</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="1200">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-rocket"></i></a>
                            </div>
                            <h3>Modern Design</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="1400">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-flask"></i></a>
                            </div>
                            <h3>Clean Modern Code</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="1600">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-umbrella"></i></a>
                            </div>
                            <h3>Free Updates & Support</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: SERVICES -->
        <!-- COUNTERS -->
        <section class="text-light p-t-150 p-b-150 " data-bg-parallax="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/parallax/12.jpg">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-code"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>LINES OF CODE</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
                            <div class="counter"> <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>CUPS OF COFFEE</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>FINISHED PROJECTS</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
                            <div class="counter"> <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>SATISFIED CLIENTS</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: COUNTERS -->
        <!-- BLOG -->
        <section class="content background-grey">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2>OUR BLOG</h2>
                    <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus,
                        orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id
                        molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare
                        orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span>
                </div>
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/blog/12.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/blog/17.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/blog/18.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                </div>
            </div>
        </section>
        <!-- end: BLOG -->
        <!-- CLIENTS -->
        <section class="p-t-60">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>CLIENTS</h2>
                    <span class="lead">Our awesome clients we've had the pleasure to work with! </span>
                </div>
                <div class="carousel client-logos" data-items="6" data-items-sm="4" data-items-xs="3" data-items-xxs="2" data-margin="20" data-arrows="false" data-autoplay="true" data-autoplay="3000" data-loop="true">
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/1.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/2.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/3.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/4.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/5.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/6.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/7.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/8.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/9.png"> </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: CLIENTS -->
        <!-- TEAM -->
        <section class="background-grey">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>MEET OUR TEAM</h2>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
                <div class="row team-members">
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/team/6.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Alea Smith</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/team/7.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Ariol Doe</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/team/8.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Emma Ross</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/team/9.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Victor Loda</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: TEAM -->
        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">
                                <div class="widget-title">Polo HTML5 Template</div>
                                <p class="mb-5">Built with love in Fort Worth, Texas, USA<br> All rights reserved. Copyright © 2021. INSPIRO.</p>
                                <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-inverted" target="_blank">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Discover</div>
                                        <ul class="list">
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Corporate</a></li>
                                            <li><a href="#">Updates</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Customers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Features</div>
                                        <ul class="list">
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="#">Footers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Pages</div>
                                        <ul class="list">
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Support</div>
                                        <ul class="list">
                                            <li><a href="#">Help Desk</a></li>
                                            <li><a href="#">Documentation</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2021 POLO - Responsive Multi-Purpose HTML5 Template. All Rights Reserved.<a href="https://www.inspiro-media.com" target="_blank" rel="noopener"> INSPIRO</a> </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/js/jquery.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/js/plugins.js"></script>
    <!--Template functions-->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/js/functions.js"></script>
</body>

</html>