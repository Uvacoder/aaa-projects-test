<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="{$charset}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {if $filename eq "signup"}
<title>Sign Up ― Enact</title>
{else}
<title>{if $kbarticle.title}{$kbarticle.title} ― {/if}{$pagetitle} ― {$companyname}</title>
{/if}
{if $filename eq "clientareaservices"}
<title>Dashboard ― Enact</title>
{else}
<title>{if $kbarticle.title}{$kbarticle.title} ― {/if}{$pagetitle} ― {$companyname}</title>
{/if}
    

    {include file="$template/includes/head.tpl"}

    {$headoutput}

</head>

<body data-phone-cc-input="{$phoneNumberInputStyle}">
<div class="betamsg">Just a heads up: this system is in beta. If you come across any bugs, please email us at <a href="mailto:help@enact.co">help@enact.co</a>.</div>
    {$headeroutput}
    {if $loggedin}
    <section id="header">
        <div class="container">
            <a href="{$WEB_ROOT}/index.php" class="logo"><img
                    src="https://enact.co/img/logo-w.svg"
                    alt="{$companyname}"></a>
            <ul class="top-nav">
            <li>
                    <a href="/">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/cart">
                        Create New Site
                    </a>
                </li>
            </ul>
            <ul class="top-nav navbar-right">
            {if $languagechangeenabled && count($locales) > 1}
                <li>
                    <a href="#" class="choose-language" data-toggle="popover" id="languageChooser">
                        {$activeLocale.localisedName}
                        <b class="caret"></b>
                    </a>
                    <div id="languageChooserContent" class="hidden">
                        <ul>
                            {foreach $locales as $locale}
                            <li>
                                <a href="{$currentpagelinkback}language={$locale.language}">{$locale.localisedName}</a>
                            </li>
                            {/foreach}
                        </ul>
                    </div>
                </li>
                {/if}
                {if $loggedin}
                <li>
                    <a href="#" data-toggle="popover" id="accountNotifications" data-placement="bottom">
                        <i class="fas fa-bell fa-lg"></i>
                        {if count($clientAlerts) > 0}
                        <span class="label label-info">{lang key='notificationsnew'}</span>
                        {/if}
                        <b class="caret"></b>
                    </a>
                    <div id="accountNotificationsContent" class="hidden">
                        <ul class="client-alerts">
                            {foreach $clientAlerts as $alert}
                            <li>
                                <a href="{$alert->getLink()}">
                                    <i
                                        class="fas fa-fw fa-{if $alert->getSeverity() == 'danger'}exclamation-circle{elseif $alert->getSeverity() == 'warning'}exclamation-triangle{elseif $alert->getSeverity() == 'info'}info-circle{else}check-circle{/if}"></i>
                                    <div class="message">{$alert->getMessage()}</div>
                                </a>
                            </li>
                            {foreachelse}
                            <li class="none">
                                {$LANG.notificationsnone}
                            </li>
                            {/foreach}
                        </ul>
                    </div>
                </li>
                {/if}
                {if $loggedin}
                <li menuitemname="Account" class="dropdown account" id="Secondary_Navbar-Account">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Howdy, {$clientsdetails.firstname}!
                        &nbsp;<b class="caret"></b> </a>
                    <ul class="dropdown-menu">
                        <li menuitemname="Account and Security" id="Secondary_Navbar-Account-Edit_Account_Details">
                            <a href="/beta?action=details">
                                Account &amp; Security
                            </a>
                        </li>
                        <li menuitemname="Contacts/Sub-Accounts" id="Secondary_Navbar-Account-Contacts_Sub-Accounts">
                            <a href="/beta?action=invoices">
                                Billing
                            </a>
                        </li>
                        <li menuitemname="Divider" class="nav-divider" id="Secondary_Navbar-Account-Divider">
                            <a href="//help.enact.co">
                                Help
                            </a>
                        </li>
                        <li menuitemname="Logout" id="Secondary_Navbar-Account-Logout">
                            <a href="/logout.php">
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </li>
                {/if}
            </ul>
        </div>
    </section>

{include file="$template/includes/botmenu.tpl" sidebar=$primarySidebar}
    {if $templatefile == 'homepage'}
    <section id="home-banner">
        <div class="container text-center">
            {if $registerdomainenabled || $transferdomainenabled}
            <h2>{$LANG.homebegin}</h2>
            <form method="post" action="domainchecker.php" id="frmDomainHomepage">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" name="domain" placeholder="{$LANG.exampledomain}"
                                autocapitalize="none" data-toggle="tooltip" data-placement="left" data-trigger="manual"
                                title="{lang key='orderForm.required'}" />
                            <span class="input-group-btn">
                                {if $registerdomainenabled}
                                <input type="submit" class="btn search{$captcha->getButtonClass($captchaForm)}"
                                    value="{$LANG.search}" />
                                {/if}
                                {if $transferdomainenabled}
                                <input type="submit" name="transfer"
                                    class="btn transfer{$captcha->getButtonClass($captchaForm)}"
                                    value="{$LANG.domainstransfer}" />
                                {/if}
                            </span>
                        </div>
                    </div>
                </div>

                {include file="$template/includes/captcha.tpl"}
            </form>
            {else}
            <h2>{$LANG.doToday}</h2>
            {/if}
        </div>
    </section>
    <div class="home-shortcuts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs text-center">
                    <p class="lead">
                        {$LANG.howcanwehelp}
                    </p>
                </div>
                <div class="col-sm-12 col-md-8">
                    <ul>
                        {if $registerdomainenabled || $transferdomainenabled}
                        <li>
                            <a id="btnBuyADomain" href="domainchecker.php">
                                <i class="fas fa-globe"></i>
                                <p>
                                    {$LANG.buyadomain} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        {/if}
                        <li>
                            <a id="btnOrderHosting" href="cart.php">
                                <i class="far fa-hdd"></i>
                                <p>
                                    {$LANG.orderhosting} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnMakePayment" href="beta">
                                <i class="fas fa-credit-card"></i>
                                <p>
                                    {$LANG.makepayment} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnGetSupport" href="submitticket.php">
                                <i class="far fa-envelope"></i>
                                <p>
                                    {$LANG.getsupport} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {/if}
{/if}
    {include file="$template/includes/verifyemail.tpl"}
{if $loggedin}
    <section id="main-body">
        <div class="container{if $skipMainBodyContainer}-fluid without-padding{/if}">
            <div class="row">

                {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
                {if $primarySidebar->hasChildren() && !$skipMainBodyContainer}
                <div class="col-sm-12">
                    {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline
                    showbreadcrumb=true}
                </div>
                {/if}
                {/if}
                <!-- Container for main page display content -->
                <div
                    class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-sm-12 pull-md-right{else}col-xs-12{/if} main-content">
                    {if !$primarySidebar->hasChildren() && !$showingLoginPage && !$inShoppingCart && $templatefile !=
                    'homepage' && !$skipMainBodyContainer}
                    {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline
                    showbreadcrumb=true}
                    {/if}
                    {else}
                    <section id="login-body">
                    {/if}
