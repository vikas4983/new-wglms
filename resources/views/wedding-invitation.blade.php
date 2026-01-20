<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $webContent['webPage']->title ?? '' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/frontend-theme/images/favicon.png') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css"
        integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/framework7.material.colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/framework7.material.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/style.css') }}">
    <style>
        /* Loader wrapper */
.gallery-loader {
    width: 100%;
    height: 160px;
    display: none;                
    justify-content: center;
    align-items: center;
}
/* Wave loader */
.sk-wave {
    width: 50px;
    height: 40px;
    text-align: center;
    font-size: 10px;
}
.sk-wave > div {
    background-color: #ff4081;
    height: 100%;
    width: 6px;
    display: inline-block;
    animation: sk-wave 1.2s infinite ease-in-out;
}
.sk-wave .rect2 { animation-delay: -1.1s; }
.sk-wave .rect3 { animation-delay: -1.0s; }
.sk-wave .rect4 { animation-delay: -0.9s; }
.sk-wave .rect5 { animation-delay: -0.8s; }

@keyframes sk-wave {
    0%, 40%, 100% { transform: scaleY(0.4); }
    20% { transform: scaleY(1); }
}
.pagination-center {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 6px;
}

:root {
    --theme-color: #e91e63; /* change if needed */
}
/* Page number buttons */
#pageNumbers button {
    background: #fff;
    border: 1px solid var(--theme-color);
    color: var(--theme-color);
    border-radius: 4px;
    padding: 4px 10px;
    font-size: 13px;
}
/* Active page */
#pageNumbers .btn-primary {
    background: var(--theme-color) !important;
    color: #fff !important;
    border-color: var(--theme-color);
}
/* Prev / Next buttons */
#prevPage,
#nextPage {
    background: var(--theme-color);
    color: #fff;
    border: none;
    padding: 4px 10px;
}
/* Disabled state */
#prevPage:disabled,
#nextPage:disabled {
    background: #ddd;
    color: #888;
    cursor: not-allowed;
}
.pagination-controls {
    display: none;
}
    </style>
