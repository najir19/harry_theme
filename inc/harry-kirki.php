<?php
new \Kirki\Panel(
    'harry_panel',
    [
        'priority' => 10,
        'title' => esc_html__('Harry Options', 'harry'),
        'description' => esc_html__('Harry Options', 'harry'),
    ]
);

// harry header info
function harry_header_info()
{
    new \Kirki\Section(
        'harry_header_info',
        [
            'title' => esc_html__('Header ', 'harry'),
            'description' => esc_html__('Harry Header Info', 'harry'),
            'panel' => 'harry_panel',
            'priority' => 160,
        ]
    );
    new \Kirki\Field\Select(
        [
            'settings' => 'harry_deafault_header_select_setting',
            'label' => esc_html__('Select Harry Dafault Header', 'harry'),
            'section' => 'harry_header_info',
            'default' => 'header-style-1',
            'placeholder' => esc_html__('Choose an header style', 'harry'),
            'choices' => [
                'header-style-1' => esc_html__('Header Style 01', 'harry'),
                'header-style-2' => esc_html__('Header Style 02', 'harry'),
                'header-style-3' => esc_html__('Header Style 03', 'harry'),
                'header-style-4' => esc_html__('Header Style 04', 'harry'),
                'header-style-5' => esc_html__('Header Style 05', 'harry'),
            ],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_email',
            'label' => esc_html__('Enter Email Address', 'harry'),
            'section' => 'harry_header_info',
            'default' => esc_html__('info@example.com', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_phone',
            'label' => esc_html__('Enter Phone Number', 'harry'),
            'section' => 'harry_header_info',
            'default' => esc_html__('+964 742 44 763', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_timing',
            'label' => esc_html__('Enter Your Timing', 'harry'),
            'section' => 'harry_header_info',
            'default' => esc_html__('Sunday-Thures 10am-07pm', 'harry'),
            'priority' => 10,
        ]
    );
}
harry_header_info();



// harry footer info
function harry_footer_info()
{
    new \Kirki\Section(
        'harry_footer_info',
        [
            'title' => esc_html__('Footer ', 'harry'),
            'description' => esc_html__('Harry Footer Info', 'harry'),
            'panel' => 'harry_panel',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_footer_copyright',
            'label' => esc_html__('Copyright Text', 'harry'),
            'section' => 'harry_footer_info',
            'default' => esc_html__('© 2022 Harry All Rights Reserved.', 'harry'),
            'priority' => 10,
        ]
    );
}
harry_footer_info();

// harry breadcrumb bg section 
function harry_breadcrumb_section()
{
    new \Kirki\Section(
        'harry_blog_option',
        [
            'title' => esc_html__('Blog ', 'harry'),
            'description' => esc_html__('Blog section', 'harry'),
            'panel' => 'harry_panel',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'harry_breadcrumb_bg',
            'label' => esc_html__('Breadcrumb BG', 'harry'),
            'description' => esc_html__('Please Change or Upload Your Breadcrumb BG', 'harry'),
            'section' => 'harry_blog_option',
        ]
    );
}
harry_breadcrumb_section();



// harry side bar info
function harry_sidebar_info()
{
    new \Kirki\Section(
        'harry_sidebar_info',
        [
            'title' => esc_html__('Harry Sidebar Info', 'harry'),
            'description' => esc_html__('Harry Sidebar Info', 'harry'),
            'panel' => 'harry_panel',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_sidebar_email',
            'label' => esc_html__('Enter Sidebar Email Address', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => esc_html__('info@example.com', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_sidebar_phone',
            'label' => esc_html__('Enter Sidebar Phone Number', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => esc_html__('+964 742 44 763', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_sidebar_button',
            'label' => esc_html__('Sidebar Button', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => esc_html__('Getting Started', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_sidebar_button_url',
            'label' => esc_html__('Header sidebar button url', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'harry_switch_shape',
            'label' => esc_html__('Shape Switch', 'harry'),
            'description' => esc_html__('Shape Switch control', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => 'on',
            'choices' => [
                'on' => esc_html__('Enable', 'harry'),
                'off' => esc_html__('Disable', 'harry'),
            ],
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'harry_switch_logo',
            'label' => esc_html__('Side logo Switch', 'harry'),
            'description' => esc_html__('Side logo Switch control', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => 'on',
            'choices' => [
                'on' => esc_html__('Enable', 'harry'),
                'off' => esc_html__('Disable', 'harry'),
            ],
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'harry_switch_menu',
            'label' => esc_html__('Side menu switch', 'harry'),
            'description' => esc_html__('Side menu switch control', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => 'on',
            'choices' => [
                'on' => esc_html__('Enable', 'harry'),
                'off' => esc_html__('Disable', 'harry'),
            ],
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'harry_switch_social',
            'label' => esc_html__('Side Social Switch', 'harry'),
            'description' => esc_html__('Side Social switch control', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => 'on',
            'choices' => [
                'on' => esc_html__('Enable', 'kirki'),
                'off' => esc_html__('Disable', 'kirki'),
            ],
        ]
    );
}
harry_sidebar_info();

// harry logo section
function harry_logo_section()
{
    new \Kirki\Section(
        'harry_logo',
        [
            'title' => esc_html__('Logo', 'harry'),
            'description' => esc_html__('Header Logo', 'harry'),
            'panel' => 'harry_panel',
            'priority' => 160,
        ]
    );
    // Harry Main logo
    new \Kirki\Field\Image(
        [
            'settings' => 'harry_logo',
            'label' => esc_html__('Logo', 'harry'),
            'description' => esc_html__('Please Upload Your Logo', 'harry'),
            'section' => 'harry_logo',
            'default' => get_template_directory_uri() . '/assets/img/logo/logo-black.svg',
        ]
    );
    // Harry Search logo
    new \Kirki\Field\Image(
        [
            'settings' => 'harry_search_logo',
            'label' => esc_html__('Search Logo', 'harry'),
            'description' => esc_html__('Please Upload Your Logo', 'harry'),
            'section' => 'harry_logo',
            'default' => get_template_directory_uri() . '/assets/img/logo/logo.svg',
        ]
    );
    // Harry Sidebar Logo
    new \Kirki\Field\Image(
        [
            'settings' => 'harry_sidebar_logo',
            'label' => esc_html__('Sidebar Logo', 'harry'),
            'description' => esc_html__('Please Upload Your Logo', 'harry'),
            'section' => 'harry_logo',
            'default' => get_template_directory_uri() . '/assets/img/logo/logo-black.svg',
        ]
    );
}
harry_logo_section();

// harry social section
function harry_social_section()
{
    new \Kirki\Section(
        'harry_social_section',
        [
            'title' => esc_html__('Harry Social Section', 'harry'),
            'description' => esc_html__('Harry Social Section', 'harry'),
            'panel' => 'harry_panel',
            'priority' => 160,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_facebook',
            'label' => esc_html__('Facebook', 'harry'),
            'section' => 'harry_social_section',
            'default' => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_twitter',
            'label' => esc_html__('Twitter', 'harry'),
            'section' => 'harry_social_section',
            'default' => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_youtube',
            'label' => esc_html__('Youtube', 'harry'),
            'section' => 'harry_social_section',
            'default' => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_linkedin',
            'label' => esc_html__('Linkedin', 'harry'),
            'section' => 'harry_social_section',
            'default' => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );
}
harry_social_section();
