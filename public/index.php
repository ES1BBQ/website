<?php
    require_once dirname(__DIR__) . '/src/bootstrap.php';

    $page = array(
        'site_lang' => 'et',
        'site_title' => 'ES1BBQ',
        'site_description' => 'ES1BBQ Homepage',
        'site_keywords' => implode(',',array(
            'es1bbq',
            'erau',
            'ham',
            'radio',
            'amateur',
            'callsign',
            'qrz',
            'qth',
            'qsl',
            'cq',
            'qrzcq',
            'logbook',
            'antenna',
        )),
        'page_blocks' => array(
            array(
                'block_type' => $block_links,
                'block_title' => 'Isiklik',
                'block_links' => array(
                    array(
                        'url' => 'https://log.es1bbq.eu',
                        'title' => 'Minu logid ja logitööriistad',
                    ),
                    array(
                        'url' => 'https://www.dxinfocentre.com/tropo_eeu.html',
                        'title' => 'Troposfääriliste levitingimuste ennustus',
                        'target' => '_blank'
                    ),
                    array(
                        'url' => 'https://sond.ee',
                        'title' => 'Raadiosondid',
                    ),
                )
            ),
            array(
                'block_type' => $block_links,
                'block_title' => 'Muu',
                'block_links' => array(
                    array(
                        'url' => 'https://dmr.ee',
                        'title' => 'DMR.ee',
                        'target' => '_blank'
                    ),
                )
            ),
        ),
    );

    $tpl = $mustache->loadTemplate('template');
    echo $tpl->render($page);
