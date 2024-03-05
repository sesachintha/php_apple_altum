<?php defined('ALTUMCODE') || die() ?>
<div class="homepage">
    <div class="index-container bloc-hero">
        <div class="background-decoration">
            <?= $this->views['index_menu'] ?>

            <div class="container">
                <?= \Altum\Alerts::output_alerts() ?>

                <div class="container-intro">
                    <h1 class="anim fadetop">Tout ce que vous voulez, accessible en <span class="surlign">un seul clic !</span></h1>
                    <p class="intro-home anim fadetop">Partagez tout ce que vous créez, organisez et vendez via le lien de votre bio Instagram, TikTok, Twitter, YouTube & co grâce au lien Allinks, gratuit, simple et rapide à configurer.</p>
                    <div class="cta-home anim fadetop delay" data-delay="0.3">
                        <a class="principal" href="<?= url('register') ?>">Créer ma page gratuitement</a>
                        <a href="#nos-utilisateurs">Voir les exemples</a>
                    </div>
                    <div class="visuel-home">
                        <img class="anim fadetop delay" data-delay="0.3" src="<?= ASSETS_FULL_URL ?>images/index/elements/hero/background.png" alt="Plusieurs liens en bio avec Allinks">
                        <img class="anim fadetop delay absolute" data-delay="0.6" src="<?= ASSETS_FULL_URL ?>images/index/elements/hero/phone-3.png" alt="Plusieurs liens en bio avec Allinks">
                        <img class="anim fadetop delay absolute" data-delay=".75" src="<?= ASSETS_FULL_URL ?>images/index/elements/hero/phone-2.png" alt="Plusieurs liens en bio avec Allinks">
                        <img class="anim fadetop delay absolute" data-delay=".85" src="<?= ASSETS_FULL_URL ?>images/index/elements/hero/phone-1.png" alt="Plusieurs liens en bio avec Allinks">
                    </div>
                </div>  

            </div>
        </div>
    </div>

    <div class="index-container bloc-presentation">
        <div class="container">
            <div class="intro-presentation">
                <h2 class="title-gradient anim fadetop">Un seul lien vers tous vos liens !</h2>
                <p class="anim fadetop">Créez facilement votre propre page à mettre en bio : un seul lien vers l'ensemble de vos contenus. Une page unique et hautement personnalisable à mettre dans votre bio Instagram, TikTok, Youtube, ...</p>
            </div>

            <div class="wrapper-items-presentation">

                <div class="item-presentation">
                    <div class="part-left">
                        <div class="content-image">
                            <img class="anim fadetop shadow-left" src="<?= ASSETS_FULL_URL ?>images/index/elements/step-1.png" alt="Créer une page pour sa bio Instagram">
                        </div>
                    </div>
                    <div class="part-right">
                        <div class="content-text">
                            <h3 class="anim fadetop">100% <span class="surlign">personnalisable</span> en seulement <span class="surlign">quelques minutes</span> !</h3>
                            <p class="anim fadetop">Couleurs, titres, photos, liens, textes.. Tout est 100% personnalisable. Avec notre interface simple et intuitive, vous n'aurez besoin que de quelques minutes et d'aucune connaissance informatique pour créer votre page Allinks.</p>
                        </div>
                    </div>
                </div>

                <div class="item-presentation">
                    <div class="part-left">
                        <div class="content-text">
                            <h3 class="anim fadetop">+ de  <span class="surlign">40 blocs prêts à l'emploi</span> !</h3>
                            <p class="anim fadetop">En plus de vos liens, vous pourrez facilement ajouter des images et du texte, vos réseaux sociaux, des avis clients, vos dernières vidéos TikTok, Youtube ou autres, un carrousel d'images, un flux rss, vos publications Instagram, vos produits à vendre, une faq, un formulaire de collecte d'email... Tout sera réuni sur votre page Allinks !</p>
                        </div>
                    </div>
                    <div class="part-right">
                        <div class="content-image">
                            <img class="anim fadetop shadow-right" src="<?= ASSETS_FULL_URL ?>images/index/elements/step-2.png" alt="Des blocs prêts à l'emploi pour créer une page à mettre en bio">
                        </div>
                    </div>
                </div>

                <div class="item-presentation">
                    <div class="part-left">
                        <div class="content-image">
                            <img class="anim fadetop" src="<?= ASSETS_FULL_URL ?>images/index/elements/step-3.png" alt="Des statistiques détaillés pour mieux comprendre vos utilisateurs">
                        </div>
                    </div>
                    <div class="part-right">
                        <div class="content-text">
                            <h3 class="anim fadetop">Des <span class="surlign">statistiques détaillées</span> pour mieux comprendre vos visiteurs</h3>
                            <p class="anim fadetop">Vous aurez accès aux statistiques détaillées de votre page pour comprendre comment vos visiteurs interagissent avec chacun de vos liens, vous permettant d'identifier quels contenus génèrent le plus d'engagement et ainsi vous aider à optimiser votre page selon vos objectifs.</p>
                        </div>
                    </div>
                </div>

            </div>

        

        </div>
    </div>

    <div class="bloc-easy-to-use">
            <div class="wrapper-easy-to-use">
                <div class="intro-presentation item-presentation">
                    <div class="content-text">
                        <h3 class="anim fadetop ">Le meilleur de vos réseaux sociaux <span class="surlign">en un clic</span> !</h3>
                        <p class="anim fadetop">Grâce à nos + de 50 blocs disponibles, vous pourrez intégrer rapidement et facilement le meilleur de vos contenus publiés sur les réseaux sociaux, maintenant disponible en 1 clic, sur votre page Allinks !</p>
                    </div>
                </div>
               <div class="text-center justify-content-center anim fadetop">
                  <div class="col-12">
                     <div class="marquee">
                        <div class="track">
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/instagram.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Instagram</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/threads.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Threads</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/tiktok.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">TikTok</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/youtube.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Youtube</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/spotify.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Spotify</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/soundcloud.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Soundcloud</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/x.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Twitter / X</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/facebook.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Facebook</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/reddit.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Reddit</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/discord.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Discord</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/pinterest.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Pinterest</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/tidal.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Tidal</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/vimeo.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Viméo</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/opensea.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Opensea</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/twitch.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Twitch</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/applemusic.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Apple Music</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="marquee">
                        <div class="track-2">
                          <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/instagram.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Instagram</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/threads.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Threads</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/tiktok.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">TikTok</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/youtube.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Youtube</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/spotify.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Spotify</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/soundcloud.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Soundcloud</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/x.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Twitter / X</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/facebook.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Facebook</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/reddit.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Reddit</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/discord.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Discord</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/pinterest.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Pinterest</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/tidal.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Tidal</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/vimeo.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Viméo</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/opensea.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Opensea</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/twitch.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Twitch</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/applemusic.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Apple Music</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="marquee">
                        <div class="track">
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/instagram.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Instagram</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/threads.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Threads</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/tiktok.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">TikTok</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/youtube.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Youtube</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/spotify.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Spotify</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/soundcloud.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Soundcloud</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/x.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Twitter / X</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/facebook.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Facebook</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/reddit.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Reddit</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/discord.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Discord</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/pinterest.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Pinterest</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/tidal.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Tidal</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/vimeo.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Viméo</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/opensea.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Opensea</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/twitch.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Twitch</span>
                           </a>
                           <a href="#" class="btn btn-grey rounded-pill me-1 mb-3 btn-logo btn-lift">
                              <span><img src="<?= ASSETS_FULL_URL ?>images/index/elements/slider-logo/applemusic.png" alt="logo" class="icon-xs"></span>
                              <span class="ms-1 d-none d-lg-inline-flex">Apple Music</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <?php if(!\Altum\Authentication::check()): ?>
                <form action="<?= url('register' . $data->redirect_append) ?>" method="post" class="mt-4 hp-onboarding anim fadetop delay" data-delay="0.3">
                    <div class="form-group-wrapper">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <?php if(count($data->domains)): ?>
                                    <select name="domain_id" class="appearance-none custom-select form-control input-group-text">
                                        <?php if(settings()->links->main_domain_is_enabled || \Altum\Authentication::is_admin()): ?>
                                            <option value=""><?= remove_url_protocol_from_url(SITE_URL) ?></option>
                                        <?php endif ?>

                                        <?php foreach($data->domains as $row): ?>
                                            <option value="<?= $row->domain_id ?>"><?= remove_url_protocol_from_url($row->url) ?></option>
                                        <?php endforeach ?>
                                    </select>
                                <?php else: ?>
                                    <span class="input-group-text"><?= remove_url_protocol_from_url(SITE_URL) ?></span>
                                <?php endif ?>
                            </div>
                            <input id="onboarding" type="text" placeholder="votre-page" name="onboarding" />
                        </div>
                    </div>
                    <input type="hidden" name="from_home_form" value="1">
                    <input type="submit" value="Lancer gratuitement 🚀">
                </form>
            <?php endif ; ?>

         </div>

    <div class="index-container bloc-demos link-scroll" id="nos-utilisateurs">
        <div class="container">
            <h2 class="title-gradient anim fadetop">Les pages Allinks de nos utilisateurs</h2>
            <div class="intro-presentation anim fadetop">
                <p>Entrepreneurs, créateurs de contenus, photographes, coiffeurs, fleuristes, artistes, commerçants, artisans, coachs sportif, prestataires de services, petites, moyennes ou grandes entreprises... Allinks peut vous aider à améliorer votre présence en ligne totalement gratuitement ! <br /><br /> <span class="bold">Découvrez comment les autres utilisent Allinks :</span></p>
            </div>
        </div>  
    </div>
    <div class="wrapper-slider-demos allinks-slider">
        <div class="slider-demos anim fadetop">
            <div class="item-slider"><a href="/missudette" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/missudette.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/boutique" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-11.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/mespetitsprodiges" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-3.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/kevinragonneau" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-4.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/jigme" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/jigme.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/CarolinePhotography" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-5.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/anna_kloe" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-6.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/mespetitsprodiges" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-10.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/roman.music" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/romanmusic.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/maisonbazerque_fleuriste" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-7.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/boutique" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-12.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/CarolinePhotography" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-8.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/wonderwe" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/wonderwe.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/createur-de-contenu" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-14.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/davidguetta" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/davidguetta.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/maisonbazerque_fleuriste" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-9.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/linda" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-1.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/commbyc" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/commbyc.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/marineauchedephotographie" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-2.png" alt="Lien en bio avec Allinks"></a></div>
            <div class="item-slider"><a href="/photographe" target="_blank"><img data-lazy="<?= ASSETS_FULL_URL ?>images/index/elements/slider/demo-13.png" alt="Lien en bio avec Allinks"></a></div>
        </div>
    </div>

    <div class="bloc-chiffres-cles anim fadetop">
        <div class="index-container">
            <div class="container">
                <div class="items-cle">
                    <div class="item-cle">
                        <div class="content-item anim fadetop delay" data-delay="0.2">
                            <div class="chiffre-cle title-gradient">100%</div>
                            <div class="label">Personnalisable gratuitement</span></div>
                        </div>  
                    </div>
                    <div class="item-cle">
                        <div class="content-item anim fadetop delay" data-delay="0.3">
                            <div class="chiffre-cle title-gradient">+ de <?= nr($data->total_links, 0, true, true) ?></div>
                            <div class="label">Pages de bio créées</div>
                        </div>  
                    </div>
                    <div class="item-cle">
                        <div class="content-item anim fadetop delay" data-delay="0.4">
                            <div class="chiffre-cle title-gradient">+ de <?= nr($data->total_track_links, 0, true, true)?></div>
                            <div class="label">Clics sur vos liens</div>
                        </div>  
                    </div>
                </div>
                <div class="wrapper-cta">
                    <h2 class="anim fadetop title-gradient">Envie de vous lancer ?</h2>
                    <div class="intro-presentation anim fadetop">
                        <p>Ajoutez l'URL de votre page Allinks dans la bio de l'ensemble de vos réseaux sociaux pour présenter tout votre univers, en un clic !</p>
                        <div class="cta-home anim fadetop bottom">
                            <a class="principal" href="<?= url('register') ?>">Créer ma page gratuitement !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="index-container bloc-faq link-scroll" id="faq">
        <div class="container">
            <h2 class="anim fadetop title-gradient">FAQ</h2>
            <div class="wrapper-faq">
                <div class="item-faq anim fadetop">
                    <div class="question toggle-faq">
                        Qu'est-ce qu'Allinks ?
                    </div>
                    <div class="reponse">
                        <a href="https://allinks.click/" target="_blank">allinks.click</a> est un service gratuit permettant de créer une page, un mini site ou une landing page mobile totalement personnalisée à mettre dans sa bio sur les réseaux sociaux pour partagez tout ce que vous créez, organisez et vendez en un seul clic.
                    </div>
                </div>

                <div class="item-faq anim fadetop">
                    <div class="question toggle-faq">
                        Pourquoi utiliser Allinks ?
                    </div>
                    <div class="reponse">
                        Allinks est le service le plus simple et rapide pour lancer sa page de bio gratuitement.
                        Peu importe votre activité, entrepreneurs, créateurs de contenus, photographes, coiffeurs, fleuristes, artistes, commerçants, artisans, coachs sportif, prestataires de services, petites, moyennes ou grandes entreprises... Allinks va pouvoir vous aider à améliorer votre engagement avec vos abonnés et générer de meilleures conversions selon vos objectifs.
                    </div>
                </div>

                <div class="item-faq anim fadetop">
                    <div class="question toggle-faq">
                        Est-ce vraiment gratuit ?
                    </div>
                    <div class="reponse">
                        Oui ! Allinks est 100% gratuit dans sa version de base et le restera pour tous. Nous n'avons aucune option payante supplémentaire et tout est déjà possible par défaut avec cette offre. En contrepartie, pour assurer le service, un petit encart publicitaire non intrusif est disponible tout en bas de votre page et nous vous en remercions. Si vous souhaitez l'enlever, ou supprimer la mention à Allinks en bas de page, alors il est possible de souscrire à <a href="https://www.patreon.com/Allinks" target="_blank">l'un de nos abonnements</a>, sans engagement.
                    </div>
                </div>

                <div class="item-faq anim fadetop">
                    <div class="question toggle-faq">
                        Peut-on supprimer la pub en bas de sa page et la mention à Allinks ?
                    </div>
                    <div class="reponse">
                        Oui ! Il est tout à fait possible d'enlever l'encart publicitaire en bas de sa page ainsi que la phrase "Page créée gratuitement avec Allinks ✨". Pour cela, il faudra souscrire à <a href="https://www.patreon.com/Allinks" target="_blank">l'un de nos abonnements</a> sans engagement.
                    </div>
                </div>

                <!-- <div class="item-faq anim fadetop">
                    <div class="question toggle-faq">
                        Est-il possible d'utiliser son propre nom de domaine ?
                    </div>
                    <div class="reponse anim fadetop">
                        Oui, vous pourrez tout à faire utiliser votre propre nom de domaine instantanément. Pour cela, venez simplement nous contacter via le chat juste à droite ou depuis la page <a href="/contact" target="_blank">contact</a> et nous nous ferons un plaisir de vous accompagner dans sa mise en place.
                    </div>
                </div> -->

                <div class="item-faq anim fadetop">
                    <div class="question toggle-faq">
                        Faut-il savoir coder pour utiliser Allinks ?
                    </div>
                    <div class="reponse anim fadetop">
                         Non, pas du tout ! Notre outil est fait pour être le plus simple et intuitif possible et ne nécéssite aucune connaissance informatique. Vous pourrez créer et personnaliser vos pages à 100% sans aucune connaissance en codage, cependant, si vous avez des questions lors de la réalisation de votre page, vous pourrez contacter notre équipe à tout moment grâce au chat en bas à droite et nous pourrons tout faire avec vous.
                    </div>
                </div>

                <div class="item-faq anim fadetop">
                    <div class="question toggle-faq">
                        Combien de temps faut-il pour lancer sa page ?
                    </div>
                    <div class="reponse anim fadetop">
                         Vous pourrez créer votre page instantannément grâce à nos templates, ou la faire totalement vous même en seulement quelques minutes. Allinks a été développé pour être l'outil le plus simple et intuitif possible, cependant, si vous avez des questions lors de la réalisation de votre page, vous pourrez contacter notre équipe à tout moment par chat et nous pourrons tout faire avec vous.
                    </div>
                </div>

                <div class="item-faq anim fadetop">
                    <div class="question toggle-faq">
                        Aura-t-on accès aux prochaines mises à jour ?
                    </div>
                    <div class="reponse anim fadetop">
                         Bien-sûr ! Tous les comptes recevront toujours automatiquement et gratuitement l'ensemble de nos futures mises à jour, y compris les nouvelles fonctionnalités et les nouveaux blocs que vous pourrez utiliser directement sur votre page Allinks.
                    </div>
                </div>

                <div class="item-faq anim fadetop">
                    <div class="question toggle-faq">
                        Comment obtenir de l'aide ou être accompagné ?
                    </div>
                    <div class="reponse anim fadetop">
                         Si vous avez d'autres questions ou besoin d'aide dans la mise en place de votre page, n'hésitez pas à contacter notre équipe via le chat disponible en bas à droite. Si nous ne sommes pas disponibles, vous pouvez nous écrire via la page <a href="/contact" target="_blank">contact</a> ou <a href="https://calendly.com/allinks/presentation" target="_blank">réserver une présentation</a> avec nous pour que nous puissions vous accompagner comme vous le méritez !
                    </div>
                </div>
                <?php /*
                <p class="intro-presentation anim fadetop">Si vous avez d'autres questions ou besoin d'aide, n'hésitez pas à nous contacter ou réserver une présentation avec nous !</p>
                <div class="cta-home anim fadetop bottom">
                    <a class="principal" href="<?= url('contact') ?>">Nous contacter</a>
                    <a href="https://calendly.com/allinks/presentation" target="_blank">Planifier une démo</a>
                </div>
                */ ?>
            </div>
        </div>
    </div>

