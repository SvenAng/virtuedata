
<!--.page -->
<div role="document" class="page">

    <!--.l-header -->
    <header role="banner" class="l-header">

        <!--.l-header-region -->
        <section class="l-header-region row">
            <div class="columns small-10 show-for-small-only">
                <div class="mobile-logo-wrapper">
                    <?php if ($linked_logo): print $linked_logo; endif; ?>
                </div>
            </div>
            
            <div class="columns small-2">
                <div class="menu-hamburgare">
                    <div class="c-hamburger c-hamburger--htx">
                        <a href="#"><span></span></a>
                    </div>
                </div>
            </div>
            
            <div class="columns small-10 show-for-medium-up">
                <?php 
                    global $language;
                    $current_lang = $language->language;
                    global $base_url;
                    global $active_sv;
                    global $active_de;
                    global $active_ca;
                    global $active_es;
                    global $active_en;

                    if ( $current_lang =="sv") {
                      $active_sv = "active";
                    }elseif ($current_lang =="en") {
                      $active_en = "active";
                    }elseif ($current_lang =="de") {
                      $active_de= "active";
                    }elseif ($current_lang =="ca") {
                      $active_ca = "active";
                    }elseif($current_lang =="es"){
                      $active_es = "active";
                    }

                 ?>
                <ul class="language-switch ">
                    <li><a class="lan-item se <?php print $active_sv; ?>" href="/sv"><img src="/sites/all/themes/virtuedata/css/images/se.png"></a></li>
                    <li><a class="lan-item en <?php print $active_en; ?>" href="/"><img src="/sites/all/themes/virtuedata/css/images/en.png"></a></li>
                    <li><a class="lan-item ca <?php print $active_ca; ?>" href="/ca"><img src="/sites/all/themes/virtuedata/css/images/ca.png"></a></li>
                    <li><a class="lan-item es <?php print $active_es; ?>" href="/es"><img src="/sites/all/themes/virtuedata/css/images/es.png"></a></li>
                    <li><a class="lan-item de <?php print $active_de; ?>" href="/de"><img src="/sites/all/themes/virtuedata/css/images/de.png"></a></li>
                </ul>
            </div>
        </section>

        <div id="mobil-navigation" class="mobil-nav">
            <div id="main-navigation-content" class="row">
                <div class="columns small-12 medium-6 medium-centered">
                    <ul class="language-switch show-for-small-only">
                        <li><a class="lan-item se <?php print $active_sv; ?>" href="/sv"><img src="/sites/all/themes/virtuedata/css/images/se.png"></a></li>
                        <li><a class="lan-item en <?php print $active_en; ?>" href="/"><img src="/sites/all/themes/virtuedata/css/images/en.png"></a></li>
                        <li><a class="lan-item ca <?php print $active_ca; ?>" href="/ca"><img src="/sites/all/themes/virtuedata/css/images/ca.png"></a></li>
                        <li><a class="lan-item es <?php print $active_es; ?>" href="/es"><img src="/sites/all/themes/virtuedata/css/images/es.png"></a></li>
                        <li><a class="lan-item de <?php print $active_de; ?>" href="/de"><img src="/sites/all/themes/virtuedata/css/images/de.png"></a></li>
                    </ul>
                    <?php print render($page['main_menu_mobil']); ?>
                </div>
            </div>
        </div>

        <!--/.l-header-region -->


        <!-- Title, slogan and menu -->

        <section class="b-header-wrapper <?php print $alt_header_classes; ?>">
            <div class="b-header row">
                <div class="columns logga show-for-medium-up medium-4 large-4">
                    <?php if ($linked_logo): print $linked_logo; endif; ?>
                </div>
                <div class="columns sponsorloggor small-6 medium-4 large-4">
                    <?php print render($page['sponsorloggor-1']); ?>
                </div>
                <div class="columns sponsorloggor small-6 medium-4 large-4">
                    <?php print render($page['sponsorloggor-2']); ?>
                </div>
            </div>


            <nav id="main-menu" class="navigation show-for-medium-up row" role="navigation">
                
                <?php print render($page['main_menu']); ?>
            </nav> <!-- /#main-menu -->


        </section>

        <!-- End title, slogan and menu -->



    </header>
    <!--/.l-header -->

    <?php if (!empty($page['featured'])): ?>
    <!--.l-featured -->
    <section class="l-featured row">
        <!-- <div class="columns"> -->
        <?php print render($page['featured']); ?>
        <!-- </div> -->
    </section>
    <!--/.l-featured -->
    <?php endif; ?>

    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
        <div class="columns">
            <?php if ($messages): print $messages; endif; ?>
        </div>
    </section>
    <!--/.l-messages -->
    <?php endif; ?>

    <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
        <div class="columns">
            <?php print render($page['help']); ?>
        </div>
    </section>
    <!--/.l-help -->
    <?php endif; ?>

    <!--.l-main -->
    <main role="main" class="row l-main">
        <!-- .l-main region -->
        <div class="<?php print $main_grid; ?> main columns">
            <?php if (!empty($page['highlighted'])): ?>
            <div class="highlight panel callout">
                <?php print render($page['highlighted']); ?>
            </div>
            <?php endif; ?>

            <a id="main-content"></a>

            <?php //if ($breadcrumb): print $breadcrumb; endif; ?>

            <?php if ($title): ?>
            <?php print render($title_prefix); ?>
            <h1 id="page-title" class="title">
                <?php print $title; ?>
            </h1>
            <?php print render($title_suffix); ?>
            <?php endif; ?>

            <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
            <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
            <?php endif; ?>

            <?php if ($action_links): ?>
            <ul class="action-links">
                <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>

            <?php print render($page['content']); ?>
        </div>
        <!--/.l-main region -->

        <?php if (!empty($page['sidebar_first'])): ?>
        <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
            <?php print render($page['sidebar_first']); ?>
        </aside>
        <?php endif; ?>

        <?php if (!empty($page['sidebar_second'])): ?>
        <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
            <?php print render($page['sidebar_second']); ?>
        </aside>
        <?php endif; ?>
        
