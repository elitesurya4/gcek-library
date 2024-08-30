<!------------ HEADER SECTION ----------->

<?php include('PARTIALS/header.php') ?>

<!-------------OPAC SECTION------------->
<div class="opac-link">
    <p class="opac-link-1">
        <a href="opac.php" id="wiki-1">ONLINE&nbsp;PUBLIC&nbsp;ACCESS&nbsp;CATALOGUE&nbsp;(OPAC)</a>
    </p>
</div>
<div class="intro-link">
    <p class="opac-welc" id="opac-welc-id">WELCOME !</p><br>
    <p class="opac-content">To access the Library Database<br>Please Browse :-</p><br>
    <!-- <div class="opac-rule-1">
        <i class="fas fa-hand-point-right"></i><a class="opac-rule-point" id="rule-point-id">Inside Library ~ <a
                href="http://192.168.101.16/" id="book-link">Browse Here</a></a><br><br>
    </div> -->
    <div class="opac-rule-3">
        <i class="fas fa-hand-point-right"></i><a class="opac-rule-point" id="rule-point-id">Visit OPAC ~ <a
                href="https://gcek-opac.kohacloud.in/ " id="book-link">Browse Here</a></a><br><br>
    </div>
    <div class="opac-rule-2">
        <i class="fas fa-hand-point-right"></i><a class="opac-rule-point" id="rule-point-id">eResources ~
    </div>
    <div class="wrap" style="margin-left:10.73vw">
        <div class="parent-tabs tab-1">
            <input type="checkbox" name="tab" id="tab-1">
            <label for="tab-1">
                <span id="pseudolink">Browse&nbsp;Here</span>
                <div class="accord-icon"><i class="fas fa-angle-down"></i></div>
            </label>
            <div class="content">
                <div class="child-tab">
                    <label>
                        <span id="pseudolink" class="pseudo-class"
                            onclick="window.open('https://delnet.in/index.html')">DELNET</span>
                    </label>
                </div>
                <div class="child-tab">
                    <label>
                        <span id="pseudolink" class="pseudo-class"
                            onclick="window.open('https://nkn.gov.in/')">NKN</span>
                    </label>
                </div>
                <div class="child-tab">
                    <label>
                        <span id="pseudolink" class="pseudo-class"
                            onclick="window.open('https://vidwan.inflibnet.ac.in/')">Vidwan</span>
                    </label>
                </div>
                <div class="child-tab">
                    <label>
                        <span id="pseudolink" class="pseudo-class"
                            onclick="window.open('https://ess.inflibnet.ac.in/')">ShodhSindhu</span>
                    </label>
                </div>
                <div class="child-tab">
                    <label>
                        <span id="pseudolink" class="pseudo-class"
                            onclick="window.open('https://ndl.iitkgp.ac.in/')">NDLI</span>
                    </label>
                </div>
                <div class="child-tab">
                    <label>
                        <span id="pseudolink" class="pseudo-class"
                            onclick="window.open('https://link.springer.com/')">Springer</span>
                    </label>
                </div>
                <div class="child-tab">
                    <label>
                        <span id="pseudolink" class="pseudo-class"
                            onclick="window.open('https://archive.org/')">Internet&nbsp;Archive</span>
                    </label>
                </div>
                <div class="child-tab">
                    <label>
                        <span id="pseudolink" class="pseudo-class"
                            onclick="window.open('https://www.doabooks.org/')">Doa&nbsp;Books</span>
                    </label>
                </div>
            </div>
        </div>
        </a><br><br>
    </div>
    <p id="opac-welc-1">Thank You !</p>
</div>
<!-----------FOOTER SECTION----------->

<?php include('PARTIALS/footer.php') ?>