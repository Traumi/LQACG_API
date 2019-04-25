<!-- PENTA -->
<?php 
    for($i = 0 ; $i < $level_max ; ++$i){
        if($levels_values["penta"][$i] > $lol_profil['PENTA']){
            $i -= 1;
            break;
        }
    }
    ($i == $level_max) ? $i = $level_max-1 : null;
    ($i != -1) ? $level_value = $levels_values["penta"][$i] : $level_value = 0;
    $level=getTrophyLevel($i);
    $nlvl=getTrophyLevelName($i);
    if($i >= 0){
?>
<div class="col-6 col-sm-4 col-md-3 col-xl-2  <?php echo $level; ?>">
    <svg viewbox="0 0 1000 1000" style="width:100%;">
        <defs>
            <filter id="dropshadow" height="130%">
                <feGaussianBlur in="SourceGraphic" stdDeviation="12"/> <!-- stdDeviation is how much to blur -->
                <feOffset dx="0" dy="0" result="offsetblur"/> <!-- how much to offset -->
                <feComponentTransfer>
                    <feFuncA type="linear" slope="1"/> <!-- slope is the opacity of the shadow -->
                </feComponentTransfer>
                <feMerge> 
                    <feMergeNode/> <!-- this contains the offset blurred image -->
                    <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
                </feMerge>
            </filter>
        </defs>
        <circle cx="500" cy="400" r="390" stroke="black" stroke-width="10" fill="transparent"/>
        <image xlink:href="./images/pentakill/<?php echo $level; ?>.png" x="100" y="65" height="300" width="800" style="filter:url(#dropshadow)" />
        <?php display_stars($i); ?>
        <text x="500" y="625" text-anchor="middle" font-weight="800" font-size="125"><?php echo $level_value; ?></text>
        <text x="500" y="725" text-anchor="middle" font-weight="600" font-size="75"><?php echo $lol_profil['PENTA']; ?></text>
        <text x="500" y="900" text-anchor="middle" font-weight="600" font-size="100">Penta : <?php echo $nlvl ?></text>
        <text x="500" y="990" text-anchor="middle" font-weight="600" font-size="60">Prochain niveau : <?php echo $levels_values["penta"][$i+1] ?></text>
    </svg>
</div>
<?php } ?>
<!-- QUADRA -->
<?php 
    for($i = 0 ; $i < $level_max ; ++$i){
        if($levels_values["quadra"][$i] > $lol_profil['QUADRA']){
            $i -= 1;
            break;
        }
    }
    ($i == $level_max) ? $i = $level_max-1 : null;
    ($i != -1) ? $level_value = $levels_values["quadra"][$i] : $level_value = 0;
    $level=getTrophyLevel($i);
    $nlvl=getTrophyLevelName($i);
    if($i >= 0){
?>
<div class="col-6 col-sm-4 col-md-3 col-xl-2  <?php echo $level; ?>">
    <svg viewbox="0 0 1000 1000" style="width:100%;">
        <defs><filter id="dropshadow" height="130%"><feGaussianBlur in="SourceGraphic" stdDeviation="12"/><feOffset dx="0" dy="0" result="offsetblur"/><feComponentTransfer><feFuncA type="linear" slope="1"/></feComponentTransfer><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>
        <circle cx="500" cy="400" r="390" stroke="black" stroke-width="10" fill="transparent"/>
        <image xlink:href="./images/quadrakill/<?php echo $level; ?>.png" x="100" y="65" height="300" width="800" style="filter:url(#dropshadow)" /> 
        <?php display_stars($i); ?>
        <text x="500" y="625" text-anchor="middle" font-weight="800" font-size="125"><?php echo $level_value; ?></text>
        <text x="500" y="725" text-anchor="middle" font-weight="600" font-size="75"><?php echo $lol_profil['QUADRA']; ?></text>
        <text x="500" y="900" text-anchor="middle" font-weight="600" font-size="100">Quadruplés : <?php echo $nlvl ?></text>
        <text x="500" y="990" text-anchor="middle" font-weight="600" font-size="60">Prochain niveau : <?php echo $levels_values["quadra"][$i+1] ?></text>
    </svg>
</div>
<?php } ?>
<!-- TRIPLE -->
<?php 
    for($i = 0 ; $i < $level_max ; ++$i){
        if($levels_values["triple"][$i] > $lol_profil['TRIPLE_KILL']){
            $i -= 1;
            break;
        }
    }
    ($i == $level_max) ? $i = $level_max-1 : null;
    ($i != -1) ? $level_value = $levels_values["triple"][$i] : $level_value = 0;
    $level=getTrophyLevel($i);
    $nlvl=getTrophyLevelName($i);
    if($i >= 0){
?>
<div class="col-6 col-sm-4 col-md-3 col-xl-2 <?php echo $level; ?>">
    <svg viewbox="0 0 1000 1000" style="width:100%;">
        <defs><filter id="dropshadow" height="130%"><feGaussianBlur in="SourceGraphic" stdDeviation="12"/><feOffset dx="0" dy="0" result="offsetblur"/><feComponentTransfer><feFuncA type="linear" slope="1"/></feComponentTransfer><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>
        <circle cx="500" cy="400" r="390" stroke="black" stroke-width="10" fill="transparent"/>
        <image xlink:href="./images/triplekill/<?php echo $level; ?>.png" x="100" y="65" height="300" width="800" style="filter:url(#dropshadow)" /> 
        <?php display_stars($i); ?>
        <text x="500" y="625" text-anchor="middle" font-weight="800" font-size="125"><?php echo $level_value; ?></text>
        <text x="500" y="725" text-anchor="middle" font-weight="600" font-size="75"><?php echo $lol_profil['TRIPLE_KILL']; ?></text>
        <text x="500" y="900" text-anchor="middle" font-weight="600" font-size="100">Triplés : <?php echo $nlvl ?></text>
        <text x="500" y="990" text-anchor="middle" font-weight="600" font-size="60">Prochain niveau : <?php echo $levels_values["triple"][$i+1] ?></text>
    </svg>
</div>
<?php } ?>
<!-- DOUBLE -->
<?php 
    for($i = 0 ; $i < $level_max ; ++$i){
        if($levels_values["double"][$i] > $lol_profil['DOUBLE_KILL']){
            $i -= 1;
            break;
        }
    }
    ($i == $level_max) ? $i = $level_max-1 : null;
    ($i != -1) ? $level_value = $levels_values["double"][$i] : $level_value = 0;
    $level=getTrophyLevel($i);
    $nlvl=getTrophyLevelName($i);
    if($i >= 0){
?>
<div class="col-6 col-sm-4 col-md-3 col-xl-2 <?php echo $level; ?>">
    <svg viewbox="0 0 1000 1000" style="width:100%;">
        <defs><filter id="dropshadow" height="130%"><feGaussianBlur in="SourceGraphic" stdDeviation="12"/><feOffset dx="0" dy="0" result="offsetblur"/><feComponentTransfer><feFuncA type="linear" slope="1"/></feComponentTransfer><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>
        <circle cx="500" cy="400" r="390" stroke="black" stroke-width="10" fill="transparent"/>
        <image xlink:href="./images/doublekill/<?php echo $level; ?>.png" x="100" y="65" height="300" width="800" style="filter:url(#dropshadow)" /> 
        <?php display_stars($i); ?>
        <text x="500" y="625" text-anchor="middle" font-weight="800" font-size="125"><?php echo $level_value; ?></text>
        <text x="500" y="725" text-anchor="middle" font-weight="600" font-size="75"><?php echo $lol_profil['DOUBLE_KILL']; ?></text>
        <text x="500" y="900" text-anchor="middle" font-weight="600" font-size="100">Doublés : <?php echo $nlvl ?></text>
        <text x="500" y="990" text-anchor="middle" font-weight="600" font-size="60">Prochain niveau : <?php echo $levels_values["double"][$i+1] ?></text>
    </svg>
</div>
<?php } ?>