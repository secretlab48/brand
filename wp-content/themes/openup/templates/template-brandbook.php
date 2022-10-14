<?php /* Template Name: Brandbook Elements */

if (!defined('ABSPATH')) exit;

get_header();

?>

    <main id="main" role="main" tabindex="-1">

        <section class="s-brandbook u-color-primary-dark-blue">
            <div class="container">
                <div class="s-brandbook__nav">
                    <h1 class="c-intro__title">Elements & guidelines</h1>
                    <ul class="s-brandbook__list">
                        <li class="s-brandbook__list-item">
                            <a class="anchor-link" href="#logo">Logo</a>
                        </li>
                        <li class="s-brandbook__list-item">
                            <a class="anchor-link" href="#colors">Colors</a>
                        </li>
                        <li class="s-brandbook__list-item">
                            <a href="#typography">Typography</a>
                        </li>
                        <li class="s-brandbook__list-item">
                            <a href="#tone-of-voice">Tone of voice</a>
                        </li>
                        <li class="s-brandbook__list-item">
                            <a href="#images">Images</a>
                        </li>
                        <li class="s-brandbook__list-item">
                            <a href="#illustrations">Illustrations</a>
                        </li>
                        <li class="s-brandbook__list-item">
                            <a href="#icons">Icons</a>
                        </li>
                    </ul>
                </div>
                <div class="s-brandbook__content">
                    <h2 class="s-brandbook__title" id="colors">Colors</h2>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="row s-brandbook__colors">
                                <div class="col-6">
                                    <strong>Primary green</strong>
                                    <span>#00A885</span>Illustrations
                                </div>
                                <div class="col-6">
                                    <strong>Secondary green</strong>
                                    <span>#0C8E77</span>
                                </div>
                                <div class="col-6">
                                    <strong>Primary blue</strong>
                                    <span>#48B4FF</span>
                                </div>
                                <div class="col-6">
                                    <strong>Secondary blue</strong>
                                    <span>#3BA5EE</span>
                                </div>
                                <div class="col-6">
                                    <strong>Primary dark blue</strong>
                                    <span>#152361</span>
                                </div>
                                <div class="col-6">
                                    <strong>Secondary dark blue</strong>
                                    <span>#0E1949</span>
                                </div>
                                <div class="col-6">
                                    <strong>Primary skin</strong>
                                    <span>#FFF8ED</span>
                                </div>
                                <div class="col-6">
                                    <strong>Secondary skin</strong>
                                    <span>#FFFDFB</span>
                                </div>
                                <div class="col-6">
                                    <strong>White</strong>
                                    <span>#FFFFFF</span>
                                </div>
                                <div class="col-6">
                                    <strong>Black</strong>
                                    <span>#333333</span>
                                </div>
                                <div class="col-6">
                                    <strong>Secondary blue</strong>
                                    <span>#3BA5EE</span>
                                </div>
                                <div class="col-6">
                                    <strong>Secondary blue</strong>
                                    <span>#3BA5EE</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 s-brandbook__color-box">
                            <div class="row">
                                <div class="s-brandbook__color-square">
                                    <div class="u-bg-primary-green"></div>
                                </div>
                                <div class="s-brandbook__color-square">
                                    <div class="u-bg-primary-blue"></div>
                                </div>
                                <div class="s-brandbook__color-square">
                                    <div class="u-bg-primary-dark-blue"></div>
                                </div>
                                <div class="s-brandbook__color-square">
                                    <div class="u-bg-primary-skin"></div>
                                </div>
                                <div class="s-brandbook__color-square">
                                    <div class="u-bg-primary-white s-brandbook__color-square-border"></div>
                                </div>
                                <div class="s-brandbook__color-square">
                                    <div class="u-bg-secondary-green"></div>
                                </div>
                                <div class="s-brandbook__color-square">
                                    <div class="u-bg-secondary-blue"></div>
                                </div>
                                <div class="s-brandbook__color-square">
                                    <div class="u-bg-secondary-dark-blue"></div>
                                </div>
                                <div class="s-brandbook__color-square">
                                    <div class="u-bg-secondary-skin s-brandbook__color-square-border"></div>
                                </div>
                                <div class="s-brandbook__color-square">
                                    <div class="u-bg-primary-black"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-brandbook__content">
                    <h2 class="s-brandbook__title" id="logo">Logo</h2>
                    <div class="row s-brandbook__content-box">
                        <div class="col-12 col-lg-6">
                            <p>OpenUp logo without and with pay-off on white background</p>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-6">
                            <div class="row">
                                <div class="col-12 col-sm-6 s-brandbook__logo">
                                    <div class="s-brandbook__logo-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/openup_logo.png"
                                             alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__logo">
                                    <div class="s-brandbook__logo-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/logo-second.png"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row s-brandbook__content-box">
                        <div class="col-12 col-lg-6">
                            <p>OpenUp logo without and with pay-off on skin colored background</p>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-6">
                            <div class="row">
                                <div class="col-12 col-sm-6 s-brandbook__logo">
                                    <div class="s-brandbook__logo-item">
                                        <div class="u-bg-primary-white"></div>
                                        <div class="u-bg-secondary-skin"></div>
                                        <div class="u-bg-primary-skin"></div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/openup_logo.png"
                                             alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__logo">
                                    <div class="s-brandbook__logo-item">
                                        <div class="u-bg-primary-white"></div>
                                        <div class="u-bg-secondary-skin"></div>
                                        <div class="u-bg-primary-skin"></div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/logo-second.png"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <p>When using the logo on darker backgrounds, use a full white logo.</p>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-6">
                            <div class="row">
                                <div class="col-12 col-sm-6 s-brandbook__logo">
                                    <div class="s-brandbook__logo-item">
                                        <div class="u-bg-primary-green"></div>
                                        <div class="u-bg-primary-blue"></div>
                                        <div class="u-bg-primary-dark-blue"></div>
                                        <img class="s-brandbook__logo-light"
                                             src="<?php echo get_template_directory_uri() ?>/img/global/openup_logo.png"
                                             alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__logo">
                                    <div class="s-brandbook__logo-item">
                                        <div class="u-bg-primary-green"></div>
                                        <div class="u-bg-primary-blue"></div>
                                        <div class="u-bg-primary-dark-blue"></div>
                                        <img class="s-brandbook__logo-light"
                                             src="<?php echo get_template_directory_uri() ?>/img/global/logo-second.png"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-brandbook__content">
                    <div class="row s-brandbook__content-box">
                        <div class="col-12 col-lg-6">
                            <h2 class="s-brandbook__title" id="typography">Typography</h2>
                            <div class="s-brandbook__textbox">
                                <p>OpenUp uses two font families:</p>
                                <p class="underline-text">Noto Serif JP</p>
                                <p class="underline-text">Montserrat</p>
                            </div>

                            <div class="s-brandbook__textbox">
                                <p class="bolder-text">Header</p>
                                <p>Noto Serif JP Black</p>
                            </div>
                            <div class="s-brandbook__textbox">
                                <p class="bolder-text">Body text</p>
                                <p>Montserrat Regular</p>
                            </div>
                            <div class="s-brandbook__textbox">
                                <p class="bolder-text">Font sizes</p>
                                <p>There is a ratio between the header and body text that needs to be kept. The header
                                    size should be minimum 1.75x the body size. For example a 18px body text would make
                                    approximately a 32px header size. Preferably the header is at least 2x the body text
                                    size. For all applies that there needs to be a good visible distinction between the
                                    header and body text.</p>
                            </div>
                            <div class="s-brandbook__textbox">
                                <p class="bolder-text">Color</p>
                                <p>See images on the right how to use the fonts with different background colors.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="s-brandbook__textbox-color u-bg-primary-white u-color-primary-dark-blue">
                                <h3 class="s-brandbook__title">Noto Serif JP Black</h3>
                                <span>Montserrat Regular - 70% filled</span>
                            </div>
                            <div class="s-brandbook__textbox-color u-bg-primary-skin u-color-primary-dark-blue">
                                <h3 class="s-brandbook__title">Noto Serif JP Black</h3>
                                <span>Montserrat Regular - 70% filled</span>
                            </div>
                            <div class="s-brandbook__textbox-color u-bg-primary-green u-color-primary-white">
                                <h3 class="s-brandbook__title">Noto Serif JP Black</h3>
                                <span>Montserrat Regular - 100% filled</span>
                            </div>
                            <div class="s-brandbook__textbox-color u-bg-primary-blue u-color-primary-white">
                                <h3 class="s-brandbook__title">Noto Serif JP Black</h3>
                                <span>Montserrat Regular - 100% filled</span>
                            </div>
                            <div class="s-brandbook__textbox-color u-bg-primary-dark-blue u-color-primary-white">
                                <h3 class="s-brandbook__title">Noto Serif JP Black</h3>
                                <span>Montserrat Regular - 100% filled</span>
                            </div>
                            <div class="s-brandbook__textbox-color u-bg-primary-blue u-color-primary-dark-blue">
                                <h3 class="s-brandbook__title">Noto Serif JP Black</h3>
                                <span>Montserrat Regular - 100% filled</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-brandbook__content">
                    <h2 class="s-brandbook__title" id="tone-of-voice">Tone of Voice</h2>
                    <div class="s-brandbook__content-box">
                        <p class="s-brandbook__title-secondary">Four dimensions of tone of voice</p>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Funny vs. serious </p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>We radiate authority and show that we take people seriously. We don't trivialise mental challenges through the use of humour. We can, however, use (word) jokes to keep the content accessible, positive, and light. </p>
                            </div>
                        </div>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Formal vs. casual </p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>We interact in an informal yet professional way. We use words that are easy to understand for everybody. </p>
                            </div>
                        </div>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Respectful vs. irreverent </p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>We write in a respectful manner. We are there for everybody. Therefore, we use inclusive wordings. We don't downplay and treat everybody in a kind, human and truthful manner. </p>
                            </div>
                        </div>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Enthusiastic vs. matter-of-fact</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>We are empathetic, but not too enthusiastic. We don't downplay, but also don't make challenges bigger than they are. Through our content, we provide positivity and inspiration. We use science and research to back up our stories. </p>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box">
                        <p class="s-brandbook__title-secondary">Our tone descriptors</p>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Positive</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Our tone is light and positive. People feel optimistic after interacting with us.</p>
                            </div>
                        </div>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Accessible</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Our tone is accessible and easy to understand. We don't use difficult words.</p>
                            </div>
                        </div>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Empathetic</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Our tone is empathic and compassionate. We don't downplay any feelings. We actively show that we care.</p>
                            </div>
                        </div>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Trusting</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Our tone is professional and trustworthy. We back up our stories with science or the input from one of our psychologists.</p>
                            </div>
                        </div>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Personal</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Our tone is personal. People should feel like they are talking to a friend.</p></div>
                        </div>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Human</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Our tone is respectful and inclusive. Everybody feels heard, seen, and understood.</p>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box">
                        <p class="s-brandbook__title-secondary">Our content is...</p>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Active & vibrant</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>We avoid an overabundance of verbs and use active wordings to keep the content vibrate and energetic. We keep our sentences short and to the point and alternate sentence length to make our texts ‘sing’.</p>
                            </div>
                        </div>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Motivating</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>We want to inspire and motivate people with our stories. After engaging with our content, people feel like they want to get up and do the work that's needed. We provide them with tips, exercises, and insights to feel empowered and inspired. We normalise all mental health challenges so that nobody ever feels alone. Because they aren’t.</p>
                            </div>
                        </div>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Positive</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>People feel confident and optimistic after interacting with our content. We don't talk about problems and dangers but about challenges and solutions. We focus on the positive instead of the negative, on the opportunities instead of the threats. This means we dive into the upside of things and the benefits of working on your mental well-being instead of the downside and what happens if you don’t.</p>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box">
                        <p class="s-brandbook__title-secondary">Numbers, figures, and times</p>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Numbers, figures</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>We write out figures/numbers up to and including twenty, except in the title, for
                                    marketing purposes, and when we indicate times and dates</p>
                            </div>
                        </div>
                        <div class="row s-brandbook__content-voice">
                            <div class="col-12 col-lg-6 text-lg-right">
                                <p class="bolder-text">Time</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Times are indicated as 19:00, and not 7 pm, or 7 o'clock.</p>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box">
                        <p class="s-brandbook__title-secondary">Do’s and Don’ts</p>
                        <div class="row s-brandbook__content-voice s-brandbook__content-tf">
                            <div class="col-12 col-lg-6">
                                <p class="bolder-text">Do’s</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p class="bolder-text">Don’ts</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Keep it informal, which means we use 'je/jij', 'du' and 'tú'</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Use 'u' (NL), 'Sie' (DE), 'Usted' (SP)</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>End each asset on a positive note, solution, or CTA</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>End any content asset without leaving someone feeling inspired, motivated or taken any action</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Use emoticons every now and then</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Overdo emoticons</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Write in an active way. It makes your text energetic and vibrant.</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Use too many verbs and write in a passive manner. It makes an article harder to read.</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Write inclusive and use genderneutral words, such as 'partner' 'psycholoog' (NL), psycholog*innen (DE), psicólogo/a (SP)</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Use non-inclusive words. E.g. ‘He’ and ‘she’ or ‘husband and wife’ assume gender identification.</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Psychologist [name].</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>OpenUp-psychologist, OpenUp psychologist, mindfulness trainer, coach.</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Inspire and motivate people to take action</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Use 'should' or 'must'. People must do nothing.</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Use positive words that lift people up (e.g. challenge instead of problem).</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p>Use negative words that way people down or focus on the negative outcomes. We don’t want people to feel frightened. We want them to feel empowered and inspired.</p>
                            </div>

                        </div>
                    </div>
                    <div class="s-brandbook__content-box">
                        <h2 class="s-brandbook__title">Some examples</h2>
                        <p>- Our OpenUp psychologists are helping you with your daily challenges → Our psychologists help you with your daily challenges</p>
                        <p>- Our masterclasses are inspiring and will give you new insights → Our masterclasses inspire and spark eye-opening insights</p>
                        <p>- Being a working parent can be as physically draining as it is mentally. However, applying some basic health principles to everyday life can be a lifesaver. → Being a working parent comes with challenges, small and big. These basic principles make the difference you need in your everyday life.</p>
                    </div>
                </div>
                <div class="s-brandbook__content">
                    <h2 class="s-brandbook__title" id="images">Photography</h2>
                    <div class="s-brandbook__content-box s-brandbook__content-box-ratio">
                        <p class="bolder-text">Ratio</p>
                        <p>Photo’s without a bleed should be used in one of the following ratio’s</p>
                        <div class="row s-brandbook__content-box u-color-primary-white">
                            <div class="col-6 col-lg-2 s-brandbook__content-ratio">
                                <div>
                                    <span>4:3</span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 s-brandbook__content-ratio">
                                <div>
                                    <span>16:9</span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 s-brandbook__content-ratio">
                                <div>
                                    <span>1:1</span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 s-brandbook__content-ratio">
                                <div>
                                    <span>3:4</span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 s-brandbook__content-ratio">
                                <div>
                                    <span>9:16</span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 s-brandbook__content-ratio">
                                <div>
                                    <span>1:1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box row">
                        <div class="col-12 col-lg-4">
                            <p class="bolder-text">Inclusivity</p>
                            <p>Try to include diverse characters of gender, skin color, and age. Mental Health for all
                                ;)</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-1.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-2.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box row">
                        <div class="col-12 col-lg-4">
                            <p class="bolder-text">Color</p>
                            <p>Not only the subject of the image is important but also the color tone. Try to use kind
                                and warm tones and avoid dark or grey tones. The darker tones are not so welcoming and
                                positive.</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-3.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-4.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box row">
                        <div class="col-12 col-lg-4">
                            <p class="bolder-text">Background</p>
                            <p>Also the background of an image is important, too much noise can be distracting from what
                                you want to communicate with the image. Keep it easy for the eye.</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-5.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-6.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box row">
                        <div class="col-12 col-lg-4">
                            <p>An image can have a calm background but still be distracting. The focus is too much on
                                the ipad / hands / laptop, which all look like one from the dinosaur era.</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-7.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-8.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box row">
                        <div class="col-12 col-lg-4">
                            <p class="bolder-text">Stigmatizing images</p>
                            <p>Don’t use stigmatizing images, they don’t communicate feelings of understanding towards
                                clients. Use subtle (real) emotions on people’s expressions, not acted emotions. You can
                                also use methaphors to communicate, for example a rough sea can be a methafor for your
                                exploding head.</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-9.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-10.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-11.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-12.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-13.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-14.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box row">
                        <div class="col-12 col-lg-4">
                            <p class="bolder-text">Stocky photo’s</p>
                            <p>Use relatable people instead of actors / models. Avoid photo’s that look staged and
                                therefor stocky. Use our own people where you can.</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-15.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-16.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-17.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/photo-18.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-brandbook__content">
                    <h2 class="s-brandbook__title" id="illustrations">Illustrations</h2>
                    <div class="s-brandbook__content-box">
                        <div class="row">
                            <p class="col-12 col-lg-8">Where photo’s tell a story literally (unless when using a methafor),
                                illustrations are less direct and therefor suited for a lot of purposes. The same rules for
                                photography also apply to illustrations.</p>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box row">
                        <div class="col-12 col-lg-4">
                            <p class="bolder-text">Humanic illustrations</p>
                            <p class="mb-0">We use an illustration pack that is carefully selected on:</p>
                            <ul class="s-brandbook__illustration-list">
                                <li>having an artistic signature and therefor not being to cartoony and childish</li>
                                <li>not having facial expressions (which often become too cartoony)</li>
                                <li>having multiple characters and scenes</li>
                            </ul>
                            <p>Don’t use or mix (other) illustration styles because the coherence of our branding loses
                                value.</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/illustration-1.png"
                                             alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/illustration-2.png"
                                             alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/illustration-3.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/illustration-4.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box row">
                        <div class="col-12 col-lg-4">
                            <p class="bolder-text">Inclusivity</p>
                            <p>Try to include diverse characters of gender, skin color, and age. Mental Health for all
                                ;)</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/illustration-5.png"
                                             height="276" style="width: auto" alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/illustration-6.png"
                                             alt="">
                                        <p class="s-brandbook-evaluate">
                                            👍
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box row">
                        <div class="col-12 col-lg-4">
                            <p class="bolder-text">Positivity</p>
                            <p>We want to communicate positivity but too much emphasis on it can become meaningless. In
                                the examples shown, ask yourself the question: would a person really be this mega happy
                                after implementing the tips in the article?</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row justify-content-end">
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/illustration-7.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/illustration-8.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 s-brandbook__image-box">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/global/brandbook/illustration-9.jpg"
                                             alt="">
                                        <p class="s-brandbook-evaluate bad-icon">
                                            👍
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-brandbook__content-box row">
                        <div class="col-12 col-lg-4">
                            <p class="bolder-text">Don’t use too much illustrations</p>
                            <p>Where you can use a good photo, use a photo. Illustrations are better used as a second
                                layer of information display. Using too much illlustration creates a cartoony and
                                therefor not so serious apprearance. Try to mix photo’s and illustrations.</p>
                        </div>
                    </div>

                </div>
                <div class="s-brandbook__content">
                    <h2 class="s-brandbook__title" id="icons">Icons</h2>
                    <div class="s-brandbook__content-box row">
                        <p class="col-12 col-lg-8">The branding of OpenUp doesnt use much icons because we already use a lot of illustrations and photo’s. For the OpenUp product (my.openup, dachboard) we use Material Icons and Symbols from Google:
                            <br> <a href="https://fonts.google.com/icons" target="_blank">https://fonts.google.com/icons</a>
                            <br>
                            <br>
                            Make sure to only use the outlined version.</p>
                    </div>
                </div>

            </div>
        </section>

    </main>

<?php get_footer(); ?>