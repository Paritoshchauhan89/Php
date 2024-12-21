<?php
$title = "Home Page";
include 'header.php';
?>

<div class="px-4 py-5 my-5 text-center">
    <svg width="67" height="41" viewBox="0 0 67 41" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M45.0353 4.66312C45.8331 3.77669 46.7195 3.04539 47.6281 2.46921C49.2236 1.47198 50.9079 0.940125 52.6364 0.940125V15.411C51.3732 11.0232 48.6475 7.25591 45.0353 4.66312ZM66.5533 40.9401H15.2957C6.87461 40.9401 0.0712891 34.1146 0.0712891 25.7157C0.0712891 17.6714 6.3206 11.0675 14.232 10.5135V0.940125C16.0048 0.940125 17.7555 1.44982 19.3954 2.46921C20.304 3.02323 21.1904 3.75453 21.9882 4.59663C25.2458 2.31409 29.1904 0.984446 33.4674 0.984446C33.4674 10.2254 30.1433 20.9734 19.3289 20.9955H33.3566C32.9577 19.2005 31.3178 17.8709 29.3677 17.8487H37.5228C35.5727 17.8487 33.9328 19.2005 33.5339 21.0177H46.6087C49.2236 21.0177 51.8164 21.5274 54.2541 22.5468C56.6696 23.544 58.8857 25.0288 60.725 26.8681C62.5865 28.7296 64.0491 30.9235 65.0464 33.339C66.0436 35.7324 66.5533 38.3252 66.5533 40.9401ZM22.8525 10.7795C23.1849 11.6437 24.0713 12.6188 25.3123 13.3279C26.5533 14.0371 27.8386 14.3252 28.7472 14.1922C28.4148 13.3279 27.5284 12.3529 26.2874 11.6437C25.0464 10.9346 23.761 10.6465 22.8525 10.7795ZM41.5117 13.3279C40.2707 14.0371 38.9854 14.3252 38.0768 14.1922C38.4092 13.3279 39.2957 12.3529 40.5367 11.6437C41.7777 10.9346 43.063 10.6465 43.9716 10.7795C43.6613 11.6437 42.7527 12.6188 41.5117 13.3279Z" fill="#283841"></path>
    </svg>
    <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="contact.php"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Contact Us</button></a>
            <a href="about.php"><button type="button" class="btn btn-outline-secondary btn-lg px-4">About</button></a>
        </div>
    </div>
</div>

<!-- Grid Layout Section -->
<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Dynamic cards</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <?php
        $cards = [];
        for ($i = 1; $i <= 9; $i++) {
            $cards[] = [
                'title' => "Card $i",
                'background' => "https://picsum.photos/400/400?random=$i",
                'location' => "Location $i",
                'days' => "{$i}d"
            ];
        }

        foreach ($cards as $card) {
            echo "
            <div class='col'>
                <div class='card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg' style='background-image: url({$card['background']});'>
                    <div class='d-flex flex-column h-100 p-5 pb-3 text-shadow-1'>
                        <h3 class='pt-5 mt-5 mb-4 display-6 lh-1 fw-bold'>{$card['title']}</h3>
                        <ul class='d-flex list-unstyled mt-auto'>
                            <li class='me-auto'>
                                <img src='https://picsum.photos/32/32?random=4' alt='Bootstrap' width='32' height='32' class='rounded-circle border border-white'>
                            </li>
                            <li class='d-flex align-items-center me-3'>
                                <svg class='bi me-2' width='1em' height='1em'><use xlink:href='#geo-fill'></use></svg>
                                <small>{$card['location']}</small>
                            </li>
                            <li class='d-flex align-items-center'>
                                <svg class='bi me-2' width='1em' height='1em'><use xlink:href='#calendar3'></use></svg>
                                <small>{$card['days']}</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>";
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