</head>
<body>
<div class="statusbar-overlay"></div>
    <div class="panel-overlay"></div>
    <!-- views -->
    <div class="views">
        <div class="view view-main">
            <!-- navbar -->
            <div class="navbar">
                <div class="navbar-inner">
                   <div class="center site-title">
                        <a href="{{ route('view.webpage') }}">
                            <h1>{{ $webContent['webPage']->name ?? 'Love' }} {{ $webContent['webPage']->icon ?? '' }} </h1>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end navbar -->
            <!-- pages -->
            <div class="pages">
                <div class="page" data-page="home">
                    <div class="page-content">
                        <!-- slider -->
                        <div class="slider-slick app-pages">
                            @foreach ($webContent['bannerImages'] as $banner)
                            <div class="slider-entry">
                                <img src="{{ asset('storage/' . $banner->path) }}" alt="">
                                    <div class="overlay"></div>
                                    <div class="caption">
                                  </div>
                                </div> @endforeach
                      </div>
                    <!-- event -->
                        <div class="event
        app-section app-bg-dark">
    <div class="container">
        <div class="app-title">
            <h4>Wedding Events</h4>
            <i class="fa fa-heart"></i>
        </div>
        @foreach ($webContent['events'] as $event)
            <div class="row">
                <div class="col-100">
                    <div class="icon">
                        <i class="{{ $event->icon ?? '' }}"></i>
                    </div>
                    <div class="entry">
                        <div class="head">
                            <h6>{{ $event->name ?? '' }}</h6>
                            <span>{{ \Carbon\Carbon::parse($event->date)->format('d M Y ') ?? '' }}</span> &nbsp;
                            {{ \Carbon\Carbon::parse($event->time)->format('h:i A') }}
                        </div>
                        <div class="post">
                            <p>{{ $event->description ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
    <!-- end event -->
    <!-- portfolio -->
    <div class="portfolio app-section">
        <div class="container">
            <div class="app-title">
                <h4>Wedding Gallery</h4>
                <i class="fa fa-image"></i>
            </div>
            <ul class="portfolio-filter">
                <li class="allImagesBtn" data-action="{{ route('gallery.image') }}">All</li>
                @foreach ($webContent['galleryTypes'] as $type)
                    <li class="galleryImage" data-action="{{ route('gallery.image') }}" data-id="{{ $type->id }}">
                        {{ $type->name }}
                    </li>
                @endforeach
            </ul>
            <div class="portfolio-item">
                <!-- Loader -->
                <div class="gallery-loader">
                    <div class="sk-wave">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                </div>
                <!-- Images -->
                <div class="row showImages g-2"></div>
                <!-- Pagination -->
                <div class="pagination-controls pagination-center mt-3">
                    <button id="prevPage" class="btn btn-sm btn-secondary">Prev</button>
                    <span id="pageNumbers"></span>
                    <button id="nextPage" class="btn btn-sm btn-secondary">Next</button>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="tel-fax-mail">
                <ul>
                    <li><span>{{ $webContent['webPage']->primary_person ?? '' }}:</span>
                        +91{{ $webContent['webPage']->primary_contact ?? '' }}</li>
                    @if (!empty($webContent['webPage']?->secondary_contact))
                        <li>
                            <span>{{ $webContent['webPage']?->secondary_person }}:</span>
                            +91{{ $webContent['webPage']?->secondary_contact }}
                        </li>
                    @endif
                    <li><span>Email:</span> {{ $webContent['webPage']->email ?? '' }}</li>
                </ul>
            </div>
            <div class="ft-bottom">
                <span>{{ $webContent['webPage']->copyright ?? '© ' . date('Y') . ' All Rights Reserved' }}
                </span>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    </div>
    </div>
    </div>
    <!-- end pages -->
    </div>
    </div>
    <!-- end views -->
    <script>
        const allImages = document.querySelector(".allImagesBtn");
        const galleryImage = document.querySelectorAll(".galleryImage");
        const loader = document.querySelector(".gallery-loader");
        const container = document.querySelector(".showImages");
        let currentPage = 1;
        const itemsPerPage = 4;
        if (allImages) {
            allImages.addEventListener("click", function(e) {
                loader.style.display = 'flex';
                loadImage(e.target.dataset.action, '');
            });
        }
        galleryImage.forEach(item => {
            item.addEventListener('click', (e) => {
                loader.style.display = 'flex';
                loadImage(e.target.dataset.action, e.target.dataset.id);
            });
        });

        function loadImage(action, galleryId) {
            fetch(action, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({
                        galleryId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    container.innerHTML = data.html;
                    currentPage = 1;
                    paginateImages();
                    document.querySelector('.pagination-controls').style.display = 'flex';
                })
                .catch(error => alert("Error loading images"))
                .finally(() => loader.style.display = 'none');
        }

        function paginateImages() {
            const images = document.querySelectorAll('.filtr-item'); // IMPORTANT
            const totalPages = Math.ceil(images.length / itemsPerPage);

            images.forEach((img, index) => {
                img.style.display =
                    index >= (currentPage - 1) * itemsPerPage &&
                    index < currentPage * itemsPerPage ?
                    'block' :
                    'none';
            });
            renderPageNumbers(totalPages);
            updateButtons(totalPages);
        }

        function renderPageNumbers(totalPages) {
            const pageContainer = document.getElementById('pageNumbers');
            pageContainer.innerHTML = '';
            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement('button');
                btn.innerText = i;
                btn.className = `btn btn-sm ${i === currentPage ? 'btn-primary' : 'btn-light'}`;
                btn.style.margin = '0 3px';

                btn.addEventListener('click', () => {
                    currentPage = i;
                    paginateImages();
                });
                pageContainer.appendChild(btn);
            }
        }

        function updateButtons(totalPages) {
            document.getElementById('prevPage').disabled = currentPage === 1;
            document.getElementById('nextPage').disabled = currentPage === totalPages;
        }
        document.getElementById('prevPage').addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                paginateImages();
            }
        });
        document.getElementById('nextPage').addEventListener('click', () => {
            const images = document.querySelectorAll('.filtr-item');
            const totalPages = Math.ceil(images.length / itemsPerPage);

            if (currentPage < totalPages) {
                currentPage++;
                paginateImages();
            }
        });
    </script>
    <!-- script -->
    <script src="{{ asset('assets/theme/js/custom-js/action-button.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/framework7.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/jquery.filterizr.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/my-app.js') }}"></script>
    {{-- <script src="https://kit.fontawesome.com/39fac907c5.js" crossorigin="anonymous"></script> --}}
    </body>

</html>