<!--
        <?php if (!empty($page['content_wide'])): ?>
        <section role="complementary" class="sidebar-second columns small-12">
            <?php print render($page['content_wide']); ?>
        </section>
        <?php endif; ?>
-->
        
    </main>
    
    <!--/.l-main -->
    <?php if (!empty($page['content_wide_1'])): ?>
    <aside class="bottom-row-1">
        <div class="row">
            <section role="complementary" class="columns small-12">
                <?php print render($page['content_wide_1']); ?>
            </section>
        </div>
    </aside>
    <?php endif; ?>
    
    <?php if (!empty($page['content_wide_2'])): ?>
    <aside class="bottom-row-2">
        <div class="row">
            <section role="complementary" class="columns small-12">
                <?php print render($page['content_wide_2']); ?>
            </section>
        </div>
    </aside>
    <?php endif; ?>
    
    
    <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
        <div class="triptych-first medium-4 columns">
            <?php print render($page['triptych_first']); ?>
        </div>
        <div class="triptych-middle medium-4 columns">
            <?php print render($page['triptych_middle']); ?>
        </div>
        <div class="triptych-last medium-4 columns">
            <?php print render($page['triptych_last']); ?>
        </div>
    </section>
    <!--/.triptych -->
    <?php endif; ?>

    <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn'])): ?>
    <!--.footer-columns -->
    <section class="l-footer-columns clearfix" role="contentinfo">
        <div class="row">
            <?php if (!empty($page['footer_firstcolumn'])): ?>
            <div class="footer-first small-12 columns">
                <?php print render($page['footer_firstcolumn']); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_secondcolumn'])): ?>
            <div class="footer-second small-12 columns">
                <?php print render($page['footer_secondcolumn']); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!--/.footer-columns-->
    <?php endif; ?>


    <!--/.l-footer -->
    <a href="#0" class="scroll-top" style="display: inline;">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>

</div>

<!--/.page -->
