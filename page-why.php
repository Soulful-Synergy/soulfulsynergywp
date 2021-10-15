<?php get_header(); ?>

<div id="hero" style="background-image: url('<?php echo get_theme_mod("why_hero_image"); ?>');">
            <div class="tint">
                <div id="why-hero" class="hero-text-container">
                    <h1><?php echo get_theme_mod("why_page_hero_intro"); ?></h1>
                    <h3>
                        <?php echo get_theme_mod('why_page_hero_text'); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div id="why" class="why-soulful-synergy">
            <div class="header">
                <h1><?php echo get_theme_mod("why_section_title_1"); ?></h1>
            </div>
            <div class="intro">
                <img src="<?php echo get_theme_mod("why_banner_image_1"); ?>" />
                <div class="introduction">
                    <p><?php echo get_theme_mod("why_intro_text_1"); ?></p>
                </div>
            </div>
        </div>
        <div id="issues" class="why-soulful-synergy">
            <div class="header">
                <h1><?php echo get_theme_mod("why_section_title_2"); ?></h1>
            </div>
            <div class="intro">
                <img src="<?php echo get_theme_mod("why_banner_image_2"); ?>" />
                <div class="introduction">
                    <p><?php echo get_theme_mod("why_intro_text_2"); ?></p>
                </div>
            </div>
        </div>
        <div id="connections" class="why-soulful-synergy">
            <div class="header">
                <h1><?php echo get_theme_mod("why_section_title_3"); ?></h1>
            </div>
            <div class="intro">
                <img src="<?php echo get_theme_mod("why_banner_image_3"); ?>" />
                <div class="introduction">
                    <p><?php echo get_theme_mod("why_intro_text_3"); ?></p>
                </div>
            </div>
        </div>
        <div id="network" class="why-soulful-synergy">
            <div class="header">
                <h1><?php echo get_theme_mod("why_section_title_4"); ?></h1>
            </div>
            <div class="intro">
                <img src="<?php echo get_theme_mod("why_banner_image_4"); ?>" />
                <div class="introduction">
                    <p><?php echo get_theme_mod("why_intro_text_4"); ?></p>
                </div>
            </div>
        </div>
        <script>
            const why = document.getElementById('why');
            const whyOpen = document
                .getElementById('why')
                .getElementsByClassName('introduction')[0]
                .getElementsByClassName('mainOpen')[0];
            const whyClose = document
                .getElementById('why')
                .getElementsByClassName('main-body')[0]
                .getElementsByClassName('mainClose')[0];

            const connections = document.getElementById('connections');
            const connectionsOpen = document
                .getElementById('connections')
                .getElementsByClassName('introduction')[0]
                .getElementsByClassName('mainOpen')[0];
            const connectionsClose = document
                .getElementById('connections')
                .getElementsByClassName('main-body')[0]
                .getElementsByClassName('mainClose')[0];

            const network = document.getElementById('network');
            const networkOpen = document
                .getElementById('network')
                .getElementsByClassName('introduction')[0]
                .getElementsByClassName('mainOpen')[0];
            const networkClose = document
                .getElementById('network')
                .getElementsByClassName('main-body')[0]
                .getElementsByClassName('mainClose')[0];

            //Issue Cards and Card Buttons
            const issues = document
                .getElementById('issues')
                .getElementsByClassName('issue-card');
            const card1Open = issues[0]
                .getElementsByClassName('introduction')[0]
                .getElementsByTagName('button')[0];
            const card1Close = issues[0]
                .getElementsByClassName('sub-body')[0]
                .getElementsByTagName('button')[0];

            const card2Open = issues[1]
                .getElementsByClassName('introduction')[0]
                .getElementsByTagName('button')[0];
            const card2Close = issues[1]
                .getElementsByClassName('sub-body')[0]
                .getElementsByTagName('button')[0];

            const card3Open = issues[2]
                .getElementsByClassName('introduction')[0]
                .getElementsByTagName('button')[0];
            const card3Close = issues[2]
                .getElementsByClassName('sub-body')[0]
                .getElementsByTagName('button')[0];

            //Stakeholder Cards and Card Buttons
            const stakeholders = document
                .getElementById('network')
                .getElementsByClassName('collaboration-card');
            const stakeholder1Open = stakeholders[0]
                .getElementsByClassName('introduction')[0]
                .getElementsByTagName('button')[0];
            const stakeholder1Close = stakeholders[0]
                .getElementsByClassName('sub-body')[0]
                .getElementsByTagName('button')[0];

            const stakeholder2Open = stakeholders[1]
                .getElementsByClassName('introduction')[0]
                .getElementsByTagName('button')[0];
            const stakeholder2Close = stakeholders[1]
                .getElementsByClassName('sub-body')[0]
                .getElementsByTagName('button')[0];

            const stakeholder3Open = stakeholders[2]
                .getElementsByClassName('introduction')[0]
                .getElementsByTagName('button')[0];
            const stakeholder3Close = stakeholders[2]
                .getElementsByClassName('sub-body')[0]
                .getElementsByTagName('button')[0];

            const stakeholder4Open = stakeholders[3]
                .getElementsByClassName('introduction')[0]
                .getElementsByTagName('button')[0];
            const stakeholder4Close = stakeholders[3]
                .getElementsByClassName('sub-body')[0]
                .getElementsByTagName('button')[0];

            //Control for main displays
            whyOpen.addEventListener('click', () => {
                mainHandler(why);
            });

            whyClose.addEventListener('click', () => {
                mainHandler(why);
            });

            connectionsOpen.addEventListener('click', () => {
                mainHandler(connections);
            });

            connectionsClose.addEventListener('click', () => {
                mainHandler(connections);
            });

            networkOpen.addEventListener('click', () => {
                mainHandler(network);
            });

            networkClose.addEventListener('click', () => {
                mainHandler(network);
            });

            //Card Controls for Issues
            card1Open.addEventListener('click', () => {
                cardHandler(issues[0]);
            });

            card1Close.addEventListener('click', () => {
                cardHandler(issues[0]);
            });

            card2Open.addEventListener('click', () => {
                cardHandler(issues[1]);
            });

            card2Close.addEventListener('click', () => {
                cardHandler(issues[1]);
            });

            card3Open.addEventListener('click', () => {
                cardHandler(issues[2]);
            });

            card3Close.addEventListener('click', () => {
                cardHandler(issues[2]);
            });

            //Stakeholder Cards
            stakeholder1Open.addEventListener('click', () => {
                cardHandler(stakeholders[0]);
            });
            stakeholder1Close.addEventListener('click', () => {
                cardHandler(stakeholders[0]);
            });

            stakeholder2Open.addEventListener('click', () => {
                cardHandler(stakeholders[1]);
            });
            stakeholder2Close.addEventListener('click', () => {
                cardHandler(stakeholders[1]);
            });

            stakeholder3Open.addEventListener('click', () => {
                cardHandler(stakeholders[2]);
            });
            stakeholder3Close.addEventListener('click', () => {
                cardHandler(stakeholders[2]);
            });

            stakeholder4Open.addEventListener('click', () => {
                cardHandler(stakeholders[3]);
            });
            stakeholder4Close.addEventListener('click', () => {
                cardHandler(stakeholders[3]);
            });

            //Display handlers
            function mainHandler(event) {
                let section = event;
                let button = section
                    .getElementsByClassName('introduction')[0]
                    .getElementsByTagName('button')[0];
                let body = section.getElementsByClassName('main-body')[0];
                if (button) {
                    body.classList.toggle('open');
                    button.classList.toggle('open');
                }
            }

            function cardHandler(event) {
                let section = event;
                let button = section
                    .getElementsByClassName('introduction')[0]
                    .getElementsByTagName('button')[0];
                let body = section.getElementsByClassName('sub-body')[0];
                if (button) {
                    body.classList.toggle('open');
                    button.classList.toggle('open');
                }
            }
        </script>

<?php get_footer(); ?>