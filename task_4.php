<?php 

        $my_tasks = [
            'name' => 'My Tasks',
            'div_class' => 'd-flex mt-2',
            'span class' => 'd-inline-block ml-auto',
            'line' => '130 / 500',
            'progress' => 'progress progress-sm mb-3',
            'progress-bar'=> 'progress-bar bg-fusion-400',
            'role' => 'progressbar',
            'style' => 'width: 65%;',
            'aria-valuenow' => '65',
            'aria-valuemin' => '0',
            'aria-valuemax' => '100',
        ];
        $transfered = [
            'name' => 'Transfered',
            'div_class' => 'd-flex',
            'span class' => 'd-inline-block ml-auto',
            'line' => '440 TB',
            'progress' => 'progress progress-sm mb-3',
            'progress-bar'=> 'progress-bar bg-success-500',
            'role' => 'progressbar',
            'style' => 'width: 34%;',
            'aria-valuenow' => '34',
            'aria-valuemin' => '0',
            'aria-valuemax' => '100',
        ];
        $bugs = [
            'name' => 'Bugs Squashed',
            'div_class' => 'd-flex',
            'span class' => 'd-inline-block ml-auto',
            'line' => '77%',
            'progress' => 'progress progress-sm mb-3',
            'progress-bar'=> 'progress-bar bg-info-400',
            'role' => 'progressbar',
            'style' => 'width: 77%;',
            'aria-valuenow' => '77',
            'aria-valuemin' => '0',
            'aria-valuemax' => '100',
        ];
        $user = [
            'name' => 'User Testing',
            'div_class' => 'd-flex',
            'span class' => 'd-inline-block ml-auto',
            'line' => '7 days',
            'progress' => 'progress progress-sm mb-g',
            'progress-bar'=> 'progress-bar bg-primary-300',
            'role' => 'progressbar',
            'style' => 'width: 84%;',
            'aria-valuenow' => '84',
            'aria-valuemin' => '0',
            'aria-valuemax' => '100',
        ];
    $chart = [$my_tasks, $transfered, $bugs, $user];    
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php foreach ($chart as $k => $massiv): ?>
                            <?php foreach ($massiv as $k_k => $v): ?> 
                            <div class=<? $v['div_class']?>>
                                <? $v['name']?>
                                <span class="<? $v['span class']?>"> <? $v['line']?></span>
                            </div>
                            <div class=<? $v['progress']?>>
                                <div class="<? $v['progress-bar']?>" role="<? $v['role']?>" style="<? $v['style']?>" aria-valuenow="<? $v['aria-valuenow']?>" aria-valuemin="<? $v['aria-valuemin']?>" aria-valuemax="<? $v['aria-valuemax']?>"></div>
                            </div>
                            <?php endforeach; ?> 
                            <?php endforeach; ?>


                           
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
