<?php include("inc/header.php"); ?>
<body>
<?php include("inc/nav.php"); ?>
<div class="container" id="content">
    <?php if (isset($_GET['name'])) {echo $_GET['name'];} ?>
    <div class="col-sm-3 glickotile" id="tile-team-list">
        <div class="glickotile-content">
            <h4><strong>Liste des équipes</strong></h4>
            <ul class="nav nav-pills nav-stacked"></ul>
        </div>
    </div>
    <div class="col-sm-9" id="team-page">
        <div class="col-sm-12 col-md-5 glickotile" id="tile-team-infos">
            <div class="glickotile-content">
                <h3 id="team-name">TEAM_NAME</h3>
                <img src="" alt="TEAM_LOGO" class="img-circle img-thumbnail" id="team-logo">
                <h3 id="team-rating">TEAM_RATING</h3>
                <h4 id="team-stats">TEAM_STATS</h4>
            </div>
        </div>
        <div class="col-sm-12 col-md-7 glickotile" id="tile-team-players">
            <div class="glickotile-content">
                <h2>Joueurs</h2> <hr />
                <div id="team-players-list"></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-12 glickotile"  id="tile-team-results">
            <div class="glickotile-content">
                <table class="table table-list-search table-team">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Adversaire</th>
                        <th>Resultat</th>
                        <th>Elo</th>
                    </tr>
                    </thead>
                    <tbody id="team-results-table">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include("inc/footer.php"); ?>
</body>
</html>