<!-- CTA BOTTOM -->
<div class="cta-bottom my-5 py-3 anim fadetop">
    <div class="container">
        <div class="row bg-pattern bg-primary-gradient rounded-3 py-lg-7 py-5 g-0">
            <div class="col-md-8 offset-md-2">
                <div class="text-center position-relative z-1 px-5"
                    >
                    <div class="mb-5">
                        <h3>Prêt à passer votre présence en ligne au niveau supérieur ?</h3>
                        <p>
                          Rejoignez nos utilisateurs en vous inscrivant dès aujourd'hui pour maximiser l'efficacité de votre bio sur les réseaux sociaux.
                        </p>
                    </div>
                    <a href="/register">Créer ma page gratuitement 🚀</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

.cta-bottom h3 {
  margin: 0 0 25px;
  font: normal 43px/47px "Inter Semi Bold";
  color: #FFF;
}

.cta-bottom p {
  font:normal 20px/24px "Inter Light";
  color: #FFF;
}

.cta-bottom .z-1 {
  z-index: 1;
}

.cta-bottom .bg-pattern:after {
  background-image: url(http://allinks.lndo.site/themes/altum/assets/images/index/elements/background-hero.svg);
  background-position: center center;
  background-repeat: no-repeat;
  background-size:cover;
  bottom: 0;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}

.cta-bottom .bg-primary-gradient {
    background: #2980b9;
    position:relative;
    border-radius:25px;
}

.cta-bottom a {
  padding: 15px 25px;
  font: normal 17px/21px "Inter";
  color: #2980b9;
  border: 1px solid #FFF;
  background: #FFF;
  border-radius: 25px;
  text-decoration: none;
  transition: all .15s ease-in;
}

.cta-bottom a:hover {
  box-shadow: 0 0.5em 0.5em -0.4em rgba(0,0,0,0.80);
  transform: translateY(-0.25em);
}

@media screen and (max-width: 769px){
  .cta-bottom .bg-primary-gradient {
    border-radius:0;
  }
  .cta-bottom h3 {
    font:normal 35px/39px "Inter Semi Bold";
  }
  .cta-bottom p {
    font:normal 20px/24px "Inter Light";
  }
}
</style>

</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
      var parallaxImages = document.querySelectorAll(".absolute");

      function updateParallax() {
        parallaxImages.forEach(function(img, index) {
          
          var scrollPosition = window.pageYOffset;
          var imgOffset = img.offsetTop;
          var imgHeight = img.offsetHeight;
          var windowHeight = window.innerHeight;
          var parallaxFactor = 0.1 - (index * 0.1);

          var isVisible = imgOffset > scrollPosition - windowHeight && imgOffset < scrollPosition + windowHeight;
          if (isVisible) {
            var translateY = (scrollPosition - imgOffset) * parallaxFactor;
            img.style.top = translateY + "px";
          }

        });
      }

      window.addEventListener("scroll", updateParallax);
    });
  </script>
