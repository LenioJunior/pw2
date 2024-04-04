<?php include("Cabecalho.php");?>
<div class="container">
    <div class="d-flex justify-content-center">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="Home-tab" data-bs-toggle="pill" data-bs-target="#pills" type="button" role="tab" aria-controls="pills" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="Feed-tab" data-bs-toggle="pill" data-bs-target="#pills" type="button" role="tab" aria-controls="pills" aria-selected="false">Feed</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="Login-tab" data-bs-toggle="pill" data-bs-target="#pills" type="button" role="tab" aria-controls="pills" aria-selected="false">Login</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="Background-tab" data-bs-toggle="pill" data-bs-target="#pills" type="button" role="tab" aria-controls="pills" aria-selected="false">Background</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-Home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0"></div>
            <div class="tab-pane fade" id="pills-Feed" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0"></div>
            <div class="tab-pane fade" id="pills-Login" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0"></div>
            <div class="tab-pane fade" id="pills-Background" role="tabpanel" aria-labelledby="pills-FAQ-tab" tabindex="0"></div>
        </div>
    </div>
    <div id="includedContent">
    </div>
</div>
<?php include("Rodape.php");?>
