<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
 7f7k5a-codex/develop-online-store-for-bicycles
$isMain = $APPLICATION->GetCurPage(false) === '/';

main
?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/bicycle-main/css/slick.css"/>
    <link rel="stylesheet" href="/bicycle-main/css/style.css">
</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
<header class="header">
    <div class="container">
        <div class="header__wrp">
            <div class="header__wrp-nav">
                <a href="/">
                    <img src="/bicycle-main/img/goride-logo.svg" alt="logo">
                </a>
                <nav class="header__nav-list-wrp">
                    <ul class="header__nav-list">
                        <li><a href="/catalog/">каталог</a></li>
7f7k5a-codex/develop-online-store-for-bicycles
                        <li><a href="/about/contacts/">контакты</a></li>
                        <li><a href="/about/reviews/">отзывы</a></li>
                        <li><a href="/about/delivery/">доставка и оплата</a></li>

                        <li><a href="/contacts/">контакты</a></li>
                        <li><a href="/reviews/">отзывы</a></li>
                        <li><a href="/delivery/">доставка и оплата</a></li>
main
                    </ul>
                </nav>
                <div class="header__nav-box header__search">
                    <form action="/search/">
                        <label>
                            <input type="search" placeholder="Поиск" name="q">
                            <span class="visually-hidden">поиск</span>
                        </label>
                    </form>
                    <a href="/personal/">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.5 2.8275C0.5 1.54183 1.54183 0.5 2.8275 0.5H19.1725C20.4582 0.5 21.5 1.54183 21.5 2.8275V19.1725C21.5 19.7898 21.2548 20.3818 20.8183 20.8183C20.3818 21.2548 19.7898 21.5 19.1725 21.5H2.8275C2.21021 21.5 1.6182 21.2548 1.18171 20.8183C0.745218 20.3818 0.5 19.7898 0.5 19.1725V2.8275ZM4.4165 18H17.8215C17.0697 16.919 16.0674 16.036 14.9003 15.4265C13.7331 14.817 12.4357 14.4991 11.119 14.5C9.80227 14.4991 8.5049 14.817 7.33773 15.4265C6.17056 16.036 5.16827 16.919 4.4165 18ZM11 12.1667C11.5362 12.1667 12.0672 12.061 12.5626 11.8558C13.058 11.6506 13.5082 11.3499 13.8874 10.9707C14.2665 10.5915 14.5673 10.1414 14.7725 9.64596C14.9777 9.15054 15.0833 8.61956 15.0833 8.08333C15.0833 7.5471 14.9777 7.01612 14.7725 6.52071C14.5673 6.0253 14.2665 5.57515 13.8874 5.19598C13.5082 4.81681 13.058 4.51603 12.5626 4.31083C12.0672 4.10562 11.5362 4 11 4C9.91703 4 8.87842 4.43021 8.11265 5.19598C7.34687 5.96175 6.91667 7.00037 6.91667 8.08333C6.91667 9.1663 7.34687 10.2049 8.11265 10.9707C8.87842 11.7365 9.91703 12.1667 11 12.1667Z" fill="#FFFEFE"/>
                        </svg>
                    </a>
                    <a href="/cart/">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0.700022C0 0.514364 0.0737521 0.336311 0.205032 0.205032C0.336311 0.073752 0.514364 0.0000228882 0.700022 0.0000228882H2.80009C2.95623 0.000043137 3.10789 0.0522926 3.23092 0.148439C3.35396 0.244586 3.44132 0.379109 3.47911 0.530616L4.04612 2.80009H20.3006C20.4034 2.80018 20.5049 2.82291 20.5979 2.86666C20.6909 2.91041 20.7732 2.9741 20.8388 3.05322C20.9044 3.13234 20.9518 3.22493 20.9776 3.32443C21.0034 3.42392 21.007 3.52788 20.988 3.62891L18.888 14.8293C18.858 14.9897 18.7728 15.1346 18.6473 15.2389C18.5218 15.3432 18.3638 15.4003 18.2006 15.4005H5.60017C5.43697 15.4003 5.27895 15.3432 5.15343 15.2389C5.02791 15.1346 4.94278 14.9897 4.91275 14.8293L2.81409 3.64991L2.25407 1.40004H0.700022C0.514364 1.40004 0.336311 1.32629 0.205032 1.19001C0.0737521 1.05373 0 0.875679 0 0.700022ZM7.00022 15.4005C6.25759 15.4005 5.54537 15.6955 5.02026 16.2206C4.49514 16.7457 4.20013 17.4579 4.20013 18.2006C4.20013 18.9432 4.49514 19.6554 5.02026 20.1805C5.54537 20.7056 6.25759 21.0006 7.00022 21.0006C7.74285 21.0006 8.45506 20.7056 8.98018 20.1805C9.50529 19.6554 9.8003 18.9432 9.8003 18.2006C9.8003 17.4579 9.50529 16.7457 8.98018 16.2206C8.45506 15.6955 7.74285 15.4005 7.00022 15.4005ZM16.8005 15.4005C16.0579 15.4005 15.3457 15.6955 14.8206 16.2206C14.2954 16.7457 14.0004 17.4579 14.0004 18.2006C14.0004 18.9432 14.2954 19.6554 14.8206 20.1805C15.3457 20.7056 16.0579 21.0006 16.8005 21.0006C17.5431 21.0006 18.2554 20.7056 18.7805 20.1805C19.3056 19.6554 19.6006 18.9432 19.6006 18.2006C19.6006 17.4579 19.3056 16.7457 18.7805 16.2206C18.2554 15.6955 17.5431 15.4005 16.8005 15.4005Z" fill="#FFFEFE"/>
                        </svg>
                    </a>
                </div>
            </div>
 7f7k5a-codex/develop-online-store-for-bicycles
            <?php if ($isMain): ?>
                <div class="header__wrp-first-screen">
                    <div class="header__desc">
                        <h2>go&ride</h2>
                        <p>велосипеды & аксессуары</p>
                        <a href="/catalog/">магазин</a>
                    </div>
                </div>
                <div class="header__second-screen">
                    <picture>
                        <source srcset="/bicycle-main/img/bycicle-mobile.png" media="(max-width: 1400px)">
                        <source srcset="/bicycle-main/img/bicycle-first-screen.jpg">
                        <img src="/bicycle-main/img/bicycle-first-screen.jpg" alt="bicycle"/>
                    </picture>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>
<?php if(!$isMain): ?>
    <div class="breadcrumbs">
        <div class="container">
            <?php $APPLICATION->ShowNavChain(); ?>
        </div>
    </div>
<?php endif; ?>

            <div class="header__wrp-first-screen">
                <div class="header__desc">
                    <h2>go&ride</h2>
                    <p>велосипеды & аксессуары</p>
                    <a href="/catalog/">магазин</a>
                </div>
            </div>
            <div class="header__second-screen">
                <picture>
                    <source srcset="/bicycle-main/img/bycicle-mobile.png" media="(max-width: 1400px)">
                    <source srcset="/bicycle-main/img/bicycle-first-screen.jpg">
                    <img src="/bicycle-main/img/bicycle-first-screen.jpg" alt="bicycle"/>
                </picture>
            </div>
        </div>
    </div>
</header>
 main
<main>
