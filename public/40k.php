<?php include('inc/header.php'); ?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Input</h3>
    </div>
    <div class="panel-body">
        <p>Go into BattleScribe, and click either "Save as HTML" or "Save Roster":</p>
        <img src="/butan.png" alt="BattleScribe Save and Save as HTML buttons" width="300px"/>
        <p>Then put the HTML/ROS/ROSZ file here and wait for a little bit (a few seconds, tops, unless you're a dick and tried a 12,000 point Apoc list, in which case what the fuck):</p>
        <form method="post" enctype="multipart/form-data" action="/post.php">
        <input type="file" name="list">
        <input type="submit" value="pres">
        </form>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Output</h3>
    </div>
    <div class="panel-body">
        <p>You should get a prompt to download a PDF that looks something like this:</p>
        <img src="/output_roster.png" alt="Output data roster example" width="350"/>
        <p>Followed by a bunch of these:</p>
        <img src="/output.png" alt="Output data card example" style="width:100%"/>
    </div>
</div>

<?php include('inc/footer.php'); ?>
