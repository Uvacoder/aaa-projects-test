    <section id="main-menu">

        {foreach $sidebar as $item}
        <div menuItemName="{$item->getName()}"
            class="{if $item->getClass()}{$item->getClass()}{else}panel-sidebar{/if}{if $item->getExtra('mobileSelect') and $item->hasChildren()} hidden-sm hidden-xs{/if}"
            {if $item->getAttribute('id')} id="{$item->getAttribute('id')}"{/if}>
            <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    {if $item->hasChildren()}
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="primary-nav">
                        <ul class="nav navbar-nav">
                        </ul>

                        <ul class="nav navbar-nav navbar-right">

                            {foreach $item->getChildren() as $childItem}
                            {if $childItem->getUri()}
                            <li menuitemname="{$childItem->getName()}" {if $childItem->isDisabled()} disabled{/if}{if
                                $childItem->getClass()} {$childItem->getClass()}{/if}{if $childItem->isCurrent()}
                                active{/if}"{if $childItem->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if
                                $childItem->getAttribute('target')} target="{$childItem->getAttribute('target')}"{/if}
                                id="{$childItem->getId()}">
                                <a href="{$childItem->getUri()}">
                                    {$childItem->getLabel()}
                                </a>
                            </li>
                            {else}
                            <li menuitemname="{$childItem->getName()}" {if $childItem->isDisabled()} disabled{/if}{if
                                $childItem->getClass()} {$childItem->getClass()}{/if}{if $childItem->isCurrent()}
                                active{/if}"{if $childItem->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if
                                $childItem->getAttribute('target')} target="{$childItem->getAttribute('target')}"{/if}
                                id="{$childItem->getId()}">
                                <a href="{$childItem->getUri()}">
                                    {$childItem->getLabel()}
                                </a>
                            </li>
                            {/if}
                            {/foreach}
                    </div>
                    {/if}
                </div>
                {if $item->getExtra('mobileSelect') and $item->hasChildren()}
                {* Mobile Select only supports dropdown menus *}
                <div class="panel hidden-lg hidden-md {if $item->getClass()}{$item->getClass()}{else}panel-default{/if}"
                    {if $item->getAttribute('id')} id="{$item->getAttribute('id')}"{/if}>
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {if $item->hasIcon()}<i class="{$item->getIcon()}"></i>&nbsp;{/if}
                            {$item->getLabel()}
                            {if $item->hasBadge()}&nbsp;<span class="badge">{$item->getBadge()}</span>{/if}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <select class="form-control" onchange="selectChangeNavigate(this)">
                                {foreach $item->getChildren() as $childItem}
                                <option menuItemName="{$childItem->getName()}" value="{$childItem->getUri()}"
                                    class="list-group-item" {if $childItem->isCurrent()}selected="selected"{/if}>
                                    {$childItem->getLabel()}
                                    {if $childItem->hasBadge()}({$childItem->getBadge()}){/if}
                                </option>
                                {/foreach}
                            </select>
                        </form>
                    </div>
                    {if $item->hasFooterHtml()}
                    <div class="panel-footer">
                        {$item->getFooterHtml()}
                    </div>
                    {/if}
                </div>
                {/if}
                {/foreach}
        </div><!-- /.navbar-collapse -->
        </div>
        </nav>

    </section>