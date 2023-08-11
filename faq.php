<?php include('./includes/header.php'); ?>

<section class="faq-section mt-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pt-3">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item" aria-current="page">FAQ<i class="ri-arrow-right-s-line"></i>
                </li>
            </ol>
        </nav>
        <div class="faq-home-data text-center mt-5 pb-5">
            <p class="section-heading">We’r here to help you!</p>
            <div class="search-bar mt-4">
                <a href="#"><i class="ri-search-line"></i></a>
                <input class="form-control me-2" type="search" placeholder="Type keywords to find answer"
                    aria-label="Search">
            </div>
            <p class="search-sub-title mt-4">You can browse the topic below to find what you are looking for.</p>
        </div>
    </div>
</section>

<section class="question-section">
    <div class="container">
        <h1 class="section-heading my-5 text-center"><i class="ri-question-mark faq-icon me-3"></i>Frequently Asked
            Questions</h1>
        <div class="accordion my-5" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is DPI?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Digital Payments Interface (DPI) is a system that powers multiple bank accounts and wallets into
                        a single mobile application (of any participating bank or wallet), merging several banking
                        features, seamless fund routing & merchant payments into one hood
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Is DPI different from UPI?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Can we transact from one wallet to another? how?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include('./includes/footer.php'); ?>