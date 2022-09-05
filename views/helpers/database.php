<?php


    $carimbos = [

            'home' => array(
                'id' => 1,
                'img'=> 'img/carimbos/carimbos_total_transparentes.gif',
                'label' => 'Home - Menu Principal',
            ),
            'info' => array(
                'id' => 2,
                'img'=> 'img/carimbos/info_carimbo.gif',
                'label' => 'Home - Info',
            ),
            'work-diplopia' => array(
                'id' => 3,
                'img'=> 'img/carimbos/carimbo-works-diplopia.png',
                'label' => 'Works - Diplopia',
            ),
            'work-anarquismo-espiritual' => array(
                'id' => 4,
                'img'=> 'img/carimbos/carimbo-works-anarquismo.png',
                'label' => 'Works - Diplopia',
            ),
            'work-letraset2' => array(
                'id' => 5,
                'img'=> 'img/carimbos/carimbo-works-letraset2.png',
                'label' => 'Works - Letra Set 2',
            ),
            'work-ciencia-popular' => array(
                'id' => 6,
                'img'=> 'img/carimbos/carimbo-works-ciencia.png',
                'label' => 'Works - Diplopia',
            ),
            // 'work-ao-paraiso-recuperado' => array(
            //     'id' => 7,
            //     'img'=> 'img/carimbos/carimbo-works-paraiso.png',
            //     'label' => 'Works - Diplopia',
            // ),
            'design' => array(
                'id' => 8,
                'img'=> 'img/carimbos/carimbo-design.png',
                'label' => 'Design',
            ),
            'video' => array(
                'id' => 9,
                'img'=> 'img/carimbos/carimbo-videos.png',
                'label' => 'Vídeos',
            ),
            'duplo' => array(
                'id' => 10,
                'img'=> 'img/carimbos/carimbo-duplo.png',
                'label' => 'Duplo',
            ),

        ];

    $works = [

            'diplopia' => array(
                'id' => 1,
                'img'=> array(
                    '1' => 'img/works/diplopia/1a.jpg',
                    '2' => 'img/works/diplopia/1b.jpg',
                    '3' => 'img/works/diplopia/2a.jpg',
                    '4' => 'img/works/diplopia/2b.jpg',
                    '5' => 'img/works/diplopia/3a.jpg',
                    '6' => 'img/works/diplopia/3b.jpg',
                    '7' => 'img/works/diplopia/4a.jpg',
                    '8' => 'img/works/diplopia/4b.jpg',
                    '9' => 'img/works/diplopia/clearball.gif',
                ),
                'legenda' => [
                    '2' => '<p><br></p>
                    <p>
                    <b>Electroluminescent Red</b><br>
                    Size (HxWxD): 15’’ x 11’’ x 4.5’’ (38 x 28 x 11,5 cm)
                    </p>',
                    '4' => '<p><br></p>
                    <p>
                    <b>Led white</b><br>
                    size (HxWxD): 16.5 x 11 x 4 .5’’ (42 x 28 x 11,5 cm)
                    </p>',
                    '6' => '<p><br></p>
                    <p>
                    <b>Led Red</b><br>
                    size (HxWxD): 16.5 x 11 x 4 .5’’  (42 x 28 x 11,5 cm)
                    </p>',
                    '8' => '<p><br></p>
                    <p>
                    <b>Electroluminescent S</b><br>
                    Size (HxWxD): 15x 11 x 4.5’’ (38 x 28 x 11,5 cm)
                    </p>',
                    '9' => '<p><br></p>
                    <p>
                    <b>Clear ball</b><br>
                    Size (HxWxD): 18 x 15.5 x 4.5’’ (46 x 40 x 11,5 cm)
                    </p>',
                ],
                'label' => '',
                'link' => 'works/diplopia',
                'name' => 'Diplopia',
                'bottom' => '<p>“Diplopia” is an optical-art light-sculpture made of plexiglass, light panels and an optical filter (found in LED televisions) that duplicates the images presented behind it. The duplicated image oscillates and changes as the viewer moves in front of it.</p>
                <p>In a polarized world, these mysterious, sensual, sci-fi inspired objects stand for empathy by enlightening and presenting different points of views in one single object.</p>
                <p><br></p>
                <h4>Edition:</h4>
                <p> 7 original designs with editions of 7 units each in a total of 49 pieces.</p>
                '
            ),

            'anarquismo-espiritual' => array(
                'id' => 2,
                'img'=> array(
                    // '1' => 'img/works/anarquismoespiritual/ae_new.jpg',
                    '2' => 'img/works/anarquismoespiritual/works-anarquismo-espiritual.gif',
                    '3' => 'img/works/anarquismoespiritual/ae-flag.jpg',
                    '4' => 'img/works/anarquismoespiritual/1.jpg',
                    '4' => 'img/works/anarquismoespiritual/2.jpg',
                    '6' => array('video' =>
                            array(
                                    'tipo' => 'youtube',
                                    'embed' => 'jXUhrOQe1lo'
                                )
                        ),
                    '7' => 'img/works/anarquismoespiritual/3.gif',

                ),
                'label' => '',
                'link' => 'works/anarquismo-espiritual',
                'name' => 'Anarquismo Espiritual',
            ),

            'letraset2' => array(
                'id' => 3,
                'img'=> array(
                    '1' => 'img/works/letraset2/1.png',
                    '2' => 'img/works/letraset2/2.png',
                    '3' => 'img/works/letraset2/3.png',
                    '4' => 'img/works/letraset2/escrito_letraset2.png',
                ),
                'label' => '',
                'link' => 'works/letraset2',
                'name' => 'Ciência Popular',
            ),

            'ciencia-popular' => array(
                'id' => 4,
                'img'=> array(
                    '1' => 'img/works/cienciapopular/ciencia-popular-01.jpg',
                    '2' => 'img/works/cienciapopular/ciencia-popular-02.jpg',
                    '3' => 'img/works/cienciapopular/ciencia-popular-03.jpg',
                    '4' => 'img/works/cienciapopular/ciencia-popular-04.jpg',
                    // '5' => 'img/works/cienciapopular/ciencia-popular-06.jpg',
                    '5' => 'img/works/cienciapopular/ciencia-popular-07.jpg',
                    '6' => 'img/works/cienciapopular/ciencia-popular-05.jpg',
                    '7' => 'img/works/cienciapopular/ciencia-popular-description.png'
                ),
                'label' => 'img/works/cienciapopular/works-ciencia-popular-label.png',
                'link' => 'works/cienciapopular',
                'name' => 'Ciência Popular',
            ),

            // 'ao-paraiso-recuperado' => array(
            //     'id' => 5,
            //     'img'=> array(
            //         '1' => 'img/works/paraiso/1.jpg',
            //         '2' => 'img/works/paraiso/2.jpg',
            //         '3' => 'img/works/paraiso/3.jpg',
            //         '4' => 'img/works/paraiso/4.jpg',
            //         '5' => 'img/works/paraiso/5.gif',
            //         '6' => 'img/works/paraiso/6.jpg',
            //         '7' => 'img/works/paraiso/7.jpg',
            //         '8' => 'img/works/paraiso/8.jpg',
            //         '9' => 'img/works/paraiso/9.jpg',
            //         '10' => 'img/works/paraiso/10.jpg',
            //         '11' => 'img/works/paraiso/6 - dead moon.jpg',
            //         '12' => 'img/works/paraiso/11.jpg',
            //         '13' => 'img/works/paraiso/12.jpg',
            //         '14' => 'img/works/paraiso/13.jpg',
            //         '15' => 'img/works/paraiso/14.jpg',
            //         '16' => 'img/works/paraiso/15.jpg',
            //         '17' => 'img/works/paraiso/16.jpg',
            //         '18' => 'img/works/paraiso/17.jpg',
            //         '19' => 'img/works/paraiso/18.jpg',
            //         '20' => 'img/works/paraiso/19.jpg',
            //         '21' => 'img/works/paraiso/20.jpg',
            //         '22' => 'img/works/paraiso/21.jpg',
            //         '23' => 'img/works/paraiso/22.jpg',
            //     ),
            //     'label' => '',
            //     'link' => 'works/ao-paraiso-recuperado',
            //     'name' => 'Ao Paraiso Recuperado',
            // ),

        ];

    $designs = [
        'design' => array(
            'id' => 1,
            'link' => 'design',
            'name' => 'Design',
            'img'=> array(
                '1' => 'img/design/2 - capa_DUPLO_1.jpg',
                '2' => 'img/design/3 - capa_DUPLO_2.jpg',
                '3' => 'img/design/4 - capa_DUPLO_3.jpg',
                '4' => 'img/design/5 - capa_DUPLO_4.jpg',
                '5' => 'img/design/7 - capa_DUPLO_6.jpg',
                '6' => 'img/design/8.gif',
                '7' => 'img/design/9.jpg',
                '8' => 'img/design/11.jpg',
                '9' => 'img/design/12.gif',
                '10' => 'img/design/01.png',
                '12' => 'img/design/a1.gif',
                '13' => 'img/design/b1.gif',
                '14' => 'img/design/AFC_website_3.png',
                '15' => 'img/design/13.gif',
                '16' => 'img/design/15.jpg',
                '17' => 'img/design/17 Camis_completers2.jpg',
                '18' => 'img/design/18 cankro1.jpg',
                '19' => 'img/design/19 DIG_4_Mandibula.gif',
                '20' => 'img/design/20 duplo_hezergovina.jpg',
                '21' => 'img/design/21 duplo_lancamento_ep.jpg',
                '22' => 'img/design/23 k7_crise.jpg',
                '23' => 'img/design/24 Logo_DAMA.jpg',
                '24' => 'img/design/25 Logo_Duplo1.jpg',
                '25' => 'img/design/26 Logo_duplo3_rosa.jpg',
                '26' => 'img/design/27 Logo_Gattopardo.jpg',
                '27' => 'img/design/logo_marcela3.gif',
                '28' => 'img/design/30.jpg',
                '29' => 'img/design/31Logo_Mentira2.jpg',
                '31' => 'img/design/33 RAKTA_1.gif',
                '32' => 'img/design/34 RAKTA_13.jpg',
                '33' => 'img/design/35 RAKTA_15.jpg',
                '34' => 'img/design/36 RAKTA_18.jpg',
                '35' => 'img/design/37 RAKTA_19.jpg',
                '36' => 'img/design/38 RAKTA_22.gif',
                '37' => 'img/design/39 RAKTA_24.jpg',
                '38' => 'img/design/41 rakta2.jpg',
                '39' => 'img/design/42 roloseco1.jpg',
                '40' => 'img/design/43 RS_2.jpg',
                '41' => 'img/design/44 RS_3.jpg',
                '42' => 'img/design/45 RS_4.jpg',
                '43' => 'img/design/46 suda_5p_quadrado.gif',
                '44' => 'img/design/47 suda1.jpg',
                '45' => 'img/design/48 suda2.jpg',
                '46' => 'img/design/49.gif',
                '47' => 'img/design/50.gif',
            ),
        ),

    ];

    $duplos = [
        'duplo' => array(
            'id' => 1,
            'link' => 'duplo',
            'name' => 'Duplo',
            'img'=> array(
                '1' => array('video' =>
                            array(
                                    'tipo' => 'youtube',
                                    'embed' => 'Bzh9HMXPivE'
                                )
                        ),
                '2' => 'img/duplo/2 - capa_DUPLO_1.jpg',
                '3' => 'img/duplo/3 - capa_DUPLO_2.jpg',
                '4' => 'img/duplo/4 - capa_DUPLO_3.jpg',
                '5' => 'img/duplo/5 - capa_DUPLO_4.jpg',
                '6' => 'img/duplo/7b--capa_DUPLO_7_menor_baixa.gif',
                '7' => 'img/duplo/9 duplo_fita_quadrado_menoscontrsaste.gif',
                '8' => array(
                        'link' => ' https://duplopunk.bandcamp.com/',
                        'img' => 'img/duplo/botao_bandcamp.png'
                    ),
            ),
        ),
    ];

    $videos = [

        'duplo-dance' => array(
            'id' => 0,
            'tipo' => 'youtube',
            'embed' => 'Bzh9HMXPivE',
            'label' => 'Duplo - "Dance" (2019)',
        ),

        'residencia-bogota' => array(
            'id' => 1,
            'tipo' => 'youtube',
            'embed' => 'jXUhrOQe1lo',
            'label' => 'Residência "Anarquismo Espiritual y sus obreros especializados" - Bogotá (2019)',
        ),

        'gattopardo' => array(
            'id' => 2,
            'tipo' => 'youtube',
            'embed' => 'Dch_4neWSTY',
            'label' => 'Gattopardo - "Meninos Perdidos" (2019)',
        ),

        'festival-cidade' => array(
            'id' => 3,
            'tipo' => 'vimeo',
            'embed' => '393313959',
            'label' => 'Festival Cidade - Promo Video (2018)',
        ),

        'ntcrat' => array(
            'id' => 4,
            'tipo' => 'youtube',
            'embed' => '5kc1newGDLA',
            'label' => 'Documentário NTCRAT (2018)',
        ),

        'fabiano-rodrigues' => array(
            'id' => 5,
            'tipo' => 'vimeo',
            'embed' => '153621499',
            'label' => 'Fabiano Rodrigues - Rolo Seco Discos 004 (2016)',
        ),

        'garage-fuzz-clipe' => array(
            'id' => 6,
            'tipo' => 'vimeo',
            'embed' => '141933629',
            'label' => 'Garage Fuzz - "Fast Relief" (2015)',
        ),

        'rakta' => array(
            'id' => 7,
            'tipo' => 'vimeo',
            'embed' => '66842129',
            'label' => 'Rakta - Ganex e Blackmob (2013)',
        ),

        'superchunk' => array(
            'id' => 8,
            'tipo' => 'vimeo',
            'embed' => '35269054',
            'label' => 'Superchunk - "Learned to Surf"  (2012)',
        ),

        'viaje-musical' => array(
            'id' => 9,
            'tipo' => 'vimeo',
            'embed' => '64171804',
            'label' => 'Viaje Musical -  Argentinian Art Tour (2012)',
        ),

        'boom-boom-kid' => array(
            'id' => 10,
            'tipo' => 'youtube',
            'embed' => '1h39x3yC1x4',
            'label' => 'DVD BOOM BOOM KID - "Incendios de un Pitecantropo Sin Iutub" (2011)',
        ),

        'garage-fuzz-doc' => array(
            'id' => 11,
            'tipo' => 'youtube',
            'embed' => 'T8wNdvLEu5A',
            'label' => 'Garage Fuzz - [NOT] Missing Memories (2009)',
        ),

            // 'deturpacao' => array(
            //     'id' => 7,
            //     'tipo' => 'vimeo',
            //     'embed' => '36975047',
            //     'label' => 'Deturpação',
            // ),

            // 'teaser-dvd' => array(
            //     'id' => 8,
            //     'tipo' => 'vimeo',
            //     'embed' => '28332211',
            //     'label' => 'Teaser DVD',
            // ),


            // 'os-pedreiros' => array(
            //     'id' => 10,
            //     'tipo' => 'youtube',
            //     'embed' => 'Sfz7pWJAWLI',
            //     'label' => 'Os Pedreiros',
            // ),

            // 'brainwashed-kids' => array(
            //     'id' => 11,
            //     'tipo' => 'vimeo',
            //     'embed' => '51974722',
            //     'label' => 'Brainwashed Kids',
            // ),

            // 'chamada-mtv' => array(
            //     'id' => 12,
            //     'tipo' => 'vimeo',
            //     'embed' => '28159173',
            //     'label' => 'Chamada MTV',
            // ),

            // 'tunel-paulista' => array(
            //     'id' => 13,
            //     'tipo' => 'youtube',
            //     'embed' => 'A0_CKGByGQc',
            //     'label' => 'Tunel Paulista',
            // ),

            // 'meu-zine' => array(
            //     'id' => 14,
            //     'tipo' => 'youtube',
            //     'embed' => 'fCSdrU55100',
            //     'label' => 'Menu Zine',
            // ),

          ];

?>
