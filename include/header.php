    <style>
    @media (min-width: 768px) {
        .logo img {
            max-height: 50px !important;
            width: auto !important;
        }
    }
</style>


    <div class="header-area bg-white">
        <div class="header-top d-none d-md-block bg-white">
            <div class="container">
                <div class="header-top-wrap d-flex flex-wrap justify-content-between align-items-center">
                    <div class="nav--links">
                        <ul>
                            <li><a href="../track-order.php">Track Order</a></li>
                        </ul>
                    </div>
                    <div class="predefined-widgets d-flex gap-2 align-items-center py-2">
                        <div class="d-none d-lg-block">
                            <div class="dropdown dropdown--lang">
                               
                            </div>
                        </div>

                        <div class="position-relative user-dropdown-wrapper">
                            <button type="button" class="user-account login-btn button" data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                                <span class="icon">
                                    <i class="las la-user"></i>
                                </span>
                                <span>My Account</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-middle">
            <div class="container">
                <div class="d-flex justify-content-between header-wrapper middle-menu-lsw">
                    <div class="logo">
                        <a href="https://script.viserlab.com/Industrywaala/demo">
                            <img src="../../../assets/logo.webp" alt="Logo">
                        </a>
                    </div>
                    <div class="header-search-wrapper">
                        <form action="https://script.viserlab.com/Industrywaala/demo/products" method="GET"
                            class="header-search-form me-auto w-100">
                            <div class="header-form-group">
                                <button type="button" class="search-close-btn"><i class="las la-arrow-up"></i></button>
                                <input type="text" class="form--control" name="search" value=""
                                    placeholder="Search For Products">
                            </div>
                            <button class="icon" type="submit"><i class="las la-search"></i></button>
                        </form>
                    </div>
                    <button type="button" class="header-search-btn"><i class="las la-search"></i></button>

                    <ul
                        class="list list--row option-list-wrapper justify-content-center justify-content-md-end option-list d-flex align-items-center">
                        <li class="d-none d-lg-block">
                            <a href="../compare-products.php" class="ecommerce">
                                <span class="ecommerce__icon">
                                    <i class="las la-exchange-alt"></i>
                                    <span class="ecommerce__is compare-count d-none"></span>
                                </span>
                                <span class="ecommerce__text">Compare</span>
                            </a>
                        </li>

                        <li class="d-none d-lg-block">
                            <a href="javascript:void(0)" class="ecommerce wish-button">
                                <span class="ecommerce__icon">
                                    <i class="las la-heart"></i>
                                    <span class="ecommerce__is wishlist-count d-none"></span>
                                </span>
                                <span class="ecommerce__text">Wishlist</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="row g-0">
                    <div class="header-bottom-wrapper primary-menu-clw">

                        <button class="primary-menu-button d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <div class="d-none d-lg-block view-category-wrapper">
                            <div class="view-category">
                                <div class="menu-category-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                        viewBox="0 0 24 24" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path fill="#ffffff" fill-rule="evenodd"
                                                d="m20.272 3.261.021.022.424.424.022.021c.378.378.693.693.93.972.246.29.45.59.568.95a2.75 2.75 0 0 1 0 1.7c-.117.36-.322.66-.569.95-.236.279-.551.594-.93.972l-.02.021-.425.424-.021.022c-.378.378-.693.693-.972.93-.29.246-.59.45-.95.568a2.75 2.75 0 0 1-1.7 0c-.36-.117-.66-.322-.95-.569-.279-.236-.594-.552-.972-.93l-.021-.02-.424-.425-.022-.021a17.822 17.822 0 0 1-.93-.972c-.246-.29-.45-.59-.568-.95a2.75 2.75 0 0 1 0-1.7c.117-.36.322-.66.569-.95.236-.279.551-.594.93-.972l.02-.021.425-.424.021-.022c.378-.378.693-.693.972-.93.29-.246.59-.45.95-.568a2.75 2.75 0 0 1 1.7 0c.36.117.66.322.95.569.279.236.594.551.972.93zM6.17 2.25h.66c.535 0 .98 0 1.345.03.38.03.736.098 1.073.27A2.75 2.75 0 0 1 10.45 3.75c.172.338.24.694.27 1.074.03.364.03.81.03 1.344v.661c0 .535 0 .98-.03 1.345-.03.38-.098.736-.27 1.073a2.75 2.75 0 0 1-1.202 1.202c-.337.172-.693.24-1.073.27-.365.03-.81.03-1.345.03h-.66c-.535 0-.98 0-1.345-.03-.38-.03-.736-.098-1.073-.27A2.75 2.75 0 0 1 2.55 9.248c-.172-.337-.24-.693-.27-1.073-.03-.365-.03-.81-.03-1.345v-.66c0-.535 0-.98.03-1.345.03-.38.098-.736.27-1.074A2.75 2.75 0 0 1 3.752 2.55c.337-.172.693-.24 1.073-.27.365-.03.81-.03 1.345-.03zm.03 11h-.03c-.535 0-.98 0-1.345.03-.38.03-.736.098-1.073.27A2.75 2.75 0 0 0 2.55 14.75c-.172.338-.24.694-.27 1.074-.03.365-.03.81-.03 1.345v.66c0 .535 0 .98.03 1.345.03.38.098.736.27 1.073a2.75 2.75 0 0 0 1.202 1.202c.337.172.693.24 1.073.27.365.03.81.03 1.344.03h.661c.535 0 .98 0 1.345-.03.38-.03.736-.098 1.073-.27a2.75 2.75 0 0 0 1.202-1.202c.172-.337.24-.694.27-1.073.03-.365.03-.81.03-1.345v-.66c0-.535 0-.98-.03-1.345-.03-.38-.098-.736-.27-1.074a2.75 2.75 0 0 0-1.202-1.201c-.337-.172-.693-.24-1.073-.27-.365-.03-.81-.03-1.345-.03H6.8zm10.97 0h.66c.535 0 .98 0 1.345.03.38.03.736.098 1.074.27a2.75 2.75 0 0 1 1.201 1.201c.172.338.24.694.27 1.074.03.365.03.81.03 1.345v.66c0 .535 0 .98-.03 1.345-.03.38-.098.736-.27 1.073a2.75 2.75 0 0 1-1.202 1.202c-.337.172-.693.24-1.073.27-.364.03-.81.03-1.344.03h-.661c-.535 0-.98 0-1.345-.03-.38-.03-.736-.098-1.074-.27a2.75 2.75 0 0 1-1.201-1.202c-.172-.337-.24-.694-.27-1.073-.03-.365-.03-.81-.03-1.345v-.66c0-.535 0-.98.03-1.345.03-.38.098-.736.27-1.074a2.75 2.75 0 0 1 1.201-1.201c.338-.172.694-.24 1.074-.27.365-.03.81-.03 1.345-.03z"
                                                clip-rule="evenodd" opacity="1" data-original="#000000">
                                            </path>
                                        </g>
                                    </svg>
                                    Categories
                                </div>
                            </div>

                            <div class="category-dropdown-menu">
                                <div class="left-site-category active">
                                    <div class="category-dropdown">
                                        <ul class="list-inline mega-menu vertical-megamenu">
                                            <li class="fluid-menu">
                                                <a href="../products/fashion-apparel.php"
                                                    class="nav-link menu-item dropdown has-submenu">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dd3d597971730272573.png"
                                                            alt="icon">
                                                    </span>
                                                    Fashion &amp; Apparel
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>

                                                <ul
                                                    class="list-inline categories__mega-menu-wrap categories__mega-menu d-none d-lg-block">
                                                    <li>
                                                        <div class="categories__mega-menu-content">
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/mens-fashion.php">Mens
                                                                        Fashion</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/clothing.php">Clothing</a>
                                                                        <ul class="categories__mega-submenu">
                                                                            <li><a
                                                                                    href="../products/shirts.php">Shirts</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/pants.php">Pants</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/jackets.php">Jackets</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/suits.php">Suits</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/activewear.php">Activewear</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/t-shirts.php">T-shirts</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="../products/shoes.php">Shoes</a>
                                                                        <ul class="categories__mega-submenu">
                                                                            <li><a
                                                                                    href="../products/casual-shoes.php">Casual</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/formal-shoes.php">Formal</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/sports-shoes.php">Sports</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/mens-watches.php">Watches</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/mens-sunglasses.php">Sunglasses</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/wallets.php">Wallets</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/womens-fashion.php">Women's
                                                                        Fashion</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a
                                                                            href="../products/womens-clothing.php">Clothing</a>
                                                                        <ul class="categories__mega-submenu">
                                                                            <li><a
                                                                                    href="../products/womens-dresses.php">Dresses</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/women-tops.php">Tops</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/women-skirts.php">Skirts</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/women-pants.php">Pants</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/womens-shoes.php">Shoes</a>
                                                                        <ul class="categories__mega-submenu">
                                                                            <li><a
                                                                                    href="../products/women-heel-shoes.php">Heels</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/women-flats-shoes.php">Flats</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/women-sports.php">Sports</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="../products/womens-bags.php">Bags</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/jewelry.php">Jewelry</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/scarves.php">Scarves</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/womens-sunglasses.php">Sunglasses</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/kids-fashion.php">Kids
                                                                        Fashion</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a
                                                                            href="../products/kids-clothing.php">Clothing</a>
                                                                        <ul class="categories__mega-submenu">
                                                                            <li><a href="../products/boys.php">Boys</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/girls.php">Girls</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/infants.php">Infants</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="../products/kids-shoes.php">Shoes</a>
                                                                        <ul class="categories__mega-submenu">
                                                                            <li><a
                                                                                    href="../products/slipper.php">Slipper</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/kids-school-shoes.php">School
                                                                                    Shoes</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/ethnic-wear.php">Ethnic
                                                                        Wear</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/sarees.php">Sarees</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/kurtas.php">Kurtas</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/abayas.php">Abayas</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/kaftans.php">Kaftans</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/mens-waist-court.php">Men's
                                                                            Waist Court</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="fluid-menu">
                                                <a href="../products/jewelry-ornaments.php" class="nav-link menu-item">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dcc2db7681730272450.png"
                                                            alt="icon">
                                                    </span>
                                                    Jewelry &amp; Ornaments
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="fluid-menu">
                                                <a href="../products/gifts-special-occasions.php"
                                                    class="nav-link menu-item">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dd24e79661730272548.png"
                                                            alt="icon">
                                                    </span>
                                                    Gifts &amp; Special Occasions
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="fluid-menu">
                                                <a href="../products/books-stationary.php" class="nav-link menu-item">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dd14115261730272532.png"
                                                            alt="icon">
                                                    </span>
                                                    Books &amp; Stationary
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="fluid-menu">
                                                <a href="../products/stationery-office-supplies.php"
                                                    class="nav-link menu-item">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dcfdc11171730272509.png"
                                                            alt="icon">
                                                    </span>
                                                    Stationery &amp; Office Supplies
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="fluid-menu">
                                                <a href="../products/automobile-accessories.php"
                                                    class="nav-link menu-item">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dcefe2e5c1730272495.png"
                                                            alt="icon">
                                                    </span>
                                                    Automobile &amp; Accessories
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="fluid-menu dropdown has-submenu">
                                                <a href="../products/travel-luggage.php"
                                                    class="nav-link menu-item dropdown has-submenu">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dcd290bd71730272466.png"
                                                            alt="icon">
                                                    </span>
                                                    Travel &amp; Luggage
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                                <ul class="list-inline sub-menu">
                                                    <li><a href="../products/backpacks.php">Backpacks</a></li>
                                                    <li><a href="../products/luggage.php">Luggage</a></li>
                                                </ul>
                                            </li>

                                            <li class="fluid-menu">
                                                <a href="../products/sports-outdoors.php"
                                                    class="nav-link menu-item dropdown has-submenu">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dc84ca3521730272388.png"
                                                            alt="icon">
                                                    </span>
                                                    Sports &amp; Outdoors
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                                <ul
                                                    class="list-inline categories__mega-menu-wrap categories__mega-menu d-none d-lg-block">
                                                    <li>
                                                        <div class="categories__mega-menu-content">
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/outdoor-gear.php">Outdoor
                                                                        Gear</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/tents.php">Tents</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/sleeping-bags.php">Sleeping
                                                                            Bags</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/sports-equipment.php">Sports
                                                                        Equipment</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list"></ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/cycling-scooters.php">Cycling
                                                                        &amp; Scooters</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list"></ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/water-sports.php">Water
                                                                        Sports</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list"></ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a
                                                                        href="../products/sports-active-wear.php">Activewear</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list"></ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="fluid-menu">
                                                <a href="../products/gadgets-electronics.php"
                                                    class="nav-link menu-item dropdown has-submenu">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dc99ca78d1730272409.png"
                                                            alt="icon">
                                                    </span>
                                                    Gadgets &amp; Electronics
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                                <ul
                                                    class="list-inline categories__mega-menu-wrap categories__mega-menu d-none d-lg-block">
                                                    <li>
                                                        <div class="categories__mega-menu-content">
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a
                                                                        href="../products/smartphones-and-accessories.php">Smartphones
                                                                        &amp; Accessories</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a
                                                                            href="../products/smartphones.php">Smartphones</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/phone-cases.php">Phone
                                                                            Cases</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/chargers.php">Chargers</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/wearable-tech.php">Wearable
                                                                        Tech</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/fitness-band.php">Fitness
                                                                            Band</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/smartwatch.php">Smartwatch</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/audio.php">Audio</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a
                                                                            href="../products/headphones.php">Headphones</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/earbuds.php">Earbuds</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/speakers.php">Speakers</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/computing-accessories.php">Computing
                                                                        &amp; Accessories</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/laptops.php">Laptops</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/keyboards.php">Keyboards</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/mouse.php">Mouse</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/home-entertainment.php">Home
                                                                        Entertainment</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/tvs.php">TVs</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/streaming-devices.php">Streaming
                                                                            Devices</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/tablets.php">Tablets</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list"></ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/cameras-photography.php">Cameras
                                                                        &amp; Photography</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/dslrs.php">DSLRs</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/action-cameras.php">Action
                                                                            Cameras</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/camera-accessories.php">Camera
                                                                            Accessories</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/feature-phones.php">Feature
                                                                        Phones</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list"></ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="fluid-menu">
                                                <a href="../products/health-wellness.php"
                                                    class="nav-link menu-item dropdown has-submenu">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dc70e81d41730272368.png"
                                                            alt="icon">
                                                    </span>
                                                    Health &amp; Wellness
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                                <ul
                                                    class="list-inline categories__mega-menu-wrap categories__mega-menu d-none d-lg-block">
                                                    <li>
                                                        <div class="categories__mega-menu-content">
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/fitness-exercise.php">Fitness
                                                                        &amp; Exercise</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/yoga-mats.php">Yoga
                                                                            Mats</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/dumbbells.php">Dumbbells</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/resistance-bands.php">Resistance
                                                                            Bands</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/fitness-trackers.php">Fitness
                                                                            Trackers</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/smartwatches.php">Smartwatches</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/vitamins-and-supplements.php">Vitamins
                                                                        &amp; Supplements</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/protein-powders.php">Protein
                                                                            Powders</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/multivitamins.php">Multivitamins</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/herbal-supplements.php">Herbal
                                                                            Supplements</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/personal-care-devices.php">Personal
                                                                        Care Devices</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a
                                                                            href="../products/massagers.php">Massagers</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/hair-removal-tools.php">Hair
                                                                            Removal Tools</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/thermometers.php">Thermometers</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/meditation-relaxation.php">Meditation
                                                                        &amp; Relaxation</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/essential-oils.php">Essential
                                                                            Oils</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/stress-relief-products.php">Stress
                                                                            Relief Products</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/scented-candles.php">Scented
                                                                            Candles</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="fluid-menu">
                                                <a href="../products/home-living.php"
                                                    class="nav-link menu-item dropdown has-submenu">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dc16a0fd31730272278.png"
                                                            alt="icon">
                                                    </span>
                                                    Home &amp; Living
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                                <ul
                                                    class="list-inline categories__mega-menu-wrap categories__mega-menu d-none d-lg-block">
                                                    <li>
                                                        <div class="categories__mega-menu-content">
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/furniture.php">Furniture</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a
                                                                            href="../products/living-room-furniture.php">Living
                                                                            Room</a>
                                                                        <ul class="categories__mega-submenu">
                                                                            <li><a
                                                                                    href="../products/living-room-sofas.php">Sofas</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/coffee-tables.php">Coffee
                                                                                    Tables</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/bedroom-furniture.php">Bedroom</a>
                                                                        <ul class="categories__mega-submenu">
                                                                            <li><a href="../products/beds.php">Beds</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/wardrobes.php">Wardrobes</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="../products/office-furniture.php">Office
                                                                            Furniture</a>
                                                                        <ul class="categories__mega-submenu">
                                                                            <li><a
                                                                                    href="../products/desks.php">Desks</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="../products/chairs.php">Chairs</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/home-decor.php">Home Decor</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/wall-art.php">Wall Art</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/lighting.php">Lighting</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/rugs-and-carpets.php">Rugs
                                                                            &amp; Carpets</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/curtains.php">Curtains</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/bedding-linens.php">Bedding
                                                                        &amp; Linens</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a
                                                                            href="../products/bedsheets.php">Bedsheets</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/duvets.php">Duvets</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/pillow-covers.php">Pillow
                                                                            Covers</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/towels.php">Towels</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/kitchenware-dining.php">Kitchenware
                                                                        &amp; Dining</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/cookware.php">Cookware</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/dinnerware.php">Dinnerware</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/glassware.php">Glassware</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/storage-and-organization.php">Storage
                                                                        &amp; Organization</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/baskets.php">Baskets</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/shelves.php">Shelves</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/cabinets.php">Cabinets</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/home-appliances.php">Home
                                                                        Appliances</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/kitchen-appliances.php">Kitchen
                                                                            Appliances</a>
                                                                        <ul class="categories__mega-submenu">
                                                                            <li><a
                                                                                    href="../products/microwaves.php">Microwaves</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="../products/cleaning-appliances.php">Cleaning
                                                                            Appliances</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="fluid-menu">
                                                <a href="../products/beauty-personal-care.php"
                                                    class="nav-link menu-item dropdown has-submenu">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dcae7f50d1730272430.png"
                                                            alt="icon">
                                                    </span>
                                                    Beauty &amp; Personal Care
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                                <ul
                                                    class="list-inline categories__mega-menu-wrap categories__mega-menu d-none d-lg-block">
                                                    <li>
                                                        <div class="categories__mega-menu-content">
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/skincare.php">Skincare</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a
                                                                            href="../products/moisturizers.php">Moisturizers</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/serums.php">Serums</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/sunscreen.php">Sunscreen</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/cleansers.php">Cleansers</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/haircare.php">Haircare</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/shampoos.php">Shampoos</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/conditioners.php">Conditioners</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/hair-treatments.php">Hair
                                                                            Treatments</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/makeup.php">Makeup</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a
                                                                            href="../products/lipsticks.php">Lipsticks</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/eye-makeup.php">Eye
                                                                            Makeup</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/blushes.php">Blushes</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/fragrances.php">Fragrances</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/perfumes.php">Perfumes</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a
                                                                            href="../products/deodorants.php">Deodorants</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/body-mists.php">Body
                                                                            Mists</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/personal-hygiene.php">Personal
                                                                        Hygiene</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/bath-and-body.php">Bath
                                                                            &amp; Body</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/feminine-care.php">Feminine
                                                                            Care</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/oral-care.php">Oral
                                                                            Care</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="categories__mega-menu-list">
                                                                <h5 class="categories__mega-menu-title">
                                                                    <a href="../products/mens-grooming.php">Men's
                                                                        Grooming</a>
                                                                </h5>
                                                                <ul class="list-inline cate__mega-menu-list">
                                                                    <li><a href="../products/shaving.php">Shaving</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/beard-care.php">Beard
                                                                            Care</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                    <li><a href="../products/hair-styling.php">Hair
                                                                            Styling</a>
                                                                        <ul class="categories__mega-submenu"></ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="fluid-menu">
                                                <a href="../products/toys-baby-products.php"
                                                    class="nav-link menu-item">
                                                    <span class="menu-item-icon">
                                                        <img src="../assets/images/category/icons/6721dd30aba941730272560.png"
                                                            alt="icon">
                                                    </span>
                                                    Toys &amp; Baby Products
                                                    <span class="menu-item-arrowicon">
                                                        <i class="las la-angle-right"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="menu d-none d-lg-flex">
                            <li><a href="./index.php" class="">Home</a></li>
                            <li><a href="./products.php" class="">Products</a></li>
                            <li><a href="./about-us.php" class="">About Us</a></li>
                            <li><a href="./categories.php" class="">All Categories</a></li>
                            <li><a href="./contact.php" class="">Contact</a></li>
                        </ul>

                     </div>
                </div>
            </div>
        </div>
    </div>

    <ul
        class="list list--row mobile-menu-icons justify-content-center justify-content-md-end option-list d-lg-none d-flex">
        <li>
            <a href="../categories.php" class="ecommerce" id="cate-button">
                <span class="ecommerce__icon">
                    <img src="../assets/images/svg/category.svg" alt="">
                </span>
                <span class="ecommerce__text">Categories</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="ecommerce wish-button">
                <span class="ecommerce__icon">
                    <img src="../assets/images/svg/wishlist.svg" alt="">
                    <span class="ecommerce__is wishlist-count d-none"></span>
                </span>
                <span class="ecommerce__text">Wishlist</span>
            </a>
        </li>
        <li>
            <a href="../compare-products.php" class="ecommerce">
                <span class="ecommerce__icon">
                    <img src="../assets/images/svg/compare.svg" alt="">
                    <span class="ecommerce__is compare-count d-none"></span>
                </span>
                <span class="ecommerce__text">Compare</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="ecommerce" id="account-button" data-bs-toggle="modal"
                data-bs-target="#loginModal">
                <span class="ecommerce__icon">
                    <img src="../assets/images/svg/my_account.svg" alt="">
                </span>
                <span class="ecommerce__text">My Account</span>
            </a>
        </li>
    </ul>

    <div class="site-sidebar mobile-menu sidebar-nav d-lg-none">
        <button type="button" class="sidebar-close-btn">
            <i class="las la-times"></i>
        </button>

        <div class="mobile-menu-header">
            <div class="d-block d-lg-none">
                <div class="dropdown dropdown--lang">
                    
                </div>
            </div>
        </div>

        <div class="mobile-menu-body">
            <ul class="menu">
                <li><a href="https://script.viserlab.com/Industrywaala/demo" class="">Home</a></li>
                <li><a href="./products.php" class="">Products</a></li>
                <li><a href="./about-us.php" class="">About Us</a></li>
                <li><a href="./categories.php" class="">All Categories</a></li>
                <li><a href="./contact.php" class="">Contact</a></li>
            </ul>
        </div>
    </div>