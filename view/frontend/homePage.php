<?php ob_start(); ?>



<section id="banner" class="display-flex">
    <div class="banner-text">
        <h2>Web designer<h2>
        <h1>François Bergerot</h1>
    </div>
    <!--<img src="./public/images/banner.jpg" alt="banner"/>
    <div class="banner-calque"></div>-->
    <svg width="100%" viewBox="0 0 1011 72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
    <g transform="matrix(0.975486,0,0,1.10468,-174.99,-353.082)">
        <g id="Plan-de-travail1" serif:id="Plan de travail1">
            <path d="M933.918,357.261C950.957,344.058 960.863,330.304 986.194,330.304C1018.66,330.304 1055.15,346.313 1072.29,366.607C1083.69,351.417 1203.84,366.875 1215.79,384.801C1214.77,384.801 187.25,384.82 179.388,384.801C179.388,361.439 214.721,346.492 251,351.562C267.107,353.812 281.339,359.668 291.896,367.557C311.431,338.832 355.848,329.408 397,347C412.021,353.421 424.741,362.645 434.485,373.421C455.67,364.57 482.916,357.558 513,354C549.603,349.671 583.313,351.292 607.808,357.392C613.303,355.201 619.268,354 625.5,354C637.048,354 647.678,358.123 656.102,365.031C670.104,351.628 691.961,343 716.5,343C742.015,343 764.629,352.327 778.531,366.652C796.729,359.268 818.09,347.686 841.665,344.681C874.346,340.516 910.472,351.085 933.918,357.261Z" style="fill:rgb(255,255,255);"/>
        </g>
    </g>
</svg>

</section>


<section id="websites">
    <h2>Les sites</h2>
    <img style="max-width:350px" src="./public/images/WSevergreen.jpg" alt="site Evergreen"/>
    <img style="max-width:350px" src="./public/images/WSRobJanoff.jpg" alt="site culture design: Rob Janoff"/>
    <img style="max-width:350px" src="./public/images/WSlaPiscine.jpg" alt="site de la piscine"/>
</section>

<section id="languages">
    <h2>Les Langages</h2>
    <img style="max-width:350px" src="./public/images/htmlcss.png" alt="banner"/>
</section>

<section id="tool">
    <h2>Les outils</h2>
    <img style="max-width:350px" src="./public/images/ACCphotoshop.jpg" alt="photoshop"/>
    <img style="max-width:350px" src="./public/images/ACCillustrator.jpg" alt="illustrator"/>
    <img style="max-width:350px" src="./public/images/ACCanimate.jpg" alt="animate"/>
    <img style="max-width:350px" src="./public/images/CMSwordpress.jpg" alt="wordpress"/>
    <img style="max-width:350px" src="./public/images/SWbootstrap.jpg" alt="bootstrap"/>
    <img style="max-width:350px" src="./public/images/SWuikit.jpg" alt="uikit"/>
    <img style="max-width:350px" src="./public/images/SWanalytics.jpg" alt="analytics"/>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>