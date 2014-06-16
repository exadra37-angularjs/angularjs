<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="UTF-8">
    <title><?php echo $metaTitle; ?> - Learning AngularJS</title>
    <link rel="stylesheet" href="<?php echo "{$fullUrl}/{$cssDir}"; ?>/style.css">
</head>
<body>

    <div class="header">
        <header>

            <h1>Angular JS Fundamentals in 7 Lessons</h1>

            <div class="menu">

                <ul class="menu-bar">
                    <li class="menu-field">
                        <a class="menu-link" title="Home Page" href="?l=0">
                            Home
                        </a>
                    </li>
                    <li class="menu-field">
                        <a class="menu-link" title="<?php echo $lessons['fundamentals']['lesson1']['title']; ?>" href="?l=1">
                            Introduction
                        </a>
                    </li>
                    <li class="menu-field">
                        <a class="menu-link" title="<?php echo $lessons['fundamentals']['lesson2']['title']; ?>" href="?l=2">
                            AngularJS Features
                        </a>
                    </li>
                    <li class="menu-field">
                        <a class="menu-link" title="<?php echo $lessons['fundamentals']['lesson3']['title']; ?>" href="?l=3">
                            Directives/Filters/Data Binding
                        </a>
                    </li>
                    <li class="menu-field">
                        <a class="menu-link" title="<?php echo $lessons['fundamentals']['lesson4']['title']; ?>" href="?l=4">
                           Views/Controllers/Scope
                        </a>
                    </li>
                    <li class="menu-field">
                        <a class="menu-link" title="<?php echo $lessons['fundamentals']['lesson5']['title']; ?>" href="?l=5">
                            Modules/Routes/Factories/Services
                        </a>
                    </li>
                    <li class="menu-field">
                        <a class="menu-link" title="<?php echo $lessons['fundamentals']['lesson6']['title']; ?>" href="?l=6">
                            App Demo
                        </a>
                    </li>
                    <li class="menu-field">
                        <a class="menu-link"  title="<?php echo $lessons['fundamentals']['lesson7']['title']; ?>" href="?l=7">
                            Summary/Resources
                        </a>
                    </li>
                </ul>

            </div>

        </header>
    </div>
